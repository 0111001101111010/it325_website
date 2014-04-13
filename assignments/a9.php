<?php
session_start();
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Sorry! You need the secret password';
    exit;
} else {
    // var_dump($_SERVER);
    // var_dump($_SERVER['PHP_AUTH_PW']);
    // var_dump($_SERVER['PHP_AUTH_USER']);
    if($_SERVER['PHP_AUTH_USER']=="odu" && $_SERVER['PHP_AUTH_PW']=="it325"){
        include 'a9content.php';
    }
    else{
      echo 'Wrong Password<br>';
      echo 'If you cant log in please try a New Browser Session';
      $_SESSION = array();
      session_destroy();
      session_unset ();
    }
}
?>
