<?php
ob_start();
session_start();
include "db.php";
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
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/validationscript.js"></script>
    <script type="text/javascript" src="../js/formvalidation.js"></script>
    <script type="text/javascript" src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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
   