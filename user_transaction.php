<?php include('head.php'); ?>
<?php if($_SESSION['user_status']!=1){header("Location: index.php"); exit();} ?>
<?php include('header.php'); ?>

<!-- <link rel="preload stylesheet" href="assets/css/item-card.css" as="style" crossorigin>
<link rel="preload stylesheet" href="assets/css/item-grid.css" as="style" crossorigin> -->
<link rel="preload stylesheet" href="assets/css/user-messages.css" as="style" crossorigin>

<main>
    <section class="market_section">
        <div class="container">
            <div class="layout">
                <div class="column col1">
                    <div class="panel">
                    <div class="user-image">
                            <div class="image">
                                <img src="http://via.placeholder.com/70x70" alt="">
                            </div>
                            <div class="name">
                                <h2><?php echo $_SESSION['user_username']; ?></h2>
                            </div>
                        </div>
                        <div class="menu">
                            <ul>
                            <li onclick="location.href='user_wallet.php' class="active"><span ><i class="fas fa-wallet"></i>My wallet</span></li>
                                <li onclick="location.href='user_account.php'" ><span  ><i class="fas fa-cog"></i>Account</span></li>
                                <li onclick="location.href='user_messages.php'" ><span ><i class="fas fa-envelope"></i>Messages</span></li>

                                <!-- <li href="javascript:void(0);"><span ><i class="fas fa-comment-dots"></i>Support</span></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="column col2"> 
                    <div class="main">
                        <div class="user-setting">

                            <div class="title-header">
                                <ul>
                                    <li>Transaction ID</li>
                                    <li>Type</li>
                                    <li>Changes</li>
                                    <li>Date Created</li>
                                </ul>
                                <table class=list-tab width="100%">
                                <?php	$get_transaction_history = get_transaction_history($_SESSION['user_session']); foreach($get_transaction_history as $transaction_history){?>
                                         
                                    <tbody>
                                        <tr>
                                            <td><?php echo '<h4>'.$transaction_history['transaction_id'].' </h4>'; ?></td>
                                            <?php   if($transaction_history['order_id']==1){
                                                        echo '<td><h4>Sale</h4></td>';}
                                                    else if($transaction_history['order_id']==2){
                                                        echo '<td><h4>Buy</h4></td>';}
                                                    else if($transaction_history['order_id']==3){
                                                        echo '<td><h4>Bargain</h4></td>';}

                                                    if($transaction_history['buyer_id']==$_SESSION['user_session']){
                                                        echo '<td><h4 style="color:red">- '.number_format($transaction_history['transaction_amount'] * $transaction_history['transaction_quantity'],2).' </h4></td>';}
                                                    else if($transaction_history['seller_id']==$_SESSION['user_session']){
                                                        echo '<td><h4 style="color:green">+ '.number_format($transaction_history['transaction_amount'] * $transaction_history['transaction_quantity'],2).' </h4></td>';
                                                    } 
                                                       
                                            ?>

                                           
                                            <td><?php echo '<h4>'.$transaction_history['transaction_date'].' </h4>';?></td>
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
    </section>
</main>

<?php include('footer.php'); ?>