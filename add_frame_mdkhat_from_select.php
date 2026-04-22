
<?php

include('connect.php');
mysqli_set_charset($con,"utf8");
if(isset($_POST['sub_add']))
{
// $image=$_FILES['f1']['tmp_name']; very good code

 
 
 // Get image name another working code
 $image = $_FILES['image']['name'];
 
 // image file directory
 $target = "images/".basename($image);


 $ins=mysqli_query($con,"insert into add_new_machine(m_img,m_name,m_number,rokhsa_date,tameen_date,fahs_date,m_work_loc,rec_date,masol_name,hours,m_status,m_type,main_date,main_pay,addad,shraa,waseqa)values('$image','$_POST[name]',$_POST[num],'$_POST[rokh]','$_POST[tameen]','$_POST[fahs]','$_POST[loc]','$_POST[rec_date]','$_POST[masol]',$_POST[hours1],'$_POST[ch1]','$_POST[type]','$_POST[main_date]',$_POST[main_pay],'$_POST[addad]','$_POST[shraa]','$_POST[waseqa]')");



  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }



 if($ins)
 {
  ?>
  <script>confirm("تم اضافة المضخة الى النظام بنجاح");
window.location.replace("add_frame_mdkhat_from_select.php");
</script>
  
  <?php
 }
 else{

  die("error in: ".mysqli_error($con));
 }

 //add to add_new_machine_add_new_machine_mdakhat


 $ins=mysqli_query($con,"insert into add_new_machine_mdakhat(m_img,m_name,m_number,rokhsa_date,tameen_date,fahs_date,m_work_loc,rec_date,masol_name,hours,m_status,m_type,main_date,main_pay,addad,shraa,waseqa)values('$image','$_POST[name]',$_POST[num],'$_POST[rokh]','$_POST[tameen]','$_POST[fahs]','$_POST[loc]','$_POST[rec_date]','$_POST[masol]',$_POST[hours1],'$_POST[ch1]','$_POST[type]','$_POST[main_date]',$_POST[main_pay],'$_POST[addad]','$_POST[shraa]','$_POST[waseqa]')");
}
// }

 
?>

<!DOCTYPE html>
<html dir="rtl">
<head>
  <title>اضافة</title>
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
.mine_alarm
{
  display:none;
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

  <li style="float:left;"><a href="user_emp_history.php" > المستخدمين</a></li>


  <li style="float:left"><a class="active" href="index.html">تسجيل خروج</a></li>
</ul>
<!--  -->


<h2 class="text-center">أضافة مضخة - كرين إلى النظام</h2>

<div class="container-fluid bg-light">
  <form action="#" method="post" enctype="multipart/form-data">
<div class="row">
  <div class="col-25">
        <label for="fname">تحميل صورة </label>
      </div>
      <div class="col-75"  style="direction:rtl" >
        <input type="file"  name="image" required >
        </div>
        </div>

    <div class="row">
      <div class="col-25">
        <label for="fname">اسم </label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" required >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">نوع </label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="type" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">رقم </label>
      </div>
      <div class="col-75">
        <input type="text" name="num" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">تاريخ استلام </label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="date" name="rec_date" required >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">تاريخ انتهاء الرخصة</label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="date" name="rokh" required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="country">تاريخ انتهاء التأمين</label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="date" name="tameen" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country"> رقم وثيقة التأمين </label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="text" name="waseqa" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">   تارخ الشراء </label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="date" name="shraa" required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="country">   رقم العداد </label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="text" name="addad" required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="country">تاريخ انتهاء الفحص الدوري</label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="date" name="fahs" required >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">موعد الصيانة</label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="date" name="main_date" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">مبلغ الصيانة</label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="text" name="main_pay" class="w-50"  required> ريال
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="country">موقع العمل الحالي</label>
      </div>
      <div class="col-75">
        <input type="text" name="loc" required>
      </div>
    </div>

   


    <div class="row">
      <div class="col-25">
        <label for="country">اسم المسئول</label>
      </div>
      <div class="col-75">
        <input type="text" name="masol" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">عدد الساعات</label>
      </div>
      <div class="col-75">
        <input type="number" name="hours1" class="w-25" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">حالة </label>
      </div>
      <div class="col-75" style="direction:rtl">
        <label for="">قيد التشغيل</label>
        <input type="checkbox" name="ch1" value="قيد التشغيل" checked="checked"> 
        <label for="">معطلة</label>
        <input type="checkbox" name="ch1" value="معطلة">
      </div>
    </div>


    <div class="row" style="display:flex; justify-content:center">
      <input type="submit" value="إضافة جديد" style="width:170px;font-size:18px" name="sub_add">
    </div>
  </form>
</div>





<!--  -->
<!--  -->
<!--  -->
<!-- alert tarkhees -->
<?php 
$d=date("Y-m-d",strtotime('+1 days')); //tomorroww
$sel_where_date=mysqli_query($con,"select * from add_new_machine where  rokhsa_date='$d'");


  //  echo $res_where_date['m_name'];


?>

<div class=" mine_alarm alert alert-danger alert-dismissible fade show w-25 fixed-top" style="top:50px;right:75% ;background-color:red;color:yellow;" id="alarmm">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>انذار!</strong> يرجى تجديد رخصة  <?php 
        while($res_where_date=mysqli_fetch_array($sel_where_date))
        {
        echo $res_where_date['m_name'].'    و    ';
        
      }
        ?>
غدا
      </div>




      <?php
      include('connect.php');
      $sel_alarm=mysqli_query($con,"select * from add_new_machine");
      
      
      while($row_alarm=mysqli_fetch_array($sel_alarm))
      {
        // echo $row_alarm['rokhsa_date'].'<br>';

        // if($row_alarm['rokhsa_date']==date("Y-m-d",strtotime('tomorrow')))
        if($row_alarm['rokhsa_date']==date("Y-m-d",strtotime('+1 days')))
        {
          ?>
          <script>
            document.getElementById('alarmm').style.display='block';

</script>
          <?php

        }
      }
//test dates code for test to myself

      // echo date("Y-m-d");
      // echo '<br>';
      //  echo date("Y-m-d");
        ?>





<!--  -->
<!-- alert tameen -->
<?php 
$d1=date("Y-m-d",strtotime('+1 days'));
$sel_where_date1=mysqli_query($con,"select * from add_new_machine where  	tameen_date='$d1'");


  //  echo $res_where_date['m_name'];


?>


<div class=" mine_alarm alert alert-danger alert-dismissible fade show w-25 fixed-top" style="top:120px;right:75% ;background-color:red;color:yellow;" id="alarmm1">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>انذار!</strong> يرجى تجديد تأمين  <?php 
        while($res_where_date1=mysqli_fetch_array($sel_where_date1))
        {
        echo $res_where_date1['m_name'].'    و    ';
        
      }
        ?>
        غدا
      </div>

      <?php
      include('connect.php');
      $sel_alarm1=mysqli_query($con,"select * from add_new_machine");
      
      
      while($row_alarm1=mysqli_fetch_array($sel_alarm1))
      {
      //  echo $row_alarm['rokhsa_date'].'<br>';

        // if($row_alarm['rokhsa_date']==date("Y-m-d",strtotime('tomorrow')))
        if($row_alarm1['tameen_date']==date("Y-m-d",strtotime('+1 days')))
        {
          ?>
          <script>
            document.getElementById('alarmm1').style.display='block';

</script>
          <?php

        }
      }
//test dates code for test to myself

      // echo date("Y-m-d");
      // echo date("Y-m-d",strtotime('+1 days'));
        ?>



<!--  -->

<!-- alert fahs_date -->
<?php 
$d2=date("Y-m-d",strtotime('+1 days'));
$sel_where_date2=mysqli_query($con,"select * from add_new_machine where  fahs_date='$d2'");


  //  echo $res_where_date['m_name'];


?>

<div class=" mine_alarm alert alert-danger alert-dismissible fade show w-25 fixed-top" style="top:180px;right:75% ;background-color:red;color:yellow;" id="alarmm_fahs">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>انذار!</strong>  يرجى فحص  <?php 
        while($res_where_date2=mysqli_fetch_array($sel_where_date2))
        {
        echo $res_where_date2['m_name'].'    و    ';
        
      }
        ?>
        غدا
      </div>
      <?php
      include('connect.php');
      $sel_alarm2=mysqli_query($con,"select * from add_new_machine");
      
      
      while($row_alarm2=mysqli_fetch_array($sel_alarm2))
      {
      //  echo $row_alarm['rokhsa_date'].'<br>';

        // if($row_alarm['rokhsa_date']==date("Y-m-d",strtotime('tomorrow')))
        if($row_alarm2['fahs_date']==date("Y-m-d",strtotime('+1 days')))
        {
          ?>
          <script>
            document.getElementById('alarmm_fahs').style.display='block';

</script>
          <?php

        }
      }
//test dates code for test to myself

      // echo date("Y-m-d");
      // echo date("Y-m-d",strtotime('+1 days'));
        ?>

<!--  -->

<!-- alert main_date صيانة -->
<?php 
$d3=date("Y-m-d",strtotime('+1 days'));
$sel_where_date3=mysqli_query($con,"select * from add_new_machine where  main_date='$d3'");


  //  echo $res_where_date['m_name'];


?>

<div class=" mine_alarm alert alert-danger alert-dismissible fade show w-25 fixed-top" style="top:240px;right:75% ;background-color:red;color:yellow;" id="alarmm_maint">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>انذار!</strong>  يرجى الصيانة  <?php 
        
        while($res_where_date3=mysqli_fetch_array($sel_where_date3))
{
        echo $res_where_date3['m_name'].'    و    ';
        
      }
        ?>
        غدا
      </div>
      <?php
      include('connect.php');
      $sel_alarm3=mysqli_query($con,"select * from add_new_machine");
      
      
      
      while($row_alarm3=mysqli_fetch_array($sel_alarm3))
      {
      //  echo $row_alarm['rokhsa_date'].'<br>';

        // if($row_alarm['rokhsa_date']==date("Y-m-d",strtotime('tomorrow')))
        if($row_alarm3['main_date']==date("Y-m-d",strtotime('+1 days')))
        {
          ?>
          <script>
            document.getElementById('alarmm_maint').style.display='block';

</script>
          <?php

        }
      }
//test dates code for test to myself

      // echo date("Y-m-d");
      // echo date("Y-m-d",strtotime('+1 days'));
        ?>


</body>
</html>
