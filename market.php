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
                      
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
</div>

<div id="add_game_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Game <span class="close">&times;</span></h4>
			</div>
			<div class="modal-body">
            <form class="form-signin" method="post" id="add-game-form"><center>
                <div class="fld_input"><input type="text" name="game_name" placeholder="Game Name" id="game_name" class="form-control"></div>
				<div class="fld_input"><input type="text" name="game_desc" placeholder="Game Description" id="game_desc" class="form-control"></div>
				<div class="fld_input"><input type="text" name="game_region" placeholder="Game Region" id="game_region" class="form-control"></div>
				<div class="fld_input"><input type="text" name="game_server" placeholder="Game Server" id="game_server" class="form-control"></div>

            </div>
			<div class="modal-footer">
					<button class="btn btn-success" type="button" value="save_new_game">Save</button>
                    </form>
			</div>
                
		</div>
	</div>
</div>



</main>

<?php include_once('footer.php'); ?>
</body>
</html>
