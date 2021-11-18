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
                                        <th>Action</th>
                                    </tr>
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
									<td><span>₱ <?php echo $res['transaction_amount'];?></span></td>
									<td><span><?php echo $res['transaction_quantity'];?></span></td>
                                    <td><span>₱ <?php echo $res['transaction_quantity']*$res['transaction_amount'] ;?></span></td>
									<td><span><?php echo $res['transaction_date'];?></span></td>
                                    <td><?php
                                        if($res['transaction_status']==1){

                                                if($res['transaction_order_id']==1){//sale
                                                    echo "<span style='color:blue'><b><i class='fas fa-clock'></i> Waiting for your response</b></span>";
                                                    echo '<br>';
                                                    echo '<br>';
                                                    echo '<button data-toggle="modal" data-target="#accept_sale_order_modal" 
											        data-transaction_id_o='.$res['transaction_id'].' 
                                                    data-user_id_o='.$_SESSION['user_session'].'>Accept</button>';
                                                    echo ' ';
                                                    echo '<button data-toggle="modal" data-target="#refuse_sale_order_modal" 
											        data-transaction_id_p='.$res['transaction_id'].'
                                                    data-user_id_p='.$_SESSION['user_session'].'>Refuse</button>';
                                                }
                                                else if($res['transaction_order_id']==2){//buy
                                                    echo "<span style='color:orange'><b><i class='fas fa-clock'></i> Waiting for buyer to accept </b></span>";
                                                    echo '<br>';
                                                    echo '<br>';
                                                    echo ' ';
                                                    echo '<button data-toggle="modal" data-target="#cancel_sale_order_modal_nn" data-transaction_id_nn='.$res['transaction_id'].' 
                                                          data-user_id_nn='.$_SESSION['user_session'].' >Cancel Order</button>';
                                                        }
                                                else if($res['transaction_order_id']==3){//bargain
                                                    echo "<span style='color:blue'><b><i class='fas fa-clock'></i> Waiting for your response</b></span>";
                                                    echo '<br>';
                                                    echo '<br>';
                                                    echo '<button data-toggle="modal" data-target="#accept_sale_order_modal" 
											        data-transaction_id_o='.$res['transaction_id'].' 
                                                    data-user_id_o='.$_SESSION['user_session'].'>Accept</button>';
                                                    echo ' ';
                                                    echo '<button data-toggle="modal" data-target="#refuse_sale_order_modal" 
											        data-transaction_id_p='.$res['transaction_id'].'
                                                    data-user_id_p='.$_SESSION['user_session'].'>Refuse</button>';
                                                }
                                         }else if($res['transaction_status']==3){
                                           echo '<span style="color:blue"><b><i class="fas fa-clock"></i> Waiting for your response</b> </span>';	
                                           echo '<br>';
                                           echo '<br>';
                                           echo '<button
                                            data-toggle="modal" 
                                            data-target="#item_deliver_sale_order_modal" 
                                            data-transaction_id_l='.$res['transaction_id'].'
                                            data-user_id_l='.$_SESSION['user_session'].'>Item Delivered</button>';
                                            echo ' ';       
                                            echo '<button data-toggle="modal" data-target="#cancel_sale_order_modal_nn" data-transaction_id_nn='.$res['transaction_id'].' 
                                            data-user_id_nn='.$_SESSION['user_session'].' >Cancel Order</button>';
                                         
                                         }else if($res['transaction_status']==4){//Waiting for Buyer's Response
                                            echo "<span style='color:blue'><b><i class='fas fa-clock'></i> Waiting for buyer to confirm </b></span>";
                                            echo '<br>';
                                            echo '<br>';
                                            echo '<button> Start Dispute</button>';
                                            } 
                                            }
                                            }?>
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