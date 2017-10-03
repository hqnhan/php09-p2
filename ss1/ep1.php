<?php
	/*
		*example string.
		*30/9/2017 by nhan.
	*/
	$name = "Ho Quy Nhan";
	echo "Number of characters is:".strlen($name)."<br>";
	echo "Number words is:".str_word_count($name)."<br>";
	echo "The letter a is in position :".strpos($name,"a")."<br>";
	echo "Name replaced: ".str_replace("Quy","PHP09",$name)."<br>";
	echo "Reverse name: ".strrev($name)."<br>";
	/*function search day on the week.
	*30/9/2017 by nhan.
	*method 1.
	*/
	function day($number,$languague){
		$weeken = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
		$weekvn = array("Thứ Hai","Thứ Ba","Thứ Tư","Thứ Năm","Thứ Sáu","Thứ Bảy","Chủ Nhật");
		$day = array();
		if($languague == "en"){
			$day = $weeken;
		}else if($languague == "vn"){
			$day = $weekvn;
		}else{
			echo "Please enter the correct language.";
		}
		$i = $number - 2;
		echo $day[$i];
		echo "<br>";		
	}
	echo "".day(4,"vn");
	/*function search day on the week.
	*30/9/2017 by nhan.
	*method 2.
	*/
	$number = 8;
	$languague = "en";
	$weeken = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
	$weekvn = array("Thứ Hai","Thứ Ba","Thứ Tư","Thứ Năm","Thứ Sáu","Thứ Bảy","Chủ Nhật");
	$day = array();
	if($languague == "en"){
		$day = $weeken;
	}else{
		$day = $weekvn;
	}
	switch($number) {
		case 2:
			echo $day[0];
			break;
		case 3:
			echo $day[1];
			break;
		case 4:
			echo $day[2];
			break;
		case 5:
			echo $day[3];
			break;
		case 6:
			echo $day[4];
			break;		
		case 7:
			echo $day[5];
			break;
		case 8:
			echo $day[6];
			break;		
	}
?>