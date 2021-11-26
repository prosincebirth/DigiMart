<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="modal fade" id="view_dispute_details">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="color:#4e73df" class="modal-title" id="exampleModalLabel">Dispute Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div class="form-group">
                <label style="color:#4e73df"> Transaction ID :</label> <span id="transaction_id" id="transaction_id"> </span>
            </div>
            <div class="form-group">
              <label style="color:#4e73df"> Transaction amount :</label> ₱<span id="transaction_amount" id="transaction_amount"> </span>
            </div>
            <div class="form-group">
              <label style="color:#4e73df"> Transaction date :</label> <span id="transaction_date" id="transaction_date"> </span>
            </div>
            <div class="form-group">
              <label style="color:#4e73df"> Item name :</label> <span id="transaction_item_name" id="transaction_item_name"> </span>
            </div>
            <div class="form-group">
              <label style="color:#4e73df"> Order type :</label> <span id="transaction_order_type" id="transaction_order_type"> </span>
            </div>
            <div class="form-group">
              <label style="color:#4e73df"> Seller name :</label> <span id="transaction_seller" id="transaction_seller"> </span>
            </div>
            <div class="form-group">
             <label style="color:#4e73df"> Buyer name :</label> <span id="transaction_buyer" id="transaction_buyer"> </span>
            </div><div class="form-group">
              <label style="color:#4e73df"> Service mode :</label> <span id="transaction_service" id="transaction_service"> +Order</span>
            </div>
            <div class="form-group">
                <label style="color:#4e73df">Transaction proof</label>
                <img src="data:image/png;base64," height="260">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
    </div>
  </div></div>



<div class="modal fade" id="update_dispute_details">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Dispute Status </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Refund to</label>
                <input type="hidden" name="transaction_id_update" placeholder="transaction id" id="transaction_id_update" class="form-control">
                <input type="hidden" name="dispute_id_update" placeholder="dispute id" id="dispute_id_update" class="form-control">
                <div class="fld_input"><select name="update_dispute_status" id="update_dispute_status" class="form-control">						
                    <option value="7">Buyer</option>';
                    <option value="8">Seller</option>';
										</select></div>
                
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" value="update_dispute_details" class="btn btn-primary">Confirm</button>
        </div>
    </div>
  </div></div> 

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Disputes</h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Title </th>
            <th> Message</th>
            <th> Date & Time</th>
            <th> Refunded to</th>
            <th> Status </th>
            <th colspan="2"><center>Actions</center></th>

          </tr>
        </thead>
        <tbody>
        <?php	$display_dispute_admin = display_dispute_admin();foreach($display_dispute_admin as $dispute){ ?>
          <tr>
            <td><?php echo $dispute['dispute_id']; ?></td>
            <td><?php echo $dispute['dispute_title']; ?></td>
            <td><?php echo $dispute['dispute_message']; ?></td>
            <td><?php echo $dispute['dispute_date_created']; ?></td>
            <td><?php 
                  if($dispute['transaction_status']==7){echo 'Buyer';}
                  else if($dispute['transaction_status']==8){echo 'Seller';}
                  else {echo 'Pending';}
            ?></td>
            <td><?php 
                  if($dispute['dispute_status']!=1){echo 'Complete';}
                  else if($dispute['dispute_status']==1){echo 'Active';}?>
            </td>
            <td>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#view_dispute_details"
                  data-transaction_id="<?php echo $dispute['transaction_id']?>"    
                  data-transaction_amount="<?php echo $dispute['transaction_amount'] * $dispute['transaction_quantity']?>"    
                  data-transaction_date="<?php echo $dispute['transaction_date']?>"    
                  data-transaction_item_name="<?php echo $dispute['goods_name']?>"    
                  data-transaction_order_type="<?php echo $dispute['transaction_order_id'],' Order'?>"    
                  data-transaction_seller="<?php echo $dispute['seller_name']?>"    
                  data-transaction_buyer="<?php echo $dispute['buyer_name']?>"    
                  data-transaction_service_mode="<?php echo $dispute['transaction_service_id']; ?>"    
                  data-transaction_proof="<?php echo base64_encode($dispute['transaction_proof'])?>"
                  >View</button> 
            </td>
            <td><?php if($dispute['dispute_status']==1){ ?>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#update_dispute_details"
                  data-transaction_id_update="<?php echo $dispute['transaction_id']?>"    
                  data-dispute_id_update="<?php echo $dispute['dispute_id']?>"    
                  >Update</button><?php } ?>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>