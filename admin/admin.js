$(function(){
	checkSession();	
	$('p#loginfailed').hide();
	function checkSession() {
	   	$.get('php/checksession.php', function(data) {
	   	//if admin is logged in true
	   	if(data == 'true') {
	   		$('#navbarGuest').hide();
	   		$('#navbarAdmin').show();
	   		$('#content').load('adminhome.php');

	   
	   	} else {
	   		$('#navbarAdmin').hide();
	   		$('#navbarGuest').show();
	   		$('#content').load('login.php',logIn);
	   	} 
	   });
   } //function checkSession

   $('a#signout').click(function(e){
   		e.preventDefault();
   		$.get('php/signout.php',function(){
   			checkSession();
   		}); // signout and check session
   }); // link signout click

   $('a#signin').click(function(e){
   		e.preventDefault();
   		$('#content').load('login.php',logIn);
   }); // link sign in

   function logIn() {
   $('p#loginfailed').hide();
   		$('form#frmSignIn').on("submit",function(e){
   			e.preventDefault();
   			var params = $(this).serialize();
   			$.ajax({
   				url: 'php/signin.php?' + params,
   				type: 'GET',
   				beforeSend: function() {
   					$('#frmSignInSubmitBtn').attr('disabled', 'disabled');
	   				$('#frmSignInLoading').removeClass('fa fa-sign-in');
	   				$('#frmSignInLoading').addClass('fa fa-spinner fa-spin');
   				} //before send sign in
   			})
   			.done(function(data) {
   				//if signin successful
   				if(isNaN(data)){
   					$('p#loginfailed').hide('200');
   					$('#content').load('adminhome.php');
   				} else {
   					$('#frmSignInSubmitBtn').removeAttr('disabled');
	   				$('#frmSignInLoading').removeClass('fa fa-spinner fa-spin');
	   				$('#frmSignInLoading').addClass('fa fa-sign-in');
	   				$('p#loginfailed').show('200');

   				}
   			}); // frmSignIn submit success
   		}); //frmSignIn submit
   } // function sign in





});