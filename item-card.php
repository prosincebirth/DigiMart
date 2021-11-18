<div class="item_card">
<?php
    if($res['order_id']==1){echo '<a href="goods_sell.php?goods_id='.$res['goods_id'].'">';}
    else if($res['order_id']==2){echo '<a href="goods_buy.php?goods_id='.$res['goods_id'].'">';}
    echo '<div class="img_wrapper">';
	        echo '<img src="data:image/png;base64,'.base64_encode($res['goods_image']).'">';
            // echo '<span class="badge common">'.$res['goods_rarity'].'</span>';
            if($res['goods_rarity'] == 'Common'){echo ' <span class="badge common" style="background-color:#484b5f">'.$res['goods_rarity'].'</span>';}
            elseif($res['goods_rarity'] == 'Uncommon'){echo ' <span class="badge common" style="background-color:#82BDFF">'.$res['goods_rarity'].'</span>';}
            elseif($res['goods_rarity'] == 'Rare'){echo ' <span class="badge common" style="background-color:#7C8FF5">'.$res['goods_rarity'].'</span>';}
            elseif($res['goods_rarity'] == 'Mythical'){echo ' <span class="badge common" style="background-color:#A876F9">'.$res['goods_rarity'].'</span>';}
            elseif($res['goods_rarity'] == 'Immortal'){echo ' <span class="badge common" style="background-color:#F2B166">'.$res['goods_rarity'].'</span>';}
            elseif($res['goods_rarity'] == 'Legendary'){echo ' <span class="badge common" style="background-color:#DC5EEA">'.$res['goods_rarity'].'</span>';}
            elseif($res['goods_rarity'] == 'Arcana'){echo ' <span class="badge common" style="background-color:#9ACC4C">'.$res['goods_rarity'].'</span>';}
            elseif($res['goods_rarity'] == 'Ancient'){echo ' <span class="badge common" style="background-color:#e06b6a">'.$res['goods_rarity'].'</span>';}
	        ?>
        </div>
        <div class="item_info">

            <?php 
                $size=strlen($res['goods_name']);
                if($size>=15){
                     echo '<h3 class="title">'.substr($res['goods_name'],0,15).'..</h3>'; }
                else {
                    echo '<h3 class="title">'.$res['goods_name'].'</h3>'; 
                }
            
            ?>
            <div class="other_info">
                <?php echo '<span class="price">₱ '.$res['item_price'].'</span>'; ?>

                <?php 
                if($res['order_id']==1){
                    echo '<span class="tag">'.$res['mycount'].' on sale</span>';}
                else if($res['order_id']==2){
                    echo '<span class="tag">'.$res['mycount'].' demand</span>';}
                ?>
            </div>
        </div>
    </a>
</div>