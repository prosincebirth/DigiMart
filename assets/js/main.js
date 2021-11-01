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
        var item_stock_f = $(e.relatedTarget).data('item_stock_f');
        var item_price_f = $(e.relatedTarget).data('item_price_f');
        //var item_amount_f = $(e.relatedTarget).data('item_amount_f');
        var item_id_f = $(e.relatedTarget).data('item_id_f');
        var buyer_id_f = $(e.relatedTarget).data('buyer_id_f');
        var seller_id_f = $(e.relatedTarget).data('seller_id_f');
        var service_id_f = $(e.relatedTarget).data('service_id_f');
        var game_id_f = $(e.relatedTarget).data('game_id_f');
        var order_id_f = $(e.relatedTarget).data('order_id_f');
        
        $(e.currentTarget).find('input[name="item_stock_f"]').val(item_stock_f);
        $(e.currentTarget).find('input[name="item_price_f"]').val(item_price_f);
        $(e.currentTarget).find('span[name="display_price"]').html(item_price_f);
        $(e.currentTarget).find('input[name="item_total_f"]').val(item_price_f);
        $(e.currentTarget).find('input[name="item_id_f"]').val(item_id_f);
        $(e.currentTarget).find('input[name="buyer_id_f"]').val(buyer_id_f);
        $(e.currentTarget).find('input[name="seller_id_f"]').val(seller_id_f);
        $(e.currentTarget).find('input[name="service_id_f"]').val(service_id_f);
        $(e.currentTarget).find('input[name="game_id_f"]').val(game_id_f);
        $(e.currentTarget).find('input[name="order_id_f"]').val(order_id_f);
    });

    $(function(){ // this will be called when the DOM is ready
        $('#item_quantity_f').keyup(function() {
            var price=Number($("#item_price_f").val())
            var quantity=Number($("#item_quantity_f").val())

            $('#display_price').html(price)
            $('#display_total').html(price * quantity)
            $('#item_total_f').val(price * quantity)
            
        });
        
      });
    

    $('#sale_game_item_modal_2').on('show.bs.modal', function(e) {
        var goods_id_b = $(e.relatedTarget).data('goods_id');
        $(e.currentTarget).find('input[name="goods_id_b"]').val(goods_id_b);
    });

    $('#buyorder_game_item_modal_2').on('show.bs.modal', function(e) {
        var goods_id_e = $(e.relatedTarget).data('goods_id');
        $(e.currentTarget).find('input[name="goods_id_e"]').val(goods_id_e);
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
                            alert(res)    
                            location.reload();
                            }else{
                            alert(res)
                            }
                            
					}
				});//END 
			break;//END 
            case "buyorder_game_item":
				var goods_name_d=$("#goods_name_d").val()
                var goods_quality_d=$("#goods_quality_d").val()
                var goods_rarity_d=$("#goods_rarity_d").val()
                var goods_detail1_d=$("#goods_detail1_d").val()
                var goods_detail2_d=$("#goods_detail2_d").val()
                var goods_detail3_d=$("#goods_detail3_d").val()
                var goods_price_d=$("#goods_price_d").val()  
                var goods_quantity_d=$("#goods_quantity_d").val()  
                var goods_image_d=$('#goods_image_d')[0].files[0];
                var order_id_d=$("#order_id_d").val()
                var service_id_d=$("#service_id_d").val()
                
				var data=new FormData();
				data.append("action_type","buyorder_game_item");
				data.append("goods_name_d",goods_name_d);
				data.append("goods_quality_d",goods_quality_d);
                data.append("goods_rarity_d",goods_rarity_d);
				data.append("goods_detail1_d",goods_detail1_d);
                data.append("goods_detail2_d",goods_detail2_d);
				data.append("goods_detail3_d",goods_detail3_d);
				data.append("goods_price_d",goods_price_d);
                data.append("goods_quantity_d",goods_quantity_d);
                data.append("goods_image_d",goods_image_d);
                data.append("order_id_d",order_id_d);
                data.append("service_id_d",service_id_d);

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
            case "buyorder_game_item_2":
				var item_price_e=$("#item_price_e").val()
                var items_quantity_e=$("#items_quantity_e").val()
                var goods_id_e=$("#goods_id_e").val()
                var service_id_e=$("#service_id_e").val()
             
				var data=new FormData();
				data.append("action_type","buyorder_game_item_2");
				data.append("item_price_e",item_price_e);
				data.append("items_quantity_e",items_quantity_e);
                data.append("goods_id_e",goods_id_e);
				data.append("service_id_e",service_id_e);
  
				$.ajax({	
					url:"account/controller.php",
					method:"post",
					data:data,
					contentType:false,
					cache:false,
					processData:false,
					success:function(res){
							
                            if(res=="Success"){
                            alert(res)
                            location.reload();
                            }else{
                            alert(res)
                            }
                            
					}
				});//END 
			break;//END 
            case "buy_game_item":
              
                var item_stock_f=$("#item_stock_f").val()
				var item_quantity_f=$("#item_quantity_f").val()
                var item_total_f=$("#item_total_f").val()
                var item_id_f=$("#item_id_f").val()
                var buyer_id_f=$("#buyer_id_f").val()
                var seller_id_f=$("#seller_id_f").val()
                var service_id_f=$("#service_id_f").val()
                var game_id_f=$("#game_id_f").val()
                var order_id_f=$("#order_id_f").val()  


				var data=new FormData();
				data.append("action_type","buy_game_item");
				data.append("item_quantity_f",item_quantity_f);
                data.append("item_stock_f",item_stock_f);
				data.append("item_total_f",item_total_f);
                data.append("item_id_f",item_id_f);
				data.append("buyer_id_f",buyer_id_f);
				data.append("seller_id_f",seller_id_f);
                data.append("service_id_f",service_id_f);
                data.append("game_id_f",game_id_f);
                data.append("order_id_f",order_id_f);

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