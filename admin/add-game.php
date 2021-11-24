<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

?>

<div class="modal fade" id="add_new_game_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Game Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div class="form-group">
                <label> Name </label>
                <input type="text" class="form-control"  name="game_name_a" placeholder="Game Name" id="game_name_a" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="game_desc_a" placeholder="Game Description" id="game_desc_a" class="form-control">
            </div>

            <div class="form-group">
                <label>Steam Game ID</label>
                <input type="text" name="steam_game_id_a" placeholder="Steam Game ID" id="steam_game_id_a" class="form-control">
            </div>        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" value="add_new_game_modal" class="btn btn-primary">Confirm</button>
        </div>
    </div>
  </div></div>

<div class="modal fade" id="edit_new_game_modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Game Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div class="form-group">
                <label> Name </label>
                <input type="text" class="form-control"  name="game_name_b" placeholder="Game Name" id="game_name_b" class="form-control">
                <input type="hidden" class="form-control"  name="game_id_b" placeholder="Game Name" id="game_id_b" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="game_desc_b" placeholder="Game Description" id="game_desc_b" class="form-control">
            </div>

            <div class="form-group">
                <label>Steam Game ID</label>
                <input type="text" name="steam_game_id_b" placeholder="Steam Game ID" id="steam_game_id_b" class="form-control">
            </div>        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" value="edit_new_game_modal" class="btn btn-primary">Confirm</button>
        </div>
    </div>
  </div></div>

<div class="modal fade" id="delete_new_game_modal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Game Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div class="form-group"> 
              <input type="hidden" class="form-control" name="game_id_c" placeholder="Game Name" id="game_id_c" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" value="delete_new_game_modal" class="btn btn-primary">Confirm</button>
        </div>
    </div>
  </div></div>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Game 
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_new_game_modal">Add Game</button>
    <div style="float:right; padding-top:7px; width:fit-content;">
      <input type="text" value="" placeholder= "search... " style=""><button type="submit" class="btn-search"><i class="fas fa-search "></i></button>
    </div>
    </h6>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Steam Game ID</th>
            <th>Game Name </th>
            <th>Description </th>
            <th colspan="2"><center>Actions</center></th>
          </tr>
        </thead>
        <tbody>
                 <?php
                    $result = display_all_games();
										if($result->num_rows > 0){
										while ($res = $result->fetch_assoc()){ ?>  
     
          <tr>
          <td><?php echo $res['game_id']; ?></td>
            <td><?php echo $res['steam_game_id'];?></td>
            <td><?php echo $res['game_name'];?></td>
            <td><?php echo $res['game_desc'];?></td>
            <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit_new_game_modal"
									data-1="<?php echo $res['game_id']; ?>"  
                  data-2="<?php echo $res['steam_game_id'];?>"     
                  data-3="<?php echo $res['game_name']; ?>"   
                  data-4="<?php  echo $res['game_desc']; ?>"   
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