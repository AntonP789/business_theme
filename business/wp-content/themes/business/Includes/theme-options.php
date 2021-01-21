<?php

function bstheme_setup_options () {

    //CREATING NEW DATABASE TABLE
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'bstheme_options';

    if($wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !=  $table_name){
        $sql = "CREATE TABLE $table_name (
            id int(11) NOT NULL AUTO_INCREMENT,
            name varchar(225) NOT NULL,
            value varchar(225) NOT NULL,
            active int(11) NOT NULL,
            UNIQUE KEY id (id),
            PRIMARY KEY id (id)
	    ) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    }
}
add_action('after_switch_theme', 'bstheme_setup_options');
//================================================================================================================================
// Register tab in Admin panel

function bstheme_register_options_menu() {
    add_menu_page('Theme Options', 'Theme Options', 'manage_options', 'bstheme-options', '_custom_menu_page', null, 3);
    // Adding dublcate page as fist menu item
    add_submenu_page('bstheme-options', 'Theme Options', 'Options', 'manage_options', 'bstheme-options', '_custom_menu_page');
}
add_action('admin_menu', 'bstheme_register_options_menu');

//====================================================================
// First page

function _custom_menu_page(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'bstheme_options';
?>

    <div class="wrap">
        <h2><?php echo get_admin_page_title() ?></h2>

        <?php
            $table_fields = [
            	'website_color' => 'Website color',
                'h1_font_size' => 'H1 Font Size',
            ]
        ?>

        <form action="#" method="POST">
            <?php foreach( $table_fields as $key => $table_field ): ?>
                <label><?=$table_field?></label> -
                <input type="text" value="<?=$wpdb->get_var($wpdb->prepare("SELECT value FROM $table_name WHERE name = %s", $key))?>" name="<?=$key?>"><br/>
            <?php endforeach; ?>
            <br/>
            <input type="submit" value="Save Settings" name="save_settings" class="button button-primary">
        </form>
    </div>

    <?php
        if( isset( $_POST['save_settings'] ) ){

            foreach($_POST as $key => $field){
                if( $key != 'save_settings' ){
                    $field_name = $key;
                    $field_id = $wpdb->get_var($wpdb->prepare("SELECT id FROM $table_name WHERE name = %s", $field_name));

                    $data = array(
                        'id'        => $field_id,
                        'name'      => $field_name,
                        'value'     => $field,
                        'active'    => 1
                    );
                    $wpdb->replace( $table_name, $data );
                }
            }
            echo "<meta http-equiv='refresh' content='0'>";

        }
}
