<?php 
   echo 'Mã Sinh Viên: '.$_POST['studentId'].'<br>';
   echo 'Họ và tên: '.$_POST['studentName']."<br>";
   echo 'Số điện thoại: '.$_POST['studentTel']."<br>";
   echo 'Email: '.$_POST['studentMail']."<br>";
   echo "Giới tính : ";

   if ($_POST['gender']=="studentMale")
{
	echo $_POST['gender']."<br>";
}
elseif ($_POST['gender']=="studentFemale") {
	echo $_POST['gender']."<br>";
}
elseif ($_POST['gender']=="studentOther") {
	echo $_POST['gender']."<br>";
}
else{
	echo "error"."<br>";
}
   echo 'Địa Chỉ: '.$_POST['studentAdd']."<br>";
?>