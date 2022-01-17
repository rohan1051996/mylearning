<?php


for($i=0;$i<100;$i++){
	$name  = "AMIT KUMAR";
	echo $i%2;
	echo "<br>";
	if($i%2==0){
		$name = "SURENDRA";
	}
	echo ($i+1)."-".$name;
	echo "<br>";
}


?>