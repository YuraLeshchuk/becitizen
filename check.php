<?php
/*
  $login = $_POST['username'];
  echo $login;


  MD5('$pass'),
*/


$username = filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
$pswrepeat = filter_var(trim($_POST['pswrepeat']),FILTER_SANITIZE_STRING);
if (mb_strlen($username)<2 || mb_strlen($username)>100)
  {
  echo "Недопустима кількість символів для імені користувача (мінімальна - 2, максимальна - 100)";
  exit();
  }
else if (mb_strlen($email)<3 || mb_strlen($email)>100)
  {
  echo "Недопустима кількість символів для email (мінімальна - 2, максимальна - 100)";
  exit();
  }
else if (mb_strlen($password)<2 || mb_strlen($password)>6)
    {
    echo "Недопустима кількість символів для паролю (мінімальна - 1, максимальна - 32)";
    exit();
    }

else if ($password = $pswrepeat){
    $mysql = new mysqli('localhost','root','root','users');
    $mysql->query("INSERT INTO `registration` ( `username`, `email`, `password`) VALUES ('$username', '$email', '$password')");

    $mysql->close();
    header('location: /' );
}
else {
    echo "Паролі не збігаються";
}
 ?>