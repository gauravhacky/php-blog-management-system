<?php
   ob_start();
   include "../admin/includes/db.php";
   include "includes/header.php";
   ?>
<!DOCTYPE html>
<html>
   <head>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--import material css-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/materialize.min.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
      <title>Welcome To Dashboard </title>
      <style>
         footer,header,.main{
         padding-left:300px;
         }
         @media(max-width:992px)
         {
         footer,header,.main{
         padding-left:300px;
         }
         }
      </style>
   </head>
   <body>
      <nav class="teal">
         <div class="nav-wrapper">
            <div class="container">
               <a href="" class="brand-logo center">TechHunter</a>
               <a href="" class="button-collapse show-on-large" data-activates="sidenav"><i class="material-icons">menu</i></a>
            </div>
         </div>
      </nav>
      <ul class="side-nav fixed" id="sidenav">
         <li>
            <div class="user-view">
               <div class="background">
                  <img src="../img/adminbackg.jpg" alt="" class="responsive-img">
               </div>
               <a href=""><img src="../img/img1.jpg" alt="" class="circle"></a>
               <span class="name white-text"><?php echo $_SESSION['username']; ?></span>
               <span class="email white-text">
               <?php
               $user=$_SESSION['username'];
               $sql="select email from users where username='$user'";
               $res=mysqli_query($connection,$sql);
               $row=mysqli_fetch_assoc($res);
               echo $row['email'];
               ?>
               </span>
            </div>
         </li>
         <li>
            <a href="dashboard.php">Dashboard</a>
         </li>
         <li>
            <a href="post.php">Posts</a>
         </li>
         <li>
            <a href="">Image</a>
         </li>
         <li>
            <a href="">Comments</a>
         </li>
         <li>
            <a href="">Setting</a>
         </li>
         <div class="divider">
         </div>
         <li>
            <a href="">Logout</a>
         </li>
      </ul>
     </body>
     </html>