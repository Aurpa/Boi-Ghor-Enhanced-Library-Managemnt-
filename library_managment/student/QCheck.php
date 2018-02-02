<?php
session_start(); 
 
mysql_connect('localhost','root','');
mysql_select_db("library_managment"); 
?>

<!DOCTYPE html>  
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/QCheck.css">
<style type="text/css">

</style>

</head>

<body>

<h1>
  <span>Q</span>
  <span>U</span>
  <span>A</span>
  <span>N</span>
  <span>T</span>
  <span>I</span>
  <span>T</span>
  <span>Y</span>
  
</h1>


 <div id="wrapper">
   <div style="width:100%; text-align:center;padding-top:30px;padding-bottom:30px;">
   <h2>Search your desired books here</h2>
   <form  method="POST" action="QCheck.php" enctype="multipart/form-data"></br>
	
	<input type="text" name="search" placeholder="What are you looking for?">
	<input type="submit" name="search_submit" value="Search">
    
   

   </form>
    </div>
	
	<?php
	if(isset($_POST['search_submit'])){
		 
		$sql_search="SELECT * FROM `addbooks` 
						WHERE title like '%$_POST[search]%' 
							or author_name like '%$_POST[search]%' or 
							catagory like '%$_POST[search]%'";
		$rs=mysql_query($sql_search);
		$count = mysql_num_rows($rs);
		//echo $count;
		if($count>0){
			echo "<h3 align='center'>Your searching result is ". $count ." for this <i><u>". $_POST['search'] ."</u></i> keyword</h3>"
	?>
		<table border="1" width="100%" background="red">
			<tr style="text-align:center;">
				<th>SI.</th>
				<th>Books Name</th>
				<th>Book ID</th>
				<th>Quantity</th>
				<th>Author</th>
				<th>Category</th>
				<th>Description</th>
				<th>Read | Download</th>
			</tr>
		
	<?php
			$i=0;
			while($row=mysql_fetch_array($rs)){
				$i++;
				 
			?>
				<tr align="center">
					<td><?php echo $i; ?></td> 
					<td><?php echo $row['title']; ?></td> 
					<td><?php echo $row['book_id']; ?></td> 
					<td><?php echo $row['quantity']; ?></td> 
					<td><?php echo $row['author_name']; ?></td> 
					<td><?php echo $row['catagory']; ?></td> 
					<td><?php echo $row['description']; ?></td> 
					<td><a href="../librarian/<?php echo $row['book_name']; ?> " target="__blank">Read</a> | <a href="../librarian/<?php echo $row['book_name']; ?>" download>Download</a></td> 
				</tr>
		<?php
				
			}
			echo "</table>";
		}
		else{
			echo "<h3 align='center'>No books for this <i><u>". $_POST['search'] ."</u></i> keyword</h3>";			
		}
	}
	?> 
	
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