
<div class="modal fade" id="add_game_modal" role="dialog">
	<div class="modal-dialog">

	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
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


<div class="modal fade" id="add_game_item_modal" role="dialog">
	<div class="modal-dialog">
	
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Add Game Item </h4>
		</div>
		<div class="modal-body">
		<form class="form-signin" method="post" id="add-game-form" ><center>
                <div class="fld_input"><input type="text" name="item_name" placeholder="Item Name" id="item_name" class="form-control"></div>
				<div class="fld_input"><input type="text" name="item_desc" placeholder="Item Description" id="item_desc" class="form-control"></div>
				<div class="fld_input"><input type="text" name="item_price" placeholder="Item Price" id="item_price" class="form-control"></div>
				<div class="fld_input"><input type="file" name="item_image" placeholder="Item Image" id="item_image"></div>
				<div class="fld_input"><input type="text" name="user_id" placeholder="User ID" id="user_id" class="form-control"></div>
				<div class="fld_input"><input type="text" name="service_id" placeholder="Service ID" id="service_id" class="form-control"></div>

            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="save_game_item">Save</button>
					
                    </form>
			</div>
		</div>
	</div>
	</div>
</div>

<div class="modal fade" id="edit_game_item_modal" role="dialog">
	<div class="modal-dialog">
	
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Edit Game Item </h4>
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
</div>

<div class="modal fade" id="add_transaction" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Add Game Item </h4>
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








