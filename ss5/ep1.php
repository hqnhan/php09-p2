<?php
	echo date('l')."<br>"; 
	echo date('l',strtotime('3-4-1994'))."<br>";
	echo date('l',strtotime('-1 week'))."<br>";
	echo date('l',strtotime('+3 month'))."<br>";
	echo date('l,F d, Y, g:i a',strtotime('+3 month'))."<br>";
	echo date('l,F d, Y, g:i a',strtotime('now'))."<br>";
	echo strtotime('now')."<br>";
	echo "<br>";
	//include php
	include_once 'header.php';
	echo "<br>";

	include 'header.php';
	echo "<br>";

	include_once 'header.php';
	echo "<br>";

	include 'header.php';
	echo "<br>";

	include 'footer.php';
	


	//doc viet file.
	$myfile = fopen("demo.txt", "w") or die("Unable to open file!");
	$txt = "John Doe\n";
	fwrite($myfile, $txt);	
	fclose($myfile);
?>