<div id="add_item_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Item <span class="close">&times;</span></h4>
			</div>
			<div class="modal-body">
				<label>Item Name</label>
				<input type="text" name="add_item_name" placeholder="Item Name" id="add_item_name" class="form-control">
				<label>Item Quantity</label>
				<input type="number" name="add_item_quantity" placeholder="Item Quantity" min="1" id="add_item_quantity" class="form-control">
				<label>Item Price</label>
				<input type="number" name="add_item_price" placeholder="0.00" id="add_item_price" class="form-control" min="0">
			</div>
			<div class="modal-footer">
					<button class="btn btn-success" value="save_add_item">Save</button>
					<button class="btn btn-danger">Close</button>
			</div>
		</div>
	</div>