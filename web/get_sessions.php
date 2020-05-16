<?php
require_once ('creds.php');
require_once ('default_timezone.php');

if (!isset($_SESSION)) {
    session_set_cookie_params(0, dirname($_SERVER['SCRIPT_NAME']));
    session_start();
}
$timezone = $_SESSION['time'];

// Connect to Database
$con = mysqli_connect($db_host, $db_user, $db_pass) or die(mysqli_error($con));
mysqli_select_db($con, $db_name) or die(mysqli_error($con));

// Get list of unique session IDs
$sessionqry = mysqli_query($con, "SELECT COUNT(*) as `Session Size`, MIN(time) as `MinTime`, MAX(time) as `MaxTime`, session
                      FROM $db_table
                      GROUP BY session
                      ORDER BY time DESC") or die(mysqli_error($con));

// Create an array mapping session IDs to date strings
$seshdates = array();
$seshsizes = array();
$sids = array();
while($row = mysqli_fetch_assoc($sessionqry)) {
    $session_size = $row["Session Size"];
    $session_duration = $row["MaxTime"] - $row["MinTime"];
    $session_duration_str = gmdate("H:i:s", $session_duration/1000);

    // Drop sessions smaller than 60 data points
    if ($session_size >= 60) {
        $sid = $row["session"];
        $sids[] = preg_replace('/\D/', '', $sid);
        $seshdates[$sid] = date($sesh_dates_format, substr($sid, 0, -3));
        $seshsizes[$sid] = " (Length $session_duration_str)";
    }
    else {}
}

mysqli_free_result($sessionqry);
mysqli_close($con);

?>
