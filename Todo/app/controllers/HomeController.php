<?php

class HomeController extends BaseController {

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

	public function getIndex()
	{
		$items= Auth::user(Auth::user()->id)->items;


		return View::make('home',array(
			'items'  => $items 
 			));
	}

	
public function postIndex(){

	$id=Input::get('id');
	$item= Item::findOrFail($id);
	$item->mark();

	return Redirect::route('home');
 
}


public function getNew(){
return View::make('new'); 

}


public function postNew(){
	$validator= Validator::make(Input::all(),array(
			'name' => 'required|min:3|max:200'
	));

	if($validator->fails()){
		return Redirect::route('new')->withErrors($validator);
	}

   $item =Item::create(array(
   	'owner_id' => Auth::user()->id,
   	'name'    => Input::get('name')
   ));
   if($item) {
 
   	return Redirect::route('home');
   }else{

   	return Redirect::route('new')->withErrors(array(
   		'err' => 'Could not create task, please try again !'
   		));
   }
	}



	public function getDelete($task){
		


		$item= Item::find($task);
		if(Auth::user()->id==$item->owner_id){
		$item->delete();
		return Redirect::route('home');
	}
}

}
