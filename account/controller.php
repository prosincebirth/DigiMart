<?php 
	require 'database.php';
		if(isset($_POST['action_type'])){
			$action_type=$_POST['action_type'];
				switch($action_type){
					case "register"://TESTED
						$user_username_b=$_POST['user_username_b'];
						$user_email_b=$_POST['user_email_b'];
						$user_password_b=$_POST['user_password_b'];
						$user_password_b=password_hash($user_password_b, PASSWORD_DEFAULT); 

						if(existing_user($user_username_b) && existing_email($user_email_b)){
							echo 'both taken';
						} // if both are taken
						else if(existing_user($user_username_b)){
							echo 'user taken';
						} // if user is taken
						else if(existing_email($user_email_b)){
							echo 'email taken';
						} // if email is taken
						else{
							add_new_user($user_username_b,$user_password_b,$user_email_b);
							echo 'user added';
						} //if both are not taken, success
						break;
					case "login"://TESTED
						$user_username_a=$_POST['user_username_a'];
						$user_password_a=$_POST['user_password_a'];

						if(existing_user($user_username_a)){
							$res = login($user_username_a);
							if(password_verify($user_password_a, $res['user_password'])){	
								$_SESSION['user_session'] = $res['user_id'];
								$_SESSION['user_username'] = $res['user_username'];
								session_write_close();
								echo 'Successfuly Logged In';
								update_login($res['user_id']);
							}else{
								echo 'Wrong Password';
							}
						}else{
							echo 'Username not recognized';
						}
						break;
					case "add_new_game"://TESTED 11:56 pm , 25/10/2021
						$game_name_a=$_POST['game_name_a'];
						$game_desc_a=$_POST['game_desc_a'];
						$steam_game_id_a=$_POST['steam_game_id_a'];

						if(!empty($game_name_a) && !empty($game_desc_a) && !empty($steam_game_id_a)){
						add_new_game($game_name_a,$game_desc_a,$steam_game_id_a);
							echo 'Success';
						}else{
							echo 'Field inputs error';
						}
						break;
					case "add_new_game_service"://TESTED 11:56 pm , 25/10/2021
						$service_mode_a=$_POST['service_mode_a'];
						$service_desc_a=$_POST['service_desc_a'];
						$game_id_a=$_POST['game_id_a'];

						if(!empty($service_mode_a) && !empty($service_desc_a) && !empty($game_id_a)){
						add_game_service($service_mode_a,$service_desc_a,$game_id_a);
							echo 'Success';
						}else{
							echo 'Field inputs error';
						}
						break;	
					case "sell_game_item":
							$goods_name_a=$_POST['goods_name_a'];
							$goods_quality_a=$_POST['goods_quality_a'];
							$goods_rarity_a=$_POST['goods_rarity_a'];
							$goods_detail1_a=$_POST['goods_detail1_a'];
							$goods_detail2_a=$_POST['goods_detail2_a'];
							$goods_detail3_a=$_POST['goods_detail3_a'];
							$goods_price_a=$_POST['goods_price_a'];
							$goods_quantity_a=$_POST['goods_quantity_a'];
							$goods_image_a ="";
							if(isset($_FILES['goods_image_a'])){
							$goods_image_a=file_get_contents($_FILES['goods_image_a']['tmp_name']);}
							$order_id_a=$_POST['order_id_a'];
							$service_id_a=$_POST['service_id_a'];
							//add_new_game_item($item_price,$item_quantity,$goods_id,$user_id,$service_id,$game_id,$order_id)
							//add_new_goods($goods_name,$goods_quality,$goods_rarity,$goods_detail1,$goods_detail2,$goods_detail3,$goods_image,$game_id)
							
							if(!empty($goods_name_a) && !empty($_SESSION['user_session']) && !empty($order_id_a)  && !empty($goods_image_a) && $goods_quality_a != 'null' && $goods_rarity_a != 'null' && $goods_detail1_a != 'null' && $goods_detail2_a != 'null' && $goods_detail3_a != 'null' && $goods_price_a != 'null' && $goods_quantity_a !='null' && $order_id_a !='null' && $service_id_a !='null'){
								if($result=existing_goods($goods_name_a,$goods_quality_a,$goods_rarity_a,$goods_detail1_a,$goods_detail2_a,$goods_detail3_a,$goods_image_a,'1')){
									add_new_game_item($goods_price_a,$goods_quantity_a,$result['goods_id'],$_SESSION['user_session'],$service_id_a,'1','1');
									echo 'Success but the item is new';
								}else{
									add_new_goods($goods_name_a,$goods_quality_a,$goods_rarity_a,$goods_detail1_a,$goods_detail2_a,$goods_detail3_a,$goods_image_a,'1');
									$result=existing_goods($goods_name_a,$goods_quality_a,$goods_rarity_a,$goods_detail1_a,$goods_detail2_a,$goods_detail3_a,$goods_image_a,'1');
									add_new_game_item($goods_price_a,$goods_quantity_a,$result['goods_id'],$_SESSION['user_session'],$service_id_a,'1','1');
									echo 'Success but the item is already'; 
								}
							}else{
								echo 'Empty fields'; // input is lacking , wrong inputs
							}
						

							break;			
					case "sell_game_item_2":
								$goods_id=$_POST['goods_id'];
								$item_pricex=$_POST['item_pricex']; 
								$seller_id=$_POST['user_id'];
								$service_idx=$_POST['service_idx'];
								//order_id = 1 ;
									if(!empty($item_pricex) && $service_idx != 'null' && $service_idx != 'NULL'){
										$res=sale_game_modal_2($goods_id);
										add_new_game_item($res['item_name'],$goods_id,$res['item_quality'],$res['item_rarity'],$res['item_detail1'],$res['item_detail2'],$res['item_detail3'],$item_pricex,$res['item_image'],$seller_id,$service_idx,1,1);
										echo 'Success'; // success posting item on item page , copying same attribute of the item rather than inputing everything 
									}else{
										echo 'Failed'; // Wrong input , Empty input
									}


								break;

					case "buy_game_item":
								$item_ida=$_POST['item_ida'];
								$buyer_id=$_POST['buyer_id'];
								$seller_id=$_POST['seller_id'];
								$service_ida=$_POST['service_ida'];
								$item_pricea=$_POST['item_pricea'];
								$game_id=$_POST['game_id'];
								$order_id=$_POST['order_id'];
								

								if(empty($buyer_id)){ // trappings for not logged in
									echo 'Please Login';
								}
								else if($buyer_id == $seller_id){ // cannot buy your own game 
									echo 'You cannot buy your game ';
								}
								//else if{ for balance trappings , // cannot buy because the balance is insufficient
								//}
								else{
									add_transaction("SALE ORDER",$item_pricea,$item_ida,$buyer_id,$seller_id,$service_ida,$order_id);
									echo 'success '; // success not buying his own posting
								} 
							

								break;											
								
				}
			}
?>