<?php
require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Sign up</h1>
                <?php 
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyfields") {
                            echo '<p class="signup-error"> Fill in all fields!</p>';
                        }
                        else if ($_GET['error'] == "invaliduidmail") {
                            echo '<p class="signup-error"> Invalid username and e-mail!</p>';
                        }
                        else if ($_GET['error'] == "invaliduid") {
                            echo '<p class="signup-error"> Invalid username</p>';
                        }
                        else if ($_GET['error'] == "invalidemail") {
                            echo '<p class="signup-error"> Invalid e-mail!</p>';
                        }
                        else if ($_GET['error'] == "passwordcheck") {
                            echo '<p class="signup-error"> Your passwords do not match!</p>';
                        }
                        else if ($_GET['error'] == "usertaken") {
                            echo '<p class="signup-error"> Username is already taken!</p>';
                        }
                    }
                    else if ($_GET["signup"] == "success") {
                        echo '<p class="signup-success">Sign up successful! You can now login.</p>';
                    }
                ?>
                <form class="form-signup" action="includes/signup.inc.php" method="post">
                <ul>
                    <li>
                        <label for="uid">Username</label>
                        <input type="text" name="uid" maxlength="100">
                        <span>Enter your desired username here</span>
                    </li>
                    <li>
                        <label for="email">E-mail</label>
                        <input type="email" name="mail" maxlength="100">
                        <span>Enter a valid e-mail address</span>
                    </li>
                    <li>
                        <label for="pwd">Password</label>
                        <input type="password" name="pwd" maxlength="100">
                        <span>Enter a password</span>
                    </li>
                    <li>
                        <label for="pwd-repeat">Repeat Password</label>
                        <input type="password" name="pwd-repeat" maxlength="100">
                        <span>Re-enter your password</span>
                    </li>
                    <li>
                        <button type="submit" name="signup-submit">Signup</button>
                    </li>
                </ul>
                </form>
            </section>
        </div>
    </main>

<?php
require "footer.php";
?>