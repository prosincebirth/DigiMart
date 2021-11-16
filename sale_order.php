<?php include('head.php'); ?>
<?php if(!isset($_SESSION)){header("Location: index.php"); exit();}?>
<?php include('header.php'); ?>

<main>    
<section class="market_section">
    <div class="container">
        <div class="market_wrapper">
            <div class="mainbar">
                <div class="market_item--wrapper">
                    <div class="market_tabs">
                        <ul class="market_tab--list">
						<li class='active'><span onclick="window.location.href='sale_order.php';">Sale Order</span></li>
                            <li ><span onclick="window.location.href='sale_order_record.php';">Sale Order Record</span></li>
                            <li ><span onclick="window.location.href='my_saleorder.php';">My Sale Order</span></li>
                            <li><span data-toggle="modal" data-target="#sale_game_item_modal">Post Item for Sale</span></li>  
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
                            <div class="table">
                            <table class="table_list--items">
                                <thead>
                                    <tr>
                                        <th>Items</th>
                                        <th>Buyer</th> 
                                        <th>Type</th>   
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Create Time</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php	$result = display_sale_order($_SESSION['user_session'],1);
										if($result->num_rows > 0){
										while ($res = $result->fetch_assoc()){?>      
							<tbody>
								<tr>
									<td>
										<div class="img_text">
											<?php echo '<img class="item__img" src="data:image/png;base64,'.base64_encode($res['goods_image']).'"height="72" >'; ?>
											<span><?php echo '<a href="goods_buy.php?goods_id='.$res['goods_id'].'";><span>'.$res['goods_quality'].' '.$res['goods_name'].'</span></a>';?></span>	  
										</div>
									</td>
                                    <td>
										<span><?php echo $res['buyer_name'];?></span>
									</td>
                                    <td>
                                            <?php 
                                         if($res['transaction_order_id']==1){
                                            echo '<span>Sale Order</span>';
                                         }else if($res['transaction_order_id']==2){
                                            echo "<span>Buy Order</span>";		
                                         }else if($res['transaction_order_id']==3){
                                            echo "<span>Bargain Order</span>";				
                                         }
                                            ?>
									</td>
									<td>
										<span><?php echo $res['transaction_amount'];?></span>									
									</td>
									<td>
										<span><?php echo $res['transaction_quantity'];?></span>
									</td>
                                    <td>
										<span><?php echo $res['transaction_quantity']*$res['transaction_amount'] ;?></span>
									</td>
									<td>
									<span><?php echo $res['transaction_date'];?></span>										
									</td>
									<td>
                                    <div class="item__group--cta">
											<button class="buy_btn wishlist_btn"  data-toggle="modal" data-target="#accept_sale_order_modal" 
											data-transaction_id_o="<?php echo $res['transaction_id'];?>" 
                                            data-user_id_o="<?php if(isset($_SESSION['user_session'])){echo $_SESSION['user_session']; }?>" 
										    >Accept</button>
											
											<button class="buy_btn wishlist_btn"  data-toggle="modal" data-target="#refuse_sale_order_modal" 
											data-transaction_id_p="<?php echo $res['transaction_id'];?>" 
                                            data-user_id_p="<?php if(isset($_SESSION['user_session'])){echo $_SESSION['user_session']; }?>" 
										    >Refuse</button>
										
										</div>
											<?php } }?>
										
									</td>
									
								</tr>

							</tbody>

                            
                            </table>
                            </div>
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