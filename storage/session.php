<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="1" width="600px">
		<?php //foreach($_COOKIE as $key => $val){?>
			<tr>
				<td><?php echo 'Name';?></td>
				<td><?php echo $_SESSION['name'];?></td>
			</tr>
			<tr>
				<td><?php echo 'Mobile';?></td>
				<td><?php echo $_SESSION['mobile'];?></td>
			</tr>
			<tr>
				<td><?php echo 'Email';?></td>
				<td><?php echo $_SESSION['email'];?></td>
			</tr>
			<tr>
				<td><?php echo 'Age';?></td>
				<td><?php echo $_SESSION['age'];?></td>
			</tr>
			<tr>
				<td><?php echo 'PAN number';?></td>
				<td><?php echo $_SESSION['pannumber'];?></td>
			</tr>
			<tr>
				<td><?php echo 'Adhaar Number';?></td>
				<td><?php echo $_SESSION['adhaar'];?></td>
			</tr>
			<tr>
				<td><?php echo 'Education';?></td>
				<td><?php echo $_SESSION['education'];?></td>
			</tr>

		<?php //} ?>
		
	</table>
</body>
</html>
<?php 
session_destroy();
?>