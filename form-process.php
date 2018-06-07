<?php
		
		$to = "";
		$from = "";
		$subject = "";
		$headers = "";
		$message = "";
		$mailsent = "";
		
		$to = "jason@thejasonwilson.com";
		$from = "thejasonwilson.com";
		$subject = $_REQUEST['Subject'];
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$headers .= "Content-transfer-Encoding: 7bit\r\n";
		$headers .= "From: Jason Wilson\r\n"; 
		 
		$message = "<table width=\"500\" cellspacing=\"0\" cellpadding=\"0\" textalign=\"center\">";
		$message .=	"<tr><td>";
		$message .=	"Name: " . $_REQUEST['Name'] . "<br /><br />";
		$message .=	"Email: " . $_REQUEST['Email'] . "<br /><br />";
		$message .=	"Phone: " . $_REQUEST['Phone'] . "<br /><br />";
		$message .=	"Message: " . $_REQUEST['Message'] . "<br /><br />";
		$message .=	"</td></tr></table>";
		
		if($mailsent = mail($to, $subject, $message, $headers)){
			echo "Your message was received. I'll get back to you very soon!";
		}else{
			echo "Sorry, your message was unable to send. Please send a direct message to jason@thejasonwilson.com.";
		}

?>