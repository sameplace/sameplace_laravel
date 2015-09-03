<?php

class HomeController extends BaseController {

	protected $layout 		= 'layouts.master';

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
		View::share('buyer_page', 		true);
		$this->layout->content 		= View::make('buyer');
	}

}
