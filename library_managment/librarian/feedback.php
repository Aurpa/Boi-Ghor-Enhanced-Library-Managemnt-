<?php
mysql_connect('localhost','root','');
mysql_select_db("library_managment");
$sql="SELECT * FROM feedback";
$records=mysql_query($sql);


?>

<!DOCTYPE html>  
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/vfeedback.css">


</head>



<body>



<h1>
 <span>V</span>
  <span>I</span>
  <span>E</span>
  <span>W</span>
  </br>
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
   <form  method="POST" action="feedback.php" enctype="multipart/form-data">
   <table border="1" width="100%" background="red" >
  <tr>
  <th>Student id</th>
   <th>Message</th>
    
   
  </tr>
  
  <?php
  
  while($feedback=mysql_fetch_assoc($records)){
	   
	  echo "<tr align='center'>";
	  echo "<td>".$feedback['student_reg_no']."</td>";
	   echo "<td>".$feedback['message']."</td>";
	  echo "</tr>";
	  
	  }
  ?>
  </table>
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