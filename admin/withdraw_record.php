<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Withdraw Records</h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Number</th>
            <th> Amount </th>
            <th> Method</th>
            <th> Date Created</th>
            <th> User </th>
          </tr>
        </thead>
        <tbody>
        <?php	$display_withdraw_record_admin = display_withdraw_record_admin();foreach($display_withdraw_record_admin as $withdraw){ ?>
          <tr>
            <td><?php echo $withdraw['withdraw_id']; ?></td>
            <td><?php echo $withdraw['withdraw_number']; ?></td>
            <td><?php echo $withdraw['withdraw_amt']; ?></td>
            <td><?php echo $withdraw['withdraw_method']; ?></td>
            <td><?php echo date('Y-m-d',strtotime($withdraw['withdraw_date_created'])); ?></td>
            <td><?php echo $withdraw['user_username_admin']; ?></td>
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