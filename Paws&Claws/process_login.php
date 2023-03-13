<?php
session_start();

$email = $password = $errorMsg = "";
$success = true;


if (empty($_POST["email"])) {
    // .= string operator converts values to string
    $emailErrorMsg .= "Email is required. <br>";
    $success = false;
}
else {
    $email = sanitizeInput($_POST["email"]);
 
    //check if email entered is well formed
    //can use filter_input() also
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $success = false;
    }
}

if (empty($_POST["pwd"])) {
    // .= string operator converts values to string
    $success = false;
}
else {
    //hash pw for future use 
//    $hashedpw = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
}

//check input for malicious or unwanteed content
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);    
    $data = htmlspecialchars($data);
    return $data;
}

//Authenticate login
function authenticateUser() {
    global $fname, $lname, $email, $hashedpw, $errorMsg, $success;
    
     //create database connection
    $config = parse_ini_file('../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
    echo "test1";
    //check connection
    if ($conn -> connect_error) {
        $errorMsg = "Connection failed: " . $conn -> connect_error;
        $success = false;
        echo "test2";
    }
    else {
        echo "test3";
        //prepare the statement, protect against sql injection
        $stmt = $conn->prepare("SELECT * FROM pnp_members WHERE email=?");
        //bind and execute the statement
        $stmt->bind_param("s", $email);
        if (!$stmt -> execute()) {
            $errorMsg = "Execute failed: (" . $stmt - errno. ")" . $stmt -> error;
            $success = false;
        }
        //get the output result from the sql statement
        $result = $stmt->get_result();
        //if the result is more than 0
        if($result->num_rows>0) {
            echo "test4";
            //email field shld be unique so it should only have 1 result
            $row = $result->fetch_assoc();
            var_dump($row);
            $fname = $row["firstName"];
            $lname = $row["lastName"];
            $hashedpw = $row["password"];
            
            $_SESSION['mid'] = $row["memberID"];
            $_SESSION['username'] = $fname;

            
            //check if the pw matches
            if (!password_verify($_POST["pwd"], $hashedpw)) {
                $errorMsg = "Email not found or password does not match";
                $success = false;
            }
            
            if ($success) {
                header('Location: /index.php');
            }
        }
        else {
            $errorMsg = "Email not found or password does not match";
            $success = false;
        }
        $stmt->close();
    }
    
    //close the connection after saving
    $conn->close();
}

if($success) {
    authenticateUser();
}

?>

<html>
    <head>
        <title>World of Pets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity=
        "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/main.css">
        <!--jQuery-->
        <!-- defer tells the browser to wait until complete webpage has been 
           loaded and parsed before loading javascript -->
        <script defer
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <!--Bootstrap JS-->
        <script defer
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
            integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
            crossorigin="anonymous">
        </script>
        <!-- Custom JS -->
        <script defer src="JS/main.js"></script>
    </head>
    <body>
        <hr class="container">
        <section class="container">
        <?php
            if($success) {
                echo "<h4>Login successful!</h4>";
                echo "<h5>Welcome back, " . $fname . " " . $lname . "</h5>";
        ?>
        <div class="form-group">
            <a href="index.php">
               <button class="btn btn-success" type="button">Return to Home</button>
            <a/>
        </div>
        <?php
            }
            else {
                echo "<h3>Oops!</h3>";
                echo "<h4>The following errors were detected: </h4>";
                echo "<p>" . $errorMsg . "</p>";
        ?>
        <div class="form-group">
            <a href="index.php">
                <button class="btn btn-warning" type="button">Return to Login</button>
            </a>
        </div>
        <?php
            }
        ?>
        </section>
        <?php include "footer.inc.php"; ?>
    </body>
</html>
