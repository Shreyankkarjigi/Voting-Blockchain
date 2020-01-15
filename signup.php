<?php
include_once'header.php';
?>

<section class="main-container">
<div class="main-wrapper">
<h2><font color="#f49d41">Sign Up</h2><hr color="#f49d41">
<h1 align="center"><font color="red"><ul>Note:-Please fill this form and visit your nearest centre for process completion.</h1></ul><br>
<marquee style="color:white"type="scroll" direction="left">Please upload required documents and carry a copy with you while verification.</marquee><hr color="gold"size="5">

<body>
<form class="signup-form" action="includes/signup.inc.php" method="POST">
<input type="text" name="first"placeholder="Firstname ( As on identity proof)" id="first" required> 
<input type="text" name="last"placeholder="Lastname   ( As  on identity proof)"id="last" required> 
<input type="text" name="email"placeholder="E-mail-ID"id="email"required> 
<input type="text" name="uid"placeholder="Username(This Can't Be Changed Once Set)"id="uid"required>
<input type="password" name="pwd"placeholder="Password"id="pwd"required><br>
<font color="#f49d41"><font align="center"required>Upload valid government identification(pan card,passport,driving license etc.)</font><br>
<input type="file" accept="image"><br>
<font color="#f49d41"><font align="center">Upload passport size photo</font><br>
<input type="file" accept="image"><br>
    <input type="submit" name="submit" value="submit">
<hr color="#f49d41">
<a href="update.php" font color="white">Click here to update Username and Other details (including password retriving)</a>
<h2 align="down"><hr color="#f49d41"><font size="5" ><font face="Times New Roman"><font color="#f49d41"> "Powered by BlockChain Technology"
</font></h2>

</form>
</body>



</section>
<?php
include_once 'footer.php';


?>
