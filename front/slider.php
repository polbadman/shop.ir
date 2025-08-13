<?php
defined('ABSPATH') || die;

?>
<div class="slides">
    <div class="item active" id="slide1">
        <img src="<?php echo PATH_IMAGES; ?>s1.jpg" alt="">
        <span>آهنگ ها رو زنده تر از اون چیزی که هستن گوش بده</span>
    </div>
    <div class="item" id="slide2">
        <img src="<?php echo PATH_IMAGES; ?>s2.jpg" alt="">
        <span style="color: white;">کیفیت صدایی که <br>همیشه دنبالشی</span>
    </div>
    <div class="item" id="slide3">
        <img src="<?php echo PATH_IMAGES; ?>s3.jpg" alt="">
        <span> رویا هاتو با صدا گوش بده </span>
    </div>
</div>
<div class="buttons">
    <i onclick="setSlide('slide1' , 1)" class="fas fa-circle"></i>
    <i onclick="setSlide('slide2' , 2)" class="fas fa-circle"></i>
    <i onclick="setSlide('slide3' , 3)" class="fas fa-circle"></i>
</div>