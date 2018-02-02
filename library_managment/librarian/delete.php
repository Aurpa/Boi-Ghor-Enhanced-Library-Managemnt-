<?php
session_start();
if(isset($_POST['delete']))
{
$host="localhost";
$user="root";
$pass="";
$db="library_managment";

$student_reg_no=$_POST['student_reg_no'];

$connect=mysqli_connect($host,$user,$pass,$db);
$query="delete from student where student_reg_no=$student_reg_no";

$result=mysqli_query($connect,$query);
if($result){
	echo '<script type="text/javascript"> alert("Data deleted") </script>';	
}
else{
	echo '<script type="text/javascript"> alert("Data not deleted!") </script>';

}
mysqli_close($connect);
}
?>

<!DOCTYPE html>  
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/delete.css">

</head>

<body>



<h1>
 <span>D</span>
  <span>E</span>
  <span>L</span>
  <span>E</span>
  <span>T</span>
  <span>E</span>
 
 </h1>
 <div id="wrapper">
   <div id="formDiv">
   <form  method="POST" action="delete.php" enctype="multipart/form-data">
 
   <label>Student Id:  </label><br/>
   <input type="text" name="student_reg_no"><br/><br/>
   
    <input type="submit" align="center" name="delete" value="Clear data"><br/><br/>
   </form>
   </div>
 </div>

 <div id="sidebar">
  <ul>
   <li><a href="studentinfo.php">Student Info</a></li>
 <li><a href="addbooks.php">Add books</a></li>
    <li><a href="issue.php">Book Issue</a></li>
    <li><a href="cal.php">Calculate Fine</a></li>
    <li><a href="feedback.php">View Feedback</a></li>
     <li><a href="delete.php">Delete Student</a></li>
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