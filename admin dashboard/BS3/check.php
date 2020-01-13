<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ) {
    if ($_SESSION['functie'] == 'ADMIN') {
        
    }
    elseif ($_SESSION['functie'] == 'KLANT') {
        header("Location: /project-x-master/login.php");
    }
}
else{
    header("Location: /project-x-master/login.php");
}

?>