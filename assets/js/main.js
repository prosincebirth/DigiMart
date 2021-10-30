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
            user_username_b: {
                required: true,
                minlength: 5
            },
            user_password_b: {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            cpassword_b: {
                required: true,
                equalTo: '#user_password_b'
            },
            user_email_b: {
                required: true,
				email: true,
               
            },
        },
        messages:
        {
            user_username_b:{
                required: "Provide a Username",
                minlength: "Username Needs To Be Minimum of 5 Characters"
            },
            user_password_b:{
                required: "Provide a Password",
                minlength: "Password Needs To Be Minimum of 8 Characters"
            },
            user_email_b:{
                required: "Provide a Valid Email",
            },
            cpassword_b:{
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

        $(e.currentTarget).find('input[name="item_ida"]').val(item_id);
        $(e.currentTarget).find('input[name="buyer_id"]').val(buyer_id);
        $(e.currentTarget).find('input[name="seller_id"]').val(seller_id);
        $(e.currentTarget).find('input[name="service_ida"]').val(service_id);
        $(e.currentTarget).find('input[name="item_pricea"]').val(item_price);
        $(e.currentTarget).find('input[name="game_id"]').val(game_id);
        $(e.currentTarget).find('input[name="order_id"]').val(order_id);
    });
   
    $('#sale_game_item_modal_2').on('show.bs.modal', function(e) {
        var goods_id = $(e.relatedTarget).data('goods_id');
   
        $(e.currentTarget).find('input[name="goods_id_b"]').val(goods_id);
    });
   
	$(".btn").on("click",function(){
		var btn_val=$(this).val();
            switch(btn_val){
            case "register":
                if($("#register-form").valid()){
                    var username_b=$("#user_username_b").val().trim();
                    var email_b=$("#user_email_b").val().trim();
                    var password_b=$("#user_password_b").val().trim();

                    var data=new FormData();
                    data.append("action_type","register");
                    data.append("user_username_b",username_b);
                    data.append("user_email_b",email_b);
                    data.append("user_password_b",password_b);
                    
                    $.ajax({
                        url:'account/controller.php',
                        method:"post",
                        data:data,
                        contentType:false,
                        cache:false,
                        processData:false,
                        success:function(res){
                            if(res=="both taken"){// both are taken
                                alert(res) 
                            }
                            else if(res=="user taken"){//username is taken
                                alert(res) 
                            }
                            else if(res=="email taken"){//email is taken
                                alert(res)
                            }
                            else if(res=="user added"){//success
                                alert(res)
                                $("#register_modal").hide()       
                                $("#login_modal").show()                      
                            }
                        }
                    });	
                }
            break;               
            case "login":
                if($("#login-form").valid()){
                    var username_a=$("#user_username_a").val().trim();
                    var password_a=$("#user_password_a").val().trim();

                    
                    var data=new FormData();
                    data.append("action_type","login");
                    data.append("user_username_a",username_a);
                    data.append("user_password_a",password_a);

                        $.ajax({
                            url:'account/controller.php',
                            method:"post",
                            data:data,
                            contentType:false,
                            cache:false,
                            processData:false,
                            success:function(res){
                                if(res=="Successfuly Logged In"){
                                    alert(res)
                                    location.reload();                           
                                }else if(res=="Wrong Password"){
                                    alert(res)
                                }else if(res=="Username not recognized"){
                                    alert(res)
                                }                        
                            }
                        });	
                    }
            break;
            case "add_new_game": //TESTED 11:56 pm , 25/10/2021
				var game_name_a=$("#game_name_a").val().trim();
                var game_desc_a=$("#game_desc_a").val().trim();
                var steam_game_id_a=$("#steam_game_id_a").val().trim();
      
				var data=new FormData();
				data.append("action_type","add_new_game");
				data.append("game_name_a",game_name_a);
				data.append("game_desc_a",game_desc_a);
				data.append("steam_game_id_a",steam_game_id_a);

				$.ajax({	
					url:"account/controller.php",
					method:"post",
					data:data,
					contentType:false,
					cache:false,
					processData:false,
					success:function(res){
							alert(res)
					}
				});//END	
			break;
            case "add_new_game_service": //TESTED 11:56 pm , 25/10/2021
				var service_mode_a=$("#service_mode_a").val().trim();
                var service_desc_a=$("#service_desc_a").val().trim();
                var game_id_a=$("#game_id_a").val().trim();
      
				var data=new FormData();
				data.append("action_type","add_new_game_service");
				data.append("service_mode_a",service_mode_a);
				data.append("service_desc_a",service_desc_a);
                data.append("game_id_a",game_id_a);

				$.ajax({	
					url:"account/controller.php",
					method:"post",
					data:data,
					contentType:false,
					cache:false,
					processData:false,
					success:function(res){
							alert(res)
					}
				});//END	
			break;//END//END
            case "sell_game_item":
				var goods_name_a=$("#goods_name_a").val()
                var goods_quality_a=$("#goods_quality_a").val()
                var goods_rarity_a=$("#goods_rarity_a").val()
                var goods_detail1_a=$("#goods_detail1_a").val()
                var goods_detail2_a=$("#goods_detail2_a").val()
                var goods_detail3_a=$("#goods_detail3_a").val()
                var goods_price_a=$("#goods_price_a").val()  
                var goods_quantity_a=$("#goods_quantity_a").val()  
                var goods_image_a=$('#goods_image_a')[0].files[0];
                var order_id_a=$("#order_id_a").val()
                var service_id_a=$("#service_id_a").val()
                
				var data=new FormData();
				data.append("action_type","sell_game_item");
				data.append("goods_name_a",goods_name_a);
				data.append("goods_quality_a",goods_quality_a);
                data.append("goods_rarity_a",goods_rarity_a);
				data.append("goods_detail1_a",goods_detail1_a);
                data.append("goods_detail2_a",goods_detail2_a);
				data.append("goods_detail3_a",goods_detail3_a);
				data.append("goods_price_a",goods_price_a);
                data.append("goods_quantity_a",goods_quantity_a);
                data.append("goods_image_a",goods_image_a);
                data.append("order_id_a",order_id_a);
                data.append("service_id_a",service_id_a);

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
            case "sell_game_item_2":
				var item_price_b=$("#item_price_b").val()
                var items_quantity_b=$("#items_quantity_b").val()
                var goods_id_b=$("#goods_id_b").val()
                var service_id_b=$("#service_id_b").val()
             
				var data=new FormData();
				data.append("action_type","sell_game_item_2");
				data.append("item_price_b",item_price_b);
				data.append("items_quantity_b",items_quantity_b);
                data.append("goods_id_b",goods_id_b);
				data.append("service_id_b",service_id_b);
  

				$.ajax({	
					url:"account/controller.php",
					method:"post",
					data:data,
					contentType:false,
					cache:false,
					processData:false,
					success:function(res){
							
                            if(res=="Success"){
                            location.reload();
                            }else{
                            alert(res)
                            }
                            
					}
				});//END 
			break;//END 
            case "buy_game_item":
				var item_ida=$("#item_ida").val()
                var buyer_id=$("#buyer_id").val()
                var seller_id=$("#seller_id").val()
                var service_ida=$("#service_ida").val()
                var item_pricea=$("#item_pricea").val()
                var game_id=$("#game_id").val()
                var order_id=$("#order_id").val()  
         
				var data=new FormData();
				data.append("action_type","buy_game_item");
				data.append("item_ida",item_ida);
				data.append("buyer_id",buyer_id);
                data.append("seller_id",seller_id);
				data.append("service_ida",service_ida);
				data.append("item_pricea",item_pricea);
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