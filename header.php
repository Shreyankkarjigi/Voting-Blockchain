<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>


<script src="modernizr-custom.js">
</script>




<title></title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<script>
		function validate(){
			var first = document.getElementById("first");
			if(name=="")
			alert("Fill name");
			return false;
		
		}
		else{
			return true;
		}
		

</body>
</script>


<header>
<nav>
<div class="main-wrapper">
<ul>
<li><a href ="index.php">Home</a></li>
</ul>
<div class ="nav-login">
             <?php



               if (isset($_SESSION['u_id'])){
echo'<form action="includes/logout.inc.php" method="POST">

<button type="submit" name="submit">Logout</button></form>';

}else{

echo '<form action="includes/login.inc.php" method="POST">
		<input type="text" name="uid" placeholder="Username"required>
		<input type="password" name="pwd" placeholder="password"required>
		<button type="submit" name="submit">Login</button>
	</form>
		
       <a href="signup.php">Sign Up</a>';
}

?>
</div>
</div>
</nav>
</header>