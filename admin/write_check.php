<?php
ob_start();
include "../admin/includes/db.php";
?>
<?php
if(isset($_POST['publish']))
{
    $content= $_POST['ckeditor'];
    $content=mysqli_real_escape_string($connection,$content);
    $content=htmlentities($content);
    $title=$_POST['title'];
    $title=mysqli_real_escape_string($connection,$title);
    $title=htmlentities($title);
    //echo "Title is ".$title."<br/>";
    //echo "Content is ".$data."<br/>";
    $sql="insert into posts (title,content) value('$title','$content')";
    $res=mysqli_query($connection,$sql);
    if($res)
    {
        $_SESSION['message']="<div class='chip green white-text'>Post is Published</div>";
        header("Location: write.php");
    }
    else 
    {
        $_SESSION['message']="<div class='chip red black-text'>Sorry, Something went wrong.</div>";
        header("Location: write.php");
    }

}

?>
