<?php
defined('ABSPATH') || die;
$products   = $db->fetchAll('SELECT * FROM products');
$total   = count($products);
$per_row = 4;
$all_row = ceil($total / $per_row);



?>
<?php $idx =0; for ($i = 1; $i <= $all_row; $i++): ?>
    <div class="row">
        <?php for ($j = 0; $j < $per_row; $j++):$idx++; if($idx >=$total-1) break;?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
            <div class="shoping-card">
                    <div class="img-sec">
                        <img src="<?php echo PATH_IMAGES . $products[$idx]['image_product']; ?>" alt="<?php echo $products[$idx]['name'] ?>">
                        <?php if($products[$idx]['sale_type'] ==1):?>
                            <span class="hot-offer">پیشنهاد ویژه</span>
                        <?php endif;?>
                        <div class="stars">
                            <?php for ($r = 1; $r <= $products[$idx]['rate']; $r++): ?>
                                <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="title">
                        <?php echo $products[$idx]['name'] ?>
                    </div>
                    <div class="buttons">
                        <div class="right">
                            <span class="price"><?php echo $products[$idx]['price'] ?></span>
                        </div>
                        <div class="left">
                            <div class="extend-btn">
                                <a class="b-text" href="#">علاقه</a>
                                <a class="b-icon" href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="extend-btn" id="add-to-cart">
                                <a class="b-text" href="#">افزودن به سبد خرید</a>
                                <a class="b-icon" href="#"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    <?php endfor; ?>
    </div>