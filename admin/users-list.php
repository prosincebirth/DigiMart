<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Users List</h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Name </th>
            <th> Username</th>
            <th> Last login </th>
            <th> Status</th>
            <th> Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> 1 </td>
            <td> Sample name </td>
            <td> Sample username</td>
            <td> November 2, 2021 - 7:00 pm</td>
            <td> Active</td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> BAN</button>
                </form>
            </td>
          </tr>
          <tr>
            <td> 2 </td>
            <td> Sample name </td>
            <td> Sample username</td>
            <td> November 2, 2021 - 8:00 pm</td>
            <td> Banned</td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> UNBAN</button>
                </form>
            </td>
          </tr>
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