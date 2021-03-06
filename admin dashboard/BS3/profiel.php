<?php
require('config.php');
session_start();
include "check.php";
$result = mysqli_query($con, "SELECT company, username, email, firstname, lastname FROM users WHERE id = '$_SESSION[id]'");
$row = mysqli_fetch_array($result);
mysqli_query($con, "SELECT * FROM users WHERE id = '". $_SESSION['id'] . "'");




?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="icon" href="favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Projext-x</title>

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
                echo "Welcome " . $row['firstname'] . " " . $row['lastname'];
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
                <li class="active">
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
                <li>
                    <a href="password-reset.php">
                    <i class="fas fa-redo"></i>
                        <p>Password reset</p>
                    </a>
                </li>
                <!--<li>
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
                </li>-->
				<!--<li class="active-pro">
                    <a href="">
                        
                        <p>hoi</p>
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
                    <a class="navbar-brand" href="#">Profiel</a>
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form method="post" action="profiel.php" onSubmit="return validatePassword()">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" class="form-control" name="company" value="<?php echo $_SESSION['company'] ;?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <i class="pe-7s-user"></i> <label>Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $row['username'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <i class="pe-7s-mail "></i> <label for="exampleInputEmail1"> Email address</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email'];?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="firstname" placeholder="Company" value="<?php echo $row['firstname'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php echo $row['lastname'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Huidig Wachtwoord</label>
                                                <input type="text" class="form-control" name="currentPassword" placeholder="Huidig Wachtwoord"><span id="currentPassword" class="required"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nieuw Wachtwoord</label>
                                                <input type="text" class="form-control" name="newPassword" placeholder="Nieuw Wachtwoord"><span id="newPassword" class="required"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Herhaal nieuw wachtwoord</label>
                                                <input type="text" class="form-control" name="confirmPassword" placeholder="Herhaal Nieuw Wachtwoord"><span id="confirmPassword" class="required"></span>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    
                                   

                                    

                                    <input type="submit" class="btn btn-info btn-fill pull-right" name="update" value="Submit">
                                    <div class="clearfix"></div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php
    
    
    

    
    
    
    
        
        
        
       
    

 if (isset($_POST['update'])){
    $oldpwd = password_hash($_POST['currentPassword'], PASSWORD_DEFAULT);
    $newpwd = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
    $cnfpwd = password_hash($_POST['confirmPassword'], PASSWORD_DEFAULT);
    $username = $_POST['username'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    if (count($_POST) > 0) {
        $result = mysqli_query($con, "SELECT * from users WHERE id='" . $_SESSION["id"] . "'");
        $row = mysqli_fetch_array($result);
        if (password_verify($_POST['currentPassword'], $row['password'])) {
            mysqli_query($con, "UPDATE users set password='" . $newpwd . "', username='". $username ."', email='". $email ."', firstname='". $firstname ."', lastname='". $lastname ."' WHERE id='" . $_SESSION["id"] . "'");
            $message = "Password Changed";
            echo "<script>window.location.href = '/project-x-master/login.php';</script>";
            session_destroy();
            
        } else{
            
            mysqli_query($con, "UPDATE users set username='". $username ."', email='". $email ."', firstname='". $firstname ."', lastname='". $lastname ."' WHERE id='" . $_SESSION["id"] . "'");
           echo "<script>window.location.href = 'profiel.php';</script>";
    }
}
    } else{
        
    }
    
?>
                    
                                 
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="/project-x-master/uploads/pdf/Jorr-itsolutions.jpg" alt="..."/>

                                      <h4 class="title">
                                      <?php echo $row["company"];?>
                                      <br>
                                         <small><?php echo $row["username"];?></small>
                                      </h4>
                                    </a>
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
