<?php
ob_start();
include "../admin/includes/db.php";
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
    <title>Write Post </title>
</head>
<?php include "includes/nav.php" ?>
<div class="main">
<form action="write_check.php" method="POST" enctype="multipart/form-data">
    <div class="card-panel">
    <?php if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
     ?>
    <h5>Title For Post</h5>
    <textarea name="title" class="materialize-textarea" placeholder="Title for post">
    </textarea>
    <h5>Post Content</h5>
    <textarea name="ckeditor"  id="editor1" class="materialize-ckeditor">
    </textarea>
    <div class="center">
    <input type="submit" value="Pullish" name="publish" class="btn white-text" white-text>
    </div>
    
</div>
</form>
<script>
$(document).ready(function() {
        $('.button-collapse').sideNav();
        $('textarea').each(function(){
        $(this).val($(this).val().trim());
        }
    );
    });
    </script>
    <script>
  CKEDITOR.replace( 'editor1' );
</script>
  