<?php
include('connection.php');
if(isset($_POST['name'])){
	$id = $conn->query("UPDATE user_role SET name = '".$_POST['name']."',status = '".$_POST['status']."' WHERE id = '".$_POST['id']."'");

	if($id>0){
		$message =  "Role has been updated successfully";
	}else{
		$message  = "Coding error not data added";
	}

	header("location:role.php?mes=$message");
	exit;
}
?>