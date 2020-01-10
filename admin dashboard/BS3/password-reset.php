<?php
require('config.php');
session_start();
include "check.php";
$result = mysqli_query($con, "SELECT company, username, email, firstname, lastname FROM users WHERE id = '$_SESSION[id]'");
$row = mysqli_fetch_array($result);


if (isset($_POST['currentPassword'])){
$oldpwd = password_hash($_POST['currentPassword'], PASSWORD_DEFAULT);
$newpwd = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
$cnfpwd = password_hash($_POST['confirmPassword'], PASSWORD_DEFAULT);
if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT * from users WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);
    if (password_verify($_POST['currentPassword'], $row['password'])) {
        mysqli_query($conn, "UPDATE users set password='" . $newpwd . "' WHERE id='" . $_SESSION["id"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
} else{
    
}

?>





<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Project-x</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/80733e1821.js" crossorigin="anonymous"></script>
   
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "<span style='color: red;'>required</span>";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "<span style='color: red;'>required</span>";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "<span style='color: red;'>required</span>";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "<span style='color: red;'>not same</span>";
output = false;
} 	
return output;
}
</script>  
</head>
<body>

<div class="wrapper">
<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-4.jpg">


    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                <?php
                echo "Welcome " .  $row["username"];
                ?>
                </a>
                </a>
            </div>

            <ul class="nav">
                <li>
                <a href="home.php">
                    <i class="fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                <a href="profiel.php">
                    <i class="fas fa-user"></i>
                        <p>Profiel</p>
                    </a>
                </li>
                <li>
                <a href="documenten.php">
                    <i class="fas fa-file-upload"></i>
                        <p>Documenten</p>
                    </a>
                </li>
                <li>
                    <a href="accounts.php">
                    <i class="fas fa-users"></i>
                        <p>Accounts</p>
                    </a>
                </li>
                <li>
                    <a href="registreer.php">
                    <i class="fas fa-user-plus"></i>
                        <p>Registreer</p>
                    </a>
                </li>
                <li class="active">
                    <a href="password-reset.php">
                    <i class="fas fa-redo"></i>
                        <p>Password reset</p>
                    </a>
                </li>
                <!--<li>
                    <a href="typography.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.php">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.php">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>-->
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Password reset</a>
                </div>
                <div class="collapse navbar-collapse">
                  

                <ul class="nav navbar-nav navbar-right">
                        
                        
                       
                        <li>
                            <a href="/project-x-master/logout-customer.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        


       






<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Change password</h4>
                            </div>
                            <div class="content">
                           
                            <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        
                                <div>


                                    <div class="row">
                                       
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Current Password</label>
                                                <input type="password"  class="form-control" name="currentPassword" placeholder="" class="required"><span id="currentPassword"  class="required"></span>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password"  class="form-control" name="newPassword" placeholder="" class="required"><span id="newPassword" class="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password"  class="form-control" name="confirmPassword" placeholder="" class="required"></span><span id="confirmPassword" class="required">
                                            </div>
                                        </div>

                                    
                                   </div>
                                   <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                                    

                                    <button type="submit" class="btn btn-info btn-fill pull-right"  name="submit">Submit</button>
                                    <div class="clearfix"></div>
                                  
                                </form>
                             </div>
                            </div>
                        </div>
                    </div>

                    
                    
                                 
               

                </div>
            </div>
        </div>


                    
                    
                                 
                    


        <footer class="footer">
            <div class="container-fluid">
              
                <p class="copyright text-center">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> JORR-IT Solutions | All rights reserved
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
    



</html>
