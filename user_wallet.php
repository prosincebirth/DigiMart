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
                                <img src="http://via.placeholder.com/70x70" alt="">
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
                                        <li href="javascirpt:void(0);" class="active"><span >Deposit</span></li>
                                        <li><span href="javascirpt:void(0);" >Withdraw</span></li>
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
                                                <td class="t-left">Deposit method</td>
                                                <td class="t-right">
                                                    <div class="user-deposit">
                                                        <div class=user-deposit-btn>
                                                            <ul>
                                                                <li title="You can pay using gcash."><a href="#deposit_gcash" data-toggle="modal" class="selected"><img src="https://img.icons8.com/plasticine/50/000000/gcash.png">GCash</a></li>
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
                                        <h2>Deposit records</h2>
                                        <div class="table--container">
                                            <table class="user-wallet-history">
                                                <thead>
                                                    <tr>
                                                        <th>Serial number</th>
                                                        <th> Deposit amount</th>
                                                        <th> Payment account</th>
                                                        <th> Progress</th>
                                                        <th>Create time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>00001</td>
                                                        <td>1500.00</td>
                                                        <td>321321</td>
                                                        <td style="color:#008000; font-weight:bold;"><i class="fas fa-check-circle"></i> success</td>
                                                        <td>10:30</td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr>
                                                        <td>00002</td>
                                                        <td>1500.00</td>
                                                        <td>321321</td>
                                                        <td style="color:#008000; font-weight:bold;"><i class="fas fa-check-circle"></i> success</td>
                                                        <td>10:30</td>
                                                    </tr>
                                                </tbody>
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

<?php include('footer.php'); ?>