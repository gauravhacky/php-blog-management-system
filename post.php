<?php include "includes/header.php" ?>
<?php include "includes/nav.php" ?>
<div class="row">
 <!--main post area-->
 <div class="col 19 m9 s12">
 <?php
 if(isset($_GET['id']))
 {
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($connection,$id);
    $id=htmlentities($id);
    $sql="select * from posts where id=$id";
    $res=mysqli_query($connection,$sql);
    if(mysqli_num_rows($res)>0)
    {
     $row=mysqli_fetch_assoc($res); 
     $title=$row['title'];
     $content=$row['content'];
    ?>
    <h5><?php echo ucwords($title) ?> </h5>
    <div class="card-panel">
    <p class="flow-text"><?php echo ucwords($content) ?> </p>
    <h5>Related Post</h5>
    <div class="row">
    <?php
    $sql="select * from posts order by rand() limit 6";
    $res=mysqli_query($connection,$sql);
    if(mysqli_num_rows($res)>0)
    {
       while($row=mysqli_fetch_assoc($res))
       {
   ?>
      <div class="col 13 m4 s6">
         <div class="card">
            <div class="card-image">
               <img src="img/<?php echo $row['feature_image']; ?>" alt="img">
               <span class="card-title black-text truncate"><?php echo  $row['title'] ?></span>
            </div> 
            
            <div class="card-action teal center">
               <a href="post.php?id=<?php echo $row['id']; ?>" class="white-text">Read More</a>
            </div>
         </div>
      </div>
      
      <?php
       }
      }
      ?>
 </div>
 
    </div>
    <?php
    }
    else
    {
       header("Location: index.php");
    }
 }
 ?>
 </div>
 <!--related blog area-->
 
<!--Siderbar area-->
 <div class="col 13 m3 s12">
    <?php  include "includes/sidebar.php" ?>
 </div>
  
 </div>
<?php include "includes/footer.php" ?>