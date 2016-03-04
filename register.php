
<?php
include_once('user.class.php');
session_start();

echo "would you like to register?";

if (!empty($_POST['username']) && !empty($_POST['password'])) {

	$user = new User();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	$user->register($username, $password);
} else { echo "provide both"; }


?>
<form method = "post" action = "">
<input type="text" name="username" value="username">
<input type="password" name="password" value="password">

<button type="text">Register</button>
</form>

