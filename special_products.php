<?php
defined('ABSPATH') || die;
$special_product = $db->fetchAll('SELECT * FROM products WHERE sale_type = 1');

?>
<div class="row">
    <?php foreach ($special_product as $idx => $key): ?>
        <?php if ($idx != 4): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                <div class="shoping-card">
                    <div class="img-sec">
                        <img src="<?php echo PATH_IMAGES . $special_product[$idx]['image_product']; ?>" alt="<?php echo $special_product[$idx]['name'] ?>">
                        <span class="hot-offer">پیشنهاد ویژه</span>
                        <div class="stars">
                            <?php for ($r = 1; $r <= $special_product[$idx]['rate']; $r++): ?>
                                <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="title">
                        <?php echo $special_product[$idx]['name'] ?>
                    </div>
                    <div class="buttons">
                        <div class="right">
                            <span class="price"><?php echo $special_product[$idx]['price'] ?></span>
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
        <?php endif; ?>
    <?php endforeach; ?>
</div>