<?php include "includes/nav.php";
if(isset($_SESSION['username']))
{
?>

<div class="row main">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <ul class="collection with-header">
                <li class="collection-header teal">
                    <h5 class="white-text">Recent Posts</h5>
                </li>
                <?php
                  $sql="select * from posts order by id desc";
                  $res=mysqli_query($connection,$sql);
                  //print_r($res);
                  if(mysqli_num_rows($res)>0) { while($row=mysqli_fetch_assoc($res)) { ?>

                <li class="collection-item">
                    <a href=""><?php echo $row['title']?></a>
                    <br />
                    <span>
                        <a href="edit.php?id=<?php echo $row['id']; ?>"><i class="material-icons tiny">edit</i>Edit</a> |
                        <a href="#" id="<?php echo $row['id']; ?>" class="delbutton"><i class="material-icons tiny red-text">clear</i>Delete</a> | <a href=""><i class="material-icons tiny green-text">share</i>Share</a>
                    </span>
                </li>
                <?php
                  }
               }
               else {
                  echo "<div class='chip red white-text'>No Post in Database,Write By clicking down circular button.</div>";
               }
                  ?>
            </ul>
        </div>
    </div>
</div>
<div class="fixed-action-btn">
          <a href="write.php" class="btn-floating btn btn-large white-text pulse"><i class="material-icons">edit</i></a>
      </div>
<script type="text/javascript">
    $(function () {
        $(".delbutton").click(function () {
            var del_id = $(this).attr("id");
            var info = "id=" + del_id;
            if (confirm("Sure you want to delete this post?"))
             {
                $.ajax({
                    type: "POST",
                    url: "delete.php", //URL to the delete php script
                    data: info,
                    success: function () {

                },
                });
                $(this).parents("li").hide();
            }
            return false;
        });
    });
</script>
<?php
}
else{
    $_SESSION['message']="<div class='chip red black-text'>Login To Continue</div>";
    header("Location: login.php");
}
?> 
