<?php

class LoginController extends BaseController {

	public function login(){
		$email 	= Input::get('email');
	  	$pass 	= Input::get('pass');

	  	$data = array('email' => $email, 'pass' => $pass );
	  	DataHandlerController::login('https://secure.bitway.com/sp/a428.php', $data);

	}

	public function logout(){
		Session::forget('logged');
		return Redirect::to('/');
		
	}


}
