<?php include('head.php'); ?>
<?php include('header.php'); ?>

<!-- <link rel="preload stylesheet" href="assets/css/item-card.css" as="style" crossorigin>
<link rel="preload stylesheet" href="assets/css/item-grid.css" as="style" crossorigin> -->
<link rel="preload stylesheet" href="assets/css/user.css" as="style" crossorigin>

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
                                <li><button href="javascript:void(0);"><i class="fas fa-wallet"></i>My wallet</button></li>
                                <li><button class="active" href="javascript:void(0);"><i class="fas fa-cog"></i>Account</button></li>
                                <li><button href="javascript:void(0);"><i class="fas fa-envelope"></i>Messages</button></li>
                                <li><button href="javascript:void(0);"><i class="fas fa-star"></i>Favorites</button></li>
                                <li><button href="javascript:void(0);"><i class="fas fa-ticket-alt"></i>My coupon</button></li>
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
                                        <td class="t-left">API key <i class="fas fa-question-circle" data-toggle="popover" title="About the API key" 
                                        data-content="CSGO trade require seller to provide API Key for trading offer detection.
                                         API Key can query and cancel trade offers, but cannot create and accept trade offers."></i></td>
                                        <td class="t-left" style="position: relative;">
                                            <span>
                                                <input type="text" name="steam_api_key"size="42" placeholder="API key" value spellcheck="false">
                                            </span>
                                            <a href="javascript:void(0);" target=""data-url="javascript:void(0);">To get<i class="fas fa-caret-right"></i></a>
                                            <i class="fas fa-question-circle" data-toggle="popover" title="Steps:" 
                                            data-content="1.Click Set;
                                                2.If you don't currently create an API Key, enter a domain name, then click Register; If you already have an API Key but it is not registered by yourself, it is recommended to log out and re-register;
                                               3.Copy and paste the API Key into the input box and click Save."
                                                 data-direction="right"></i>
                                        </td>
                                        <td class="t-right"><a href="javascript:void(0);" class="i-btn --i-btn-small">Save</a></td>
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
                            <h3>Preferences</h3>
                            <table class=list-tab width="100%">
                                <tbody>
                                    <tr>
                                        <td class="t-left" width="120">Bargain set</td>
                                        <td class="t-left"><span><i class="fas fa-check-square"></i>Enable bargains</span></td>
                                    </tr>
                                    <tr>
                                        <td class="t-left" width="120">Payment settings</td>
                                        <td class="t-left"><span><i class="fas fa-check-square"></i>Accept Alipay payment</span></td>
                                        <td class="t-left"><span><i class="fas fa-check-square"></i>Accept WeChat payment</span></td>
                                    </tr>
                                    <tr>
                                        <td class="t-left" width="120">Store display</td>
                                        <td class="t-left"><span><i class="fas fa-check-square"></i>Open</span></td>
                                    </tr>
                                    <tr>
                                        <td class="t-left" width="120">Display Currency</td>
                                        <td class="t-left"><select>  
                                            <option value="">Select currency</option>
                                            <option value="php">PHP</option>  
                                            <option value="usd">UDS</option>  
                                            <option value="rmb">RMB</option>  
                                            </select>   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="t-left">Sale limited buyer to sending offer first <i class="fas fa-question-circle" 
                                        data-toggle="popover" title="Preference description" data-content="check this option if you don't want to send offer first when your items are sold" data-direction="right"></i></td>
                                        <td class="t-left"><span><i class="fas fa-check-square"></i>Open</span></td>
                                    </tr>
                                    <tr>
                                        <td class="t-left">Enable SMS notification</td>
                                        <td class="t-left"><span><i class="fas fa-check-square"></i>Open</span></td>
                                    </tr>
                                    <tr>
                                        <td class="t-left" width="120">Antiscam <i class="fas fa-question-circle" data-toggle="popover" 
                                        title="Preference description" data-content="Once turned on, 
                                        the system will help you intercept fake offers when the buff trade offer was canceled. 
                                        The “strict” option will block fake offers more aggressively, but with a small probability of misjudgment." data-direction="right"></i></td>
                                        <td class="t-left"><select>  
                                            <option value="strict">Strict</option>  
                                            <option value="basic">Basic</option>  
                                            <option value="off">Off</option>  
                                            </select>   </td>
                                    </tr>
                                        <td class="t-left">Inventory pricing</td>
                                        <td class="t-left"><select>  
                                                <option value="Steam">Steam price</option>  
                                                <option value="Buff">Buff price</option>  
                                        </select></td>
                                    </tr>
                                    <tr>
                                        <td class="t-left">Purchase Price Auto Noted <i class="fas fa-question-circle" data-toggle="popover" title="Preference description" 
                                        data-content="Automatically fill purchase price to item notes after buying items on BUFF."
                                        data-direction="right"></i></td>
                                        <td class="t-left"><span><i class="fas fa-check-square"></i>Open</span></td>
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