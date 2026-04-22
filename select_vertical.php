
<?php


include('connect.php');
mysqli_set_charset($con,"utf8");
$sel= mysqli_query($con,"select * from add_new_machine");

?>

<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  
  <!-- excel -->

  <script src="table2excel.js"></script>
  
    <title>Document</title>
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
  <li><a href="home_view.php">الرئيسية</a></li>
  <li><a href="add_frame_main.php">اضافة </a></li>
  <li><a href="maint_new.php">اضافة الى الاعطال</a></li>
  <li><a href="syana.php">  تحت الصيانة</a></li>
  <li><a href="maint_only_table.php">  عرض كل الأعطال</a></li>


  <li style="float:left"><a class="active" href="index.html">تسجيل خروج</a></li>
</ul>
<!--  -->



<div class="container">
<a href="select_card.php"><button class="btn btn-info mb-5 mt-3" style="" >عرض الجدول رأسي </button></a>
<button class="btn btn-success mb-5 mt-3" style="" id="downloadExcel">حفظ اكسيل</button>


<h3 class="text-center">عرض جميع الالات </h3>
    <table class="table" id="example-table">
        <tr>
            <th> اسم المعدة</th>
            <th>نوع المعدة </th>
            <th> رقم المعدة</th>
            <th> تاريخ الرخصة</th>
            <th>تاريخ التأمين</th>
            <th>تاريخ الفحص</th>
            <th>مكان العمل</th>
            <th>تاريخ الاستلام</th>
            <th>اسم المسئول</th>
            <th>موعد الصيانة</th>
            <th>مبلغ الصيانة</th>
            
            
        </tr>
        <?php
        
        while($res=mysqli_fetch_array($sel))
        {
        ?>
       
        <tr>
        <td><?php echo $res['m_name']?></td>
        <td><?php echo $res['m_type']?></td>
        <td><?php echo $res['m_number']?></td>
        <td><?php echo $res['rokhsa_date']?></td>
        <td><?php echo $res['tameen_date']?></td>
        <td><?php echo $res['fahs_date']?></td>
        <td><?php echo $res['m_work_loc']?></td>
        <td><?php echo $res['rec_date']?></td>
        <td><?php echo $res['masol_name']?></td>
        <td><?php echo $res['main_date']?></td>
        <td><?php echo $res['main_pay']?></td>
       

            
            
            
<!--             
            <td><button class="btn btn-sm btn-success"> تم الاصلاح </button></td>

            <form action="#" method="post">
              <input type="hidden" name="id" value="">
            <td><input type="submit" name="delete" class="btn btn-sm btn-warning" value="حذف "> </td>
            </form> -->
          
          

        </tr>
        <?php
        }
        ?>
       
        

    </table>
   
    </div>
</div>

<script>
        document.getElementById('downloadExcel').addEventListener('click',function(){

            
  var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("#example-table"));

        });
    </script>
