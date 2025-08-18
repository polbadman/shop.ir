<?php
 
    $hh->add_action('body_front',null,'body_hello');
    function body_hello(){
        echo "من محتوای body هستم";
    }
    
?>