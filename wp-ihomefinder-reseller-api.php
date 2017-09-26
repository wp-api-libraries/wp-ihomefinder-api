<?php
/**
 * WP-iHomeFinder-Reseller-API (https://help.ihomefinder.com/customer/portal/articles/2772547?b_id=15845)
 *
 * @package WP-API-Libraries\WP-iHomeFinder-Reseller-API
 */
/*
* Plugin Name: WP iHomeFinder Reseller API
* Plugin URI: https://github.com/wp-api-libraries/wp-ihomefinder-api
* Description: Perform API requests to iHomeFinder Reseller in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-ihomefinder-api
* GitHub Branch: master
*/
/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'IhomeFinderResellerAPI' ) ) {
	
	/**
	 * IhomeFinderResellerAPI
	 *
	 */
	class IhomeFinderResellerAPI {
	}
}