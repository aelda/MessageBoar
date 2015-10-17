@extends('register')

@section('content')

   	<html>
	<head>
		{{HTML::style('js/check.js')}}
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<embed src="music/All About Your Heart.mp3" autostart="true" hidden="true" loop="-1">
	
	<div align="center">
		
			</br></br></br>
			 <div id="result"></div>
			  {{ Form::open(array('url'=>'form-submit','files'=>true)) }}
  
			  {{ Form::label('file','set your photo') }}
			  <!-- <input type="file" name="file" id="upload" data-input=this/>
    		  <img id="blah" src="#" alt="your image" /> -->
			  {{ Form::file('file') }}
			  </br>
			  @if(Session::has('photoname')	)
			  <img src="../app/storage/images/{{Session::get('photoname')}}" class="blah"/>
			  <div align="center">已上傳成功</div>
			  @else
			  <img src="../app/storage/images/preinstall.jpg" class="blah" />	
			  @endif
			  <br/><br/>
			  <!-- submit buttons -->
			  {{ Form::submit('上傳',array('id'=>'upload')) }}
			  {{ Form::close() }}
	
			  {{Form::open(array('url'=>'seven/reset','method'=>'post'))}}
			  {{Form::submit('還原',array('id'=>'reset'))}}
			  {{Form::close()}}
			 
			<font size=+3>
			<p>
			{{Form::open(array('url'=>'register'))}}
			<strong>nickname</strong>
			{{Form::text('name')}}
			</p>
			<p>
			<strong>account</strong>
			{{Form::text('account')}}
			</p>
			<p>
			<strong>password</strong>
			{{Form::password('password')}}
			<p>
			<button type="submit" class="btn btn-default">送出</button>
			{{Form::close()}}
			</font>
			{{Form::open(array('url'=>'seven/back','method'=>'post'))}}
			<button type="submit" class="btn btn-default" id="back">回首頁</button>
			{{Form::close()}}
	</div>
	</body>
	</html>
@stop