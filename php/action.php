<?php
include('connection.php');
if(isset($_POST['name'])){
	$id = $conn->query("insert into user_role (name,status) VALUE ('".$_POST['name']."','".$_POST['status']."')");

	if($id>0){
		$message =  "New role added successfully";
	}else{
		$message  = "Coding error not data added";
	}

	header("location:role.php?mes=$message");
	exit;
}
?>