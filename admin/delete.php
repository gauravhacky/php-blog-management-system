<?php
include "includes/header.php";
if($_POST['id'])
{
$id=mysqli_real_escape_string($connection,$_POST['id']);
$res = "DELETE FROM `posts` WHERE id='$id'";
mysqli_query($connection,$res);
}
?>