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

<?php $query = "select * from login where category = 'doctor'  and zipcode = (select pin from appointments ORDER BY SlNo DESC LIMIT 1)";
		$i=0;
		$result = mysqli_query($con,$query);
		$num=mysqli_num_rows($result);
		

while($db_category_name  = mysqli_fetch_array($result)) {
    $a[$i]= $db_category_name["name"]; 
    $b[$i]= $db_category_name["doc_qualification"];
	  $i++;
} ?>


<form method="post" class="custom-select" name="appointment" onsubmit="thankyou.html">
  <label id="label-select-application">Select Your Doctor</label>
  <select name="Doctor">
        <option value="" disabled selected>Choose option</option>
        <option value="<?php print $a[0]; ?>"><?php print $a[0].", "; print $b[0]."<br>"; ?></option>
        <option value="<?php print $a[1]; ?>"><?php print $a[1].", "; print $b[1]."<br>"; ?> </option>
        <option value="Coconut">Coconut</option>
        <option value="Blueberry">Blueberry</option>
        <option value="Strawberry">Strawberry</option>
    </select>
    <a href="thankyou.html"> <input type="submit" name="submit" vlaue="Choose options"></a>
      
    <!-- for (let i = 0; i < 3; i++) { -->
      <!-- <script> 
      const num = <?php #print $i; ?> ; 

      console.log(num);
      <?php
      #for ($v = 0; $v < $i; $v++) {
       #print $a[$v];
       #print $b[$v].'<br>'; 
     # }
      ?>
      </script>

      <li> <select id="doctor" name="doctor"> <?php #print $a[0]; print $b[0]; ?> ></li>
      <li> <select id="doctor" name="doctor"><?php #print $a[1]; print $b[1]; ?> ></li>
    </ul>
    </div>
    <a href="new.html" type="submit" class="submit btn-appoinment" value="BookAppointment"  />
    </form> -->
  <script  src="js/dr-select.js"></script>
 
</body>
</html>

<?php

#session_start();

include("connection.php");
//include("functions.php");

    if(isset($_POST['submit'])){
    if(!empty($_POST['Doctor'])) {
        $selected = $_POST['Doctor'];
        $sql = "update appointments set doctor = '$selected' where SlNo = (select SlNo from appointments ORDER BY SlNo DESC LIMIT 1)";
        #echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }
    if ($con->query($sql) === TRUE) {
      #echo "New record created successfully";
    } else {
      #echo "Error: " . $sql . "<br>" . $con->error;
    }
    header("Location: thankyou.html");
    die;
    }

?>


