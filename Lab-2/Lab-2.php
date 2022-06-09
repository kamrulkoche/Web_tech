<!DOCTYPE html>
<html>
<head>
	
</head>
<body>




<?php
$firstnameErrMsg = "";
$lastnameErrMsg= "";
$GendernameErrMsg= "";
$emailErrMsg= "";
$phoneErrMsg= "";
$roadErrMsg="";


	if ($_SERVER['REQUEST_METHOD'] === "POST"){
		$flag=false;
		if(empty($_POST['FirstName'])) {
			//echo "First Name Empty";
			$firstnameErrMsg = "First Name Empty";
			$flag=true;
			//echo "<br>";
		}
		else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['FirstName'])) {
				echo "Only letters and spaces allowed.";
				$firstnameErrMsg = "Only letters and spaces allowed";
				echo "<br>";
				}
				
			}	
		
		if(empty($_POST['LastName'])) {
			//echo "Last Name Empty";
			$lastnameErrMsg = "Last Name Empty";
			$flag=true;
			//echo "<br>";
		}
		else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['LastName'])) {
				echo "Only letters and spaces allowed.";
				$lastnameErrMsg = "Only letters and spaces allowed";
				echo "<br>";
				}
				
			}	

		if(empty($_POST['Gender'])) {
			//echo "Gender not Selected";
			$GendernameErrMsg = "Gender not Selected";
			$flag=true;
			//echo "<br>";
		}
		if(empty($_POST['email'])) {
			//echo "Email is Empty";
			$emailErrMsg = "Email is Empty";
			$flag=true;
			//echo "<br>";
		}
		else {
				if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				echo "Please correct email";
				$emailErrMsg = "Please correct email";
				echo "<br>";
				}
				
			}	
			if(empty($_POST['number'])) {
			//echo "MobileNo is Empty";
			$phoneErrMsg= "Mobileno is Empty";
			$flag=true;
			//echo "<br>";
		}
		if(empty($_POST['road'])) {
			//echo "Street/House/Road/ is Empty";
			$roadErrMsg= "Street/House/Road/ is Empty";
			$flag=true;
			//echo "<br>";
		}
		if(empty($_POST['Country'])) {
			echo "Country Name Empty";
			$flag=true;
			echo "<br>";
		}
		if (!$flag) {
			echo "Registration Successful";
		}
	}
?>



<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
	<fieldset>
		<legend>General</legend>
<table>
	<thead></thead>
	<tbody>
		<tr>
			<td>First Name</td>
			<td></td>
			<td></td>
			<td></td>
			<td><label for="FirstName"></label>
				<input type="text" name="FirstName"placeholder="FirstName"autofocus>
				<span><?php echo $firstnameErrMsg; ?></span>
			</td>
		</tr>
		<tr>	
			<td>Last Name</td>
			<td></td>
			<td></td>
			<td></td>
			<td><label for="LastName"></label>
				<input type="text" name="LastName"placeholder="LastName"autofocus>
				<span><?php echo $lastnameErrMsg; ?></span>
			</td>
		</tr>	
		<tr>
			<td>Gender</td>
			<td></td>
			<td></td>
			<td></td>
			<td>
				<input type="radio"name="Gender"id="Male"value="Male">
				<label for="Male">Male</label>
				<input type="radio" name="Gender"id="Female"value="Female">
				<label for="Female">Female</label>
				<span><?php echo $GendernameErrMsg; ?></span>
			</td>
		</tr>	
			</tbody>
			</table>
</fieldset>
<br><br>
<fieldset>
	<legend>Contact</legend>
	<table>
	<thead></thead>
	<tbody>
		<tr>
			<td>Email</td>
			<td></td>
			<td></td>
			<td></td>
			<td><input type="email" name="email">
			<span><?php echo $emailErrMsg; ?></span></td>

		</tr>	
		<tr>
			<td>Mobile No</td>
			<td></td>
			<td></td>
			<td></td>
			<td><input type="number" name="number">
			<span><?php echo $phoneErrMsg; ?></span></td>
		</tr>	
		</tbody>
			</table>
</fieldset>
<br><br>
<fieldset>
	<legend>Address</legend>
<table>
	<thead></thead>
	<tbody>
		<tr>
			<td>Street/House/Road</td>
			<td></td>
			<td></td>
			<td></td>
			<td><label for="Street/House/Road"></label>
				<input type="text" name="road">
					<span><?php echo $roadErrMsg; ?></span></td>
			</td>
		</tr>	
		<tr>
			<td>Country</td>
			<td></td>
			<td></td>
			<td></td>
			<td>
				<select name="Country"id="Country">
					<option value="Bangladesh">Bangladesh</option>
					<option value="India">India</option>
				</select>
			</td>
		</tr>	
		<tr>
			<td></td>
		</tr>	
	</tbody>
</table>
</fieldset>
	<input type="submit" name="Register"value="Register">
</form>

