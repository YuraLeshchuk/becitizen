﻿<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="styles/header.css" rel="stylesheet" />
    <link href="styles/registration.css" rel="stylesheet" />
    <link href="styles/footer.css" rel="stylesheet" />
</head>
<body>
    <header>
        <h1>
            BeCitizen
        </h1>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" id="homelik" href="index.php">Головна<span class="sr-only"></span></a>
                </div>
        </nav>
    </header>

<?php
/* $dbc = mysqli_connect('localhost', 'root', 'root', 'users' );
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
    $password = mysqli_real_escape_string($dbc, trim($_POST['password']));
    $pswrepeat = mysqli_real_escape_string($dbc, trim($_POST['pswrepeat']));
    if(!empty($username) && !empty($email) && !empty($password) && !empty($pswrepeat)){
      $query = "SELECT * FROM `signup` WHERE username = '$username'";
      $data = mysqli_query($dbc, $query);
      if(mysqli_num_rows($data) == 0){
        $query = "INSERT INTO `signup` (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($dbc, $query);
        echo ('You have successfully registered');
        mysqli_close($dbc);
        exit();
      }
      else {
        echo ('User name already exists. Please choose another one.');
      }
    }
}
*/
?>

    <content>
        <form action="check.php" method="POST">
            <div class="container">
                <h1>Форма реєстрації</h1>

                <label for="username"><b>Ім'я користувача</b></label>
                <input type="text"
                       placeholder="User name"
                       name="username"
                       id="username"
                       required />

                <label for="email"><b>Email</b></label>
                <input type="text"
                       placeholder="Enter Email"
                       name="email"
                       id="email"
                       required />

                <label for="password"><b>Пароль</b></label>
                <input type="password"
                       placeholder="Enter Password"
                       name="password"
                       id="password"
                       required />

                <label for="pswrepeat"><b>Повторіть пароль</b></label>
                <input type="password"
                       placeholder="Repeat Password"
                       name="pswrepeat"
                       id="pswrepeat"
                       required />


                <button type="submit" name="submit" class="registerbtn">Реєстрація</button>
            </div>

            <div class="container signin">
                <p>Маєте акаунт? <a href="singin.php">Вхід</a>.</p>
            </div>
        </form>
    </content>

    <!--
          <form action="/action_page.php">
      <div class="container">
        <h1>Registeration Form</h1>
        <p>Please fill in this form to create an account.</p>

        <label for="email"><b>Email</b></label>
        <input
          type="text"
          placeholder="Enter Email"
          name="email"
          id="email"
          required
        />

        <label for="psw"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="psw"
          id="psw"
          required
        />

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input
          type="password"
          placeholder="Repeat Password"
          name="psw-repeat"
          id="psw-repeat"
          required
        />

        <button type="submit" class="registerbtn">Register</button>
      </div>

      <div class="container signin">
        <p>Already have an account? <a href="singin.html">Sign in</a>.</p>
      </div>
    </form>
          -->

    <footer>
        <div id="contactinfo">
            <p>123-122-1323 zastavna@gmail.com</p>
            <p>1715 Soborna str, Lemberg, Ukraine</p>
            <p>©2020 YX Studio</p>
        </div>
    </footer>
</body>
</html>