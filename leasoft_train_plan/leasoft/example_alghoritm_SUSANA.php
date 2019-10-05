<?php 
			
				
		 $default =             array(array(0,0,0,0,0,0,0),
				   	                  array(0,0,0,0,0,0,0),
					                  array(0,0,1,1,1,1,0),
					                  array(0,0,0,0,0,0,0),
					                  array(0,0,0,0,0,0,0));


	for ($i=1; $i<count($default); $i++)
	{
		for ($j=0; $j<count($default[$i]); $j++)
		{

				if ($default[$i][$j]==1)
			for ($temp_i=-1; $temp_i<=1; $temp_i++)
			{
				for ($temp_j=-1; $temp_j<=1; $temp_j++)
					if ($default[$i+$temp_i][$j+$temp_j]==0) $default[$i][$j]++;
			}
			#if ($default[$i][$j]>0&&$default[$i][$j]<$min) $min=$default[$i][$j];
		}
	}
	for ($i=0; $i<count($default); $i++)
	{
		for ($j=0; $j<count($default[$i]); $j++)
		{
			
				if ($default[$i][$j]>0){
					$maxline = true;
			for ($temp_i=-1; $temp_i<=1; $temp_i++)
			{
				for ($temp_j=-1; $temp_j<=1; $temp_j++)
					if ($default[$i+$temp_i][$j+$temp_j]>$default[$i][$j]) {$maxline=false; break;}
			}
			
		}
		if ($maxline){
			$default[$i][$j]=100;
			$maxline = false;
			}
			#if ($default[$i][$j]>0&&$default[$i][$j]<$min) $min=$default[$i][$j];
		}
	}
		foreach ($default as $key) {
			for ($i=0; $i<count($key); $i++)
			{
				if ($key[$i]==100)
				{
					$key[$i]=1;
				} else {
					$key[$i]=0;
				}
				echo $key[$i];
			}
			echo "<br>";
		}
	

#there is 05.10.2019
 ?>

