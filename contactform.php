<?php  

if(isset($_POST['submit'])) {
	$name = $_POST['your_name'];
	$email = $_POST['your_email'];
	$message = $_POST['your_message'];
	
	$my_mail = "kiznekako@gmail.com";
	$from = "From: ".$email;
	$text = "You received an email from: ".$name."\n\n".$message;
	
	mail($my_mail, $text);
	header("location: index.php");
}
?>