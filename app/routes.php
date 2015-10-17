<?php


Route::get('seven_register', function()
{

	return View::make('register_main');
});

Route::get('seven',array('uses'=>'HomeController@show'));


Route::post('login/check',function(){
	$user=User::where('account', Input::get('account'))->get();
	$account=$user[0]->account;
	$name=$user[0]->name;
	$password=$user[0]->password; //只需要一筆資料
	$photo = $user[0]->photo;
	if($account==Input::get('account')){
	    Session::put('account',$account);
	    Session::put('password',$password);
	    Session::put('name',$name);
	    Session::put('photo',$photo);
		return Redirect::to('seven');
	}
	else{
		return Redirect::to('seven_register');
	}
});
Route::post('login/out',array('uses'=>'HomeController@loginout'));
Route::post('register',function(){
	$account=Input::get('account');
	$password=Input::get('password');
	$name=Input::get('name');
	if(Session::has('photoname'))
		$photo = Session::get('photoname');
	else
		$photo = "preinstall.jpg";

	DB::insert('insert into guestbook (account,password,name,photo) values (?,?,?,?)', array($account,$password,$name,$photo));
	return Redirect::to('seven');
});

Route::post('xsscheck',array('uses'=>'HomeController@checkxss'));

Route::post('seven/sure',array('as'=>'seven.sure','uses'=>'HomeController@sure'));

Route::post('seven/delete',array('as'=>'seven.delete','uses'=>'HomeController@delete'));

Route::post('seven/replydelete',array('as'=>'seven.replydelete','uses'=>'HomeController@replydelete'));

Route::any('form-submit', function(){

	$file = Input::file('file')->getClientOriginalName();
	Input::file('file')->move(__DIR__.'/storage/images',$file);
	Session::put('photoname',$file);
	
 		return Redirect::to('seven_register');
	
});

Route::post('seven/reset',array('as'=>'seven.reset','uses'=>'HomeController@reset'));

Route::post('seven/back',array('uses'=>'HomeController@back'));

Route::post('seven/reply',array('uses'=>'HomeController@reply'));