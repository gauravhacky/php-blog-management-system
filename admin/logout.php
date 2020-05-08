<?php
include "includes/header.php"; 

if(isset($_SESSION['username']))
{
    unset($_SESSION['username']);
    session_destroy();
    header("Location: login.php");
}
else
{
    header("Location: login.php");
}

?>
