
			<!-- Modal --> 
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
				  <form name="form1" action="login.php" method="post" >
				 <font size=+1>
				   
					@if(Session::has('account')) || Session::has('password'))){
						<?header("Location :http://localhost/index.php");?>
					}
				
					{{Form::open()}}
					account　　{{Form::text('account','$_COOKIE["account"]')}}</p>
					password　　{{Form::password('password','$_COOKIE["password"]')}}</p></br></br>
					{{Form::checkbox('remember','remenber my account and password',true}} </p>
					{{Form::close()}}
				   <div align="center"><a href="http://localhost/index.php" class="btn btn-info">註冊</a></div></font>
			   
			  </div>
			</div>
			<div class="modal-footer">
				<input type="submit" value ="登入" ></form>
			</div>
		  </div>
		</div>
	 </div>
	  <!-- Modal --> 
	 <div class="modal fade" id="mymemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h2 class="modal-title" id="myModalLabel">memo</h2>
			  </div>
			  <div class="modal-body">
			  <div align="center">
				  <form action="memo.php" method="post">
					<div align="center">
					{{Form::open()}}
					{{Form::textarea('memo',<?php echo csrf_token(); ?>)}}
					</br> 
					</div>  
			  </div>
			 </div>
			<div class="modal-footer">
				<p>{{Form::submit('留言')}}</p></form>
					{{Form::close()}}
			</div>
		  </div>
		</div>
	 </div>
