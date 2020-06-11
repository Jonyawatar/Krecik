<?php
	$limitmin = 1;
	$limitmax = 100;
	$krok = 3;
	if($_GET['limitmax'])
	{
		$limitmax = (int)$_GET['limitmax'];
	}

	for ($i = $limitmin; $i<$limitmax; $i += $krok)
	{

	echo $i.'<br>';
	}



?>
