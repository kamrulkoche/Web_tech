<?php
	if ($_SERVER['REQUEST_METHOD'] === "POST"){
		$flag=false;
		if(empty($_POST['FirstName'])) {
			echo "First Name Empty";
			$flag=true;
			echo "<br>";
		}
		if(empty($_POST['LastName'])) {
			echo "Last Name Empty";
			$flag=true;
			echo "<br>";
		}
		if(empty($_POST['Gender'])) {
			echo "Gender Empty";
			$flag=true;
			echo "<br>";
		}
		if(empty($_POST['email'])) {
			echo "Email Empty";
			$flag=true;
			echo "<br>";
		}
			if(empty($_POST['number'])) {
			echo "Mobile NO Empty";
			$flag=true;
			echo "<br>";
		}
		if(empty($_POST['road'])) {
			echo "Street/House/Road/ Empty";
			$flag=true;
			echo "<br>";
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