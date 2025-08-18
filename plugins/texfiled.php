<?php


    $hh->add_action('init_login_login_form',null,'text_filed');
    $hh->add_action('before_special_products',null,'text_filed');
    $hh->add_action('before_footer',null,'text_filed');
    function text_filed(){
        echo<<<_END
                        <div class="input-group">
                            <label for="username">نام کابری :</label>
                            <input type="text" id="username" name="username" placeholder="Username" required>
                        </div>
_END;
    }
?>