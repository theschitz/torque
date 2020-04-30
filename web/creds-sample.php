<?php

// MySQL Credentials
$db_host = 'localhost';
$db_user = '';     // Enter your MySQL username
$db_pass = '';     // Enter your MySQL password
$db_name = 'torque';
$db_table = 'raw_logs';
$db_port = '';

// User credentials for Browser login
$auth_user = '';    //Sample: 'torque'
$auth_pass = '';    //Sample: 'open'

//If you want to restrict access to upload_data.php, 
// either enter your torque ID as shown in the torque app, 
// or enter the hashed ID as it can found in the uploaded data.
//The hash is simply MD5(ID).
//Leave empty to allow any torque app to upload data to this server.
$torque_id = '';        //Sample: 123456789012345
$torque_id_hash = '';   //Sample: 58b9b9268acaef64ac6a80b0543357e6
//Just 'settings', could be moved to a config file later.
$source_is_fahrenheit = false;
$use_fahrenheit = false;

$source_is_miles = false;
$use_miles = false;

$hide_empty_variables = true;
$show_session_length = true;

//  Date Format
$sesh_dates_format = "F d, Y  H:i:s";

/* From https://www.php.net/manual/en/function.date.php
* Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
* Mountain Standard Time (MST) Time Zone
*
* $today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
* $today = date("m.d.y");                         // 03.10.01
* $today = date("j, n, Y");                       // 10, 3, 2001
* $today = date("Ymd");                           // 20010310
* $today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
* $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
* $today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
* $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
* $today = date("H:i:s");                         // 17:16:18
* $today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
*/
?>
