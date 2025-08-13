<?php
defined('ABSPATH') || die;
$cat_products   = $db->fetchAll('SELECT * FROM products WHERE product_cat = 2 ||  product_cat = 4');

?>
<div class="title">
    <span>ایرپاد و هندزفری</span>
</div>
<div id="owl-product" class="owl-carousel owl-theme">
<?php foreach ($cat_products as $idx => $key): ?>
    <div class="item">
        <div class="shoping-card">
            <div class="img-sec">
            <img src="<?php echo PATH_IMAGES . $cat_products[$idx]['image_product']; ?>" alt="<?php echo $cat_products[$idx]['name'] ?>">
                <div class="stars">
                    <?php for ($r = 1; $r <= $cat_products[$idx]['rate']; $r++): ?>
                        <i class="fas fa-star"></i>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="title">
                <?php echo $cat_products[$idx]['name'] ?>
            </div>
            <div class="buttons">
                <div class="right">
                    <span class="price"><?php echo $cat_products[$idx]['price'] ?></span>
                </div>
                <div class="left">
                    <div class="extend-btn">
                        <a class="b-text" href="#">علاقه</a>
                        <a class="b-icon" href="#"><i class="fas fa-heart"></i></a>
                    </div>
                    <div class="extend-btn">
                        <a class="b-text" id="add-to-cart" href="#">افزودن به سبد خرید</a>
                        <a class="b-icon" href="#"><i class="fas fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>