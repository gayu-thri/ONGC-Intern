<?php
$host='localhost';
$user='root';
$pass='isunlocked';
$db='loginform';
$con=mysqli_connect($host,$user,$pass,$db) or die("database not connected");
session_start();
$Issue_no=$_SESSION["issno"];
$en=$_SESSION["username"];
$act=$_SESSION["act"];
$con=mysqli_connect($host,$user,$pass,$db) or die("database not connected");
$dos=$_SESSION["dos"];
$scpf=$_SESSION["scpf"];
$dt=$_SESSION["dt"];
$qry=mysqli_query($con,"INSERT INTO chat(Issue_ID,
	Date_Of_Submission,Issue_submitted_by_Cpf_no,Action_description,Action_taken_date,Action_taken_by,Department) VALUES('$Issue_no','$dos','$scpf','$act',NOW(),'$en','$dt')") or die("Query not obtained".mysqli_error($con));
echo "hello";
header("Location:solveissue.php?id=$Issue_no");?>