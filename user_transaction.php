<?php include('head.php'); ?>
<?php if($_SESSION['user_status']!=1){header("Location: index.php"); exit();} ?>
<?php include('header.php'); ?>

<!-- <link rel="preload stylesheet" href="assets/css/item-card.css" as="style" crossorigin>
<link rel="preload stylesheet" href="assets/css/item-grid.css" as="style" crossorigin> -->
<link rel="preload stylesheet" href="assets/css/user-wallet.css" as="style" crossorigin>

<main>
    <section class="market_section">
        <div class="container">
            <div class="layout">
                <div class="column col1">
                    <div class="panel user__panel">
                        <div class="user-image">
                            <div class="image">
                                <img src="" alt="">
                            </div>
                            <div class="name">
                                <h2><?php echo $_SESSION['user_username']; ?></h2>
                            </div>
                        </div>
                        <div class="menu">
                            <ul>
                                <li href="user_wallet.php;" class="active"><span ><i class="fas fa-wallet"></i>My wallet</span></li>
                                <li><span onclick="location.href='user_account.php'" ><i class="fas fa-cog"></i>Account</span></li>
                                <li onclick="location.href='user_messages.php'"><span ><i class="fas fa-envelope"></i>Messages</span></li>
                                <!-- <li href="javascript:void(0);"><span ><i class="fas fa-comment-dots"></i>Support</span></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="column col2"> 
                    <!-- header -->
                    <div class="grid-container">
                        <div class="grid-item-header balance__section">
                            <div class="header">
                                <div class="row">
                                    <div class="col">
                                        <div class="info">
                                            <div class="icon"><i class="fas fa-money-bill-wave fa-3x"></i></div>
                                            <div class="info-title">
                                                
                                                <span>Balance</span>
                                            </div>
                                            <div class="info-ammount">
                                            <?php	$display_balance = display_balance($_SESSION['user_session']);foreach($display_balance as $balance){ ?>
                                                <span>₱ <?php echo $balance['wallet_balance']; ?> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="info">
                                            <div class="icon"><i class="fas fa-credit-card  fa-3x"></i></div>
                                            <div class="info-title">
                                                <span>Frozen Balance</span>
                                            </div>
                                            <div class="info-ammount">
                                                <span>₱ <?php echo $balance['wallet_frozen_balance']; }?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- body -->
                        <div class="grid-item">
                            <div class="body">
                                <div class="tab">
                                    <ul class="tab-list">
                                        <li><span onclick="location.href='user_wallet.php'">Deposit</span></li>
                                        <li><span onclick="location.href='user_withdraw.php'" >Withdraw</span></li>
                                        <li class="active"><span onclick="location.href='user_transaction.php'">Transaction</span></li>
                                    </ul>
                                </div>
                                
                                <div class="user-wallet">
                                    <div class="table--container">
                                        <table class=list-tab width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Transaction ID</th>
                                                    <th>Type</th>
                                                    <th>Changes</th>
                                                    <th>Date Created</th>
                                                </tr>
                                            </thead>
                                            <?php	$get_transaction_history = get_transaction_history($_SESSION['user_session']); foreach($get_transaction_history as $transaction_history){?>
                                                
                                            <tbody>
                                                <tr>
                                                    <td><?php echo '<span>'.$transaction_history['transaction_id'].' </span>'; ?></td>
                                                    <?php   if($transaction_history['order_id']==1){
                                                                echo '<td><span>Sale</span></td>';}
                                                            else if($transaction_history['order_id']==2){
                                                                echo '<td><span>Buy</span></td>';}
                                                            else if($transaction_history['order_id']==3){
                                                                echo '<td><span>Bargain</span></td>';}

                                                            if($transaction_history['buyer_id']==$_SESSION['user_session']){
                                                                echo '<td><span style="color:red">- '.number_format($transaction_history['transaction_amount'] * $transaction_history['transaction_quantity'],2).' </span></td>';}
                                                            else if($transaction_history['seller_id']==$_SESSION['user_session']){
                                                                echo '<td><span style="color:green">+ '.number_format($transaction_history['transaction_amount'] * $transaction_history['transaction_quantity'],2).' </span></td>';
                                                            } 
                                                    ?>
                                                    <td><?php echo '<span>'.$transaction_history['transaction_date'].' </span>';?></td>
                                                </tr>
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>