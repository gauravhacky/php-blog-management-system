<?php  include "includes/nav.php";  
$dir="../img/";
$files=scandir($dir);
if($files)
{
    ?>
    <div class="main"> 
    <div class="row">
  
    <?php
    foreach($files as $file)
    {
        if(strlen($file)>2)
        {
            ?>
    <div class="col 12 m3 s6">
    <div class="card">
    <div class="card-image">
    <img src="../img/<?php echo $file;?>" alt="">
    <span class="card-title"><?php echo $file;?></span>
    </div>
    </div>
    </div>
 <?php  
        }
}
}
?>
</div>
</div>