<?php
// Start the session

session_start();

if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
    header("location: welcome.php");
    exit;
}

$_SESSION['expire'] = $_SESSION['start'] + (1 * 60);

?>