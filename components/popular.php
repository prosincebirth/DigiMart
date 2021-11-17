<section class="tab_section">
    <div class="container">
        <div class="tab_wrapper">
            <ul class="tab_list__nav">
                <li class="tab_nav_item active">
                    <a href="#">Popular</a>
                </li>
                <li class="tab_nav_item">
                    <a href="#">
                        <i class="fa">&#xf11b;</i>
                        <span clas="tab_title">DOTA 2</span>
                    </a>
                </li>
                <li class="tab_nav_item">
                    <a href="#">
                        <i class="fa">&#xf11b;</i>
                        <span clas="tab_title">CS:GO</span>
                    </a>
                </li>
            </ul>
            <div class="tab_contents">
                <div class="" id="popular_tab">
                    <div class="popular_items">
                       <?php
                        $result = display_item(5);
                        if($result->num_rows > 0){
                        while ($res = $result->fetch_assoc()){
                            ?>   
                            
                        <div class="popular_list__items">
                        <?php echo '<a href="goods_sell.php?goods_id='.$res['goods_id'].'">';?>
                            <div class="item_wrapper">
                                <?php  if($res['goods_rarity'] == 'Common'){echo ' <span class="item_tag" style="background-color:#484b5f">'.$res['goods_rarity'].'</span>';}
                                        elseif($res['goods_rarity'] == 'Uncommon'){echo ' <span class="item_tag" style="background-color:#82BDFF">'.$res['goods_rarity'].'</span>';}
                                        elseif($res['goods_rarity'] == 'Rare'){echo ' <span class="item_tag" style="background-color:#7C8FF5">'.$res['goods_rarity'].'</span>';}
                                        elseif($res['goods_rarity'] == 'Mythical'){echo ' <span class="item_tag" style="background-color:#A876F9">'.$res['goods_rarity'].'</span>';}
                                        elseif($res['goods_rarity'] == 'Immortal'){echo ' <span class="item_tag" style="background-color:#F2B166">'.$res['goods_rarity'].'</span>';}
                                        elseif($res['goods_rarity'] == 'Legendary'){echo ' <span class="item_tag" style="background-color:#DC5EEA">'.$res['goods_rarity'].'</span>';}
                                        elseif($res['goods_rarity'] == 'Arcana'){echo ' <span class="item_tag" style="background-color:#9ACC4C">'.$res['goods_rarity'].'</span>';}
                                        elseif($res['goods_rarity'] == 'Ancient'){echo ' <span class="item_tag" style="background-color:#e06b6a">'.$res['goods_rarity'].'</span>';}
                                        
                                ?>
                                <div class="img_wrapper">
                                    
                                <?php
                                
                                echo '<img src="data:image/png;base64,'.base64_encode($res['goods_image']).'"height="240" ">'; ?>
                                
                                </div>
                                <div class="item_info">
                                    
                                    <?php echo '<span class="item_title">'.$res['goods_name'].'</span>'; ?>
                                    
                                    <?php echo '<span class="item_price">₱ '.$res['lowest_price'].'</span>'; ?>
                                </div>
                            </div>
                        </a>
                        </div>
                        <?php } }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>