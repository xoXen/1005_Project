<!DOCTYPE html>
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
        <main class="container">
            <h1>Member Registration</h1>
            <p>
                For existing members, please go to the
                <a href="login.php">Sign In page</a>.
            </p>
            <form action="process_register.php" method="post">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input class="form-control" maxlength="45" type="text" id="lname" name="lname" placeholder="Enter last name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input class="form-control" type="password" id="pwd" name="pwd" placeholder="Enter password" required>
                </div>
                <div class="form-group">
                    <label for="pwd_confirm">Confirm Password:</label>
                    <input class="form-control" type="password" id="pwd_confirm" name="pwd_confirm" placeholder="Confirm password" required>
                </div>
                <div class="form-group">
                    <label for="number">Phone Number:</label>
                    <input class="form-control" type="number" id="number" name="number" placeholder="Enter phone number">
                </div>
               <div class="form-check">
                    <label>
                        <input type="checkbox" name="emailNotif">
                        Receive news & updates through Email.
                    </label>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                </div>
            </form>
        </main>
        <?php include "footer.inc.php"; ?>
    </body>
</html>