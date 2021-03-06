<?php $dbc = mysqli_connect('localhost', 'root', 'root', 'users' );
if(!isset($_COOKIE['user_id'])) {
    if(isset($_POST['submit'])){
      $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
      $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
      if(!empty($user_username) && !empty($user_password)){
          $query = "SELECT `user_id` , `username` FROM `signup` WHERE username = '$user_username' AND password = '$user_password'";
          $data = mysqli_query($dbc, $query);
          if(mysqli_num_rows($data) == 1){
              $row = mysqli_fetch_assoc($data);
              setcookie('user_id', $row['user_id'], time() + (60*60*24*365));
              setcookie('username', $row['username'], time() + (60*60*24*365));
              $home_url = 'http://' . $_SERVER['HTTP_HOST'];
              header('Location: '. $home_url);
          }
          else {
            echo "The data are entered wrong";
          }
      }
      else {
        echo "Sorry, but you have to enter the data correctly";
      }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="styles/header.css" rel="stylesheet" />
<link href="styles/signpage.css" rel="stylesheet" />
<link href="styles/footer.css" rel="stylesheet" />
</head>
<body>
  <header >
    <h1>
        BeCitizen
    </h1>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" id="homelik" href="index.php">Головна<span class="sr-only">(current)</span></a>
          </div>
        </div>
    </nav>
</header>

<?php
      if(empty($_COOKIE['username'])) {
?>
<div class="container">
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="row">
      <div id="header">
        <h2>Login</h2>
      </div>
      <div class="vl">
        <span class="vl-innertext">OR</span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text"
               name="username"
               placeholder="Username"
               required>
        <input type="password"
               name="password"
               placeholder="Password"
               required>
        <input type="submit"
               name="submit"
               value="Login">
      </div>

    </div>
  </form>
</div>
<?php
      }
      else {
        ?>
        <p><a href = "exit.php">Exit</a></p>
        <?php
      } ?>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="register.php" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
<footer>
  <footer>
    <div id="contactinfo">
      <p>123-122-1323 zastavna@gmail.com</p>
      <p>1715 Soborna str, Lemberg, Ukraine</p>
      <p>©2020 YX Studio</p>
    </div>
  </footer>
</footer>

</body>
</html>