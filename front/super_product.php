<?php
defined('ABSPATH') || die;
$super_product   = $db->fetch('SELECT * FROM products WHERE sale_type = 2');

?>


<div class="row">
    <div class="col-lg-9">
        <div class="supper-offer-box">
            <span class="supper-offer-box-title">
                پیشنهاد شگفت انگیز
            </span>
            <div class="body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="image-container">
                            <img src="<?php echo PATH_IMAGES . $super_product['image_product'] ?>" alt="<?php echo $super_product['name'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="spesification">
                            <div class="price-row">
                                <div class="price"><?php echo $super_product['price'] ?></div>
                                <div class="off"><?php echo $super_product['discount'] ?>% تخفیف</div>
                            </div>
                            <div class="title"> <?php echo $super_product['name'] ?> </div>
                            <div class="counter-down">
                                <span id="seconds">40</span> :
                                <span id="minutes"></span> :
                                <span id="hours">19</span>
                            </div>
                            <div class="remaining-time">زمان باقی مانده تا پایان سفارش</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="banner">
            <img src="<?php echo PATH_IMAGES; ?>friday.jpg" alt="">
        </div>
    </div>
</div>