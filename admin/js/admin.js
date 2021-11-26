$('document').ready(function(){

$('#edit_new_game_modal').on('show.bs.modal', function(e){
    var game_id_b = $(e.relatedTarget).data('1');
    var steam_game_id_b = $(e.relatedTarget).data('2');
    var game_name_b = $(e.relatedTarget).data('3');
    var game_desc_b = $(e.relatedTarget).data('4');

    $(e.currentTarget).find('input[name="game_id_b"]').val(game_id_b);
    $(e.currentTarget).find('input[name="steam_game_id_b"]').val(steam_game_id_b);
    $(e.currentTarget).find('input[name="game_name_b"]').val(game_name_b);
    $(e.currentTarget).find('input[name="game_desc_b"]').val(game_desc_b);
});

$('#edit_game_services_modal').on('show.bs.modal', function(e){
    var service_id_e = $(e.relatedTarget).data('21');
    var service_mode_e = $(e.relatedTarget).data('22');
    var service_desc_e = $(e.relatedTarget).data('23');

    
    $(e.currentTarget).find('input[name="service_id_e"]').val(service_id_e);
    $(e.currentTarget).find('input[name="service_mode_e"]').val(service_mode_e);
    $(e.currentTarget).find('input[name="service_desc_e"]').val(service_desc_e);
});

$('#update_dispute_details').on('show.bs.modal', function(e){
    var transaction_id_update = $(e.relatedTarget).data('transaction_id_update');
    var dispute_id_update = $(e.relatedTarget).data('dispute_id_update');

    $(e.currentTarget).find('input[name="transaction_id_update"]').val(transaction_id_update);
    $(e.currentTarget).find('input[name="dispute_id_update"]').val(dispute_id_update);
});

$('#delete_new_game_modal').on('show.bs.modal', function(e){
    var game_id_c = $(e.relatedTarget).data('11');

    $(e.currentTarget).find('input[name="game_id_c"]').val(game_id_c);
});

$('#delete_game_services_modal').on('show.bs.modal', function(e){
    var service_id_f = $(e.relatedTarget).data('28');

    $(e.currentTarget).find('input[name="service_id_f"]').val(service_id_f);
});

$('#view_dispute_details').on('show.bs.modal', function(e){
    var transaction_id = $(e.relatedTarget).data('transaction_id');
    var transaction_amount = $(e.relatedTarget).data('transaction_amount');
    var transaction_date = $(e.relatedTarget).data('transaction_date');
    var transaction_item_name = $(e.relatedTarget).data('transaction_item_name');
    var transaction_order_type = $(e.relatedTarget).data('transaction_order_type');
    var transaction_seller = $(e.relatedTarget).data('transaction_seller');
    var transaction_buyer = $(e.relatedTarget).data('transaction_buyer');
    var transaction_service_mode = $(e.relatedTarget).data('transaction_service_mode');
    var transaction_proof = $(e.relatedTarget).data('transaction_proof');
    
    
    $('#transaction_id').html(transaction_id)
    $('#transaction_amount').html(transaction_amount)
    $('#transaction_date').html(transaction_date)
    $('#transaction_item_name').html(transaction_item_name)
    $('#transaction_order_type').html(transaction_order_type)
    $('#transaction_seller').html(transaction_seller)
    $('#transaction_buyer').html(transaction_buyer)
    $('#transaction_service').html(transaction_service_mode,"Order")
    $(e.currentTarget).find('img').attr("src",'data:image/png;base64,'+transaction_proof)
});


$(".btn").on("click",function(){
    var btn_val=$(this).val();
        switch(btn_val){
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
                url:"../account/controller.php",
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
            case "edit_new_game_modal": 
            var game_id_b=$("#game_id_b").val().trim();
            var steam_game_id_b=$("#steam_game_id_b").val().trim();
            var game_name_b=$("#game_name_b").val().trim();
            var game_desc_b=$("#game_desc_b").val().trim();
  
            var data=new FormData();
            data.append("action_type","edit_new_game_modal");
            data.append("game_id_b",game_id_b);
            data.append("steam_game_id_b",steam_game_id_b);
            data.append("game_name_b",game_name_b);
            data.append("game_desc_b",game_desc_b);

            $.ajax({	
                url:"../account/controller.php",
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
            case "delete_new_game_modal": 
            var game_id_c=$("#game_id_c").val().trim();
  
            var data=new FormData();
            data.append("action_type","delete_new_game_modal");
            data.append("game_id_c",game_id_c);

            $.ajax({	
                url:"../account/controller.php",
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
            case "add_new_service_modal": 
            var service_mode_d=$("#service_mode_d").val().trim();
            var service_desc_d=$("#service_desc_d").val().trim();
            var game_id_d=$("#game_id_d").val().trim();
  
            var data=new FormData();
            data.append("action_type","add_new_service_modal");
            data.append("service_mode_d",service_mode_d);
            data.append("service_desc_d",service_desc_d);
            data.append("game_id_d",game_id_d);

            $.ajax({	
                url:"../account/controller.php",
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
            case "edit_game_services_modal": 
            var service_id_e=$("#service_id_e").val().trim();
            var service_mode_e=$("#service_mode_e").val().trim();
            var service_desc_e=$("#service_desc_e").val().trim();
            var game_id_e=$("#game_id_e").val().trim();
  
            var data=new FormData();
            data.append("action_type","edit_game_services_modal");
            data.append("service_id_e",service_id_e);
            data.append("service_mode_e",service_mode_e);
            data.append("service_desc_e",service_desc_e);
            data.append("game_id_e",game_id_e);

            $.ajax({	
                url:"../account/controller.php",
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
            case "delete_game_services_modal": 
            var service_id_f=$("#service_id_f").val().trim();
  
            var data=new FormData();
            data.append("action_type","delete_game_services_modal");
            data.append("service_id_f",service_id_f);

            $.ajax({	
                url:"../account/controller.php",
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
            case "update_dispute_details": 
            var update_dispute_status=$("#update_dispute_status").val().trim();
            var transaction_id_update=$("#transaction_id_update").val().trim();
            var dispute_id_update=$("#dispute_id_update").val().trim();

            var data=new FormData();
            data.append("action_type","update_dispute_details");
            data.append("update_dispute_status",update_dispute_status);
            data.append("transaction_id_update",transaction_id_update);
            data.append("dispute_id_update",dispute_id_update);

            $.ajax({	
                url:"../account/controller.php",
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
            case "kyc_services_modal": 
            var firstname_kyc=$("#firstname_kyc").val().trim();
            var middlename_kyc=$("#middlename_kyc").val().trim();
            var lastname_kyc=$("#lastname_kyc").val().trim();
            var idnumber_kyc=$("#idnumber_kyc").val().trim();
            var address_kyc=$("#address_kyc").val().trim();
            var id_kyc=$("#id_kyc").val().trim();
            var id_proof_kyc=$("#id_proof_kyc").val().trim();
            var user_session_kyc=$("#user_session_kyc").val().trim();
            
            
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
                url:"../account/controller.php",
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
        }
    });
});

