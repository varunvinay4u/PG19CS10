<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindBuddy</title>
    <link rel="stylesheet" href="assets/css/profileP.css">
    <link rel="icon" type="image/png" href="images/logo_temp.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>
<body>
    
    <div class="container-fluid main" style="height:100vh;padding-left:0px;">
        
        <div class="d-block d-md-none menu">

            <div class="bar"></div>
        
        </div>
        
        <div class="expand-menu nav flex-column">
        
            <a href="#" class="nav-link active mt-auto"><i class="far fa-user-circle"></i> Profile</a>
                <a href="#" class="nav-link"><i class="far fa-bell"></i> Notifications</a>
                <a href="#" class="nav-link"><i class="far fa-file-alt"></i>View Appoinment</a>
                <a href="#" class="nav-link mb-auto"><i class="fas fa-cogs"></i> General</a>   
                <a href="#" class="nav-link"><i class="bi bi-box-arrow-right"></i>Logout</a>
 
        
        </div>
        
        <div class="row align-items-center" style="height:100%">
    
        <div class="col-md-3 d-none d-md-block" style="height:100%" >
        
            <div class="container-fluid nav sidebar flex-column">
            
                <a href="#" class="nav-link active mt-auto"><i class="far fa-user-circle"></i> Profile</a>
                <a href="#" class="nav-link"><i class="far fa-bell"></i> Notifications</a>
                <a href="#" class="nav-link"><i class="far fa-file-alt"></i> View Appoinment</a>
                <a href="#" class="nav-link mb-auto"><i class="fas fa-cogs"></i> General</a>
                <a href="#" class="nav-link"><i class="bi bi-box-arrow-right"></i><b>Logout</b></a>
            
            </div>
        
        </div>
        
        <div class="col-md-9">
            
            <div class="container content clear-fix">
        
            <h2 class="mt-5 mb-5">Hello, <?php echo $user_data['name']; ?> <br> Profile Settings</h2>

            
            <div class="row" style="height:100%">
            
                <div class="col-md-3">
                
                    <div class="row">
                        <div class="small-12 medium-2 large-2 columns">
                            <div href="#" class="circle d-inline">
                                <img class="profile-pic" src="/assets/images/user-icon.png" width=130px style="margin:0;">
                            </div>
                            <div class="p-image">
                                <i class="fa fa-camera upload-button"></i>
                                    <input class="file-upload" type="file" accept="image/*"/>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-md-9">
                    
                    <div class="container">
                    
                        <form>
                            <div class="form-group">
                                <label for=fullName>Full Name</label>
                                <input type="text" class="form-control" id="fullName">
                            </div>
                            <div class="form-group">
                                <label for=email>Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">

                                <label for=pass>Phone No :</label>
                                <input type="number" class="form-control" id="number">
                            </div>
                            <div class="form-group ">
                                <label for=category>Gender</label>
                                <input type="category" class="form-control" id="gender">
                            </div>
                            <div class="form-group ">
                                <label for=birthday>Birthday</label>
                                <input type="date" class="form-control" id="birthday">
                            </div>


                            <div class="row mt-5">
                                <div class="col">
                                    <button type="button" class="btn btn-primary btn-block">Save Changes</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-default btn-block">Cancel</button>
                                </div>
                            </div>

                        </form>
                    
                    </div>
                
                </div>
            
            </div>
        
        </div>
            
        </div>
    
    </div>
    
</div>
    


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/profileP.js"> </script>
</body>
</html>
