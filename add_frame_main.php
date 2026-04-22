

<?php
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>البيانات</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>



   <!-- icons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- excel -->

  <script src="table2excel.js"></script>
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


@media screen and (max-width: 600px) {
  .card-body,.col, {
   
    display:block;
    margin-top: 0;
    
  }
  ul,li{
      width:100%;
      margin-top:0px;
  }
}

.mine_alarm{
        display: none;
    }
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
  <li><a href="ghiar_frame.php">  قطع الغيار</a></li>


  <li style="float:left;"><a href="user_emp_history.php" > المستخدمين</a></li>


  <li style="float:left"><a class="active" href="index.html">تسجيل خروج</a></li>
</ul>
<!--  -->


<div style="margin-top:50px;">

<iframe src="add_frame_right.php" frameborder="0" width="19%" height="700px" ></iframe>
<iframe src="left.php" frameborder="1" width="79%" height="700px" name="left_f"></iframe>
</div>





<!--  -->
<!-- alert tameen -->
<?php 
mysqli_set_charset($con,"utf8");

$d1=date("Y-m-d",strtotime('+1 days'));
$sel_where_date1=mysqli_query($con,"select * from add_new_machine_qlabat where  	tameen_date='$d1'");


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
      $sel_alarm1=mysqli_query($con,"select * from add_new_machine_qlabat");
      
      
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
$sel_where_date2=mysqli_query($con,"select * from add_new_machine_qlabat where  fahs_date='$d2'");


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
      $sel_alarm2=mysqli_query($con,"select * from add_new_machine_qlabat");
      
      
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
$sel_where_date3=mysqli_query($con,"select * from add_new_machine_qlabat where  main_date='$d3'");


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
      $sel_alarm3=mysqli_query($con,"select * from add_new_machine_qlabat");
      
      
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