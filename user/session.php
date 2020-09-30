<?php 
include ("dbcon.php");
include ("make-random.php");
if (isset($_COOKIE['username'])) $username = $_COOKIE['username'];
if (isset($_SESSION['username'])) $username = $_SESSION['username'];
if (isset($username)) { 
	if (isset($_COOKIE['token'])) {
		$token = $_COOKIE['token'];
		$hashedToken = hash('sha256', $token);
		$select = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `token` = '$hashedToken'");
		$row = mysqli_fetch_array($select);
		$num_rows = mysqli_num_rows($select);

		if ($num_rows==1) {
			$newToken = makeRandom(16);
			$newHashedToken = hash('sha256', $newToken);
			$expire = time()+3600 * 24 * 30;
			setcookie('token', $newToken, $expire);
			$insertToken = mysqli_query($mysqli, "UPDATE `users` SET `token` = '$newHashedToken'");
		}
	}
}
else { ?>
	<script>
		alert("You are not logged in!");
		window.location.href = "../login.php";
	</script>
<?php }
?>
