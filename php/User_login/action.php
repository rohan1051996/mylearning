<?php

include('../common/config.php');

$action = '';

if(isset($_REQUEST['action'])){
  $action = $_REQUEST['action'];
}

switch($action){

  case 'add':
    if(isset($_POST['name'])){
      $id = $conn->query("insert into user_login (id,role_id,username,password) VALUE ('".$_POST['username']."','".$_POST['status']."')");

      if($id>0){
        $message =  "New user_login added successfully";
      }else{
        $message  = "Coding error not data added";
      }

      header("location:index.php?mes=$message");
      exit;
    }
  break;

  case 'edit':

    if(isset($_POST['name'])){
    $id = $conn->query("UPDATE user_login SET password = '".$_POST['password']."',status = '".$_POST['status']."' WHERE 'id' = '".$_POST['id']."'");
    if($id>0){
      $message =  "user_login has been updated successfully";
    }else{
      $message  = "Coding error not data added";
    }

    header("location:index.php?mes=$message");
    exit;
  }
  break;

  case 'delete':
    if(isset($_GET['id'])){
    $isDelete = $conn->query("DELETE FROM user_login WHERE id = '".$_GET['id']."' ");

    if($isDelete>0){
      $message =  "user_login has been deleted successfully";
    }else{
      $message  = "Coding error not data added";
    }

    header("location:index.php?mes=$message");
    exit;
  }
  break;

  default:

  break;
}

?>