
<?php

include('connect.php');
mysqli_set_charset($con,"utf8");
$sel=mysqli_query($con,"select * from add_new_machine_qlabat");

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
  <li style="float:left;"><a href="user_emp_history.php" > المستخدمين</a></li>


  <li style="float:left"><a class="active" href="index.html">تسجيل خروج</a></li>
</ul>
<!--  -->


    <div class="container">

    <form action="" method="post">
      <div align="center" class="mt-3">
        <input type="text" placeholder="بحث..." name="search" class="border border-4">
        <input type="submit" value="بحث" name="sr_btn">
        </form>
      </div>

      <div>

    <!-- <a href="select_vertical.php"><button class="btn btn-info mb-5 mt-3" style="">عرض الجدول أفقي </button></a> -->

    <button class="btn btn-success mb-5 mt-3" style="" id="downloadExcel">حفظ اكسيل</button>
    <a href="add_frame_qlabat_from_select.php"><button style="font-size:18px" class="btn btn-primary mb-5 mt-3">اضافة قلابة جديدة <i class="fa fa-plus"></i></button></a>
    

    </div>
    
    <?php



include('connect.php');
mysqli_set_charset($con,"utf8");
if(isset($_POST['sr_btn']))
{
  

$sel=mysqli_query($con,"select * from add_new_machine_qlabat where m_name like '%$_POST[search]%'");


?>

        <div class="row" >

             <?php
                while($res=mysqli_fetch_array($sel))
              {
            ?>
            <div class="col">

            
            <div class="card" style="width:100%">
           
     <!-- <img class="card-img-top" src="" alt="Card image" style="width:100%"> -->

     <div class="row" >
       <div class="col-sm-4">
    <?php
    echo "<img src='images/".$res['m_img']."' style='width:70%' >";
    ?>
    </div>
    
    
    
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo">اظهار</button> -->
<div class="col">

    <div class="card-body">
      <form action="#" method="post"></form>
      <h4 class="card-title"><?php echo $res['m_name']?></h4>
              </form>
      <table class="table table-responsive" id="example-table">
          <tr>
              <td class="text-danger">اسم </td>
              <td><?php echo $res['m_name']?></td>
          </tr>
          <tr>
              <td class="text-danger"> نوع   </td>
              <td><?php echo $res['m_type']?></td>
          </tr>
          <tr>
              <td class="text-danger">رقم </td>
              <td><?php echo $res['m_number']?></td>
          </tr>

          <tr>
              <td class="text-danger">تاريخ الرخصة </td>
              <td><?php echo $res['rokhsa_date']?></td>
          </tr>
          <tr>
              <td class="text-danger">تاريخ التأمين </td>
              <td><?php echo $res['tameen_date']?></td>
          </tr>

          <tr>
              <td class="text-danger">تاريخ الفحص </td>
              <td><?php echo $res['fahs_date']?></td>
          </tr>

          <tr>
              <td class="text-danger">مكان العمل </td>
              <td><?php echo $res['m_work_loc']?></td>
          </tr>
          <tr>
              <td class="text-danger">تاريخ استلام </td>
              <td><?php echo $res['rec_date']?></td>
          </tr>

          <tr>
              <td class="text-danger"> اسم المسئول </td>
              <td><?php echo $res['masol_name']?></td>
              <td></td>
          </tr>

          <tr>
              <td class="text-danger">  رقم الوثيقة </td>
              <td><?php echo $res['waseqa']?></td>
              <td></td>
          </tr>
          <tr>
              <td class="text-danger"> تاريخ الشراء </td>
              <td><?php echo $res['shraa']?></td>
              <td></td>
          </tr>
          <tr>
              <td class="text-danger"> رقم العداد </td>
              <td><?php echo $res['addad']?></td>
              <td></td>
          </tr>


          <tr style="display:none">
              <td class="text-danger"> موعد الصيانة</td>
              <td><?php echo $res['main_date']?></td>
          </tr>

          <tr style="display:none">
              <td class="text-danger"> مبلغ الصيانة</td>
              <td><?php echo $res['main_pay']?></td>
          </tr>


          <tr style="display:none">
              <td class="text-danger"> عدد ساعات العمل</td>
              <td><?php echo $res['hours']?></td>
              <td></td>
          </tr>


          <tr>
            <td>
 <!-- <a href="#" class="btn btn-primary">عرض حالة </a> -->
 <button id="<?php echo $res['id']?>" type="button" class=" bbb btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                  حالة 
                </button>

              </td>



          <!-- update button -->
            <form action="update_moda_qlabat.php" method="post">
             
              <td>
              <input type="hidden" name="id_up" value="<?php echo $res['id']?>" >
              <input type="submit" name="update" class=" ccc btn btn-warning" value="تعديل">
            </td>
              </form>
              <td>


                <form action="" method="post">
                <input type="hidden" name="id1" value="<?php echo $res['id']?>">
                <input type="hidden" name="nname" value="<?php echo $res['m_name']?>">

                  <input type="submit" name="delete" class="btn btn-danger" value="حذف معدة">
                </form>
                <?php
           if(isset($_POST['delete']))
           {
            $del=mysqli_query($con,"delete from add_new_machine_qlabat where id='$_POST[id1]'");
           $nam=$_POST['nname'];
            $del1=mysqli_query($con,"delete from a3tal where name='$nam'");
            $del2=mysqli_query($con,"delete from esla7 where name='$nam'");
            $del3=mysqli_query($con,"delete from add_new_machine where name='$nam'");
            if($del)
            {
              ?>
              
              <script>
                var x=confirm("متأكد من حذف العنصر؟");
                if(x==0)
                {
                  window.location.replace('select_card_qlabat.php');

                }
                else{
                alert("تم حذف ");
                window.location.replace('select_card_qlabat.php');
              }
              </script>
              <?php
            }

            
            if(!$del3)
            {
              die(mysqli_error($con));

            }

            
           }
           ?>


<!-- add to maint_new_1 جدول الاعطال الجديد -->
            <form action="maint_new_1.php" method="post">
             
             <td>
             <input type="hidden" name="id_to_maint" value="<?php echo $res['id']?>" >
             <input type="hidden" name="name_to_maint" value="<?php echo $res['m_name']?>">
             <input type="submit" name="send_otl" class=" ccc btn btn-secondary text-warning" value="إرسال للأعطال">
           </td>
             </form>


              </td> 
              <!-- <td> -->

               
          



      </table>
                


      
  

  
  
</div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">حالة </h4>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
      </div>

      <!-- Modal body -->
      <div class="modal-body" >
        
       
        <!-- <p><?php //echo $res['m_status']?></p> -->

                


    
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <a href="maint_only_table.php"><button type="button" class="btn btn-info" >الذهاب لجدول الأعطال</button></a>

      </div>

    </div>
  </div>



    </div>
  </div>

            </div>

            <?php
            }
          }
          //  search all
           else
           {
            $sel=mysqli_query($con,"select * from add_new_machine_qlabat");
            ?>
        <div class="row" >

             <?php
                while($res=mysqli_fetch_array($sel))
              {
            ?>
            <div class="col">

            
            <div class="card" style="width:100%">
           
     <!-- <img class="card-img-top" src="" alt="Card image" style="width:100%"> -->

     <div class="row" >
       <div class="col-sm-4">
    <?php
    echo "<img src='images/".$res['m_img']."' style='width:70%' >";
    ?>
    </div>
    
    
    
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo">اظهار</button> -->
<div class="col">

    <div class="card-body">
      <form action="#" method="post"></form>
      <h4 class="card-title"><?php echo $res['m_name']?></h4>
              </form>
      <table class="table table-responsive" id="example-table">
          <tr>
              <td class="text-danger">اسم المعدة</td>
              <td><?php echo $res['m_name']?></td>
          </tr>
          <tr>
              <td class="text-danger"> نوع المعدة  </td>
              <td><?php echo $res['m_type']?></td>
          </tr>
          <tr>
              <td class="text-danger">رقم المعدة</td>
              <td><?php echo $res['m_number']?></td>
          </tr>

          <tr>
              <td class="text-danger">تاريخ الرخصة </td>
              <td><?php echo $res['rokhsa_date']?></td>
          </tr>
          <tr>
              <td class="text-danger">تاريخ التأمين </td>
              <td><?php echo $res['tameen_date']?></td>
          </tr>

          <tr>
              <td class="text-danger">تاريخ الفحص </td>
              <td><?php echo $res['fahs_date']?></td>
          </tr>

          <tr>
              <td class="text-danger">مكان العمل </td>
              <td><?php echo $res['m_work_loc']?></td>
          </tr>
          <tr>
              <td class="text-danger">تاريخ استلام </td>
              <td><?php echo $res['rec_date']?></td>
          </tr>

          <tr>
              <td class="text-danger"> اسم المسئول </td>
              <td><?php echo $res['masol_name']?></td>
              <td></td>
          </tr>

          <tr>
              <td class="text-danger">  رقم الوثيقة </td>
              <td><?php echo $res['waseqa']?></td>
              <td></td>
          </tr>
          <tr>
              <td class="text-danger"> تاريخ الشراء </td>
              <td><?php echo $res['shraa']?></td>
              <td></td>
          </tr>
          <tr>
              <td class="text-danger"> رقم العداد </td>
              <td><?php echo $res['addad']?></td>
              <td></td>
          </tr>

          <tr style="display:none">
              <td class="text-danger"> موعد الصيانة</td>
              <td><?php echo $res['main_date']?></td>
          </tr>

          <tr style="display:none">
              <td class="text-danger"> مبلغ الصيانة</td>
              <td><?php echo $res['main_pay']?></td>
          </tr>


          <tr style="display:none">
              <td class="text-danger"> عدد ساعات العمل</td>
              <td><?php echo $res['hours']?></td>
              <td></td>
          </tr>


          <tr>
            <td>
 <!-- <a href="#" class="btn btn-primary">عرض حالة المعدة</a> -->
 <button id="<?php echo $res['id']?>" type="button" class=" bbb btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                  حالة المعدة
                </button>

              </td>



          <!-- update button -->
            <form action="update_moda.php" method="post">
             
              <td>
              <input type="hidden" name="id_up" value="<?php echo $res['id']?>" >
              <input type="submit" name="update" class=" ccc btn btn-warning" value="تعديل">
            </td>
              </form>
              <td>


                <form action="" method="post">
                <input type="hidden" name="id1" value="<?php echo $res['id']?>">
                <input type="hidden" name="nname" value="<?php echo $res['m_name']?>">

                  <input type="submit" name="delete" class="btn btn-danger" value="حذف معدة">
                </form>
                <?php
           if(isset($_POST['delete']))
           {
            $del=mysqli_query($con,"delete from add_new_machine where id='$_POST[id1]'");
           $nam=$_POST['nname'];
            $del1=mysqli_query($con,"delete from a3tal where name='$nam'");
            $del2=mysqli_query($con,"delete from esla7 where name='$nam'");
            if($del)
            {
              ?>
              
              <script>
                var x=confirm("متأكد من حذف العنصر؟");
                if(x==false)
                {
                  window.location.replace('select_card.php');

                }
                else{
                alert("تم حذف المعدة");
                window.location.replace('select_card.php');
              }
              </script>
              <?php
            }

            
           }
           ?>

              </td> 
              <td>

               
          



      </table>
                


      
  

  
  
</div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">حالة المعدة</h4>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
      </div>

      <!-- Modal body -->
      <div class="modal-body" >
        
       
        <!-- <p><?php //echo $res['m_status']?></p> -->

                


        


        
      

        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <a href="maint_only_table.php"><button type="button" class="btn btn-info" >الذهاب لجدول الأعطال</button></a>

      </div>

    </div>
  </div>



    </div>
  </div>

            </div>

            <?php
            }
           }
            ?>
        </div>

    
       
    </div>



    <script>
$(document).ready(function(){
    $('.bbb').click(function(){
  id_emp = $(this).attr('id')
  // alert(id_emp);
        $.ajax({url: "select_in_modal_qlabat.php",
        method:'post',
        data:{id:id_emp},
        
         success: function(result){
    $(".modal-body").html(result);
  }});


        $('#myModal').modal("show");
    })
})

  </script>


<!--  excel-->


<script>
        document.getElementById('downloadExcel').addEventListener('click',function(){

            
  var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("#example-table"));

        });
    </script>

    <!-- search js -->
    <script>
      function search()
      {
       let filter = document.getElementById('find').value.to();
       let item = document.querySelectorAll('.row');
       let l = document.getElementsByTagName('h4');
        
       for(var i = 0;i<=l.length;i++){
let a=item[i].getElementsByTagName('h4')[0];
let value=a.innerHTML || a.innerText || a.textContent;
if(value.toUpperCase().indexOf(filter) > -1) {
item[i].style.display="";
}
else
{
item[i].style.display="none";
}
}
          
      }
    </script>

<!--  -->
<!--  -->
<!--  -->
<!-- alert tarkhees -->
<?php 
mysqli_set_charset($con,"utf8");

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
mysqli_set_charset($con,"utf8");

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