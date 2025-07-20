<?php 
  require_once "config.php";
  $sc = new shopconfig;
  $sc::$page_title = 'پیشخوان';
  $sc::$page_code = 0;
  require_once 'header.php';
  

  
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
          <?php require_once 'panel-header.php';?>
          <div class="holder">
            <div class="row">
              <div class="col-lg-3">
                <div class="mini-card-report">
                  <div class="right">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="left">
                    <span>تکمیل انبار</span>
                    <span>400</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mini-card-report">
                  <div class="right">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="left">
                    <span>تکمیل انبار</span>
                    <span>400</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mini-card-report">
                  <div class="right">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="left">
                    <span>تکمیل انبار</span>
                    <span>400</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="mini-card-report">
                  <div class="right">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="left">
                    <span>تکمیل انبار</span>
                    <span>400</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="revenue-box">
              <div class="head">
                <div class="right">
                  درآمد
                </div>
                <div class="left">
                  <i class="fas fa-cog"></i>
                  <i class="fas fa-redo"></i>
                </div>
              </div>
              <div class="content">
                <canvas id="myChart" width="300" height="150"></canvas>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.0/dist/Chart.min.js"></script>
    <script src="<?php echo PATH_JS;?>panel.js"></script>
  
<?php require_once 'footer.php';?>