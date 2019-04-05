<?php
include('server.php'); 

$email = $_POST['email'];
$password = md5($_POST['password']);
 
$login = mysqli_query($conn,"SELECT * from users WHERE email='$email' AND password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:/contoh/after-login/index.php");
}else{
	header("location:/contoh/index.php");
}

?>