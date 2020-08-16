<?php

$string1 = "   nGuYEn    pHUc   kHaNg    phUONg      ";
echo "chuỗi trước chỉnh : " .$string1."<br>";
$fixSpace = preg_replace('/\s\s+/', ' ', $string1);
$cutString = explode(" ",$fixSpace);
array_pop($cutString);
array_shift($cutString);
$joinString=implode(" ",$cutString);
$lowerString = strtolower($joinString);
echo "chuỗi sau chỉnh : ";
echo ucwords($lowerString, " ");
?>