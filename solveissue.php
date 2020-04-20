<?php session_start(); ?>
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
	border-color: black;
	padding: 0.35px;
	margin-top: 20px;
	margin-left:10px;
	margin-right:10px;
	text-align:center;
}


</style>
</head>
<body>
<div class="select"><h2>
<?php
if(isset($_GET['id'])){
echo "<h2>Issue_no ".$_GET['id']." has been solved</h2>";
}
?>

<h2>Select the issue to solve</h2>
<?php
$host='localhost';
$user='root';
$pass='isunlocked';
$db='loginform';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
$depar=$_SESSION["department"];
mysqli_select_db($con,"loginform")or die("no database");
$qry=mysqli_query($con,"SELECT * FROM issues WHERE Status LIKE 'Pending' AND Department_to LIKE '$depar' AND Solution_status LIKE 'Unsolved'") or die("Query not obtained");
?>
<table border='1' text-align='center' border-style='groove' >
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
$is_no=$row['Issue_ID'];?>
<td>
<form action="checksolve.php" method="post" name="alterissue"><input type="submit" name="submit" value="CHECK"/><input type="hidden" name="is_no" value="<?php echo $is_no;?>"/></form></td>

<?php
echo "</tr>";
}
echo "</table>";
?>

</div>
</td>
</table>
</body>
</html>
        

</div>
</body>
</html>