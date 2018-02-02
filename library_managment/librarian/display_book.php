<?php
mysql_connect('localhost','root','');
mysql_select_db("library_managment");
$sql="SELECT * FROM addbooks";
$records=mysql_query($sql);


if(isset($_GET['cat_id'])){
	$id=$_GET['cat_id'];
	$sql_delete = "delete from addbooks where id='$id'";
	mysql_query($sql_delete);
	
	echo "<script language=Javascript>document.location.href='display_book.php'</script>";
}

?>
 <!DOCTYPE html>  
<html>                                                                                                                                                                                                                      
<head>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/studentinfo.css">

</head>

<body>


                                                                                                
<h1>
 <span>D</span>
  <span>I</span>
  <span>S</span>
  <span>P</span>
  <span>L</span>
  <span>A</span>
  <span>Y</span>
  </br>
  <span>B</span>
    <span>O</span>
	  <span>O</span>
	    <span>K</span>
 </h1>
 <div id="wrapper">
 <h2 style="text-align:center;">Collection of books!</h2><br/>
 <div style="width:100%; text-align:center;padding-top:30px;padding-bottom:30px;">
   <form  method="POST" action="display_book.php" enctype="multipart/form-data">
   

		<table border="1" width="100%" background="red">
			<tr style="text-align:center;">
				<th style="text-align:center;">Serial No</th>
				<th style="text-align:center;">Book id</th>
				<th style="text-align:center;">Title</th>
				<th style="text-align:center;">Author name</th>
				<th style="text-align:center;">Description</th>
				<th style="text-align:center;">Catagory</th>
				<th style="text-align:center;">Quantity</th>
				<th style="text-align:center;">Action</th>
			</tr>
  
  <?php
  $i=0;
  while($addbooks=mysql_fetch_assoc($records)){
	  $i++;
	  echo "<tr align='center'>";
	    echo "<td>".$i."</td>";
	  echo "<td>".$addbooks['book_id']."</td>";
	   echo "<td>".$addbooks['title']."</td>";
	    echo "<td>".$addbooks['author_name']."</td>";
	   echo "<td>".$addbooks['description']."</td>";
	   echo "<td>".$addbooks['catagory']."</td>";
	    echo "<td>".$addbooks['quantity']."</td>";
		
		echo '<td><a href="display_book.php?cat_id='. $addbooks['id'] .'">Delete</a></td>';
		
	  echo "</tr>";
  }
  ?>
  </table></br>
    
  <a href="addbooks.php"><input type="button" style="width:150px;height:30px" align="center" value="Back"></a>

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