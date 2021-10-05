
$(document).ready(function(){   
  /* validation */
    $("#register-form").validate({
        rules:
        {
            user_username: {
                required: true,
                minlength: 5
            },
            user_password: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            cpassword: {
                required: true,
                equalTo: '#user_password'
            },
            user_email: {
                required: true,
				email: true,
               
            },
        },
        messages:
        {
            user_username:{
                required: "Provide a Username",
                minlength: "Username Needs To Be Minimum of 5 Characters"
            },
            password:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            },
            user_email:{
                required: "Provide a Valid Email",
            },
            cpassword:{
                required: "Retype Your Password",
                equalTo: "Password Mismatch! Retype"
            }
        },
    });
	
    $("#login-form").validate({
        rules:
          {
          user_password: {
          required: true,
          },
          user_username: {
                      required: true,
  
                      },
              },
              messages:
              {
                      user_password:{
                              required: "Please enter your password"
                              },
                      user_username: "Please enter your username",
              },
        });  

	$(".btn").on("click",function(){
		var btn_val=$(this).val();
            switch(btn_val){
            case "register":
                if($("#register-form").valid()){
                    var username=$("#user_username").val().trim();
                    var email=$("#user_email").val().trim();
                    var password=$("#user_password").val().trim();

                    var data=new FormData();
                    data.append("action_type","register");
                    data.append("user_username",username);
                    data.append("user_email",email);
                    data.append("user_password",password);
                    
                    $.ajax({
                        url:'account/controller.php',
                        method:"post",
                        data:data,
                        contentType:false,
                        cache:false,
                        processData:false,
                        success:function(res){
                            if(res=="both taken"){// both are taken
                                $('#error_email').fadeIn(400, function() {
                                    $('#error_email').html('<div class="alert alert-success">&nbsp; Email is already taken</div>').fadeIn(3000, function() {
                                      $('#error_email').fadeOut(3000, function(){
                                      })
                                    })
                                  });
                                  $('#error_username').fadeIn(400, function() {
                                    $('#error_username').html('<div class="alert alert-success">&nbsp; Username is already taken</div>').fadeIn(3000, function() {
                                      $('#error_username').fadeOut(3000, function(){
                                      })
                                    })
                                  });    
                            }
                            else if(res=="user taken"){//username is taken
                                $('#error_username').fadeIn(400, function() {
                                    $('#error_username').html('<div class="alert alert-success">&nbsp; Username is already taken</div>').fadeIn(3000, function() {
                                      $('#error_username').fadeOut(3000, function(){
                                      })
                                    })
                                  });    
                            }
                            else if(res=="email taken"){//email is taken
                                $('#error_email').fadeIn(400, function() {
                                    $('#error_email').html('<div class="alert alert-success">&nbsp; Email is already taken</div>').fadeIn(3000, function() {
                                      $('#error_email').fadeOut(3000, function(){
                                      })
                                    })
                                  });
                            }
                            else if(res=="user added"){//success
                                $('#for_register').fadeIn(400, function() {
                                    $('#for_register').html('<div class="alert alert-success">&nbsp; Success</div>').fadeIn(3000, function() {
                                   
                                    })
                                  }); 
                                  setTimeout(function() {
                                    window.location.href = "login.php";
                                  }, 2000);
                               
                            }
                        }
                    });	
                }
            break;
                
            case "login":
                if($("#login-form").valid()){
                    var username=$("#user_username").val().trim();
                    var password=$("#user_password").val().trim();

                    var data=new FormData();
                    data.append("action_type","login");
                    data.append("user_username",username);
                    data.append("user_password",password);

                        $.ajax({
                            url:'account/controller.php',
                            method:"post",
                            data:data,
                            contentType:false,
                            cache:false,
                            processData:false,
                            success:function(res){
                                    alert(res);
                        
                                if(res=="success"){
                                    $('#for_login').fadeIn(400, function() {
                                        $('#for_login').html('<div class="alert alert-success">&nbsp; Success</div>').fadeIn(3000, function() {
                                        })
                                      }); 
                                      setTimeout(function() {
                                        window.location.href = "login.php";
                                      }, 1000);                                
                                }else if(res=="wrong password"){

                                }else if(res=="username error"){

                                }
                                


                            }
                        });	
                    }
            break;
		};	
	});	

});	// END OF FUNCTION 