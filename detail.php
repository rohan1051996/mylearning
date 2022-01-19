<?php

include('config.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<table border="1" width="700px">
		<tr>
			<td><h1>welcome login page</h1></td>
			/<td><a href="logout.php">logout</td>
		</tr>
		<tr>
			<td>mobile</td>
		</tr>
		<tr>
			<td>password</td>
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