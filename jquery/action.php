<?php

include('config.php');

//print "<pre>";
//print_r($_POST);
//die;

$action ="";

if(isset($_POST['action'])){
	$action =$_POST['action'];

}
     echo"SELECT * FROM `login` WHERE mobile = '".$_POST[`mobile`]."' AND password ='".$_POST[`password`]."' AND status = 1");
     die;
 switch($action){ 
 
  case 'login':
   //$result = $conn->query("SELECT * FROM `login` WHERE mobile = '".$_POST[`mobile`]."' AND password ='".$_POST[`password`]."' AND status = 1");

    $resx = $result->fetch_all MYSQLI_ASSOC();

    header('location:login.php?msg=invalid/password);
  	// code...
  	break;

  	default;
  	break;






}









?>