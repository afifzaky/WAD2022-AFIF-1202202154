<?php
session_start();
if (isset($_SESSION["newlogin"])){
    require './pages/Home-Afif.php';
}
else{
    echo "<script> location.href='./login/login.php'; </script>";
}
?>