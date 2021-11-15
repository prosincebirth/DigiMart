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

$('#delete_new_game_modal').on('show.bs.modal', function(e){
    var game_id_c = $(e.relatedTarget).data('11');

    $(e.currentTarget).find('input[name="game_id_c"]').val(game_id_c);
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
            var game_id_b=$("#game_id_b").val().trim();
  
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
        }
    });
});

