<?php
   include "includes/header.php";
   ?>

   <body>
      <nav class="teal">
         <div class="nav-wrapper">
            <div class="container">
               <a href="" class="brand-logo center">TechHunter</a>
               <a href="" class="button-collapse show-on-large" data-activates="sidenav"><i class="material-icons">menu</i></a>
            </div>
         </div>
      </nav>
      <ul class="side-nav fixed" id="sidenav">
         <li>
            <div class="user-view">
               <div class="background">
                  <img src="../img/adminbackg.jpg" alt="" class="responsive-img">
               </div>
               <a href=""><img src="../img/img1.jpg" alt="" class="circle"></a>
               <span class="name white-text"><?php echo $_SESSION['username']; ?></span>
               <span class="email white-text">
               <?php
               $user=$_SESSION['username'];
               $sql="select email from users where username='$user'";
               $res=mysqli_query($connection,$sql);
               $row=mysqli_fetch_assoc($res);
               echo $row['email'];
               ?>
               </span>
            </div>
         </li>
         <li>
            <a href="dashboard.php">Dashboard</a>
         </li>
         <li>
            <a href="post.php">Posts</a>
         </li>
         <li>
            <a href="image.php">Image</a>
         </li>
         <li>
            <a href="">Comments</a>
         </li>
         <li>
            <a href="">Setting</a>
         </li>
         <div class="divider">
         </div>
         <li>
            <a href="logout.php">Logout</a>
         </li>
      </ul>
     </body>
     </html>