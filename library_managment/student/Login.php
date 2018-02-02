<?php
session_start();
$db=mysqli_connect("localhost","root","","library_managment");
if(isset($_POST["login"])){

$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$sql="Select * from student where username='$username' and password='$password'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)==1){
	//$_SESSION['message']="You are now logged in";
	echo '<script type="text/javascript"> alert("You are now logged in") </script>';
	header("location:ViewBook.php");
}
else{
	//$_SESSION['message']="Username/password combination incorrect";
	echo '<script type="text/javascript"> alert("Username/password combination incorrect") </script>';
}
}

?>
<!DOCTYPE html>  
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/contact.css">
<style type="text/css">

</style>

</head>

<body>

<div class="login_heder">

</div>

 <div id="wrapper">
   <div id="formDiv" class="login_form">
   <form  method="POST" action="Login.php" enctype="multipart/form-data">
   	<h3><b>User Login</b></h3><br/>
   	
   <label>Username:</label><br/>
   <input id="name" name="username" placeholder="UserName" type="text" size="30" required><br/><br/>
   <label>Password:  </label><br/>
   <input id="password" name="password" placeholder="********" type="password" size="30" required><br/><br/>
  <input name="login" style="width:100px;height:30px" type="submit" Value="Login"><br/><br/>  
  <p><a href="PassReset.php">Forgot Password?</a></p>

  <p><b>New User?</b> <a href="Register.php">Register</a></p>
   </form>
   
 
   </div>
 </div>


<div id="sidebar">
  <ul>
    <li><a href="home.html">Home</a></li>
    <li><a href="About.html">About Us</a></li>
    <li><a href="Contact.php">Contact Us</a></li>
    <li><a href="Login.php">Login</a></li>
   
  </ul>
  
</div>


<div id="toggle-btn" onclick="toggleSidebar(this)">
  <span></span>
  <span></span>
  <span></span>
</div>





<script type="text/javascript" src="js/part.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> 
    
    
</body>
</html>