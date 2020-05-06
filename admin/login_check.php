<?php
include "includes/header.php";
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $username=mysqli_real_escape_string($connection,$username);
    $password=mysqli_real_escape_string($connection,$password);
    $username=htmlentities($username);
    $password=htmlentities($password);
    $sql="select password from users where username='$username'";
    $result=mysqli_query($connection,$sql);
    $row=mysqli_fetch_assoc($result);
    $pass=$row['password'];
    if(password_verify($password,$pass))
    {
        $_SESSION['username']=$username;
        header("Location: dashboard.php");
    }
    else{
        header("Location: login.php");
        $_SESSION['message']="<div class='chip red black-text'>Sorry,Credentials Don't Match</div>";
    }
}
?>