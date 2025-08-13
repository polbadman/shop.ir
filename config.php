<?php

define('ABSPATH',true);
//database handler
require_once('db.php');
/////////////////////////////////////////////////////////////////////////////public constant

define("SITE_URL", 'http://127.0.0.1/shop.ir/');
define("PATH_IMAGES", SITE_URL."/".'assets/images/');
define("PATH_JS", SITE_URL."/".'assets/js/');
define("PATH_CSS", SITE_URL."/".'assets/css/');
define("PATH_FONTS", SITE_URL."/".'assets/fonts/');
define("PATH_PANEL", SITE_URL."/".'panel/');
define("PATH_ROOT",__DIR__);

class shopconfig{
    public $site_name='فروشگاه امیر مقتدر';
    public $seperator='|';
    public static $page_title='خانه';
    public static $page_code=0;
}
?>