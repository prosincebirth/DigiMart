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
	function add_new_user($user_username,$user_password,$user_email){//USER
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

		function add_new_game_item($item_name,$item_rarity,$item_price,$item_image,$user_id,$service_id){
			$conn=connection();
			$query="INSERT INTO game_items(item_name,item_rarity,item_price,item_image,user_id,service_id) values(:item_name,:item_rarity,:item_price,:item_image,:user_id,:service_id)"; 
			$prepare=$conn->prepare($query);
			$exec=$prepare->execute(array(":item_name"=>$item_name,":item_rarity"=>$item_rarity,":item_price"=>$item_price,":item_image"=>$item_image,":user_id"=>$user_id,":service_id"=>$service_id));
			$conn=null;}

	function add_transaction($transaction_type,$transaction_desc,$transaction_amount,$game_item_id,$buyer_id){
		$conn=connection();
		$query="INSERT INTO game_items(transaction_type,transaction_desc,transaction_amount,game_item_id,buyer_id) values(:transaction_type,:transaction_desc,:transaction_amount,:game_item_id,:buyer_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":transaction_type"=>$transaction_type,":transaction_desc"=>$transaction_desc,":transaction_amount"=>$transaction_amount,":game_item_id"=>$game_item_id,":buyer_id"=>$buyer_id));
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

	function existing_game_item($item_name){//user
		$conn=connection();
		$query="SELECT item_name from game_items where item_name=:item_name";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_name"=>$item_name));
		$res=$prepare->rowcount();
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

	function update_login($user_id){//update last login status
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
		$query="SELECT * FROM games where stats=1";
		$prepare=$conn->query($query);
		$res=$prepare->fetchall();
		$conn=null;
		return $res;}

	function view_all_items($item_id){
		$conn=connection();
		$query="SELECT * FROM game_items where item_id=:item_id and item_status=1";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}


	function display_item($limit){//user
		$conn=connection2();
		$sql="SELECT * from game_items where item_status=1 LIMIT $limit";
		$result = $conn->query($sql);
		return $result;}

	
?>