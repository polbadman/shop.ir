<?php
 
    $hh->add_action('body_front','body_hello',1);
    function body_hello(){
        echo "من محتوای body هستم";
    }
    
?>