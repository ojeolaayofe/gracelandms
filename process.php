<?php

if(isset($_POST['btn-send']))
{
	$Username = $_POST['Username'];
	$Email = $_POST['Email'];
	$Phonenumber = $_POST['Phonenumber'];
	$subject = $_POST['subject'];
	$text = $_POST['text'];


	if (empty($Username) || empty($Email) || empty($Phonenumber) || empty($subject) || empty($text)) 
	{
		header('location:contactUs.php?error');
	}
	else{
		$to = "ojeolaponle@gmail.com";

		 if (mail($to,$subject,$Email,$Phonenumber,$text)) {
		 	header("location:contactUs.php?success");
		 }
	}
}
else
{
	header("location:contactUs.php");
}




?>