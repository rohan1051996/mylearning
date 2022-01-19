<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
  echo"connected successfully";
  print "<pre>";
    print_r($_REQUEST);
    die;

if(isset($_POST['name'])){
      $id = $conn->query(insert into 'pancarddata', ('id', 'select_title', 'fullname', 'gender', 'date_of_birth', 'fullname_father', 'fullname_mother', 'permanant_address', 'district', 'city', 'pincode', 'state', 'phone_number', 'email_id', 'adhar_number', 'source_of_income', 'varifier_name', 'place')VALUE('".$_POST['select_title']."','".$_POST['fullname']."','".$_POST['gender']."','".$_POST['date_of_birth']."','".$_POST['fullname_father']."','".$_POST['fullname_mother']."','".$_POST['permanant_address']."','".$_POST['district']."','".$_POST['city']."','".$_POST['pincode']."','".$_POST['state']."','".$_POST['phone_number']."','".$_POST['email_id']."','".$_POST['adhar_number']."','".$_POST['source_of_income']."','".$_POST['varifier_name']."','".$_POST['place']."');)
    }

      if($id>0){
        $message =  "New pancard added successfully";
      }else{
        $message  = "Coding error not data added";
      }
      echo $message;

      header("location:pancard.php?mes=$message");
      exit;
?>