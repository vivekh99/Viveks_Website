<?php
	if ( isset( $_POST['submitBtn'] ) ) { 

		$mail_to = 'vinvek@outlook.com';
		$subject = 'Test';
		$telephone = $_POST['phone_number'];
		$email = $_POST['email'];
		$name = $_POST['name_info'];
		$job_description = $_POST['description'];	

		$message = $telephone . " ";
		$message .= $email . " ";
		$message .= $name . " ";
		$message .= $job_description;


		if(mail($email, $subject, $message)){
			echo "mail sent!";
		}
		else{
			echo "message failed to send, please try again";
		}
	}
?>