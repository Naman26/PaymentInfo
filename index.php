<?php
require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo  '<p class="login-status">Welcome '.$_SESSION['userUid'].'!</p> <br />
                                <p> From here we can probably add links to travel booking and pre-parking, like in the homework</p>';
                        echo '<div class="booking-information">
                        <p> Please choose a travel destination</p>
						<div class="flight-selection">
						<form action="travelbooking.php" id="travelId" method="post">
							<select name="current" class="selection-box">
								<option value="" disabled selected>Location Here</option>
								<option value="Atlanta">Atlanta</option>
								<option value="Dallas">Dallas</option>
								<option value="New York City">New York City</option>
								<option value="Los Angeles">Los Angeles</option>
								<option value="D.C.">D.C.</option>
								<option value="Miami">Miami</option>
								</select>
									<select name="destination" class="selection-box">
								<option value="" disabled selected>Destination</option>
								<option value="Atlanta">Atlanta</option>
								<option value="Dallas">Dallas</option>
								<option value="New York City">New York City</option>
								<option value="Los Angeles">Los Angeles</option>
								<option value="D.C.">D.C.</option>
								<option value="Miami">Miami</option>
								</select>
								<input type="submit" name="Go" value="GO" class="submit-button">
						</form>
						</div>
                        <p> Please book pre-parking services -> <a href="preparking.php" target="_blank">Click Here</a></p>
                        </div>';
                    }
                    else {
                        echo '<p class="login-status">You are logged out!</p>';
                    }
					
                ?>
            </section>
        </div>
    </main>

<?php
require "footer.php";
?>