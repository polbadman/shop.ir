<?php
class plugins_handler
{
    public $plugins=[];
    public function __construct(){
   
        $dir = PATH_PLUGINS; // مسیر فولدر مورد نظر را اینجا قرار دهید
        $files = scandir($dir);
        $file_names = [];

        if ($files !== false) {
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..' && is_file($dir . '/' . $file)) {
                    $this->plugins[] = $file;
                }
            }
        }

        // print_r($this->plugins); // نمایش آرایه



    }
    public function load_plugins(){
        foreach($this->plugins as $plugin){
            require_once PATH_PLUGINS. $plugin;
        }
    }
}


?>