<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form name="data" id="data" action="ac1`tion.php" target="_blank" method="get" e
nctype="mutlipart/form-data">
<table border="1" width="800px">
	<tr>
		<td colspan="2" class="heading"><h1>Data entry</h1></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" id="name" class="input-control" value="" placeholder="Please enter your name"></td>
	</tr>
	<tr>
		<td>Phone</td>
		<td><input type="text" name="phone" id="phone" value="" placeholder="Please enter your phone"></td>
	</tr>
	<tr>
		<td>Education</td>
		<td>
			<select name="education" id="education">
				<option value="">Please select</option>
				<option value="1">High School</option>
				<option value="2">Intermediate</option>
				<option value="3">Graduate</option>
				<option value="4">Post Graduate</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>
			<input type="radio" name="gender" value="1">&nbsp;Male&nbsp;
			<input type="radio" name="gender" value="2">&nbsp;Female
		</td>
	</tr>
	<tr>
		<td>Human Nature</td>
		<td>
			<input type="checkbox" name="type" value="1">&nbsp;Veg&nbsp;
			<input type="checkbox" name="type" value="2">&nbsp;Non Veg
		</td>
	</tr>
	<tr>
		<td>Message</td>
		<td><textarea name="Message" id="Message" rows="5" cols="35"></textarea></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><button type="submit" name="submit" id="submit">Submit</button></td>
	</tr>
</table>
	</form>
</body>
</html>