<?php


class oto{
	var $name;
	var $color;
	var $brand;
	var $space;


	function chay(){
		echo "xe dang chay";

	}
}

$vinfast = new oto();
echo $vinfast->chay();
$vinfast->name = "vinfast";
echo $vinfast->name;



  ?>