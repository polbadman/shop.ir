<?php
require_once "../config.php";
$sc = new shopconfig;
$sc::$page_title = 'بخش مدیریت کاربران';
$sc::$page_code = 4;
require_once PATH_FRONT.'/header.php';
$users     = $db->fetchAll('SELECT * FROM userz');
$admins    = $db->fetchAll('SELECT * FROM userz WHERE role = 1');
$selers    = $db->fetchAll('SELECT * FROM userz WHERE role = 2');
$customers = $db->fetchAll('SELECT * FROM userz WHERE role = 3');

?>
<div id="panel" class="panel">
  <div id="right">
    <section class="menu">
      <?php require_once "panel-side-userinfo.php"; ?>
      <?php require_once "panel-side-menu.php"; ?>
    </section>
  </div>
  <div id="left">
    <section class="main-box">
      <?php require_once 'panel-header.php'; ?>
      <div class="holder">
        <div class="row">
          <div class="col-lg-3">
            <div class="mini-card-report">
              <div class="right">
                <i class="fas fa-clipboard-list"></i>
              </div>
              <div class="left">
                <span>تعداد کل کاربران</span>
                <span><?php echo count($users); ?>کاربر </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="mini-card-report">
              <div class="right">
                <i class="fas fa-clipboard-list"></i>
              </div>
              <div class="left">
                <span>تعداد مدیران سایت</span>
                <span><?php echo count($admins); ?>مدیر </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="mini-card-report">
              <div class="right">
                <i class="fas fa-clipboard-list"></i>
              </div>
              <div class="left">
                <span>تعداد مشتریان</span>
                <span><?php echo count($customers); ?>مشتری </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="mini-card-report">
              <div class="right">
                <i class="fas fa-clipboard-list"></i>
              </div>
              <div class="left">
                <span>تعداد فرشندگان </span>
                <span><?php echo count($selers); ?>فروشنده </span>
              </div>
            </div>
          </div>
        </div>
        <div class="revenue-box">
          <div class="head">
            <div class="right">
              جدول کل کاربران:
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
                  <th>نام کاربری</th>
                  <th>نقش کاربری</th>
                  <th>رایانامه</th>
                  <th>موبایل</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($users as $user): ?>
                  <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['mobile']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.0/dist/Chart.min.js"></script>
<script src="<?php echo PATH_JS; ?>panel.js"></script>

<?php require_once PATH_FRONT . '/footer.php'; ?>