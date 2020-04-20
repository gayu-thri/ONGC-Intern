<?php
// Start the session
session_start();
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="60" >
<style>
	body{
		font-family: "Comic Sans MS",cursive,sans-serif;
		margin:30px 10px 10px 20px;
		background-color: lightgrey;
        background-image: linear-gradient(to bottom right, black,white);
        text-align: center;
        color:white;
	}
  	.buttons
  	{ 
  		border: 5px transparent;
      text-align: center; align:center;
      margin: left;
      width: 100%
  		padding: 80px;
     

  	}
</style>
<body>
	<p style="color=black;font-size: 50px;text-align: left;">
<?php 
	if(isset($_GET['id']))
		{
    echo $_GET['id'];
     }
?>
    </p>
 <div class="buttons" style="text-align:center;">  

  <form method="POST" action="createissue.php" target="right"> 
    <p> <button type="submit" class="btn btn-primary btn-block btn-large" style="width:100%; height: 40px;font-size: 20px;">
    I have an issue    </button>  </p>
  </form>  

   <form method="POST" action="solveissue.php" target="right">
     <p> <button type="submit" class="btn btn-primary btn-block btn-large" style="width: 100%; height: 40px;font-size: 20px;">
     Solve an issue   </button>  </p>
   </form>

    <form method="POST" action="checksolution.php" target="right">
     <p> <button type="submit" class="btn btn-primary btn-block btn-large" style="width: 100%; height: 40px;font-size: 20px;">
     Check/Confirm/Req Solution   </button>  </p>	
 	</form>
 	 
<form method="POST" action="viewissue.php" target="right">
  <p> <button type="submit" class="btn btn-primary btn-block btn-large" style="width: 100%; height: 40px;font-size: 20px;"> View issues </button>  </p> 
  </form>
   

    <form method="POST" action="logout.php" target="right">
     <p> <button type="submit" class="btn btn-primary btn-block btn-large" style="width: 100%; height: 40px; font-size: 15px;background-color: dodgerblue;color: white;">
      Logout </button>  </p>	
 	   </form>

 </div>	
</body>
</html>
 