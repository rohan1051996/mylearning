<?php 

include('config.php');
//print "<pre>";
//print_r();
//die;

if($_SESSION['islogin'] == 1){
$sql = "SELECT * FROM `login` WHERE id = '".$_SESSION[`id`]."'";
$list = $conn->query($sql);
$result = $list->fetch_all MYSQLI_ASSOC();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>

	<table border="1" width="600">
		<tr>
			<td><h1>Welcome to my account</h1></td>
			<td><a href="logout.php"></a></td>
		</tr>
		<tr>
			<td>mobile</td>
			<td><?php echo $result[0]['mobile'];?></td>
		</tr>
		<tr>
			<td>name</td>
			<td><?php echo $result[0]['name'];?></td>
		</tr>
		<tr>
			<td>email</td>
			<td><?php echo $result[0]['email'];?></td>
		</tr>
		<tr>
			<td>dob</td>
			<td><?php echo $result[0]['dob'];?></td> 
		</tr>
		<tr>
			<td>gender</td>
			<td><?php echo $result[0]['gender'];?></td>
		</tr>
		<tr>
			<td>address</td>
			<td><?php echo $result[0]['address'];?></td>
		</tr>

	</table>
</body>
</html>

<?php
       } else{
    	header("location:login.php?msg=invalid mobile/password")
    }
?>
















