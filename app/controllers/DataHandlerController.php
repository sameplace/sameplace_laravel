<?php

class DataHandlerController extends BaseController {

	public static function Login($url, $data){
	    $ch =  curl_init();

	    $useragent = isset($z['useragent']) ? $z['useragent'] : 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:10.0.2) Gecko/20100101 Firefox/10.0.2';

	    curl_setopt( $ch, CURLOPT_URL, $url );
	    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	    curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
	    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	    curl_setopt( $ch, CURLOPT_POST, true );
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	    curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );

	    curl_setopt( $ch, CURLOPT_USERAGENT, $useragent );

	    $result = curl_exec( $ch );
	    if($result=='"OK"'){
	        curl_setopt( $ch, CURLOPT_HEADER, true );
	        $result = curl_exec( $ch );
	        curl_close( $ch );

	        //create session
	        Session::put('logged', 1);

	        $cookies = array();
	        preg_match_all('/Set-Cookie:(?<cookie>\s{0,}.*)$/im', $result, $cookies);

	        $cookieParts = array();
	        preg_match_all('/Set-Cookie:\s{0,}(?P<name>[^=]*)=(?P<value>[^;]*).*?expires=(?P<expires>[^;]*).*?path=(?P<path>[^;]*).*?domain=(?P<domain>[^\s;]*).*?$/im', $result, $cookieParts);

	        $cookie = $cookies['cookie'][0];
	        $final_cookie = explode('; path', $cookie);
	        $final_cookie = explode('PHPSESSID=', $final_cookie[0]);
	        $cookie = $final_cookie[1];
	        setcookie('PHPSESSID', $cookie, time()+3600, '/');
	        echo 'Success';
	        
	    } else {
	        echo $result;
	        curl_close( $ch );
	    }

	}

	public static function fetchData($url){
		$data = array();

	    $ch = curl_init();
	    $useragent = isset($z['useragent']) ? $z['useragent'] : 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:10.0.2) Gecko/20100101 Firefox/10.0.2';

	    curl_setopt( $ch, CURLOPT_URL, $url );
	    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	    curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
	    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	    curl_setopt( $ch, CURLOPT_POST, true );
	    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Cookie: PHPSESSID='.$_COOKIE['PHPSESSID']));
	    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
	    curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
	    curl_setopt( $ch, CURLOPT_USERAGENT, $useragent );

	    $result = curl_exec( $ch );
	    curl_close( $ch );
	    echo $result;

	}

	public static function sendAndFetchData($url, $data){
	    $ch =  curl_init();

        $useragent = isset($z['useragent']) ? $z['useragent'] : 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:10.0.2) Gecko/20100101 Firefox/10.0.2';

        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $ch, CURLOPT_POST, true );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Cookie: PHPSESSID='.$_COOKIE['PHPSESSID']));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );

        curl_setopt( $ch, CURLOPT_USERAGENT, $useragent );

        $result = curl_exec( $ch );
        curl_close( $ch );

        echo $result;
	}

	public function get_data(){
		self::fetchData('https://secure.bitway.com/sp/jgds.php');
	}

	public function get_single_dealspace(){
		self::fetchData('https://secure.bitway.com/sp/jgd.php');
	}

	public function get_participants(){
		self::fetchData('https://secure.bitway.com/sp/a274.php');
	}

	public function get_mime(){
		self::fetchData('https://secure.bitway.com/sp/jgm.php');
	}

	public function get_user(){
		self::fetchData('https://secure.bitway.com/sp/jgu.php');
	}

	public function change_pass(){
		$data = array('oid' => Input::get('oid'), 'op' => Input::get('old_pass'), 'np' => Input::get('new_pass'));
		self::sendAndFetchData('https://secure.bitway.com/sp/a851.php', $data);
	}

}
