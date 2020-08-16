<?php

$name= "Dương Vũ Văn Quá";
echo "họ tên : ".$name."<br>";
$cutName = explode(" ",$name);
$firstName = array_shift($cutName);
echo "Họ : ". $firstName."<br>";
$lastName = array_pop($cutName);

echo "Tên Đệm : " . implode(" ",$cutName)."<br>";
echo "Tên : ".$lastName;
?>