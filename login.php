

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname']; 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
    if(isset($_GET['id']))
        echo $_GET['id'];
}
?>
<!DOCTYPE html>
<html>
<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="60" >
	<title> Login </title>
	<style>
		body{	
        background-color: lightcoral;
        background-image: linear-gradient(to bottom right, lightcoral,white);
		text-align: center;
		margin: center;

	        }
          #login
          {
          	margin: 150px 315px;
            text-align: center; 
        font-family:"Lucida Console", Monaco, monospace; 
        background-color: lightyellow ; 	
        border: 5px solid ;
        width: 300px;
        padding: 80px;
           }
	</style>
</head>	
<body>
<div id="login">
    <h2 style="color:black;font-size:35px;">Login</h2>
    <form method="POST" action="process.php" target="left">
    	<p>CPF No. :<input type="text" name="userid" placeholder="CPF Number" required="required" style="height: 25px"/></p>
        <p>Password :<input type="password" name="pass" placeholder="Password" required="required" style="height: 25px"/></p>
        <p><button type="submit" class="btn btn-primary btn-block btn-large" target="left">Let me in.</button></p>
    </form>
</div>
</body>
</html>