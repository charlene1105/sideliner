$(function(){

   var prjctno;
   var clientbidder;
   // var userno;
	//check if user is logged in or not

   
   function checkSession() {
	   	$.get('php/checksession.php', function(data) {
	   	//if user is logged in true
	   	if(data == 'true') {
	   		$('#navbarGuest').hide();
	   		$('#navbarUser').show();
	   		getProfile();
            getNoInbox(); 
	   		
	   	} else {
	   		$('#navbarUser').hide();
	   		$('#navbarGuest').show();
	   		$('#content').load('pages/account/signin.php',signIn);
	   	} 
	   });
   } //function checkSession 

	/*=====================================================
   							HOME
   =======================================================*/
   //sideliner logo is click
   $('a#home').click(function(e){
   		e.preventDefault();
   		$('#content').html('<img src="img/background.gif" class="img-responsive" alt="Image" style="margin-top: -30px;">');
   }); 
   checkSession();

   
   /*=====================================================
   							LOGIN
   =======================================================*/
   $('a#signin').click(function(e){
   		e.preventDefault();
   		$('#content').load('pages/account/signin.php',signIn);
   }); // link sign in

   function signIn() {
   $('p#loginfailed').hide();
   		$('form#frmSignIn').on("submit",function(e){
   			e.preventDefault();
   			var params = $(this).serialize();
   			$.ajax({
   				url: 'php/account/signin.php?' + params,
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
   					checkSession();
   					getProfile();
   				} 
               else if(data == '2' || data == 2) {
                  $('#frmSignInSubmitBtn').removeAttr('disabled');
                  $('#frmSignInLoading').removeClass('fa fa-spinner fa-spin');
                  $('#frmSignInLoading').addClass('fa fa-sign-in');
                  $('p#loginfailed').text('Your account is banned');
                  $('p#loginfailed').show('200');
               }

               else {
   					$('#frmSignInSubmitBtn').removeAttr('disabled');
	   				$('#frmSignInLoading').removeClass('fa fa-spinner fa-spin');
	   				$('#frmSignInLoading').addClass('fa fa-sign-in');
	   				$('p#loginfailed').show('200');
   				}
   			}); // frmSignIn submit success
   		}); //frmSignIn submit
   } // function sign in

   /*=====================================================
   							SIGN UP
   =======================================================*/

   $('a#signup').click(function(e){
   		e.preventDefault();
   		$('#content').load('pages/account/signup.php',signUp);
   }); // link sign up clicked 

   function signUp() {
	   $('form#frmSignUp').on("submit",function(e){
	   		e.preventDefault();
	   		var data = $(this).serialize();
	   		$.ajax({
	   			url: 'php/account/signup.php',
	   			type: 'POST',
	   			data: data,
	   			beforeSend: function() {
	   				$('#frmSignUpSubmitBtn').attr('disabled', 'disabled');
	   				$('#frmSignUpLoading').removeClass('fa-user-plus');
	   				$('#frmSignUpLoading').addClass('fa fa-spinner fa-spin');	
	   			} //before send
	   		}) //frmSignUp submit
	   		.done(function(data) {
	   			//if signing up of account successful
	   			if(!isNaN(data)) {
	   				checkSession();
	   				getProfile();
	   			} else {
	   				alert(data);
	   			} // if there is an error in mysql/registering account
	   		}); //frmSignUp done
	   }); //#frmSignUp submit
   } // function signUp


   /*=====================================================
   							PROFILE
   =======================================================*/
   $('a#signout').click(function(e){
   		e.preventDefault();
   		$.get('php/account/signout.php',function(){
   			checkSession();
   		}); // signout and check session
   }); // link signout click

   $('a#inbox').click(function(e){
         e.preventDefault();
         $('#content').load('pages/account/inbox.php',getInbox);
   });

   function getInbox() {
         $.get('php/account/inbox.php', function(data) {
            $('#userinbox').html(data);
            // $('tr.rowMsg').click(function(){  
            //    var notifno = $(this).attr('id');
            //    $.get('php/account/getmsginfo.php?notifno=' + notifno , function(msginfo) {
            //       var msginfo = $.parseJSON(msginfo);
            //       var msg = msginfo.msg;
            //       var client = msginfo.client;
            //       bootbox.dialog({
            //            title: 'Subject: You have been hired by ' + client ,
            //            message: msg
            //          }); //dialog
            //          $.ajax({
            //             url: 'php/account/changeviewstatusmsg.php',
            //             type: 'POST',
            //             data: {notifno: notifno},
            //          })
            //          .done(function(data) {
            //             console.log(data);
            //             if(parseInt(data) > 0) {
            //               getNoInbox(); 
            //             }
                        
            //          });
            //    });
               
               
               
            // }); // row Message click
         }); //get inbox request


   } // function getInbox

   function getNoInbox() {
         $.get('php/account/getnoinbox.php', function(data) {
            console.log(data);
            if(parseInt(data) >= 0) {
                $('#noinbox').text(data); 
                if(parseInt(data) == 0) {
                  $('#noinbox').text('');
                }
                getProfile();
            }
         }); // get no of inbox request

   } // function get no of inbox

   $('a#editprofile').click(function(e){
   		e.preventDefault();
   		$('#content').load('pages/account/editprofile.php',editProfile);
   }); // link edit profile click

   function editProfile() {
         $.get('php/account/profile.php', function(data) {
            var eprofile = $.parseJSON(data);
            $('#address').attr('value',eprofile.address);
            $('#email').attr('value',eprofile.email);
            $('#zipcode').attr('value',eprofile.zipcode);
            $('#contactno').attr('value',(eprofile.contactno).substr(4));
            $('#skills').val(eprofile.skills);
            /*optional stuff to do after success */
         });

         $('form#frmEditProfile').on('submit',function(e){
               e.preventDefault();
               var data = $(this).serialize();
               $.ajax({
                  url: 'php/account/editprofile.php?userno=' + userno,
                  type: 'POST',
                  data: data,
               })
               .done(function(edit) {
                  getProfile();
               }); //edit profile ajax
         }); //form frmEditProfile submit
         
         
   } //function editProfile



   $('a#viewprofile').click(getProfile);
   
   function getProfile() {
   		$.get('php/account/profile.php',function(data){
   			$('#content').load('pages/account/profile.php',function(){
   				var profile = $.parseJSON(data);
               userno = profile.userno;
               $('#fname').text(profile.fname);
               $('#lname').text(profile.lname);
   				$('#fullName').text(profile.fname + " " + profile.lname);
   				$('#bday').text(profile.bday);
               $('#email').text(profile.email);
               if(profile.address != null) {
                  $('#address').text(profile.address);  
               } 
               
               $('#zipcode').text(profile.zipcode);
               if(profile.contactno != null || profile.contactno == '') {
                  $('#contactno').text(profile.contactno); 
               }
               
               $('#username').text(profile.username);
               if(profile.skills != null || profile.skills == '') {
                  $('#skills').text(profile.skills);  
               }
               

   			}); // load profile content
   		}); // get profile
   } // function get Profile

   function viewBidderProfile(userno) {
         $.get('php/account/viewbidderprofile.php?userno=' + userno,function(data){
            $('#content').load('pages/project/bidderprofile.php',function(){
               var profile = $.parseJSON(data);
               userno = profile.userno;
               $('#fname').text(profile.fname);
               $('#lname').text(profile.lname);
               $('#fullName').text(profile.fname + " " + profile.lname);
               $('#bday').text(profile.bday);
               $('#email').text(profile.email);
               if(profile.address != null) {
                  $('#address').text(profile.address);  
               } 
               
               $('#zipcode').text(profile.zipcode);
               if(profile.contactno != null || profile.contactno == '') {
                  $('#contactno').text(profile.contactno); 
               }
               
               $('#username').text(profile.username);
               if(profile.skills != null || profile.skills == '') {
                  $('#skills').text(profile.skills);  
               }
               
               $('#backToProject').click(function(){
                  backToProject();
               });

            }); // load profile content
         }); // get profile
   } // function get Profile
   /*=====================================================
   							PROJECT
   =======================================================*/


   $('a#postproject').click(function(e){
   		e.preventDefault();
   		$('#content').load('pages/project/postproject.php',postProject);
   }); //link post project click

   $('a#browseproject').click(function(e){
   		e.preventDefault();
   		$('#content').load('pages/project/browseproject.php',browseProject);
   });

   function postProject() {
   	$('form#frmPostProject').on("submit",function(e){
	   		e.preventDefault();
	   		var data = $(this).serialize();
	  		$.ajax({
	  			url: 'php/project/postproject.php',
	  			type: 'POST',
	  			data: data,
	  			beforeSend: function() {
	  				$('#frmPostProjectSubmitBtn').attr('disabled', 'disabled');
	   			$('#frmPostProjectLoading').removeClass('fa fa-list');
	   			$('#frmPostProjectLoading').addClass('fa fa-spinner fa-spin');
	  			}
	  		})
	  		.done(function(data) {
	  			browseProject();
	  		});	
	}); //#frmSignUp submit
   } // function postProject

   function backToProject() {
         $.get('php/project/getproject.php?prjctno=' + prjctno, function(project) {
            var project = $.parseJSON(project);
            $('#content').load('pages/project/getproject.php',function(){
               getProjectBid();
               $('#prjcttitle').html('<strong>' + project.title + '</strong>');
               $('#prjctdesc').text(project.prjctdesc);
               $('#skills').text(project.skills);
               $('#postedby').text('posted by ' + project.username);
               clientbidder = project.username;
               $('#dateposted').attr('data-livestamp', project.dateposted);
               $('#minbudget').text(project.minbudget);
               $('#maxbudget').text(project.maxbudget);
               $('#deadlinedate').text(project.deadlinedate);
               
               //frm Place Bid
               $('form#frmPlaceBid').on("submit",function(e){
                  e.preventDefault();
                  var data = $(this).serialize() + '&prjctno=' + prjctno;
                  $.ajax({
                     url: 'php/project/placebid.php',
                     type: 'POST',
                     data: data,
                  })
                  .done(function(postbid) {
                     $('#estworkday').attr('value','');
                     $('#bidprice').attr('value','');
                     getProjectBid();
                     // $.get('php/project/getbid.php?prjctno' + prjctno, function(biddata) {
                     //    var biddata = $.parseJSON(biddata);
                     //    $('#bidusername').text(biddata.username);
                     //    $('#biddateposted').attr('data-livestamp',biddata. biddate);
                     //    $('#estworkday').text(biddata.estworkday);
                     //    $('#bidprice').text(biddata.bidprice);
                     // });
                  });
               }); //frm PlaceBid Submit
            
            

            }); // load browse project content
         }); //get project
   }

   function browseProject() {
      $.get('php/project/browseproject.php', function(data) {
      		$('#content').load('pages/project/browseproject.php',function(){
      			$('#browseProjectResults').html(data);
               getProject();

      		});

      });
   } //function browseProject

   function getProject() {
      $('.projectRow').click(function(){
         prjctno = $(this).attr('id'); //get the project no via tr id
         $.get('php/project/getproject.php?prjctno=' + prjctno, function(project) {
            var project = $.parseJSON(project);
            $('#content').load('pages/project/getproject.php',function(){
               getProjectBid();
               $('#prjcttitle').html('<strong>' + project.title + '</strong>');
               $('#prjctdesc').text(project.prjctdesc);
               $('#skills').text(project.skills);

               $('#postedby').text('posted by ' + project.username);
               clientbidder = project.username;
               $('#dateposted').attr('data-livestamp', project.dateposted);
               // $('#dateposted').text(project.dateposted);
               $('#minbudget').text(project.minbudget);
               $('#maxbudget').text(project.maxbudget);
               $('#deadlinedate').text(project.deadlinedate);
               
               //frm Place Bid
               $('form#frmPlaceBid').on("submit",function(e){
                  e.preventDefault();
                  var data = $(this).serialize() + '&prjctno=' + prjctno;
                  $.ajax({
                     url: 'php/project/placebid.php',
                     type: 'POST',
                     data: data,
                  })
                  .done(function(postbid) {
                     $('#estworkday').attr('value','');
                     $('#bidprice').attr('value','');
                     getProjectBid();
                     // $.get('php/project/getbid.php?prjctno' + prjctno, function(biddata) {
                     //    var biddata = $.parseJSON(biddata);
                     //    $('#bidusername').text(biddata.username);
                     //    $('#biddateposted').attr('data-livestamp',biddata. biddate);
                     //    $('#estworkday').text(biddata.estworkday);
                     //    $('#bidprice').text(biddata.bidprice);
                     // });
                  });
               }); //frm PlaceBid Submit
            
            

            }); // load browse project content
         }); //get project
      }); // projectRow clicked
   } //function getProject





   function getProjectBid() {
      $.get('php/project/getbid.php?prjctno=' + prjctno,function(biddata) {
         $('#projectBidList').html(biddata);
         $('.bidderName').click(function(){
            viewBidderProfile($(this).attr('id' ));
         }); // bidder clicked

         $('.hireBidder').click(function(){
            var username = $(this).attr('id');
            bootbox.confirm("Are you sure you want to hire this freelancer?", function(result) {
              if(result == true) {
                  sendMessage(prjctno,username);
              }
            }); 
         }); // hire bidder
      });
   }

   function hireBidder(prjctno) {
      $.ajax({
         url: 'php/project/hirebidder.php',
         type: 'POST',
         data: {prjctno: prjctno}
      }).done(function(data){
         console.log(data);
      });
   } // hire bidder

   function sendMessage(prjctno,username) {
      bootbox.prompt("Send a message to your hired freelancer", function(result) {                
        if (result === null) {                                             
                                      
        } else {
          var message = result;
          hireBidder(prjctno);
          $.ajax({
             url: 'php/project/sendmessage.php',
             type: 'POST',
             data: {message: message, prjctno: prjctno, username: username}
          })
          .done(function(data) {
             console.log(data);
             browseProject();
          });
          

        }
      }); //prompt
   } // send Message





});

//nagccause ng pag sinubmit e nappnta pa din sa
// ibang page ay dahil di sila nalload need na iload muna tapos iset na lang as callback function
//load('pages',get/post request)