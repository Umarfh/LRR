<?php
    $currentTime = time();
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
     }

    if($_SESSION['expire'] != null && $currentTime > $_SESSION['expire']) {
        include 'logout.php';
    }
?>