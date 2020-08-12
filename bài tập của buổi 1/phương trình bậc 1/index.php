<?php 
$a = 1;
$b = 2;
if($a == 0){
	if ($b == 0) {
		echo "phương trình vô số nghiệm";
	             }
	else{
	echo "phuong trinh không có nghiem";
        }
}
else{
	$kq = (-$b)/$a;
	echo "nghiem la " . $kq ;
}

 ?>