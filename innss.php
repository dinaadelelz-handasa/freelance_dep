<?php

include('connect.php');

mysqli_set_charset($con,"utf8");

              if(isset($_POST['update_to_eslah']))
              {
                $id_=$_POST['id_up'];
                $sel_to_esl=mysqli_query($con,"select * from a3tal where id='$id_'");

                while($row=mysqli_fetch_array($sel_to_esl))
                {
                  $name=$row['name'];
                  $sabab=$row['sabab'];
                  $otl_date=$row['otl_date'];
                  $otl_time=$row['otl_time'];
                  $ghiar=$row['ghiar'];
                  $main_date=$row['main_date'];
                  $main_pay=$row['main_pay'];
                 
                 

                }
                $insert=mysqli_query($con,"insert into esla7 (name,ghiar,main_date,main_pay,otl_date,otl_time,sabab) values('$name','$ghiar','$main_date',$main_pay,'$otl_date',' $otl_time',' $sabab')");

              

                if($insert)
                {

                    ?>

                    <script>alert("تم ارسال المعدة المعطلة الى قسم الصيانة");
                    window.location.replace('maint_new.php');
                </script>
                    
                    <?php
                }
                
     $update_main_pay= mysqli_query($con,"update add_new_machine set main_pay='$_POST[main_payyy]' where m_name='$_POST[name_pay]'");

     $update_main_pay= mysqli_query($con,"update add_new_machine_qlabat set main_pay='$_POST[main_payyy]' where m_name='$_POST[name_pay]'");

     $update_main_pay= mysqli_query($con,"update add_new_machine_mrkabat set main_pay='$_POST[main_payyy]' where m_name='$_POST[name_pay]'");

     $update_main_pay= mysqli_query($con,"update add_new_machine_mdakhat set main_pay='$_POST[main_payyy]' where m_name='$_POST[name_pay]'");

     $update_main_pay= mysqli_query($con,"update add_new_machine_ksarat set main_pay='$_POST[main_payyy]' where m_name='$_POST[name_pay]'");

     $update_main_pay= mysqli_query($con,"update add_new_machine_edara set main_pay='$_POST[main_payyy]'  where m_name='$_POST[name_pay]'");

     $update_main_pay= mysqli_query($con,"update add_new_machine_diana set main_pay='$_POST[main_payyy]'  where m_name='$_POST[name_pay]'");
     
     $update_main_pay= mysqli_query($con,"update add_new_machine_bus set main_pay='$_POST[main_payyy]'  where m_name='$_POST[name_pay]'");

              }
            ?>

