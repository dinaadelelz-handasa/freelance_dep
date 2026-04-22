<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تعديل</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body{
  margin:0px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: right;
  width: 15%;
  margin-top: 6px;
  font-weight:bolder;
}

.col-75 {
  float:right;
  width: 50%;
  margin-top: 6px;
  margin-right:70px
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  ul,li{
      width:100%;
      margin-top:0px;
  }
}

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
</style>
</head>
<body>


<!--  -->
<ul>
  <li><a href="home_view.php">الرئيسية</a></li>
  <li><a href="add_frame_main.php">اضافة </a></li>
  <li><a href="maint_new.php">اضافة الى الاعطال</a></li>
  <li><a href="syana.php">  تحت الصيانة</a></li>
  <li><a href="maint_only_table.php">  عرض كل الأعطال</a></li>


  <li style="float:left"><a class="active" href="index.html">تسجيل خروج</a></li>
</ul>
<!--  -->






<?php
include('connect.php');
mysqli_set_charset($con,"utf8");
$id=$_POST['id_up'];
$sel=mysqli_query($con,"select * from add_new_machine_mdakhat where id='$id'");

if($sel)
{
  while($row=mysqli_fetch_array($sel))
  {
    ?>






    <!-- form update -->
    
    <div class="container">
  <form action="#" method="post" enctype="multipart/form-data">

  <input type="text" name="id" value='<?php echo $row["id"]?>' readonly class="text-white" style="height:2px">
<input type="text" name="namee" value='<?php echo $row["m_name"]?>' readonly class="text-white" style="height:2px" >

<div class="row">
  <div class="col-25">
        <label for="fname">تحميل صورة المعدة</label>
      </div>
      <div class="col-75"  style="direction:rtl" >
        <input type="file"  name="image"  >
        </div>
        </div>


        <div class="row">
      <div class="col-25">
        <label for="fname">صورةالمعدة</label>
      </div>
      <div class="col-75">
        <div> <?php echo "<img src='images/".$row['m_img']."' style='width:200px' >"?></div>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="fname">اسم المعدة</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" value="<?php echo $row['m_name']?>" >
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="lname">نوع المعدة</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="type" value="<?php echo $row['m_type']?>" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">رقم المعدة</label>
      </div>
      <div class="col-75">
        <input type="text" name="num" value="<?php echo $row['m_number']?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">تاريخ استلام المعدة</label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="date" name="rec_date" value="<?php echo $row['rec_date']?>" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">تاريخ انتهاء الرخصة</label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="date" name="rokh" value="<?php echo $row['rokhsa_date']?>">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="country">تاريخ انتهاء التأمين</label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="date" name="tameen" value="<?php echo $row['tameen_date']?>">
      </div>
    </div>

    

    <div class="row">
      <div class="col-25">
        <label for="country">تاريخ انتهاء الفحص الدوري</label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="date" name="fahs" value="<?php echo $row['fahs_date']?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">موعد الصيانة</label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="date" name="main_date" value="<?php echo $row['main_date']?>" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">مبلغ الصيانة</label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="text" name="main_pay" class="w-50" value="<?php echo $row['main_pay']?>" > 
        ريال
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="country">موقع العمل الحالي</label>
      </div>
      <div class="col-75">
        <input type="text" name="loc" value="<?php echo $row['m_work_loc']?>">
      </div>
    </div>

   


    <div class="row">
      <div class="col-25">
        <label for="country">اسم المسئول</label>
      </div>
      <div class="col-75">
        <input type="text" name="masol" value="<?php echo $row['masol_name']?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">عدد الساعات</label>
      </div>
      <div class="col-75">
        <input type="number" name="hours1" class="w-25" value="<?php echo $row['hours']?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">حالة المعدة</label>
      </div>
      <select name="ch1" class="w-25">
        <option value="<?php echo $row['m_status']?>"><?php echo $row['m_status']?></option>
        <option value="قيد التشغيل">قيد التشغيل</option>
        <option value=" معطلة">معطلة</option>
      </select>
      <!-- <input type="text" class="w-25" name="ch1"  value="<?php echo $row['m_status']?>"> -->

<!-- new items waseqa shraa addad -->
<div class="row">
      <div class="col-25">
        <label for="country">رقم الوثيق</label>
      </div>
      <div class="col-75">
        <input type="text" name="waseqa" value="<?php echo $row['waseqa']?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country"> تاريخ الشراء</label>
      </div>
      <div class="col-75">
        <input type="date" name="shraa" value="<?php echo $row['shraa']?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">  رقم العداد</label>
      </div>
      <div class="col-75">
        <input type="text" name="addad" value="<?php echo $row['addad']?>">
      </div>
    </div>



    </div>


    <div class="row" style="display:flex; justify-content:center">
      <input type="submit" value="  تحديث بيانات" style="width:170px;font-size:18px" name="sub_update">
    </div>
  </form>
    </div> <!-- container end-->


<?php

  }
}

else{
  ?>
  <script>alert('لا يوجد بيانات للمعدة');</script>

  <?php
}
?>


<!-- update query -->
<?php 
if(isset($_POST['sub_update']))
{

  $update=mysqli_query($con,"update add_new_machine_mdakhat set m_name='$_POST[name]',m_number=$_POST[num],rokhsa_date='$_POST[rokh]',tameen_date='$_POST[tameen]',fahs_date='$_POST[fahs]',m_work_loc='$_POST[loc]',rec_date='$_POST[rec_date]',masol_name='$_POST[masol]',hours=$_POST[hours1],m_status='$_POST[ch1]',m_type='$_POST[type]',main_date='$_POST[main_date]',main_pay=$_POST[main_pay], waseqa='$_POST[waseqa]', shraa='$_POST[shraa]', addad='$_POST[addad]' where id='$_POST[id]'");



$update2=mysqli_query($con,"update add_new_machine set m_name='$_POST[name]',m_number=$_POST[num],rokhsa_date='$_POST[rokh]',tameen_date='$_POST[tameen]',fahs_date='$_POST[fahs]',m_work_loc='$_POST[loc]',rec_date='$_POST[rec_date]',masol_name='$_POST[masol]',hours=$_POST[hours1],m_status='$_POST[ch1]',m_type='$_POST[type]',main_date='$_POST[main_date]',main_pay=$_POST[main_pay] where m_name='$_POST[namee]'");
  if($update)
  {
    ?>
    <script>alert('تم تحديث البيانات بنجاح');
  window.location.replace('select_card_mdakhat.php');
  </script>

    <?php
  }
  else{
    ?>

    <script>alert('لم يتم تحديث البيانات');</script>
    <?php
    die(mysqli_error($con));

  }

}

?>
<?php

// update only image احسن بعيد لوحدها


// Get image name another working code
if(isset($_POST['sub_update']))
{
$image = $_FILES['image']['name'];
 
// image file directory
$target = "images/".basename($image);

$up_img=mysqli_query($con,"update add_new_machine_mdakhat set m_img='$image' where id='$id'");

if($up_img)
{
  echo "image updated";
}
else{
  die("error is: ".mysqli_error($con));
}
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  $msg = "Image uploaded successfully";
}else{
  $msg = "Failed to upload image";
}

}
?>
  
</body>
</html>