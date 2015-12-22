<?php 
if(isset($_POST['email'])){
	//Email and subject
	$email_to = "management@serenitygaming.co.za";
	
	$email_subject = $_POST['subject'];;
	
	//begin
	function died($error) {
		//error code
		header("Location: contact.php?error=true");
		die();
	}
	
	//validation
	if(!isset($_POST['contactname'])) {
		if(!isset($_POST['email'])) {
			header("Location: contact.php?error=name&error2=email");
			die();
		}
		header("Location: contact.php?error=name");
		die();
	} else if(!isset($_POST['email'])) {
		header("Location: contact.php?error=email");
		die();
	}
	
	$name = $_POST['contactname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$comments = $_POST['comments'];
	
	
	$email_message = "<table><tr><th>Serenity Gaming contact form details.</th></tr>";
	
	$email_message .= "<tr><td>Name</td><td>".$name."</td></tr>";
	$email_message .= "<tr><td>Email Address</td><td>".$email."</td></tr>";
	$email_message .= "<tr><td>Subject</td><td>".$subject."</td></tr>";
	$email_message .= "<tr><td>Comment</td><td>".$comments."</td></tr></table>";
	
	$headers = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject,$email_message, $headers);
	
	header("Location: contact.php?success=true");
}
?>