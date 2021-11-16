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
                            <li ><span onclick="window.location.href='buy_order.php';">Buy Orders</span></li>
                            <li class='active'><span onclick="window.location.href='buy_order_record.php';">Buy Order Records</span></li>
                            <li ><span onclick="window.location.href='my_buyorder.php';">My Buy Order</span></li>
                            <li><span data-toggle="modal" data-target="#buyorder_game_item_modal">Place Buy Order</span></li>   
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
                                        <th>Seller</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Create Time</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                             
                            <?php	$result = display_buy_order_records($_SESSION['user_session'],1);
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
										<span><?php echo $res['seller_name'];?></span>									
									</td>
									<td>
										<span><?php echo $res['transaction_amount'];?></span>									
									</td>
									<td>
										<span><?php echo $res['transaction_quantity'];?></span>
									</td>
									<td>
									<span><?php echo $res['transaction_date'];?></span>										
									</td>
									<td>
                                        <?php
                                         if($res['transaction_status']==0){
                                            echo '<span> Success </span>';
                                        }else if($res['transaction_status']==1){
                                            echo "<span> Waiting for seller to accept </span>";
                                            echo '<br>';
                                            echo '<br>';
                                            echo '<button class="buy_btn wishlist_btn"  
                                            data-toggle="modal" 
                                            data-target="#cancel_buy_order_modal_i" 
                                            data-transaction_id_ii='.$res['transaction_id'].' data-user_id_ii='.$_SESSION['user_session'].' >Cancel Order</button>';
                                         }else if($res['transaction_status']==2){
                                            echo "<span> Canceled Order </span>";
                                         }else if($res['transaction_status']==3){
                                            echo "<span>Waiting for seller to send</span>";
                                            echo '<br>';
                                            echo '<br>';
                                            echo '<button class="buy_btn wishlist_btn"  
                                            data-toggle="modal" 
                                            data-target="#cancel_buy_order_modal_i" 
                                            data-transaction_id_ii='.$res['transaction_id'].' data-user_id_ii='.$_SESSION['user_session'].' >Cancel Order</button>';
                                         }else if($res['transaction_status']==4){//Waiting for Buyer's Response
                                            echo '<span> Waiting for your response</span>';	
                                            echo '<br>';
                                            echo '<br>';
                                            echo '<button class="buy_btn wishlist_btn"  
                                                data-toggle="modal" 
                                                data-target="#item_confirmation_buy_order_modal" 
                                                data-transaction_id_m='.$res['transaction_id'].'
                                                data-user_id_m='.$_SESSION['user_session'].'>Item recieved</button>';
                                            echo ' ';
                                            echo '<button> Start Dispute </button>';
                                         }else if($res['transaction_status']==5){
                                            echo '<span> Seller Canceled </span>';	
                                         }else if($res['transaction_status']==6){
                                            echo '<span> Buyer Canceled</span>';
                                         }else if($res['transaction_status']==7){
                                            echo '<span> Refunded to the Buyer </span>';	
                                         }else if($res['transaction_status']==8){
                                            echo '<span> Refunded to the Seller </span>';	
                                         }else if($res['transaction_status']==9){
                                            echo '<span> Refunded</span>';	
                                         }else if($res['transaction_status']==10){
                                            echo '<span> Canceled by the Admin </span>';	
                                         }else if($res['transaction_status']==11){
                                            echo '<span> Transaction Dispute </span>';	
                                         }else if($res['transaction_status']==12){
                                            echo '<span> Sold Out </span>';	
                                         }
                                         
                                         } }?>
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