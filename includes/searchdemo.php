<?php
include "includes/header.php";
include "includes/navbar.php";
if(isset($_GET['submit']))
 
{
    $q= $_GET['search'];
    echo $q;
    $q=mysqli_real_escape_string($connection,$q);
    $q=htmlentities($q);
    $sql="select * from posts where title like '$q' or content like '$q' or title like '%$q%' or content like '%$q%'";
    $res=mysqli_query($connection,$sql);
    if(mysqli_num_rows($res)>0)
    
   {
       ?>
       <div class="row">
       <div class="col 19 m9 s12">
       
       <?php
        while($row=mysqli_fetch_assoc($ ))
       {
   ?>
   
      <div class="col 13 m3 s6">
         <div class="card ">
            <div class="card-image">
               <img src="img/<?php echo $row['feature_image']; ?>" alt="img">
               <span class="card-title black-text truncate"><?php echo  $row['title'] ?></span>
            </div>
            <div class="card-content truncate">
              <?php echo $row['content']  ?>
            </div>
            <div class="card-action teal center">
               <a href="post.php?id=<?php echo $row['id']; ?>" class="white-text">Read More</a>
            </div>
         </div>
      </div>
      <?php
       }
       
     ?>
</div>
<div class="col 13 m3 s12">
<?php
include "includes/sidebar.php";
?>
</div>
  <?php

    }

else
{
?>
<h5>Sorry NO Data Found ! </h5>


<?php
}

}

else
{
  header("Location:index.php");
}


?>
