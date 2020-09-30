<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
	<script src="../sweetalert2@9.js"></script>
</head>
<body>
<?php
include ("dbcon.php");

$email = $_POST['email'];

$check = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `email`='$email'");
$row = mysqli_fetch_array($check);
$num_rows = mysqli_num_rows($check);

if ($num_rows>=1) { ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Password Reset Link Sent',
            text: 'Check your email for the password reset link',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location.href = "login.php";
            }
        })
    </script>
<?php }
else { ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Wrong email',
            text: 'No account with that email address exists',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Try again'
        }).then((result) => {
            if (result.value) {
                window.location.href = "login.php#forgot";
            }
        })
    </script>
<?php }
?>  
</body>
</html>