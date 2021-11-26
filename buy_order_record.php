<?php $search="";if(isset($_POST["search_item_query"])){$search = trim($_POST['search_item']);}?>
<?php include('head.php'); ?>
<?php if($_SESSION['user_status']!=1){header("Location: index.php"); exit();} ?>
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
                            <li class='active'><span onclick="window.location.href='buy_order_record.php';">Buy Order Records</span></li>
                            <li ><span onclick="window.location.href='my_buyorder.php';">My Buy Order</span></li>
                            <li><span data-toggle="modal" data-target="#buyorder_game_item_modal">Place Buy Order</span></li>   
                        </ul>
                    </div>
                   
                    <div class="market_tabs">
                    <form method='post' action="" enctype="multipart/form-data" class="form-search">
                        <ul class="market_tab--list">
                            <li><input type="text" name="search_item" id="search_item" value="<?php echo $search;?>" class="form-control" placeholder="search..."></li>
                            <li><button type="submit" name="search_item_query"> <i class="fas fa-search">Search</i> </button></form></li>
                        </ul>   
                        </form>
                    </div>

                    <div class="market_item--container">
                        <div class="items_wrapper">
                            <div class="table">
                            <table class="table_list--items">
                                <thead>
                                    <tr>
                                        <th>Items</th>
                                        <th>Seller</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Create Time</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                             
                            <?php	$result = display_buy_order_records($_SESSION['user_session'],1,$search);
										if($result->num_rows > 0){
										while ($res = $result->fetch_assoc()){?>      
                                        
							<tbody>
								<tr>
									<td>
										<div class="img_text">
											<?php echo '<img class="item__img" src="data:image/png;base64,'.base64_encode($res['goods_image']).'"height="72" >'; ?>
                                            <span><?php echo '<a href="goods_buy.php?goods_id='.$res['goods_id'].'";><span>  '.$res['goods_name'].'</span></a>';?></span>		
										</div>
									</td>
                                    <td><span><?php echo $res['seller_name'];?></span></td>
									<td><?php 
                                         if($res['transaction_order_id']==1){
                                            echo '<span>Sale Order</span>';
                                         }else if($res['transaction_order_id']==2){
                                            echo "<span>Buy Order</span>";		
                                         }else if($res['transaction_order_id']==3){
                                            echo "<span>Bargain Order</span>";				
                                         }?>
									</td>
                                    <td><span>₱ <?php echo $res['item_price'];?></span></td>
									<td><span><?php echo number_format($res['transaction_quantity'],2);?></span></td>
                                    <td><span>₱ <?php echo number_format($res['transaction_amount'],2);?></span></td>
                                    <td><span><?php echo $res['transaction_date'];?></span></td>
									<td>
                                        <?php
                                         if($res['transaction_status']==0){
                                            echo '<span style="color:green"><b><i class="fas fa-check-circle"></i> Success </b></span>';
                                         }else if($res['transaction_status']==2){
                                          echo '<span style="color:red"><b><i class="fas fa-times-circle"></i> Failure</b></span>';
                                          echo '<br>';
                                          echo '<br>';
                                          echo ' ';	
                                          echo '<span style="color:gray"><u>Canceled Order</u></span>';
                                         }else if($res['transaction_status']==5){
                                            echo '<span style="color:red"><b><i class="fas fa-times-circle"></i> Failure</b></span>';
                                            echo '<br>';
                                            echo '<br>';
                                            echo ' ';	
                                            echo '<span style="color:gray"><u>Seller Canceled</u></span>';
                                         }else if($res['transaction_status']==6){
                                            echo '<span style="color:red"><b><i class="fas fa-times-circle"></i> Failure</b></span>';
                                            echo '<br>';
                                            echo '<br>';
                                            echo ' ';	
                                            echo '<span style="color:gray"><u>Buyer Canceled</u></span>';
                                         }else if($res['transaction_status']==7){
                                            echo '<span style="color:red"><b><i class="fas fa-times-circle"></i> Dispute completed</b></span>';
                                            echo '<br>';
                                            echo '<br>';
                                            echo '<span style="color:gray"><u>Refunded to the Buyer </u></span>';	
                                         }else if($res['transaction_status']==8){
                                            echo '<span style="color:red"><b><i class="fas fa-times-circle"></i> Dispute completed</b></span>';
                                            echo '<br>';
                                            echo '<br>';
                                            echo '<span style="color:gray"><u>Refunded to the Seller </u></span>';	
                                         }else if($res['transaction_status']==9){
                                            echo '<span> Refunded</span>';	
                                         }else if($res['transaction_status']==10){
                                            echo '<span style="color:red"><b><i class="fas fa-times-circle"></i> Failure</b></span>';
                                            echo '<br>';
                                            echo '<br>';
                                            echo ' ';	
                                            echo '<span style="color:gray"><u>Canceled by the Admin</u></span>';
                                         }else if($res['transaction_status']==11){
                                            echo '<span> Transaction Dispute </span>';	
                                         }else if($res['transaction_status']==12){
                                            echo '<span>Out of stock</span>';	
                                        }else if($res['transaction_status']==13){
                                            echo '<span style="color:red"><b><i class="fas fa-times-circle"></i> Dispute on process</b></span>';
                                            echo '<br>';
                                            echo '<br>';
                                            echo '<span style="color:gray"><u>Started by the Seller</u></span>';
                                         }else if($res['transaction_status']==14){
                                            echo '<span style="color:red"><b><i class="fas fa-times-circle"></i> Dispute on process</b></span>';
                                            echo '<br>';
                                            echo '<br>';
                                            echo '<span style="color:gray"><u>Started by the Buyer</u></span>';
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