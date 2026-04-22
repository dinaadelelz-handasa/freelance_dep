
<?php
include('connect.php');
mysqli_set_charset($con,"utf8");
// $id=$_POST['id_up'];
// $sel=mysqli_query($con,"select * from a3tal where id='$id'");
$sel1=mysqli_query($con,"select * from user_admin");
$sel2=mysqli_query($con,"select * from user_emp");


 ?>

<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>المستخدمين</title>
    <style>






        /*  */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
  
}
/*  */


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .coll2, .coll1,input, input[type=submit] {
    width: 100%;
    margin-top: 0;
    
  }
  ul,li{
      width:100%;
      margin-top:0px;
  }
}
    </style>
</head>
<body>

<!--  -->


<ul>
  <li><a href="select_card.php">الرئيسية</a></li>
  <li><a href="add.php">اضافة </a></li>
  <li><a href="maint_new.php">اضافة الى الاعطال</a></li>
  <li><a href="syana.php">  تحت الصيانة</a></li>
  <li style="float:left;"><a href="user_emp_history.php" > المستخدمين</a></li>
  <li><a href="maint_only_table.php">  عرض كل الأعطال</a></li>



  <li style="float:left"><a class="active" href="index.html">تسجيل خروج</a></li>
</ul>
<!--  -->

  <!-- صيانة او اصلاح جدول-->
  <br>
  <br>
  <div><h3 class="text-primary text-center"> عرض المسئولين </h3></div>
  <br>
<div class="container-fluid table-responsive">

<table class="table table-responsive">
  <tr>
            <th>اسم المستخدم</th>
            <th>كلمة المرور</th>
            

            
  </tr>


  <?php
  while($row=mysqli_fetch_array($sel1))
  {
    ?>
  <tr>
   
  <td><input type="text"  class="form-control border-0" value="<?php echo $row['username']?>" readonly></td>
  <td><input type="text"   class="form-control border-0" value="<?php echo $row['password']?>" readonly></td>
  
  
  
  
  <td>



              <!-- delete row -->
          
            <form action="#" method="post">
              <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <td><input type="submit" name="delete" class="btn btn-sm btn-danger" value="حذف  من المستخدمين"> 
          </td>
            </form>
           <?php
           if(isset($_POST['delete']))
           {

            ?>

            <script>alert('هل أنت متأكد من حذف الصف');</script>
            <?php
            $del=mysqli_query($con,"delete from user_admin where id='$_POST[id]'");
            if($del)
            {
              ?>
              <script>
                alert("تم حذف الصف");
                window.location.replace('user_emp_history.php');
              </script>
              <?php
            }
           }
           ?>

<?php
  }
?>
</td>





</table>
</div>


<!--  -->





<div><h3 class="text-primary text-center"> عرض مستخدمين اخرين </h3></div>
  <br>
<div class="container-fluid table-responsive">

<table class="table table-responsive">
  <tr>
            <th>اسم المستخدم</th>
            <th>كلمة المرور</th>
            

            
  </tr>


  <?php
  while($row1=mysqli_fetch_array($sel2))
  {
    ?>
  <tr>
   
  <td><input type="text"  class="form-control border-0" value="<?php echo $row1['username']?>" readonly></td>
  <td><input type="text"   class="form-control border-0" value="<?php echo $row1['password']?>" readonly></td>
  
  
  
  
  <td>



              <!-- delete row -->
          
            <form action="#" method="post">
                
              <input type="hidden" name="id" value="<?php echo $row1['id']?>">
            <td><input type="submit" name="delete" class="btn btn-sm btn-danger" value="حذف  من المستخدمين"> 
          </td>
            </form>
           <?php
           if(isset($_POST['delete']))
           {

            ?>

            <script>alert('هل أنت متأكد من حذف الصف');</script>
            <?php
            $del=mysqli_query($con,"delete from user_emp where id='$_POST[id]'");
            if($del)
            {
              ?>
              <script>
                alert("تم حذف الصف");
                window.location.replace('user_emp_history.php');
              </script>
              <?php
            }
           }
           ?>

<?php
  }
?>
</td>





</table>
</div>







</body>