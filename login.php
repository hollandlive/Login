
<?php
include_once('user.class.php');
session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
$username = $_SESSION['username'];
$password= $_SESSION['password'];
$user = new User();
$user->login($username, $password);
$user->redirect('http://mail.ru');





//echo $username . "<br>";
//echo $password . "<br>";
?>
<form method = "post" action = "index.php">
<input type="hidden" name="logout" value="">

<button type="submit">Logout</button>
</form>


