<?php require 'account/database.php'; ?>
<?php include 'components/modal.php'; ?>

<header class="main_header">
    <div class="container">
        <div class="nav_wrapper">        
            <nav class="left_nav">
                <div class="ham_menu js-mobile-menu">                    
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="left_nav__list">
                    <li class="left_nav__list___item active"><a href="./">Home</a></li>
                    <li class="left_nav__list___item"><a href="sale_market.php">Market</a></li>
                </ul>
            </nav>
            <?php if(isset($_SESSION['user_session'])){?>
            <nav class="right_nav">
                <ul class="right_nav__list">                   
                    <li class="right_nav__list___item"><a href="sale_order_record.php">Sales</a></li>
                    <li class="right_nav__list___item"><a href="bargain_order_record.php">Bargain</a></li>
                    <li class="right_nav__list___item"><a href="buy_order_record.php">Buy Order</a></li>
                </ul>
            <?php }else{?>
            <nav class="right_nav">
                <?php }?> 
                <div class="other_nav">
                    <div class="game_wrapper js-drop">
                        <div class="selected_game">
                            <span class="game_icon">
                                <i class="fa">&#xf11b;</i>
                            </span>
                            <span class="game_title">DOTA 2</span>
                            <span class="caret_down">
                                <i class="fa">&#xf107;</i>
                            </span>
                        </div>
                        <div class="game_dropdown">
                            <ul class="game_list__dropdown">
                                <li class="game_list__item">
                                    <span class="game_icon">
                                        <i class="fa">&#xf11b;</i>
                                    </span>
                                    <span>DOTA 2</span>
                                </li>
                                <li class="game_list__item">
                                    <span class="game_icon">
                                        <i class="fa">&#xf11b;</i>
                                    </span>
                                    <span>CS:GO</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    

                    <a class="mail visually-hidden" href="#">
                        <span class="email_icon">
                            <i class="fa">&#xf0e0;</i>
                        </span>
                    </a>
      
                    <?php 
                    if(isset($_SESSION['user_session'])){// for login
                        echo "<a class='header_btn' href='user_account.php'>
                            <span class='small-hide'>".$_SESSION['user_username']."</span>
                            <span class='large-hide'><i class='far fa-user-circle'></i></span>
                            </a>";
                        echo "<a class='header_btn' href='logout.php'>
                        <span class='small-hide'>Logout</span>
                        <span class='large-hide'><i class='fas fa-sign-out-alt'></i></span>
                        
                        </a>";
                      }else{
                        echo "<a class='header_btn' data-toggle='modal' href='#login_modal'>
                        <span class='small-hide'>Login</span>
                        <span class='karge-hide'><i class='fas fa-sign-in-alt'></i></span>
                        </a>";
                      }
                    ?>

            </nav>
        </div>
    </div>
</header>

<nav id="mobile-menu" class="large-hide">   
    <span class="mobile-menu_close">
        <i class="fas fa-times"></i>
        <span>CLOSE</span>
    </span> 
    <ul class="left_nav__list">
        <li class="left_nav__list___item active"><a href="./">Home</a></li>
        <li class="left_nav__list___item"><a href="sale_market.php">Market</a></li>
        <?php if(isset($_SESSION['user_session'])){?>
        <li class="left_nav__list___item"><a href="bargain_order.php">Bargain</a></li>
        <li class="left_nav__list___item"><a href="sale_order.php">Sales</a></li>
        <li class="left_nav__list___item"><a href="buy_order.php">Buy Order</a></li>
    <?php }else{ echo "<a class='header_btn' data-toggle='modal' href='#login_modal'></a>"; }?>
    </ul>
   
</nav>

<script>
    $(document).ready(function() {
        $('.js-mobile-menu').on('click', function() {
            if( $(this).hasClass('active') ) {
                $(this).removeClass('active');
                $('#mobile-menu').removeClass('open');
                $('body').removeClass('open');
            } else {
                $(this).addClass('active');
                $('#mobile-menu').addClass('open');
                $('body').addClass('open');
            }
        });
        
        $('.mobile-menu_close').on('click, touchstart', function() {
            $('.js-mobile-menu').removeClass('active');
            $('#mobile-menu').removeClass('open');
            $('body').removeClass('open');
        });
    });
</script>