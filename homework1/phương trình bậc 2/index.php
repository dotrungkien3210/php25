<?php
$a = 1;
$b = 2;
$c = 1;
if ($a == 0) {
	if ($b == 0) {
		if ($c == 0) {
			echo "phương trình có vô số nghiệm";
		}
		else{
			echo "phương trình vô nghiệm";
		}
	}
	else{
		$x = -$c/$b;
		echo "phương trình có 1 nghiệm là " . $x;
	}
}
else{
	$delta = $b*$b-4*$a*$c;
	$sqdelta = sqrt($delta);
	echo "giá trị của delta là " . $delta . " <br> ";
	if ($delta < 0 ) {
		echo "phương trình vô nghiệm";
	}
	elseif ($delta == 0) {
		$x = -$b/(2*$a);
		echo "phương trình có 1 nghiệm là " . $x;
	}
	else{
		$x1 = (-$b-$sqdelta)/2*$a;
		$x2 = (-$b+$sqdelta)/2*$a;
		echo "phương trình có 2 ngiệm là " . $x1 ." và " . $x2;
	}
}



 ?>