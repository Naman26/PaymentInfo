<?php
require "header.php";
require "includes/dbh.inc.php";
?>

<main>
	
    <div class="wrapper-main">
        <?php
		 if (isset($_SESSION['userId'])) {
			 	if(isset($_POST['Go'])) {
							$_SESSION['currentPosition']=$_POST['current'];
							$_SESSION['currentDestination']=$_POST['destination'];
						}
				if(!isset($_SESSION['shoppingCart'])) {
					
					$_SESSION['shoppingCart']=array();
				}
				if(isset($_POST['cart'])) {
					//!in_array($_POST['cart'],$_SESSION['shoppingCart']) 
					if($_POST['amountPurchase'] > 0) {
						$sql="SELECT * FROM flights WHERE flightId=".$_POST['cart'];
						$results=mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($results);
						array_push($_SESSION['shoppingCart'],array("flight Id" => $_POST['cart'], "amount" => $_POST['amountPurchase'], "cost" =>$_POST['amountPurchase']*$row["cost"]));
					}
				}
			$current =$_SESSION['currentPosition'];
			$destination=$_SESSION['currentDestination'];
			$sql="SELECT * FROM flights WHERE currentPosition='$current' AND currentDestination='$destination'";
			$results =mysqli_query($conn,$sql);
			echo' 
			<table>
				<tr>
				<th>Fight ID</th>
				<th>Flight Location</th>
				<th>Flight Destination</th>
				<th>Date</td>
				<th>Available Seats</th>
				<th>Cost</th>
				<th>Add to Cart</th>
				</tr>';
			while($row = mysqli_fetch_array($results)) {
				echo'
				<tr>
				<td>'.$row["flightId"].'</td>
				<td>'.$row["currentPosition"].'</td>
				<td>'.$row["currentDestination"].'</td>
				<td>'.$row["date"].'</td>
				<td>'.$row["capacity"].'</td>
				<td>$'.$row["cost"].'USD</td>
				<td>
					<form method="post">
						<input type="number" min="1" max="'.$row["capacity"].'" name="amountPurchase">
						<button name="cart" onclick="cartNotification();return false;"type="submit"value="'.$row["flightId"].'">Add to Cart</button>
					</form>
				</td>
				</tr>
				';		
		}			
			echo'
			</table>
			';
			//print_r($_SESSION['shoppingCart']);
			if(sizeof($_SESSION['shoppingCart']) > 0) {	
				$_SESSION['totalCost'] = 0;
			echo'<h3>You have '.sizeof($_SESSION['shoppingCart']).' items in your cart.</h3>';
			echo'<table class="shopping-cart">
					<tr>
						<th>Flight ID</th>
						<th>Destination</th> 
						<th>Date</th>
						<th>Qty.</th>
						<th>Cost</th>
					</tr>
			';
			foreach($_SESSION['shoppingCart'] as $items) {
				$_SESSION['totalCost']+=$items["cost"];
				$sql="SELECT * FROM flights WHERE flightId =".$items["flight Id"];
				$results =mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($results);
				echo'<tr><td>'.$items["flight Id"].'</td>
				<td>'.$row["currentPosition"].' to '.$row["currentDestination"].'</td>
				<td>'.$row["date"].'</td>
				<td>'.$items["amount"].'</td>
				<td>'.$items["cost"].'</td></tr>';
			}
			
			echo'</table>';
			echo'
			-----------------------------------------------------------------------------------------------------------------------------<br>
			<p class="login-status">TOTAL COST: $'.$_SESSION['totalCost'].'</p>
			<form action="checkout.php"><input type="submit" value="Go to checkout"> </form>';
			
			}
			
		 }
		 else {
			echo'<p class="login-status">You are logged out!</p>';
		 }
		 
		?>
    </div>
</main>
<?php
require "footer.php";
?>