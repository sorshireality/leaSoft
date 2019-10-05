<?php 
	$email = "tutunikssa@gmail.com";
	$wrong_mail = "tutunikssa@.com";
	$text = "<hi>how are you<lol>";
	$text = preg_replace('/<[^>]+>/','',$text);
	print($text);
	$regular = '/(\S+)@([a-z].[[:alpha:]]+)/is';
	if (preg_match($regular, $email))
		echo "<br> First test completed <br>"; else echo "<p>Wrong regular or text</p>";
	if (!preg_match($regular, $wrong_mail))
		echo "<br> Second test completed <br>"; else echo "<p>Wrong regular or text</p>";
 ?>