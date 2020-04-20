<?php session_start(); ?>
<html>
<style>
	body{	
        background-color: lightcoral;
        background-image: linear-gradient(to bottom right, lightcoral,white);
		text-align: center;
		margin: center;

	        }
</style>
<body>

<?php
$host='localhost';
$user='root';
$pass='isunlocked';
$db='loginform';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"loginform")or die("no database");
$uid=$_POST['is_no'];

$qry=mysqli_query($con,"SELECT * FROM chat WHERE 
Issue_ID=$uid");?>
<h2>Issue no:<?php echo $uid;?></h2>
<table border='1' text-align='center' border-style='groove' >
<tr>

<th>Request_Date</th>
<th>Request_given_by</th>
<th>Action_descrip.</th>
<th>Taken_by</th>
<th>Taken_Date</th>


</tr>
<?php
while($row = mysqli_fetch_array($qry))
{
echo "<tr>";


echo "<td>" . $row['Request_given_date'] . "</td>";
echo "<td>" . $row['request_given_by'] . "</td>";
echo "<td>" . $row['Action_description'] . "</td>";
echo "<td>" . $row['replied_by'] . "</td>";
echo "<td>" . $row['Replied_date'] . "</td>";?>

<?php
echo "</tr>";
}
echo "</table>";
?>
<table align="center" width="100%" >
<tr>
<td style="text-align:center">
<h3><form action="Request.php" method="post" name="confirmsolution">
<input type="submit" name="submit" value="Request" align="center"/>
<input type="hidden" name="is_no" value="<?php echo $uid;?>"/></form></td><td  style="text-align:left">
<form action="confirmsolution.php" method="post" name="confirmsolution">
<input type="submit" name="submit" value="Confirm" align="center"/>
<input type="hidden" name="is_no" value="<?php echo $uid;?>"/></form></h3></td></tr></table>
</td>
</table>
</body>
</html>