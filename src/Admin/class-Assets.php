<?php

namespace WP_Plugin_Name\Admin;

use WP_Plugin_Name\Plugin_Data as Plugin_Data;
use WP_Plugin_Name\Admin\Settings\Main as Settings;

// Abort if this file is called directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( Assets::class ) ) {
	/**
	 * Enqueues the global admin assets.
	 *
	 * Settings Page adds additional.
	 */
	class Assets {

		/**
		 * Register the stylesheets for every admin area.
		 */
		public function enqueue_styles(): void {
			// All Admin screens.
			wp_enqueue_style(
				Plugin_Data::get_asset_handle( 'admin-global' ),
				Plugin_Data::get_assets_url_base() . 'admin.css',
				[],
				Plugin_Data::plugin_version(),
				'all'
			);
		}

		/**
		 * Register the JavaScript for every admin area.
		 */
		public function enqueue_scripts(): void {
			// All Admin screens.
			wp_enqueue_script(
				Plugin_Data::get_asset_handle( 'admin-global' ),
				Plugin_Data::get_assets_url_base() . 'admin.js',
				[
					'jquery',
				],
				Plugin_Data::plugin_version(),
				true
			);
		}
	}
}