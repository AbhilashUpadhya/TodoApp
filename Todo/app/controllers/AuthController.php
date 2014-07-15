<?php


class AuthController extends BaseController {


public function getlogin(){

return View::make('login');

}


public function postlogin(){

$validator = Validator::make(Input::all(),array(

			'username' => 'required',
			'password' => 'required'

	));

if($validator->fails()){

return Redirect::route('login')->withErrors($validator);
}

$auth= Auth::attempt(array(

	'name' => Input::get('username'),
	'password' => Input::get('password')
	),false);

if(!$auth){

	return Redirect::route('login')->withErrors(array(
		'invalid_creds' => 'Invalid credentials were provided.'
		)); 
}

return Redirect::route('home');

}

public function getLogout(){
  Auth::logout();
  return Redirect::route('login');
  

}
}