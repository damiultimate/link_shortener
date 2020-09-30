<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<script src="../sweetalert2@9.js"></script>
</head>
<body>
    <?php
        include ("dbcon.php");
        include ("make-random.php");

        if (isset($_POST['submit'])) {
            $username = $_POST['login'];
            $password = hash('sha256', $_POST['password']);

            $query = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
            $result = mysqli_query($mysqli, $query);
            $row = mysqli_fetch_array($result);
            $num_rows = mysqli_num_rows($result);

            if ($num_rows==1) {
                $_SESSION['logged'] = 1;
                $_SESSION['username'] = $username;
                $_SESSION['validUser'] = 1;

                if (isset($_POST['rememberme'])) {
                    $token = makeRandom(16);
                    $hashedToken = hash('sha256', $token);
                    $expire = time()+3600 * 24 * 30;
                    setcookie('userID', $row['id'], $expire);
                    setcookie('username', $username, $expire);
                    setcookie('token', $token, $expire);
                    $insertToken = mysqli_query($mysqli, "UPDATE `users` SET `token` = '$hashedToken'");
                }
                header("location:admin/index.php");
            }
            else { ?>
                <script type="text/javascript"> 
                    Swal.fire({
                        icon: 'error',
                        title: 'Login failed',
                        text: 'Wrong username/email or password',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Try again'
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "login.php";
                        }
                    })
                </script>
            <?php } 
        }
        else { ?>
            <script type="text/javascript"> 
                Swal.fire({
                    icon: 'error',
                    title: 'Login failed',
                    text: 'Wrong username/email or password',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Try again'
                }).then((result) => {
                    if (result.value) {
                        window.location.href = "login.php";
                    }
                })
            </script>
        <?php } 
    ?>
</body>
</html>

