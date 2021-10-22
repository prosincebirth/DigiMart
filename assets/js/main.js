$('document').ready(function()
{
    $('.js-drop').on('click', function() {
        $(this).toggleClass('open');
    });
    $('[data-toggle="popover"]').popover({
        placement: 'right',
        trigger: 'hover'
     });

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
            user_password:{
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

    $('#buy_game_item_modal').on('show.bs.modal', function(e) {
        var item_id = $(e.relatedTarget).data('item_id');
        var buyer_id = $(e.relatedTarget).data('buyer_id');
        var seller_id = $(e.relatedTarget).data('seller_id');
        var service_id = $(e.relatedTarget).data('service_id');
        var item_price = $(e.relatedTarget).data('item_price');
        var game_id = $(e.relatedTarget).data('game_id');
        var order_id = $(e.relatedTarget).data('order_id');

        $(e.currentTarget).find('input[name="item_id"]').val(item_id);
        $(e.currentTarget).find('input[name="buyer_id"]').val(buyer_id);
        $(e.currentTarget).find('input[name="seller_id"]').val(seller_id);
        $(e.currentTarget).find('input[name="service_id"]').val(service_id);
        $(e.currentTarget).find('input[name="item_price"]').val(item_price);
        $(e.currentTarget).find('input[name="game_id"]').val(game_id);
        $(e.currentTarget).find('input[name="order_id"]').val(order_id);

    });
   
    $('#sale_game_item_modal_2').on('show.bs.modal', function(e) {
        var item_name = $(e.relatedTarget).data('item_name');
        var item_image = $(e.relatedTarget).data('item_image');
        var item_quality = $(e.relatedTarget).data('item_quality');
        var item_rarity = $(e.relatedTarget).data('item_rarity');
        var item_detail1 = $(e.relatedTarget).data('item_detail1');
        var item_detail2 = $(e.relatedTarget).data('item_detail2');
        var item_detail3 = $(e.relatedTarget).data('item_detail3');
        var user_id = $(e.relatedTarget).data('user_id');

        //$(e.currentTarget).find('input[name="game_name"]').val(item_image);
        $(e.currentTarget).find('input[name="buyer_id"]').val(buyer_id);
        $(e.currentTarget).find('input[name="seller_id"]').val(seller_id);
        $(e.currentTarget).find('input[name="service_id"]').val(service_id);
        $(e.currentTarget).find('input[name="item_price"]').val(item_price);
        $(e.currentTarget).find('input[name="game_id"]').val(game_id);
        $(e.currentTarget).find('input[name="order_id"]').val(order_id);

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
                                if(res=="success"){
                                    $('#for_login').fadeIn(400, function() {
                                        $('#for_login').html('<div class="alert alert-success">&nbsp; Success</div>').fadeIn(3000, function() {
                                        })
                                      }); 
                                      setTimeout(function() {
                                        window.location.href = "index.php";
                                      }, 1000);                                
                                }else if(res=="wrong password"){
                                    $('#error_password').fadeIn(400, function() {
                                        $('#error_password').html('<div class="alert alert-success">&nbsp; Incorrect Password </div>').fadeIn(3000, function() {
                                          $('#error_password').fadeOut(3000, function(){
                                          })
                                        })
                                      });

                                }else if(res=="username error"){
                                    $('#error_username').fadeIn(400, function() {
                                        $('#error_username').html('<div class="alert alert-success">&nbsp; Username is not recognized</div>').fadeIn(3000, function() {
                                          $('#error_username').fadeOut(3000, function(){
                                          })
                                        })
                                      });
                                }                        
                            }
                        });	
                    }
            break;
            case "save_new_game":
				var game_name1=$("#game_name").val().trim();
                var game_desc1=$("#game_desc").val().trim();
                var game_region1=$("#game_region").val().trim();
                var game_server1=$("#game_server").val().trim();

				var data=new FormData();
				data.append("action_type","add_new_game");
				data.append("game_name",game_name1);
				data.append("game_desc",game_desc1);
				data.append("game_region",game_region1);
                data.append("game_server",game_server1);

				$.ajax({	
					url:"account/controller.php",
					method:"post",
					data:data,
					contentType:false,
					cache:false,
					processData:false,
					success:function(res){
							alert(res)
                            console.log(res)
                            $('#for_login').fadeIn(400, function() {
                                $('#for_login').html('<div class="alert alert-success">&nbsp; Success</div>').fadeIn(3000, function() {
                                })
                              }); 
					}
				});//END OF AJAX IN ADDING NEW ITEM
            //}				
			break;//END OF SAVE NEW ITEM
            case "sell_game_item":
				var item_name=$("#item_name").val()
                var item_quality=$("#item_quality").val()
                var item_rarity=$("#item_rarity").val()
                var item_detail1=$("#item_detail1").val()
                var item_detail2=$("#item_detail2").val()
                var item_detail3=$("#item_detail3").val()
                var item_price=$("#item_price").val()  
                var item_image=$('#item_image')[0].files[0];
                var user_id=$("#user_id").val()
                var service_id=$("#service_id").val()
                var order_id=$("#order_id").val()
                
				var data=new FormData();
				data.append("action_type","sell_game_item");
				data.append("item_name",item_name);
				data.append("item_quality",item_quality);
                data.append("item_rarity",item_rarity);
				data.append("item_detail1",item_detail1);
                data.append("item_detail2",item_detail2);
				data.append("item_detail3",item_detail3);
				data.append("item_price",item_price);
                data.append("item_image",item_image);
                data.append("user_id",user_id);
                data.append("service_id",service_id);
                data.append("order_id",order_id);

				$.ajax({	
					url:"account/controller.php",
					method:"post",
					data:data,
					contentType:false,
					cache:false,
					processData:false,
					success:function(res){
							alert(res)
                            console.log(res)
					}
				});//END OF AJAX IN ADDING NEW ITEM
            //}				
			break;//END OF SAVE NEW ITEM
            case "buy_game_item":
				var item_id=$("#item_id").val()
                var buyer_id=$("#buyer_id").val()
                var seller_id=$("#seller_id").val()
                var service_id=$("#service_id").val()
                var item_price=$("#item_price").val()
                var game_id=$("#game_id").val()
                var order_id=$("#order_id").val()  
         
				var data=new FormData();
				data.append("action_type","buy_game_item");
				data.append("item_id",item_id);
				data.append("buyer_id",buyer_id);
                data.append("seller_id",seller_id);
				data.append("service_id",service_id);
				data.append("item_price",item_price);
                data.append("game_id",game_id);
                data.append("order_id",order_id);

				$.ajax({	
					url:"account/controller.php",
					method:"post",
					data:data,
					contentType:false,
					cache:false,
					processData:false,
					success:function(res){
							alert(res)
                            console.log(res)
					}
				});//END OF AJAX IN ADDING NEW ITEM
            //}				
			break;//END OF SAVE NEW ITEM
            
		};	
	});	


    

});