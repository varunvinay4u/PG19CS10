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
      <?php $query = "select * from login where category = 'doctor'  and zipcode = (select pin from appointments ORDER BY SlNo DESC LIMIT 1)";
		$i=0;
		$result = mysqli_query($con,$query);
		$num=mysqli_num_rows($result);
		

while($db_category_name  = mysqli_fetch_array($result)) {
    $a[$i]= $db_category_name["name"].', '; 
    $b[$i]= $db_category_name["doc_qualification"].'<br>';
	  $i++;
} ?>
    <!-- for (let i = 0; i < 3; i++) { -->
      <script> 
      const num = <?php print $i; ?> ; 

      console.log(num);
      <?php
      for ($v = 0; $v < $i; $v++) {
       print $a[$v];
       print $b[$v].'<br>'; 
      }
      ?>
      </script>

      <li> <?php print $a[0]; print $b[0]; ?></li>
      <li><?php print $a[1]; print $b[1]; ?></li>
    </ul>
  </div>
</div>
  <script  src="js/dr-select.js"></script>
 
</body>
</html>