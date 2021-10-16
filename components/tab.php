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
            </ul>
            <div class="tab_contents">
                <div class="" id="popular_tab">
                    <div class="popular_items">
                       <?php
                        require_once 'account/database.php';
                        $result = display_item();
                        if($result->num_rows > 0){
                        while ($res = $result->fetch_assoc()){?>           
                        <div class="popular_list__items">
                            <div class="item_wrapper">
                                <?php echo ' <span class="item_tag is-purple">'.$res['item_rarity'].'</span>'; ?>
                                <div class="img_wrapper">
                               <?php echo '<img src="data:image/png;base64,'.base64_encode($res['item_image']).'"height="200" width="350" style = "display: block; margin-left: auto; margin-right: auto; width: 100%; ">'; ?>
                                </div>
                                <div class="item_info">
                                    
                                    <?php echo '<h3 class="item_title">'.$res['item_name'].'</h3>'; ?>
                                    <?php echo '<span class="item_price">'.$res['item_price'].'</span>'; ?>
                                </div>
                            </div>
                        </div>
                        <?php } }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>