<?php
require('config.php');
session_start();
include "check.php";
$result = mysqli_query($con, "SELECT company, username, email, firstname, lastname FROM users WHERE id = '$_SESSION[id]'");
$row = mysqli_fetch_array($result);


 
//require('db.php');
     
	

   // If form submitted, insert values into the database.
   if (isset($_REQUEST['username'])){
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
    $company = stripslashes($_REQUEST['company']);
    $company = mysqli_real_escape_string($con,$company);
    $firstname = stripslashes($_REQUEST['firstname']);
    $firstname = mysqli_real_escape_string($con,$firstname);
    $lastname = stripslashes($_REQUEST['lastname']);
    $lastname = mysqli_real_escape_string($con,$lastname);
    
    
    
    
    $email = $_POST['email']; 
      $username = $_POST['username'];   
//check if username exists
$sql = "SELECT * FROM users WHERE username = '".$username."' OR email = '".$email."'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>=1)//You are mixing the mysql and mysqli, change this line of code
   {
    $message = "name or mail already exists";
   }
 else
    {  // excecute insert query 
    $query = "INSERT into `users` (username, password, email, company, firstname, lastname, functie) VALUES ('$username', '$password', '$email', '$company', '$firstname', '$lastname', 'KLANT')";
    $result1 = mysqli_query($con,$query);
    
    if($result1){
        
        $message = "Geregistreerd";
  
    }
    }
}else{
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
var username,company,firstname,lastname,email,password,output = true;

username = document.frmChange.username;
company = document.frmChange.company;
firstname = document.frmChange.firstname;
lastname = document.frmChange.lastname;
email = document.frmChange.email;
password = document.frmChange.password;


if(!username.value) {
username.focus();
document.getElementById("username").innerHTML = "<span style='color: red;'>required</span>";
output = false;
}
else if(!company.value) {
company.focus();
document.getElementById("company").innerHTML = "<span style='color: red;'>required</span>";
output = false;
}
else if(!firstname.value) {
firstname.focus();
document.getElementById("firstname").innerHTML = "<span style='color: red;'>required</span>";
output = false;
}
else if(!lastname.value) {
lastname.focus();
document.getElementById("lastname").innerHTML = "<span style='color: red;'>required</span>";
output = false;
}
else if(!email.value) {
email.focus();
document.getElementById("email").innerHTML = "<span style='color: red;'>required</span>";
output = false;
}
else if(!password.value) {
password.focus();
document.getElementById("password").innerHTML = "<span style='color: red;'>required</span>";
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
                <li class="active">
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
                    <a class="navbar-brand" href="#">Registreer</a>
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


        
                        
                    







                  <!--  <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Registreer
</h4>
                            </div>
                            <div class="content">
                           
                            <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        
                                <div>


                                    <div class="row">
                                       
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>username</label>
                                                <input type="text"  class="form-control" name="username" placeholder="" class="required"><span id="currentPassword"  class="required"></span>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>company</label>
                                                <input type="text"  class="form-control" name="company" placeholder="" class="required"><span id="company" class="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>firstname</label>
                                                <input type="test"  class="form-control" name="firstname" placeholder="" class="required"></span><span id="firstname" class="required">
                                            </div>
                                        </div>
                                   </div>


                                   <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>lastname</label>
                                                <input type="text"  class="form-control" name="lastname" placeholder="" class="required"></span><span id="lastname" class="required">
                                            </div>
                                        </div>
                                   </div>


                                   <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>email</label>
                                                <input type="email"  class="form-control" name="email" placeholder="" class="required"></span><span id="email" class="required">
                                            </div>
                                        </div>
                                   </div>


                                   <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>password</label>
                                                <input type="password"  class="form-control" name="password" placeholder="" class="required"></span><span id="password" class="required">
                                            </div>
                                        </div>
                                   </div>


                                   
                                    

                                    <button type="submit" class="btn btn-info btn-fill pull-right"  name="submit">Submit</button>
                                    <div class="clearfix"></div>
                                  
                                </form>
                             </div>
                            </div>
                        </div>
                    </div>-->

                    
                    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Registreer</h4>
                            </div>
                            <div class="content">
                           
                            <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        
                                <div>
                                    <div class="row">
                                       
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>username</label>
                                                <input type="text"  class="form-control" name="username" placeholder="" class="required"><span id="username"  class="required"></span>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text"  class="form-control" name="company" placeholder="" class="required"><span id="company" class="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>firstname</label>
                                                <input type="text"  class="form-control" name="firstname" placeholder="" class="required"></span><span id="firstname" class="required">
                                            </div>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>lastname</label>
                                                <input type="text"  class="form-control" name="lastname" placeholder="" class="required"><span id="lastname" class="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>email</label>
                                                <input type="email"  class="form-control" name="email" placeholder="" class="required"><span id="email" class="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>password</label>
                                                <input type="password"  class="form-control" name="password" placeholder="" class="required"><span id="password" class="required">
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
