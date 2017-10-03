<?php
	$name = array("Tran Thi Bao Chau","Vo Thi Tra Giang","Duong Ngoc Khiem","Tran Thi Minh Kieu","Vuong Truong Ky","Nguyen Ngoc Thuy Nhien","Tran Thi Huong Nhung","Phan Thi Quynh Nhu","Tran Phu Quang","Nguyen Thi Nhu Thien","Truong Van Thong","Tran Tien");
	$yOb = array("1995","1995","1995","1995","1993","1995","1995","1995","1994","1995","1995","1995");
	$job = array("working","working","working","working","Duy Tan","working","Duy Tan","Duy Tan","Duy Tan","working","working","Duy Tan");
	$gender = array("female","female","male","female","male","female","female","female","male","female","male","male");
	$lastName = array();
	$lastName1 = array();
	for ($i = 0; $i < count($name)-1; $i++) { 
       	array_push($lastName,  strtok($name[$i]," "));
    }	
   // print_r($lastName); 
    /* The people they Nguyen.
    * 30/9/2017 by nhan.
    */
    echo "The people they Nguyen:";
	for ($i = 0; $i < count($lastName)-1; $i++) { 
		if($lastName[$i] == "Nguyen"){
			echo $name[$i].", ";	
		}
	}
    /* went to work.
    * 30/9/2017 by nhan.
    */ 
    echo "<br>";
    echo "went to work.:";
	for ($i = 0; $i < count($job)-1; $i++) { 
		if($job[$i] == "working"){
			echo $name[$i].", ";	
		}
	}
	/* wLearning Duy Tan School.
    * 30/9/2017 by nhan.
    */ 
    echo "<br>";
	echo "Learning Duy Tan School:";
	for ($i = 0; $i < count($job)-1; $i++) { 
		if($job[$i] == "Duy Tan"){
			echo $name[$i].", ";	
		}
	}
	/*Sort names.
	*30/9/2017.
	*/
?>