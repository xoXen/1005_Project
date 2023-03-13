<section id="loginContainer" class="container">
    <div id="loginModal" class="modal">
        <div class="modal-login">
            <div class="container">
                <div class="row">
                    <div id="loginModalLeft" class="col-sm">
                        <h1>Member Login</h1>
                        <p>
                            Existing members log in here. For new members, please go to the
                            <a href="register.php">Sign Up page</a>.
                        </p>
                        <form action="process_login.php" method="post">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input class="form-control" type="password" id="pwd" name="pwd" placeholder="Enter password" required>
                            </div>
                            <div class="buttonsContainer">
                                <div class="form-group">
                                    <button class="btn btn-outline-primary" type="submit">Login</button>
                                </div><div class="form-group">
                                    <button id="regBtn" onClick="openRegBtn()" class="btn btn-outline-primary" type="button">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="loginModalRight" class="col-sm">
                        <span onClick="closeBtn()" class="close">&times;</span>
                    </div>
                </div>                        
            </div>                        
        </div>
    </div>
</section>
