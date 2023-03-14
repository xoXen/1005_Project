<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html lang="en">
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
        <?php
        include "PHP/nav.inc.php";
        ?>
        <main class="container">
            <h1>Contact Us</h1>
            <p>
                You may also call the clinic at 6123 4567 or drop us an <a href = mailto: pawsnclaws@gmail.com">email</a>

            </p>
            <form action="process_contact.php" method="post">

            <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" id="name" required maxlength="45" name="name"
                placeholder="Enter your name">
            </div>
            <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" id="email" required name="email"
                placeholder="Enter email">
            </div>
            <div class="form-group">
            <label for="text">Message:</label>
            <input class="form-control" type="text" id="msg" required name="msg"
                placeholder="Enter message">
            </div>
                
            <div class="form-check">
                <label>
                    <input type="checkbox" required name="agree">
                    I <strong>Agree</strong> to be contacted at the above email address.
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
        </form>
</main>
<?php
include "PHP/footer.inc.php";
?>
</body>