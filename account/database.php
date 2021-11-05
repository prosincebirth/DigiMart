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

		////////////////// ADDD FUNCTIONS /////////////////
	function add_new_user($user_username,$user_password,$user_email){//register.php
		$conn=connection();
		$query="INSERT INTO users(user_username,user_password,user_email) values(:user_username,:user_password,:user_email)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_username"=>$user_username,":user_password"=>$user_password,":user_email"=>$user_email));
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

	function existing_goods($goods_name,$goods_quality,$goods_rarity,$goods_detail_1,$goods_detail_2,$goods_detail_3,$goods_image,$game_id){//USED IN POST SALE
		$conn=connection();
		$query="SELECT * from goods where goods_name=:goods_name and goods_quality=:goods_quality and goods_rarity=:goods_rarity and goods_detail_1=:goods_detail_1 and goods_detail_2=:goods_detail_2 and goods_detail_3=:goods_detail_3 and goods_image=:goods_image and game_id=:game_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":goods_name"=>$goods_name,":goods_quality"=>$goods_quality,":goods_rarity"=>$goods_rarity,":goods_detail_1"=>$goods_detail_1,":goods_detail_2"=>$goods_detail_2,":goods_detail_3"=>$goods_detail_3,":goods_image"=>$goods_image,":game_id"=>$game_id));
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
///////////////////UPDATE FUNCTIIONS CONFIRMATION/////////////////////////////////
	function cancel_buy_order($item_id,$user_id){
		$conn=connection();
		$query="UPDATE game_items set item_status=4 where item_id=:item_id and user_id=:user_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id,":user_id"=>$user_id));
		$conn=null;}

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
	function display(){}
	function display_bargain_orders($user_id){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT *,(select user_username from users where user_id=a.seller_id ) as seller_name from transactions a join game_items b join goods c join users d where a.buyer_id=d.user_id and a.order_id = 3 and a.transaction_status = 1 and a.item_id = b.item_id and b.goods_id=c.goods_id ORDER BY a.transaction_date ASC";
		$result = $conn->query($sql);
		return $result;}

	function display_bargain_orders_records($user_id){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT * from transactions a join game_items b join goods c where a.buyer_id=58 and a.item_id = b.item_id and b.goods_id = c.goods_id and a.order_id=3 and a.transaction_status !=1 ORDER BY a.transaction_date ASC";
		$result = $conn->query($sql);
		return $result;}

	function display_buy_orders($user_id){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT * from game_items a join goods b where a.user_id=$user_id and a.goods_id = b.goods_id and a.order_id=2 and a.item_status=1 ORDER BY a.item_date_added ASC";
		$result = $conn->query($sql);
		return $result;}

	function display_buy_order_records($user_id){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT * from game_items a join goods b where user_id=$user_id and a.goods_id = b.goods_id and a.order_id=2 and a.item_status !=1 ORDER BY item_date_added ASC";
		$result = $conn->query($sql);
		return $result;}	

	function display_all_games(){
		$conn=connection();
		$query="SELECT * FROM games where game_status=1";
		$prepare=$conn->query($query);
		$res=$prepare->fetchall();
		$conn=null;
		return $res;}

	function display_goods($goods_id){//items-goods.php
		$conn=connection();
		$query="SELECT * FROM goods a join game_items b WHERE a.goods_id = :goods_id and b.item_status=1 ORDER BY b.item_price ASC";
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
		$query="SELECT * from transactions a join orders b join game_items c join goods d where a.item_id = c.item_id and a.transaction_status=0 and a.order_id=b.order_id and c.goods_id = d.goods_id ORDER BY a.transaction_date ASC";
		$result = $conn->query($query);
		return $result;}		
		
	function display_item($limit){//global-market.php
		$conn=connection2();
		$sql="SELECT * from goods a join game_items b where a.goods_id=b.goods_id LIMIT $limit";
		$result = $conn->query($sql);
		return $result;}

	function display_items(){//global-market.php
		$conn=connection2();
		$sql="SELECT *,count(b.item_id) as mycount from goods a inner JOIN game_items b where b.goods_id=a.goods_id group by a.goods_id";
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
		$sql="SELECT * from game_services where game_id=$game_id";
		$result = $conn->query($sql);
		return $result;}

	function get_game(){// USED IN GAME SERVICES , POST SALE
		$conn=connection2();
		$sql="SELECT * from games";
		$result = $conn->query($sql);
		return $result;}

	
?>