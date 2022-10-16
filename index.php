<?php

session_start();

if(isset($_SESSION["user"])){
    header("location: ./vista.php");
}

else{
}

header("location: LOGIN_USER/registro.php");
?>