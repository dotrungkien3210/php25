<?php
session_start();
foreach($_SESSION['info'] as $key => $value){
       if ($_GET['id']== $value['ID']) {
       	echo "<br> Thông tin sinh viên thứ " . ($key+1);
       echo "<br> - Mã sinh viên: " . $value['ID'];
       echo "<br> - Họ tên sinh viên: " . $value['NAME'];
       echo "<br> - Số điện thoại: " . $value['PHONE'];
       echo "<br> - Email: " . $value['EMAIL'];
       echo "<br> - Gender: " . $value['GENDER'];
       echo "<br> - Address: " . $value['ADDRESS'];
       }
   }


?>