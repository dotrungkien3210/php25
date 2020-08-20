<?php
session_start();

   $user = array(
        'ID'       =>  $_GET['studentId'],
        'NAME'     =>  $_GET['studentName'],
        'PHONE'    =>  $_GET['studentTel'],
        'EMAIL'    =>  $_GET['studentMail'],
        'GENDER'   =>  $_GET['gender'],
        'ADDRESS'  =>  $_GET['studentAdd'],
        
    );
   $_SESSION['info'][] = $user;




   header('Location: add.php');


?>
