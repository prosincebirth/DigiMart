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
							
                            <li  class='active'><span onclick="window.location.href='bargain_order.php';">Bargain Orders</span></li>
                            <li><span onclick="window.location.href='bargain_order_record.php';">Bargain Order Records</span></li>
							<li ><span onclick="window.location.href='my_bargain.php';">My Bargain</span></li>
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
                                        <th>Bargain Price</th>
										<th>Quantity</th>
                                        <th>Buyer</th>	
                                        <th>Create Time</th>
										<th></th>
                                    </tr>
                                </thead>
                                <?php	$result = display_my_bargain_orders($_SESSION['user_session']);
										if($result->num_rows > 0){
										while ($res = $result->fetch_assoc()){?>      
							    <tbody>
								    <tr>
									    <td>
										<div class="img_text">
											<?php echo '<img class="item__img" src="data:image/png;base64,'.base64_encode($res['goods_image']).'"height="72" >'; ?>
											<span><?php echo $res['goods_quality']," ",$res['goods_name'];?></span>	
										</div>
									</td>
									<td>
										<span><?php echo $res['item_price'];?></span>									
									</td>
									<td>
									<span><?php echo $res['item_quantity']; ?></span>		
									</td>
									<td>
									
									<span><?php echo $res['seller_name'];?></span>								
									</td>
									<td>
									<span><?php echo $res['item_date_added'];?></span>										
									</td>
									<td>
										<div class="item__group--cta">
											<button class="buy_btn wishlist_btn"  data-toggle="modal" data-target="#buy_game_item_modal" 
											data-item_price_f="<?php echo $res['item_price'];?>" 
											data-item_id_f="<?php echo $res['item_id'];?>"
											data-item_stock_f="<?php echo $res['item_quantity'];?>"
											data-buyer_id_f="<?php if(isset($_SESSION['user_session'])){echo $_SESSION['user_session']; }?>" 
											data-seller_id_f="<?php echo $res['user_id'];?>" 
											data-service_id_f="<?php echo $res['service_id'];?>" 
											data-game_id_f="<?php echo $res['game_id'];?>" 
											data-order_id_f="<?php echo '1'?>"> Accept</button>
											
											<button data-dismiss="modal" data-toggle="modal" data-target="#bargain_item_modal"
											data-item_price_g="<?php echo $res['item_price'];?>" 
											data-item_id_g="<?php echo $res['item_id'];?>"
											data-item_stock_g="<?php echo $res['item_quantity'];?>"
											data-buyer_id_g="<?php if(isset($_SESSION['user_session'])){echo $_SESSION['user_session']; }?>" 
											data-seller_id_g="<?php echo $res['user_id'];?>" 
											data-service_id_g="<?php echo $res['service_id'];?>" 
											data-game_id_g="<?php echo $res['game_id'];?>" 
											data-order_id_g="<?php echo '3'?>"> Refuse</button>
										
										</div>
											<?php } }?>
											</td>
										<td>										
									</td>
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