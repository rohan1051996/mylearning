<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script type="text/javascript">
		
		function validation(){

			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;

			if(username ==""){
				alert("Please enter username");
				document.getElementById('username').focus();
				return false;
			}else if(password ==""){
				alert("Please enter Password");
				document.getElementById('password').focus();
				return false;
			}else{
				return true;
			}

			return false;

		}


	</script>
</head>
<body>
	<form name="login" action="action.php" id="login" method="post">
		<input type="hidden"  name="action" value="login">
		<h1>Login Page</h1>
	<table>
		<tr>
			<td colspan="2" style="color: red; font-weight: bold;"><i><?php if(isset($_GET['msg'])){ echo $_GET['msg'];}?><i></td>
			
		</tr>
		<tr>
			<td>username</td>
			<td><input type="text" name="username" id="username" value="" placeholder="enter username"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="password"  id="password" value="" placeholder="enter password"></td>
		</tr>
		<tr>
		    <td style="text-align: center;">
				<button type="submit" name="submit" id="submit" onclick="javascript: return validation();">signin</button>
			</td>
			<td colspan="2" style="text-align: center;">
				<a href="registration.php">signup</a>
			</td>
		</tr>
		
	</table>
</form>
	
</body>
</html>