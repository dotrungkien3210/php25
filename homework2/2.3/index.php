<?php
$arr = array(1,4,2,6,9,100,4);
for ($i=0; $i < count($arr)-1 ; $i++) { 
	for ($j=$i; $j <count($arr)-1 ; $j++) { 
		if ($arr[$i] > $arr[$j]) {
			$swap = $arr[$i];
			$arr[$i]=$arr[$j];
			$arr[$j]= $swap;
		}
	}
}
for ($i=0; $i < count($arr)-1 ; $i++) { 
	echo $arr[$i] . '&nbsp&nbsp&nbsp';
}
  ?>