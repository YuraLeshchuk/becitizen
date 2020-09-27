<?php
setcookie("user", $user['username'], time()-3600*24*300,"/");
header('location: /' );
 ?>