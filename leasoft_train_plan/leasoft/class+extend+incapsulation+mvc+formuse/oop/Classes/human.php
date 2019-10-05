<?php
	
/**
 * 
 */
class Human
{
	protected $f;
	protected  $name;
	protected  $surname;
	protected  $national;
	
	function __construct($name="mister",$surname="proper",$national="washer")
	{
		$this->name=$name;	  
		$this->surname=$surname;
		$this->national=$national;
		$this->f=fopen("brain.txt", "a+");
	}
	
	function __destruct(){
		echo "Человек ".$this->name." просто умер . . .";
		fclose($this->f);
		echo "<a href='/leasoft/oop/example.php'><input type='button' value='понятно'></a>";
	}
	public function welcome(){
		echo "<head><title>Я человек</title></head>";
		echo "<p>На свет родился : ";
		self::remember($this->name,$this->surname,$this->national);	
		echo $this->name." ".$this->surname."</p>";
		echo "<p>По всей видимости, он к тому же и ".$this->national."</p>";
	} 
	private function remember($name,$surname,$national){
		$str = "[".date("Y-m-d_h: i :s ").$name." ".$surname."]\n";
		fputs($this->f, $str);
	}
}

?>