$(document).ready(function(){

	var c = 0 ;
	$(".title").click(function(){
		$(this).css({"color":"red"});
		c=1;
	});
 	
 	if(c==1){
 		
 	}
});



function check(){
	if(document.form1.name.value==""){
	alert("請填寫名字!");
	document.form1.name.focus();
	return false;
		}
	if(document.form1.account.value==""){
	alert("請填寫帳號!");
	document.form1.account.focus();
	return false;
		}
	if(document.form1.password.value==""){
	alert("請填寫密碼!");
	document.form1.password.focus();
	return false;
		}
	}