<html>
<head>
<style>
body{
	background-color: lightcoral;
  background-image: linear-gradient(to bottom right, lightcoral,white);
    text-align: center;
}
.select
{   background-color:lightyellow;
    align:center;
    border-style: double;
	border-width: 8px;
	border-color: darkblue;
	padding: 0.35px;
	margin-top: 150px;
	margin-left:150px;
	margin-right:150px;
	text-align:center;
}
</style>
</head>
<body>
<div class="select">
<?php
session_start();
$conn=mysqli_connect("localhost","root","isunlocked","loginform")or die("failed to connect");
mysqli_select_db($conn,"database")or die("no database");
$from=$_POST['from'];
$to=$_POST['to'];
$status=$_POST['type'];
echo "<h1>".$status." issues </h1><h3>From ".$from." TO ".$to."</h3>";
if ($status=="All")
{$qry=mysqli_query($conn,"SELECT * FROM issue WHERE DATE(Request_Date) BETWEEN $from AND '$to'") or die("Query not obtained");
?>
<table border='2' align='center' border-style='double' >
<tr>
<th>Issue_ID</th>
<th>Issue_Description</th>
<th>Issue_submitted_by</th>
<th>Issue_submitted_by_Cpf_no</th>
<th>Department_to</th>
<th>Date_of_Submission</th>
<th>Status</th>
<th>Action_taken_description</th>
<th>Action_taken_by</th>
<th>Action_taken_date</th>
<th>Solution_status</th>
</tr>
<?php
while($row = mysqli_fetch_array($qry))
{
echo "<tr>";
echo "<td>" . $row['Issue_ID'] . "</td>";
echo "<td>" . $row['Issue_description'] . "</td>";
echo "<td>" . $row['Issue_submitted_by'] . "</td>";
echo "<td>" . $row['Issue_submitted_by_Cpf_no'] . "</td>";
echo "<td>" . $row['Department_to'] . "</td>";
echo "<td>" . $row['Date_Of_Submission'] . "</td>";
echo "<td>" . $row['Status'] . "</td>";
echo "<td>" . $row['Action_taken_description'] . "</td>";
echo "<td>" . $row['Action_taken_by'] . "</td>";
echo "<td>" . $row['Action_taken_date'] . "</td>";
echo "<td>" . $row['Solution_status'] . "</td>";
?>
<?php
echo "</tr>";
echo "</table>";
}
mysqli_close($conn);         
}

else
{$qry=mysqli_query($conn,"SELECT * FROM issue WHERE DATE(Request_Date) BETWEEN $from AND '$to' AND Status LIKE '$status'") or die("Qyery not obtained");
?>
<table border='2' align='center' border-style='double' >
	<tr>
<th>Issue_ID</th>
<th>Issue_Descrip.</th>
<th>Submitted_by</th>
<th>Cpf_no</th>
<th>Department_to</th>
<th>Date_Of_Sub.</th>
<th>Status</th>
<th>Action_descrip.</th>
<th>Taken_by</th>
<th>Taken_date</th>
<th>Solution_status</th>
    </tr>
<?php
while($row = mysqli_fetch_array($qry))
{
echo "<tr>";
echo "<td>" . $row['Issue_ID'] . "</td>";
echo "<td>" . $row['Issue_description'] . "</td>";
echo "<td>" . $row['Issue_submitted_by'] . "</td>";
echo "<td>" . $row['Issue_submitted_by_Cpf_no'] . "</td>";
echo "<td>" . $row['Department_to'] . "</td>";
echo "<td>" . $row['Date_Of_Submission'] . "</td>";
echo "<td>" . $row['Status'] . "</td>";
echo "<td>" . $row['Action_taken_description'] . "</td>";
echo "<td>" . $row['Action_taken_by'] . "</td>";
echo "<td>" . $row['Action_taken_date'] . "</td>";
echo "<td>" . $row['Solution_status'] . "</td>";
?>
<?php
echo "</tr>";
}
echo "</table>";
?>
mysqli_close($conn);        
}
?>

</div>
</body>
</html>