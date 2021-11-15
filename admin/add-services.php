<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="add_new_service_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Game Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Service Mode </label>
                <input type="text" class="form-control"  name="service_mode_d" placeholder="Service Mode" id="service_mode_d" class="form-control">
            </div>
            <div class="form-group">
                <label>Service Description</label>
                <input type="text" name="service_desc_d" placeholder="Service Description" id="service_desc_d" class="form-control">
            </div>
            <label>Game</label>
            <div class="fld_input"><select name="game_id_d" id="game_id_d" class="form-control">	
									<?php $result = get_game();
                      if($result->num_rows > 0){
									    while ($res = $result->fetch_assoc()){
										if($res['game_id']!= NULL){
										echo '<option value='.$res['game_id'].'>'.$res['game_name'].'</option>';
										}}}	
										?>
										</select></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" value="add_new_service_modal" class="btn btn-primary">Confirm</button>
        </div>
    </div>
  </div></div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Service 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_new_service_modal">Add Services</button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Service Name </th>
            <th>Game</th>
            <th>Description </th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
                    <?php
                    $result = display_all_services();
										if($result->num_rows > 0){
										while ($res = $result->fetch_assoc()){ 
                    ?> 
          <tr>
            <td><?php echo $res['service_id']; ?></td>
            <td><?php echo $res['service_mode']; ?></td>
            <td><?php echo $res['game_name']; ?></td>
            <td><?php echo $res['service_desc']; ?></td>
            <td>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit_new_game_modal"
									data-21="<?php echo $res['service_id']; ?>"  
                  data-22="<?php echo $res['service_mode'];?>"     
                  data-23="<?php echo $res['service_desc']; ?>"   
                  >Edit</button>
            </td>
            <td>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete_new_game_modal"
									data-11="<?php echo $res['game_id']; ?>"  
                  >DELETE</button>
            </td>
          </tr>
          <?php  } }?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>