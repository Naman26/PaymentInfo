<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Login test webpage">
        <meta name="author" content="Harsh Bhatt">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log In</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <nav class="nav-header-main">
                <a class="header-logo" href="#">
                    <img src="images/logo.png" alt="logo">
                </a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    
                </ul>
                <div class="header-login">
                    <?php 
                        if (isset($_SESSION['userId'])) {
                            echo '<form action="includes/logout.inc.php">
                            <button class="myButton" type="submit" name="logout-submit">Logout</button>
                        </form>';
						//Cart Button
						echo'<a href="checkout.php"><img src="images/shopping_cart.png" class="shopping-cart"></a>';
                        }
                        else {
                            echo '<form action="includes/login.inc.php" method="post">
                            <input class="inputField" type="text" name="mailuid" placeholder="Username/E-mail...">
                            <input class="inputField" type="password" name="pwd" placeholder="Password...">
                            <button class="myButton" type="submit" name="login-submit">Login</button>
                        </form>
                        <a href="signup.php">Signup</a>';
                        }
                    ?>
                    
                    
                </div>
            </nav>
        </header>