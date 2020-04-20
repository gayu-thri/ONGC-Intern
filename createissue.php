<?php session_start(); ?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="60" >
<style>
body{
  background-color: lightcoral;
  background-image: linear-gradient(to bottom right, lightcoral,white);
     padding: 0 0 115px;
}
.select
{   background-color:lightyellow;
    align:center;
    border-style: double;
  border-width: 8px;border-color: black;
  padding: 0.35px;
  margin-top: 175px;margin-left:125px;margin-right:125px;
  text-align:center;
  font-family:"Lucida Console", Monaco, monospace;
}
</style>
</head>
<body>
<div class="select"></p>
<form action="insert.php" method="post" name="createissueinsert">
<table width="700" border="0.5px" align="Centre" cellpadding="5" cellspacing="25">

<tr>
<td  valign="top">Issue</td>
<td><textarea name="Issue" rows="15" cols="40">Issue </textarea></td>
<td>
<select align="center" name="Department" style="height:50px; width:100px;background-color: skyblue; color:black;">
  <option value="">Select to dept.</option>
<option value="Hardware">Hardware</option>
<option value="Software">Software</option>
<option value="Others">Others</option>
</select>
</td>
<td>
  Issue in:<select name="issue">
  <optgroup label="Software">
    <option value="cgg">CGG</option>
    <option value="paradigm">PARADIGM</option>
  </optgroup>
  <optgroup label="Hardware">
    <option value="ram">RAM</option>
    <option value="disk">DISK</option>
  </optgroup>
</select></td>
</tr>
</table>
<input type="submit" name="submit" value="SUBMIT" id="submit"><br>
</form>
</p>
</div>
</body>
</html>