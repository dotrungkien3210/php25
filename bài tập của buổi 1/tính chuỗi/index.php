<?php
$tong =0;
$n = 1;
$tich = 1;
while ( $n <= 10) {
	$tong = $tong + $n/$tich;
	$n++;
	$tich*=$n;
}
echo $tong;
  ?>