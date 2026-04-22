<?php
include('connect.php');
if(isset($_POST['delete']))
{

    ?>
              <script>alert('sure?');</script>
              <?php
            
    

$del=mysqli_query($con,"delete from a3tal where id='$_POST[id]'");
if($del)
{
    ?>
    <script>alert("deleteeed");
window.loaction.replace("maint.php");
</script>
    <?php
}

else{
    ?>

    <script>alert("not dleted");</script>
    <?php
}


}
?>