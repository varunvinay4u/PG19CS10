<?php 
session_start();

	include("connection.php");
	include("functions.php");
?>





<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Select Your Doctor</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/dr-select.css"> 

</head>
<body>
<div id="content">
  <label id="label-select-application">Select Your Doctor</label>
  <div class="custom-select">
    <div class="custom-select__display">
      <span class="custom-select__display__value">Choose one<span>
    </div>
    <ul class="custom-select__options" tabindex="-1" >
      <?php $query = "select * from login where category = 'doctor'";
		$i=0;
		$result = mysqli_query($con,$query);
		$num=mysqli_num_rows($result);
		

while($db_category_name  = mysqli_fetch_array($result)) {
    $a[$i]= $db_category_name["name"].'<br>';
	  $i++;
} ?>
    <!-- for (let i = 0; i < 3; i++) { -->
      <li> <?php print $a[0]; ?> </li>
      <li><?php print $a[1]; ?></li>
      <li><?php print $a[2]; ?></li>
    </ul>
  </div>
</div>
  <script  src="js/dr-select.js"></script>
 
</body>
</html>
