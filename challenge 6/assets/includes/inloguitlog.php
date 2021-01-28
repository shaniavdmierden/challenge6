<?php

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
       $button = ' <p> <a href="assets/inlog/logout.php">Logout</a> </p>';
} else {
       $button = ' <p> <a href="inlog.php">Admin</a> </p>';
}

echo $button;
