<?php include "includes/header.php" ?>
<?php include "includes/nav.php" ?>
<div class="row">
   <!--This is main content area-->
   <div class="col 19 m9 s12">
   <?php
    $sql="select * from posts order by id DESC";
    $res=mysqli_query($connection,$sql);
    if(mysqli_num_rows($res)>0)
    {
       while($row=mysqli_fetch_assoc($res))
       {
   ?>
      <div class="col 13 m4 s6">
         <div class="card small">
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
      }
      ?>
     </div>
   <!--This is siderbar area-->
   <div class="col 13 m3 s12">
      <?php  include "includes/sidebar.php" ?>
</div>
<?php include "includes/footer.php" ?>
