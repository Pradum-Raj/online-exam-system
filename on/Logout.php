<?php
    session_start();
    session_unset();
    session_destroy();
    header('location:Adminlogin.php ? logout' );
    header('location:index.php ? logout' );





?>