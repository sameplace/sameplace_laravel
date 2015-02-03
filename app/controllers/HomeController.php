<?php

class HomeController extends BaseController {

	protected $layout 		= 'layouts.master';

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home(){
		View::share('home_page', 	true);
		$this->layout->content 		= View::make('home');
	}

	public function dealspaces(){
			$this->layout->content 		= View::make('dealspaces');
	}

	public function profile(){
			$this->layout->content 		= View::make('profile');
	}

	public function buyer(){

		View::share('footerBottom', 	'footerBottom');
		$this->layout->content 		= View::make('buyer');
	}

}
