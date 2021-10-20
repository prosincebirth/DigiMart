<header class="main_header">
    <div class="container">
        <div class="nav_wrapper">        
            <nav class="left_nav">
                <div class="ham_menu">
                    
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="ham_text">HOME</span>
                </div>
                <ul class="left_nav__list">
                    <li class="left_nav__list___item active"><a href="./">Home</a></li>
                    <li class="left_nav__list___item"><a href="market.php">Market</a></li>
                    <li class="left_nav__list___item"><a href="global-market.php">News</a></li>
                </ul>
            </nav>
            <nav class="right_nav">
                <ul class="right_nav__list">
                    <li class="right_nav__list___item"><a href="">Inventory</a></li>
                    <li class="right_nav__list___item"><a href="">Sales</a></li>
                    <li class="right_nav__list___item"><a href="">Buy Order</a></li>
                </ul>

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
                        echo "<a class='header_btn' href='logout.php'>Logout</a>";
                      }
                      else{
                        echo "<a class='header_btn' href='login.php'>Login</a>";
                        echo "<a class='header_btn' href='register.php'>Register</a>";
                      }

                    ?>
                    

                    <div class="user visually-hidden">
                        <div class="user_wrapper">
                            <span class="user_pic">
                                <i class="fa">&#xf2bd;</i>
                            </span>
                            <span class="user_detail">
                                USERNAME
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>