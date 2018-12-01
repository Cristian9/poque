<?php

function alias($min = 4, $max = 8)
{		
	$vocales 	= array('a', 'e', 'i', 'o', 'u');
	//$consonantes 	= array('b', 'c', 'd', 'f', 'g', 'j', 'l', 'm', 'n', 'p', 'r', 's', 't');
	$consonantes 	= array('b', 'c', 'd', 'f', 'g', 'j', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'v', 'x', 'y', 'z');
	$tamano 	= intval(rand($min, $max));
	$actual		= intval(rand(1,2));		
	$nombre 	= '';	
	for($x = 0; $x < $tamano; $x++)
	{			
		if($actual == 0)
		{
			$actual	= 1;
			$pos 	= rand(0,count($vocales)-1);
			$nombre	.=  $vocales[$pos];				
		}
		else			
		{
			$actual	= 0;
			$pos 	= rand(0,count($consonantes)-1);
			$nombre	.=  $consonantes[$pos];				
		}				
	}
	return ucfirst($nombre);
}

?>