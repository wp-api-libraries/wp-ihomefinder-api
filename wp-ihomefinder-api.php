<?php
/**
 * WP-iHomeFinder-Client-API (https://help.ihomefinder.com/customer/en/portal/articles/2772553-client-api?b_id=15845)
 * https://www.idxhome.com/api/v1/docs.html
 *
 * @package WP-API-Libraries\WP-iHomeFinder-Client-API
 */
/*
* Plugin Name: WP iHomeFinder Client API
* Plugin URI: https://github.com/wp-api-libraries/wp-ihomefinder-api
* Description: Perform API requests to iHomeFinder in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-ihomefinder-api
* GitHub Branch: master
*/
/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'IhomeFinderClientAPI' ) ) {
	
	/**
	 * IhomeFinderClientAPI
	 *
	 */
	class IhomeFinderClientAPI {
		
		/**
		 * BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 'https://www.idxhome.com/api/v1/';
		
		/**
		 * Class constructor.
		 *
		 */
		public function __construct() {

		}
		
		/**
		 * Prepares API request.
		 *
		 * @param  string $route   API route to make the call to.
		 * @param  array  $args    Arguments to pass into the API call.
		 * @param  array  $method  HTTP Method to use for request.
		 * @return self            Returns an instance of itself so it can be chained to the fetch method.
		 */
		protected function build_request( $route, $args = array(), $method = 'GET' ) {
			// Start building query.
			$this->args['method'] = $method;
			$this->route = $route;
			// Generate query string for GET requests.
			if ( 'GET' === $method ) {
				$this->route = add_query_arg( array_filter( $args ), $route );
			} elseif ( 'application/json' === $this->args['headers']['Content-Type'] ) {
				$this->args['body'] = wp_json_encode( $args );
			} else {
				$this->args['body'] = $args;
			}
			return $this;
		}
		
		/**
		 * Check if HTTP status code is a success.
		 *
		 * @param  int     $code HTTP status code.
		 * @return boolean       True if status is within valid range.
		 */
		protected function is_status_ok( $code ) {
			return ( 200 <= $code && 300 > $code );
		}
		
		/* CLIENT. */
		
		public function get_client() {
			return $this->build_request( 'client.json' )->fetch();
		}
		
		/* CLIENT BOARD. */
		
		public function get_client_boards() {
			
		}
		
		public function get_client_board( $client_board_id ) {
			
		}
		
		/* BOARD. */
		
		public function get_board( $board_id ) {
			
		}
		
		/* LISTINGS. */
		
		public function get_listings() {
			
		}
		
		public function get_listing( $listing_id ) {
			
		}
		
		/* SUBSCRIBER. */
		
		public function get_subscribers() {
			
		}
		
		public function get_subscriber() {
			
		}
		
		/* MARKET. */
		
		public function get_markets() {
			
		}
		
		public function get_market( $market_id ) {
			
		}
		
		/* LISTING REPORT. */
		
		public function get_listing_report( $listing_report_id ) {
			
		}
		
		/* OPEN HOME REPORT. */
		
		public function get_open_home_report( $open_home_report_id ) {
			
		}
		
		/* MARKET REPORT. */
		
		public function get_market_report( $market_report_id ) {
			
		}
		
		/* LISTING REPORT SUBSCRIPTION. */
		
		public function get_listings_report_subscriptions( $listing_report_id ) {
			
		}
		
		public function get_listing_report_subscription( $listing_report_id, $listing_report_subscription_id ) {
			
		}
		
		/* OPEN HOME REPORT SUBSCRIPTION. */
		
		/* MARKET REPORT SUBSCRIPTION. */
		
		/* AGENT. */
		
		/* OFFICE. */
		
		/* MORE INFO REQUEST. */
		
		/* SCHEDULE SHOWING REQUEST. */
		
		/* CONTACT REQUEST. */
		
		/* VALUATION REQUEST. */
		
		/* EMAIL UPDATE SIGNUP REQUEST. */
		
		/* PROPERTY ORGANIZER SIGNUP REQUEST. */
		
		/* LISTING REPORT SIGNUP REQUEST. */
		
		/* OPEN HOME REPORT SIGNUP REQUEST. */
		
		/* MARKET REPORT SIGNUP REQUEST. */
		
		
	}
}