<?php include('head.php'); ?>
<?php include('header.php'); ?>

<main>    
<section class="market_section">
    <div class="container">
        <div class="market_wrapper">
            <div class="mainbar">
                <div class="market_item--wrapper">
                    <div class="market_tabs">
                        <ul class="market_tab--list">
                            <li class='active'><span>Sale</span></li>
                            <li><span>Sale Records</span></li>
                            <li><span>Post Item to Sell</span></li>
                        </ul>
                        
                    </div>
                    <div class="market_tabs">
                        
                        <div class="search__bar">
                            <input type="search" name="" id="" class="form-control">
                            <button type="submit">
                            <i class="fas fa-search"></i>
                            <span>Search</span>
                            </button>
                        </div>
                    </div>
                    <div class="market_item--container">
                        <div class="items_wrapper">
                            <table class="table_list--items">
                                <thead>
                                    <tr>
                                        <th>Items</th>
                                        <th>Price</th>
                                        <th>Type</th>
                                        <th>Buy</th>
                                        <th>Creaete time</th>
                                    </tr>
                                </thead>
                                <?php	$result = display_market_sell_goods	($_GET['goods_id']);
                        	if($result->num_rows > 0){
                        	while ($res = $result->fetch_assoc()){?>      
							<tbody>
								<tr>
									<td>
										<div class="img_text">
											<?php echo '<img class="item__img" src="data:image/png;base64,'.base64_encode($res['item_image']).'"height="72" >'; ?>
											<span><?php echo $res['item_quality']," ",$res['item_name'];?></span>	
										</div>
									</td>
									<td>
										<div class="img_text">

											<?php echo '<img class="item__seller" src="data:image/png;base64,'.base64_encode($res['item_image']).'"height="40" >'; ?>
											<span><?php echo $res['user_username'];?></span>	
										</div>
									</td>
									<td>
										<span><?php echo $res['service_mode'];?></span>	

									</td>
									<td>
										<span><?php echo $res['item_price'];?></span>										
									</td>
									<td>
										<div class="item__group--cta">
											<a class="buy_btn wishlist_btn"  data-toggle="modal" data-target="#buy_game_item_modal" 
											data-item_id="<?php echo $res['item_id'];?>" 
											data-seller_id="<?php echo $res['user_id'];?>" 
											data-service_id="<?php echo $res['service_id'];?>" 
											data-item_price="<?php echo $res['item_price'];?>" 
											data-game_id="<?php echo $res['game_id'];?>" 
											data-order_id="<?php echo $res['order_id'];?>"
											data-buyer_id="<?php echo $_SESSION['user_session'];?>"> Buy</a>
											
											<a  data-toggle="modal" data-target="#bargain_game_item_modal">Bargain</a>
											<a>
											</a>

										</div>
									</td>
									<?php } }?>
								</tr>

							</tbody>
                            </table>
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
</section>
</main>

<?php include('components/modal.php')?>
<?php include('footer.php'); ?>
</body>
</html>