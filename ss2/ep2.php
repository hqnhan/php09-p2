<?php 
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];
	/*
	* nameFunction function.
	* created by nhan.
	* create on 19:50 03/10/2017
	*/
	function nameFunction($name) {
		$arrname =  (explode(" ", $name));
		$lastName = $arrname[count($arrname) -1];
		$middleName = $arrname[count($arrname) -2];
		$othername = "";
		for ($i = 0; $i <= count($arrname) - 3; $i++) { 
			$othername .= " ".$arrname[$i];
		}
		echo $othername." ".$lastName." ".$middleName;
	}
	nameFunction("Ton Nu Thi Kieu Oanh");
	//expamle
	$name1 = array("Quynh Nhu","Bao Chau","Tra Giang");
	sort($name1);
	var_dump($name1)
?>