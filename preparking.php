<?php
require "header.php";
?>
<!DOCTYPE html>
<html>
<head>
<style>
img.image{
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
  height: 150px;
}

.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

.tooltip1 {
  position: relative;
  display: inline-block;
}

.tooltip1 .tooltiptext1 {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip1:hover .tooltiptext1 {
  visibility: visible;
}
</style>
</head>
<body>

<main>
    <div class="wrapper-main">
    	<br><br>
        <h3>Parking Lot 1</h3>
        <img src="Parking1.jpg" class="image">
        
        <p>Availability:</p> 
        <div class="tooltip"><a href="parkingPayment.php">7am-7pm</a>
          <span class="tooltiptext">$7/hr</span>
        </div> 

        <div class="tooltip1"><a href="parkingPayment1.php">7pm-12am</a>
          <span class="tooltiptext1">FREE</span>
        </div> 
        <br><br>
        <h3>Parking Lot 2</h3>
        <img src="Parking2.jpg" class="image">
        <p>Availability:</p> 
        <div class="tooltip"><a href="parkingPayment.php">7am-7pm</a>
          <span class="tooltiptext">$7/hr</span>
        </div> 

        <div class="tooltip1"><a href="parkingPayment1.php">7pm-12am</a>
          <span class="tooltiptext1">FREE</span>
        </div> 
        <br><br>
        <h3>Parking Lot 3</h3>
        <img src="Parking3.jpg" class="image">
        <p>Availability:</p> 
        <div class="tooltip"><a href="parkingPayment.php">7am-7pm</a>
          <span class="tooltiptext">$7/hr</span>
        </div> 

        <div class="tooltip1"><a href="parkingPayment1.php">7pm-12am</a>
          <span class="tooltiptext1">FREE</span>
        </div> 
    </div>
</main>
<?php
require "footer.php";
?>
</body>
</html>