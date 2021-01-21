<?php
/**
 * Settings Class
 *
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'TP_Twitch_Pro_Settings' ) ) {

	class TP_Twitch_Pro_Settings {

		public $options;

		/**
		 * TP_Twitch_Pro_Settings constructor.
		 */
		public function __construct() {

			// Options
			$this->options = tp_twitch_get_options();

			// Hooks
            add_filter( 'tp_twitch_settings_validate_input', array( &$this, 'validate_input' ) );
            add_filter( 'tp_twitch_settings_page_title', array( &$this, 'settings_page_title' ) );
            add_action( 'tp_twitch_settings_section_quickstart_render', array( &$this, 'section_quickstart_render' ) );
            add_action( 'tp_twitch_register_settings_start', array( &$this, 'init_licensing_settings' ) );
            add_action( 'tp_twitch_register_defaults_settings', array( &$this, 'init_defaults_settings' ) );
		}

        /**
         * Register licensing settings
         */
		function init_licensing_settings() {

            add_settings_section(
                'tp_twitch_licensing',
                __( 'Licensing <small>(Pro Version)</small>', 'tp-twitch-widget-pro' ),
                array( &$this, 'section_licensing_render' ),
                'tp_twitch'
            );

            add_settings_field(
                'tp_twitch_license_status',
                __( 'License Status', 'tp-twitch-widget-pro' ),
                array( &$this, 'license_status_render' ),
                'tp_twitch',
                'tp_twitch_licensing',
                array('label_for' => 'tp_twitch_license_status')
            );

            add_settings_field(
                'tp_twitch_license_key',
                __( 'License Key', 'tp-twitch-widget-pro' ),
                array( &$this, 'license_key_render' ),
                'tp_twitch',
                'tp_twitch_licensing',
                array('label_for' => 'tp_twitch_license_key')
            );
        }

        /**
         * Register settings
         */
        function init_defaults_settings() {

            add_settings_field(
                'tp_twitch_defaults_spacer',
                '',
                array( &$this, 'spacer_render' ),
                'tp_twitch',
                'tp_twitch_defaults'
            );

            add_settings_field(
                'tp_twitch_style',
                __( 'Style (Shortcode)', 'tp-twitch-widget-pro' ),
                array( &$this, 'style_render' ),
                'tp_twitch',
                'tp_twitch_defaults',
                array('label_for' => 'tp_twitch_style')
            );

            add_settings_field(
                'tp_twitch_size',
                __( 'Size (Shortcode)', 'tp-twitch-widget-pro' ),
                array( &$this, 'size_render' ),
                'tp_twitch',
                'tp_twitch_defaults',
                array('label_for' => 'tp_twitch_size')
            );

            add_settings_field(
                'tp_twitch_preview',
                __( 'Preview (Shortcode)', 'tp-twitch-widget-pro' ),
                array( &$this, 'preview_render' ),
                'tp_twitch',
                'tp_twitch_defaults',
                array('label_for' => 'tp_twitch_widget_preview')
            );
        }

        /**
         * Settings Page Title
         *
         * @param $title
         * @return string
         */
        function settings_page_title( $title ) {
            return $title . '<small>' . __( 'Pro Version', 'tp-twitch-widget-pro' ) . '</small>';
        }

        /**
         * Validate input
         *
         * @param $input
         * @return mixed
         */
        function validate_input( $input ) {

            $License_Handler = new TP_Twitch_Pro_License_Handler();

            $new_license_key = ( ! empty( $input['license_key'] ) ) ? $input['license_key'] : null;
            $old_license_key = ( isset( $this->options['license_key'] ) ) ? $this->options['license_key'] : null;

            // Validate license key update
            $license_data = $License_Handler->handle_update( $new_license_key, $old_license_key );

            if ( isset( $license_data->license ) ) {
                $input['license_status'] = $license_data->license;
                $input['license_error'] =  ( isset( $license_data->error ) ) ? $license_data->error : '';
                tp_twitch_addlog( 'License key changed > Status: ' . $input['license_status'] . '(' . $input['license_error'] . ')' );
            }

            if ( ! $license_data && isset( $input['license_check'] ) && ! empty( $input['license_key'] ) ) {
                $license_data = $License_Handler->check_license( $input['license_key'] );

                if ( isset( $license_data->license ) ) {
                    $input['license_status'] = $license_data->license;
                    $input['license_error'] =  ( isset( $license_data->error ) ) ? $license_data->error : '';
                    tp_twitch_addlog( 'License check > Result: ' . $input['license_status'] . '(' . $input['license_error'] . ')' );
                }
            }

            //tp_twitch_debug_log( $input );

            return $input;
        }

        /**
         * Extend quickstart section
         */
        function section_quickstart_render() {

            ?>
            <p>
                <?php _e('Alternatively you can place Twitch streams directly inside the content of your posts and pages by making use of our prepred shortcodes.', 'tp-twitch-widget-pro' ); ?>
            </p>
            <p>
                <?php _e('e.g.', 'tp-twitch-widget-pro' ); ?> <code>[twitch streamer="dreamhackcs"]</code> <?php _e( 'or', 'tp-twitch-widget-pro' ); ?> <code>[twitch game="21779" max="5"]</code>
            </p>
            <?php
        }

        /**
         * Section licensing render
         */
        function section_licensing_render() {

            ?>
            <p><?php _e('In order to make use of our pro version and receive regularly updates, please enter your license key.', 'tp-twitch-widget-pro' ); ?></p>
            <?php
        }

        /**
         * License status
         */
        function license_status_render() {

            $license_status = ( isset ( $this->options['license_status'] ) ) ? $this->options['license_status'] : '';
            $license_error = ( isset ( $this->options['license_error'] ) ) ? $this->options['license_error'] : '';

            switch ( $license_status) {
                case 'valid':
                    $license_status_color = 'green'; $license_status_label = __( 'Valid', 'tp-twitch-widget-pro' );
                    break;
                case 'expired':
                    $license_status_color = 'orange'; $license_status_label = __( 'Expired', 'tp-twitch-widget-pro' );
                    break;
                case 'invalid':
                    $license_status_color = 'red'; $license_status_label = __( 'Invalid', 'tp-twitch-widget-pro' );
                    break;
                case 'failed':
                    $license_status_color = 'red'; $license_status_label = __( 'Failed.', 'tp-twitch-widget-pro' );
                    break;
                default:
                    $license_status_color = 'gray'; $license_status_label = __( 'Disconnected', 'tp-twitch-widget-pro' );
            }
            ?>
            <span style="color: <?php echo $license_status_color; ?>; font-weight: bold;"><?php echo $license_status_label; ?></span>

            <?php if ( ! empty( $license_error ) ) { ?>
                <code><?php echo esc_html( $license_error ); ?></code>
            <?php
            }
        }

        /**
         * License key
         */
        function license_key_render() {

            $license_key = ( isset ( $this->options['license_key'] ) ) ? $this->options['license_key'] : '';
            ?>
            <input id="tp_twitch_license_key" class="regular-text" name="tp_twitch[license_key]" type="text" value="<?php echo esc_html( $license_key ); ?>" />

            <?php if ( ! empty( $license_key ) ) { ?>
                <input type="hidden" id="tp-twitch-pro-check-license" name="tp_twitch[license_check]" value="0" />
                <?php submit_button( __('Check License', 'tp-twitch-widget-pro' ), 'delete button-secondary', 'tp-twitch-pro-check-license-submit', false, array( 'style' => 'vertical-align: 3%;') ); ?>
            <?php } ?>
            <?php
        }

		/**
		 * Section defaults render
		 */
		function section_defaults_render() {

		    ?>
            <p><?php _e('Here you set up the default settings which will be used for displaying streams and may be overwritten individually.', 'tp-twitch-widget-pro' ); ?></p>
            <?php
        }

        /**
         * Spacer
         */
        function spacer_render() {

            ?>
            <hr />
            <?php
        }

        /**
         * Default widget style
         */
        function style_render() {

            $style_options = tp_twitch_get_widget_style_options();

            $style = ( ! empty ( $this->options['style'] ) ) ? $this->options['style'] : tp_twitch_get_option_default_value( 'style' );
            ?>
            <select id="tp_twitch_style" name="tp_twitch[style]">
                <?php foreach ( $style_options as $key => $label ) { ?>
                    <option value="<?php echo $key; ?>" <?php selected( $style, $key ); ?>><?php echo $label; ?></option>
                <?php } ?>
            </select>
            <?php
        }


        /**
		 * Default widget size
		 */
		function size_render() {

			$size_options = tp_twitch_get_widget_size_options();

			$size = ( ! empty ( $this->options['size'] ) ) ? $this->options['size'] : tp_twitch_get_option_default_value( 'size' );
			?>
            <select id="tp_twitch_size" name="tp_twitch[size]">
				<?php foreach ( $size_options as $key => $label ) { ?>
                    <option value="<?php echo $key; ?>" <?php selected( $size, $key ); ?>><?php echo $label; ?></option>
				<?php } ?>
            </select>
			<?php
		}

		/**
		 * Default widget preview
		 */
		function preview_render() {

			$preview_options = tp_twitch_get_widget_preview_options();

			$preview = ( ! empty ( $this->options['preview'] ) ) ? $this->options['preview'] : tp_twitch_get_option_default_value( 'preview' );
			?>
            <select id="tp_twitch_preview" name="tp_twitch[preview]">
				<?php foreach ( $preview_options as $key => $label ) { ?>
                    <option value="<?php echo $key; ?>" <?php selected( $preview, $key ); ?>><?php echo $label; ?></option>
				<?php } ?>
            </select>
			<?php
		}
	}
}