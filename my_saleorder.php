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
                            <li ><span onclick="window.location.href='sale_order.php';">Sale Order</span></li>
                            <li ><span onclick="window.location.href='sale_order_record.php';">Sale Order Records</span></li>
                            <li class='active'><span onclick="window.location.href='my_saleorder.php';">My Sale Order</span></li>
                            <li><span data-toggle="modal" data-target="#sale_game_item_modal">Post Item for Sale</span></li>  
                        </ul>
                    </div>
                    <div class="market_tabs">
                    <form method='post' action="" enctype="multipart/form-data" class="form-search">
                        <ul class="market_tab--list">
                            <li><input type="text" name="search_item" id="search_item" value="" class="form-control" placeholder="search..."></li>
                            <li><button type="submit" name="search_item_query"> <i class="fas fa-search">Search</i> </button></form></li>
                        </ul>   
                        </form>
                    </div>
                    <div class="market_item--container">
                        <div class="items_wrapper">
                            <table class="table_list--items">
                                <thead>
                                <tr>
                                        <th>Items</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Create Time</th>
                                    </tr>
                                </thead>
                                <?php	$result = display_my_sale_order($_SESSION['user_session'],1,$search);//user logged in and game id
										if($result->num_rows > 0){
										while ($res = $result->fetch_assoc()){?>      
							<tbody>
								<tr>
									<td>
										<div class="img_text">
											<?php echo '<img class="item__img" src="data:image/png;base64,'.base64_encode($res['goods_image']).'"height="72" >'; ?>
											<span><?php echo '<a href="goods_sell.php?goods_id='.$res['goods_id'].'";><span>'.$res['goods_name'].'</span></a>';?></span>	
										</div>                                       
									</td>
                                    <td><?php if($res['order_id']==1){echo '<span>Sale Order</span>';}
                                                else if($res['order_id']==2){echo "<span>Buy Order</span>";}
                                                else if($res['order_id']==3){echo "<span>Bargain Order</span>";}?></td>
									<td><span>₱ <?php echo number_format($res['item_price'],2);?></span></td>
									<td><span><?php echo $res['item_quantity'];?></span></td>
                                   
									<td><span><?php echo $res['item_date_added'];?></span></td>
									<td>
                                        <?php
                                         if($res['item_status']==0){
                                            echo '<span style="color:green"><b><i class="fas fa-check-circle"></i> Success </span>';
                                         }else if($res['item_status']==1){
                                            echo '<button 
                                            data-toggle="modal"  
                                            data-target="#edit_game_item_modal"  
                                            data-goods_id_edit='.$res['goods_id'].'  
                                            
                                            data-goods_quality_edit= '.$res['goods_quality'].' 
                                            data-goods_rarity_edit= '.$res['goods_rarity'].' 
                                            data-goods_detail1_edit= '.$res['goods_detail_1'].' 
                                            data-goods_detail2_edit= '.$res['goods_detail_2'].'  
                                            data-goods_detail3_edit= '.$res['goods_detail_3'].' 
                                            data-order_id_edit= '.$res['order_id'].' 
                                            data-goods_name_edit="'.$res['goods_name'].'"
                                            data-service_id_edit= '.$res['service_id'].'>
     
                                            Edit Item</button>';
                                            
                                            echo ' ';
                                            echo '<button 
                                            data-toggle="modal" 
                                            data-target="#cancel_sale_order_modal" 
                                            data-item_id_n='.$res['item_id'].' data-user_id_n='.$_SESSION['user_session'].'>Cancel Item</button>';
                                         }else if($res['item_status']==2){
                                            echo '<span style="color:red"><b>Failure</b></span>';
                                            echo '<br>';
                                            echo '<br>';
                                            echo ' ';	
                                            echo '<span style="color:gray"><u>Canceled Order</u></span>';
                                         }else if($res['item_status']==3){
                                            echo "<span> Waiting for your response </span>";	
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
                                            echo '<span style="color:gray"><u>Sale Order Ended</u></span>';
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