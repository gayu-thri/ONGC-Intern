<?php session_start(); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="60" >
<style>
body{ 
        background-color: lightcoral;
        background-image: linear-gradient(to bottom right, lightcoral,white);
    text-align: center;
    margin: center;

          }
</style>
</head>
<body>
<h2 align="center">
Solution for your issues
</h2>
<?php
$host='localhost';
$user='root';
$pass='isunlocked';
$db='loginform';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
$depar=$_SESSION["department"];
$ui=$_SESSION["Cpf_no"];

mysqli_select_db($con,"loginform")or die("no database");
$sql=
$qry=mysqli_query($con,"SELECT * FROM issues WHERE Status LIKE 'Pending' AND Issue_submitted_by_Cpf_no LIKE '$ui' and Solution_status LIKE 'Solved'") or die("Query not obtained".mysqli_error($con));
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
<td>
<form action="chat.php" method="post" name="confirmsolution">
<input type="submit" name="submit" value="Check"/>
<input type="hidden" name="is_no" value="<?php echo $is_no;?>"/></form>
</td>
<?php
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
         
?>

<?php
if(isset($_GET['id'])){
echo "<h4>Issue ".$_GET['id']."</h4>";
}

?>
</td>
</table>
</body>
</html>