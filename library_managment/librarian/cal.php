
<?php
$n1="";
$n2="";
$f="";
if(isset($_POST["click"]))
{
		
	$n1=$_POST["book_issue_date"];
	$n2=$_POST["book_return_date"];
	$d=$n2-$n1;

$f=0;
if($d>7)
{
	for($r=$d;$r>7;$r--){
		$f=$f+25;
	}
}
else{
	$f==0;
}
	
}
?>


<!DOCTYPE html>  
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/cal.css">


</head>

<body>



<h1>

  <span>F</span>
  <span>I</span>
  <span>N</span>
  <span>E</span>
  
 </h1>
 <div id="wrapper">
   <div id="formDiv">
   <form  method="POST" action="cal.php" enctype="multipart/form-data">

   
    <label>Book issue date:  </label><br/>
   <input type="text" name="book_issue_date" value="<?php echo($n1);?>"><br/><br/>
   
     <label>Book return date:  </label><br/>
   <input type="text" name="book_return_date" value="<?php echo($n2);?>"><br/><br/>
   
    <label>Fine: </label><br/>
   <input type="text" name="fine" style="width:150px;height: 50px" value="<?php echo($f);?>"><br/><br/>
   
    <input type="submit" align="center" name="click" style="width:150px;height: 50px color:blue" value="Click"><br/><br/>
	
	<input type="submit" style="width:150px;height: 50px color:blue" value="Reset"><br/><br/>
	  
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