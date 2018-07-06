<?php
    $error;
	$errorName;
	$errorEmail;
	$errorPhone;
	$errorBusinessName;
	$errorCustomerId;
	$errorComments;

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
	       $secret = '6LdesF0UAAAAAL_66LCDz5sthDsVsezIyTCjbrOl';
	        //get verify response data
	        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
	        $responseData = json_decode($verifyResponse);
	        if($responseData->success){

		
				if(empty($_POST['contactname']))
				{
					$errorName = true;
					$error++;
				}
				if(empty($_POST['contactemail']))
				{
					$errorEmail = true;
					$error++;
				}
				if(empty($_POST['contactphone']))
				{
					$errorPhone = true;
					$error++;
				}

				if(empty($_POST['contactmessage']))
				{
					$errorMessage = true;
					$error++;
				}
				if(empty($error)){
					
					$to = "jason@thejasonwilson.com";
					$from = "thejasonwilson.com";
					$subject = "Message from Contact page";
					$headers = "MIME-Version: 1.0\r\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
					$headers .= "Content-transfer-Encoding: 7bit\r\n";
					$headers .= "From: " . $_POST['contactemail'] ."\r\n";
					
					$message = "<table width=\"500\" cellspacing=\"0\" cellpadding=\"0\" textalign=\"center\">";
					$message .=	"<tr><td>";
					$message .=	"Name:" . " " . $_POST['contactname'] . "<br />";
					$message .=	"Phone:" . " " . $_POST['contactphone'] . "<br />";
					$message .=	"Email:" . " " . $_POST['contactemail'] . "<br />";
                    $message .=	"Message:" . " " . $_POST['contactmessage'] . "<br />";

					$message .=	"</td></tr></table>";
					
					$mailsent = mail($to, $subject, $message, $headers);
					header('Location: /thank-you.php');
					exit;
				}else{
					die("something went terribly wrong");
				}
			}else{
				die("recapcha did not work");
			}
		}
				
	}

?>