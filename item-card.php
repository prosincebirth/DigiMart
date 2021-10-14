<div class="item_card">
    <a href="#">
        <div class="img_wrapper">
            <?php
            require_once 'account/database.php';
                
             $res = view_all_items($i);

	        echo '<img src="data:image/png;base64,'.base64_encode($res['item_image']).'" ">';
            echo '<span class="badge common">'.$res['item_rarity'].'</span>';
	        ?>
        </div>
        <div class="item_info">
            <h3 class="title">Staff of dragon</h3>
            <div class="other_info">
                <span class="price">₱250.00</span>
                <span class="tag">50 on sale</span>
            </div>
        </div>
    </a>
</div>