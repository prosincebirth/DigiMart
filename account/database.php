<?php 
	 if(!isset($_SESSION)){
		session_start();}

//////////////// DB /////////////////
    function connection(){// DB CONNECTION PDO
		$conn=new PDO("mysql:host=localhost;dbname=digimart","root","");
		return $conn;}

	function connection2(){// DB CONNECTION MYSQL
		$conn= mysqli_connect("localhost", "root", "", "digimart");
		return $conn;}	
	
	function add_steam_trade_link($user_id,$trade_link){
		$conn=connection();
		$query="UPDATE users set user_steam_trade_link=:trade_link where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id,":trade_link"=>$trade_link));
		$conn=null;}

	 function delete_steam_trade_link($user_id){
		$conn=connection();
		$query="UPDATE users set user_steam_trade_link='' where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id));
		$conn=null;}

	function delete_steam_link($user_id){
		$conn=connection();
		$query="UPDATE users set user_steam_id='' where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id));
		$conn=null;}		

		////////////////// ADDD FUNCTIONS /////////////////
	function add_new_user($user_username,$user_password,$user_email,$user_steam_id,$user_steam_trade_link){//register.php
		$conn=connection();
		$query="INSERT INTO users(user_username,user_password,user_email,user_steam_id,user_steam_trade_link) values(:user_username,:user_password,:user_email,:user_steam_id,:user_steam_trade_link)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_username"=>$user_username,":user_password"=>$user_password,":user_email"=>$user_email,":user_steam_id"=>$user_steam_id,":user_steam_trade_link"=>$user_steam_trade_link));
		$conn=null;}

	function add_new_dispute($transaction_id,$dispute_title,$dispute_message){//register.php
		$conn=connection();
		$query="INSERT INTO disputes(dispute_title,dispute_message,transaction_id) values(:dispute_title,:dispute_message,:transaction_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":dispute_title"=>$dispute_title,":dispute_message"=>$dispute_message,":transaction_id"=>$transaction_id));
		$conn=null;}
		
	function add_new_kyc($firstname_kyc,$middlename_kyc,$lastname_kyc,$idnumber_kyc,$address_kyc,$id_kyc,$id_proof_kyc,$user_session_kyc){//register.php
		$conn=connection();
		$query="INSERT INTO kyc_verification(firstname_kyc,middlename_kyc,lastname_kyc,idnumber_kyc,address_kyc,id_kyc,id_proof_kyc,user_session_kyc) values(:firstname_kyc,:middlename_kyc,:lastname_kyc,:idnumber_kyc,:address_kyc,:id_kyc,:id_proof_kyc,:user_session_kyc)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":firstname_kyc"=>$firstname_kyc,":middlename_kyc"=>$middlename_kyc,":lastname_kyc"=>$lastname_kyc,":idnumber_kyc"=>$idnumber_kyc,":address_kyc"=>$address_kyc,":id_kyc"=>$id_kyc,":id_proof_kyc"=>$id_proof_kyc,":user_session_kyc"=>$user_session_kyc));
		$conn=null;}	
		
	function insert_deposit_info($amount,$crt_date,$deposit_method,$name,$mobile,$user_id){
		$conn=connection();
		$query="INSERT INTO deposit(deposit_amt,deposit_date_created,deposit_method,deposit_name,deposit_number,user_id) values(:deposit_amt,:deposit_date_created,:deposit_method,:deposit_name,:deposit_number,:user_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":deposit_amt"=>$amount,":deposit_date_created"=>$crt_date,":deposit_method"=>$deposit_method,":deposit_name"=>$name,":deposit_number"=>$mobile,":user_id"=>$user_id));
		$conn=null;}

	function insert_withdraw_info($amount_with,$crt_date,$withdraw_method,$mobile_with,$user_id){
		$conn=connection();
		$query="INSERT INTO withdraw(withdraw_amt,withdraw_date_created,withdraw_method,withdraw_number,user_id) values(:withdraw_amt,:withdraw_date_created,:withdraw_method,:withdraw_number,:user_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":withdraw_amt"=>$amount_with,":withdraw_date_created"=>$crt_date,":withdraw_method"=>$withdraw_method,":withdraw_number"=>$mobile_with,":user_id"=>$user_id));
		$conn=null;}

	function update_deposit_wallet_balance($user_id,$total){
		$conn=connection();
		$query="UPDATE wallets set wallet_balance=wallet_balance+:total where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id,":total"=>$total));
		$conn=null;}

	function update_withdraw_wallet_balance($user_id,$total){
		$conn=connection();
		$query="UPDATE wallets set wallet_balance=wallet_balance-:total where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id,":total"=>$total));
		$conn=null;}
		
	function existing_kyc_request($user_session_kyc){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT * from kyc_verification where user_session_kyc=$user_session_kyc limit 1";
		$result = $conn->query($sql);
		return $result;}

	function user_kyc_status($user_session_kyc){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT * from users where user_id=$user_session_kyc limit 1";
		$result = $conn->query($sql);
		return $result;}
		
	function update_user_kyc($user_id){
		$conn=connection();
		$query="UPDATE users set user_kyc=1 where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id));
		$conn=null;}
		

	function add_notification($notification_message,$user_id){//register.php
		$conn=connection();
		$query="INSERT INTO notification(notification_message,user_id) values(:notification_message,:user_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":notification_message"=>$notification_message,":user_id"=>$user_id));
		$conn=null;}			


	function add_new_game($game_name,$game_desc,$steam_game_id_a){// ADD GAME // ADD_GAME_GAME_MODAL // TESTED 11:56 pm , 25/10/2021
		$conn=connection();
		$query="INSERT INTO games(game_name,game_desc,steam_game_id) values(:game_name,:game_desc,:steam_game_id_a)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_name"=>$game_name,":game_desc"=>$game_desc,":steam_game_id_a"=>$steam_game_id_a));
		$conn=null;}	
	
	function add_game_service($service_mode,$service_desc,$game_id){ // ADD GAME service // add_services_modal // TESTED 9:26 pm , 29/10/2021
		$conn=connection();
		$query="INSERT INTO game_services(service_mode,service_desc,game_id) values(:service_mode,:service_desc,:game_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":service_mode"=>$service_mode,":service_desc"=>$service_desc,":game_id"=>$game_id));
		$conn=null;}	

	function add_new_game_item($item_price,$item_quantity,$goods_id,$user_id,$service_id,$game_id,$order_id){
		$conn=connection();
		$query="INSERT INTO game_items(item_price,item_quantity,goods_id,user_id,service_id,game_id,order_id) values(:item_price,:item_quantity,:goods_id,:user_id,:service_id,:game_id,:order_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_price"=>$item_price,":item_quantity"=>$item_quantity,":goods_id"=>$goods_id,":user_id"=>$user_id,":service_id"=>$service_id,":game_id"=>$game_id,":order_id"=>$order_id));
		$conn=null;}

	function add_new_goods($goods_name,$goods_quality,$goods_rarity,$goods_detail_1,$goods_detail_2,$goods_detail_3,$goods_image,$game_id){	
		$conn=connection();
		$query="INSERT INTO goods(goods_name,goods_quality,goods_rarity,goods_detail_1,goods_detail_2,goods_detail_3,goods_image,game_id) values(:goods_name,:goods_quality,:goods_rarity,:goods_detail_1,:goods_detail_2,:goods_detail_3,:goods_image,:game_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":goods_name"=>$goods_name,":goods_quality"=>$goods_quality,":goods_rarity"=>$goods_rarity,":goods_detail_1"=>$goods_detail_1,":goods_detail_2"=>$goods_detail_2,":goods_detail_3"=>$goods_detail_3,":goods_image"=>$goods_image,":game_id"=>$game_id));
		$conn=null;}
		
	function add_item_goods_id($item_id){
		$conn=connection();
		$query="UPDATE game_items SET goods_id = item_id * 2 WHERE game_items.item_id = :item_id";		
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id));
		$conn=null;}

	function existing_item_goods_id($item_id,$goods_id){
		$conn=connection();
		$query="UPDATE game_items SET goods_id = :goods_id WHERE game_items.item_id = :item_id";		
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id,":goods_id"=>$goods_id));
		$conn=null;}	

	function add_transaction($transaction_quantity,$transaction_amount,$item_id,$buyer_id,$seller_id,$service_id,$game_id,$order_id){//item-goods.php
		$conn=connection();
		$query="INSERT INTO transactions(transaction_quantity,transaction_amount,item_id,buyer_id,seller_id,service_id,game_id,order_id) values(:transaction_quantity,:transaction_amount,:item_id,:buyer_id,:seller_id,:service_id,:game_id,:order_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_quantity"=>$transaction_quantity,":transaction_amount"=>$transaction_amount,":item_id"=>$item_id,":buyer_id"=>$buyer_id,":seller_id"=>$seller_id,":service_id"=>$service_id,":game_id"=>$game_id,":order_id"=>$order_id));
		$conn=null;}

    function add_wallet($user_id){
		$conn=connection();
		$query="INSERT INTO wallets(user_id) values(:user_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id));
		$conn=null;}

		////////////////////////TRAPPINGS//////////////////////////////MESC///////////////////
	function existing_email($user_email){ //USER
		$conn=connection();
		$query="SELECT user_email from users where user_email=:user_email";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_email"=>$user_email));
		$res=$prepare->rowcount();
		$conn=null;
		return $res;}

	function existing_user($user_username){//user
		$conn=connection();
		$query="SELECT user_username from users where user_username=:user_username";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_username"=>$user_username));
		$res=$prepare->rowcount();
		$conn=null;
		return $res;}

	function is_verified($user_id){//USED IN POST SALE
		$conn=connection();
		$query="SELECT * from users where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function get_wallet_balance($user_id){//USED IN POST SALE
		$conn=connection();
		$query="SELECT * from wallets where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}
	
	function update_frozen_balance($user_id,$total){
		$conn=connection();
		$query="UPDATE wallets set wallet_balance=wallet_balance-:total,wallet_frozen_balance=wallet_frozen_balance+:total where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id,":total"=>$total));
		$conn=null;}

	function update_wallet_balance($user_id,$total){
		$conn=connection();
		$query="UPDATE wallets set wallet_balance=wallet_balance+:total,wallet_frozen_balance=wallet_frozen_balance-:total where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id,":total"=>$total));
		$conn=null;}

	function send_wallet_balance($user_id,$total){
		$conn=connection();
		$query="UPDATE wallets set wallet_balance=wallet_balance+:total where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id,":total"=>$total));
		$conn=null;}
	
	function deduct_wallet_balance($user_id,$total){
		$conn=connection();
		$query="UPDATE wallets set wallet_frozen_balance=wallet_frozen_balance-:total where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id,":total"=>$total));
		$conn=null;}	
		
	function get_user_password($user_id){
		$conn=connection();
		$query="SELECT * from users where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}
	
	function change_user_password($user_id,$hash_password){
		$conn=connection();
		$query="UPDATE users set user_password=:user_password where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id,":user_password"=>$hash_password));
		$conn=null;}
		
	

	function existing_goods($goods_name,$goods_quality,$goods_rarity,$goods_detail_1,$goods_detail_2,$goods_detail_3,$goods_image,$game_id){//USED IN POST SALE
		$conn=connection();
		$query="SELECT * from goods where goods_name=:goods_name and goods_quality=:goods_quality and goods_rarity=:goods_rarity and goods_detail_1=:goods_detail_1 and goods_detail_2=:goods_detail_2 and goods_detail_3=:goods_detail_3 and goods_image=:goods_image and game_id=:game_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":goods_name"=>$goods_name,":goods_quality"=>$goods_quality,":goods_rarity"=>$goods_rarity,":goods_detail_1"=>$goods_detail_1,":goods_detail_2"=>$goods_detail_2,":goods_detail_3"=>$goods_detail_3,":goods_image"=>$goods_image,":game_id"=>$game_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function existing_game_items($goods_id,$user_id,$order_id){//USED IN POST SALE
		$conn=connection();
		$query="SELECT * from game_items where goods_id=:goods_id and user_id=:user_id and item_status=1 and order_id=:order_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":goods_id"=>$goods_id,":user_id"=>$user_id,":order_id"=>$order_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}
	
	function existing_transaction($item_id,$buyer_id,$order_id){//USED IN POST SALE
		$conn=connection();
		$query="SELECT * from transactions where item_id=:item_id and buyer_id=:buyer_id and order_id=:order_id and transaction_status=1";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id,":buyer_id"=>$buyer_id,":order_id"=>$order_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}
		
	function existing_transaction_seller($item_id,$seller_id,$order_id){//USED IN POST SALE
			$conn=connection();
			$query="SELECT * from transactions where item_id=:item_id and seller_id=:seller_id and order_id=:order_id and transaction_status=1";
			$prepare=$conn->prepare($query);
			$exec=$prepare->execute(array(":item_id"=>$item_id,":seller_id"=>$seller_id,":order_id"=>$order_id));
			$res = $prepare->fetch(PDO::FETCH_ASSOC);
			$conn=null;
			return $res;}	

	function existing_kyc_req($user_id){//USED IN POST SALE
			$conn=connection();
			$query="SELECT * from transactions where user_id=:user_id and transaction_status=1";
			$prepare=$conn->prepare($query);
			$exec=$prepare->execute(array(":user_id"=>$user_id));
			$res = $prepare->fetch(PDO::FETCH_ASSOC);
			$conn=null;
			return $res;}	

	function sale_game_modal_2($goods_id){
		$conn=connection();
		$query="SELECT * from game_items where goods_id=:goods_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":goods_id"=>$goods_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function login($user_username){//user
		$conn=connection();
		$query="SELECT * from users where user_username=:user_username";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_username"=>$user_username));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function update_login($user_id){//update last login status/login.php
		$conn=connection2();
		$query="UPDATE users SET last_login_date = current_timestamp() WHERE users.user_id = $user_id";
		$prepare=$conn->query($query);
		$conn=null;}

///////////////////UPDATE FUNCTIIONS/////////////////////////////////
	function edit_game($game_id,$game_name,$game_desc,$steam_game_id){
		$conn=connection();
		$query="UPDATE games set game_name=:game_name,steam_game_id=:steam_game_id,game_desc=:game_desc where game_id=:game_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_name"=>$game_name,":game_desc"=>$game_desc,":game_id"=>$game_id,":steam_game_id"=>$steam_game_id));
		$conn=null;}
	
	function edit_user(){}
	function edit_user_password(){}
	function edit_game_service($service_id,$service_mode,$service_desc,$game_id){
		$conn=connection();
		$query="UPDATE game_services set service_mode=:service_mode,service_desc=:service_desc,game_id=:game_id where service_id=:service_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_id"=>$game_id,":service_desc"=>$service_desc,":service_mode"=>$service_mode,":service_id"=>$service_id));
		$conn=null;}

	function edit_game_item(){}
///////////////////UPDATE FUNCTIIONS CONFIRMATION/////////////////////////////////
 	function update_item_delivery($transaction_id,$user_id,$image){
		$conn=connection();
		$query="UPDATE transactions set transaction_status=4,transaction_proof=:image where transaction_id=:transaction_id and seller_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id,":user_id"=>$user_id,":image"=>$image));
		$conn=null;}

	function update_item_confirmation($transaction_id,$user_id){
		$conn=connection();
		$query="UPDATE transactions set transaction_status=0 where transaction_id=:transaction_id and buyer_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id,":user_id"=>$user_id));
		$conn=null;}


	function cancel_buy_order($item_id,$user_id){
		$conn=connection();
		$query="UPDATE game_items set item_status=2 where item_id=:item_id and user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id,":user_id"=>$user_id));
		$conn=null;}
	
	function cancel_bargain_order($transaction_id,$user_id){
		$conn=connection();
		$query="UPDATE transactions set transaction_status=6 where transaction_id=:transaction_id and buyer_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id,":user_id"=>$user_id));
		$conn=null;}
	
	function item_not_received_dispute($transaction_id){
		$conn=connection();
		$query="UPDATE transactions set transaction_status=14 where transaction_id=:transaction_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id));
		$conn=null;}
	
	function item_delivered_dispute($transaction_id){
		$conn=connection();
		$query="UPDATE transactions set transaction_status=13 where transaction_id=:transaction_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id));
		$conn=null;}
	
	function item_update_dispute($transaction_id,$refunded){
		$conn=connection();
		$query="UPDATE transactions set transaction_status=:refunded where transaction_id=:transaction_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id,":refunded"=>$refunded));
		$conn=null;}

	function update_dispute_id($dispute_id){
		$conn=connection();
		$query="UPDATE disputes set dispute_status=0 where dispute_id=:dispute_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":dispute_id"=>$dispute_id));
		$conn=null;}
		

	function cancel_sale_order_nn($transaction_id,$user_id){
		$conn=connection();
		$query="UPDATE transactions set transaction_status=5 where transaction_id=:transaction_id and seller_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id,":user_id"=>$user_id));
		$conn=null;}	

	function cancel_sale_order($item_id,$user_id){
		$conn=connection();
		$query="UPDATE game_items set item_status=2 where item_id=:item_id and user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id,":user_id"=>$user_id));
		$conn=null;}	
	
	function accept_buy_order($transaction_id,$user_id){
		$conn=connection();
		$query="UPDATE transactions set transaction_status=3 where transaction_id=:transaction_id and buyer_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id,":user_id"=>$user_id));
		$conn=null;}

	function accept_sale_order($transaction_id,$user_id){
		$conn=connection();
		$query="UPDATE transactions set transaction_status=3 where transaction_id=:transaction_id and seller_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id,":user_id"=>$user_id));
		$conn=null;}	

	function update_buy_order_item_quantity($item_id,$item_quantity){
		$conn=connection();
		$query="UPDATE game_items set item_quantity=item_quantity-:item_quantity where item_id=:item_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id,":item_quantity"=>$item_quantity));
		$conn=null;}

	function update_buy_order_item_quantity_out_of_stock($item_id){//SET TO ITEM INACTIVE
		$conn=connection();
		$query="UPDATE game_items set item_status=12,item_quantity=0 where item_id=:item_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id));
		$conn=null;}
		
	function update_sale_order_item_quantity($item_id,$item_quantity){
		$conn=connection();
		$query="UPDATE game_items set item_quantity=item_quantity-:item_quantity where item_id=:item_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id,":item_quantity"=>$item_quantity));
		$conn=null;}

	function update_sale_order_item_quantity_out_of_stock($item_id){//SET TO ITEM INACTIVE
		$conn=connection();
		$query="UPDATE game_items set item_status=12,item_quantity=0 where item_id=:item_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id));
		$conn=null;}	
	
	function update_game_quantity_reject($item_id,$item_amount){
		$conn=connection();
		$query="UPDATE game_items set item_quantity=item_quantity+:item_amount where item_id=:item_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id,":item_amount"=>$item_amount));
		$conn=null;}	
	
	function update_transaction_buy_order($transaction_id){
		$conn=connection();
		$query="UPDATE transactions set transaction_status=6 where transaction_id=:transaction_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id));
		$conn=null;}

	function update_transaction_sale_order($transaction_id){
		$conn=connection();
		$query="UPDATE transactions set transaction_status=5 where transaction_id=:transaction_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id));
		$conn=null;}	
	
	function update_goods_item_name($goods_id,$goods_name,$goods_quality,$goods_rarity,$goods_detail_1,$goods_detail_2,$goods_detail_3){
		$conn=connection();
		$query="UPDATE goods set goods_name=:goods_name,goods_quality=:goods_quality,goods_rarity=:goods_rarity,goods_detail_1=:goods_detail_1,goods_detail_2=:goods_detail_2,goods_detail_3=:goods_detail_3,goods_detail_3=:goods_detail_3 where goods_id=:goods_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":goods_id"=>$goods_id,":goods_name"=>$goods_name,":goods_quality"=>$goods_quality,":goods_rarity"=>$goods_rarity,":goods_detail_1"=>$goods_detail_1,":goods_detail_2"=>$goods_detail_2,":goods_detail_3"=>$goods_detail_3,));
		$conn=null;}
		
	function update_game_item_name($goods_id,$goods_name,$goods_quality,$goods_rarity,$goods_detail_1,$goods_detail_2,$goods_detail_3,$service_id){
		$conn=connection();
		$query="UPDATE goods set goods_name=:goods_name,goods_quality=:goods_quality,goods_rarity=:goods_rarity,goods_detail_1=:goods_detail_1,goods_detail_2=:goods_detail_2,goods_detail_3=:goods_detail_3,goods_detail_3=:goods_detail_3 where goods_id=:goods_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":goods_id"=>$goods_id,":goods_name"=>$goods_name,":goods_quality"=>$goods_quality,":goods_rarity"=>$goods_rarity,":goods_detail_1"=>$goods_detail_1,":goods_detail_2"=>$goods_detail_2,":goods_detail_3"=>$goods_detail_3,));
		$conn=null;}

	
///////////////////////DELETE FUNCTIONS///////////////////////////////// 
	function delete_game($game_id){
		$conn=connection();
		$query="UPDATE games set game_status=0 where game_id=:game_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_id"=>$game_id));
		$conn=null;}
	
	function delete_game_services($service_id){
		$conn=connection();
		$query="UPDATE game_services set service_status=0 where service_id=:service_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":service_id"=>$service_id));
		$conn=null;}	

	function delete_user($user_id){
		$conn=connection();
		$query="UPDATE users set user_status=0 where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id));
		$conn=null;	}

	function delete_game_service($service_id){
		$conn=connection();
		$query="UPDATE game_services set service_status=0 where service_id=:service_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":service_id"=>$service_id));
		$conn=null;}

	function delete_game_item($item_id){
		$conn=connection();
		$query="UPDATE game_items set item_status=0 where item_id=:item_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id));
		$conn=null;}

/////////////////////////////////////////////////////////////////////
	function display_sale_order($user_id,$game_id,$search){
		$conn=connection2();
		$sql="SELECT *,(select user_username from users where user_id=a.buyer_id ) as buyer_name,(select order_id from orders where order_id=a.order_id ) as transaction_order_id,
		(select user_steam_id from users where user_id=a.buyer_id ) as buyer_steam_profile_link,(select user_steam_trade_link from users where user_id=a.buyer_id ) as buyer_steam_trade_link
		from transactions a join game_items b join goods c join users d where c.goods_name LIKE '%".$search."%' and a.item_id = b.item_id 
		AND b.goods_id = c.goods_id AND a.seller_id = $user_id and a.buyer_id != $user_id AND d.user_id = $user_id 
		AND a.game_id=$game_id AND 
		a.transaction_status!=0 AND a.transaction_status!=2 AND a.transaction_status!=5 AND
		a.transaction_status!=6 AND a.transaction_status!=7 AND a.transaction_status!=8 AND
		a.transaction_status!=10 AND a.transaction_status!=11 AND a.transaction_status!=12 AND a.transaction_status!=13 AND a.transaction_status!=14
		ORDER BY a.transaction_date DESC";
		$result = $conn->query($sql);
		return $result;}
	
	function display_balance($user_id){
		$conn=connection2();
		$sql="SELECT * from wallets where user_id=$user_id";
		$result = $conn->query($sql);
		return $result;}
	

	function display_sale_order_records($user_id,$game_id,$search){
		$conn=connection2();
		$sql="SELECT *,(select user_username from users where user_id=a.buyer_id ) as buyer_name,(select order_id from orders where order_id=a.order_id ) as transaction_order_id from transactions a join game_items b join goods c 
		where c.goods_name LIKE '%".$search."%' and a.item_id=b.item_id and b.goods_id = c.goods_id and a.buyer_id!=$user_id and a.seller_id = $user_id and a.game_id=$game_id and
		a.transaction_status!=1 and a.transaction_status!=3 and a.transaction_status!=4 ORDER BY a.transaction_date desc";		
		$result = $conn->query($sql);
		return $result;}			
	
	function display_my_sale_order($user_id,$game_id,$search){
		$conn=connection2();
		$sql="SELECT  * from game_items a join goods b where b.goods_name LIKE '%".$search."%' and a.goods_id=b.goods_id and a.user_id=$user_id and a.order_id=1 and a.game_id=$game_id and a.item_status!=0 ORDER BY a.item_status ASC";
		$result = $conn->query($sql);
		return $result;}
		

	function display_my_bargain_orders($user_id){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT *,(select user_username from users where user_id=a.seller_id ) as seller_name from transactions a join game_items b join goods c join users d where a.buyer_id=$user_id and a.seller_id !=$user_id and d.user_id = $user_id and a.order_id = 3 and a.transaction_status = 1 and a.item_id = b.item_id and b.goods_id=c.goods_id ORDER BY a.transaction_status ASC";
		$result = $conn->query($sql);
		return $result;}

	function display_bargain_orders_records($user_id,$game_id,$search){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT *,(select user_username from users where user_id=a.seller_id ) as seller_name,(select order_id from orders where order_id=a.order_id ) as transaction_order_id from transactions a join game_items b join goods c 
		where c.goods_name LIKE '%".$search."%' and a.item_id=b.item_id and b.goods_id = c.goods_id and a.buyer_id=$user_id and a.seller_id != $user_id and a.game_id=$game_id and a.order_id = 3 and 
		a.transaction_status!=1 and a.transaction_status!=3 and a.transaction_status!=4 ORDER BY a.transaction_date desc";			
		$result = $conn->query($sql);
		return $result;}
	
	function display_buy_orders($user_id,$game_id,$search){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT *,(select user_username from users where user_id=a.seller_id ) as seller_name,(select order_id from orders where order_id=a.order_id ) as transaction_order_id,
		(select user_steam_id from users where user_id=a.seller_id ) as seller_steam_profile_link,(select user_steam_trade_link from users where user_id=a.seller_id ) as seller_steam_trade_link
		from transactions a join game_items b join goods c 
		where c.goods_name LIKE '%".$search."%' and a.item_id = b.item_id AND b.goods_id = c.goods_id AND a.buyer_id = $user_id AND a.seller_id != $user_id  AND a.game_id=$game_id and a.order_id != 3 and 
		a.transaction_status!=0 AND a.transaction_status!=2 AND a.transaction_status!=5 AND
		a.transaction_status!=6 AND a.transaction_status!=7 AND a.transaction_status!=8 AND
		a.transaction_status!=10 AND a.transaction_status!=11 AND a.transaction_status!=12 AND a.transaction_status!=13 AND a.transaction_status!=14
		ORDER BY a.transaction_date DESC";
		$result = $conn->query($sql);
		return $result;}
	
	function display_bargain_orders($user_id,$game_id,$search){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT *,(select user_username from users where user_id=a.seller_id ) as seller_name,(select order_id from orders where order_id=a.order_id ) as transaction_order_id from transactions a join game_items b join goods c 
		where c.goods_name LIKE '%".$search."%' and a.item_id = b.item_id AND b.goods_id = c.goods_id AND a.buyer_id = $user_id AND a.seller_id != $user_id  AND a.game_id=$game_id and a.order_id = 3 and 
		a.transaction_status!=0 AND a.transaction_status!=2 AND a.transaction_status!=5 AND
		a.transaction_status!=6 AND a.transaction_status!=7 AND a.transaction_status!=8 AND
		a.transaction_status!=10 AND a.transaction_status!=11 AND a.transaction_status!=12 AND a.transaction_status!=13 AND a.transaction_status!=14
		ORDER BY a.transaction_date DESC";
		$result = $conn->query($sql);
		return $result;}
		
	function kyc_status_check_user($user_id){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$query="SELECT user_kyc from users where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_id"=>$user_id));
		$conn=null;}
		
	function display_mybuy_orders($user_id,$game_id,$search){ //MY_BUYORDER.PHP
		$conn=connection2();
		$sql="SELECT  * from game_items a join goods b where b.goods_name LIKE '%".$search."%' and a.goods_id=b.goods_id and a.user_id=$user_id and a.order_id=2 and a.game_id=$game_id and a.item_status!=0 ORDER BY a.item_status ASC";
		$result = $conn->query($sql);
		return $result;}

	function display_buy_orders_admin(){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT  * from game_items a join goods b join game_services c join games d join users e where a.goods_id=b.goods_id and a.order_id=2 and a.game_id=d.game_id and a.service_id = c.service_id and a.user_id=e.user_id and a.item_status != 0 ORDER BY a.item_id ASC";
		$result = $conn->query($sql);
		return $result;}
	
	function display_dispute_admin(){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT  *,(select order_desc from orders where order_id=b.order_id ) as transaction_order_id,(select service_mode from game_services where service_id=b.service_id ) as transaction_service_id,
		(select user_username from users where user_id=b.seller_id ) as seller_name,(select user_username from users where user_id=b.buyer_id ) as buyer_name
		from disputes a join transactions b join game_items c join goods d
		where a.transaction_id = b.transaction_id and b.item_id = c.item_id AND c.goods_id = d.goods_id 
		ORDER BY a.dispute_date_created ASC";
		$result = $conn->query($sql);
		return $result;}

	function display_kyc_verification_admin(){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT * from kyc_verification a join users b where b.user_id=a.user_session_kyc order by a.kyc_id desc";
		$result = $conn->query($sql);
		return $result;}

	function update_kyc_status($kyc_id,$kyc_status){
		$conn=connection();
		$query="UPDATE kyc_Verification set kyc_status=:kyc_status where kyc_id=:kyc_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":kyc_status"=>$kyc_status,":kyc_id"=>$kyc_id));
		$conn=null;}

	function update_account_kyc_status($user_id,$update_kyc_status){
		$conn=connection();
		$query="UPDATE users set user_kyc=:update_kyc_status where user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":update_kyc_status"=>$update_kyc_status,":user_id"=>$user_id));
		$conn=null;}	


	function display_sale_orders_admin(){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT  * from game_items a join goods b join game_services c join games d join users e where a.goods_id=b.goods_id and a.order_id=1 and a.game_id=d.game_id and a.service_id = c.service_id and a.user_id=e.user_id and a.item_status != 0 ORDER BY a.item_id ASC";
		$result = $conn->query($sql);
		return $result;}

	function display_users_admin(){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT  * from users where user_status !=2 order by user_id";
		$result = $conn->query($sql);
		return $result;}	

	
	function display_sales_records_admin(){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT *,(select user_username from users where user_id=a.seller_id ) as seller_name,(select user_username from users where user_id=a.buyer_id ) as buyer_name from transactions a join game_items b join goods c join games d join game_services e join orders f
		where a.item_id = b.item_id AND
        b.goods_id = c.goods_id AND 
        a.game_id=d.game_id and 
        a.service_id=e.service_id and
		a.order_id = f.order_id and a.transaction_status=0
        ORDER BY a.transaction_id ASC";
		$result = $conn->query($sql);
		return $result;}
		
	function display_transaction_records_admin(){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT *,(select user_username from users where user_id=a.seller_id ) as seller_name,(select user_username from users where user_id=a.buyer_id ) as buyer_name from transactions a join game_items b join goods c join games d join game_services e join orders f
		where a.item_id = b.item_id AND
        b.goods_id = c.goods_id AND 
        a.game_id=d.game_id and 
        a.service_id=e.service_id and
		a.order_id = f.order_id 
        ORDER BY a.transaction_id ASC";
		$result = $conn->query($sql);
		return $result;}
		

	function display_buy_order_records($user_id,$game_id,$search){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT *,(select user_username from users where user_id=a.seller_id ) as seller_name,(select order_id from orders where order_id=a.order_id ) as transaction_order_id from transactions a join game_items b join goods c 
		where c.goods_name LIKE '%".$search."%' and a.item_id=b.item_id and b.goods_id = c.goods_id and a.buyer_id=$user_id and a.seller_id != $user_id and a.game_id=$game_id and a.order_id != 3 and 
		a.transaction_status!=1 and a.transaction_status!=3 and a.transaction_status!=4 ORDER BY a.transaction_date desc";		
		$result = $conn->query($sql);
		return $result;}		

	function display_all_games(){
		$conn=connection2();
		$sql="SELECT * from games where game_status=1";
		$result = $conn->query($sql);
		return $result;}		
	
	function display_all_services(){
		$conn=connection2();
		$sql="SELECT *,(select game_name from games where game_id=a.game_id) as game_name from game_services a where service_status=1";
		$result = $conn->query($sql);
		return $result;}	
	

	function display_wallet_balance($user_id){
		$conn=connection2();
		$sql="SELECT * FROM wallets where user_id=$userid";
		$result = $conn->query($sql);
		return $result;}
	

	function display_goods($goods_id){//items-goods.php
		$conn=connection();
		$query="SELECT *,MIN(b.item_price) as lowest_price FROM goods a join game_items b WHERE a.goods_id = :goods_id and a.goods_id=b.goods_id and b.item_status=1 and b.order_id=1 ORDER BY lowest_price";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":goods_id"=>$goods_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function display_game_category($game_id){//items-goods.php
		$conn=connection();
		$query="SELECT * FROM goods_category where game_id=:game_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_id"=>$game_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	
	function display_goods_buy_order($goods_id){
		$conn=connection2();
		$query="SELECT * from game_items a join goods b join game_services c join users d where a.goods_id = b.goods_id and a.user_id=d.user_id and d.user_status=1 and a.service_id = c.service_id and a.item_status=1 and a.goods_id = $goods_id and a.order_id=2 ORDER BY a.item_price ASC";
		$result = $conn->query($query);
		return $result;}
		
	function display_goods_sell_order($goods_id){
		$conn=connection2();
		$query="SELECT * from game_items a join goods b join game_services c join users d where a.goods_id = b.goods_id and a.user_id=d.user_id and d.user_status=1 and a.service_id = c.service_id and a.item_status=1 and a.goods_id = $goods_id and a.order_id=1 ORDER BY a.item_price ASC";
		$result = $conn->query($query);
		return $result;}

	function display_goods_trade_record($goods_id){
		$conn=connection2();
		$query="SELECT * from transactions a join orders b join game_items c join goods d where a.item_id = c.item_id and c.goods_id = $goods_id and a.transaction_status=0 and a.order_id=b.order_id and c.goods_id = d.goods_id ORDER BY a.transaction_date ASC";
		$result = $conn->query($query);
		return $result;}		
		
	function display_item($limit){//global-market.php
		$conn=connection2();
		$sql="SELECT *,count(b.item_id) as mycount,MIN(b.item_price) as lowest_price from goods a inner JOIN game_items b where b.goods_id=a.goods_id group by a.goods_id order by mycount desc LIMIT $limit";
		$result = $conn->query($sql);
		return $result;}
	
	function display_item_newly_listed($limit){//global-market.php
		$conn=connection2();
		$sql="SELECT *,count(b.item_id) as mycount,MIN(b.item_price) as lowest_price from goods a inner JOIN game_items b where b.goods_id=a.goods_id group by a.goods_id order by item_date_added DESC LIMIT $limit";
		$result = $conn->query($sql);
		return $result;}
	
	function display_item_buy_orders($limit){//global-market.php
		$conn=connection2();
		$sql="SELECT *,count(b.item_id) as mycount,MIN(b.item_price) as lowest_price from goods a inner JOIN game_items b where b.goods_id=a.goods_id and b.order_id=2 group by a.goods_id order by lowest_price DESC LIMIT $limit";
		$result = $conn->query($sql);
		return $result;}		
		

	function display_items_sale($search){//global-market.php
		$conn=connection2();
		$sql="SELECT *,count(b.item_id) as mycount from goods a inner JOIN game_items b where a.goods_name LIKE '%".$search."%' and b.goods_id=a.goods_id and b.order_id=1 and b.item_status=1 group by a.goods_id order by b.item_date_added desc";
		$result = $conn->query($sql);
		return $result;}

	function display_items_buy($search){//global-market.php
		$conn=connection2();
		$sql="SELECT *,count(b.item_id) as mycount from goods a inner JOIN game_items b where a.goods_name LIKE '%".$search."%' and b.goods_id=a.goods_id and b.order_id=2 and b.item_status=1 group by a.goods_id order by b.item_date_added desc";
		$result = $conn->query($sql);
		return $result;}


	function get_user_count(){
		$conn=connection2();
		$sql="SELECT count(user_id) as count_users from users where user_status != 0";
		$result = $conn->query($sql);
		return $result;}

	function get_game_count(){
		$conn=connection2();
		$sql="SELECT count(game_id) as count_games from games where game_status != 0";
		$result = $conn->query($sql);
		return $result;}

	function get_service_count(){
		$conn=connection2();
		$sql="SELECT count(service_id) as count_services from game_services where service_status != 0";
		$result = $conn->query($sql);
		return $result;}

	function get_game_item_count(){
		$conn=connection2();
		$sql="SELECT count(item_id) as count_game_items from game_items where item_status != 0";
		$result = $conn->query($sql);
		return $result;}		

	function get_transaction_count(){
		$conn=connection2();
		$sql="SELECT count(transaction_id) as count_transactions from transactions where transaction_status != 0";
		$result = $conn->query($sql);
		return $result;}

	function get_dispute_count(){
		$conn=connection2();
		$sql="SELECT count(dispute_id) as count_disputes from disputes where dispute_status != 0";
		$result = $conn->query($sql);
		return $result;}	
			
	function get_notification($user_id){
		$conn=connection2();
		$sql="SELECT * from notification where user_id=$user_id order by notification_date_created desc";
		$result = $conn->query($sql);
		return $result;}
	
	function get_deposit_info($user_id){
		$conn=connection2();
		$sql="SELECT * from deposit where user_id=$user_id order by deposit_date_created desc";
		$result = $conn->query($sql);
		return $result;}

	function get_withdraw_info($user_id){
		$conn=connection2();
		$sql="SELECT * from withdraw where user_id=$user_id order by withdraw_date_created desc";
		$result = $conn->query($sql);
		return $result;}

	function get_transaction_history($user_id){
		$conn=connection2();
		$sql="SELECT * from transactions where buyer_id=$user_id or seller_id=$user_id order by transaction_date desc";
		$result = $conn->query($sql);
		return $result;}	
	
	function display_goods_id($goods_id){//user
		$conn=connection2();
		$sql="SELECT * from game_items where goods_id=$goods_id";
		$result = $conn->query($sql);
		return $result;}

	function get_goods_information($game_id){//USED IN sale_game_item_modal
		$conn=connection2();
		$sql="SELECT * from goods_information where game_id=$game_id";
		$result = $conn->query($sql);
		return $result;}

	function get_goods_category($game_id){//USED IN sale_game_item_modal
		$conn=connection();
		$query="SELECT * from goods_category where game_id=:game_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_id"=>$game_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function get_game_service($game_id){//USED IN sale_game_item_modal 
		$conn=connection2();
		$sql="SELECT * from game_services where game_id=$game_id and service_status=1";
		$result = $conn->query($sql);
		return $result;}

	function get_game(){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT * from games";
		$result = $conn->query($sql);
		return $result;}
	
	function get_buy_order_transaction_details($transaction_id,$user_id){ // BUY ORDER
		$conn=connection();
		$query="SELECT * from transactions where transaction_id=:transaction_id and buyer_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id,":user_id"=>$user_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function get_bargain_order_transaction_details($transaction_id,$user_id){ // BUY ORDER
		$conn=connection();
		$query="SELECT * from transactions where transaction_id=:transaction_id and buyer_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id,":user_id"=>$user_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}	

	function get_sale_order_transaction_details($transaction_id,$user_id){ // BUY ORDER
		$conn=connection();
		$query="SELECT * from transactions where transaction_id=:transaction_id and seller_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id,":user_id"=>$user_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}	

	function get_game_item_information($item_id,$user_id){
		$conn=connection();
		$query="SELECT * from game_items where item_id=:item_id and user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id,":user_id"=>$user_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function get_game_item_information_notification($item_id){
		$conn=connection();
		$query="SELECT * from goods a join game_items b where item_id=:item_id and a.goods_id=b.goods_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}
		
	function get_transaction_notification_buyer($transaction_id,$user_id){ // BUY ORDER
		$conn=connection();
		$query="SELECT * from transactions a join goods b join game_items c where b.goods_id=c.goods_id and a.item_id=c.item_id and transaction_id=:transaction_id and buyer_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id,":user_id"=>$user_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}
	
	function get_transaction_notification_seller($transaction_id,$user_id){ // BUY ORDER
		$conn=connection();
		$query="SELECT * from transactions a join goods b join game_items c where b.goods_id=c.goods_id and a.item_id=c.item_id and transaction_id=:transaction_id and seller_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id,":user_id"=>$user_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function get_transaction_notification_dispute($transaction_id){ // BUY ORDER
		$conn=connection();
		$query="SELECT * from transactions a join goods b join game_items c where b.goods_id=c.goods_id and a.item_id=c.item_id and transaction_id=:transaction_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_id"=>$transaction_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}


?>