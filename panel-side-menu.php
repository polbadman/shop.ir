<div class="menu-btns">
    <a class="item item-active" href="">
        <i class="fas fa-cart-arrow-down"></i>
        <span>سفارش ها</span>
    </a>
    <a class="item" href="panel-reports.php">
        <i class="fas fa-chart-pie "></i>
        <span>گزارش ها</span>
    </a>
    <a class="item" href="">
        <i class="fas fa-life-ring"></i>
        <span>پشتیبانی</span>
    </a>
    <?php if($curent_user['role'] < 2):?>
    <a class="item" href="panel-users.php">
        <i class="fas fa-user"></i>
        <span>کاربر ها</span>
    </a>
    <a class="item" href="panel-products.php">
        <i class="fas fa-box"></i>
        <span>محصولات</span>
    </a>
    <?php endif;?>
</div>