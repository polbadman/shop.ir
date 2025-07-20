<div class="user-info">
    <div class="img-name">
        <img src="<?php echo PATH_IMAGES; ?>s1.jpg" alt="" width="50px" height="50px" />
        <span class="name"><?php isset($_SESSION['un']) ? print_r($_SESSION['un']):die('دسترسی غیر مجاز!');?></span>
        <i onclick="toggleUserDetails()" class="fas fa-angle-up"></i>
    </div>
    <div class="details">
        <div class="details-item">
            <span> سطح دسترسی :</span>
            <span> ادمین</span>
        </div>
        <div class="details-item">
            <span> وضعیت : </span>
            <span>آنلاین</span>
        </div>
    </div>
</div>