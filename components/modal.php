
<div class="modal fade" id="add_game_modal" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<h4 class="modal-title">Add New Game</h4>
		</div>
		<div class="modal-body">
		<form class="form-signin" method="post" id="add-game-form"><center>
					<div class="fld_input"><input type="text" name="game_name" placeholder="Game Name" id="game_name" class="form-control"></div>
					<div class="fld_input"><input type="text" name="game_desc" placeholder="Game Description" id="game_desc" class="form-control"></div>
					<div class="fld_input"><input type="text" name="game_region" placeholder="Game Region" id="game_region" class="form-control"></div>
					<div class="fld_input"><input type="text" name="game_server" placeholder="Game Server" id="game_server" class="form-control"></div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-success" type="button" value="save_new_game">Save</button>
			</form>
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
		<form class="form-signin" method="post" id="add-game-form"><center>
		<form class="form-signin" method="post" id="edit-game-form"><center>
                <div class="fld_input"><input type="text" name="game_name" placeholder="Game Name" id="game_name" class="form-control"></div>
				<div class="fld_input"><input type="text" name="game_desc" placeholder="Game Description" id="game_desc" class="form-control"></div>
				<div class="fld_input"><input type="text" name="game_region" placeholder="Game Region" id="game_region" class="form-control"></div>
				<div class="fld_input"><input type="text" name="game_server" placeholder="Game Server" id="game_server" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="save_new_game">Save</button>
                    </form>
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
		<form class="form-signin" method="post" id="service-game-form"><center>
                <div class="fld_input"><input type="text" name="service_name" placeholder="Service Name" id="service_name" class="form-control"></div>
				<div class="fld_input"><input type="text" name="service_mode" placeholder="Service Mode" id="service_mode" class="form-control"></div>
				<div class="fld_input"><input type="text" name="service_desc" placeholder="Service Description" id="service_desc" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="save_new_game">Save</button>
                    </form>
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
		<form class="form-signin" method="post" id="service-game-form"><center>
                <div class="fld_input"><input type="text" name="service_name" placeholder="Service Name" id="service_name" class="form-control"></div>
				<div class="fld_input"><input type="text" name="service_mode" placeholder="Service Mode" id="service_mode" class="form-control"></div>
				<div class="fld_input"><input type="text" name="service_desc" placeholder="Service Description" id="service_desc" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="save_new_game">Save</button>
                    </form>
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
		<form class="form-signin" method="post" id="add-game-form" ><center>
                <div class="fld_input"><input type="text" name="item_name" placeholder="Item Name" id="item_name" class="form-control"></div>
			
				<div class="fld_input"><select name="item_quality" id="item_quality"  class="form-control">
				<?php	$game=get_item_category(1);
				echo '<option value="" disabled selected>'.$game['item_type'].'</option>';
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
                                    while ($res = $result->fetch_assoc()){
										if($res['item_quality']!= NULL){
										echo '<option value='.$res['item_quality'].'>'.$res['item_quality'].'</option>';}}}?>
										</select></div>
				<div class="fld_input"><select name="item_rarity" id="item_rarity" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_rarity'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_rarity']!= NULL){
										echo '<option value='.$res['item_rarity'].'>'.$res['item_rarity'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="item_detail1" id="item_detail1" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_category1'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_detail1']!= NULL){
										echo '<option value='.$res['item_detail1'].'>'.$res['item_detail1'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="item_detail2" id="item_detail2" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_category2'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_detail2']!= NULL){
										echo '<option value='.$res['item_detail2'].'>'.$res['item_detail2'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="item_detail3" id="item_detail3" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_category3'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_detail3']!= NULL){
										echo '<option value='.$res['item_detail3'].'>'.$res['item_detail3'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><input type="text" name="item_price" placeholder="Item Price" id="item_price" class="form-control"></div>
				<div class="fld_input"><input type="file" name="item_image" placeholder="Item Image" id="item_image" value="" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="user_id" placeholder="User ID" id="user_id" class="form-control" value="<?php echo $_SESSION['user_session']; ?>"></div>		
				<div class="fld_input"><input type="hidden" name="order_id" placeholder="User ID" id="order_id" class="form-control" value="1"></div>	
				<div class="fld_input"><select name="service_id" id="service_id" class="form-control">	
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
                    </form>
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
		<form class="form-signin" method="post" id="add-game-form"><center>
                <div class="fld_input"><input type="hidden" name="goods_id" placeholder="GOODS ID" id="goods_id" class="form-control"></div>
				<div class="fld_input"><input type="text" name="item_pricex" placeholder="ITEM PRICE" id="item_pricex" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="user_id" placeholder="SELLER ID" id="user_id" class="form-control"></div>
				<div class="fld_input"><select name="service_idx" id="service_idx" class="form-control">	
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
                    </form>
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
		<form class="form-signin" method="post" id="service-game-form"><center>
										
				<div class="fld_input"><input type="text" name="order_id" placeholder="ORDER ID" id="order_id" class="form-control"></div>
                <div class="fld_input"><input type="text" name="item_ida" placeholder="ITEM ID" id="item_ida" class="form-control"></div>
				<div class="fld_input"><input type="text" name="buyer_id" placeholder="BUYER ID" id="buyer_id" class="form-control"></div>
				<div class="fld_input"><input type="text" name="seller_id" placeholder="SELLER ID" id="seller_id" class="form-control"></div>
				<div class="fld_input"><input type="text" name="service_ida" placeholder="SERVICE ID" id="service_ida" class="form-control"></div>
				<div class="fld_input"><input type="text" name="item_pricea" placeholder="ITEM PRICE" id="item_pricea" class="form-control"></div>
				<div class="fld_input"><input type="text" name="game_id" placeholder="GAME ID" id="game_id" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="buy_game_item">BUY</button>
					</form>
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
		<h4 class="modal-title"><center>POST ITEM FOR SALE</center</h4>
		</div>
		<div class="modal-body">
		<form class="form-signin" method="post" id="add-game-form" ><center>
                <div class="fld_input"><input type="text" name="item_name" placeholder="Item Name" id="item_name" class="form-control"></div>
			
				<div class="fld_input"><select name="item_quality" id="item_quality"  class="form-control">
				<?php	$game=get_item_category(1);
				echo '<option value="" disabled selected>'.$game['item_type'].'</option>';
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
                                    while ($res = $result->fetch_assoc()){
										if($res['item_quality']!= NULL){
										echo '<option value='.$res['item_quality'].'>'.$res['item_quality'].'</option>';}}}?>
										</select></div>
				<div class="fld_input"><select name="item_rarity" id="item_rarity" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_rarity'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_rarity']!= NULL){
										echo '<option value='.$res['item_rarity'].'>'.$res['item_rarity'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="item_detail1" id="item_detail1" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_category1'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_detail1']!= NULL){
										echo '<option value='.$res['item_detail1'].'>'.$res['item_detail1'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="item_detail2" id="item_detail2" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_category2'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_detail2']!= NULL){
										echo '<option value='.$res['item_detail2'].'>'.$res['item_detail2'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><select name="item_detail3" id="item_detail3" class="form-control">	
				<option value="" disabled selected><?php echo $game['item_category3'];?></option>
									<?php
                                    $result = get_item_information(1);
                                    if($result->num_rows > 0){
									while ($res = $result->fetch_assoc()){
										if($res['item_detail3']!= NULL){
										echo '<option value='.$res['item_detail3'].'>'.$res['item_detail3'].'</option>';
										}}}?>
										</select></div>
				<div class="fld_input"><input type="text" name="item_price" placeholder="Item Price" id="item_price" class="form-control"></div>
				<div class="fld_input"><input type="file" name="item_image" placeholder="Item Image" id="item_image" value="" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="user_id" placeholder="User ID" id="user_id" class="form-control" value="<?php echo $_SESSION['user_session']; ?>"></div>		
				<div class="fld_input"><input type="hidden" name="order_id" placeholder="User ID" id="order_id" class="form-control" value="1"></div>	
				<div class="fld_input"><select name="service_id" id="service_id" class="form-control">	
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
                    </form>
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
		<h4 class="modal-title"><center>SELL ITEM </h4>
		</div>
		<div class="modal-body">
		<form class="form-signin" method="post" id="add-game-form"><center>
                <div class="fld_input"><input type="hidden" name="goods_id" placeholder="GOODS ID" id="goods_id" class="form-control"></div>
				<div class="fld_input"><input type="text" name="item_pricex" placeholder="ITEM PRICE" id="item_pricex" class="form-control"></div>
				<div class="fld_input"><input type="hidden" name="user_id" placeholder="SELLER ID" id="user_id" class="form-control"></div>
				<div class="fld_input"><select name="service_idx" id="service_idx" class="form-control">	
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
                    </form>
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
		<form class="form-signin" method="post" id="add-game-form" ><center>
                <div class="fld_input"><input type="text" name="transaction_type" placeholder="Transaction Type" id="transaction_type" class="form-control"></div>
				<div class="fld_input"><input type="text" name="transaction_desc" placeholder="Transaction Description" id="transaction_desc" class="form-control"></div>
				<div class="fld_input"><input type="text" name="transaction_amount" placeholder="Item Price" id="transaction_amount" class="form-control"></div>
				<div class="fld_input"><input type="text" name="item_id" placeholder="User ID" id="item_id" class="form-control"></div>
				<div class="fld_input"><input type="text" name="buyer_user_id" placeholder="Service ID" id="buyer_user_id" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="save_game_item">Save</button>
                    </form>
			</div>
		</div>
	</div>
	</div>
</div>

<div class="modal fade" id="bargain_game_item_modal1" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>BARGAIN</h4>
		</div>
		<div class="modal-body">
		<form class="form-signin" method="post" id="add-game-form" ><center>
                <div class="fld_input"><input type="text" name="transaction_type" placeholder="Transaction Type" id="transaction_type" class="form-control"></div>
				<div class="fld_input"><input type="text" name="transaction_desc" placeholder="Transaction Description" id="transaction_desc" class="form-control"></div>
				<div class="fld_input"><input type="text" name="transaction_amount" placeholder="Item Price" id="transaction_amount" class="form-control"></div>
				<div class="fld_input"><input type="text" name="item_id" placeholder="User ID" id="item_id" class="form-control"></div>
				<div class="fld_input"><input type="text" name="buyer_user_id" placeholder="Service ID" id="buyer_user_id" class="form-control"></div>
            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="save_game_item">Save</button>
                    </form>
			</div>
		</div>
	</div>
	</div>
</div>






