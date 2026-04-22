<?php

include('connect.php');
mysqli_set_charset($con,"utf8");
if(isset($_POST['add_otl']))
{


  $ins=mysqli_query($con,"insert into a3tal (sabab,otl_date,otl_time,masol,ghiar,main_date,main_pay,hours,name)values('$_POST[ss]','$_POST[sabab]','$_POST[otl_date]','$_POST[otl_time]','$_POST[masol]','$_POST[ghiar],'$_POST[main_date]',$_POST[main_pay],$_POST[hours])");



 if($ins)
 {
  echo "inserted";
 }
 else{

  die("error in: ".mysqli_error($con));
 }
}
?>