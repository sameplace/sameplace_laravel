<?php

class MailController extends BaseController {

	public function subscribe(){
		$db 		= "sameplace";
		$server		= "localhost";
		$user		= "root";
		$pass		= "";

		$dbh 		= new PDO('mysql:host=localhost;dbname='.$db, $user, $pass);
		$postdata 	= file_get_contents("php://input");
		$request 	= json_decode($postdata);

		if(filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
			$dbh->exec('INSERT INTO `email_subscribers` (email) VALUES ("'.$request->email.'")');
			echo 'Thank you for subscribing!';
	    } else {
	        echo 'This is not a valid email address.';
	    }
		
	}


}
