<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/market.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<main>
    <section class="market_section">
        <div class="container_full-width">
            <div class="market_wrapper">
                <div class="mainbar">
                    <div class="market_item--wrapper">
                        <div class="market_tabs">
                            <ul class="market_tab--list">
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_game_modal">Add New Game</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#edit_game_modal">Game Services</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_services_modal">Game Items</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#edit_services_modal">Sale Orders</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_game_item_modal">Buy Orders</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_game_modal">Bargain Orders</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_game_modal">Transaction Logs</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_game_modal">Review Logs</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_game_modal">Ticket Logs</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_game_modal">List of Orders</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_game_modal">List of Sales</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_game_modal">List of Users</button>
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
<?php include('components/modal.php')?>
<?php include_once('footer.php'); ?>



</body>
</html>