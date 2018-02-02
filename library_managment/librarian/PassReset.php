<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","library_managment");
if(isset($_POST["submit"])){
$username=mysql_real_escape_string($_POST['username']);
$email=mysql_real_escape_string($_POST['email']);
$password=mysql_real_escape_string($_POST['password']);
$Npassword=mysql_real_escape_string($_POST['Npassword']);
$Rnpassword=mysql_real_escape_string($_POST['Rnpassword']);
if($Npassword==$Rnpassword){
	
	$sql="UPDATE student
SET password='$Npassword'
WHERE email='$email';";
	
	
	mysqli_query($db,$sql);
			echo '<script type="text/javascript"> alert("Your password has been updated correctly!") </script>';
}	
else{
			echo '<script type="text/javascript"> alert("Your password does not change") </script>';
			
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



 <div id="wrapper">
   <div id="formDiv">
   <form  method="POST" action="PassReset.php" enctype="multipart/form-data">
    <div class="alert alert-error"></div>
   	<h3><b>Password Reset</b></h3><br/>
	
      <label>Username:  </label><br/>
   <input type="text" name="username" placeholder="Username" size="30" required><br/><br/>	
  
   <label>Email:  </label><br/>
   <input type="text" name="email" placeholder="Email" size="30" required><br/><br/>
    
   <label>Current Password:  </label><br/>
   <input id="password" name="password" placeholder="Password" type="password" size="30" required><br/><br/>

   <label>New Password:  </label><br/>
   <input id="password" name="Npassword" placeholder="Confirm Password" type="password" size="30" required><br/><br/>

    <label>Retype New Password:  </label><br/>
   <input id="password" name="Rnpassword" placeholder="Password" type="password" size="30" required><br/><br/><br/>


  <input name="submit" style="width:210px;height:30px" type="submit" Value="Submit" align="left"></br></br>
   <a href="Login.php"><input type="button" style="width:90px;height:30px" value="Back"></a>
 
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