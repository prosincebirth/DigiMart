<?php include('head.php'); ?>
<?php if($_SESSION['user_status']!=1){header("Location: index.php"); exit();} ?>
<?php include('header.php'); ?>

<!-- <link rel="preload stylesheet" href="assets/css/item-card.css" as="style" crossorigin>
<link rel="preload stylesheet" href="assets/css/item-grid.css" as="style" crossorigin> -->
<link rel="preload stylesheet" href="assets/css/user-wallet.css" as="style" crossorigin>

<main>
<div class="modal fade" id="add_withdraw_info_modal" role="dialog">
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>Withdraw GCash</h4>
		</div>
		<div class="modal-body">
	
				<h3 style="text-align:center;">GCash</h3>
				<div class="fld_input"><input type="number" name="amount_with" id="amount_with" placeholder="Amount"  class="form-control" ></div>	
				<div class="fld_input"><input type="number" name="mobile_with" id="mobile_with" placeholder="Mobile Number"   class="form-control"></div>						
				</div>
				<div class="modal-footer">
						<button class="btn btn-success" type="button" value="insert_withdraw_info">Confirm</button>
				</div>
			
		</div>
	</div>
	</div></div>
	</div>

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
                                <li href="javascript:void(0);" class="active"><span ><i class="fas fa-wallet"></i>My wallet</span></li>
                                <li onclick="location.href='user_account.php'"><span  ><i class="fas fa-cog"></i>Account</span></li>
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
                        <form action="user_wallet.php" method="POST">
                        <div class="grid-item">
                            <div class="body">
                                <div class="tab">
                                    <ul>
                                        <li><span onclick="location.href='user_wallet.php'">Deposit</span></li>
                                        <li class="active"><span onclick="location.href='user_withdraw.php'" >Withdraw</span></li>
                                        <li><span onclick="location.href='user_transaction.php'">Transaction</span></li>
                                    </ul>
                                </div>
                                
                                <div class="user-wallet">
                                    <table>
                                        <tbody>

                                            <!-- <tr>
                                                <td class="t-left">Deposit ammount</td>
                                                <td class="t-right">
                                                    <div class="user-deposit">
                                                        <span value="custom" class="on">
                                                            <input type="text" placeholder="Deposit amount" value="<?php $value = 0; $value = $_POST["1h"] ?? "";if($value==0){echo "";}else{echo $value;}  ?>"></form>
                                                        </span>
                                                        <span class="button"><button name="1h" type="submit" value="100">₱ 100</button></span>
                                                        <span class="button"><button name="1h" type="submit" value="500">₱ 500</button></span>
                                                        <span class="button"><button name="1h" type="submit" value="1000">₱ 1000</button></span>
                                                    </div>
                                                </td>
                                            </tr>
                                                     -->
                                            <tr>
                                                <td class="t-left">Withdraw method</td>
                                                <td class="t-right">
                                                    <div class="user-deposit">
                                                        <div class=user-deposit-btn>
                                                            <ul>
                                                                <li title="You can deposit using gcash."><a href="#add_withdraw_info_modal" data-toggle="modal" class="selected"><img src="https://img.icons8.com/plasticine/50/000000/gcash.png">GCash</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- <tr>
                                                
                                                <td></td>
                                                <td class="t-left">
                                                    <div class="user-deposit-confirm">
                                                        <span class="button"><a href="#deposit_gcash" data-toggle="modal" class="user-deposit-btn">Confirm</a></span>
                                                    </div>
                                                </td>
                                            </tr> -->
                                        </tbody>
                                    </table>

                                    <!-- <div class="user-wallet-section">
                                        <div class="user-wallet-notice-">
                                            <div style="border-bottom: 1px solid var(--light-gray-color);"></div>
                                            <ul>
                                                <li>Deposit notice</li>
                                                <li>1. Single order limit 5-20000；</li>
                                                <li>2. 1% service fee will be charged for refund or withdrawal；</li>
                                                <li>3. In case of illegal transfer of fund, the account will be frozen。</li>
                                            </ul>
                                            <div style="border-bottom: 1px solid var(--light-gray-color);"></div>
                                        </div>
                                    </div> -->
                                    
                                    <div class="user-wallet-section">
                                        <h2>Withdraw records</h2>
                                        <div class="table--container">
                                            <table class="user-wallet-history">
                                                <thead>
                                                    <tr>
                                                        <th> Witdraw amount</th>
                                                        <th> Mobile number</th>
                                                        <th> Create time</th>
                                                    </tr>
                                                </thead>
                                                <?php	$get_withdraw_info = get_withdraw_info($_SESSION['user_session']); foreach($get_withdraw_info as $get_withdraw_info){?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo '<span>'.$get_withdraw_info['withdraw_amt'].' </span>'; ?></td>
                                                        <td><?php echo '<span>'.$get_withdraw_info['withdraw_number'].' </span>'; ?></td>
                                                        <td><?php echo '<span>'.$get_withdraw_info['withdraw_date_created'].' </span>'; ?></td>
                                                       
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
        </div>
    </section>
</main>
<!-- 
<?php
    $is_success = $_GET['success'];
    if( $is_success == true ) {
        echo '<script>
        $(document).ready(function() {
            $("body").addClass("modal-open").css({"padding-right":"16px"}).append("<div class=modal-backdrop></div>");
            $(".modal-backdrop").addClass("fade in");
            $("#desposit_success").addClass("in").css({"display":"block", "padding-right":"16px"});    
        });
        </script>';
    }
?> -->

<?php include('footer.php'); ?>
