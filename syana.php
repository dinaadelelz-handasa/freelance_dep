
<?php
include('connect.php');
mysqli_set_charset($con,"utf8");
// $id=$_POST['id_up'];
// $sel=mysqli_query($con,"select * from a3tal where id='$id'");
$sel1=mysqli_query($con,"select * from esla7");

// $sel=mysqli_query($con,"select * from add_new_machine");




// send or insert into syana_tam.php
if(isset($_POST['esla7'])) // esla7 button bottom
{

      // $id_s=$_POST['id'];
      $sel_syana_to_syana_tam=mysqli_query($con,"select * from esla7 where id=$_POST[id]");
      while($res_tam=mysqli_fetch_array($sel_syana_to_syana_tam))
      {
        $name_tam=$res_tam['name'];
        $sabab_tam=$res_tam['sabab'];
        $otl_date_tam=$res_tam['otl_date'];
        $ghiar_tam=$res_tam['ghiar'];
      }


      $datee=date("Y-m-d");
      $insert_into_syana_tam=mysqli_query($con,"insert into esla7_tam (name,ghiar,otl_date,sabab,esla7_date)VALUES('$name_tam','$ghiar_tam','$otl_date_tam','$sabab_tam','$datee')");

      if($insert_into_syana_tam)
      {
   
       ?>
   
       <script>alert("تم ارسال المعدة  قسم ارشيف الاصلاحات");
        window.location.replace('syana.php');
        </script>
                       
        <?php
        }

      }

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
  <li><a href="ghiar_frame.php">  قطع الغيار</a></li>


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
            <th>موعد الصيانة</th>
            <th>مبلغ الصيانة</th>

            
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
  <td><?php echo $row['main_date']?></td>
  <td><?php echo $row['main_pay']?></td>

  




  
  <td>



              <!-- delete row -->
          
            <form action="#" method="post">
              <input type="hidden" name="id" value="<?php echo $row['id']?>">
              <input type="hidden" name="name11" value="<?php echo $row['name']?>">
             
            <td><input type="submit" name="esla7" class="btn btn-sm btn-success" value="تم الاصلاح"> 
          
            </form>
  </td>
           <?php
           if(isset($_POST['esla7']))
           {
            $id__=$_POST['id'];
          
            $name11=$_POST['name11'];

            ?>

            <script>alert('هل أنت متأكد من تمام اصلاح المعدة؟');</script>
            <?php
            $del=mysqli_query($con,"delete from esla7 where id='$_POST[id]'");
            $del2=mysqli_query($con,"delete from a3tal where name='$name11'");
            if($del)
            {
              ?>
              <script>
                alert("تم الاصلاح بنجاح والآلة قيد التشغيل");
                window.location.replace('syana.php');
              </script>
              <?php
            }

            $upd_add=mysqli_query($con,"update add_new_machine set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_qalab=mysqli_query($con,"update add_new_machine_qlabat set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_diana=mysqli_query($con,"update add_new_machine_diana set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_ksarat=mysqli_query($con,"update add_new_machine_ksarat set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_bus=mysqli_query($con,"update add_new_machine_bus set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_madkat=mysqli_query($con,"update add_new_machine_mdakhat set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_markbat=mysqli_query($con,"update add_new_machine_mrkabat set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_edara=mysqli_query($con,"update add_new_machine_edara set m_status='قيد التشغيل' where m_name='$name11'");


           }
           ?>
  
          </td>
  
  
  
  
  <td>



              <!-- delete row -->
          
            <form action="#" method="post">
              <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <td><input type="submit" name="delete" class="btn btn-sm btn-warning" value="حذف بدون اصلاح "> 
          </td>
            </form>
           <?php
           if(isset($_POST['delete']))
           {

            ?>

            <script>alert('هل أنت متأكد من حذف المعدة قبل الاصلاح');</script>
            <?php
            $del=mysqli_query($con,"delete from esla7 where id='$_POST[id]'");
            if($del)
            {
              ?>
              <script>
                alert("تم حذف الصف");
                window.location.replace('syana.php');
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
        <strong>انذار!</strong> يرجى تجديد رخصة المعدة <?php 
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
        <strong>انذار!</strong> يرجى تجديد تأمين المعدة <?php 
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
        <strong>انذار!</strong>  يرجى فحص المعدة <?php 
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
        <strong>انذار!</strong>  يرجى الصيانة المعدة <?php 
        
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




<!-- excel -->

<script>
        document.getElementById('downloadExcel').addEventListener('click',function(){

            
  var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("#example-table"));

        });
    </script>


</body>