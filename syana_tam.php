
<?php
include('connect.php');
mysqli_set_charset($con,"utf8");
// $id=$_POST['id_up'];
// $sel=mysqli_query($con,"select * from a3tal where id='$id'");
$sel1=mysqli_query($con,"select * from esla7_tam");

// $sel=mysqli_query($con,"select * from add_new_machine");





 ?>

<html lang="en" dir="rtl">
<head>
  <title>الصيانة</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

.mine_alarm{
  display:none;
}
    </style>

    <!-- excel -->

  <script src="table2excel.js"></script>
  
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

  <!-- صيانة او اصلاح جدول-->
  <br>
  <br>
 
  
  <div><h3 class="text-primary text-center">جاري الإصلاح- تحت الصيانة</h3></div>
  <br>
<div class="container table-responsive">
  <!-- excel -->
<button class="btn btn-success mb-5 mt-3" style="" id="downloadExcel">حفظ اكسيل</button>
<!--  -->
<a href="syana_tam.php" style="font-size:24px;font-weight:bolder;color:brown; margin-right:70%">ما تم إصلاحه</a>
<table class="table table-responsive" id="example-table">
  <tr>
            <th>المعدة</th>
            <th>سبب العطل</th>
            <th>تاريخ العطل</th>
            <th>قطع الغيار</th>
            <th>تاريخ ووقت الاصلاح</th>

            
  </tr>


  <?php
  while($row=mysqli_fetch_array($sel1))
  {
    ?>

  <tr>



  <td><?php echo $row['name']?></td>
  <td><?php echo $row['sabab']?></td>
  <td><?php echo $row['otl_date']?></td>
  <td><?php echo $row['ghiar']?></td>
  <td><?php echo $row['esla7_date']?></td>


  <!-- <td><?php //echo $row['main_date']?></td>
  <td><?php //echo $row['main_pay']?></td> -->

  




  
 
<?php }?>


              


</body>