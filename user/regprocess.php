<?php
include("dbcon.php");

if (($_POST['password']) == ($_POST['cpassword'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);
    $insert = "INSERT INTO `users` (`username`, `email`, `password`) VALUES('$username', '$email', '$password')";
    if (mysqli_query($mysqli, $insert)) {
        echo "Successful"; ?>    
        <script type="text/javascript"> 
        Swal.fire(
            'Registration successful!',
            'Please login now!',
            'success'
        )
        window.location.href= "login.php"; 
    </script>
    <?php }
    else {
        echo "Failed"; ?>
        <script type="text/javascript"> alert("Registration failed!"); window.location.href= "register.php"; </script>
    <?php }
}
else { ?>
    <script> alert("Passwords don't match"); window.location.href="register.php"; </script>
<?php }
?>
