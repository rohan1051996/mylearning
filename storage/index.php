<?php 
//create cookies

//setcookie('myname','My Name Joker',time()+60);

/*
setcookie('name','Rohan Sonkar',time()+60);
setcookie('mobile','9560831462',time()+60);
setcookie('email','rhan@gmail.com',time()+60);
setcookie('age','25',time()+60);
setcookie('pannumber','BOBRS3450R',time()+60);
setcookie('adhaar','7654 9867 9856 9854',time()+60);
setcookie('education','B-Tech',time()+60);
*/
ob_start();
session_start();

$_SESSION['name'] = array('MYName'=>'Rohan','LASTNAME'=> 'Sonkar',"FRIEND"=> array('SOHAN','MOHA'));
$_SESSION['mobile'] = '9560831462';
$_SESSION['email'] = 'rhan@gmail.com';
$_SESSION['age'] = '25';
$_SESSION['pannumber'] = 'BOBRS3450R';
$_SESSION['adhaar'] = '7654 9867 9856 9854';
$_SESSION['education'] = 'B-Tech';

//work on session



?>
