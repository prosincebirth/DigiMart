<?php include('head.php'); ?>
<?php include('header.php'); ?>

<!-- <link rel="preload stylesheet" href="assets/css/item-card.css" as="style" crossorigin>
<link rel="preload stylesheet" href="assets/css/item-grid.css" as="style" crossorigin> -->
<link rel="preload stylesheet" href="assets/css/user-account.css" as="style" crossorigin>

<main>
    <section class="market_section">
        <div class="container">
            <div class="layout">
                <div class="column col1">
                    <div class="panel">

                        <div class="user-image">
                            <div class="image">
                                <img src="http://via.placeholder.com/70x70" input type="file" name="item_image"alt="">

                                
                            </div>
                            <div class="name">
                                <h2><?php echo $_SESSION['user_username']; ?></h2>
                            </div>
                        </div>

                        <div class="menu">
                            <ul>
                            <li><button onclick="location.href='user-wallet.php'"><i class="fas fa-wallet"></i>My wallet</button></li>
                                <li><button class="active" href="javascript:void(0);"><i class="fas fa-cog"></i>Account</button></li>
                                <li><button href="javascript:void(0);"><i class="fas fa-envelope"></i>Messages</button></li>
                                <li><button href="javascript:void(0);"><i class="fas fa-comment-dots"></i>Support</button></li>
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="column col2"> 
                    <div class="main">
                        <div class="user-setting">
                            <h3>Basic Settings</h3>
                            <table class="list-tab" >
                                <tbody>
                                    <tr>
                                        <td class="t-left">Avatar</td>
                                        <td class="t-left"> <img src="http://via.placeholder.com/46x46" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td class="t-left" width="120">Username</td>
                                        <td class="t-left"><span class="name-tab" style="display: inline">Username</span></td>
                                        <td class="t-right"><a href="javascript:void(0);" class="btn-change">Change</a></td>    
                                    </tr>
                                </tbody>
                            </table>

                            <h3>Security settings</h3>
                            <table class=list-tab width="100%">
                                <tbody>
                                    <tr>
                                        <td class="t-left" width="120">Phone number</td>
                                        <td class="t-left"><span><i class="fas fa-check-circle"></i>Bound</span><span id="mobile" >Connecting phone number 63-********69</span></td>
                                        <td class="t-Right"><a href="javascript:void(0);" class="i-btn --i-btn-small">Change Phone</a></td>
                                    </tr>
                                    <tr>
                                        <td class="t-left" width="120">Real-name verification</td>
                                        <td class="t-left"><span><i class="fas fa-times-circle"></i>Not verfied</span></td>
                                        <td class="t-right"><a href="javascript:void(0);" class="i-btn --i-btn-small">To verify</a></td>
                                    </tr>
                                    <tr>
                                        <td class="t-left" width="120">Password settings</td>
                                        <td></td>
                                        <td class="t-right"><a href="javascript:void(0;)" class="i-btn --i-btn-small">Change password</a></td>
                                    </tr>
                                    <tr class="steam-bind"> 
                                        <td class="t-left" width="120">Steam ID</td>
                                        <td class="t=left"><span><a href="javascript:void(0);">123456789123456</a></span></td>
                                        <td class="t-right"><a href="javascript:void(0);" class="i-btn --i-btn-small">Unbind</a></td>
                                    </tr>
                                    <tr>
                                
                                    </tr>
                                    <tr>
                                        <td class="t-left">Trade url</td>
                                        <td class="t-left" style="position: relative;">
                                            <span>
                                                <input type="text" name="steam_api_key" class="i-text" size="42" placeholder="Trade url" value spellcheck="false">
                                            </span>
                                            <a href="javascript:void(0);" target="" class="a-gray"data-url="javascript:void(0);">To get<i class="fas fa-caret-right"></i></a>
                                        </td>
                                        <td class="t-right"><a href="javascript:void(0);" class="i-btn --i-btn-small">Save</a></td>
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