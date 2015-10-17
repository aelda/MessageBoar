@extends('users')

@section('content')

    
			@foreach ($users as $user)	
			@if($user->memo != NULL )
		<div class="name_box"
		<font size=+10>{{$user->name}}</font> 
		</div> 
		<div class="message_box"><p></br></br> 
			
		<font size=+1 color="#66CC00">　　　{{$user->memo}}</font></p>
			
		</div>
		<div class="time_box">{{$user->updated_at}}</div> 
			@endif
			@endforeach 
		
@stop