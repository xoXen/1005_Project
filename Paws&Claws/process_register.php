<?php // 

$email = $emailErrorMsg = "";
$fname = $fnameErrorMsg = "";
$lname = $lnameErrorMsg = "";
$password = $pwErrorMsg = "";
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
        $emailErrorMsg .= "Invalid email format. <br>";
        $success = false;
    }
}

if (!empty($_POST["fname"])) {
    $fname = sanitizeInput($_POST['fname']);
}

if (empty($_POST["lname"])) {
    // .= string operator converts values to string
    $lnameErrorMsg .= "Last name is required. <br>";
    $success = false;
}
else {
    $lname = sanitizeInput($_POST['lname']);
}

if (empty($_POST["pwd"])) {
    // .= string operator converts values to string
    $pwErrorMsg .= "Password is required. <br>";
    $success = false;
}
else {
    //hash pw for future use 
    $hashedpw = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    $hashedcfmpw = password_hash($_POST['pwd_confirm'], PASSWORD_DEFAULT);
    
   if($_POST["pwd"] !== $_POST["pwd_confirm"]) {
       $pwErrorMsg .= "Passwords do not match. <br>";
       $success = false;
   }
}

//check input for malicious or unwanteed content
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);    
    $data = htmlspecialchars($data);
    return $data;
}

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

//write member data to database
function saveMemberToDB() {
    global $fname, $lname, $email, $hashedpw, $errorMsg, $success;
    
    $memberType = "admin";
    $emailNotif = 1;
    $number = 11111;
    
    //create database connection
    $config = parse_ini_file('../private/db-config.ini');
//    var_dump($config);
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    
    //check connection
    if ($conn -> connect_error) {
        echo $errorMsg = "Connection failed: " . $conn -> connect_error;
        $success = false;
    } 
    else {
        //prepare the statement, protect against sql injection
        $stmt = $conn->prepare("INSERT INTO pnp_members (firstName, lastName, email, password, memberType, emailNotification) "
                . "VALUES (?, ?, ?, ?, ?, ?)");
        //bind and execute the statement
        $stmt->bind_param("sssssi", $fname, $lname, $email, $hashedpw, $memberType, $emailNotif);
        if (!$stmt -> execute()) {
            $errorMsg = "Execute failed: (" . $stmt - errno. ")" . $stmt -> error;
            $success = false;
        }
        
        $stmt->close();
    }
    
    //close the connection after saving
    $conn->close();
    
}

if($success) {
    saveMemberToDB();
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
        <?php include "nav.inc.php"; ?>
        <hr class="container">
        <section class="container">
        <?php
            if($success) {
                echo "<h4>Your registeration is successful!</h4>";
                echo "<h5>Thank you for signing up, " . $_POST['fname'] . $_POST['lname'] . "</h5>";
        ?>
        <div class="form-group">
            <button class="btn btn-success" type="button">Log In</button>
        </div>
        <?php
            }
            else {
                echo "<h3>Oops!</h3>";
                echo "<h4>The following errors were detected: </h4>";
                echo "<p>" . $emailErrorMsg . "</p>";
                echo "<p>" . $lnameErrorMsg . "</p>";
                echo "<p>" . $pwErrorMsg . "</p>";
        ?>
        <div class="form-group">
            <a href="register.php">
                <button class="btn btn-danger" type="button">Return to Sign Up</button>
            </a>
        </div>
        <?php
            }
        ?>
        </section>
        <?php include "PHP/footer.inc.php" ?>
    </body>
</html>
