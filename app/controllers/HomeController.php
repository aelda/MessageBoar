<?php

class HomeController extends BaseController {

	
	protected $layout='users';

	
	public function show(){ //顯示留言

		$users = User::orderBy('id','DESC')->paginate(10);
		$reply= Reply::all();
		$this->layout->content=View::make('users_main',array(
			 'users'=>$users,'replys'=>$reply));

	}
	
	public function loginout(){
	
	Session::forget('name');
	Session::forget('password');
	Session::forget('account');
	Session::forget('photo');
	return Redirect::to('seven');
	}

	public function checkxss(){
		if(Session::has('account') && Session::has('password')){
		$inputs=Input::all();
		$rule=array('memo'=>'required');
		$validator=Validator::make($inputs,$rule);
		if($validator->fails()){
			return Redirect::to('seven')->withErrors($validator);
		}
		User::create(array('memo'=>nl2br(htmlspecialchars(Input::get('memo'))),'account'=>Session::get('account'),
			'password'=>Session::get('password'),'name'=>Session::get('name'),'photo'=>Session::get('photo'))); //存進資料庫裡 &&檢查是否有XSS	
			return Redirect::to('seven');
			
		}
		return Redirect::to('seven');
	}

	public function sure(){

		$id = Input::get('id');
		$data=User::where('id','=',$id)->first();
		$data->memo = Input::get('memo');

		$data->save();

		return Redirect::to('seven');

	}

	public function delete(){
		$id = Input::get('myid');
		dd($id);
		$data=User::where('id','=',$id)->delete();
		return Redirect::to('seven');
	}

	public function replydelete(){
		$id = Input::get('id');
		$reply_id = Input::get('reply_id');
		$data = Reply::where('id','=',$id)->where('itemId','=',$reply_id)->delete();
	
		return Redirect::to('seven');
	}

	public function reset(){

		Session::forget('photoname');

		return Redirect::to('seven_register');
	}
	public function back(){
		return Redirect::to('seven');
	}

	public function reply(){
		if(Session::has('account') && Session::has('password')){
		$inputs=Input::all();
		$id = Input::get('id');
		$rule=array('reply'=>'required');
		$validator=Validator::make($inputs,$rule);
		if($validator->fails()){
			return Redirect::to('seven')->withErrors($validator);
		}
		Reply::create(array('memo'=>nl2br(htmlspecialchars(Input::get('reply'))),'name'=>Session::get('name'),'photo'=>Session::get('photo'),'id'=>$id)); //存進資料庫裡 &&檢查是否有XSS	
			return Redirect::to('seven');
			
		}
		return Redirect::to('seven');
	}
}