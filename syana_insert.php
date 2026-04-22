<?php
include('connect.php');
$ins=mysqli_query($con,"insert into esla7(name,ghiar,main_pay,main_date)values('ddd','dddd',300,'2022-11-15')");
if($ins)
{
  echo "inserted";
}
else{
  die("error: ".mysqli_error($con));
}

?>