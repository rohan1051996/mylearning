<?php
include('config.php');

if($_SESSION['isLogin'] == 1){
 $sql = "SELECT * FROM `user_login` WHERE id = '".$_SESSION['id']."'";
 $result = $conn->query($sql);
 $resx =  $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="1" width="500">
		<tr>
			<td><h1>Welcome to Login</h1></td>
			<td><a href="logout.php">Logout</td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><?php echo $resx[0]['firstname'];?></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><?php echo $resx[0]['lastname'];?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><?php echo $resx[0]['username'];?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $resx[0]['email'];?></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><?php echo $resx[0]['phonenumber'];?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><?php echo $resx[0]['address'];?></td>
		</tr>

	</table>
	
</body>
</html>
<?php
	}else{
		header('location:login.php?msg=Please login');
		exit;
	}
?>