$('document').ready(function()
{
    if ( $('#desposit_success').hasClass('in') ) {
        setTimeout(function() {
            $('#desposit_success').removeClass("in").removeAttr("style");
            $('body').removeClass("modal-open").removeAttr("style");
            $('.modal-backdrop').remove();
        }, 2000);       
    }

    $('.js-drop').on('click', function() {
        $(this).toggleClass('open');
        $('body').toggleClass('open');
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
        $(e.currentTarget).find('span[name="display_price_f"]').html(item_price_f);
        $(e.currentTarget).find('span[name="display_total_f"]').html(item_price_f);
        $(e.currentTarget).find('input[name="item_total_f"]').val(item_price_f);
        $(e.currentTarget).find('input[name="item_id_f"]').val(item_id_f);
        $(e.currentTarget).find('input[name="buyer_id_f"]').val(buyer_id_f);
        $(e.currentTarget).find('input[name="seller_id_f"]').val(seller_id_f);
        $(e.currentTarget).find('input[name="service_id_f"]').val(service_id_f);
        $(e.currentTarget).find('input[name="game_id_f"]').val(game_id_f);
        $(e.currentTarget).find('input[name="order_id_f"]').val(order_id_f);
    });

    $('#item_quantity_f').keyup(function() {
        var price=Number($("#item_price_f").val())
        var quantity=Number($("#item_quantity_f").val())

        $('#display_total_f').html(price * quantity)
        $('#item_total_f').val(price * quantity)
    });

    $('#bargain_item_modal').on('show.bs.modal', function(e) {
        var item_stock_g = $(e.relatedTarget).data('item_stock_g');
        var item_price_g = $(e.relatedTarget).data('item_price_g');
        var minimum_price = 0.6 * item_price_g;
        var item_id_g = $(e.relatedTarget).data('item_id_g');
        var buyer_id_g = $(e.relatedTarget).data('buyer_id_g');
        var seller_id_g = $(e.relatedTarget).data('seller_id_g');
        var service_id_g= $(e.relatedTarget).data('service_id_g');
        var game_id_g = $(e.relatedTarget).data('game_id_g');
        var order_id_g = $(e.relatedTarget).data('order_id_g');
        
        $(e.currentTarget).find('input[name="item_stock_g"]').val(item_stock_g);
        $(e.currentTarget).find('span[name="display_price_g"]').html(item_price_g);
        $(e.currentTarget).find('input[name="bargain_price_g"]').val(minimum_price.toFixed());
        $(e.currentTarget).find('span[name="display_minimumm_g"]').html(minimum_price.toFixed());
        $(e.currentTarget).find('span[name="display_total_g"]').html(minimum_price.toFixed());
        $(e.currentTarget).find('input[name="item_total_g"]').val(minimum_price.toFixed());

        $(e.currentTarget).find('input[name="item_price_g"]').val(item_price_g);
        $(e.currentTarget).find('input[name="item_id_g"]').val(item_id_g);
        $(e.currentTarget).find('input[name="buyer_id_g"]').val(buyer_id_g);
        $(e.currentTarget).find('input[name="seller_id_g"]').val(seller_id_g);
        $(e.currentTarget).find('input[name="service_id_g"]').val(service_id_g);
        $(e.currentTarget).find('input[name="game_id_g"]').val(game_id_g);
        $(e.currentTarget).find('input[name="order_id_g"]').val(order_id_g);
    });
    
    $('#bargain_price_g,#item_quantity_g').keyup(function() {
        var quantity=Number($("#item_quantity_g").val())
        var bargain=Number($("#bargain_price_g").val())
        //var dummy = Number($("#display_minimumm_g").html())
        $('#display_total_g').html(bargain * quantity)
        $('#item_total_g').val(bargain * quantity)
    });
    
    $('#supply_item_modal').on('show.bs.modal', function(e) {
        var item_stock_h = $(e.relatedTarget).data('item_stock_h');
        var item_price_h = $(e.relatedTarget).data('item_price_h');
        //var item_amount_f = $(e.relatedTarget).data('item_amount_f');
        var item_id_h = $(e.relatedTarget).data('item_id_h');
        var buyer_id_h = $(e.relatedTarget).data('buyer_id_h');
        var seller_id_h = $(e.relatedTarget).data('seller_id_h');
        var service_id_h = $(e.relatedTarget).data('service_id_h');
        var game_id_h = $(e.relatedTarget).data('game_id_h');
        var order_id_h = $(e.relatedTarget).data('order_id_h');
     

        $(e.currentTarget).find('input[name="item_stock_h"]').val(item_stock_h);
        $(e.currentTarget).find('input[name="item_price_h"]').val(item_price_h);
        $(e.currentTarget).find('span[name="display_price_h"]').html(item_price_h);
        $(e.currentTarget).find('span[name="display_total_h"]').html(item_price_h);  
        $(e.currentTarget).find('input[name="item_total_h"]').val(item_price_h);
        $(e.currentTarget).find('input[name="item_id_h"]').val(item_id_h);
        $(e.currentTarget).find('input[name="buyer_id_h"]').val(buyer_id_h);
        $(e.currentTarget).find('input[name="seller_id_h"]').val(seller_id_h);
        $(e.currentTarget).find('input[name="service_id_h"]').val(service_id_h);
        $(e.currentTarget).find('input[name="game_id_h"]').val(game_id_h);
        $(e.currentTarget).find('input[name="order_id_h"]').val(order_id_h);
    });


    $('#edit_game_item_modal').on('show.bs.modal', function(e) {
        var goods_id_edit = $(e.relatedTarget).data('goods_id_edit');
        var goods_name_edit = $(e.relatedTarget).data('goods_name_edit');
        var goods_quality_edit = $(e.relatedTarget).data('goods_quality_edit');
        var goods_rarity_edit = $(e.relatedTarget).data('goods_rarity_edit');
        var goods_detail1_edit = $(e.relatedTarget).data('goods_detail1_edit');
        var goods_detail2_edit = $(e.relatedTarget).data('goods_detail2_edit');
        var goods_detail3_edit = $(e.relatedTarget).data('goods_detail3_edit');
        var order_id_edit = $(e.relatedTarget).data('order_id_edit');
        var service_id_edit = $(e.relatedTarget).data('service_id_edit');
     

        $(e.currentTarget).find('input[name="goods_name_edit"]').val(goods_name_edit);
        $(e.currentTarget).find('input[name="order_id_edit"]').val(order_id_edit);
        $(e.currentTarget).find('input[name="goods_id_edit"]').val(goods_id_edit);
        $(e.currentTarget).find('select[name="goods_quality_edit"]').val(goods_quality_edit);
        $(e.currentTarget).find('select[name="goods_rarity_edit"]').val(goods_rarity_edit);
        $(e.currentTarget).find('select[name="goods_detail1_edit"]').val(goods_detail1_edit);  
        $(e.currentTarget).find('select[name="goods_detail2_edit"]').val(goods_detail2_edit);
        $(e.currentTarget).find('select[name="goods_detail3_edit"]').val(goods_detail3_edit);
        $(e.currentTarget).find('select[name="service_id_edit"]').val(service_id_edit);

    });

    $('#item_quantity_h').keyup(function() {
        var price=Number($("#item_price_h").val())
        var quantity=Number($("#item_quantity_h").val())

        $('#display_total_h').html(price * quantity)
        $('#item_total_h').val(price * quantity)
    });

    $('#cancel_buy_order_modal').on('show.bs.modal', function(e) {
        var item_id_i = $(e.relatedTarget).data('item_id_i');
        var user_id_i = $(e.relatedTarget).data('user_id_i');

        $(e.currentTarget).find('input[name="item_id_i"]').val(item_id_i);
        $(e.currentTarget).find('input[name="user_id_i"]').val(user_id_i);
    });

    $('#dispute_item_not_received').on('show.bs.modal', function(e) {
        var transaction_id_dispute = $(e.relatedTarget).data('transaction_id_dispute');

        $(e.currentTarget).find('input[name="transaction_id_dispute"]').val(transaction_id_dispute);
    });

    $('#dispute_item_delivered_dispute').on('show.bs.modal', function(e) {
        var transaction_id_dispute_seller = $(e.relatedTarget).data('transaction_id_dispute_seller');

        $(e.currentTarget).find('input[name="transaction_id_dispute_seller"]').val(transaction_id_dispute_seller);
    });

    $('#cancel_buy_order_modal_i').on('show.bs.modal', function(e) {
        var transaction_id_ii = $(e.relatedTarget).data('transaction_id_ii');
        var user_id_ii = $(e.relatedTarget).data('user_id_ii');

        $(e.currentTarget).find('input[name="transaction_id_ii"]').val(transaction_id_ii);
        $(e.currentTarget).find('input[name="user_id_ii"]').val(user_id_ii);
    });

    $('#cancel_sale_order_modal').on('show.bs.modal', function(e) {
        var item_id_n = $(e.relatedTarget).data('item_id_n');
        var user_id_n = $(e.relatedTarget).data('user_id_n');

        $(e.currentTarget).find('input[name="item_id_n"]').val(item_id_n);
        $(e.currentTarget).find('input[name="user_id_n"]').val(user_id_n);
    });

    $('#cancel_bargain_order_modal').on('show.bs.modal', function(e) {
        var transaction_id_q = $(e.relatedTarget).data('transaction_id_q');
        var user_id_q = $(e.relatedTarget).data('user_id_q');

        $(e.currentTarget).find('input[name="transaction_id_q"]').val(transaction_id_q);
        $(e.currentTarget).find('input[name="user_id_q"]').val(user_id_q);
    });

    $('#sale_game_item_modal_2').on('show.bs.modal', function(e) {
        var goods_id_b = $(e.relatedTarget).data('goods_id');
        $(e.currentTarget).find('input[name="goods_id_b"]').val(goods_id_b);
    });

    $('#buyorder_game_item_modal_2').on('show.bs.modal', function(e) {
        var goods_id_e = $(e.relatedTarget).data('goods_id');
        $(e.currentTarget).find('input[name="goods_id_e"]').val(goods_id_e);
    });

    $('#accept_buy_order_modal').on('show.bs.modal', function(e) {
        var transaction_id_j = $(e.relatedTarget).data('transaction_id_j');
        var user_id_j = $(e.relatedTarget).data('user_id_j');

        $(e.currentTarget).find('input[name="transaction_id_j"]').val(transaction_id_j);
        $(e.currentTarget).find('input[name="user_id_j"]').val(user_id_j);
    });

    $('#accept_sale_order_modal').on('show.bs.modal', function(e) {
        var transaction_id_o = $(e.relatedTarget).data('transaction_id_o');
        var user_id_o = $(e.relatedTarget).data('user_id_o');

        $(e.currentTarget).find('input[name="transaction_id_o"]').val(transaction_id_o);
        $(e.currentTarget).find('input[name="user_id_o"]').val(user_id_o);
    });

    $('#refuse_sale_order_modal').on('show.bs.modal', function(e) {
        var transaction_id_p = $(e.relatedTarget).data('transaction_id_p');
        var user_id_p = $(e.relatedTarget).data('user_id_p');

        $(e.currentTarget).find('input[name="transaction_id_p"]').val(transaction_id_p);
        $(e.currentTarget).find('input[name="user_id_p"]').val(user_id_p);
    });

    $('#dispute_item_not_received').on('show.bs.modal', function(e) {
        var transaction_id_dispute = $(e.relatedTarget).data('transaction_id_dispute');

        $(e.currentTarget).find('input[name="transaction_id_dispute"]').val(transaction_id_dispute);
    });

    $('#cancel_sale_order_modal_nn').on('show.bs.modal', function(e) {
        var transaction_id_nn = $(e.relatedTarget).data('transaction_id_nn');
        var user_id_nn = $(e.relatedTarget).data('user_id_nn');

        $(e.currentTarget).find('input[name="transaction_id_nn"]').val(transaction_id_nn);
        $(e.currentTarget).find('input[name="user_id_nn"]').val(user_id_nn);
    });

    $('#refuse_buy_order_modal').on('show.bs.modal', function(e) {
        var transaction_id_k = $(e.relatedTarget).data('transaction_id_k');
        var user_id_k = $(e.relatedTarget).data('user_id_k');

        $(e.currentTarget).find('input[name="transaction_id_k"]').val(transaction_id_k);
        $(e.currentTarget).find('input[name="user_id_k"]').val(user_id_k);
    });

    $('#item_deliver_sale_order_modal').on('show.bs.modal', function(e) {
        var transaction_id_l = $(e.relatedTarget).data('transaction_id_l');
        var user_id_l = $(e.relatedTarget).data('user_id_l');

        $(e.currentTarget).find('input[name="transaction_id_l"]').val(transaction_id_l);
        $(e.currentTarget).find('input[name="user_id_l"]').val(user_id_l);
    });

    $('#item_confirmation_buy_order_modal').on('show.bs.modal', function(e) {
        var transaction_id_m = $(e.relatedTarget).data('transaction_id_m');
        var user_id_m = $(e.relatedTarget).data('user_id_m');
        var transaction_proof_mm = $(e.relatedTarget).data('transaction_proof_mm');

        $(e.currentTarget).find('input[name="transaction_id_m"]').val(transaction_id_m);
        $(e.currentTarget).find('input[name="user_id_m"]').val(user_id_m);
        $(e.currentTarget).find('img').attr("src",'data:image/png;base64,'+transaction_proof_mm)
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
                            if(res=="Success"){
                                alert(res)
                                location.reload();
                            }else{
                                alert(res)
                            }     
                        }
                    });	
                }
            break;               
            case "login":
                if($("#login-form").valid()){
                    var username_a=$("#user_username_a").val();
                    var password_a=$("#user_password_a").val();
                    
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
                                if(res=="Success"){
                                    alert(res)
                                    location.reload();
                                }else{
                                    alert(res)
                                }                        
                            }
                        });	
                    }
            break;
            case "add_new_game_modal": 
				var game_name_a=$("#game_name_a").val().trim();
                var game_desc_a=$("#game_desc_a").val().trim();
                var steam_game_id_a=$("#steam_game_id_a").val().trim();
      
				var data=new FormData();
				data.append("action_type","add_new_game_modal");
				data.append("game_name_a",game_name_a);
				data.append("game_desc_a",game_desc_a);
				data.append("steam_game_id_a",steam_game_id_a);

				$.ajax({	
					url:"./account/controller.php",
					method:"post",
					data:data,
					contentType:false,
					cache:false,
					processData:false,
					success:function(res){
                        console.log(res)
                        if(res=="Success"){
                            alert(res)
                            location.reload();
                        }else{
                            alert(res)
                        } 
					}
				});//END	
			break;
            case "add_new_game_service": 
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
                        if(res=="Success"){
                            alert(res)
                            location.reload();
                        }else{
                            alert(res)
                        } 
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
                        if(res=="Success"){
                            alert(res)
                            location.reload();
                        }else{
                            alert(res)
                        } 
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
                        if(res=="Success"){
                            alert(res)
                            location.reload();
                        }else{
                            alert(res)
                        }                        
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
                        if(res=="Success"){
                            alert(res)
                            location.reload();
                        }else{
                            alert(res)
                        } 
					}
				});//END OF AJAX IN ADDING NEW ITEM
            //}				
			break;//END OF SAVE NEW ITEM
            case "bargain_game_item":
              
                var minimum_g =$("#display_minimumm_g").html()
                var bargain_price_g=$("#bargain_price_g").val()
                var item_price_g=$("#item_price_g").val()
                var item_stock_g=$("#item_stock_g").val()
				var item_quantity_g=$("#item_quantity_g").val()
                var item_total_g=$("#item_total_g").val()
                var item_id_g=$("#item_id_g").val()
                var buyer_id_g=$("#buyer_id_g").val()
                var seller_id_g=$("#seller_id_g").val()
                var service_id_g=$("#service_id_g").val()
                var game_id_g=$("#game_id_g").val()
                var order_id_g=$("#order_id_g").val()  

				var data=new FormData();
				data.append("action_type","bargain_game_item");
				data.append("minimum_g",minimum_g);
                data.append("bargain_price_g",bargain_price_g);
				data.append("item_price_g",item_price_g);
                data.append("item_stock_g",item_stock_g);
				data.append("item_quantity_g",item_quantity_g);
				data.append("item_total_g",item_total_g);
                data.append("item_id_g",item_id_g);
                data.append("buyer_id_g",buyer_id_g);
                data.append("seller_id_g",seller_id_g);
                data.append("service_id_g",service_id_g);
                data.append("game_id_g",game_id_g);
                data.append("order_id_g",order_id_g);

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
				});//END OF AJAX IN ADDING NEW ITEM
            //}				
			break;//END OF SAVE NEW ITEM
            case "supply_item_modal":
 
                var item_price_h=$("#item_price_h").val()
                var item_stock_h=$("#item_stock_h").val()
				var item_quantity_h=$("#item_quantity_h").val()
                var item_total_h=$("#item_total_h").val()
                var item_id_h=$("#item_id_h").val()
                var buyer_id_h=$("#buyer_id_h").val()
                var seller_id_h=$("#seller_id_h").val()
                var service_id_h=$("#service_id_h").val()
                var game_id_h=$("#game_id_h").val()
                var order_id_h=$("#order_id_h").val()  

				var data=new FormData();
				data.append("action_type","supply_item_modal");
				data.append("item_price_h",item_price_h);
                data.append("item_stock_h",item_stock_h);
				data.append("item_quantity_h",item_quantity_h);
				data.append("item_total_h",item_total_h);
                data.append("item_id_h",item_id_h);
                data.append("buyer_id_h",buyer_id_h);
                data.append("seller_id_h",seller_id_h);
                data.append("service_id_h",service_id_h);
                data.append("game_id_h",game_id_h);
                data.append("order_id_h",order_id_h);

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
				});//END OF AJAX IN ADDING NEW ITEM
            //}				
			break;//END OF SAVE NEW ITEM
            case "cancel_buy_order_modal":             
                var item_id_i=$("#item_id_i").val()
                var user_id_i=$("#user_id_i").val()

				var data=new FormData();
				data.append("action_type","cancel_buy_order_modal");
				data.append("item_id_i",item_id_i);
                data.append("user_id_i",user_id_i);

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
				});		
			break;//END OF SAVE NEW ITEM
            case "cancel_buy_order_modal_i":             
                var transaction_id_ii=$("#transaction_id_ii").val()
                var user_id_ii=$("#user_id_ii").val()

				var data=new FormData();
				data.append("action_type","cancel_buy_order_modal_i");
				data.append("transaction_id_ii",transaction_id_ii);
                data.append("user_id_ii",user_id_ii);

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
				});		
			break;//END OF SAVE NEW ITEM
            case "accept_buy_order_modal":             
                var transaction_id_j=$("#transaction_id_j").val()
                var user_id_j=$("#user_id_j").val()

				var data=new FormData();
				data.append("action_type","accept_buy_order_modal");
				data.append("transaction_id_j",transaction_id_j);
                data.append("user_id_j",user_id_j);

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
				});			
			break;
            case "refuse_buy_order_modal":             
                var transaction_id_k=$("#transaction_id_k").val()
                var user_id_k=$("#user_id_k").val()

				var data=new FormData();
				data.append("action_type","refuse_buy_order_modal");
				data.append("transaction_id_k",transaction_id_k);
                data.append("user_id_k",user_id_k);

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
				});//END OF AJAX IN ADDING NEW ITEM
            //}				
			break;//END OF SAVE NEW ITEM
            case "item_deliver_sale_order_modal":             
                var transaction_id_l=$("#transaction_id_l").val()
                var user_id_l=$("#user_id_l").val()
                var transaction_proof=$('#transaction_proof')[0].files[0];


				var data=new FormData();
				data.append("action_type","item_deliver_sale_order_modal");
				data.append("transaction_id_l",transaction_id_l);
                data.append("user_id_l",user_id_l);
                data.append("transaction_proof",transaction_proof);

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
				});//END OF AJAX IN ADDING NEW ITEM
            //}				
			break;//END OF SAVE NEW ITEM
            case "item_confirmation_buy_order_modal":             
                var transaction_id_m=$("#transaction_id_m").val()
                var user_id_m=$("#user_id_m").val()

				var data=new FormData();
				data.append("action_type","item_confirmation_buy_order_modal");
				data.append("transaction_id_m",transaction_id_m);
                data.append("user_id_m",user_id_m);

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
				});
			break; 
            case "cancel_sale_order_modal":             
                var item_id_n=$("#item_id_n").val()
                var user_id_n=$("#user_id_n").val()

				var data=new FormData();
				data.append("action_type","cancel_sale_order_modal");
				data.append("item_id_n",item_id_n);
                data.append("user_id_n",user_id_n);
                
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
				});	
			break;
            case "cancel_sale_order_modal_nn":             
                var transaction_id_nn=$("#transaction_id_nn").val()
                var user_id_nn=$("#user_id_nn").val()

				var data=new FormData();
				data.append("action_type","cancel_sale_order_modal_nn");
				data.append("transaction_id_nn",transaction_id_nn);
                data.append("user_id_nn",user_id_nn);
              
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
				});	
			break;
            case "accept_sale_order_modal":             
                var transaction_id_o=$("#transaction_id_o").val()
                var user_id_o=$("#user_id_o").val()

				var data=new FormData();
				data.append("action_type","accept_sale_order_modal");
				data.append("transaction_id_o",transaction_id_o);
                data.append("user_id_o",user_id_o);

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
				});
            break;
            case "refuse_sale_order_modal":             
                var transaction_id_p=$("#transaction_id_p").val()
                var user_id_p=$("#user_id_p").val()

				var data=new FormData();
				data.append("action_type","refuse_sale_order_modal");
				data.append("transaction_id_p",transaction_id_p);
                data.append("user_id_p",user_id_p);
                
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
				});
            break;
            case "cancel_bargain_order_modal":             
                var transaction_id_q=$("#transaction_id_q").val()
                var user_id_q=$("#user_id_q").val()

				var data=new FormData();
				data.append("action_type","cancel_bargain_order_modal");
				data.append("transaction_id_q",transaction_id_q);
                data.append("user_id_q",user_id_q);

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
				});
            break;
            case "dispute_item_not_received":             
                var transaction_id_dispute=$("#transaction_id_dispute").val()
                var dispute_title_a=$("#dispute_title_a").val()
                var dispute_message_a=$("#dispute_message_a").val()

				var data=new FormData();
				data.append("action_type","dispute_item_not_received");
				data.append("transaction_id_dispute",transaction_id_dispute);
                data.append("dispute_title_a",dispute_title_a);
                data.append("dispute_message_a",dispute_message_a);

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
				});
            break;
            case "edit_game_item_modal":             
                var goods_name_edit=$("#goods_name_edit").val()
                var goods_quality_edit=$("#goods_quality_edit").val()
                var goods_rarity_edit=$("#goods_rarity_edit").val()
                var goods_detail1_edit=$("#goods_detail1_edit").val()
                var goods_detail2_edit=$("#goods_detail2_edit").val()
                var goods_detail3_edit=$("#goods_detail3_edit").val()
                var order_id_edit=$("#order_id_edit").val()
                var service_id_edit=$("#service_id_edit").val()
                var goods_id_edit=$("#goods_id_edit").val()

				var data=new FormData();
				data.append("action_type","edit_game_item_modal");
				data.append("goods_name_edit",goods_name_edit);
                data.append("goods_quality_edit",goods_quality_edit);
                data.append("goods_rarity_edit",goods_rarity_edit);
                data.append("goods_detail1_edit",goods_detail1_edit);
                data.append("goods_detail2_edit",goods_detail2_edit);
                data.append("goods_detail3_edit",goods_detail3_edit);
                data.append("order_id_edit",order_id_edit);
                data.append("goods_id_edit",goods_id_edit);
                data.append("service_id_edit",service_id_edit);
                
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
				});
            break;
            case "dispute_item_delivered_dispute":             
                var transaction_id_dispute_seller=$("#transaction_id_dispute_seller").val()
                var dispute_title_seller=$("#dispute_title_seller").val()
                var dispute_message_seller=$("#dispute_message_seller").val()

				var data=new FormData();
				data.append("action_type","dispute_item_delivered_dispute");
				data.append("transaction_id_dispute_seller",transaction_id_dispute_seller);
                data.append("dispute_title_seller",dispute_title_seller);
                data.append("dispute_message_seller",dispute_message_seller);

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
				});
            break;
            case "kyc_services_modal": 
            var firstname_kyc=$("#firstname_kyc").val().trim();
            var middlename_kyc=$("#middlename_kyc").val().trim();
            var lastname_kyc=$("#lastname_kyc").val().trim();
            var idnumber_kyc=$("#idnumber_kyc").val().trim();
            var address_kyc=$("#address_kyc").val().trim();
            var id_kyc=$("#id_kyc").val();
            var user_session_kyc=$("#user_session_kyc").val().trim();
            var id_proof_kyc=$('#id_proof_kyc')[0].files[0];

            var data=new FormData();
            data.append("action_type","kyc_services_modal");
            data.append("firstname_kyc",firstname_kyc);
            data.append("middlename_kyc",middlename_kyc);
            data.append("lastname_kyc",lastname_kyc);
            data.append("idnumber_kyc",idnumber_kyc);
            data.append("address_kyc",address_kyc);
            data.append("id_kyc",id_kyc);
            data.append("id_proof_kyc",id_proof_kyc);
            data.append("user_session_kyc",user_session_kyc);

            $.ajax({	
                url:"account/controller.php",
                method:"post",
                data:data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(res){
                    console.log(res)
                    if(res=="Success"){
                        alert(res)
                        location.reload();
                    }else{
                        alert(res)
                    } 
                }
            });//END	
            break;
            case "add_steam_trade": 
            var trade_link=$("#trade_link").val()
           
            var data=new FormData();
            data.append("action_type","add_steam_trade");
            data.append("trade_link",trade_link);

            $.ajax({	
                url:"account/controller.php",
                method:"post",
                data:data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(res){
                    console.log(res)
                    if(res=="Success"){
                        alert(res)
                        location.reload();
                    }else{
                        alert(res)
                    } 
                }
            });//END
            break;	
            case "delete_steam_trade": 
            var data=new FormData();
            data.append("action_type","delete_steam_trade");

            $.ajax({	
                url:"account/controller.php",
                method:"post",
                data:data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(res){
                    console.log(res)
                    if(res=="Success"){
                        alert(res)
                        location.reload();
                    }else{
                        alert(res)
                    } 
                }
            });//END	
            break;	
        };	
	});	
});

