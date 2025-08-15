<?php

define('ABSPATH',true);

/////////////////////////////////////////////////////////////////////////////public constant

define("SITE_URL", 'http://127.0.0.1/shop.ir/');
define("PATH_IMAGES", SITE_URL."/".'assets/images/');
define("PATH_SVG", SITE_URL."/".'assets/svg/');
define("PATH_JS", SITE_URL."/".'assets/js/');
define("PATH_CSS", SITE_URL."/".'assets/css/');
define("PATH_FONTS", SITE_URL."/".'assets/fonts/');
define("PATH_PANEL", SITE_URL."/".'panel/');

define("PATH_ROOT",__DIR__);
define("PATH_FRONT", PATH_ROOT.'/front/');
define("PATH_CORE", PATH_ROOT.'/core/');
define("PATH_PLUGINS", PATH_ROOT.'/plugins/');

//load core
require_once(PATH_CORE.'plugins.php');
require_once(PATH_CORE.'hook.php');
require_once(PATH_CORE.'db.php');


class shopconfig{
    public $site_name='فروشگاه امیر مقتدر';
    public $seperator='|';
    public static $page_title='خانه';
    public static $page_code=0;
}
?>