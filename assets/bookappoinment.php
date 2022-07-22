<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/bookappoinment.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="inner-layer">
        <div class="container">
            <div class="row no-margin row-cols-1 row-cols-md-2">
                <div class="col">
                    <div class="content">
                        <h1>Thank you for choosing our MindBuddy service</h1>
                        <p>Please fill up the details in the form given to the side of this to book your appointment</p>
                    </div>
                </div>
                <div class="col">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appoinment</h2>
                        </div>
                      <form method="post" name="appointment" class="appointment-form" action="thankyou.html"> <!--onsubmit="return formValidation()"> -->
                       <table>
                            <tr>
                                <td><input type="text" placeholder="Enter Full Name" name="name" id="name" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><input type="numbers" placeholder="Enter Mobile Number" name="phoneNumber" id="phoneNumber" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><input type="email" placeholder="Enter Email Address" name="email" id="email" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><input type="date" placeholder="Appoinment Date" name="date" id="date" class="form-control" style="color: rgb(91, 91, 91);"></td>
                            </tr>
                            <h6>Address Details</h6>
                            <tr>
                                    <td>
                                        <input type="text" placeholder="Enter Area" name="locality" id="locality" class="form-control" id="locality">
                                    </td>
                                    <td>
                                        <input type="text" placeholder="Enter City" name="city" id="city" class="form-control" id="city">
                                    </td>
                            </tr>
                            <tr>
                                    <td>
                                        <input type="text" placeholder="Enter State" name="state" id="state" class="form-control" id="state">
                                    </td>
                                    <td>
                                        <input type="number" placeholder="Postal Code" name="pin" id="pin" class="form-control" id="pin">
                                    </td>
                            </tr>
                            <tr>
                                    <td>
                                        <input type="text" placeholder="Enter Country" name="country" id="country" class="form-control" id="country">
                                    </td>
                                        
                            </tr>
                           
                            <tr>
                                <td colspan="2">
                                        <input type="submit" class="submit" value="Book Appointment" />
                                </td>
                            </tr>
                      </table>
                     </form>
                     <button class="findLocat">Use current Location</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/bookappointment.js"> </script> 


</html>



<?php


session_start();

	include("connection.php");
	include("functions.php");


	
if($_SERVER['REQUEST_METHOD'] == "POST")

	{
		//something was posted
		$name =$_POST['name'];
	//	$password = $_POST['password'];
   	//$category=$_POST['category'];
		$email=$_POST['email'];
		$phoneNumber=$_POST['phoneNumber'];
		$date=date('Y-m-d',strtotime($_POST['date']));
		$zipcode=$_POST['zipcode'];
		$area=$_POST['area'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $country=$_POST['country'];
		// $time=$_POST['time'];
		// $Doctor=$_POST['Doctor'];

		#if(!empty($email) && !empty($password))
		#{

			//save to database
			$bookingID = random_num(20);
			$sql = "insert into appointments values ('','$name',$phoneNumber,'$email','$date','$area','$city','$state',$zipcode,'$country',$bookingID)";
        //check if $category works in insert or not !!NOT
			
			if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}



#mysqli_query($con, $query);
			#echo "$name, $gender";
			header("Location: thankyou.html");
			die;
		#}else
		#{
		#	echo "Please enter some valid information!";
		#}
	}



?>
