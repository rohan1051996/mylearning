<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<?php 
if(isset($_GET['id'])){
 include('connection.php');
 $sql = "SELECT * FROM `user_role` WHERE id = '".$_GET['id']."'";
 $result = $conn->query($sql);
 $resx =  $result->fetch_all(MYSQLI_ASSOC);
?>
<form action="update.php" method="post">
  <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
  <div class="container">
    <span style="color:green"><strong><?php if(isset($_GET['mes'])){ echo $_GET['mes'];}?></strong></span>
    <h1>Edit Role </h1>
    <p>Please fill in this form to update a role</p>
    <hr>

    <label for="email"><b>Role Name</b></label>
    <input type="text" placeholder="Enter Role Name" name="name" id="name" value="<?php echo $resx[0]['name'];?>" required>

    <label for="psw"><b>Status</b></label>
    <input type="text" placeholder="Enter Status 1 or 0" name="status" id="status" value="<?php echo $resx[0]['status'];?>" required>
    <button type="submit" class="registerbtn">Submit</button>
  </div> 
  
</form>
<?php }?>
</body>
