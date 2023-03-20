<!-- For server.php --> 

<?php

$host = "localhost";
$username = "root" ;
$password = "";
$database = "students";

$connect = mysqli_connect($host, $username,$password,$database);

$name = mysqli_real_escape_string($connect,$_POST['name']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$phone = mysqli_real_escape_string($connect,$_POST['phone']);
$course = mysqli_real_escape_string($connect,$_POST['course']);

mysqli_query($connect, "INSERT INTO students(name, email, phone, address) VALUES ('".$name."','".$email."','".$phone."','".$course."')");

mysqli_close($connect);

?>
