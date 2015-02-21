$(document).ready(function(){


$("#conductexam1").click(function(){

	if($("#hiddenorg").text() == ""){
		$("#conductexam1").attr("href","signin.php")
		alert("Please Sign in");

	}
});


	if($("#hidden").text() !=""){
	var user = " Hi! "+$("#hidden").text();
	var user_profile = "<span class='glyphicon glyphicon-user' aria-hidden='true'></span>"+user+"<strong class='caret'></strong>";
	$("#profile").html(user_profile);
	
  $("#signing").attr("href","#");
	$("#signing").css("display","none");
	$("#signupexams").css("display","none");
	$("#conductexam").css("display","none");
	
	//$(".popover").css("margin-right","100");
  //$()
}else{
	//var Sign_in = "<span class='glyphicon glyphicon-hand-down' aria-hidden='true'></span> Sign in";
	//$("#login").html(Sign_in);
	//$("#login").attr("data-title","Login");
  //$("#login").attr("href","sign in.php");
//	$("#signingin").css("display","block");
//	$("#myprofile").css("display","none");
}
//alert($('#hiddenorg').text());

if($("#hiddenorg").text() !=""){
	var user = " Hi! "+$("#hiddenorg").text();
	var user_profile = "<span class='glyphicon glyphicon-user' aria-hidden='true'></span>"+user+"<strong class='caret'></strong>";
	$("#profile").html(user_profile);
	$("#signingin").css("display","none");
	$("#signingin1").css("display","none");
 	$("#signhome").html(user);
 	$("#orgentry").html("Please fill this form");
	$("#signhome").attr("href","#");
	$("#signuphome").html("Log Out");
	$("#signuphome").attr("href","phps/conductorlogout.php");
	$("#partconductor").css("display","block");
	$("#takeexam").css("display","none");
	//$("#takeexam").attr("href","#");

  //$()
}
else{
	$("#takeexam").css("display","block");
}


});