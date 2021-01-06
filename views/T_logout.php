<?php
 
  session_start();
  if (isset($_SESSION['username'])) {
    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) { setcookie(session_name(), '', time() - 3600);    }
    session_destroy();
  }
  setcookie('username', '', time() - 3600);
  setcookie('password', '', time() - 3600);
  header('Location:T_login.php ');
?>