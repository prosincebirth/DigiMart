<?php include('head.php'); ?>
<?php if(!isset($_GET['goods_id'])){header("Location: market.php"); exit();} ?>
<?php include('header.php'); ?>

<?php $res=display_goods($_GET['goods_id']);?>
<?php $game=display_game_category(1);?>

<link rel="preload stylesheet" href="assets/css/item-card.css" as="style" crossorigin>
<link rel="preload stylesheet" href="assets/css/item-grid.css" as="style" crossorigin>
<link rel="preload stylesheet" href="assets/css/item.css" as="style" crossorigin>

<main>
	<section class="market_section">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="sale_market.php">Market</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo $res['goods_name'];?></li>
				</ol>
			</nav>
			<div class="item_detail">
				<div class="item_detail--wrapper">
					<div class="item_detail--img--content">
						<div class="img_wrapper">
						<?php echo '<img src="data:image/png;base64,'.base64_encode($res['goods_image']).'"height="260" >'; ?>
							
						</div>
						<div class="item_detail--content">
							<h2>
								<span><?php echo $res['goods_name'];?></span>								
								<span class="tag tag--immortal"><?php echo $res['goods_rarity'];?></span>
							</h2>
							<p>
								<span>
								<?php echo $game['goods_category1'];?> | 
									<span><?php echo $res['goods_detail_1'];?></span>
								</span>
								<span>
								<?php echo $game['goods_category2'];?> | 
									<span><?php echo $res['goods_detail_2'];?></span>
								</span>
								<span>
								<?php echo $game['goods_category3'];?> | 
									<span><?php echo $res['goods_detail_3'];?></span>
								</span>
							</p>
							<div class="item__ref--price">
								<span>
									Reference price | 
									<span>₱  <?php echo $res['item_price'];?></span>
									<span> </span>
								</span>
							</div>
						</div>
					</div>
					<div class="item_detail--ctas">
						<p>
						
						</p>
						<div>
							<a class="item_sell" data-toggle="modal" data-target="#sale_game_item_modal_2"
											data-goods_id="<?php echo $_GET['goods_id'];?>">Sell</a>
							<button type="button" class="item_place--buy--order" data-toggle="modal" data-target="#buyorder_game_item_modal_2"
											data-goods_id="<?php echo $_GET['goods_id'];?>">Place buy order</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item_groups">
				<div class="item_groups--wrapper">
					<div class="item_groups--tab">
						<ul>
						<?php
							echo ' <li ><a href="goods_sell.php?goods_id='.$_GET['goods_id'].'";><span>Sell</span></a></li>';
							echo ' <li ><a href="goods_buy.php?goods_id='.$_GET['goods_id'].'";><span>Buy Orders</span></a></li>';
							echo ' <li class="active"><a href="goods_record.php?goods_id='.$_GET['goods_id'].'";><span>Trade Record</span></a></li>'; ?>
						</ul>
					
					</div>
				</div>
				<div class="item_group--table">
					<div class="item_group--table--container">
						<div class="table">
						<table>
							<thead>
								<th>Items</th>
								<th>Price</th>
								<th></th>
								<th>Type</th>
								<th>Time</th>
								<th></th>
							
								
							</thead>
	
					<?php	$result = display_goods_trade_record($_GET['goods_id']);
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
									<td><span><?php echo $res['transaction_amount'];?></span></td>
									<td></td>
									<td><span><?php echo $res['order_desc'];?></span></td>
									<td><span><?php echo date('Y-m-d',strtotime($res['transaction_date']));?></span></td>
									<td></td>
									<?php } }?> 
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
	</section>
</main>


<?php include('components/modal.php')?>
<?php include('footer.php'); ?>