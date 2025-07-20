<?php

define('ABSPATH',true);
//database handler
require_once('db.php');
/////////////////////////////////////////////////////////////////////////////public constant

define("PATH_IMAGES", "./".'assets/images/');
define("PATH_JS", "./".'assets/js/');
define("PATH_CSS", "./".'assets/css/');
define("PATH_FONTS", "./".'assets/fonts/');
define("PATH_PANEL", "./".'panel/');
define("PATH_ROOT", './');

class shopconfig{
    public $site_name='فروشگاه امیر مقتدر';
    public $seperator='|';
    public static $page_title='خانه';
    public static $page_code=0;
}
?>