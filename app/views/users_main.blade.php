@extends('users')

@section('content')

    	

			@foreach ($users as $user)
			
			<div class="list_one">
			
			@if($user->memo != NULL )

			<div class="bigphoto">
				<img src="../app/storage/images/{{$user->photo}}" class="photo"/>
			</div>
				<div class="name_box"
					<font size=+10>{{$user->name}}</font> 
				</div> 
				<div class="message_box"><p></br></br> 
					@if($user->name == Session::get('name'))
						<div class="set dropdown" title="修改">
						  <a id="dLabel" role="button" data-toggle="dropdown" href="#">
						   <span class="caret"></span>
						  </a>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
						  	<li class="edit" data-id="{{$user->id}}" align="center"><a>編輯</a></li>
						  	<li><a href="#" data-toggle="modal" data-id="{{$user->id}}" class="delete" align="center">delete</a></li>
						  </ul>
						</div>
					@endif
					<div class="list">
					{{Form::open(array('route'=>'seven.sure','method'=>'post'))}}
						{{Form::hidden('id',$user->id)}}
						{{Form::text('memo',$user->memo,array('data-id'=>$user->id,'class'=>'memo'))}}
						{{Form::submit('sure',array('data-id'=>$user->id,'class'=>'sure'))}}
					{{Form::close()}}
					{{Form::submit('cancle',array('class'=>'cancle'))}}
					</div>

					<font class="memo_show" size=+1 color="#66CC00">{{$user->memo}}</font></p>
				</div>

				<div class="time_box">{{$user->updated_at}}</div> 

				<div class="reply_box">
					
					@foreach($replys as $reply)	
					@if($reply->id == $user->id)
					@if($reply->name == Session::get('name'))
						<div class="reply_set dropdown" title="修改">
						  <a id="dLabel" role="button" data-toggle="dropdown" href="#">
						   <span class="caret"></span>
						  </a>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
						  	<li class="edit" data-id="{{$reply->id}}" align="center"><a>編輯</a></li>
						  	<li><a href="#" data-toggle="modal" data-target="#reply_delete" class="delete" align="center">delete</a></li>
						  </ul>
						</div>
					@endif
	
					<div class="showreply">
						<img class="reply_photo_list" src="../app/storage/images/{{$reply->photo}}"/>
						 <div class="reply_list">{{$reply->memo}}</div>
					</div>
					@endif

				    @endforeach
					<div class="reply">
						{{Form::open(array('url'=>'seven/reply','method'=>'post'))}}
						{{Form::hidden('id',$user->id)}}
						<img class="reply_photo" src="../app/storage/images/{{Session::get('photo')}}"/>
						{{Form::textarea('reply',null,['size'=>'130x2','class'=>'reply_textarea','placeholder'=>'留言......'])}}
						{{Form::submit('reply',array('class'=>'reply_submit'))}}
						{{Form::close()}}
					</div>
				</div>
			

			</div>
			@endif

			@endforeach 

			{{$users->links()}}

			<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h2 class="modal-title" id="myModalLabel">delete</h2>
			  </div>
			  <div class="modal-body" align="center">
				are you sure to delete the comment?
			</div>
			<div class="modal-footer">
				{{Form::open(array('route'=>'seven.delete','method'=>'post'))}}
				{{Form::hidden('deleteid','123121',array('id'=>'ddid'))}}
				{{Form::submit('sure',array('class'=>'btn btn-primary'))}}
				{{Form::close()}}
				<span><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></span>
			</div>
		  </div>
		</div>
	</div>
	
@stop