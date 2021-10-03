<?php 

    function connection(){
		$conn=new PDO("mysql:host=localhost;dbname=digimart","root","");
		return $conn;
	}

	function add_new_user($user_username,$user_password,$user_email){
		$conn=connection();
		$query="INSERT INTO user(user_username,user_password,user_email) values(:user_username,:user_password,:user_email)"; 
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_username"=>$user_username,":user_password"=>$user_password,":user_email"=>$user_email));
		$conn=null;
	}

	function existing_email($user_email){  
		$conn=connection();
		$query="SELECT user_email from user where user_email=:user_email";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_email"=>$user_email));
		$res=$prepare->rowcount();
		$conn=null;
		return $res;
	}

	function existing_user($user_username){
		$conn=connection();
		$query="SELECT user_username from user where user_username=:user_username";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_username"=>$user_username));
		$res=$prepare->rowcount();
		$conn=null;
		return $res;
	}

	function login($user_username){
		$conn=connection();
		$query="SELECT * from user where user_username=:user_username";
		$prepare=$conn->prepare($query);
		$exec=$prepare->execute(array(":user_username"=>$user_username));
		$res = $prepare->fetch(PDO::FETCH_ASSOC);
		$conn=null;
		return $res;

	}

    
?>