<?php 
	$str = 'That is string';
	$int = 101;
	$check = true;
	$knoweledge = NULL;
	$list = array($int => $str,$check =>$knoweledge );
	echo "There we got string,null,bool,int and create a list with keys and value <br>";
	print_r($list);
#double
	$pi = 3.14;
#resource /
	echo "<br>";
	$test_file = fopen("test.txt", "rt") or die('Error open file');
	print_r($test_file);
	# TEST CLASS CONSIDER BaseClass -00
	include "test_class.php";
	$obj = new BaseClass("Alex");
 ?>