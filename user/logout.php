<?php 
    include ("dbcon.php");
    
    session_start();
    unset($_SESSION['logged']);
    unset($_SESSION['username']);
    unset($_SESSION['validUser']);

    $expire = time()-3600 * 24 * 30;
    setcookie('userID', "", $expire);
    setcookie('username', "", $expire);
    setcookie('token', "", $expire);
    $insertToken = mysqli_query($mysqli, "UPDATE `users` SET `token` = '$newHashedToken'");

    header("location: login.php");
?>
<html></html>