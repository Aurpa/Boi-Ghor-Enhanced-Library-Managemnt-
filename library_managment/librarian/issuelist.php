<?php
mysql_connect('localhost','root','');
mysql_select_db("library_managment");
$sql="SELECT * FROM issue_book";
$records=mysql_query($sql);

if(isset($_GET['cat_id'])){
	$id=$_GET['cat_id'];
	$sql_delete = "delete from issue_book where id='$id'";
	mysql_query($sql_delete);
	
	echo "<script language=Javascript>document.location.href='issuelist.php'</script>";
}
?>
 <!DOCTYPE html>  
<html>                                                                                                                                                                                                                      


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/issue_book_list.css">

</head>

<body>


                                                                                                
<h1>
 <span>I</span>
  <span>S</span>
  <span>S</span>
  <span>U</span>
  <span>E</span>
  <span>D</span>
  <br/>
  <span>B</span>
    <span>O</span>
	  <span>O</span>
	    <span>K</span>
 </h1>

 <div id="wrapper">
   
    <h2 style="text-align:center;">Issuing books</h2><br/>
	 <div style="width:100%; text-align:center;padding-top:30px;padding-bottom:30px;">
   <form  method="POST" action="issuelist.php" enctype="multipart/form-data">
   
   
  <table border="1" width="100%" background="red" >
  <tr style="text-align:center;">
  <th style="text-align:center;">Student Reg No</th>
   <th style="text-align:center;">Book title</th>
    <th style="text-align:center;">Author Name</th>
  <th style="text-align:center;">Book issue date</th>
  <th style="text-align:center;">Book return date</th>
    <th style="text-align:center;">Action</th>
  </tr>
  
  <?php
  $i=0;
  while($issue_book=mysql_fetch_assoc($records)){
	    $i++;
	  echo "<tr>";
	  echo "<td>".$issue_book['student_reg_no']."</td>";
	   echo "<td>".$issue_book['book_title']."</td>";
	    echo "<td>".$issue_book['author_name']."</td>";
	   echo "<td>".$issue_book['book_issue_date']."</td>";
	   echo "<td>".$issue_book['book_return_date']."</td>";
	   
	   echo '<td><a href="issuelist.php?cat_id='. $issue_book['id'] .'">Delete</a></td>';
	
	  echo "</tr>";
  }
  ?>
  </table><br/>
  
  <a href="issue.php"><input type="button" style="width:150px;height:30px" align="center" value="Back"></a>
  
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