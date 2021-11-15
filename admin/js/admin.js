$('document').ready(function()
{


$('#cancel_buy_order_modal').on('show.bs.modal', function(e) {
    var game_id_b = $(e.relatedTarget).data('game_id_b');
    var game_name_b = $(e.relatedTarget).data('game_name_b');
    var game_desc_b = $(e.relatedTarget).data('game_desc_b');

    $(e.currentTarget).find('input[name="game_id_b"]').val(game_id_b);
    $(e.currentTarget).find('input[name="game_name_b"]').val(game_name_b);
    $(e.currentTarget).find('input[name="game_desc_b"]').val(game_desc_b);
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

        }
    });
});

