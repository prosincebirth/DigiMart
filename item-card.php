<div class="item_card">
<?php
    echo '<a href="item-goods.php?goods_id='.$res['goods_id'].'">';
    echo '<div class="img_wrapper">';
	        echo '<img src="data:image/png;base64,'.base64_encode($res['item_image']).'">';
            echo '<span class="badge common">'.$res['item_rarity'].'</span>';
	        ?>
        </div>
        <div class="item_info">
            <h3 class="title">Staff of dragon</h3>
            <div class="other_info">
                <?php echo '<span class="price">₱ '.$res['item_price'].'</span>'; ?>
                <?php echo '<span class="tag">'.$res['mycount'].' on sale</span>'; ?>
            </div>
        </div>
    </a>
</div>