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
                            <li ><span onclick="window.location.href='buy_order.php';">Buy Order</span></li>
                            <li ><span onclick="window.location.href='buy_order_record.php';">Buy Order Records</span></li>
                            <li class='active'><span onclick="window.location.href='my_buyorder.php';">My Buy Order</span></li>
                            <li><span data-toggle="modal" data-target="#buyorder_game_item_modal">Place Buy Order</span></li>   
                        </ul>
                        
                    </div>
                  
                    <div class="market_item--container">
                        <div class="items_wrapper">
                            <div class="table">
                            <table class="table_list--items">
                                <thead>
                                    <tr>
                                        <th>Items</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Create Time</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php	$result = display_mybuy_orders($_SESSION['user_session'],1);//user logged in and game id
										if($result->num_rows > 0){
										while ($res = $result->fetch_assoc()){?>      
							<tbody>
								<tr>
									<td>
										<div class="img_text">
											<?php echo '<img class="item__img" src="data:image/png;base64,'.base64_encode($res['goods_image']).'"height="72" >'; ?>
											<span><?php echo '<a href="goods_buy.php?goods_id='.$res['goods_id'].'";><span>'.$res['goods_quality'].' '.$res['goods_name'].'</span></a>';?> </span>	                               
										</div> 
									</td>
                           <td><?php if($res['order_id']==1){echo '<span>Sale Order</span>';}
                                       else if($res['order_id']==2){echo "<span>Buy Order</span>";}
                                       else if($res['order_id']==3){echo "<span>Bargain Order</span>";}?></td>
									<td><span>₱ <?php echo $res['item_price'];?></span></td>
									<td><span><?php echo $res['item_quantity'];?></span></td>
									<td><span><?php echo $res['item_date_added'];?></span></td>
									<td><?php
                                         if($res['item_status']==0){
                                            echo '<span><i class="fas fa-check-circle"></i> Success </span>';
                                         }else if($res['item_status']==1){
                                            echo '<span style="color:orange"><b><i class="fas fa-clock"></i> Waiting for seller</b></span>';
                                            echo '<br>';
                                            echo '<br>';
                                            echo ' ';	
                                            echo '<button 
                                            data-toggle="modal" 
                                            data-target="#cancel_buy_order_modal" 
                                            data-item_id_i='.$res['item_id'].' data-user_id_i='.$_SESSION['user_session'].' >Cancel Order</button>';
                                         }else if($res['item_status']==2){
                                          echo '<span style="color:red"><i class="fas fa-times-circle"></i> <b>Failure</b></span>';
                                          echo '<br>';
                                          echo '<br>';
                                          echo ' ';	
                                          echo '<span style="color:gray"><u>Canceled Order</u></span>';
                                         }else if($res['item_status']==3){
                                            echo "<span> Waiting for Seller's Response </span>";	
                                         }else if($res['item_status']==4){
                                            echo "<span> Waiting for Buyer's Response</span>";	
                                         }else if($res['item_status']==5){
                                            echo '<span> Seller Canceled </span>';	
                                         }else if($res['item_status']==6){
                                            echo '<span> Buyer Canceled</span>';
                                         }else if($res['item_status']==7){
                                            echo '<span> Refunded to the Buyer </span>';	
                                         }else if($res['item_status']==8){
                                            echo '<span> Refunded to the Seller </span>';	
                                         }else if($res['item_status']==9){
                                            echo '<span> Refunded</span>';	
                                         }else if($res['item_status']==10){
                                            echo '<span> Canceled by the Admin </span>';	
                                         }else if($res['item_status']==11){
                                            echo '<span> Transaction Dispute </span>';	
                                         }else if($res['item_status']==12){
                                            echo '<span style="color:green"><i class="fas fa-check-circle"></i> <b>Success</b></span>';
                                            echo '<br>';
                                            echo '<br>';
                                            echo ' ';	
                                            echo '<span style="color:gray"><u>Buy Order Ended</u></span>';
                                         }
                                         } }?>
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