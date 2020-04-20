<?php
$host='localhost';
$user='root';
$pass='isunlocked';
$db='loginform';
$con=mysqli_connect($host,$user,$pass,$db) or die("database not connected");
session_start();
$act=$_POST['Action_taken_description'];
$Issue_no=$_SESSION["issno"];
$en=$_SESSION["username"];
$_SESSION["act"]=$act;
echo "hi".$en.$Issue_no.$act;
$qry=mysqli_query($con,"UPDATE issues SET Action_taken_description='$act',Action_taken_by='$en',Solutionstatus='Solved',Action_taken_Date=NOW() WHERE Issue_ID='$Issue_no'") or die("Query not obtained".mysqli_error($con));
header("Location:updatechat.php?");
?>
