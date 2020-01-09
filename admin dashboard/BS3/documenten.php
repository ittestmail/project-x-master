<?php
session_start();
require "config.php";
$mysqli = mysqli_connect('localhost', 'root', '', 'projectx');

try{
    $sqlconnection = new pdo('mysql:host=localhost;dbname=projectx;charset=utf8','root','');

    }   
catch(PDOException $pe){
    echo 'Cannot connect to database';
    die;
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

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
</head>
<body>

<div class="wrapper">
<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-4.jpg">


    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                <?php
                echo "Welcome " .  $_SESSION["username"];
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
                <li class="active">
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
                    <a class="navbar-brand" href="#">Table List</a>
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
                <?php
            $db = mysqli_connect("localhost", "root", "", "projectx");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
      
  	// image file directory
  	$target = ($_SERVER['DOCUMENT_ROOT']. '/project-x-master/uploads/pdf/').basename($image);
    $hoi = "HOI";
  	$sql = "INSERT INTO images (image, image_text, company) VALUES ('$image', '$image_text', '$company')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }


     







  $statusMsg = '';

//file upload path
$targetDir = ($_SERVER['DOCUMENT_ROOT']. '/project-x-master/uploads/pdf/');
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    //allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        //upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $statusMsg = "The file ".$fileName. " has been uploaded.";
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

//display status message
echo $statusMsg;



  ?>
            <form action="table.php" method="post" enctype="multipart/form-data">
    Select File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>




            <form method="POST" action="table.php" enctype="multipart/form-data">




  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
      
  </form>
      
           

       


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
