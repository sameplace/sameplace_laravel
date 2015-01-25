<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	public function __construct(){
		$login_check = Session::get('logged');

		if(isset($login_check)){
			View::share('logged', 	true);
		} else {
			View::share('logged', 	false);
		}

	}

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
