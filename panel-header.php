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
            <a href="index.php"><i class="fas fa-home"></i></a>
            <a href=""><i class="fas fa-cog"></i></a>
            <a href="logout.php" onclick="event.preventDefault(); if(confirm('آیا می خواهید خارج شوید؟')){alert('به امید دیدار.');window.location.href = 'logout.php';}"><i class="fas fa-power-off"></i></a>
        </div>
    </nav>
    <div class="header-message">
        <h3><?php echo $sc::$page_title?></h3>
        <a href="" class="lang-btn">فارسی</a>
    </div>
</header>