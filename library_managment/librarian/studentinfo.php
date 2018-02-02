<?php
mysql_connect('localhost','root','');
mysql_select_db("library_managment");
$sql="SELECT * FROM student";
$records=mysql_query($sql);
?>
 <!DOCTYPE html>  
<html>                                                                                                                                                                                                                      
<head>




</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/studentinfo.css">

</head>

<body>


                                                                                                
<h1>
 <span>S</span>
  <span>T</span>
  <span>U</span>
  <span>D</span>
  <span>E</span>
  <span>N</span>
  <span>T</span>
  </br>
  <span>I</span>
    <span>N</span>
	  <span>F</span>
	    <span>O</span>
 </h1>
 <div id="wrapper">
 <h2 style="text-align:center;">Student Information</h2>
  <div style="width:100%; text-align:center;padding-top:30px;padding-bottom:30px;">
   <form  method="POST" action="studentinfo.php" enctype="multipart/form-data">
   
  <table border="1" width="100%" background="red">
<tr style="text-align:center;">
  <th style="text-align:center;" >Username</th>
  <th style="text-align:center;">Registration No</th>
  <th style="text-align:center;">Dept</th>
  <th style="text-align:center;">Email</th>
  <th style="text-align:center;">Contact No</th>
  
  </tr>
  
  <?php
  	$i=0;
  while($student=mysql_fetch_assoc($records)){
	  $i++;
	  echo "<tr align='center'>";
	  echo "<td>".$student['username']."</td>";
	   echo "<td>".$student['student_reg_no']."</td>";
	    echo "<td>".$student['dept']."</td>";
	   echo "<td>".$student['email']."</td>";
	   echo "<td>".$student['contact']."</td>";
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