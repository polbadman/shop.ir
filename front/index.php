<?php  require_once 'header.php';?>
    <header>
        <nav>
            <div class="nav-right">
                <a href="#"><i title="پروفایل" class="far fa-user"></i></a>
                <a href="#"><i id="cart-count" title="سبد خرید" class="fas fa-shopping-cart"></i></a>
                <a href="#"><i title="خانه" class="fas fa-home"></i></a>
                <a href="#" id="cl"><i title="سرچ" class="fas fa-search"></i></a>
                <input class="sr" id="searchInput" type="text" placeholder=" نام محصول مورد نظرا سرچ کنید ?">
            </div>
            <div class="nav-left">
                <div class="register-lognin-btn">
                    <a href="login.php"><i class="far fa-user"></i></a>
                    <?php if(!empty($_SESSION['un'])):?>
                        <a href="panel/panel.php"><?php echo 'سلام'. $_SESSION['un'] .'خوش آمدی.';?></a>
                    <?php else:?>
                        <a href="front/login.php">ثبت نام / ورود</a>
                    <?php endif;?>
                </div>
            </div>
        </nav>
        <hr>
        <section class="slider">
        <?php require_once 'slider.php'?>
        </section>
    </header>
    <main>
        <section class="product-sec-new" id="add-to-cart">
            <?php require_once 'special_products.php'?>
        </section>
        <section class="supper-offer-section">
            <?php require_once 'super_product.php'?>
        </section>
        <section class="dragble-list" id="itemList">
            <?php require_once 'category_products.php'?>
        </section>
    </main>
    <main>
        <section class="dragble-list">
            <div class="title">
                <span id="hedset">همه محصولات فروشگاه</span>
            </div>
        </section>
        <section class="product-sec-new">
           <?php require_once 'all_products.php'?>
        </section>
    </main>
    <?php require_once 'footer.php';?>