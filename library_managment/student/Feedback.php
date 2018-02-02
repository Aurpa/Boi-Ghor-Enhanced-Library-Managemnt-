 <?php
session_start();
if(isset($_POST['submit']))
{
$host="localhost";
$user="root";
$pass="";
$db="library_managment";
$student_reg_no=$_POST['student_reg_no'];
$message=$_POST['message'];
$connect=mysqli_connect($host,$user,$pass,$db);
$query="insert into feedback(student_reg_no,message) values('$student_reg_no','$message')";

$result=mysqli_query($connect,$query);
if($result){
	echo '<script type="text/javascript"> alert("Message has been sent!") </script>';
}else{
	echo '<script type="text/javascript"> alert("Error!") </script>';
}

}
?>
<!DOCTYPE html>  
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/Feedback.css">
<style type="text/css">

</style>

</head>

<body>

<h1>
  <span>F</span>
  <span>E</span>
  <span>E</span>
  <span>D</span>
  <span>B</span>
  <span>A</span>
  <span>C</span>
  <span>K</span>
</h1>


 <div id="wrapper">
   <div id="formDiv">
   <form  method="POST" action="Feedback.php" enctype="multipart/form-data"></br>
  <label>Student Id:</label><br/>
   <input type="text" name="student_reg_no" placeholder="" size="30"></br></br>

  <p><b>Feedback:</b></br>
    <textarea name="message" rows="10" cols="60"></textarea></p>
    <input type="submit" style="width:150px;height:30px" align="center" name="submit" value="submit" ><br/><br/>
   </form>
   </div>
 </div>



<div id="sidebar">
  <ul>
    <li><a href="ViewBook.php">View Books</a></li>
    <li><a href="QCheck.php">Quantity Cheacks</a></li>
    <li><a href="Feedback.php">Feedback</a></li>
    <li><a href="Login.php">Logout</a></li>
   
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