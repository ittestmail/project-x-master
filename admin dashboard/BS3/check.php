<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

}
else{
    header("Location: /project-x-master/login.php");
}

?>