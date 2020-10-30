<?php
/**
 * WooMultistore MU Disable Legacy Sync
 *
 * @package     WooMultistorePlugins
 * @author      Lykke Media AS
 * @copyright   2020 Lykke Media AS
 *
 * @wordpress-plugin
 * Plugin Name: Disable legacy sync for WooMultistore.
 * Description: 
 * Author: Lykke Media AS
 * Author URI: https://woomultistore.com/
 * Version: 1.0.0
 * Requires at least: 5.3.0
 * Tested up to: 5.5.1
 *
 * WC requires at least: 3.6.0
 * WC tested up to: 4.5.2
 * Network: true
 **/
 
 add_filter( 'WOO_MSTORE_admin_product/disable_legacy_get_slave_product_id', '__return_true' );
