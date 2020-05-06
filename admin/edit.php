<?php  include "includes/nav.php"; 
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($connection,$id);
    $id=htmlentities($id);
    //echo $id;
    $sql="select * from posts where id=$id";
    $res=mysqli_query($connection,$sql);
    if(mysqli_num_rows($res)>0)
    {
        $row=mysqli_fetch_assoc($res);
    ?>
    <div class="main">
<form action="edit_check.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
    <div class="card-panel">
    <?php if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
     ?>
    <h5>Title For Post</h5>
    <textarea name="title" class="materialize-textarea" placeholder="Title for post">
    <?php 
    echo $row['title'];
    ?>
    </textarea>
    <h5>Post Content</h5>
    <textarea name="ckeditor"  id="editor1" class="materialize-ckeditor">
    <?php 
    echo $row['content'];
    ?>
    </textarea>
    <div class="center">
    <input type="submit" value="Update" name="publish" class="btn white-text" white-text>
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
    <?php
    }
    else{
        redirect("Location:dashboard.php");
    }

}
?>
