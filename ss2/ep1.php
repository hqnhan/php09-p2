<?php
	$n = 120;
	// question 1.
	for ($i = 0; $i <= $n ; $i++) {
		if (($i % 3) == 0) {
			echo $i.", ";
		} 
	}
	// question 2.
	while ($n >= 10) {
		echo "<br>".$n ;
		break;
	}

	// question 3.
	do {
		echo "<br>".$n ;
		break;
	} while ($n > 15);
?>