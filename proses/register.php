<?php
include('server.php'); 

$username = $_GET['fullname'];
$email    = $_GET['email'];
$number   = $_GET['number'];
$password = $_GET['password'];
$packet   = $_GET['packet'];

$password_1 = md5($password);

$sql = "INSERT INTO users (name, email, number, password, packet)
VALUES ('$username', '$email', '$number', '$password_1', '$packet')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
$_SESSION['success'] = "You are now logged in";
header('location: http://localhost/contoh/after-login/index.php'); 

?>