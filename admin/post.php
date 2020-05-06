<?php include "includes/nav.php" ?>
<div class="row main">
<div class="col s12 m12 l12">
<div class="card-panel">
<ul class="collection with-header">
                  <li class="collection-header teal">
                     <h5 class="white-text">  Recent Posts </h5>
                  </li>
                  <?php
                  $sql="select * from posts order by id desc";
                  $res=mysqli_query($connection,$sql);
                  //print_r($res);
                  if(mysqli_num_rows($res)>0)
                  {
                  while($row=mysqli_fetch_assoc($res))
                  {
                     ?>
                     <li class="collection-item">
                     <a href=""><?php echo $row['title']?></a>
                     <br/>
                     <span><a href="edit.php?id=<?php echo $row['id']; ?>"><i class="material-icons tiny">edit</i>Edit</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Delete</a> | <a href=
                        ""><i class="material-icons tiny green-text">share</i>Share</a></span>
                  </li> 
                   <?php
                  }
               }
                  ?> 
                  </ul>
                  </div>
                  </div>
                  </div>