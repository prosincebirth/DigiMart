<?php 
	
	//PUT COMMENTS WHERE THE FUNCTIONS BELONG !!! - JASON
    function connection(){// DB CONNECTION
		$conn=new PDO("mysql:host=localhost;dbname=digimart","root","");
		return $conn;}

	function add_new_user($user_username,$user_password,$user_email){//USER
		$conn=connection();
		$query="INSERT INTO users(user_username,user_password,user_email) values(:user_username,:user_password,:user_email)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_username"=>$user_username,":user_password"=>$user_password,":user_email"=>$user_email));
		$conn=null;}

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

	function login($user_username){//user
		$conn=connection();
		$query="SELECT * from users where user_username=:user_username";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_username"=>$user_username));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function add_new_game($game_name,$game_desc,$game_region,$game_server){
		$conn=connection();
		$query="INSERT INTO games(game_name,game_desc,game_region,game_server) values(:game_name,:game_desc,:game_region,:game_server)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_name"=>$game_name,":game_desc"=>$game_desc,":game_region"=>$game_region,":game_server"=>$game_server));
		$conn=null;}

	function edit_game($game_id,$game_name,$game_desc,$game_region,$game_server){
		$conn=connection();
		$query="UPDATE games set game_name=:game_name,game_desc=:game_desc,game_region=:game_region,game_server=:game_server where game_id=:game_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_name"=>$game_name,":game_desc"=>$game_desc,":game_region"=>$game_region,":game_server"=>$game_server,":game_id"=>$game_id));
		$conn=null;}
	function display_all_games(){
		$conn=connection();
		$query="SELECT * FROM games where stats=1";
		$prepare=$conn->query($query);
		$res=$prepare->fetchall();
		$conn=null;
		return $res;}

	function delete_game($game_id){
		$conn=connection();
		$query="UPDATE games set game_status=0 where game_id=:game_id";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":game_name"=>$game_name));
		$conn=null;	}

	function view_all_items($item_id){
		$conn=connection();
		$query="SELECT * FROM game_items where item_id=:item_id and item_status=1";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_id"=>$item_id));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;}

	function add_new_game_item($item_name,$item_rarity,$item_price,$item_image,$user_id,$service_id){
		$conn=connection();
		$query="INSERT INTO game_items(item_name,item_rarity,item_price,item_image,user_id,service_id) values(:item_name,:item_rarity,:item_price,:item_image,:user_id,:service_id)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":item_name"=>$item_name,":item_rarity"=>$item_rarity,":item_price"=>$item_price,":item_image"=>$item_image,":user_id"=>$user_id,":service_id"=>$service_id));
		$conn=null;}

		function display_item(){
			$conn=connection();
			$query="SELECT * from game_items where item_status=1";
			$prepare=$conn->query($query);
			$res=$prepare->fetchall();
			$conn=null;
			return $res;
		}

    
?>