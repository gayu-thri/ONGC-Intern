<?php
$server = "localhost";
$username = "root";
$password = "isunlocked";
$dbname = "loginform";	
// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
session_start();
$Issue=$_POST['Issue'];
$Department_to=$_POST['Department'];
$Cpf_no=$_SESSION["Cpf_no"];
$Name=$_SESSION["username"];
$Department_from=$_SESSION["department"];
$query=mysqli_query($conn,"INSERT INTO issues(Issue_description,Department_to,Issue_submitted_by_Cpf_no,Issue_submitted_by,Department_from) VALUES('$Issue','$Department_to','$Cpf_no','$Name','$Department_from')")or die(mysqli_error($conn));
if($query)
	header("Location:homepage.php?id=Issue Submitted successfully");
else
	header("Location:homepage.php?id=Issue Submission Failed Try again");
?>




