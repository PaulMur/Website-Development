<?php
	if(isset($_POST['email'])) {
		
		$email = $_POST['email'];
				
		
		$to      = 'dermot@adloc8tor.com';
		$subject = 'Create own request';
		$message = 'New signup to newsletter: ' . $email;
		$headers = 'From: reservations@dinnerwithgayle.com' . "\r\n" .
		    'Reply-To: reservations@dinnerwithgayle.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();
	
		mail($to, $subject, $message, $headers);

	}
	
	
?>

<h1 style="margin: 50% auto 0; font-size: 50px;">One moment...</h1>

<meta http-equiv="refresh" content="5; URL=http://dinnerwithgayle.com">