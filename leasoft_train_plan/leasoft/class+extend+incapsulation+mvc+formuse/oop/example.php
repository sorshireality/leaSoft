<?php
		
		require 'Classes/human1_1.php';
	/*	if (isset($_COOKIE['username'])){
			require_once 'welcome user.php';
		} else*/
		if (isset($_GET['naame'])) {
		setcookie('username',$_GET['naame'],60*60);
		setcookie('usersurname',$_GET['susrname'],60*60);
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'example.php';
		header("Location: http://$host$uri/$extra");
	    } elseif (!isset($_GET['add'])){
		include 'form.php';
		} else 
		{
			$name=$_POST['name'];
			$surname=$_POST['surname'];
			$national=$_POST['national'];
		/*
		$people = new Human($name,$surname,$national);*/
		$tolian = new Tolik($name,$surname,$national);
		/* incapsulation error echo $people->name;*/
		/*$people->welcome();
		unset($people);
		*/
		$tolian->welcome();
		
		unset($tolian);
	}
?>