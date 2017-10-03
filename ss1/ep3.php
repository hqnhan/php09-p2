<?php
	$n = 14;
	//
	for ($i = 0; $i <= $n ; $i++) {
		if(($i % 3) == 0){
			echo $i.", ";
		} 
	}
	while ($n >= 10) {
		echo "<br>".$n ;
		break;
	}


	do{
		echo "<br>".$n ;
		break;
	}while ( $n > 15 );
?>