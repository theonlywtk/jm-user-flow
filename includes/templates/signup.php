<div class="jm_signup_wrap">
    <p class="message"></p>
    <form class="jm_signup_form" method="post">
        <div class="form_group">
            <input name="login" class="jm_login_input" value="" size="20" type="email" placeholder="<?php _e('Email Address', 'jm-user-flow');?>">
            <i class="fa fa-envelope-o"></i>
        </div>
        <div class="form_group">
            <input name="password" class="jm_password_input" value="" type="password" placeholder="<?php _e('Password', 'jm-user-flow');?>">
            <i class="fa fa-lock"></i>
        </div>
        <div class="form_group">
            <input name="password" class="jm_confirm_password_input" value="" type="password" placeholder="<?php _e('Confirm Password', 'jm-user-flow');?>">
            <i class="fa fa-lock"></i>
        </div>        
        <div class="form_group">
            <input name="wp-submit" id="wp-submit" class="button button-primary" value="<?php _e('Signup', 'jm-user-flow');?>" type="submit">
        </div>
    </form>
    <?php wp_nonce_field( 'ajax-signup-nonce', 'security' );?>    
</div>


