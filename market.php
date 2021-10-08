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
                                <button value="add_item">Games</button>
                                <button value="games">Game Services</button>
                                <button value="games">Game Items</button>
                                <button value="games">Sale Orders</button>
                                <button value="games">Buy Orders</button>
                                <button value="games">Bargain Orders</button>
                                <button value="games">Transaction Logs</button>
                                <button value="games">Review Logs</button>
                                <button value="games">Ticket Logs</button>
                                <button value="games">List of Orders</button>
                                <button value="games">List of Sales</button>
                                <button value="games">List of Users</button>
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
    <?php include 'components/modal.php'; ?>           
</main>

<?php include_once('footer.php'); ?>



</body>
</html>