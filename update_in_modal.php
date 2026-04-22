<?php

if(isset($_POST["id"]))  
{


// Get image name
$image = $_FILES['image']['name'];
 
// image file directory
$target = "images/".basename($image);



if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
     $msg = "Image uploaded successfully";
   }else{
     $msg = "Failed to upload image";
   }


    $output = '';

    $con=mysqli_connect('localhost','root','','alhilali_workshop');  
    mysqli_set_charset($con,"utf8");
    $query ="update  add_new_machine set m_img='$image',m_name='$_POST[name]',m_number=$_POST[num],rokhsa_date='$_POST[rokh]',tameen_date='$_POST[tameen]',fahs_date='$_POST[fahs]',m_work_loc='$_POST[loc]',rec_date='$_POST[rec_date]',masol_name='$_POST[masol]',m_status='$_POST[ch1]',m_type='$_POST[type]',main_date='$_POST[main_date]',main_pay=$_POST[main_pay]  WHERE id = '".$_POST["id"]."'";
    $result = mysqli_query($con, $query);  

     if($result)
     {
          echo "updated";

     }



    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($result))  
    {  
         $output .= '  


         <div class="container">
         <form action="#" method="post" enctype="multipart/form-data">
       <div class="row">
         <div class="col-25">
               <label for="fname">تحميل صورة المعدة</label>
             </div>
             <div class="col-75"  style="direction:rtl" >
               <input type="file"  name="image"  >
               </div>
               </div>
       
           <div class="row">
             <div class="col-25">
               <label for="fname">اسم المعدة</label>
             </div>
             <div class="col-75">
               <input type="text" id="fname" name="name" >
             </div>
           </div>
           <div class="row">
             <div class="col-25">
               <label for="lname">نوع المعدة</label>
             </div>
             <div class="col-75">
               <input type="text" id="lname" name="type" >
             </div>
           </div>
           <div class="row">
             <div class="col-25">
               <label for="country">رقم المعدة</label>
             </div>
             <div class="col-75">
               <input type="text" name="num">
             </div>
           </div>
       
           <div class="row">
             <div class="col-25">
               <label for="country">تاريخ استلام المعدة</label>
             </div>
             <div class="col-75" style="direction:rtl">
               <input type="date" name="rec_date" >
             </div>
           </div>
       
           <div class="row">
             <div class="col-25">
               <label for="country">تاريخ انتهاء الرخصة</label>
             </div>
             <div class="col-75" style="direction:rtl">
               <input type="date" name="rokh">
             </div>
           </div>
       
       
           <div class="row">
             <div class="col-25">
               <label for="country">تاريخ انتهاء التأمين</label>
             </div>
             <div class="col-75" style="direction:rtl">
               <input type="date" name="tameen">
             </div>
           </div>
       
           <div class="row">
             <div class="col-25">
               <label for="country">تاريخ انتهاء الفحص الدوري</label>
             </div>
             <div class="col-75" style="direction:rtl">
               <input type="date" name="fahs" >
             </div>
           </div>
       
           <div class="row">
             <div class="col-25">
               <label for="country">موعد الصيانة</label>
             </div>
             <div class="col-75" style="direction:rtl">
               <input type="date" name="main_date" >
             </div>
           </div>
       
           <div class="row">
             <div class="col-25">
               <label for="country">مبلغ الصيانة</label>
             </div>
             <div class="col-75" style="direction:rtl">
               <input type="text" name="main_pay" class="w-50" > ريال
             </div>
           </div>
       
       
           <div class="row">
             <div class="col-25">
               <label for="country">موقع العمل الحالي</label>
             </div>
             <div class="col-75">
               <input type="text" name="loc">
             </div>
           </div>
       
          
       
       
           <div class="row">
             <div class="col-25">
               <label for="country">اسم المسئول</label>
             </div>
             <div class="col-75">
               <input type="text" name="masol">
             </div>
           </div>
       
           <div class="row">
             <div class="col-25">
               <label for="country">حالة المعدة</label>
             </div>
             <div class="col-75" style="direction:rtl">
               <label for="">قيد التشغيل</label>
               <input type="checkbox" name="ch1" value="قيد التشغيل"> 
               <label for="">معطلة</label>
               <input type="checkbox" name="ch1" value="معطلة">
             </div>
           </div>
       
       
           <div class="row" style="display:flex; justify-content:center">
             <input type="submit" value="إضافة معدة جديدة" style="width:170px;font-size:18px" name="sub_add">
           </div>
         </form>
       </div>
       







              
              ';  
    }  
    $output .= "</table></div>"; 
    
    
    echo $output;  







}
   




?>