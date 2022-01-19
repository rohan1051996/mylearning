<?php

include('../common/config.php');

$action = '';

if(isset($_REQUEST['action'])){
  $action = $_REQUEST['action'];
}

switch($action){

  case 'add':

    if(isset($_POST['name'])){
      $id = $conn->query("insert into city (state_id,name,status) VALUE ('".$_POST['state_id']."','".$_POST['name']."','".$_POST['status']."')");

      if($id>0){
        $message =  "New city added successfully";
      }else{
        $message  = "Coding error not data added";
      }

      header("location:index.php?mes=$message");
      exit;
    }
  break;

  case 'edit':

    if(isset($_POST['name'])){
    $id = $conn->query("UPDATE city SET id= '".$_POST['state_id']."', name = '".$_POST['name']."',status = '".$_POST['status']."' WHERE state_id = '".$_POST['id']."'");
    if($id>0){
      $message =  "city has been updated successfully";
    }else{
      $message  = "Coding error not data added";
    }

    header("location:index.php?mes=$message");
    exit;
  }
  break;

  case 'delete':
    if(isset($_GET['id'])){
    $idDelete = $conn->query("DELETE FROM city WHERE id = '".$_GET['id']."' ");

    if($isDelete>0){
      $message =  "city has been deleted successfully";
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