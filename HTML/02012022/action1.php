<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "voterdata";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo"connection successfully";

if(isset (.$_POST['fullname'])){
  $id=conn->query(INSERT INTO `pancarddata` (`id`, `select _title`, `fullname`, `gender`, `date_ of_birth`, `fullname_father`, `fullname_mother`, `permanant_address`, `district`, `city`, `pincode`, `state`, `phone_number`, `email_id`, `adhar_number`, `source_of_income`, `varifier_name`, `place`)
    if($id>0){
      $message = "data added successfully";
    }
    else{
      $message = "coding error data not added";
    }
    break;
?>

