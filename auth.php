<?php
$username = filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost','root','root','users');
$result=$mysql->query("SELECT * FROM `registration` WHERE `username` = '$username' AND `password` = '$password'");
$user=$result->fetch_assoc();
if (count ($user)==0) {
  echo "Користувач не знайдений";
  exit();
}
setcookie("user", $user['username'], time()+3600*24*300,"/");
$mysql->close();
header('location: /' );
?>
