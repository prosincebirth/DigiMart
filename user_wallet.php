<?php include('head.php'); ?>
<?php if($_SESSION['user_status']!=1){header("Location: index.php"); exit();} ?>
<?php include('header.php'); ?>

<!-- <link rel="preload stylesheet" href="assets/css/item-card.css" as="style" crossorigin>
<link rel="preload stylesheet" href="assets/css/item-grid.css" as="style" crossorigin> -->
<link rel="preload stylesheet" href="assets/css/user-wallet.css" as="style" crossorigin>

<main>
<div class="modal fade" id="add_deposit_info_modal" role="dialog">
	<div class="vertical-alignment-helper">
	<div class="modal-dialog vertical-align-center">
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"><center>Deposit GCash</h4>
		</div>
		<div class="modal-body">
	
				<h3 style="text-align:center;">GCash</h3>
				<div class="fld_input"><input type="number" name="amount" id="amount" placeholder="0"   class="form-control" ></div>	
				<div class="fld_input"><input type="text" name="first_name" id="first_name" placeholder="First name"   class="form-control"></div>						
				<div class="fld_input"><input type="text" name="last_name" id="last_name" placeholder="Last name"   class="form-control"></div>						
				<div class="fld_input"><input type="number" name="mobile" id="mobile" placeholder="Mobile Number"   class="form-control"></div>						
				</div>
				<div class="modal-footer">
						<button class="btn btn-success" type="button" value="insert_deposit_info">Confirm</button>
				</div>
			
		</div>
	</div>
	</div></div>
	</div>


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
                                        <li class="active"><span onclick="location.href='user_wallet.php'">Deposit</span></li>
                                        <li><span onclick="location.href='user_withdraw.php'" >Withdraw</span></li>
                                        <li><span onclick="location.href='user_transaction.php'">Transaction</span></li>
                                    </ul>
                                </div>
                                
                                <div class="user-wallet">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="t-left">Deposit method</td>
                                                <td class="t-right">
                                                    <div class="user-deposit">
                                                        <div class=user-deposit-btn>
                                                            <ul>
                                                                <li title="You can deposit using gcash."><a href="#add_deposit_info_modal" data-toggle="modal" class="selected"><img src="https://img.icons8.com/plasticine/50/000000/gcash.png">GCash</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <div class="user-wallet-section">
                                        <h2>Deposit records</h2>
                                        <div class="table--container">
                                            <table class="user-wallet-history">
                                                <thead>
                                                    <tr>
                                                        <th> Deposit amount</th>
                                                        <th> Name</th>
                                                        <th> Mobile number</th>
                                                        <th>Create time</th>
                                                    </tr>
                                                </thead>
                                                <?php $get_deposit_info = get_deposit_info($_SESSION['user_session']); foreach($get_deposit_info as $get_deposit_info){?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo '<span>'.$get_deposit_info['deposit_amt'].' </span>'; ?></td>
                                                        <td><?php echo '<span>'.$get_deposit_info['deposit_name'].' </span>'; ?></td>
                                                        <td><?php echo '<span>'.$get_deposit_info['deposit_number'].' </span>'; ?></td>
                                                        <td><?php echo '<span>'.$get_deposit_info['deposit_date_created'].' </span>'; ?></td>
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
