<?php
include('connection.php');
if(isset($_GET['id'])){
	$isDelete = $conn->query("DELETE FROM user_role WHERE id = '".$_GET['id']."' ");

	if($isDelete>0){
		$message =  "Role has been deleted successfully";
	}else{
		$message  = "Coding error not data added";
	}

	header("location:role.php?mes=$message");
	exit;
}
?>