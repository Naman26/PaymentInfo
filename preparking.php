<?php
//require "header.php";
?>
<!DOCTYPE html>
<html>
<head>
<style>
    body{
        margin: auto;
        background-color: #560000;
    }
img.image{
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 200px;
  height: 150px;
}
h1{
    text-align: center;
    padding-top: 20px;
}
.wrapper-main{
    background-color: bisque;
    width: 50%;
    margin: auto;
    padding-left: 50px;
    padding-bottom: 10px;
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

        <h1>Please select from the parking options below</h1><br>
        <h3>Open lot outside Airport</h3>
        <img src="Parking1.jpg" class="image">
        
        <p>Select your time</p>
        <div class="tooltip"><a href="parkingPayment.php">7am-7pm</a>
          <span class="tooltiptext">$10/hr</span>
        </div> 

        <div class="tooltip1"><a href="parkingPayment1.php">7pm-12am</a>
          <span class="tooltiptext1">FREE</span>
        </div> 
        <br><br>
        <h3>Internal Parking Lot A</h3>
        <img src="Parking2.jpg" class="image">
        <p>Select your time</p>
        <div class="tooltip"><a href="parkingPayment.php">7am-7pm</a>
          <span class="tooltiptext">$10/hr</span>
        </div> 

        <div class="tooltip1"><a href="parkingPayment1.php">7pm-12am</a>
          <span class="tooltiptext1">FREE</span>
        </div> 
        <br><br>
        <h3>Internal Parking Lot B</h3>
        <img src="Parking3.jpg" class="image">
        <p>Select your time</p>
        <div class="tooltip"><a href="parkingPayment.php">7am-7pm</a>
          <span class="tooltiptext">$10/hr</span>
        </div> 

        <div class="tooltip1"><a href="parkingPayment1.php">7pm-12am</a>
          <span class="tooltiptext1">FREE</span>
        </div> 
    </div>
</main>
<?php
//require "footer.php";
?>
</body>
</html>