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

/* Add padding to containers 
class css rite with dot and id with hash (#)
*/
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
<script type="text/javascript">
  
function MyFunction(){
var name = document.getElementById('name').value;
var status =  document.getElementById('status').value;

if(name == ""){
  alert('Please enter role');
  document.getElementById('name').focus();
  return false;
}else if(status == ""){
  alert('Please enter status');
  document.getElementById('status').focus();
  return false;
}else{
  return true;
}

}

</script>
</head>
<body>

<form action="action.php" method="post">
  <div class="container" id="main">
    <span style="color:green"><strong><?php if(isset($_GET['mes'])){ echo $_GET['mes'];}?></strong></span>
    <h1>Add New Role </h1>
    <p>Please fill in this form to create a role</p>
    <hr>

    <label for="email"><b>Role Name</b></label>
    <input type="text" placeholder="Enter Role Name" name="name" id="name">

    <label for="psw"><b>Status</b></label>
    <input type="text" placeholder="Enter Status 1 or 0" name="status" id="status">
    <button type="submit" id="submit" class="registerbtn" onclick="return MyFunction();">Submit</button>

<select name="degree" id="degree">
  
  <option>High Shool</option>
  <option>Inter mediate</option>
  <option>B-Tech</option>
</select>

    <input type="button">
<input type="checkbox">
<input type="color">
<input type="date">
<input type="datetime-local">
<input type="email">
<input type="file">
<input type="hidden">
<input type="image">
<input type="month">
<input type="number">
<input type="password">
<input type="radio">
<input type="range">
<input type="reset">
<input type="search">
<input type="submit">
<input type="tel">
<input type="text">
<input type="time">
<input type="url">
<input type="week">
  </div> 
  
</form>

<hr>
<?php 
 include('connection.php');
 $sql = "SELECT * FROM `user_role`";
 $result = $conn->query($sql);
?>
<div class="container">
    <h1>Role List </h1>
    <table border="1" width="500px">
      <tr class="registerbtn">
        <th>ID</th>
        <th>Name</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      <?php 
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo ($row['status'] == 1)?'Active':'Inactive' ;?></td>
                <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>&nbsp;|&nbsp;<a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
            </tr>
          <?php }
        }
      ?>
    </table>
  </div> 

</body>
</html>
