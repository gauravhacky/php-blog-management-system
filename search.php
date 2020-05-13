<?php
include "includes/header.php"; 
include "includes/nav.php";
if(isset($_REQUEST["submit"]))
{
  
   $dbservername="localhost";
   $dbuser="root";
   $dbpassword="";
   $dbname="myblog";
   $connection=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
$data=$_REQUEST["searchdata"];  
$query=mysqli_query($connection,"select * from posts where title like '$data' or content like '$data' or title like '%$data%' or content like '%$data%'");
$row_count=mysqli_num_rows($query);
?>
<div class="row">
       <div class="col 19 m9 s12">
<?php
for($i=1;$i<=$row_count;$i++)
{
   $row=mysqli_fetch_array($query);
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
}
?>
</div>
<div class="col 13 m3 s12">
<?php
include "includes/sidebar.php";
?>
</div>

