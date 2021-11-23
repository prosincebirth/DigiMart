<?php $search=""; if(isset($_POST["search_item_query"])){$search = trim($_POST['search_item']);}?>
<?php include('head.php'); ?>
<?php include('header.php'); ?>

<link rel="preload stylesheet" href="assets/css/item-card.css" as="style" crossorigin>
<link rel="preload stylesheet" href="assets/css/item-grid.css" as="style" crossorigin>

<main>
    <section class="market_section">
        <div class="container">
            <div class="market_wrapper">
                <div class="mainbar">
                    <div class="market_item--wrapper">
                        <div class="market_tabs">
                            <ul class="market_tab--list">
                            <li ><span onclick="window.location.href='sale_market.php';">Sale</span></li>
                                <li class='active'><span onclick="window.location.href='buy_market.php';">Purchase</span></li>
                            </ul>
                        </div>
                        <div class="market_tabs">
                            <form method='post' action="" enctype="multipart/form-data" class="form-search">
                                <ul class="market_tab--list">
                                    <li><input type="text" name="search_item" id="search_item" value="" class="form-control" placeholder="search..."></li>
                                    <li><button type="submit" name="search_item_query"> <i class="fas fa-search">Search</i> </button></form></li>
                                </ul>   
                                </form>
                            </div>
                        <div class="market_item--container global-market">
                            <div class="items_wrapper">
                                <ul class="item_grid item_grid--6 item_grid--2-mobile">
                                    <?php
                                    //require_once 'account/database.php';
                                    $result = display_items_buy($search);
                                    if($result->num_rows > 0){
                                    while ($res = $result->fetch_assoc()){?> 
                                    <li class="item_grid--item">
                                        <?php include('item-card.php'); ?>
                                    </li>
                                    <?php } }?>
                                </ul>

                                <div class="pagination">
                                    <ul>
                                        <li><a href="">Previous</a></li>
                                        <li><a href="?page=1">1</a></li>
                                        <li><a href="?page=2">2</a></li>
                                        <li><a href="?page=3">3</a></li>
                                        <li><a href="">Next</a></li>
                                    </ul>
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