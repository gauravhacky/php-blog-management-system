<?php
include "includes/header.php";
if(isset($_POST['signup']))
{
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=mysqli_real_escape_string($connection,$email);
    $username=mysqli_real_escape_string($connection,$username);
    $password=mysqli_real_escape_string($connection,$password);
    $email=htmlentities($email);
    $username=htmlentities($username);
    $password=htmlentities($password);
    $password=password_hash($password,PASSWORD_BCRYPT);
    //echo $username,$password,$email;
    $sql_check="select * from users where email='$email' or username='$username'";
    $result_check=mysqli_query($connection,$sql_check);
    if(mysqli_num_rows($result_check)>0)
    {
        header("location:login.php");
        $_SESSION['message']="<div class='chip red black-text'>Account Already Exists,Please login to continue</div>";
    }
    else
    {
        $sql="insert into users(email,username,password) values('$email','$username','$password')";
        $result=mysqli_query($connection,$sql);
        if($result)
        {
            header("location:login.php");
            $_SESSION['message']="<div class='chip green black-text'>You have been Successfully Registeres,Login To Continue</div>";
        }
        else{
            header("location:login.php");
            $_SESSION['message']="<div class='chip red black-text'>Sorry something went wrong!</div>";
        }
    }
    

}
?>