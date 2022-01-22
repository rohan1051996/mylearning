<?php

include('config.php')

ob_start;
session_destroy();{

header('location:login.php');
}

?>


