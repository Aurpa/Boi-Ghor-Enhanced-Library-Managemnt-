<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];
$msg='name:'.$_POST['name']."\n".'email:'.$_POST['email']."\n".'comments:'.$_POST['comments'];
mail('yasiraakhter35@gmail.com','Sample Contact Us Form',$msg);
	header('location:Contact_thank.php');
}
else{
		header('location:Contact.php');
	exit(0);

}
?>