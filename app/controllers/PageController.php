<?php

class PageController extends BaseController {

	protected $layout 		= 'layouts.master';

	public function page($page){

		$data = array('u' => $page);
		DataHandlerController::sendAndFetchDataDemo('https://secure.bitway.com/sp/demo.php', $data);

		View::share('footerBottom', 	'footerBottom');
		$this->layout->content 		= View::make('buyer');
	}


}
