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
                        <h1>Book Your Time Slot Now and Save Your Time</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi dolorum quae harum atque non, obcaecati aperiam labore. Vitae, ipsum fugiat facere ex, aliquid ipsam dolorem mollitia quod totam, debitis earum.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appoinment</h2>
                        </div>
                     <form method="post" name="appointment" class="appointment" onsubmit="return formValidation()">
                       <table>
                        <div class="form-body">
                            <tr>
                                <td><input type="text" placeholder="Enter Full Name" id="name" class="form-control"></td>
                            </tr>
                            <tr class="row form-row">
                                <td><input type="numbers" placeholder="Enter Mobile Number" id="phoneNumber" class="form-control"></td>
                            </tr>
                            <tr aria-required="true">
                                <td><input type="email" placeholder="Enter Email Address" id="email" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><input type="date" placeholder="Appoinment Date" id="date" class="form-control" style="color: rgb(91, 91, 91);"></td>
                            </tr>
                            <h6>Address Details</h6>
                            <tr>
                                    <td class="row form-row">
                                        <input type="text" placeholder="Enter Area" id="area" class="form-control" id="locality">
                                    </td>
                                    <td class="row form-row">
                                        <input type="text" placeholder="Enter City" id="city" class="form-control" id="city">
                                    </td>
                            </tr>
                            <tr>
                                    <td class="row form-row">
                                        <input type="text" placeholder="Enter State" id="state" class="form-control" id="state">
                                    </td>
                                    <td class="row form-row">
                                        <input type="number" placeholder="Postal Code" id="zipcode" class="form-control" id="pin">
                                    </td>
                            </tr>
                            <tr>
                                    <td class="row form-row">
                                        <input type="text" placeholder="Enter Country" id="country" class="form-control" id="country">
                                    </td>
                                    <td class="row form-row">
                                        <button class="findLocat">Use current Location</button>
                                    </td>
                            </tr>
                           
                            <tr class="row form-row">
                                <td colspan="2">
                                    <a href="thankyou.html">
                                    <button class="btn btn-success btn-appoinment">
                                        Submit
                                    </button>
                                    </a>
                                </td>
                            </tr>
                        </div>
                      </table>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/bookappointment.js"> </script>

</body>
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
		$date=$_POST['date'];
		$zipcode=$_POST['zipcode'];
		$location=$_POST['area'];
        $location=$_POST['city'];
        $location=$_POST['state'];
        $location=$_POST['country'];
		$time=$_POST['time'];
		$Doctor=$_POST['Doctor'];

		#if(!empty($email) && !empty($password))
		#{

			//save to database
			$bookingID = random_num(20);
			$sql = "insert into appointments values ('','$name',$phoneNumber,'$email',$date, ,' ','$area','$city','$state',$zipcode,'$country',$bookingID)";
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
