<?php

include('connect.php');
mysqli_set_charset($con,"utf8");
$sel_mod= mysqli_query($con,"select * from add_new_machine");








// include('connect.php');

if(isset($_POST['add_otl']))
{

    // INSERT INTO a3tal(name,sabab,otl_date,otl_time,masol,ghiar,main_date,main_pay,hours)
    // VALUES('ero','resooon','2022-11-22','','kareem','kk','2022-11-22',700,2)
    $ins_=mysqli_query($con,"insert into a3tal (name,sabab,otl_date,otl_time,masol,ghiar,main_date,main_pay) VALUES ('$_POST[ss]','$_POST[sabab]','$_POST[otl_date]','$_POST[otl_time]','$_POST[masol]','$_POST[ghiar]','$_POST[main_date]',$_POST[main_pay])");


// ,otl_time,masol,ghiar,main_date,main_pay,hours,name   ,,,,,, ,'$_POST[otl_date]','$_POST[otl_time]','$_POST[masol]','$_POST[ghiar],'$_POST[main_date]',$_POST[main_pay],$_POST[hours])
// if($ins_) 
// {
//   echo "inserted";
//  }
//  else{

//   die("error in: ".mysqli_error($con));
//  }

//update معطلة
$update=mysqli_query($con,"update add_new_machine set m_status='$_POST[motla]' where m_name='$_POST[ss]'");


//update معطلة
$update=mysqli_query($con,"update add_new_machine_edara set m_status='$_POST[motla]' where m_name='$_POST[ss]'");
// if($update)
// {

//   echo "updated";
// }
// else{

//   die("eroorrr: ".mysqli_error($con));
// }
}
?>


  


<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>الأعطال</title>
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

  <li style="float:left;"><a href="user_emp_history.php" > المستخدمين</a></li>


  <li style="float:left"><a class="active" href="index.html">تسجيل خروج</a></li>
</ul><!--  -->
<!-- right row add maint -->
<div class="container">

<div class="row">

<div class="col-6 coll1">
<h3 class="text-center text-primary">اضافة الى الاعطال</h3>
    <form action="#" method="post" class="bg-light">
        <div class="container mt-4">

        
        <div class="row mb-2">
        <div class="col-sm-3"><label for=""> المعدة</label></div>
        <div class="col-sm-6">


<!-- name coming from selec_card_qalabat rather than select only in this  -->
        <?php 
        if(isset($_POST['send_otl']))
        {
        $id_from_qlabat=$_POST['id_to_maint'];
        $name_from_qlabat=$_POST['name_to_maint'];
        $sel_from_machin_qlabat=mysqli_query($con,"select * from add_new_machine_edara where id='$id_from_qlabat'");
        while($res_from_qlabat=mysqli_fetch_array($sel_from_machin_qlabat))
        {
        
        ?>
          <input type="text" name="ss" value="<?php echo $res_from_qlabat['m_name']?>" class="form-control" required>
          <?php
        }
      }
          ?>
   


            <!-- <select  name="ss" class="form-select" required>
                <option value="">اختر المعدة</option>
            <?php
            //while($res_mod=mysqli_fetch_array($sel_mod))
            //{
            ?>

                <option value="<?php // echo $res_mod['m_name']?>"><?php // echo $res_mod//['m_name']?></option>
            <?php
           // }
            ?>
                
            </select> -->



        </div>
    </div>



  



    <div class="row mb-2">
        <div class="col-sm-3"><label for="" >سبب العطل</label></div>
        <div class="col-sm-6"><input type="text" name="sabab"  class="form-control" required></div>
    </div>

    <div class="row mb-2">
        <div class="col-sm-3"><label for=""> تاريخ العطل</label></div>
        <div class="col-sm-6"><input type="date" name="otl_date" id="" class="form-control" required></div>
    </div>

    <div class="row mb-2">
        <div class="col-sm-3"><label for=""> وقت العطل </label></div>
        <div class="col-sm-6"><input type="time" name="otl_time" id="" class="form-control" required></div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-3"><label for="">  اسم المسئول </label></div>
        <div class="col-sm-6"><input type="text" name="masol" id="" class="form-control" required></div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-3"><label for="">  قطع الغيار </label></div>
        <div class="col-sm-6"><input type="text" name="ghiar" id="" class="form-control" required></div>
    </div>

    <div class="row mb-2">
        <div class="col-sm-3"><label for="">   موعد الصيانة </label></div>
        <div class="col-sm-6"><input type="date" name="main_date" id="" class="form-control" required></div>
    </div>

    <div class="row mb-2">
        <div class="col-sm-3"><label for="">   مبلغ الصيانة </label></div>
        <div class="col-sm-6 "><input type="text" name="main_pay" id="" class="form-control w-50" required>ريال</div>
    </div>

    <!-- <div class="row mb-2">
        <div class="col-sm-3"><label for="">   عدد الساعات  </label></div>
        <div class="col-sm-6"><input type="number" name="hours" id="" class="form-control"></div>
    </div> -->
    <div class="row mb-2">
        <div class="col-sm-3"><label for="">   الحالة   </label></div>
        <div class="col-sm-6"><input type="text" name="motla"  class="form-control" readonly value="معطلة" required></div>
    </div>
    
    <div class="row mb-2">
        
        <div><center>
            <input type="submit" name="add_otl"  class="form-control bg-danger w-75 text-white" value="اضافة الى جدول الاعطال"></center></div>
    </div>





    </div>
    </form>


  
    
</div>

<!-- put in modal -->
<div class="col-3 coll2 mt-5">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    عرض جدول لجميع الأعطال
  </button>

  <div class="modal" id="myModal">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <!-- <h4 class="modal-title">[جدول الأعطال]</h4> -->
        <big><button type="button" class="btn-close" data-bs-dismiss="modal"></button></big>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">اغلاق</button>
      </div>


<!-- left col view maint table -->
<div class="modal-body">
<?php
$sel_otl= mysqli_query($con,"select * from a3tal");
?>


<h3 class="text-center text-primary">عرض جميع الالات المعطلة</h3>
<br>
    <table class="table">
        <tr>
            <th>المعدة</th>
            <th>سبب العطل</th>
            <th>تاريخ العطل</th>
            <th>وقت العطل</th>
            <th>اسم المسئول</th>
            <th>قطع الغيار</th>
            <th>موعد الصيانة</th>
            <th>مبلغ الصيانة</th>
            <!-- <th>عدد الساعات</th> -->

            <th>ارسال للصيانة </th>
            <th>حذف </th>
        </tr>

        <?php
        
        while($res_otl=mysqli_fetch_array($sel_otl))
        {
        ?>
        <tr>
            <td><input type="text" name="" class="w-50 border-0" value="<?php  echo $res_otl['name'];?>" readonly></td>
            <td><?php  echo $res_otl['sabab'];?></td>
            <td><?php  echo $res_otl['otl_date'];?></td>
            <td><?php  echo $res_otl['otl_time'];?></td>
            <td><?php  echo $res_otl['masol'];?></td>
            <td><?php  echo $res_otl['ghiar'];?></td>
            <td><?php  echo $res_otl['main_date'];?></td>
            <td><?php  echo $res_otl['main_pay'];?></td>
            <!-- <td><?php // echo $res_otl['hours'];?></td> -->


              <!-- send row to syana page  -->


              <form action="innss.php" method="post">
             
             <td>
             <input type="hidden" name="id_up" value="<?php echo $res_otl['id']?>" >
             <input type="hidden" name="main_payyy" value="<?php echo $res_otl['main_pay']?>" >
             <input type="hidden" name="name_pay" value="<?php echo $res_otl['name']?>">


             <input type="submit" name="update_to_eslah" class="btn btn-success" value="ارسال للصيانة">
           </td>
             </form>

              
           



              <!-- delete row -->
          
           
              <td>
            <form action="#" method="post">
              <input type="hidden" name="id" value="<?php echo $res_otl['id']?>">
              <input type="hidden" name="name11" value="<?php echo $res_otl['name']?>">

            <input type="submit" name="delete" class="btn btn-sm btn-warning" value="حذف من الاعطال"> 
          
            </form>
            </td>
           <?php
           if(isset($_POST['delete']))
           {
            $name11=$_POST['name11'];
            
            $del=mysqli_query($con,"delete from a3tal where id='$_POST[id]'");

            $upd_add=mysqli_query($con,"update add_new_machine set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_qalab=mysqli_query($con,"update add_new_machine_edara set m_status='قيد التشغيل' where m_name='$name11'");
            if($del)
            {
              ?>
              <script>
                alert("تم حذف الصف");
                window.location.replace('maint_new.php');
              </script>
              <?php
            }
           }
           ?>
          

        </tr>
        <?php
        
        }

?>
        

    </table>
   
    </div>
    </div> <!--close modal body-->
    <!-- Modal footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
    
    
</div>
</div>



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


    
</body>
</html>