<?php
ob_start();
include "../admin/includes/db.php";
include "dashboard.php";
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
    $author=$_SESSION['username'];
    //echo "Title is ".$title."<br/>";
    //echo "Content is ".$data."<br/>";
    $image=$_FILES['image'];
    $img_name=$_FILES['image']['name'];
    $img_size=$_FILES['image']['size'];
    $tmp_dir=$_FILES['image']['tmp_name'];
    $type=$_FILES['image']['type'];
    if($type=="image/jpeg" || $type=="image/png" || $type=="image/jpg")
    {
        if($img_size <=2097152)
        {
            move_uploaded_file($tmp_dir,"../img/".$img_name);
    $sql="insert into posts (title,content,author,feature_image) value('$title','$content','$author','$img_name')";
    $res=mysqli_query($connection,$sql);
    if($res)
    {
        $_SESSION['message']="<div class='chip green white-text'>Post is Published</div>";
        header("Location: post.php");
    }
    else 
    {
        $_SESSION['message']="<div class='chip red black-text'>Sorry, Something went wrong.</div>";
        header("Location: write.php");
    }
    }
    else
    {
        $_SESSION['message']="<div class='chip red black-text'>Sorry, Sorry,That image size exceded 2 mb.</div>";
        header("Location: write.php");
    }
    }

    else{
        $_SESSION['message']="<div class='chip red black-text'>Sorry, Image format is not be supported.</div>";
        header("Location: write.php");
    }
}

?>
