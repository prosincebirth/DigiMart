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
                        
                                        for($i=0;$i<10;$i++) {
                                            
                                    ?>           
                        <div class="popular_list__items">
                            <div class="item_wrapper">
                                <?php   require_once 'account/database.php';
                                            $res = view_all_items(); ?>
                                <?php echo ' <span class="item_tag is-purple">'.$res['item_rarity'].'</span>'; ?>
                                <div class="img_wrapper">
                               <?php echo '<img src="data:image/png;base64,'.base64_encode($res['item_image']).'" ">'; ?>
                                </div>
                                <div class="item_info">
                                    
                                    <?php echo '<h3 class="item_title">'.$res['item_name'].'</h3>'; ?>
                                    <span class="item_price">₱ 109.98</span>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>