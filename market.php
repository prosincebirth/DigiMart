<?php include('head.php'); ?>
<?php include('header.php'); ?>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<main>
    <section class="market_section">
        <div class="container_full-width">
            <div class="market_wrapper">
                <div class="mainbar">
                    <div class="market_item--wrapper">
                        <div class="market_tabs">
                            <ul class="market_tab--list">
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_game_modal">Add New Game</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#edit_game_modal">Edit Game</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_services_modal">Add Game Services</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#edit_services_modal">Edit Game Services</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sale_game_item_modal">Raw sale item </button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sale_game_item_modal_2">Page sale item</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#buy_game_item_modal">Buy Game</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#buyorder_game_item_modal">Raw buy order</button>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#buyorder_game_item_modal_2">Page buy order</button>
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
<?php include('footer.php'); ?>



</body>
</html>