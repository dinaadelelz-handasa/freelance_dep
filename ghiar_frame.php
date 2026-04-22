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
  <li><a href="ghiar_frame.php">   المستودع</a></li>
  <li style="float:left;"><a href="user_emp_history.php" > المستخدمين</a></li>


  <li style="float:left"><a class="active" href="index.html">تسجيل خروج</a></li>
</ul>
<!--  -->


<div style="margin-top:50px;">

<iframe src="ghiar_frame_right.php" frameborder="0" width="20%" height="700px" ></iframe>
<iframe src="left.php" frameborder="1" width="79%" height="700px" name="left_f"></iframe>
</div>