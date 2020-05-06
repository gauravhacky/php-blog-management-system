<?php
ob_start();
include "../admin/includes/db.php";
include "dashboard.php";
?>
<?php
if(isset($_POST['publish']))
{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($connection,$id);
    $id=htmlentities($id);
    $content= $_POST['ckeditor'];
    $content=mysqli_real_escape_string($connection,$content);
    $content=htmlentities($content);
    $title=$_POST['title'];
    $title=mysqli_real_escape_string($connection,$title);
    $title=htmlentities($title);
    $author=$_SESSION['username'];
    //echo "Title is ".$title."<br/>";
    //echo "Content is ".$data."<br/>";
    $sql="update posts set title='$title',content='$content',author='$author' where id=$id";
    $res=mysqli_query($connection,$sql);
    if($res)
    {
        $_SESSION['message']="<div class='chip green white-text'>Post is Updated.</div>";
        header("Location: edit.php?id=".$id);
    }
    else 
    { 
        $_SESSION['message']="<div class='chip red black-text'>Sorry, Something went wrong.</div>";
        header("Location: edit.php?id=".$id);
    }

}

?>
