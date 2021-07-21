<?php 
	session_start();
	include 'connection.php';

	if(isset($_POST['submit'])){
		$a = $_POST['user'];
		$b = $_POST['Amount'];
		$d = $_GET['Name'];
	}
	
	$result1 = mysqli_query($con,"SELECT * FROM customer where Name='$a'");
	if (!$result1) {
		printf("Error: %s\n", mysqli_error($con));
		exit();
	}
	while($row = mysqli_fetch_array($result1)){
		$f = $row[3];
		$c = "UPDATE customer SET ";
		$c .= "Balance=Balance+'$b' WHERE Name='$a'";
		mysqli_query($con,$c);
	}
	
	$result2 = mysqli_query($con,"SELECT * FROM customer where Name='$d'");
	if (!$result2) {
		printf("Error: %s\n", mysqli_error($con));
		exit();
	}
	while($row = mysqli_fetch_array($result2)){
		$g = $row[3];
		$e = "UPDATE customer SET ";
		$e .= "Balance=Balance-'$b' WHERE Name='$d'";
		mysqli_query($con,$e);
	}
	
	$result3 = mysqli_query($con,"SELECT * FROM customer where Name='$d'");
	if (!$result3) {
		printf("Error: %s\n", mysqli_error($con));
		exit();
	}
	while($row = mysqli_fetch_array($result3)){
		$h = "INSERT INTO transaction(sender, receiver, balance) VALUES('".$d."', '".$a."', '".$b."')";
		mysqli_query($con,$h);
	}
	
?>

<html>
<head>
<script>
alert("Your Transaction has been Successful");
window.location.href="display.php";
</script>
</head>
<html>