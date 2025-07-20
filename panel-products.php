<?php 
  require_once 'header.php';
  $products  = $db->fetchAll('SELECT * FROM products');
  $special   = $db->fetchAll('SELECT * FROM products WHERE sale_type = 1');
  $super     = $db->fetchAll('SELECT * FROM products WHERE sale_type = 2');
  $cat       = $db->fetch('SELECT * FROM products WHERE sale_type = 2');

?>
    <div id="panel" class="panel">
      <div id="right">
        <section class="menu">
        <?php require_once "panel-side-userinfo.php";?>  
        <?php require_once "panel-side-menu.php";?>
        </section>
      </div>
      <div id="left">
        <section class="main-box">
          <header>
            <nav>
              <div class="right">
                <i onclick="togglePanel()" class="fas fa-bars"></i>
                <div class="search">
                  <input type="text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <div class="left">
                <a href=""><i class="fas fa-bell"></i></a>
                <a href=""><i class="fas fa-cog"></i></a>
                <a href="index.php"><i class="fas fa-power-off"></i></a>
              </div>
            </nav>
            <div class="header-message">
              <h3>بخش مدیریت محصولات</h3>
              <a href="" class="lang-btn">فارسی</a>
            </div>
          </header>
          <div class="holder">
            <div class="row">
              <div class="col-lg-3">
                <div class="mini-card-report">
                  <div class="right">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="left">
                    <span>تعداد کل محصولات</span>
                    <span><?php echo count($products);?>محصول </span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mini-card-report">
                  <div class="right">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="left">
                    <span>تعداد محصولات  ویژه</span>
                    <span><?php echo count($special);?>محصول </span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mini-card-report">
                  <div class="right">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="left">
                    <span>تعداد محصولات شگفت انگیز</span>
                    <span><?php echo count($super);?> محصول</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mini-card-report">
                  <div class="right">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="left">
                    <span>تنوع محصولات</span>
                    <span><?php echo count($cat);?>نوع محصول </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="revenue-box">
              <div class="head">
                <div class="right">
                  جدول کل محصولات:
                </div>
                <div class="left">
                  <i class="fas fa-cog"></i>
                  <i class="fas fa-redo"></i>
                </div>
              </div>
              <div class="content">
                <table>
                  <thead>
                    <tr>
                      <th>شناسه</th>
                      <th>تصویر</th>
                      <th>نام محصول</th>
                      <th>نوع محصول</th>
                      <th>نوع فروش</th>
                      <th>قیمت</th>
                      <th>تخفیف</th>
                      <th>دستورات</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($products as $product):?>
                    <tr>
                      <td><?php echo $product['product_id'];?></td>
                      <td><img  src="<?php echo  PATH_IMAGES.$product['image_product'];?>" width="50px" height="50px"></td>
                      <td><?php echo $product['name'];?></td>
                      <td><?php echo $product['product_cat'];?></td>
                      <td><?php echo $product['sale_type'];?></td>
                      <td><?php echo $product['price'];?></td>
                      <td><?php echo $product['discount'].'%';?></td>
                      <td>ویرایش-حذف</td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.0/dist/Chart.min.js"></script>
    <script src="<?php echo PATH_JS;?>panel.js"></script>
  
<?php require_once 'footer.php';?>