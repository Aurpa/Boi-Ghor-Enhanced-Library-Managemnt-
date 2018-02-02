<?php
$host="localhost";
$user="root";
$pass="";
$db="library_managment";

$connect=mysqli_connect($host,$user,$pass,$db);

if(isset($_GET["id"]))
{	
$id=$_GET["id"];
mysqli_query($link,"DELETE FROM `addbooks` WHERE id=1");
}
?>


