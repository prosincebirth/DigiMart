<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">List of Users</h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Username</th>
            <th> User Email </th>
            <th> Last Login </th>
            <th> Status</th>
            <th> Action </th>
          </tr>
        </thead>
        <tbody>
        <?php	$display_users_admin = display_users_admin();foreach($display_users_admin as $users){ ?>
          <tr>
            <td><?php echo $users['user_id']; ?></td>
            <td><?php echo $users['user_username']; ?></td>
            <td><?php echo $users['user_email']; ?></td>
            <td><?php echo date('Y-m-d',strtotime($users['last_login_date'])); ?></td>
            <?php if($users['user_status']==0){
                echo '<td>Inactive</td>';
              }else if($users['user_status']==1){
                echo '<td><span style="color:blue"><b><i class="fas fa-spinner fa-pulse"></i> Active</td>';
              }else if($users['user_status']==2){
                echo '<td>Canceled</td>';
              } ?>
              <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> BAN </button>
                </form>
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