<?php
require('config.php');
session_start();
include "check.php";
$result = mysqli_query($con, "SELECT company, username, email, firstname, lastname FROM users WHERE id = '$_SESSION[id]'");
$row = mysqli_fetch_array($result);
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
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
    <link href="upload.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />

        <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
	
</head>
<body>
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
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
                    <a class="navbar-brand" href="#">Documenten</a>
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
            
                <?php
            

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	
      
  	// image file directory
  	$target = ($_SERVER['DOCUMENT_ROOT']. '/project-x-master/uploads/pdf/').basename($image);
    $hoi = "HOI";
  	$sql = "INSERT INTO images (image, company) VALUES ('$image', '$_POST[company]')";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }


     




?>


 
            <form action="upload.php" method="post" enctype="multipart/form-data">
    
            
					<input type="file" name="file" id="file" class="inputfile inputfile-1"  />
					<label for="file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Kies file om naar de webiste te uploaden&hellip;</span></label>
				
<br>
<input type="submit" name="submit" id="file3" class="inputfile inputfile-1"  />
					<label for="file3"><width="20" height="17" viewBox="0 0 20 17"> <span>Upload naar de website</span></label>
			
</form>




            <form method="POST" action="documenten.php" enctype="multipart/form-data">




  	<input type="hidden" name="size" value="1000000">
  	<div>
          <br>
      <input type="file" name="image" id="file1" class="inputfile inputfile-1"  />
					<label for="file1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
				
  	</div>
  	<select name="company">
    <option value="Gondrand">Gondrand</option>
    <option value="Kobout">Kobout</option>
  </select>
 
  	<div>
      <br>
  		<input type="submit" name="upload" id="file2" class="inputfile inputfile-1"  />
					<label for="file2"><width="20" height="17" viewBox="0 0 20 17"> <span>Upload</span></label>
			
  	</div>
      
  </form>
  
  <?php
  $query = "SELECT * FROM images";

 
if ($result = $con->query($query)) {
    echo "<table class='table'>";
    echo "<tr>";
        
        echo "<th>image</th>";
        echo "<th>company</th>";
    echo "</tr>";
    while ($row = $result->fetch_assoc()) {
        
        $field2name = $row["image"];
        $field3name = $row["company"];
        
        echo "<tr>";
            
            echo "<td><a href='/project-x-master/uploads/pdf/".$row['image']."' target='_blank'>" . $field2name ."</a></td>";
            echo "<td>" . $field3name ."</td>";
        echo "</tr>";
        
        
    }
    echo "</table>";
/*freeresultset*/
$result->free();

}
          ?> 
          
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

    <script src="js/custom-file-input.js"></script>

</html>
