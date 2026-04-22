<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipments</title>
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
.col,.col-sm-3{
  transition-property: transform;
  transition-duration: 2s;

}
.col,.col-sm-3:hover{
  transform:scale(1.05,1.05);

  
}

.mine_alarm{
        display: none;
    }
/*  */


/*  */
</style>
</head>
<body style="background-color: rgba(226, 243, 255, 0.981);">


<!--  -->
<ul>
  <li><a href="home_view.php">الرئيسية </a></li>
  <li class="li_bran"><a href="add_frame_main.php">اضافة </a>  
</li>
  <li><a href="maint_new.php">اضافة الى الاعطال</a></li>
  <li><a href="syana.php">  تحت الصيانة</a></li>
  <li><a href="maint_only_table.php">  عرض كل الأعطال</a></li>
  <li><a href="ghiar_frame.php"> المستودع</a></li>
  <li style="float:left;"><a href="user_emp_history.php" > المستخدمين</a></li>


  <li style="float:left"><a class="active" href="index.html">تسجيل خروج</a></li>
</ul>
<!--  -->

<strong><h2 class="text-center mt-2">نظام معدات ومركبات</h2></strong>
<div class="container"><a href="select_card.php" style="font-weight:bolder;color:darkred;font-size:20px">عرض الكـل</a></div>


<div class="container mt-4 tran" style="background-color: rgba(90, 90, 255, 0.981);">

<div class="row p-3">
  <div class="col-sm-3" >
    <!-- style="width:20%" -->

  <div class="card" style="width:100%">
      <img class="card-img-top" src="images/qallab.jpg" alt="Card image" style="width:100%">
      <div class="card-body">
        <h4 class="card-title">قلابات</h4>
        <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
        <a href="select_card_qlabat.php" class="btn btn-primary"> عرض الجميع</a>
      </div>
    </div>
  </div> <!--end col-->

  <!--  -->

  <div class="col-sm-3">

<div class="card" style="width:100%">
    <img class="card-img-top" src="images/crane.PNG" alt="Card image" style="width:100%;">
    <div class="card-body">
      
      <h4 class="card-title">ديانه- وانيت</h4>
      <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
      <a href="select_card_diana.php" class="btn btn-primary">عرض الجميع</a>
    </div>
  </div>
</div> <!--end col-->
<!--  -->

<div class="col-sm-3">

<div class="card" style="width:100%;">
    <img class="card-img-top" src="images/mdakha.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">كرين - مضخات </h4>
      <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
      <a href="select_card_mdakhat.php" class="btn btn-primary">عرض الجميع</a>
    </div>
  </div>
</div> <!--end col-->




<div class="col-sm-3">

<div class="card" style="width:100%;">
    <img class="card-img-top" src="images/kssara.png" alt="Card image" style="width:100%;height:140px">
    <div class="card-body">
      <h4 class="card-title">كسارات </h4>
      <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
      <a href="select_card_ksarat.php" class="btn btn-primary">عرض الجميع</a>
    </div>
  </div>
</div> <!--end col-->

</div> <!--end row-->

</div>

<!--  -->
<!--  -->



<!-- second row -->


<div class="container mt-4 p-3 tran" style="background-color: rgba(90, 90, 255, 0.981);">

<div class="row p-3">
  <div class="col-sm-3" >
    <!-- style="width:20%" -->

  <div class="card" style="width:100%">
      <img class="card-img-top" src="images/markbat.PNG" alt="Card image" style="width:100%">
      <div class="card-body">
        <h4 class="card-title"> مركبات صغيرة</h4>
        <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
        <a href="select_card_markbat.php" class="btn btn-primary"> عرض الجميع</a>
      </div>
    </div>
  </div> <!--end col-->

  <!--  -->

  <div class="col-sm-3">

<div class="card" style="width:100%">
    <img class="card-img-top" src="images/bus.png" alt="Card image" style="width:100%;">
    <div class="card-body">
      
      <h4 class="card-title"> باصات</h4>
      <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
      <a href="select_card_buses.php" class="btn btn-primary">عرض الجميع</a>
    </div>
  </div>
</div> <!--end col-->
<!--  -->

<div class="col-sm-3">

<div class="card" style="width:100%;">
    <img class="card-img-top" src="images/edara1.png" alt="Card image" style="width:100%;margin-bottom:35px">
    <div class="card-body">
      <h4 class="card-title">سيارات الإدارة</h4>
      <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
      <a href="select_card_edara.php" class="btn btn-primary">عرض الجميع</a>
    </div>
  </div>
</div> <!--end col-->




<div class="col-sm-3">

<div class="card" style="width:100%;">
    <img class="card-img-top" src="images/okhra.PNG" alt="Card image" style="width:80%">
    <div class="card-body">
      <h4 class="card-title">أخرى</h4>
      <!-- <p class="card-text"> John Doe is an architect and engineer</p> -->
      <a href="select_card_okhra.php" class="btn btn-primary">عرض الجميع</a>
    </div>
  </div>
</div> <!--end col-->

</div> <!--end row-->

</div>










    
</body>
</html>