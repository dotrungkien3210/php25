<?php
$a = "ZenttneZ";
$count =0;
for ($i=0; $i < strlen($a)-1 ; $i++) { 
	if ($a[$i] == $a[strlen($a)-1-$i]) {
		$count++;
	}
}
if (strlen($a)-1 == $count) {
	echo "chuỗi này đối xứng";
}
else{
	echo "chuỗi này bất đối xứng";
}
 ?>