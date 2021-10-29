<div class="modal fade" id="login_modal" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Login</h4>
		</div>
		<div class="modal-body">
		<form class="form-signin" method="post" id="login-form"><center>
            <div class="fld_input">
                <label for="email">
                    <input type="text" name="user_username_a" id="user_username_a" placeholder="Username" autocomplete="off">
                    <label for="error_username" id="error_username"></label>
                </label>
            </div>
            <div class="fld_input">
                <label for="password">
                    <input type="password" name="user_password_a" id="user_password_a" placeholder="Password" autocomplete="off">
                    <label for="error_password" id="error_password"></label>
                </label>
            </div>
			<div class="modal-footer">
					<button class="btn btn-secondary btn-login" type="button" value="login">Login</button>
               	 	<label for="for_login" id="for_login"></label>
                    </form>
					<div class="align-center font-14">
            <span>Not a member yet?</span>
            <a data-dismiss="modal" data-toggle='modal' href='#register_modal' class="link font-14">Sign-up</a>
        </div>
			</div>   
		</div>
	</div>
	</div>
</div>

<div class="modal fade" id="register_modal" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Registration</h4>
		</div>
		<div class="modal-body">
		<form class="form-signin" method="post" id="register-form"><center>
			<div class="fld_input">
                <label for="username">
                    <input type="text" name="user_username_b" id="user_username_b" placeholder="Username">
                    <label for="user_username" id="error_username"></label>
                </label>
            </div>
            <div class="fld_input">
                <label for="email">
                    <input type="text" name="user_email_b" id="user_email_b" placeholder="Email Address" >
                    <label for="user_email" id="error_email"></label>
                </label>
            </div>
            <div class="fld_input">
                <label for="password1">
                    <input type="password" name="user_password_b" id="user_password_b" placeholder="Password" >
                </label>
            </div>
            <div class="fld_input">
                <label for="password1">
                    <input type="password" name="cpassword_b" id="cpassword_b" placeholder="Confirm Password" >
                </label>
            </div>
			<div class="modal-footer">
				<div class="fld_btn">
					<button class="btn btn-secondary btn-login" type="button" value="register">Create account</button>
					<label for="for_register" id="for_register"></label>
				</div>
                    </form>
					<div class="align-center font-14">
            <span>Already have an account ?</span>
            <a data-dismiss="modal" data-toggle='modal' href='#login_modal' class="link font-14">Login</a>
        </div>
			</div>   
		</div>
	</div>
	</div>
</div>


<div class="modal fade" id="add_game_modal" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<h4 class="modal-title">Add New Game</h4>
		</div>
		<div class="modal-body">
					<div class="fld_input"><input type="text" name="game_name_a" placeholder="Game Name" id="game_name_a" class="form-control"></div>
					<div class="fld_input"><input type="text" name="game_desc_a" placeholder="Game Description" id="game_desc_a" class="form-control"></div>
					<div class="fld_input"><input type="text" name="steam_game_id_a" placeholder="Steam Game ID" id="steam_game_id_a" class="form-control"></div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-success" type="button" value="add_new_game">Save</button>
		</div>
	</div>
	</div>
</div>

<div class="modal fade" id="edit_game_modal" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Edit Game </h4>
		</div>
		<div class="modal-body">
					<div class="fld_input"><input type="text" name="game_name_b" placeholder="Game Name" id="game_name_b" class="form-control"></div>
					<div class="fld_input"><input type="text" name="game_desc_b" placeholder="Game Description" id="game_desc_b" class="form-control"></div>
					<div class="fld_input"><input type="text" name="steam_game_id_b" placeholder="Steam Game ID" id="steam_game_id_b" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="edit_new_game">Save</button>
			</div>
		</div>
	</div>
	</div>
</div>

<div class="modal fade" id="add_services_modal" role="dialog">
	<div class="modal-dialog">
	
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Game Service </h4>
		</div>
		<div class="modal-body">
				<div class="fld_input"><input type="text" name="service_mode_a" placeholder="Service Mode" id="service_mode_a" class="form-control"></div>
				<div class="fld_input"><input type="text" name="service_desc_a" placeholder="Service Description" id="service_desc_a" class="form-control"></div>
				<div class="fld_input"><select name="game_id_a" id="game_id_a" class="form-control">	
				<option value="" disabled selected>Game</option>
									<?php
                                    $result = get_game();
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['game_id']!= NULL){
										echo '<option value='.$res['game_id'].'>'.$res['game_name'].'</option>';
										}}}	
										?>
										</select></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="add_new_game_service">Save</button>
                  
			</div>  
		</div>
	</div>
	</div>
</div>

<div class="modal fade" id="edit_services_modal" role="dialog">
	<div class="modal-dialog">
	
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Edit Game Service </h4>
		</div>
		<div class="modal-body">
	
                <div class="fld_input"><input type="text" name="service_name_b" placeholder="Service Name" id="service_name_b" class="form-control"></div>
				<div class="fld_input"><input type="text" name="service_mode_b" placeholder="Service Mode" id="service_mode_b" class="form-control"></div>
				<div class="fld_input"><input type="text" name="service_desc_b" placeholder="Service Description" id="service_desc_b" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="edit_new_game_service">Save</button>
                  
			</div>   
		</div>
	</div>
	</div>
</div>

<div class="modal fade" id="sale_game_item_modal" role="dialog"> <!-- modal for adding game items from scratch/new item-->
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>POST ITEM FOR SALE</center</h4>
		</div>
		<div class="modal-body">
                <div class="fld_input"><input type="text" name="goods_name_a" placeholder="Item Name" id="goods_name_a" class="form-control"> </div>
				<div class="fld_input"><select name="goods_quality_a" id="goods_quality_a"  class="form-control">
				<?php	$game=get_goods_category(1);
				echo '<option value="" disabled selected>'.$game['goods_type'].'</option>';
                                    $result = get_goods_information(1);
                                    if($result->num_rows > 0){
                                    while ($res = $result->fetch_assoc()){
										if($res['goods_quality']!= NULL){
										echo '<option value='.$res['goods_quality'].'>'.$res['goods_quality'].'</option>';}}}?>
										</select></div>
				<div class="fld_input"><select name="goods_rarity_a" id="goods_rarity_a" class="form-control">	
				<option value="" disabled selected><?php echo $game['goods_rarity'];?></option>
									<?php
                                    $result = get_goods_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['goods_rarity']!= NULL){
										echo '<option value='.$res['goods_rarity'].'>'.$res['goods_rarity'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="goods_detail1_a" id="goods_detail1_a" class="form-control">	
				<option value="" disabled selected><?php echo $game['goods_category1'];?></option>
									<?php
                                    $result = get_goods_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['goods_detail_1']!= NULL){
										echo '<option value='.$res['goods_detail_1'].'>'.$res['goods_detail_1'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="goods_detail2_a" id="goods_detail2_a" class="form-control">	
				<option value="" disabled selected><?php echo $game['goods_category2'];?></option>
									<?php
                                    $result = get_goods_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['goods_detail_2']!= NULL){
										echo '<option value='.$res['goods_detail_2'].'>'.$res['goods_detail_2'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="goods_detail3_a" id="goods_detail3_a" class="form-control">	
				<option value="" disabled selected><?php echo $game['goods_category3'];?></option>
									<?php
                                    $result = get_goods_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['goods_detail_3']!= NULL){
										echo '<option value='.$res['goods_detail_3'].'>'.$res['goods_detail_3'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><input type="number" name="goods_price_a" placeholder="ITEM PRICE" id="goods_price_a" class="form-control"></div>
				<div class="fld_input"><input type="number" name="goods_quantity_a" placeholder="ITEM QUANTITY" id="goods_quantity_a" class="form-control"></div>
				<div class="fld_input"><input type="file" name="goods_image_a" placeholder="ITEM IMAGE" id="goods_image_a" value="" class="form-control"></div>
				<div class="fld_input"><input type="text" name="order_id_a" placeholder="ORDER ID" id="order_id_a" class="form-control" value="1"></div>	
				<div class="fld_input"><select name="service_id_a" id="service_id_a" class="form-control">	
				<option value="" disabled selected>Service Mode</option>
									<?php
                                    $result = get_game_service(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['service_id']!= NULL){
										echo '<option value='.$res['service_id'].'>'.$res['service_mode'].'</option>';
										}}}?>
										</select></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="sell_game_item">Sell</button>					
			</div>
		</div>
	</div>
	</div>
</div>




