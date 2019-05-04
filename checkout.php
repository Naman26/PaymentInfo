<?php
require "header.php";
require "includes/dbh.inc.php";
?>
<!-- For all of the placeholder's, we can use the information from the dB. For now, its just test data-->
<div class="checkout-box">
    <div class="row">
    <div class="col-75">
        <div class="container">
        <form action="/action_page.php">
        
            <div class="row">
            <div class="col-50">
                <h3>Billing Address</h3>
                <label class="checkout-label" for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input class="checkout" type="text" id="fname" name="firstname" placeholder="Lewis Henry">
                <label class="checkout-label" for="email"><i class="fa fa-envelope"></i> Email</label>
                <input class="checkout" type="text" id="email" name="email" placeholder="lhenry23@gsu.edu">
                <label class="checkout-label" for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input class="checkout" type="text" id="adr" name="address" placeholder="Sample Address">
                <label class="checkout-label" for="city"><i class="fa fa-institution"></i> City</label>
                <input class="checkout" type="text" id="city" name="city" placeholder="Georgia">

                <div class="row">
                <div class="col-50">
                    <label class="checkout-label" for="state">State</label>
                    <input class="checkout" type="text" id="state" name="state" placeholder="GA">
                </div>
                <div class="col-50">
                    <label class="checkout-label" for="zip">Zip</label>
                    <input class="checkout" type="text" id="zip" name="zip" placeholder="10001">
                </div>
                </div>
            </div>

            <div class="col-50">
                <h3>Payment</h3>
                <label class="checkout-label" for="fname">Card Type</label>
                <div class="icon-container" id="icon-container">
                
                </div>
                <label class="checkout-label" for="cname">Name on Card</label>
                <input class="checkout" type="text" id="cname" name="cardname" placeholder="Place info from dB">
                <!-- we need to add auto-complete feature here-->
                <label class="checkout-label" for="ccnum">Credit card number</label>
                <input class="checkout" type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                <label class="checkout-label" for="expmonth">Exp Month</label>
                <input class="checkout" type="text" id="expmonth" name="expmonth" placeholder="September">
                <div class="row">
                <div class="col-50">
                    <label class="checkout-label" for="expyear">Exp Year</label>
                    <input class="checkout" type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                    <label class="checkout-label" for="cvv">CVV</label>
                    <input class="checkout" type="text" id="cvv" name="cvv" placeholder="352">
                </div>
                </div>
            </div>
            
            </div>
            <label class="checkout-label" >
            <input class="checkout" type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
            </label>
            <input type="submit" value="Continue to checkout" class="btn">
        </form>
        </div>
    </div>
    <div class="col-25">
        <div class="container">
            <!-- we need to display infromation from the database here, rn its just test data-->
        <h4>Your Cart<span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
       <?php 
		if(isset($_SESSION['totalCost'])) {
			foreach($_SESSION['shoppingCart'] as $items ) {
				echo 'ID:'.$items["flight Id"]. ' qty:' . $items["amount"].' cost:'.$items["cost"].'<br>';
			}
			echo' <hr> <p>Total <span class="price" style="color:black"><b>$'.$_SESSION['totalCost'].'</b></span></p>';
			
		}
		else {
			echo'Your Cart Is Empty.';
			echo' <hr> <p>Total <span class="price" style="color:black"><b>$0</b></span></p>';
		}
	   ?>
       
        </div>
    </div>
    </div>
</div>

<?php
require "footer.php";
?>