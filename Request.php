<?php
$host='localhost';
$user='root';
$pass='isunlocked';
$db='loginform';
$con=mysqli_connect($host,$user,$pass,$db) or die("database not connected");
session_start();
mysqli_select_db($con,"loginform")or die("no database");
$uid=$_POST['is_no'];
$qry=mysqli_query($con,"UPDATE issues SET Date_Of_Submission =NOW() ,Solution_status='Unsolved' WHERE Issue_ID =$uid")or die("Query  not connected".mysqli_error($con));
mysqli_close($con);
header("Location:checksolution.php?id=$uid requested again");
?>