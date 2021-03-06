<?php namespace WSUWP\Plugin\PluginName;

class Plugin {


	protected static $version = '0.0.1';


	public static function get( $property ) {

		switch ( $property ) {

			case 'version':
				return self::$version;

			case 'dir':
				return plugin_dir_path( dirname( __FILE__ ) );

			case 'url':
				return plugin_dir_url( dirname( __FILE__ ) );

			default:
				return '';

		}

	}


	public static function setup_classes() {

		// Load any of the /classes/... used

	}


	public static function init() {

		self::setup_classes();

		// Do plugin stuff here

		require_once __DIR__ . '/scripts.php';

	}


	public static function load_class( $slug ) {

		require_once self::get( 'dir' ) . "classes/class-{$slug}.php";

	}


}

Plugin::init();
