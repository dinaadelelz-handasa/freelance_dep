
<?php

include('connect.php');
mysqli_set_charset($con,"utf8");
if(isset($_POST['gh_add']))
{
  $ins=mysqli_query($con,"insert into ghiar_add_matloob (ghiar_name,ghiar_serial,ghiar_number,ghiar_kmia,ghiar_moda,price) values('$_POST[ghiar_name]','$_POST[ghiar_serial]','$_POST[ghiar_number]',$_POST[ghiar_kmia],'$_POST[ghiar_moda]','$_POST[price]')");

  if($ins)
  {
    ?>
    <script>alert("تم اضافة القطعة للمطلوبات ");
    window.location.replace("ghiar_add_matloob.php");
  </script>
    <?php

  }
  else
  {
    die(mysqli_error($con));
  }
 
}

 
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
  width: 19%;
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


.mine_alarm
{
  display:none;
}
/*  */
</style>
</head>
<body>


<!--  -->
<!-- <ul>
  <li><a href="select_card.php">المعدات</a></li>
  <li><a href="add.php">اضافة معدة</a></li>
  <li><a href="maint_new.php">اضافة الى الاعطال</a></li>
  <li><a href="syana.php">  تحت الصيانة</a></li>
  <li style="float:left;"><a href="user_emp_history.php" > المستخدمين</a></li>


  <li style="float:left"><a class="active" href="index.html">الرئيسية</a></li>
</ul> -->
<!--  -->


<h2 class="text-center">  قطع غيار مطلوبة</h2>

<div class="container-fluid bg-light m-5">
  <form action="#" method="post" enctype="multipart/form-data">
<!-- <div class="row">
  <div class="col-25">
        <label for="fname">تحميل صورة </label>
      </div>
      <div class="col-75"  style="direction:rtl" >
        <input type="file"  name="image" required >
        </div>
        </div> -->

        <div class="row">
      <div class="col-25">
        <label>اسم القطعة </label>
      </div>
      <div class="col-75">
        <input type="text"  name="ghiar_name"  >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>السريال(الكود) </label>
      </div>
      <div class="col-75">
        <input type="text"  name="ghiar_serial" >
      </div>
      </div>
      <div class="row">
      <div class="col-25">
        <label for="lname">رقم </label>
      </div>
      <div class="col-75">
        <input type="text" name="ghiar_number" >
      </div>

    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">الكمية </label>
      </div>
      <div class="col-75">
        <input type="number" name="ghiar_kmia" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">اسم المعدة الخاصة بها </label>
      </div>
      <div class="col-75" style="direction:rtl">
        <input type="text"  name="ghiar_moda"  >
      </div>
    </div>
    

    <div class="row">
      <div class="col-25">

      <label for="country">  سعر القطعة </label>
      </div>
      <div class="col-75" >
        <input type="text" name="price" class="w-50"  > ريال
      </div>
    </div>      
        <!-- <label for="country">الحالة </label>
      </div>
      <div class="col-75" style="direction:rtl">
        <label for=""> جديدة</label>
        <input type="checkbox" name="ch1" value=" جديدة" checked="checked"> 
        <label for="">مستخدمة</label>
        <input type="checkbox" name="ch1" value="مستخدمة">
      </div>
    </div> -->


    <div class="row" style="display:flex; justify-content:center">
      <input type="submit" value="إضافة  جديد" style="width:170px;font-size:18px" name="gh_add">
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
