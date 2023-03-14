<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<!--t
est-->
<?php
session_start();

if (isset ($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $memberID = $_SESSION['mid'];
}

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
        <link rel="stylesheet" href="CSS/footer.css">

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
        <script defer src="JS/login.js"></script>
    </head>
    <body>
        <?php include "PHP/nav.inc.php" ?>
        <!-- expand-[size] -->
        <!--jumbotron is a big box used to call for extra attention-->
        <header class="jumbotron text-center">
            <?php if (isset ($_SESSION['username'])) { ?>
                <h1 class="display-4">Hello <?php echo $username ?>! :)</h1>
                <h2>This is the Paws and Claws home page hehehehe</h2>
            <?php } else { ?>
                <h1 class="display-4">Welcome to World of Pets!</h1>
                <h2>Home of Singapore's Pet Lovers</h2>
            <?php } ?>
        </header>
        <main class="container">
            <?php include "PHP/accBtns.inc.php" ?>
            <section id="dogs">
                <h2>All About Dogs!</h2>
                <div class="row">
                    <article class="col-sm">
                        <h3>Poodles</h3>
                        <figure>
                            <img class="img-thumbnail" src="Images/poodle_small.jpg" alt="Poodle"/>
                            <figcaption>Standard Poodle</figcaption>
                        </figure>
                        <p>
                            Poodles are a group of formal dog breeds, the Standard
                            Poodle, Miniature Poodle and Toy Poodle...
                        </p>
                    </article>
                    <article class="col-sm">
                        <h3>Chihuahua</h3>
                        <figure>
                            <img class="img-thumbnail" src="Images/chihuahua_small.jpg" alt="Poodle"/>
                            <figcaption>Chihuahua</figcaption>
                        </figure>
                        <p>
                            The Chihuahua is the smallest breed of dog, and is named
                            after the Mexican state of Chihuahua...
                        </p>
                    </article>
                </div>
            </section>
            <section id="cats">
                <h2>All About Cats!</h2>
                <div class="row">
                    <article class="col-sm">
                        <h3>Tabby</h3>
                        <figure>
                            <img class="img-thumbnail" src="Images/tabby_small.jpg" alt="Poodle"/>
                            <figcaption>Tabby Cat</figcaption>
                        </figure>
                        <p>
                            A tabby is any domestic cat with an 'M' on its forehead,
                            stripes by its eyes and across its cheeks.
                        </p>
                    </article>
                    <article class="col-sm">
                        <h3>Calico Cat</h3>
                        <figure>
                            <img class="img-thumbnail" src="Images/calico_small.jpg" alt="Callco"/>
                            <figcaption>Calico</figcaption>
                        </figure>
                        <p>
                            A calico cat is a domestic cat with a coat that is typically
                            25% to 75% white and has large orange and black patches.
                        </p>
                    </article>
                </div>
            </section>
        </main>
        <?php include "PHP/footer.inc.php" ?>
    </body>
</html>
