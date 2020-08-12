<?php
for ($i=6; $i >= 0 ; $i--) { 
	for ($j=0; $j <= 6 ; $j++) { 
		if ($j >= $i ) {
			echo "# ";
		}
		else{
			echo "a ";
		}
	}
	echo "<br>";
}


  ?>