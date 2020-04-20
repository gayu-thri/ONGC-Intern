<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="60" >
<style>
body{
	background-color: lightcoral;
  background-image: linear-gradient(to bottom right, lightcoral,white);
    text-align: center;
	text-align:center;
}
.select
{   background-color:lightyellow;
    align:center;  font-family:"Comic Sans MS", cursive,sans-serif;        border-style: outset;
	border-width: 8px;
	border-color: black;
	padding: 0.35px;
	margin-top: 200px;
	margin-left:250px;
	margin-right:250px;
	text-align:center;	
}
</style>
</head>
<body>
<?php
session_start();?>
<div class="select">
<h1 style="font-size:3vw">Select the date <br> to view the issues </h1>
<form action="showissues.php" method="post" name="showissues">
<table width="500" border="0.5px" align="center" cellpadding="5" cellspacing="5" class="Table">
<tr><td> 
  From <input type="date" name="from"></td><td>
  To <input type="date" name="to">
  </td><td>
  <select align="center" name="type">
  	<option value="">Select status</option>
<option value="Pending">Pending</option>
<option value="Completed">Completed</option>
<option value="All">All</option>
</select>
 </td></tr></table>
 <br/>
   <input type="submit" name ="submit" value="Submit" align="center" >
</form>
</div>
</body>
</html>