<?php include('head.php'); ?>
<?php include('header.php'); ?>

<link rel="preload stylesheet" href="assets/css/item-card.css" as="style" crossorigin>
<link rel="preload stylesheet" href="assets/css/item-grid.css" as="style" crossorigin>

<main>
    <section class="market_section">
        <div class="container_full-width">
            <div class="market_wrapper">
                <div class="mainbar">
                    <div class="market_item--wrapper">
                        <div class="market_tabs">
                            <ul class="market_tab--list">
                                <li class='active'><span>Sale</span></li>
                                <li><span>Purchase</span></li>
                            </ul>
                        </div>
                        <div class="market_item--container global-market">
                            <div class="items_wrapper">
                                <ul class="item_grid item_grid--6 item_grid--2-mobile">
                                    <?php
                                    require_once 'account/database.php';
                                    $conn=connection();
                                    $query="SELECT * from game_items where item_status=1";
                                    $res=$conn->query($query);
                                    $res->execute();
                                    //if($res->rowcount() > 0){
                                         while ($res = $res->fetch(PDO::FETCH_ASSOC)){
                                                
                                    ?>
                                    <li class="item_grid--item">
                                        <?php include('item-card.php'); ?>
                                    </li>
                                    <?php } ?>
                                </ul>

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
        </div>
    </section>
</main>

<?php include('footer.php'); ?>