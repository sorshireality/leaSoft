<?php 

include "human.php";
class Tolik extends Human
{
	function __destruct()
	{
		parent::__destruct();
		echo "<form action='?addkook' method='GET'>
	<input type='hidden' name='naame' value='".$this->name."'>
	<input type='hidden' name='susrname' value='".$this->surname."'>
	<input type='submit' name='gg' value='я остаюсь в системе'>
		</form>";
	}


}

 ?>