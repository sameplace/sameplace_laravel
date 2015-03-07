<?php

Route::get('/', 						array('uses' => 'HomeController@home', 'as' => 'home',));
Route::get('dealspaces', 				array('uses' => 'HomeController@dealspaces'));
Route::get('profile', 					array('uses' => 'HomeController@profile'));

//login
Route::post('login', 					array('uses' => 'LoginController@login'));
Route::get('logout', 					array('uses' => 'LoginController@logout'));

//buyer side
Route::get('buyer', 					array('uses' => 'HomeController@buyer'));
Route::get('page/{hash}', 				array('uses' => 'PageController@page'));

//curls
Route::get('fetchData', 				array('uses' => 'DataHandlerController@fetchData'));
Route::get('sendAndFetchData', 			array('uses' => 'DataHandlerController@sendAndFetchData'));
Route::get('get_data', 					array('uses' => 'DataHandlerController@get_data'));
Route::post('get_single_dealspace', 	array('uses' => 'DataHandlerController@get_single_dealspace'));
Route::post('get_participants', 		array('uses' => 'DataHandlerController@get_participants'));
Route::post('get_mime', 				array('uses' => 'DataHandlerController@get_mime'));
Route::post('get_attachment', 			array('uses' => 'DataHandlerController@get_attachment'));
Route::get('get_user', 					array('uses' => 'DataHandlerController@get_user'));
Route::post('change_pass', 				array('uses' => 'DataHandlerController@change_pass'));


Route::get('subscribe', 				array('uses' => 'MailController@subscribe'));

Blade::setContentTags('<%', '%>');        		// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>');   	// for escaped data

