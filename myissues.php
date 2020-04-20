<!DOCTYPE html>
<?php
session_start();
?>
<html>
<body>
<div class="table" >
<h2 align="center" >
Your issues 
</h2>

<?php
$host='localhost';
$user='root';
$pass='isunlocked';
$db='loginform';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
$depar=$_SESSION["department"];
$ui=$_SESSION["Cpf_no"];
mysqli_select_db($con,"database")or die("no database");
$qry=mysqli_query($con,"SELECT * FROM issues WHERE Request_given_by ='$ui'") or die("Query not obtained");
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
echo "<td>" . $row['Date_of_Submission'] . "</td>";
echo "<td>" . $row['Status'] . "</td>";
echo "<td>" . $row['Action_taken_description'] . "</td>";
echo "<td>" . $row['Action_taken_by'] . "</td>";
echo "<td>" . $row['Action_taken_date'] . "</td>";
echo "<td>" . $row['Solution_status'] . "</td>";
$is_no=$row['Issue_ID'];?>


<?php
echo "</tr>";
}
echo "</table>";
?>

</td>
</table>
</div>
</body>
</html>