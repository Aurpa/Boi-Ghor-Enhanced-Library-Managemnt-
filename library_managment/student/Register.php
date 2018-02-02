<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","library_managment");
if(isset($_POST["register"])){

$username=mysql_real_escape_string($_POST['username']);
$student_reg_no=mysql_real_escape_string($_POST['student_reg_no']);
$dept=mysql_real_escape_string($_POST['dept']);
$email=mysql_real_escape_string($_POST['email']);
$contact=mysql_real_escape_string($_POST['contact']);
$password=mysql_real_escape_string($_POST['password']);
$cpassword=mysql_real_escape_string($_POST['cpassword']);

if($password==$cpassword){
	
	$sql="insert into student(username,student_reg_no,dept,email,contact,password) values ('$username','$student_reg_no','$dept','$email','$contact','$password')";
	mysqli_query($db,$sql);
			echo '<script type="text/javascript"> alert("Registration process is perfectly done!") </script>';
}	
else{
			echo '<script type="text/javascript"> alert("The two password do not match") </script>';
			
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
   <form  method="post" action="Register.php" enctype="multipart/form-data">
    <div class="alert alert-error"></div>
   	<h3><b>Create an account</b></h3><br/>
   	
   <label>Username:</label><br/>
   <input id="name" name="username" placeholder="Username" type="text" size="30" required ></br></br>
   <label>Reg No:  </label><br/>
   <input type="text" name="student_reg_no" placeholder="Reg no" size="30" required><br/><br/>
   <label>Dept:  </label><br/>
   <input type="text" name="dept" placeholder="Dept" size="30" required><br/><br/>
   <label>Email:  </label><br/>
   <input type="text" name="email" placeholder="Email" size="30" required><br/><br/>
    
    <label>Contact No:  </label><br/>
   <input type="text" name="contact" placeholder="Contact no" size="30" required><br/><br/>
   
    
   <label>Password:  </label><br/>
   <input id="password" name="password" placeholder="Password" type="password" size="30" required><br/><br/>

   <label>Confirm Password:  </label><br/>
   <input id="password" name="cpassword" placeholder="Confirm Password" type="password" size="30" required><br/><br/><br/>



  <input name="register" style="width:100px;height:30px" type="submit" Value="Register">
  <input name="reset" style="width:100px;height:30px" type="reset" Value="Reset" align="left"></br></br>
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