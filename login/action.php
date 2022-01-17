<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//include config
include('config.php');

$action= "";


if(isset($_POST['action'])){
	$action = $_POST['action'];
}



switch($action){

	case 'login':
		
		$result = $conn->query("select * from user_login where username='".trim($_POST['username'])."' AND password = '".trim($_POST['password'])."' AND status=1");

		$resx =  $result->fetch_all(MYSQLI_ASSOC);
		
		if(count($resx)>0){
			$_SESSION['isLogin'] = 1;
			$_SESSION['id'] = $resx[0]['id'];
			$_SESSION['username'] = $resx[0]['username'];
			header('location:detail.php');
		}else{
			header('location:login.php?msg=invalid username/password');
		}

	break;

	case 'registration':
	    $id= $conn->query("insert into user_login (username,password,firstname,lastname,email,phonenumber,address,status) VALUE('".$_POST['username']."','".$_POST['psw']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['phonenumber']."','".$_POST['address']."','".$_POST['status']."')");

         if($id>0){
         	$massege = "registration has been done successfully";
         	header("location: login.php?msg=$massege");
         	exit;
         }
         else {
         	$massege = "registration failed";
         	header("location:registration.php?msg=$massege");
         	exit;
         }
         
	break;



	    default:
	    break;
}

/*if(isset($_POST['register']))

{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenuber'];
	$address = $_POST['address'];
	$status = $_POST['status'];
	$sql = "INSERT INTO'user_login'('username','password','firstname','lastname','email','phonenumber','address','status') VALUES('$username','$password','$firstname','$lastname','$email','$phonenumber','address','status')";

	include_once('db.php');

	qry = mysqli_query($conn,$sql)die("data insert error");

	if($qry)
	{
		echo"regester successfully";
	}
}*/
?>













