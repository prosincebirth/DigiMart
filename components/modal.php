
<div class="modal fade" id="add_game_modal" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<h4 class="modal-title">Add New Game</h4>
		</div>
		<div class="modal-body">
					<div class="fld_input"><input type="text" name="game_name_a" placeholder="Game Name" id="game_name_a" class="form-control"></div>
					<div class="fld_input"><input type="text" name="game_desc_a" placeholder="Game Description" id="game_desc_a" class="form-control"></div>
					<div class="fld_input"><input type="text" name="steam_game_id_a" placeholder="Game Region" id="steam_game_id_a" class="form-control"></div>
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
					<div class="fld_input"><input type="text" name="steam_game_id_b" placeholder="Game Region" id="steam_game_id_b" class="form-control"></div>
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
	
                <div class="fld_input"><input type="text" name="service_name_a" placeholder="Service Name" id="service_name_a" class="form-control"></div>
				<div class="fld_input"><input type="text" name="service_mode_a" placeholder="Service Mode" id="service_mode_a" class="form-control"></div>
				<div class="fld_input"><input type="text" name="service_desc_a" placeholder="Service Description" id="service_desc_a" class="form-control"></div>
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
		
                <div class="fld_input"><input type="text" name="item_name_a" placeholder="Item Name" id="item_name_a" class="form-control"> </div>
				<div class="fld_input"><select name="item_quality_a" id="item_quality_b"  class="form-control">
				<?php	$game=get_item_category(1);
				echo '<option value="" disabled selected>'.$game['item_type'].'</option>';
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
                                    while ($res = $result->fetch_assoc()){
										if($res['item_quality']!= NULL){
										echo '<option value='.$res['item_quality'].'>'.$res['item_quality'].'</option>';}}}?>
										</select></div>
				<div class="fld_input"><select name="item_rarity_a" id="item_rarity_a" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_rarity'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_rarity']!= NULL){
										echo '<option value='.$res['item_rarity'].'>'.$res['item_rarity'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="item_detail1_a" id="item_detail1_a" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_category1'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_detail1']!= NULL){
										echo '<option value='.$res['item_detail1'].'>'.$res['item_detail1'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="item_detail2_a" id="item_detail2_a" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_category2'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_detail2']!= NULL){
										echo '<option value='.$res['item_detail2'].'>'.$res['item_detail2'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="item_detail3_a" id="item_detail3_a" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_category3'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_detail3']!= NULL){
										echo '<option value='.$res['item_detail3'].'>'.$res['item_detail3'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><input type="text" name="item_price_a" placeholder="Item Price" id="item_price_a" class="form-control"></div>
				<div class="fld_input"><input type="file" name="item_image_a" placeholder="Item Image" id="item_image_a" value="" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="user_id_a" placeholder="User ID" id="user_id_a" class="form-control" value="<?php echo $_SESSION['user_session']; ?>"></div>		
				<div class="fld_input"><input type="hidden" name="order_id_a" placeholder="User ID" id="order_id_a" class="form-control" value="1"></div>	
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

<div class="modal fade" id="sale_game_item_modal_2" role="dialog"><!-- selling items on item-goods.php-->
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>SELL ITEM </h4>
		</div>
		<div class="modal-body">
	
                <div class="fld_input"><input type="hidden" name="goods_id_b" placeholder="GOODS ID" id="goods_id_b" class="form-control"></div>
				<div class="fld_input"><input type="text" name="item_price_b" placeholder="ITEM PRICE" id="item_price_b" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="user_id_b" placeholder="SELLER ID" id="user_id_b" class="form-control"></div>
				<div class="fld_input"><select name="service_id_b" id="service_id_b" class="form-control">	
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
					<button class="btn btn-success" type="button" value="sell_game_item_2">Sell</button>
                 
			</div>
		</div>
	</div>
	</div>
</div>

<div class="modal fade" id="buy_game_item_modal" role="dialog"><!-- buying items on item-goods.php-->
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">BUY ITEM</h4>
		</div>
		<div class="modal-body">
			
				<div class="fld_input"><input type="text" name="order_id_c" placeholder="ORDER ID" id="order_id_c" class="form-control"></div>
                <div class="fld_input"><input type="text" name="item_id_c" placeholder="ITEM ID" id="item_id_c" class="form-control"></div>
				<div class="fld_input"><input type="text" name="buyer_id_c" placeholder="BUYER ID" id="buyer_id_c" class="form-control"></div>
				<div class="fld_input"><input type="text" name="seller_id_c" placeholder="SELLER ID" id="seller_id_c" class="form-control"></div>
				<div class="fld_input"><input type="text" name="service_id_c" placeholder="SERVICE ID" id="service_id_c" class="form-control"></div>
				<div class="fld_input"><input type="text" name="item_price_c" placeholder="ITEM PRICE" id="item_price_c" class="form-control"></div>
				<div class="fld_input"><input type="text" name="game_id_c" placeholder="GAME ID" id="game_id_c" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="buy_game_item">BUY</button>
				
			</div>
		</div>
	</div>
	</div>
</div>

<div class="modal fade" id="buyorder_game_item_modal" role="dialog"> <!-- modal for buying game items from scratch/new item/ buy order-->
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>PLACE BUY ORDER</center</h4>
		</div>
		<div class="modal-body">
                <div class="fld_input"><input type="text" name="item_name_d" placeholder="Item Name" id="item_name_d" class="form-control"></div>
				<div class="fld_input"><select name="item_quality_d" id="item_quality_d"  class="form-control">
				<?php	$game=get_item_category(1);
				echo '<option value="" disabled selected>'.$game['item_type'].'</option>';
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
                                    while ($res = $result->fetch_assoc()){
										if($res['item_quality']!= NULL){
										echo '<option value='.$res['item_quality'].'>'.$res['item_quality'].'</option>';}}}?>
										</select></div>
				<div class="fld_input"><select name="item_rarity_d" id="item_rarity_d" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_rarity'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_rarity']!= NULL){
										echo '<option value='.$res['item_rarity'].'>'.$res['item_rarity'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="item_detail1_d" id="item_detail1_d" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_category1'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_detail1']!= NULL){
										echo '<option value='.$res['item_detail1'].'>'.$res['item_detail1'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="item_detail2_d" id="item_detail2_d" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_category2'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_detail2']!= NULL){
										echo '<option value='.$res['item_detail2'].'>'.$res['item_detail2'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="item_detail3_d" id="item_detail3_d" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_category3'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_detail3']!= NULL){
										echo '<option value='.$res['item_detail3'].'>'.$res['item_detail3'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><input type="text" name="item_price_d" placeholder="Item Price" id="item_price_d" class="form-control"></div>
				<div class="fld_input"><input type="file" name="item_image_d" placeholder="Item Image" id="item_image_d" value="" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="user_id_d" placeholder="User ID" id="user_id_d" class="form-control" value="<?php echo $_SESSION['user_session']; ?>"></div>		
				<div class="fld_input"><input type="hidden" name="order_id_d" placeholder="User ID" id="order_id_d" class="form-control" value="1"></div>	
				<div class="fld_input"><select name="service_id_d" id="service_id_d" class="form-control">	
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

<div class="modal fade" id="buyorder_game_item_modal_2" role="dialog"><!-- buying order items on item-goods.php-->
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>PLACE BUY ORDER</h4>
		</div>
		<div class="modal-body">
		
                <div class="fld_input"><input type="hidden" name="goods_id_e" placeholder="GOODS ID" id="goods_id_e" class="form-control"></div>
				<div class="fld_input"><input type="text" name="item_price_e" placeholder="ITEM PRICE" id="item_price_e" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="user_id_e" placeholder="SELLER ID" id="user_id_e" class="form-control"></div>
				<div class="fld_input"><select name="service_id_e" id="service_id_e" class="form-control">	
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
					<button class="btn btn-success" type="button" value="sell_game_item_2">Sell</button>
                 
			</div>
		</div>
	</div>
	</div>
</div>

<div class="modal fade" id="bargain_game_item_modal" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>BARGAIN</h4>
		</div>
		<div class="modal-body">
	
                <div class="fld_input"><input type="text" name="transaction_type_f" placeholder="Transaction Type" id="transaction_type_f" class="form-control"></div>
				<div class="fld_input"><input type="text" name="transaction_desc_f" placeholder="Transaction Description" id="transaction_desc_f" class="form-control"></div>
				<div class="fld_input"><input type="text" name="transaction_amount_f" placeholder="Item Price" id="transaction_amount_f" class="form-control"></div>
				<div class="fld_input"><input type="text" name="item_id_f" placeholder="User ID" id="item_id_f" class="form-control"></div>
				<div class="fld_input"><input type="text" name="buyer_user_id_f" placeholder="Service ID" id="buyer_user_id_f" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="save_game_item">Save</button>
                  
			</div>
		</div>
	</div>
	</div>
</div>



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
                    <input type="text" name="user_username" id="user_username" placeholder="Username" autocomplete="off">
                    <label for="error_username" id="error_username"></label>
                </label>
            </div>
            <div class="fld_input">
                <label for="password">
                    <input type="password" name="user_password" id="user_password" placeholder="Password" autocomplete="off">
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




