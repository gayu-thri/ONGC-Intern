<?php session_start(); ?>
<html>
<body style="background-color: black;
        background-image: linear-gradient(to bottom right,black,white);
    text-align: center;
    font-size: 40px;
    margin: 250px 40px 250px 40px;
    font-family:"Lucida Console", Monaco, monospace;">
<?php
$server = "localhost";
$username = "root";
$password = "isunlocked";
$dbname = "loginform";	
// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["userid"]);
  $password= test_input($_POST["pass"]);
}
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data; 
}
$result=mysqli_query($conn,"SELECT * FROM login  WHERE Cpf_no= '$username' && Password LIKE '$password'");
if($result)
{
    $row = mysqli_fetch_array($result);
    if(!empty($row['Cpf_no']) AND !empty($row['Password']))
     { $_SESSION["Cpf_no"] = $row['Cpf_no']; 
       $_SESSION["username"]=$row['Employee_name'];
       $_SESSION["department"]=$row['Department'];
 $GLOBALS['name'] = $row['Employee_name'];
 echo "SUCCESSFULLY LOGGED IN..."; 
 header("Location:homepage.php?id=Welcome $name :)");
     }
    else {
        echo "Sorry, You entered wrong Username or Password.";
        echo "<br>";
      echo ' Log in again. ->';
        return false;
    }
}
?>
</body>
</html>