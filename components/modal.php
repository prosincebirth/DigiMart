<div class="modal fade" id="login_modal" role="dialog">
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
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
	</div></div>
	</div>
	

<div class="modal fade" id="register_modal" role="dialog">
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
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
	</div></div>
	</div>
	

<div class="modal fade" id="add_game_modal" role="dialog">
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
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
	</div></div>
	</div>
	

<div class="modal fade" id="edit_game_modal" role="dialog">
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
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
	</div></div>
	</div>
	

<div class="modal fade" id="add_services_modal" role="dialog">
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
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
	</div></div>
	</div>
	

<div class="modal fade" id="edit_services_modal" role="dialog">
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
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
	</div></div>
	</div>
	

<div class="modal fade" id="sale_game_item_modal" role="dialog"> <!-- modal for adding game items from scratch/new item-->
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
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
	</div></div>
	</div>
	

<div class="modal fade" id="sale_game_item_modal_2" role="dialog"><!-- selling items on item-goods.php-->
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>SELL ITEM </h4>
		</div>
		<div class="modal-body">		
				<div class="fld_input"><input type="number" name="item_price_b" placeholder="ITEM PRICE" id="item_price_b" class="form-control"></div>
				<div class="fld_input"><input type="number" name="items_quantity_b" placeholder="ITEM QUANTITY" id="items_quantity_b" class="form-control"></div>
                <div class="fld_input"><input type="hidden" name="goods_id_b" placeholder="GOODS ID" id="goods_id_b" class="form-control"></div>
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
	</div></div>
	</div>
	
	


<div class="modal fade" id="buyorder_game_item_modal" role="dialog"><!-- buying items on item-goods.php-->
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>BUY ORDER ITEM </center</h4>
		</div>
		<div class="modal-body">
                <div class="fld_input"><input type="text" name="goods_name_d" placeholder="Item Name" id="goods_name_d" class="form-control"> </div>
				<div class="fld_input"><select name="goods_quality_d" id="goods_quality_d"  class="form-control">
				<?php	$game=get_goods_category(1);
				echo '<option value="" disabled selected>'.$game['goods_type'].'</option>';
                                    $result = get_goods_information(1);
                                    if($result->num_rows > 0){
                                    while ($res = $result->fetch_assoc()){
										if($res['goods_quality']!= NULL){
										echo '<option value='.$res['goods_quality'].'>'.$res['goods_quality'].'</option>';}}}?>
										</select></div>
				<div class="fld_input"><select name="goods_rarity_d" id="goods_rarity_d" class="form-control">	
				<option value="" disabled selected><?php echo $game['goods_rarity'];?></option>
									<?php
                                    $result = get_goods_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['goods_rarity']!= NULL){
										echo '<option value='.$res['goods_rarity'].'>'.$res['goods_rarity'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="goods_detail1_d" id="goods_detail1_d" class="form-control">	
				<option value="" disabled selected><?php echo $game['goods_category1'];?></option>
									<?php
                                    $result = get_goods_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['goods_detail_1']!= NULL){
										echo '<option value='.$res['goods_detail_1'].'>'.$res['goods_detail_1'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="goods_detail2_d" id="goods_detail2_d" class="form-control">	
				<option value="" disabled selected><?php echo $game['goods_category2'];?></option>
									<?php
                                    $result = get_goods_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['goods_detail_2']!= NULL){
										echo '<option value='.$res['goods_detail_2'].'>'.$res['goods_detail_2'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="goods_detail3_d" id="goods_detail3_d" class="form-control">	
				<option value="" disabled selected><?php echo $game['goods_category3'];?></option>
									<?php
                                    $result = get_goods_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['goods_detail_3']!= NULL){
										echo '<option value='.$res['goods_detail_3'].'>'.$res['goods_detail_3'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><input type="number" name="goods_price_d" placeholder="ITEM PRICE" id="goods_price_d" class="form-control"></div>
				<div class="fld_input"><input type="number" name="goods_quantity_d" placeholder="ITEM QUANTITY" id="goods_quantity_d" class="form-control"></div>
				<div class="fld_input"><input type="file" name="goods_image_d" placeholder="ITEM IMAGE" id="goods_image_d" value="" class="form-control"></div>
				<div class="fld_input"><input type="text" name="order_id_d" placeholder="ORDER ID" id="order_id_d" class="form-control" value="2"></div>	
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
					<button class="btn btn-success" type="button" value="buyorder_game_item">Confirm</button>			
			</div>
		</div>
	</div>
  </div></div>
	</div>
	

<div class="modal fade" id="buyorder_game_item_modal_2" role="dialog"> <!-- modal for buying game items from scratch/new item/ buy order-->
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>PLACE BUY ORDER</h4>
		</div>
		<div class="modal-body">		
				<div class="fld_input"><input type="number" name="item_price_e" placeholder="ITEM PRICE" id="item_price_e" class="form-control"></div>
				<div class="fld_input"><input type="number" name="items_quantity_e" placeholder="ITEM QUANTITY" id="items_quantity_e" class="form-control"></div>
                <div class="fld_input"><input type="hidden" name="goods_id_e" placeholder="GOODS ID" id="goods_id_e" class="form-control"></div>
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
					<button class="btn btn-success" type="button" value="buyorder_game_item_2">Sell</button>
			</div>
		</div>
	</div>
	</div></div>
	</div>
	


<div class="modal fade" id="buy_game_item_modal" role="dialog"><!-- buying items on item-goods.php-->
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>BUY ITEM</h4>
		</div>
		<div class="modal-body">
									
				Item Price : <span id="display_price_f"  name="display_price_f"> </span></br>
				Total : <span id="display_total_f"  name="display_total_f"> </span>

				<div class="fld_input"><input type="hidden" name="item_price_f" placeholder="ITEM PRICE" id="item_price_f" class="form-control"></div>						
                <div class="fld_input"><input type="number" name="item_quantity_f" placeholder="ITEM QUANTITY" id="item_quantity_f" value ="1" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="item_total_f" placeholder="ITEM TOTAL" id="item_total_f" class="form-control"></div>	
				<div class="fld_input"><input type="hidden" name="item_stock_f" placeholder="ITEM STOCK" id="item_stock_f" class="form-control"></div>	
				<div class="fld_input"><input type="hidden" name="item_id_f" placeholder="ITEM ID" id="item_id_f" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="buyer_id_f" placeholder="BUYER ID" id="buyer_id_f" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="seller_id_f" placeholder="SELLER ID" id="seller_id_f" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="service_id_f" placeholder="SERVICE ID" id="service_id_f" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="game_id_f" placeholder="GAME ID" id="game_id_f" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="order_id_f" placeholder="ORDER ID" id="order_id_f" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="buy_game_item">Confirm</button>
			</div>
		</div>
	</div>
	</div></div>
	</div>
	


<div class="modal fade" id="bargain_item_modal" role="dialog"><!-- buying items on item-goods.php-->
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header"> 
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>BARGAIN ITEM</h4>
		</div>
		<div class="modal-body">
								
				Price : <span id="display_price_g"  name="display_price_g"> </span></br>
				Minimum : <span id="display_minimumm_g"  name="display_minimumm_g"> </span></br>
				Total : <span id="display_total_g"  name="display_total_g"> </span>
							
				<div class="fld_input"><input type="hidden" name="item_price_g" placeholder="ITEM PRICE" id="item_price_g" class="form-control"></div>			
				<div class="fld_input"><input type="number" name="bargain_price_g" placeholder="BARGAIN PRICE" id="bargain_price_g" class="form-control"></div>			
                	<div class="fld_input"><input type="number" name="item_quantity_g" placeholder="ITEM QUANTITY" id="item_quantity_g" value ="1" class="form-control" autofocus></div>
					
				<div class="fld_input"><input type="hidden" name="item_total_g" placeholder="ITEM TOTAL" id="item_total_g" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="item_stock_g" placeholder="ITEM STOCK" id="item_stock_g" class="form-control"></div>	
				<div class="fld_input"><input type="hidden" name="item_id_g" placeholder="ITEM ID" id="item_id_g" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="buyer_id_g" placeholder="BUYER ID" id="buyer_id_g" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="seller_id_g" placeholder="SELLER ID" id="seller_id_g" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="service_id_g" placeholder="SERVICE ID" id="service_id_g" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="game_id_g" placeholder="GAME ID" id="game_id_g" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="order_id_g" placeholder="ORDER ID" id="order_id_g" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="bargain_game_item">Confirm</button>
			</div>
									
		</div>
		</div>
	</div></div>
<div class="modal fade" id="supply_item_modal" role="dialog"><!-- buying items on item-goods.php-->
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header"> 
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>SUPPLY ITEM</h4>
		</div>
		<div class="modal-body">
								
				Price : <span id="display_price_h"  name="display_price_h"> </span></br>
				Total : <span id="display_total_h"  name="display_total_h"> </span>
							
				<div class="fld_input"><input type="hidden" name="item_price_h" placeholder="ITEM PRICE" id="item_price_h" class="form-control"></div>						
                	<div class="fld_input"><input type="number" name="item_quantity_h" placeholder="ITEM QUANTITY" id="item_quantity_h" value ="1" class="form-control" autofocus></div>
					
				<div class="fld_input"><input type="hidden" name="item_total_h" placeholder="ITEM TOTAL" id="item_total_h" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="item_stock_h" placeholder="ITEM STOCK" id="item_stock_h" class="form-control"></div>	
				<div class="fld_input"><input type="hidden" name="item_id_h" placeholder="ITEM ID" id="item_id_h" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="buyer_id_h" placeholder="BUYER ID" id="buyer_id_h" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="seller_id_h" placeholder="SELLER ID" id="seller_id_h" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="service_id_h" placeholder="SERVICE ID" id="service_id_h" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="game_id_h" placeholder="GAME ID" id="game_id_h" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="order_id_h" placeholder="ORDER ID" id="order_id_h" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="supply_item_modal">Confirm</button>
			</div>
									
		</div>
		</div>
	</div></div>
	
<div class="modal fade" id="cancel_buy_order_modal" role="dialog"><!-- buying items on item-goods.php-->
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header"> 
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>CANCEL BUY ORDER</h4>
		</div>
		<div class="modal-body">							
				<div class="fld_input"><input type="hidden" name="item_id_i" placeholder="ITEM ID" id="item_id_i" class="form-control"></div>						
				<div class="fld_input"><input type="hidden" name="user_id_i" placeholder="USER ID" id="user_id_i" class="form-control"></div>						
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="cancel_buy_order_modal">Confirm</button>					
			</div>									
		</div>
		</div>
	</div></div>

<div class="modal fade" id="accept_buy_order_modal" role="dialog"><!-- buying items on item-goods.php-->
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header"> 
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>ACCEPT BUY ORDER</h4>
		</div>
		<div class="modal-body">							
				<div class="fld_input"><input type="hidden" name="transaction_id_j" placeholder="ITEM ID" id="transaction_id_j" class="form-control"></div>						
				<div class="fld_input"><input type="hidden" name="user_id_j" placeholder="USER ID" id="user_id_j" class="form-control"></div>						
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="accept_buy_order_modal">Confirm</button>					
			</div>									
		</div>
		</div>
	</div></div>				

<div class="modal fade" id="refuse_buy_order_modal" role="dialog"><!-- buying items on item-goods.php-->
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header"> 
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>REFUSE BUY ORDER</h4>
		</div>
		<div class="modal-body">							
				<div class="fld_input"><input type="text" name="transaction_id_k" placeholder="ITEM ID" id="transaction_id_k" class="form-control"></div>						
				<div class="fld_input"><input type="text" name="user_id_k" placeholder="USER ID" id="user_id_k" class="form-control"></div>						
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="refuse_buy_order_modal">Confirm</button>					
			</div>									
		</div>
		</div>
	</div></div>							

	



