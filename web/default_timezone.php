<?php
    if (!isset($_SESSION['time'])) {
        date_default_timezone_set(date_default_timezone_get());
        $_SESSION['time'] = "GMT ".date('Z')/3600;
    }
?>