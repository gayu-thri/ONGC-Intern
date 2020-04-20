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
$qry=mysqli_query($con,"SELECT * FROM issues WHERE Issue_no='$Issue_no'") or die("Query not obtained".mysqli_error($con));
$row = mysqli_fetch_array($qry);
$dos=$row['Date_Of_Submission'];
$scpf=$row['Issue_submitted_by_Cpf_no'];
$dt=$row['Department_to'];
$_SESSION["dos"]=$dos;
$_SESSION["scpf"]=$scpf;
$_SESSION["dt"]=$dt;
$_SESSION["issue"]=$Issue;
header("Location:updatechat2.php?");
mysqli_close($con);
?>