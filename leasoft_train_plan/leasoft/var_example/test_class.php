<?php 
/**
 * 
 */
class BaseClass
{
	private $name;
	function __construct($name='Artigicial Intalligence')
	{
		$this->name = $name;
		self::hello($this->name);
	}
	private function hello($name)
	{
		echo "<br>Hello ".$name."<br>";
	}
}
 ?>