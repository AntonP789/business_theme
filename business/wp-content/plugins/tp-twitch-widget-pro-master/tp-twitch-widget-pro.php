<?php
/**
 * Plugin Name:     Twitch for WordPress (PRO)
 * Plugin URI:      https://kryptonitewp.com/downloads/twitch-wordpress-pro/
 * Description:     Extending our free Twitch plugin with even more awesome features!
 * Version:         1.2.0
 * Author:          KryptoniteWP
 * Author URI:      https://kryptonitewp.com
 * Text Domain:     tp-twitch-widget-pro
 *
 * @author          KryptoniteWP
 * @copyright       Copyright (c) KryptoniteWP
 */

// Exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;

if( ! class_exists( 'TP_Twitch_Pro' ) ) :

	/**
	 * Main TP_Twitch_Pro class
	 *
	 * @since       1.0.0
	 */
	final class TP_Twitch_Pro {
		/** Singleton *************************************************************/

		/**
		 * TP_Twitch_Pro instance.
		 *
		 * @access private
		 * @since  1.0.0
		 * @var    TP_Twitch_Pro The one true TP_Twitch_Pro
		 */
		private static $instance;

        /**
         * The settings instance variable.
         *
         * @access public
         * @since  1.0.0
         * @var    TP_Twitch_Pro_Settings
         */
        public $settings;

		/**
		 * The version number of TP_Twitch_Pro.
		 *
		 * @access private
         * @since  1.0.0
		 * @var    string
		 */
		private $version = '1.2.0';

		/**
		 * Main TP_Twitch_Pro Instance
		 *
		 * Insures that only one instance of TP_Twitch_Pro exists in memory at any one
		 * time. Also prevents needing to define globals all over the place.
		 *
		 * @since 1.0
		 * @static
		 * @staticvar array $instance
		 * @uses TP_Twitch_Pro::setup_globals() Setup the globals needed
		 * @uses TP_Twitch_Pro::includes() Include the required files
		 * @uses TP_Twitch_Pro::setup_actions() Setup the hooks and actions
		 * @return TP_Twitch_Pro
		 */
		public static function instance() {
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof TP_Twitch_Pro ) ) {
				self::$instance = new TP_Twitch_Pro;

                if ( ! function_exists( 'tp_twitch' ) ) {

                    add_action( 'admin_notices', array( 'TP_Twitch_Pro', 'base_plugin_required_notice' ) );

                    return self::$instance;

                }

				self::$instance->setup_constants();
				self::$instance->includes();

				add_action( 'plugins_loaded', array( self::$instance, 'setup_objects' ), -1 );
				add_action( 'plugins_loaded', array( self::$instance, 'load_textdomain' ) );
			}
			return self::$instance;
		}

		/**
		 * Throw error on object clone
		 *
		 * The whole idea of the singleton design pattern is that there is a single
		 * object therefore, we don't want the object to be cloned.
		 *
		 * @since 1.0.0
		 * @access protected
		 * @return void
		 */
		public function __clone() {
			// Cloning instances of the class is forbidden
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'tp-twitch-widget-pro' ), '1.0' );
		}

		/**
		 * Disable unserializing of the class
		 *
		 * @since 1.0.0
		 * @access protected
		 * @return void
		 */
		public function __wakeup() {
			// Unserializing instances of the class is forbidden
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'tp-twitch-widget-pro' ), '1.0' );
		}

        /**
         * Show a warning in case the base plugin is not activated
         *
         * @static
         * @access private
         * @since 1.0.0
         * @return void
         */
        public static function base_plugin_required_notice() {
            ?>
            <div class="error">
                <p>
                    <?php printf( wp_kses( __( 'Please install the free version of <a href="%s">TP Twitch Widget</a> which is required to run the PRO version.', 'tp-twitch-widget-pro' ), array(  'a' => array( 'href' => array() ) ) ), esc_url( 'https://wordpress.org/plugins/tomparisde-twitchtv-widget/' ) ); ?>
                </p>
            </div>
            <?php
        }

		/**
		 * Setup plugin constants
		 *
		 * @access private
		 * @since 1.0.0
		 * @return void
		 */
		private function setup_constants() {
			// Plugin version
			if ( ! defined( 'TP_TWITCH_PRO_VERSION' ) ) {
				define( 'TP_TWITCH_PRO_VERSION', $this->version );
			}

			// Plugin Folder Path
			if ( ! defined( 'TP_TWITCH_PRO_PLUGIN_DIR' ) ) {
				define( 'TP_TWITCH_PRO_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
			}

			// Plugin Folder URL
			if ( ! defined( 'TP_TWITCH_PRO_PLUGIN_URL' ) ) {
				define( 'TP_TWITCH_PRO_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
			}

			// Plugin Root File
			if ( ! defined( 'TP_TWITCH_PRO_PLUGIN_FILE' ) ) {
				define( 'TP_TWITCH_PRO_PLUGIN_FILE', __FILE__ );
			}

			// Docs URL
			if ( ! defined( 'TP_TWITCH_PRO_DOCS_URL' ) ) {
				define( 'TP_TWITCH_PRO_DOCS_URL', 'https://kryptonitewp.com/support/knb/twitch-wordpress-documentation/' );
			}

            // License Server URL
            if ( ! defined( 'TP_TWITCH_PRO_LICENSE_SERVER_URL' ) ) {
                define( 'TP_TWITCH_PRO_LICENSE_SERVER_URL', 'https://kryptonitewp.com' );
            }

            // License Item ID
            if ( ! defined( 'TP_TWITCH_PRO_LICENSE_ITEM_ID' ) ) {
                define( 'TP_TWITCH_PRO_LICENSE_ITEM_ID', 5941 );
            }
		}

		/**
		 * Include required files
		 *
		 * @access private
		 * @since 1.0
		 * @return void
		 */
		private function includes() {

			// Helper & essential functions
			require_once TP_TWITCH_PRO_PLUGIN_DIR . 'includes/functions.php';

			// Core
            require_once TP_TWITCH_PRO_PLUGIN_DIR . 'includes/hooks.php';
			require_once TP_TWITCH_PRO_PLUGIN_DIR . 'includes/shortcodes.php';
            require_once TP_TWITCH_PRO_PLUGIN_DIR . 'includes/widget.php';

			// Other
			require_once TP_TWITCH_PRO_PLUGIN_DIR . 'includes/scripts.php';

			if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
				// Bootstrap.
				require_once TP_TWITCH_PRO_PLUGIN_DIR . 'includes/admin/plugins.php';

				// Settings
				require_once TP_TWITCH_PRO_PLUGIN_DIR . 'includes/admin/class-settings.php';

                // Updater
                require_once TP_TWITCH_PRO_PLUGIN_DIR . 'includes/admin/class-plugin-updater.php';

                // Licensing
                require_once TP_TWITCH_PRO_PLUGIN_DIR . 'includes/admin/class-license-handler.php';

				// Upgrades
				//require_once TP_TWITCH_PRO_PLUGIN_DIR . 'includes/admin/upgrades.php';
			}
		}

		/**
		 * Setup all objects
		 *
		 * @access public
		 * @since 1.6.2
		 * @return void
		 */
		public function setup_objects() {

			if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
				self::$instance->settings = new TP_TWITCH_PRO_Settings();
			}

            self::$instance->updater();
		}

        /**
         * Plugin Updater
         *
         * @access private
         * @since 1.0
         * @return void
         */
        private function updater() {

            if ( ! is_admin() || ! class_exists( 'TP_Twitch_Plugin_Updater' ) ) {
                return;
            }

            $license_key = tp_twitch_get_option( 'license_key' );

            if ( ! empty( $license_key ) ) {

                $plugin_updater = new TP_Twitch_Plugin_Updater(TP_TWITCH_PRO_LICENSE_SERVER_URL, __FILE__, array(
                    'version' => TP_TWITCH_PRO_VERSION,
                    'license' => $license_key,
                    'item_id' => TP_TWITCH_PRO_LICENSE_ITEM_ID,
                    'author' => 'KryptoniteWP',
                    'url' => home_url()
                ));
            }
        }

		/**
		 * Loads the plugin language files
		 *
		 * @access public
		 * @since 1.0
		 * @return void
		 */
		public function load_textdomain() {

			// Set filter for plugin's languages directory
			$lang_dir = dirname( plugin_basename( TP_TWITCH_PRO_PLUGIN_FILE ) ) . '/languages/';

			/**
			 * Filters the languages directory path to use for TP_Twitch_Pro.
			 *
			 * @param string $lang_dir The languages directory path.
			 */
			$lang_dir = apply_filters( 'tp_twitch_pro_languages_directory', $lang_dir );

			// Traditional WordPress plugin locale filter

			global $wp_version;

			$get_locale = get_locale();

			if ( $wp_version >= 4.7 ) {
				$get_locale = get_user_locale();
			}

			/**
			 * Defines the plugin language locale used in TP_Twitch_Pro.
			 *
			 * @var $get_locale The locale to use. Uses get_user_locale()` in WordPress 4.7 or greater,
			 *                  otherwise uses `get_locale()`.
			 */
			$locale = apply_filters( 'plugin_locale', $get_locale, 'tp-twitch-widget-pro' );
			$mofile = sprintf( '%1$s-%2$s.mo', 'tp-twitch-widget-pro', $locale );

			// Setup paths to current locale file
			$mofile_local  = $lang_dir . $mofile;
			$mofile_global = WP_LANG_DIR . '/tp-twitch-widget-pro/' . $mofile;

			if ( file_exists( $mofile_global ) ) {
				// Look in global /wp-content/languages/tp-twitch-widget-pro/ folder
				load_textdomain( 'tp-twitch-widget-pro', $mofile_global );
			} elseif ( file_exists( $mofile_local ) ) {
				// Look in local /wp-content/plugins/tp-twitch-widget-pro/languages/ folder
				load_textdomain( 'tp-twitch-widget-pro', $mofile_local );
			} else {
				// Load the default language files
				load_plugin_textdomain( 'tp-twitch-widget-pro', false, $lang_dir );
			}
		}
	}
endif; // End if class_exists check

/**
 * The main function responsible for returning the one true TP_Twitch_Pro
 * Instance to functions everywhere.
 *
 * Use this function like you would a global variable, except without needing
 * to declare the global.
 *
 * Example: <?php $TP_Twitch_Pro = TP_Twitch_Pro(); ?>
 *
 * @since 1.0
 * @return TP_Twitch_Pro The one true TP_Twitch_Pro Instance
 */
function TP_Twitch_Pro() {
	return TP_Twitch_Pro::instance();
}
TP_Twitch_Pro();

