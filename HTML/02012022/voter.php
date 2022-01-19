<!DOCTYPE html>
<html lang="en">
<head>
<style>
	input,select,button {
		border: 1px solid black;
		border-radius: 10px;
	}
</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../common/validation.js"></script>

</head>
<body>


<div class="container-xl">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-11">
         </div>
	<form name="voter id" id="voter id" action="action.php" target="_blank" method="post">
	<table border="1" width="1000px">
	<tr>
			<td colspan="2" class="heading"><h1>Voter id</h1></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" id="name" value=" " placeholder="Enter your name"></td>
		</tr>
		<tr>
			<td>Father_name</td>
			<td><input type="text" name="Father name" id="Father name" value=" " placeholder="Enter your Father name"></td>
		</tr>
		<tr>
			<td>Mobile_number</td>
			<td><input type="number" name="Mobile number" id="Mobile number" value=" " placeholder="Enter Your Mobile number"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="Address" id="Address" value=" " placeholder="Enter your Address"></td>
		</tr>
		<tr>
			<td>State</td>
			<td>
				<select name="state" id="state">
					<option value=" ">select state</option>
					<option value="1">Uttar pradesh</option>
					<option value="2">Delhi</option>
					<option value="3">Bihar</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>District</td>
			<td>
				<select name="district" id="district">
					<option value=" ">select district</option>
					<option value="1">ghazipur</option>
					<option value="2">mahrauli</option>
					<option value="3">sasaram</option>
					<option value="4">jaunpur</option>
					<option value="5">varanasi</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" id=" " placeholder="Please enter your city">
			</td>
		</tr>
		<tr>
			<td>Pin_code</td>
			<td><input type="number" name="Pin code" id="Pin code" value=" " placeholder="Enter your Pin code">
			</td>
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="number" name="Age" id="Age" value=" " placeholder="Enter your Age">
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
			<td>Adhar_number</td>
			<td><input type="number" name="Adhar number" id="Adhar number" value=" " placeholder="Enter your Adhar Number">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><button type="submit" name="submit" id="submit">Submit</button></td>
		</tr>
		
      </table>
      <
</body>
</html>

	