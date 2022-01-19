<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form name="pancard" id="pancard"action="action1.php" target="_blank" method="POST">
	<table border="1" width="900px">
		<tr>
			<td colspan="2" class="heading"><h1>pancard</h1></td>
		</tr>
		<tr>
			<td>select tittle</td>
			<td>
			<select name="select tittle" id="select tittle">
				<option value=" ">select tittle</option>
				<option value="1">sri</option>
				<option value="2">smt.</option>
				<option value="3">kumari</option>
				<option value="4">mr</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>full name</td>
			<td><input type="text" name="full name" id="full name" value=" " placeholder="enter your full name"></td>
		</tr>
		<tr>
			<td>gender</td>
			<td>
				<input type="radio" name="gender" id="gender" value="1">&nbsp;male&nbsp;
				<input type="radio" name="gender" id="gender" value="2">&nbsp;female
			</td>
		</tr>
		<tr>
			<td>date of birth</td>
			<td><input type="birth" name="date of birth" id="date of birth" value=" " place placeholder="enter your date of birth"></td>
		</tr>
		<tr>
			<td>fullname father</td>
			<td><input type="text" name="fullname father" id="fullname father" value=" " placeholder="enter your fullname father"> </td>
		</tr>
		<tr>
			<td>fullname mother</td>
			<td><input type="text" name="fullname mother" id="fullname mother" value=" " placeholder="enter your fullname mother"></td>
		</tr>
		<tr>
			<td>permanant address</td>
			<td><input type="text" name="permanant address" id="permanant address" value=" " placeholder="enter your permanant address"></td>
		</tr>
		<tr>
			<td>district</td>
			<td>
			<select name="district" id="district">
				<option value=" ">select district</option>
				<option value="1">ghazipur</option>
				<option value="2">patna</option>
				<option value="3">firozabad</option>
				<option value="4">jaunpur</option>
			</select>
			</td>
	    </tr>
	     <tr>
	     	<td>city</td>
	     	<td><input type="text" name="city" id="city" value=" " placeholder="enter your city"></td>
	     </tr>
	     <tr>
	     	<td>pincode</td>
	     	<td><input type="number" name="pincode" id="pincode" value=" " placeholder="enter your pincode"></td>
	     </tr>
	     <tr>
	     	<td>state</td>
	     	<td>
	     	<select name="state" id="state">
	     		<option value=" ">select state</option>
	     		<option value="1">uttar pradesh</option>
	     		<option value="2">bihar</option>
	     		<option value="3">delhi</option>
	        </select>
	        </td>
	    </tr>
	    <tr>
	    	<td>phone number</td>
	    	<td><input type="number" name="phone number" id="phone number" value=" " placeholder="enter your phone number"></td>
	    </tr>
	    <tr>
	    	<td>email id</td>
	    	<td><input type="text" name="email id" id="email id" value=" " placeholder="enter your email id"></td>
	    </tr>
	    <tr>
	    	<td>adhar number</td>
	    	<td><input type="number" name="adhar number" id="adhar number" value=" " placeholder="enter your adhar number"></td>
	    </tr>
	    <tr>
	    	<td>source of income</td>
	    	<td>
	    	<select name="source of income" id="source of income">
	    		<option value=" ">source of income</option>
	    		<option value="1">salary</option>
	    		<option value="2">income for busseness</option>
	    		<option value="3">income from other source</option>
	    		<option value="4">no income</option>
	    	</select>
	        </td>
	    </tr>
	    <tr>
	    	<td>varifier name</td>
	    	<td><input type="text" name="varifier name" id="varifier name" value=" " placeholder="enter your varifier name"></td>
	    </tr>
	    <tr>
	    	<td>place</td>
	    	<td><input type="text" name="place" id="place" value=" " placeholder="enter place"></td>
	    </tr>
	    <tr>
	    	<td colspan="2" align="center"><button type="submit" name="submit" id="submit">Submit</button></td>
	    </tr>
	</form>
	</table>
</body>
</html>

				
