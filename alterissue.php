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
<div class="select">

<?php
$host='localhost';
$user='root';
$pass='isunlocked';
$db='loginform';
$con=mysqli_connect($host,$user,$pass,$db) or die("database not connected");

$Issue_no=$_POST['is_no'];
$qry=mysqli_query($con,"SELECT * FROM issues WHERE Issue_ID='$Issue_no'")or die("Query not obtained");
$row=mysqli_fetch_array($qry);
echo "<h3>Issue_ID : ".$row['Issue_ID']."</h3> <h3>Issue_description : ".$row['Issue_description']."</h3>";
$_SESSION["issno"]=$Issue_no;
?>
<p><h4>Action taken description  :</h4></p>
<p><form action="actiontakenalter.php" method="post" name="action">
<textarea name="Action_taken_Description" rows="10" cols="30">Action description</textarea></p><p>
<input type="submit" name="submit" value="Save"/></p>

</form>
</p>

</div>
</td>
</table>
</body>
</html>
