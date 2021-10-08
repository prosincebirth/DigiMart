<?php 

	require 'database.php';

		if(isset($_POST['action_type'])){
			$action_type=$_POST['action_type'];
				switch($action_type){
					case "register":
						$user_username=$_POST['user_username'];
						$user_email=$_POST['user_email'];
						$user_password=$_POST['user_password'];
						$user_password=password_hash($user_password, PASSWORD_DEFAULT); 

						if(existing_user($user_username) && existing_email($user_email)){
							echo 'both taken';
						} // if both are taken
						else if(existing_user($user_username)){
							echo 'user taken';
						} // if user is taken
						else if(existing_email($user_email)){
							echo 'email taken';
						} // if email is taken
						else{
							add_new_user($user_username,$user_password,$user_email);
							echo 'user added';
						} //if both are not taken, success
					break;
					case "login":
						$user_username=$_POST['user_username'];
						$user_password=$_POST['user_password'];

						if(existing_user($user_username)){
							$res = login($user_username);
							if(password_verify($user_password, $res['user_password'])){	
								$_SESSION['user_session'] = $res['user_id'];
								$_SESSION['user_username'] = $res['user_username'];
								echo 'success';

							}else{
								echo 'wrong password';
							}
						}else{
							echo 'username error';
						}
					break;
					case "add_new_game":
						$game_name=$_POST['game_name'];
						$game_desc=$_POST['game_desc'];
						$game_region=$_POST['game_region'];
						$game_server=$_POST['game_server'];

						add_new_game($game_name,$game_desc,$game_region,$game_server);
							echo 'user added';
						
						break;

				}
			}
?>