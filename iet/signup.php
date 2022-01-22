
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="validation.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card" style="height:600px!important;width: 500px!important;">
			<div class="card-header">
				<h3>Student Registration</h3>
			</div>
			<div class="card-body">
				<?php if(isset($_GET['msg'])){?>
				<div class="alert alert-danger"><?php echo $_GET['msg'];?></div>
			<?php }?>
				<form action="action.php" method="post" id="regForm">
					<input type="hidden" name="action" value="registration">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>
						</div>
						<input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter mobile number">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" name="email" id="email" autocomplete="off" class="form-control" placeholder="Enter email address">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
						</div>
						<input type="text" name="dob" id="dob" class="form-control" placeholder="Enter date of birth">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<select name="gender" id="gender" class="form-control" >
							<option value="">select Gender</option>
							<option value="1">Male</option>
							<option value="0">Female</option>
						</select>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-address-card"></i></span>
						</div>
						<input type="text" autocomplete="off" name="address" id="address" class="form-control" placeholder="Enter address">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
						</div>
						<input type="password" autocomplete="off" name="password" id="password" class="form-control" placeholder="password">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-toggle-on"></i></span>
						</div>
						<select name="status" id="status" class="form-control" >
							<option value="">select status</option>
							<option value="1">active</option>
							<option value="0">deactive</option>
						</select>
					</div>

					
					<div class="form-group">
						<a href="login.php" class="btn float-left login_btn">Login</a>
						<input type="submit" value="Register" class="btn float-right login_btn" onclick="return studentregistration();">
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
<script type="text/javascript"></script>
</body>
</html>
