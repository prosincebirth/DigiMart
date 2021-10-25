<?php 
	if(!isset($_SESSION)){session_start();}
	
//////////////// DB /////////////////
    function connection(){// DB CONNECTION PDO
		$conn=new PDO("mysql:host=localhost;dbname=digimart","root","");
		return $conn;}
	
	function connection2(){// DB CONNECTION MYSQL
		$conn= mysqli_connect("localhost", "root", "", "digimart");
		return $conn;}

		////////////////// ADDD FUNCTIONS /////////////////
	function add_new_user($user_username,$user_password,$user_email){//register.php
		$conn=connection();
		$query="INSERT INTO users(user_username,user_password,user_email) values(:user_username,:user_password,:user_email)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_username"=>$user_username,":user_password"=>$user_password,":user_email"=>$user_email));
		$conn=null;}

	function add_new_game($game_name,$game_desc,$game_region,$game_server){
		$conn=connection();
		$query="INSERT INTO games(game_name,game_desc,game_region,game_server) values(:game_name,:game_desc,:game_region,:game_server)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_name"=>$game_name,":game_desc"=>$game_desc,":game_region"=>$game_region,":game_server"=>$game_server));
		$conn=null;}	
	
	function add_game_service($service_mode,$service_desc,$game_id){
		$conn=connection();
		$query="INSERT INTO game_services(service_mode,service_desc,game_id) values(:service_mode,:service_desc,:game_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":service_mode"=>$service_mode,":service_desc"=>$service_desc,":game_id"=>$game_id));
		$conn=null;}	

	function add_new_game_item($item_name,$goods_id,$item_quality,$item_rarity,$item_detail1,$item_detail2,$item_detail3,$item_price,$item_image,$user_id,$service_id,$game_id,$order_id){
		$conn=connection();
		$query="INSERT INTO game_items(item_name,goods_id,item_quality,item_rarity,item_detail1,item_detail2,item_detail3,item_price,item_image,user_id,service_id,game_id,order_id) values(:item_name,:goods_id,:item_quality,:item_rarity,:item_detail1,:item_detail2,:item_detail3,:item_price,:item_image,:user_id,:service_id,:game_id,:order_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_name"=>$item_name,":goods_id"=>$goods_id,":item_quality"=>$item_quality,":item_rarity"=>$item_rarity,":item_detail1"=>$item_detail1,":item_detail2"=>$item_detail2,":item_detail3"=>$item_detail3,":item_price"=>$item_price,":item_image"=>$item_image,":user_id"=>$user_id,":service_id"=>$service_id,":game_id"=>$game_id,":order_id"=>$order_id));
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

	function add_transaction($transaction_type,$transaction_amount,$game_item_id,$buyer_id,$seller_id,$service_id,$game_id){//item-goods.php
		$conn=connection();
		$query="INSERT INTO transactions(transaction_type,transaction_amount,game_item_id,buyer_id,seller_id,service_id,game_id) values(:transaction_type,:transaction_amount,:game_item_id,:buyer_id,:seller_id,:service_id,:game_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_type"=>$transaction_type,":transaction_amount"=>$transaction_amount,":game_item_id"=>$game_item_id,":buyer_id"=>$buyer_id,":seller_id"=>$seller_id,":service_id"=>$service_id,":game_id"=>$game_id));
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

	function existing_game_item($item_name,$item_quality,$item_rarity,$item_detail1,$item_detail2,$item_detail3){//user
		$conn=connection();
		$query="SELECT * from game_items where item_name=:item_name and item_quality=:item_quality and item_rarity=:item_rarity and item_detail1=:item_detail1 and item_detail2=:item_detail2 and item_detail3=:item_detail3";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_name"=>$item_name,":item_quality"=>$item_quality,":item_rarity"=>$item_rarity,":item_detail1"=>$item_detail1,":item_detail2"=>$item_detail2,":item_detail3"=>$item_detail3));
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
		return $res;
	}

	function login($user_username){//user
		$conn=connection();
		$query="SELECT * from users where user_username=:user_username";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_username"=>$user_username));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function update_login($user_id){//update last login status/login.php
		$conn=connection();
		$query="UPDATE users SET last_login_date = current_timestamp() WHERE users.user_id = $user_id";
		$prepare=$conn->query($query);
		$exec=$prepare->execute(array(":game_name"=>$game_name));
		$conn=null;
	}


///////////////////UPDATE FUNCTIIONS/////////////////////////////////

	function edit_game($game_id,$game_name,$game_desc,$game_region,$game_server){
		$conn=connection();
		$query="UPDATE games set game_name=:game_name,game_desc=:game_desc,game_region=:game_region,game_server=:game_server where game_id=:game_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_name"=>$game_name,":game_desc"=>$game_desc,":game_region"=>$game_region,":game_server"=>$game_server,":game_id"=>$game_id));
		$conn=null;}
		
	function edit_user(){}
	function edit_user_password(){}
	function edit_game_service(){}
	function edit_game_item(){}




///////////////////////DELETE FUNCTIONS///////////////////////////////// 
	function delete_game($game_id){
		$conn=connection();
		$query="UPDATE games set game_status=0 where game_id=:game_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_id"=>$game_id));
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


	function display_all_games(){
		$conn=connection();
		$query="SELECT * FROM games where game_status=1";
		$prepare=$conn->query($query);
		$res=$prepare->fetchall();
		$conn=null;
		return $res;}

	function view_all_items($goods_id){//items-goods.php
		$conn=connection();
		$query="SELECT a.item_id,
		a.goods_id,	
		a.item_name,	
		a.item_quality,	
		a.item_rarity,	
		a.item_detail1,	
		a.item_detail2,	
		a.item_detail3,	
		a.item_image,	
		a.item_price,	
		a.item_status,	
		a.item_date_added,	
		a.user_id,
		a.service_id,	
		a.game_id,	
		a.order_id,	
		b.category_id,	
		b.item_type,	
		b.item_category1,	
		b.item_category2,	
		b.item_category3,	
		b.game_id FROM game_items a join item_category b where a.game_id = b.game_id and a.goods_id=:goods_id and a.item_status=1 ORDER BY a.item_price ASC";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":goods_id"=>$goods_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	
	function display_market_sell_goods($id){
		$conn=connection2();
		$query="SELECT * FROM game_items a join game_services b join users c where a.service_id = b.service_id and a.goods_id=$id 
		and a.user_id = c.user_id and order_id =1 and item_status=1 ORDER BY a.item_price ASC;";
		$result = $conn->query($query);
		return $result;
	}


	function display_item($limit){//global-market.php
		$conn=connection2();
		$sql="SELECT *,COUNT(*) as mycount from game_items GROUP BY goods_id LIMIT $limit";
		$result = $conn->query($sql);
		return $result;}
	
	function display_goods_id($goods_id){//user
		$conn=connection2();
		$sql="SELECT * from game_items where goods_id=$goods_id";
		$result = $conn->query($sql);
		return $result;}

	function get_item_information($game_id){
		$conn=connection2();
		$sql="SELECT * from item_information where game_id=$game_id";
		$result = $conn->query($sql);
		return $result;
	}

	function get_item_category($game_id){//user
		$conn=connection();
		$query="SELECT * from item_category where game_id=:game_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_id"=>$game_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function get_game_service($game_id){
		$conn=connection2();
		$sql="SELECT * from game_services where game_id=$game_id";
		$result = $conn->query($sql);
		return $result;
	}

	
?>