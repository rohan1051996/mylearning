<?php 

/*for($m=2;$m<=20;$m++){
	if($m%2!==0){
		for($i=1;$i<=10;$i++){
			echo $m*$i."&nbsp;|&nbsp;";
		}
	}
	echo "<br>";
}*/

//5x4x3x2x1



/*$n=10;
$fact=1;

for($i=$n;$i>=1;$i--){
	$fact = $fact*$i;
	echo "<br>";
	echo $fact;
}*/
//echo $fact;

/*function factorial($n){
	$fact = 1;
	for($i=$n;$i>=1;$i--){
		$fact = $fact*$i;
	}
	return $fact;
}

echo factorial(7);*/


$a=2;
$b=3;

$temp = $b;
$b  = $a;
$a = $temp;

echo $a;
echo "<br>";
echo $b;

?>