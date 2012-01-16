<?php
/*
Plugin Name: Stop SOPA Widget
Plugin URI: http://torbit.com/blog/2012/01/15/stop-sopa-js/
Description: Help protest SOPA.  This plugin will add a Stop SOPA plugin to protest this new bill, inform your visitors about it, and help people contact their representatives.  By default the popup will only display on January 18th from 8amĞ8pm EST (1300Ğ0100 UTC).  You can view it by going to a page on your blog and adding #stopsopa to the url.
Version: 1.0
Author: jonefox
*/

function tb_add_sopa_header_script() {
    echo '<script type="text/javascript">(function(){var a=(new Date).getTime();if(a>=1326891600000 && a<=1326934800000 || window.location.hash=="#stopsopa"){var b=document.createElement("script");b.type="text/javascript";b.async=true;b.src="//d3h3c6xp83q3fn.cloudfront.net/stop-sopa.min.js";var c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})()</script>';
}

if ( stripos( $_SERVER['REQUEST_URI'], '/wp-admin' ) === false && stripos( $_SERVER['REQUEST_URI'], '/wp-login.php' ) === false )
    add_action( 'wp_head', 'tb_add_sopa_header_script', 0 );
    
function tb_sopa_notice() {
        if ( get_option( 'tb_sopa_has_shown_notice') )
                return;
        ?>
        <div class="updated fade-ff0000">
                <p><strong><?php printf( 'On January 18th we will now add the message to help Stop SOPA on all your public pages.  To see what it will look like <a href="%s#stopsopa">click here</a>.', get_option( 'siteurl' ) ); ?></strong></p>
        </div>
        <?php
        tb_sopa_save_option( 'tb_sopa_has_shown_notice', true );
        return;
}

add_action( 'admin_notices', 'tb_sopa_notice' );

function tb_sopa_save_option( $name, $value ) {
        global $wpmu_version;
        
        if ( false === get_option( $name ) && empty( $wpmu_version ) ) // Avoid WPMU options cache bug
                add_option( $name, $value, '', 'no' );
        else
                update_option( $name, $value );
}