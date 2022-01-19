<?php
print "<pre>";
print_r($_REQUEST);
die;
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "voter id";

    create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    check connection
    if($conn->connect_error:  $conn->connect_error);{
    die("connect failed");
}
    echo"connected successfully";
?>