
<?php
session_start();
if(isset($_POST['Add']))
{
	

	$book="books/".$_FILES['book_name']['name'];
	 
	move_uploaded_file($_FILES['book_name']['tmp_name'],$book);
	
$host="localhost";
$user="root";
$pass="";
$db="library_managment";


$book_id=$_POST['book_id'];
$title=$_POST['title'];
$author_name=$_POST['author_name'];
$description=$_POST['description'];
$catagory=$_POST['catagory'];
$quantity=$_POST['quantity'];

$connect=mysqli_connect($host,$user,$pass,$db);

$query="insert into addbooks(book_id,title,author_name,description,catagory,quantity,book_name) values('$book_id','$title','$author_name','$description','$catagory','$quantity','$book')";

$result=mysqli_query($connect,$query);
if($result){
	echo '<script type="text/javascript"> alert("Book has been successfully added!") </script>';
}else{
	echo '<script type="text/javascript"> alert("Data not inserted!") </script>';
}

}
?>

 <!DOCTYPE html>  
<html>                                                                                                                                                                                                                      
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/addbooks.css">

</head>

<body>


                                                                                                
<h1>
 <span>A</span>
  <span>D</span>
  <span>D</span>
  <span>B</span>
  <span>O</span>
  <span>O</span>
  <span>K</span>
  <span>S</span>
 </h1>
 <div id="wrapper">
   <div id="formDiv">
   <form  method="POST" action="addbooks.php" enctype="multipart/form-data">
   
   <label>Upload Books:</label><br/>
   <input type="file" name="book_name" required><br/><br/> 
   <label>Book id:</label><br/>
   <input type="text" name="book_id"required><br/><br/>
   <label>Title:  </label><br/>
   <input type="text" name="title"required><br/><br/>
   <label>Author Name: </label><br/>
   <input type="text" name="author_name"required><br/><br/>
   <label>Description: </label><br/>
   <input type="text" name="description"required><br/><br/>
   <label>Catagory:</label><br/>
   <input type="text" name="catagory"required><br/><br/>
   <label>Quantity:</label><br/>
   <input type="text" name="quantity"required><br/><br/>
    <input type="submit" name="Add" style="width:150px;height: 50px color:blue" value="Add"><br/><br/>
	<a href="display_book.php"><input type="submit" name="Display Book" style="width:150px;height: 50px color:blue" value="Display Book"></a><br/><br/>
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