<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Payment Portal</title>
    <script type="text/javascript" src="formChecking.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.8.0/p5.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>
    <link rel="stylesheet" href="styleP.css">
</head>
<body>
<?php
require "header.php";
?>
<main>
    <div id="form">
        <!--<h3>For 11:00 am  to 4:00 pm<br>-->
        <h3>Please fill out the Payment details</h3>
        <h4>Time Chosen: 7pm-12am</h4>
        <form name="myForm" action="preparking.php" onsubmit="return validateForm()" method="post">
            Name*: <input type="text" name="fname"><br>
            License Plate*:<input type="text" name = "lNumber"><br>
            Phone Number*: <input type="text" name="pNumber"><br>
            Please choose a Payment method: <br><br>
            <!-- Set up a container element for the button -->
            <div id="paypal-button-container"></div>

            <script>
                // Render the PayPal button into #paypal-button-container
                paypal.Buttons({
                    // Set up the transaction
                    createOrder: function(data, actions) {
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: '0.01'
                                }
                            }]
                        });
                    },
                    // Finalize the transaction
                    onApprove: function(data, actions) {
                        return actions.order.capture().then(function(details) {
                            // Show a success message to the buyer
                            alert('Transaction completed by ' + details.payer.name.given_name + '!');
                        });
                    }
                }).render('#paypal-button-container');
            </script>
            <!-- Include the PayPal JavaScript SDK -->


            <input id="submitButton" type="submit" value="Submit">
        </form>
    </div>
</main>
<?php
require "footer.php";
?>
</body>
</html>