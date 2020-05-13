<?php
include "includes/db.php";
?>

<ul class="collection">
	  <li class="collection-item">
	  <h4>Search</h4>
     <form method="post" action="search.php">
<input type="text" id="search" name="searchdata" placeholder="Search Anything..." required="">
<input type="submit" class="btn" value="Search" name="submit">
</form>
		 </div>
         </li>
      </ul>
	  <div class="collection with-header">
	  <h5 style="padding-left:20px;">Trending Blogs</h5>
     <?php
    $sql="select * from posts order by id DESC";
    $res=mysqli_query($connection,$sql);
    if(mysqli_num_rows($res)>0)
    {
       while($row=mysqli_fetch_assoc($res))
       {
    ?>
	  <a href="" class="collection-item grey lighten-3"><?php echo $row['title']  ?> </a>
	  <?php
       }
      }
      ?>
  
	  </div>
   </div>
   