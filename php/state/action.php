<?php

include('../common/config.php');

$action = '';

if(isset($_REQUEST['action'])){
  $action = $_REQUEST['action'];
}

switch($action){

  case 'add':
    if(isset($_POST['name'])){
      $id = $conn->query("insert into state (name,status) VALUE ('".$_POST['name']."','".$_POST['status']."')");

      if($id>0){
        $message =  "New state added successfully";
      }else{
        $message  = "Coding error not data added";
      }

      header("location:index.php?mes=$message");
      exit;
    }
  break;

  case 'edit':

    if(isset($_POST['name'])){
    $id = $conn->query("UPDATE state SET name = '".$_POST['name']."',status = '".$_POST['status']."' WHERE id = '".$_POST['id']."'");
    if($id>0){
      $message =  "State has been updated successfully";
    }else{
      $message  = "Coding error not data added";
    }

    header("location:index.php?mes=$message");
    exit;
  }
  break;

  case 'delete':
    if(isset($_GET['id'])){
    $isDelete = $conn->query("DELETE FROM state WHERE id = '".$_GET['id']."' ");

    if($isDelete>0){
      $message =  "State has been deleted successfully";
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