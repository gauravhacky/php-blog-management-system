<?php
ob_start();
session_start();
include "../admin/includes/db.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--import material css-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <!-- <link type="text/css" rel="stylesheet" href="../css/main.css" /> -->
    <link rel="stylesheet" href="../css/materialize.min.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
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
    <span class="name red-text">Gaurav</span>
    <span class="name blue-text">gaurav@yopmail.com</span>
    </div>
     </li>
     <li>
         <a href="">Dashboard</a>
     </li>
     <li>
         <a href="">Posts</a>
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
    <!--Main content started-->
    <div class="main">
        <div class="row">
            <div class="col-16 m6 s12">
                <ul class="collection with-header">
                    <li class="collection-header">
                  <h5>  Recent Posts </h5>
                 </li>
                 <li class="collection-item">
                    <a href=""> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, asperiores.</a><br/>
                    <span><a href="">Edit</a> | <a href="">Delete</a> | <a href=
                "">Share</a></span>
                 </li>
                </ul>
            </div>
        <div class="col 16 m6 s12">
        </div>
        </div>
    </div>

   
<script>
    $(document).ready(function() {
        $('.button-collapse').sideNav();
    });
</script>
</body>

</html>