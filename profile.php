
<?php
include_once('user.class.php');
session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
$username = $_SESSION['username'];
$password= $_SESSION['password'];

echo "Welcome, ";
echo "your username is " . $username . "<br>";
echo "your username is " . $password . "<br>";

$user = new User();
if(isset($_POST['logout'])) {
	if ($user->logOut()) {
		echo "Ok. Logged Out"; } else { echo "Problem Logging Out"; }
}


?>
<form method = "post" action = "index.php">
<input type="hidden" name="logout" value="">

<button type="submit">Logout</button>
</form>


