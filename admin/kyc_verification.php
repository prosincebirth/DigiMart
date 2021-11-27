<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="modal fade" id="view_kyc_info_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="color:#4e73df" class="modal-title" id="exampleModalLabel">User Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div class="form-group">
                <label style="color:#4e73df"> First name :</label> <span id="firstname_kyc" id="firstname_kyc"> </span>
            </div>
            <div class="form-group">
              <label style="color:#4e73df"> Middle name :</label> <span id="middlename_kyc" id="middlename_kyc"> </span>
            </div>
            <div class="form-group">
              <label style="color:#4e73df"> Last name :</label> <span id="lastname_kyc" id="lastname_kyc"> </span>
            </div>
            <div class="form-group">
              <label style="color:#4e73df"> Address :</label> <span id="address_kyc" id="address_kyc"> </span>
            </div>
            <div class="form-group">
              <label style="color:#4e73df"> Identification type :</label> <span id="id_kyc" id="id_kyc"> </span>
            </div>
            <div class="form-group">
              <label style="color:#4e73df"> Identification number :</label> <span id="idnumber_kyc" id="idnumber_kyc"> </span>
            </div>
            <label style="color:#4e73df">Identification proof</label>
            <div class="form-group">
               
                <img src="data:image/png;base64," height="260px">
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
                    <option value="0">Buyer</option>';
                    <option value="2">Seller</option>';
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
    <h6 class="m-0 font-weight-bold text-primary">KYC Verification List</h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> User </th>
            <th> Date & Time Created</th>
            <th> Status </th>
            <th colspan="2"><center>Actions</center></th>

          </tr>
        </thead>
        <tbody>
        <?php	$display_kyc_verification_admin = display_kyc_verification_admin();foreach($display_kyc_verification_admin as $kyc){ ?>
          <tr>
            <td><?php echo $kyc['kyc_id']; ?></td>
            <td><?php echo $kyc['user_username']; ?></td>
            <td><?php echo $kyc['kyc_date_created']; ?></td>
            <td><?php 
                      if($kyc['kyc_status']==0){echo 'Complete';}
                      else if($kyc['kyc_status']==1){echo 'Pending';}
                      else if($kyc['kyc_status']==2){echo 'Denied';}?>
                  </td>
            <td>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#view_kyc_info_modal"
                  data-firstname_kyc	="<?php echo $kyc['firstname_kyc']?>"
                  data-middlename_kyc		="<?php echo $kyc['middlename_kyc']?>"
                  data-lastname_kyc	="<?php echo $kyc['lastname_kyc']?>"
                  data-address_kyc	="<?php echo $kyc['address_kyc']?>"
                  data-id_kyc	="<?php
                      if($kyc['id_kyc']==1){echo "Driver's License";}
                      else if($kyc['id_kyc']==2){echo 'Student ID';}
                      else if($kyc['id_kyc']==3){echo 'Passport';}
                      else if($kyc['id_kyc']==4){echo 'National ID';}
                      ?>"
                  data-idnumber_kyc	="<?php echo $kyc['idnumber_kyc']?>"
                  data-id_proof_kyc="<?php echo base64_encode($kyc['id_proof_kyc'])?>"
                  >View</button> 
            </td>  
            <td>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#view_dispute_details"
                  data-transaction_proof="<?php echo base64_encode($dispute['transaction_proof'])?>"
                  >View</button> 
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