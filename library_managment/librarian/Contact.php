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
   <div id="formDiv">
   <form  method="POST" action="Contact.php" enctype="multipart/form-data">
   	<h3><b>Contact Info</b></h3><br/>
   	<h5><b>Phone: </b>01754358272</h5>
   	<h5><b>Email: </b><a href="#">aurpajamalpur@gmail.com</a></h5>
   <label>Name:</label><br/>
   <input type="text" name="name" placeholder="Name" size="30"></br></br>
   <label>Email:  </label><br/>
   <input type="text" name="Email" placeholder="Email" size="30"><br/><br/>
   <p><b>Your Comments:</b></br>
   	<textarea name="comments" rows="8" cols="50"></textarea></p>
    <input type="button" style="width:150px;height:30px" align="center" name="send" value="Send" ><br/><br/>
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