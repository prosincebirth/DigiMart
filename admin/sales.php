<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Sales</h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Transaction ID</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Type</th>
            <th>Buyer</th>
            <th>Seller</th>
            <th>Game Name</th>
            <th>Service Name</th>
            <th>Date Created</th>
            <th>Transaction Status</th>
          </tr>
        </thead>
        <tbody>
        <?php	$display_transaction_records_admin = display_transaction_records_admin();foreach($display_transaction_records_admin as $transaction){ ?>
          <tr>
            <td><?php echo $transaction['transaction_id']; ?></td>
            <td><?php echo $transaction['goods_name']; ?></td>
            <td><?php echo $transaction['transaction_quantity']; ?></td>
            <td><?php echo $transaction['transaction_amount']; ?></td>
            <td><?php echo $transaction['order_desc']; ?></td>
            <td><?php echo $transaction['buyer_name']; ?></td>
            <td><?php echo $transaction['seller_name']; ?></td>
            <td><?php echo $transaction['game_name']; ?></td>
            <td><?php echo $transaction['service_mode']; ?></td>
            <td><?php echo date('Y-m-d',strtotime($transaction['transaction_date'])); ?></td>
              <?php if($transaction['transaction_status']==0){
                echo '<td>Success</td>';
              }else if($transaction['transaction_status']==1){
                echo '<td>Active</td>';
              }else if($transaction['transaction_status']==2){
                echo '<td>Canceled</td>';
              } ?>

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