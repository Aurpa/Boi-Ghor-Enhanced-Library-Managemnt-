<?php
session_start();
if(isset($_POST['issue_book']))
{
$host="localhost";
$user="root";
$pass="";
$db="library_managment";
$student_reg_no=$_POST['student_reg_no'];
$book_title=$_POST['book_title'];
$author_name=$_POST['author_name'];
$book_issue_date=$_POST['book_issue_date'];
$book_return_date=$_POST['book_return_date'];

$connect=mysqli_connect($host,$user,$pass,$db);
$query="insert into issue_book(student_reg_no,book_title,author_name,book_issue_date,book_return_date) values('$student_reg_no','$book_title','$author_name','$book_issue_date','$book_return_date')";

$result=mysqli_query($connect,$query);
if($result){
	echo '<script type="text/javascript"> alert("Book has been issued successfully !") </script>';
}
else{
	echo '<script type="text/javascript"> alert("Book not issued!") </script>';
}

}
?>

<!DOCTYPE html>  
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/issue.css">

</head>

<body>
<h1>
 <span>B</span>
  <span>O</span>
  <span>O</span>
  <span>K</span>
  </br>
  <span>I</span>
  <span>S</span>
  <span>S</span>
  <span>U</span>
  <span>E</span>
 </h1>

 <div id="wrapper">
   <div id="formDiv">
   <form  method="POST" action="issue.php" enctype="multipart/form-data">
   <label>Student Reg No:</label><br/>
   <input type="text" name="student_reg_no"><br/><br/>
  
   <label>Book title:</label><br/>
   <input type="text" name="book_title"><br/><br/>
   
     
   <label>Author Name:</label><br/>
   <input type="text" name="author_name"><br/><br/>
   
     
   <label>Book issue date:</label><br/>
   <input type="text" name="book_issue_date"><br/><br/>
   
     
   <label>Book return date:</label><br/>
   <input type="text" name="book_return_date"><br/><br/>
   
 
 <input type="submit" name="issue_book" style="width:150px;height: 50px color:blue" value="Issue book"><br/><br/>
 <a href="issuelist.php"><input type="button" name="Issue_book_list" style="width:150px;height: 50px color:blue" value="Issue book list"></a><br/><br/>

   

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