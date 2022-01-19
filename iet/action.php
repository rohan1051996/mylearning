<?php
include('config.php');

if(isset($_POST['action'])){
	$action=$_POST['action'];
}
switch ($action) {
	case 'login':
		// code..
			
			$list =$conn->query("SELECT *  FROM `login` WHERE `mobile` LIKE '".$_POST['mobile_number']."' AND `password` LIKE '".$_POST['password']."' AND `status` = 1");
			$result=$list->fetch_all(MYSQLI_ASSOC);

			if(count($result)>0){
				$_SESSION['isLogin'] =1;
				$_SESSION['id'] = $result[0]['id'];
				header("location:myaccount.php");
				exit();

			}else{
				header("location:login.php?msg=invalid user login");
				exit();
			}/*
			
			print "<pre>";
			print_r($result);
			die();*/
		

		break;

		case 'registration':
			print "<pre>";
			print_r($_POST);
			die();
		break;
	
	default:
		// code...
		break;
}


?>