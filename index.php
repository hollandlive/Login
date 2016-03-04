
<?php
include_once('user.class.php');
session_start();

$user = new User();
/*$userData = $_SESSION['userData'];
if ($user->loggedIn($userData)) {
	$url = 'index.php';
	$user->redirect($url);
} else {
	$url = 'login.php';
	$user->redirect($url);
}*/
 
if (empty($_POST['username']) && empty($_POST['password'])) {
		
		echo "Provide your details or register";
		$user->redirect('index.php'); 
	} else if(isset($_POST['logout'])) {

		$user->redirect('index.php'); 
		echo "You are logged Out";
		$user->logOut();	
}


?>
<form method = "post" action = "login.php" name="userData" value="userData">
<input type="text" name="username" value="username">
<input type="password" name="password" value="password">
<input type="hidden" name="userData" value="userData">
<button type="text">Go login</button>
<button type="text"><a href="register.php">Register</a></button>
</form>