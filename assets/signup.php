<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="css/reg-detailsP.css">
</head>

<body>
  <div class="container">
    <h1>Please provide details to complete Signup</h1>
    <form method="post" name="registration" class="registartion-form" onsubmit="return formValidation()">
      <table>
        <tr>
          <td><label for="register_as">Category:</label></td>
          <td>
            <select name="register_as" id="register_as">
              <option value="Patient">Patient</option>
              <option value="Doctor">Doctor</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="name">Name:</label></td>
          <td><input type="text" name="name" id="name" placeholder="your name"></td>
        </tr>
        <tr>
          <td><label for="email">Email:</label></td>
          <td><input type="email" name="email" id="email" placeholder="your email"></td>
        </tr>
        <tr>
          <td><label for="password">Password:</label></td>
          <td><input type="password" name="password" id="password" placeholder="password"></td>
        </tr>
        <tr>
          <td><label for="confirmpassword">Confirm Password:</label></td>
          <td><input type="password" name="confirmpassword" id="confirmpassword" placeholder="confirm password"></td>
        </tr>
        <tr>
          <td><label for="phoneNumber">Phone Number:</label></td>
          <td><input type="numbers" name="phoneNumber" id="phoneNumber" placeholder="Phone number"></td>
        </tr>
        <tr>
          <td><label for="gender">Gender:</label></td>
          <td>
            Male: <input type="radio" name="gender" value="male">
            Female: <input type="radio" name="gender" value="female">
            Other: <input type="radio" name="gender" value="other">
          </td>
        </tr>
        
        <tr>
          <td><label for="zipcode">Zip Code:</label></td>
          <td><input type="number" name="zipcode" id="zipcode"></td>
        </tr>
        <tr>
          <td><label for="location">Location:</label></td>
          <td><textarea name="location" id="location" placeholder="Your location"></textarea></td>
        </tr>
        <tr>
          <td><label for="name">Qualification:</label></td>
          <td><input type="text" name="Qualification" id="Qualification" placeholder="your Qualification"></td>
        </tr>
        <tr>
          <td><label for="name">Doctor Registration ID:</label></td>
          <td><input type="text" name="DoctorRegistrationID" id="DoctorRegistrationID" placeholder="Doctor Registration ID"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" class="submit" value="Register" /></td>
        </tr>
      </table>
    </form>
  </div>
</body>




<script src="js/reg-detailsP.js"></script>
</html>





<?php


session_start();

	include("connection.php");
	include("functions.php");


	
if($_SERVER['REQUEST_METHOD'] == "POST")

	{
		//something was posted
		$name =$_POST['name'];
		$password = $_POST['password'];
   	$category=$_POST['category'];
		$email=$_POST['email'];
		$phoneNumber=$_POST['phoneNumber'];
		$gender=$_POST['gender'];
		$zipcode=$_POST['zipcode'];
		$location=$_POST['location'];
		$Qualification=$_POST['Qualification'];
		$DoctorRegistrationID=$_POST['DoctorRegistrationID'];

		#if(!empty($email) && !empty($password))
		#{

			//save to database
			$user_id = random_num(20);
			$sql = "insert into login values ('',$user_id,'$category','$name','$email','$password',$phoneNumber,'$gender',$zipcode,'$location','$Qualification','$DoctorRegistrationID')";
        //check if $category works in insert or not !!NOT
			
			if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}



#mysqli_query($con, $query);
			#echo "$name, $gender";
			header("Location: login.php");
			die;
		#}else
		#{
		#	echo "Please enter some valid information!";
		#}
	}



?>
