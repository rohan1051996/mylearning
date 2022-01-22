<?php
include('config.php');
//print "<pre>";
//print_r($_POST);
//die();

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
				header("location:detail.php");
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



		$result = $conn->query("SELECT * FROM `registration` WHERE mobile = '".$_POST['mobile']."' OR email='".$_POST['email']."' ");
		$record = $result->fetch_all(MYSQLI_ASSOC);

		
		if(count($record) < 1){

		
		$dob = date('Y-m-d',strtotime($_POST['dob']));

		$id =$conn->query("INSERT INTO `registration` (`mobile`, `name`, `email`, `dob`, `gender`, `address`, `password`, `status`) VALUES ('".$_POST['mobile']."','".$_POST['name']."','".$_POST['email']."','".$dob."','".$_POST['gender']."','".$_POST['address']."','".$_POST['password']."','".$_POST['status']."')");
			

			if($id>0){
				$messege ="registration has been successfully";

				header("location:login.php?msg=$messege");
				exit;
			}
			else{
				$messege ="registration has not been completed";

				header("location:signup.php?msg=$messege");
				exit;
			}
		}else{
			$messege ="Mobile number/Email address already Exist...";

				header("location:signup.php?msg=$messege");
				exit;

		}


			
		break;
	
	default:
		// code...
		break;
}


?>