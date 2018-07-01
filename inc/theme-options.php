<?php
// create custom plugin settings menu
add_action('admin_menu', 'dp_starter_option');

function dp_starter_option() {

	//create new top-level menu
	add_menu_page('Devtey Starter Settings', 'Devtey Starter', 'administrator', __FILE__, 'dp_starter_settings_page' , 'dashicons-admin-customizer', 3 );

	//call register settings function
	add_action( 'admin_init', 'register_dp_menu' );
}


function register_dp_menu() {
	//register our settings
	register_setting( 'dp-starter-options', 'dp-logo' );
	register_setting( 'dp-starter-options', 'dp-ads-atas' );
    register_setting( 'dp-starter-options', 'dp-ads-bawah' );
    register_setting( 'dp-starter-options', 'dp-ads-atas-mobile' );
    register_setting( 'dp-starter-options', 'dp-ads-bawah-mobile' );
}

function dp_starter_settings_page() {
?>
<div class="wrap">
<h1>Devtey Starter</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'dp-starter-options' ); ?>
    <?php do_settings_sections( 'dp-starter-options' ); ?>
    <table class="form-table">        
        <tr valign="top">
        <th scope="row">Company logo <div style='font-size:11px;color:#555;font-style:italic;'>Rekomendasi: 275x30 px</div></th>
            <td id='dp-image-upload'>
            <?php if (get_option('dp-logo') != '') { ?>
            <img id='img-preview' src="<?php echo esc_attr( get_option('dp-logo') ); ?>" ><hr>
            <?php } else { echo '<hr>'; } ?>
            <input type="text" name="dp-logo" id="dp-logo" class="regular-text" value="<?php echo esc_attr( get_option('dp-logo') ); ?>">
            <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Upload Image">
            <hr>
            </td>
        </tr>

        <tr valign="top">
        <th scope="row">Code Iklan Atas</th>
        <td><textarea name="dp-ads-atas" rows="7" /><?php echo esc_attr( get_option('dp-ads-atas') ); ?></textarea></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Code Iklan Bawah</th>
        <td><textarea name="dp-ads-bawah" rows="7" /><?php echo esc_attr( get_option('dp-ads-bawah') ); ?></textarea></td>
        </tr>

        <tr valign="top">
        <th scope="row">Code Iklan Mobile/HP Atas</th>
        <td><textarea name="dp-ads-atas-mobile" rows="7" /><?php echo esc_attr( get_option('dp-ads-atas-mobile') ); ?></textarea></td>
        </tr>

        <tr valign="top">
        <th scope="row">Code Iklan Mobile/HP Bawah</th>
        <td><textarea name="dp-ads-bawah-mobile" rows="7" /><?php echo esc_attr( get_option('dp-ads-bawah-mobile') ); ?></textarea></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>