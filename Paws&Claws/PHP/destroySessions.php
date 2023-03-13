<?php
    // Start the session
    session_start();
    
    $username = $_SESSION['username'];

    // Clear the session data
    session_unset();
    session_destroy();
?>
<html>
    <head>
        <title>Paws & Claws!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity=
        "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="CSS/login.css">
        <script defer
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <script defer
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
            integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
            crossorigin="anonymous">
        </script>
        <script defer src="JS/main.js"></script>
        <script defer src="JS/login.js"></script>
    </head>
    <body>
        <header class="jumbotron text-center">
            <h1 class="display-4">Bye <?php echo $username ?>!</h1>
            <h2>Redirecting in 5 seconds...</h2>
        </header>
        <?php include "PHP/footer.inc.php" ?>
    </body>
</html>