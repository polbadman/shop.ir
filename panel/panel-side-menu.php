<?php
    $sc = new shopconfig;
?>
<div class="menu-btns">
    <a class="item <?php $sc::$page_code == 0 ? print_r('item-active'):'';?>" href="panel.php">
        <i class="fas fa-tv"></i>
        <span>پیشخوان</span>
    </a>
    <a class="item <?php $sc::$page_code == 1 ? print_r('item-active'):'';?>" href="panel-orders.php">
        <i class="fas fa-cart-arrow-down"></i>
        <span>سفارش ها</span>
    </a>
    <a class="item <?php $sc::$page_code == 2 ? print_r('item-active'):'';?>" href="panel-reports.php">
        <i class="fas fa-chart-pie "></i>
        <span>گزارش ها</span>
    </a>
    <a class="item <?php $sc::$page_code == 3 ? print_r('item-active'):'';?>" href="panel-support.php">
        <i class="fas fa-life-ring"></i>
        <span>پشتیبانی</span>
    </a>
    <?php if($curent_user['role'] < 2):?>
    <a class="item <?php $sc::$page_code == 4 ? print_r('item-active'):'';?>" href="panel-users.php">
        <i class="fas fa-user"></i>
        <span>کاربر ها</span>
    </a>
    <a class="item <?php $sc::$page_code == 5 ? print_r('item-active'):'';?>" href="panel-products.php">
        <i class="fas fa-box"></i>
        <span>محصولات</span>
    </a>
    <?php endif;?>
</div>