<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>

<link rel="stylesheet" href="assets/css/market.css">

<main>
    <section class="market_section">
        <div class="container_full-width">
            <div class="market_wrapper">
                <div class="mainbar">
                    <div class="market_item--wrapper">
                        <div class="market_tabs">
                            <ul class="market_tab--list">
                                <li class="active"><span><button value="games">Games</button></span></li>
                                <li><span>Newly Listed Items</span></li>
                                <li><span>Buy Orders</span></li><br></br>
                            </ul>
                        </div>
                        <div class="market_item--container market_popular--items">
                            <div class="items_wrapper">
                                <table class="table_list--items">
                                    <thead>
                                        <tr>
                                            <th><span>Items</span></th>
                                            <th><span>Price</span></th>
                                            <th><span>Type</span></th>
                                            <th><span>Seller</span></th>
                                            <th><span>Time</span></th>
                                        </tr>
                                    </thead>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once('footer.php'); ?>

</body>
</html>