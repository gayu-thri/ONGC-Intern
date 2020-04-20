<html>
<div class=logout>
<?php
    session_start();
    $_SESSION = array();
    session_destroy();
	header("Location:login.php?id=Sucessfully logged out");
?>
</div>
</html>