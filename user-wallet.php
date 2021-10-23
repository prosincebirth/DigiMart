<?php include('head.php'); ?>
<?php include('header.php'); ?>

<!-- <link rel="preload stylesheet" href="assets/css/item-card.css" as="style" crossorigin>
<link rel="preload stylesheet" href="assets/css/item-grid.css" as="style" crossorigin> -->
<link rel="preload stylesheet" href="assets/css/user-wallet.css" as="style" crossorigin>

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
                                <h2>User Name</h2>
                            </div>
                        </div>

                        <div class="menu">
                            <ul>
                                <li><button class="active" href="javascript:void(0);"><i class="fas fa-wallet"></i>My wallet</button></li>
                                <li><button href="javascript:void(0);"><i class="fas fa-cog"></i>Account</button></li>
                                <li><button href="javascript:void(0);"><i class="fas fa-envelope"></i>Messages</button></li>
                                <li><button href="javascript:void(0);"><i class="fas fa-star"></i>Favorites</button></li>
                                <li><button href="javascript:void(0);"><i class="fas fa-ticket-alt"></i>My coupon</button></li>
                                <li><button href="javascript:void(0);"><i class="fas fa-comment-dots"></i>Support</button></li>
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="column col2"> 
                    <div class="header">
                        <div class="col">
                            <div class="fas fa-money-bill-wave"></div>
                            <div class="info">
                                <div class="info-title">
                                    <span>Balance Alipay</span>
                                </div>
                                <div class="info-ammount">
                                    <span>₱ 0</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fas fa-credit-card"></div>
                            <div class="info">
                                <div class="info-title">
                                    <span>Balance other</span>
                                </div>
                                <div class="info-ammount">
                                    <span>₱ 0</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="info">
                                <div class="info-title">
                                    <span>Frozen balance</span>
                                </div>
                                <div class="info-ammount">
                                    <span>₱ 0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column col3">
                    <div class="bloack-header">
                        <ul class="tab">
                            <li class="" ><a href="javascirpt:void(0);">Deposit</a></li>
                            <li><a href="javascirpt:void(0);">Withdraw</a></li>
                            <li><a href="javascirpt:void(0);">Transactions</a></li>
                        </ul>
                    </div>
                    <div class="user-wallet">
                        <table class="user-wallet-tab">
                            <tbody>

                                <tr>
                                    <td>Deposit ammount</td>
                                        <td>
                                            <div class="user-deposit">
                                                <span value="custom" class="on">
                                                    <input type="text" placeholder="Deposit amount">
                                                </span>
                                                <span value="100">₱ 100</span>
                                                <span value="100">₱ 500</span>
                                                <span value="100">₱ 1000</span>
                                            </div>
                                        </td>
                                       
                                </tr>

                                <tr>
                                    <td>Deposit method</td>
                                        <td>
                                            <div class="user-deposit">
                                                <div class=user-deposit-btn>
                                                    <ul>
                                                        <li title="You can pay using paypal." class="disable"><i class="fas fa-credit-card"></i>paypal</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="user-deposit">
                                            <a href="javascript:void(0);" class=user-deposit-confirm>Confirm</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="user-wallet-section">
                            <div class="user-wallet-notice-">
                                <div style="border-bottom: 1px solid var(--light-gray-color);"></div>
                                <ul>
                                    <li>Deposit notice</li>
                                    <li>1. Single order limit 5-20000；</li>
                                    <li>2. 1% service fee will be charged for alipay refund or withdrawal；</li>
                                    <li>3. In case of illegal transfer of fund, the account will be frozen。</li>
                                </ul>
                                <div style="border-bottom: 1px solid var(--light-gray-color);"></div>
                            </div>
                        </div>
                        <div class=user-wallet-section>
                            <h2>Deposit records</h2>
                            <div></div>
                            <table class="user-wallet-history">
                                <tbody>
                                    <tr>
                                        <th>Serial number</th>
                                        <th>Deposit amount</th>
                                        <th>Payment account</th>
                                        <th>Progress</th>
                                        <th>Create time</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>