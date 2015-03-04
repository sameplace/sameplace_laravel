<?php

class PageController extends BaseController {
	
	protected $layout 		= 'layouts.master';

	public function page($page){
		View::share('footerBottom', 	'footerBottom');
		$this->layout->content 		= View::make('buyer');
	}


}
