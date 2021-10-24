<?php include('head.php'); ?>
<?php include('header.php'); ?>

<main>    
<section class="market_section">
    <div class="container">
        <div class="market_wrapper">
            <div class="mainbar">
                <div class="market_item--wrapper">
                    <div class="market_tabs">
                        <ul class="market_tab--list">
                            <li class='active'><span>Buy Orders</span></li>
                            <li><span>Buy Order Records</span></li>
                            <li><span>Place Buy Order</span></li>
                        </ul>
                        <div class="market_tabs--labels">
                            <div class="labels">
                                <span>Buy order: </span>
                                <span>0</span>
                            </div>
                            <div class="labels">
                                <span>Expenditure estimates: </span>
                                <span>$ 0</span>
                            </div>
                        </div>
                    </div>
                    <div class="market_tabs">
                        <div class="dropdown__wrapper">
                            <div class="field">
                                <select class="form-control">
                                    <option selected>Hero</option>
                                </select>
                            </div>
                            <div class="field">
                                <select class="form-control">
                                    <option value="">Quality</option>
                                </select>
                            </div>
                            <div class="field">
                                <select class="form-control">
                                    <option value="">Rarity</option>
                                </select>
                            </div>
                            <div class="field">
                                <select class="form-control">
                                    <option value="">Type</option>
                                </select>
                            </div>
                            <div class="field">
                                <select class="form-control">
                                    <option value="">Slot</option>
                                </select>
                            </div>
                        </div>
                        <div class="search__bar">
                            <input type="search" name="" id="" class="form-control">
                            <button type="submit">
                            <i class="fas fa-search"></i>
                            <span>Search</span>
                            </button>
                        </div>
                    </div>
                    <div class="market_item--container">
                        <div class="items_wrapper">
                            <table class="table_list--items">
                                <thead>
                                    <tr>
                                        <th>Items</th>
                                        <th>Price</th>
                                        <th>Max Price</th>
                                        <th>Progress</th>
                                        <th>Create time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="5">Nothing to display</td>
                                    </tr>
                                </tbody>
                            </table>
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