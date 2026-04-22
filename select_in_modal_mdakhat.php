<?php


if(isset($_POST["id"]))  
{
    $output = '';

    $con=mysqli_connect('localhost','root','','raco_workshop');  
    mysqli_set_charset($con,"utf8");
    $query = "SELECT * FROM add_new_machine_mdakhat WHERE id = '".$_POST["id"]."'";
    $result = mysqli_query($con, $query);  

     



    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($result))  
    {  
         $output .= '  
              <tr>  
                   <td width="30%"><label>حالة المعدة</label></td>  
                   <td width="70%">'.$row["m_status"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>اسم المعدة</label></td>  
                   <td width="70%">'.$row["m_name"].'</td>  
              </tr>  


              <tr>  
                   <td width="30%"><label>موعد الصيانة</label></td>  
                   <td width="70%">'.$row["main_date"].'</td>  
              </tr>

              
              <tr>  
              <td width="30%"><label>مبلغ الصيانة</label></td>  
              <td width="70%">'.$row["main_pay"].'</td>  
         </tr>  
         <tr>  
              <td width="30%"><label> عدد ساعات العمل</label></td>  
              <td width="70%">'.$row["hours"].'</td>  
         </tr>  
             
              ';  
    }  
    $output .= "</table></div>"; 
    
    
    echo $output;  







}
   




?>