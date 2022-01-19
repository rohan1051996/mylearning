<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="action.php" method="post">
	<input type="hidden" name="action" value="registration">
	<h1>Register</h1>
	<hr>
	<label for="mobile"><b>mobile</b></label>
	<input type="number" name="mobile" id="mobile" placeholder="Enter mobile" required>

	<lebel for="password"><b>password</b></lebel>
	<input type="password" name="password" id="password" placeholder="Enter password" required>

	<lebel for="status"><b>status</b></lebel>
	<select name="status" id="status">
		<option value="">select status</option>
		<option value="1">active</option>
		<option value="0">deactive</option>
	</select>
	<hr>
	<button type="submit" class="registerbtn">register</button>
</form>
</body>
</html>