<section id="regContainer" class="container">
    <div id="regModal" class="modal">
        <div class="modal-reg">
            <div class="container">
                <div class="row">
                    <div id="regModalLeft" class="col-sm">
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
                            <div class="buttonsContainer">
                                <div class="form-group">
                                    <button class="btn btn-outline-primary" type="submit">Register</button>
                                </div>
                                <div class="form-group">
                                    <button id="regBtn" onClick="openBtn()" class="btn btn-outline-primary" type="button">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="regModalRight" class="col-sm">
                        <span onClick="closeBtn()" class="close">&times;</span>
                    </div>
                </div>                        
            </div>                        
        </div>
    </div>
</section>