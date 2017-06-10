<?php

/*
* Plugin Name:       Display Customer ID Shortcode
* Plugin URI:        http://example.com/plugin-name-uri/
* Description:       Display customer ID based on user ID.
* Version:           1.0.0
* Author:            Sekander Badsha
* Author URI:        https://sekander.pro/
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
* Text Domain:       cid
* Domain Path:       /languages
*/

// Add Shortcode
function customer_id() {
	if ( is_user_logged_in() ) {
		return get_current_user_id();
	}
	else {}
}
add_shortcode( 'customer-id', 'customer_id' );
