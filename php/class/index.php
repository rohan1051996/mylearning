<?php 
class calculator
{

	function Add($a,$b){
		return $a+$b;
	}

	function Sub($a,$b){
		return $a-$b;
	}
	function Mul($a,$b){
		return $a*$b;
	}
	function Div($a,$b){
		return $a/$b;
	}
}



//echo $object->Mul(100,300);
//echo $object->Add(100,300);

class faltoo extends calculator
{

	function priciple(){
		echo "AMOUNT";
	}
}

$child = new faltoo();

echo $child->priciple();




?>