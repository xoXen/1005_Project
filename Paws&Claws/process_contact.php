<?php
$email = $errorMsg = "";
$success = true;


$emailcheck = empty(trim($_POST["email"]));

$namecheck = empty(trim($_POST["name"]));
$namelengthcheck = strlen(trim($_POST["name"]));
$messagelengthcheck = strlen($_POST["message"]);


$msgcheck = empty(trim($_POST["msg"]));

if ($emailcheck)
    {
        $errorMsg .= "Email is required.<br>";
        $success = false;
    }
else {
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $errorMsg .= "Invalid Email Format. <br>";
        $success = false;
    }
    else{
        $email = sanitize_input($_POST["email"]);
    }
}

if ($namecheck){
    $errorMsg .= "Name is required. <br>";
    $success = false;
}
else if($namelengthcheck > 45){
    $errorMsg .= "Name can only have a maximum of 45 characters. <br>";
    $success = false;
}
else{
    $name = sanitize_input($_POST["name"]);
}




if ($msgcheck) {
    $errorMsg .= "Message cannot be empty. <br>";
    $success = false;
}
else if($messagelengthcheck > 2000){
    $errorMsg .= "Message can only be a maximum of 2000 characters. <br>";
    $success = false;
}
else{
    $msg = sanitize_input($_POST["msg"]);
}


if($success){
    saveMemberToDB($msg);
//    echo $_POST['pwd'];
}



//Helper function that checks input for malicious or unwanted content.
function sanitize_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    
/*
* Helper function to write the member data to the DB
*/


function saveMemberToDB() { 
    global $name, $email, $msg, $errorMsg, $success;
// Create database connection.        
    $config = parse_ini_file('/var/www/private/db-config.ini');
    $servername = $config['servername'];
    $username = $config['username'];
    $password = $config['password'];
    $dbname = $config['dbname'];
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
        
    
// Check connection   
    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;        
        $success = false;
    } 
    else {

// Prepare the statement:
        $stmt = $conn->prepare("INSERT INTO pnc_contact (name, email, message) VALUES (?, ?, ?)");
// Bind & execute the query statement:        
        $stmt->bind_param("sss", $name, $email, $msg);   

        # Excecute your query        
        if (!$stmt->execute()) {
            $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;            
            $success = false;
        }        
        $stmt->close();
    }
    $conn->close();
    
 }



?>

<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="utf-8">

        <!--jQuery-->
        <script defer
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <!-- Custom JS -->
        <script defer src="js/main.js"></script>
        <script defer src="js/contact.js"></script>
        <!--Bootstrap JS-->
        <script defer
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
            integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
            crossorigin="anonymous">
        </script>
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity=
        "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
        <link rel="stylesheet" href="css/contact.css">
        <title>Paws & Claws</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include "PHP/nav.inc.php";?>
        <?php
        if ($success) {
            echo " <br><br><main class='container'>";
            echo "<h3>Thank you for contacting us, " . $name .". We will get back to you shortly</h4>";
            echo "<form action='index.php'>";
            echo "<input class='btn btn-success' type='submit' value='Home' /></form><br><br>";
        } else {
            echo " <br><br><main class='container'>";
            echo "<h1> Oops! </h1>";
            echo "<h3>The following input errors were detected:</h4>";
            echo "<p>" . $errorMsg . "</p>";
            echo "<form action='contact.php'>";
            echo "<input class='btn btn-danger' type='submit' value='Return to Contact' /></form><br><br>";
        }
        ?>
    </body>
    <?php include "footer.inc.php";?>
</html>