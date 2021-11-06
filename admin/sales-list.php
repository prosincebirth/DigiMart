<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Sales List</h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Item </th>
            <th> Description </th>
            <th> Date & Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> 1 </td>
            <td> Manifold Paradox </td>
            <td> DOTA 2 Item</td>
            <td> November 2, 2021 - 7:00 pm</td>
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