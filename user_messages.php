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
                    <div class="panel user__panel">

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
                                <li><span onclick="location.href='user_wallet.php'"><i class="fas fa-wallet"></i>My wallet</span></li>
                                <li onclick="location.href='user_account.php'" ><span  ><i class="fas fa-cog"></i>Account</span></li>
                                <li onclick="location.href='user_messages.php'" class="active"><span ><i class="fas fa-envelope"></i>Messages</span></li>
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
                                    <li><span>Message Content</span></li>
                                    <li><span>Time</span></li>
                                </ul>
                                <table class=list-tab width="100%">
                                <?php	$get_notification = get_notification($_SESSION['user_session']); foreach($get_notification as $notification){?>
                                         
                                    <tbody>
                                        <tr>
                                            <td><?php echo '<h4>'.$notification['notification_message'].' </h4>'; ?></td>
                                            <td><?php echo '<h4>'.$notification['notification_date_created'].' </h4>';?></td>
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