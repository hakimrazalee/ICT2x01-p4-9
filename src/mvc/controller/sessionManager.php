<?php
namespace Controller;
session_start();
// set timeout period in seconds
$inactive = 900;
// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
    $session_life = time() - $_SESSION['timeout'];
    if($session_life > $inactive)
    { session_destroy(); header("Location: ../controller/logoutController.php"); }
}
$_SESSION['timeout'] = time();