<html>
	<head>

		 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
		 <script type="text/javascript" src="js/jquery.rotate.min.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		{{HTML::style('css/table.css')}}
		{{HTML::style('css/bootstrap.min.css')}}
		{{HTML::script('js/bootstrap.min.js')}}
		{{HTML::style('css/bootstrap.css.map')}}
		{{HTML::style('css/bootstrap-theme.min.css')}}
		{{HTML::script('js/rotate.js')}}
		{{HTML::script('js/jq.js')}}
		{{HTML::script('js/check.js')}}
		{{HTML::script('js/jquery-ui.min.js')}}
		{{HTML::script('js/jquery.rotate.1-1.js')}}
		{{HTML::script('js/jQueryRotate.2.1.js')}}
		{{HTML::script('js/jQueryRotateCompressed.2.1.js')}}


	<title>seven留言板</title> 
	</head>
	<body>
	<div align="center">
		
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h2 class="modal-title" id="myModalLabel">Login</h2>
			  </div>
			  <div class="modal-body">
			  <div align="center">
				  </br>
				 <font size=+1>
					{{Form::open(array('url'=>'login/check','method'=>'post'))}}
					account　　{{Form::text('account',Cookie::get('account'),array('required'=>'true'))}}</p>
					password　　{{Form::password('password',Cookie::get('password'),array('required'=>'true'))}}</p></br></br>
					{{Form::checkbox('remember','remenber my account and password',true)}}remenber my account and password </p>
			   
			  </div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Login</button>
				{{Form::close()}}
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>

	 </div>
	 
	 <div class="modal fade" id="mymemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h2 class="modal-title" id="myModalLabel">memo</h2>
			  </div>
			  <div class="modal-body">
			  <div align="center">
					<img src="../app/storage/images/{{Session::get('photo')}}" class="photo"/>
					<div align="center">
					{{Form::open(array('url'=>'xsscheck', 'method'=>'post'))}}
					{{Form::textarea('memo', '',array('required'=>'true','placeholder'=>'請先登入在留言'))}}
					
					</br>
					</div>  
			  </div>
			 </div>
			<div class="modal-footer">
				<p><button type="submit" class="btn btn-default">Submit</button> </p>	
				{{Form::close()}}
			</div>
		</div>
		</div>
	 </div>
	 		</div>


	 		<div class="up">
	 			<ul class="nav nav-tabs">
  			<li class="dropdown">
   			 <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      			Setting <span class="caret"></span>
   				 </a>
			    <ul class="dropdown-menu">
			    	<li><a href="#" data-toggle="modal" data-target="#myModal">　　Login in</a></li>
		            {{Form::open(array('url'=>'login/out','method'=>'post'))}}
			  		<li><button type="submit" class="btn btn-default">　　　Login off　　　</button></li>
			 		{{Form::close()}}
			 		<li><a align="center" href="http://localhost/laravel_demo/public/seven_register">註冊</a></li>
		  			
			    </ul>
		  </li>
		  <li class="abled"><a href="#" data-toggle="modal" data-target="#mymemo">Comment</a></li>
	
	
		</ul>
	 		</div>


	 	<div class="header" align:left>
	 		　　　{{HTML::image('/css/theme.jpg', 'null', array('id' => 'img'))}}<font id="title">Welcome to seven's world 　　</font><img id="img3" src="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xpa1/t1.0-9/1377380_814371315255008_330016610_n.jpg" class="img-circle" 
	 		width ="100" height="150">

		</div>
		

		<div class="title" align="center">　　<img id="img1" src="http://placehold.it/90X90/CC2222/FFF&text=Hello" class="img-circle">　Comment List　
			<img id="img2" src="http://placehold.it/90X90/CC2222/FFF&text={{Session::get('name')}}" class="img-circle"></div>
		
		@yield('content')
	
	</body>
</html>