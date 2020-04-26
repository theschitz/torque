<?php
    session_set_cookie_params(0, dirname($_SERVER['SCRIPT_NAME']));
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION['time'] = $_GET['time'];
?>
