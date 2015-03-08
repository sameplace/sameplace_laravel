<?php

class MailController extends BaseController {

	public function subscribe(){
		$request 	= json_decode($postdata);

		if(filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
			$mail = new Mail;
			$mail->email_subscribers = $request->email;
			$mail->save();
			echo 'Thank you for subscribing!';
	    } else {
	        echo 'This is not a valid email address.';
	    }
		
	}


}
