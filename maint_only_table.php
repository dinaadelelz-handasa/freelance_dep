

<?php
include('connect.php');
mysqli_set_charset($con,"utf8");
?>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Document</title>
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
  <li><a href="ghiar_frame.php">  قطع الغيار</a></li>



  <li style="float:left"><a class="active" href="index.html">تسجيل خروج</a></li>
</ul>
<!--  -->


  

  
<?php
$sel_otl= mysqli_query($con,"select * from a3tal");
?>

<button class="btn btn-success mb-5 mt-3" style="" id="downloadExcel">حفظ اكسيل</button>

<h3 class="text-center">عرض جميع الالات المعطلة</h3>
    <table class="table table-responsive" id="example-table">
        <tr>
            <th>المعدة</th>
            <th>سبب العطل</th>
            <th>تاريخ العطل</th>
            <th>وقت العطل</th>
            <th>اسم المسئول</th>
            <th>قطع الغيار</th>
            <th>موعد الصيانة</th>
            <th>مبلغ الصيانة</th>
            <th>عدد الساعات</th>
            
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
            <td><?php  echo $res_otl['hours'];?></td>

            <!-- <form action="#" method="post">
            <input type="text" name="in1" class="w-50" value="<?php // echo $res_otl['name'];?>" readonly>
            
            <td><input type="submit" name="insert" class="btn btn-sm btn-success" value="ارسال الى الاصلاح"> </td>
        </form> -->

        <?php
    //    if(isset($_POST['insert']))
    //    {
    //     $inss=mysqli_query($con,"insert into esla7 (name)values('$_POST[in1]'");
    //     if($inss)
    //     {
    //       ?>
           <script>
    //         alert("تم النقل للصيانة");
    //         window.location.replace('maint_new.php');
    //       </script>
           <?php
    //     }
    //     else{
    //         die('error: '.mysqli_error($con));

    //     }
    //    }
    //    ?>
        
       
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

            $upd_add_qalab=mysqli_query($con,"update add_new_machine_qlabat set m_status='قيد التشغيل' where m_name='$name11'");
            $upd_add_diana=mysqli_query($con,"update add_new_machine_diana set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_ksarat=mysqli_query($con,"update add_new_machine_ksarat set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_bus=mysqli_query($con,"update add_new_machine_bus set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_madkat=mysqli_query($con,"update add_new_machine_mdakhat set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_markbat=mysqli_query($con,"update add_new_machine_mrkabat set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_edara=mysqli_query($con,"update add_new_machine_edara set m_status='قيد التشغيل' where m_name='$name11'");

            if($del)
            {
              ?>
              <script>
                alert("تم حذف الصف");
                window.location.replace('maint_new.php');
              </script>
              <?php
            }




            $upd_add=mysqli_query($con,"update add_new_machine set m_status='قيد التشغيل' where m_name='$name11'");
            if(!$upd_add)
            {
              die(mysqli_error($con));
            }

            $upd_add_qalab=mysqli_query($con,"update add_new_machine_qlabat set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_diana=mysqli_query($con,"update add_new_machine_diana set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_ksarat=mysqli_query($con,"update add_new_machine_ksarat set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_bus=mysqli_query($con,"update add_new_machine_bus set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_madkat=mysqli_query($con,"update add_new_machine_mdakhat set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_markbat=mysqli_query($con,"update add_new_machine_mrkabat set m_status='قيد التشغيل' where m_name='$name11'");

            $upd_add_edara=mysqli_query($con,"update add_new_machine_edara set m_status='قيد التشغيل' where m_name='$name11'");

           }
           ?>
          

        </tr>
        <?php
        
        }
        ?>
        

    </table>

    <script>
        document.getElementById('downloadExcel').addEventListener('click',function(){

            
  var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("#example-table"));

        });
    </script>
   



</body>
</html>