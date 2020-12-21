<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/includes/class-plugin-activation.php';
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
function instaappointment_lite_theme_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
	
		// Revolution slider
		array(
			'name' => 'Business Opening Hours',
			'slug' => 'business-opening-hours',
			'required' => false
		),
		array(
			'name' => 'Feedburner Follow Me',
			'slug' => 'feedburner-follow-me',
			'required' => false
		),
	);

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> 'instaappointment-lite',         	        // Text domain - likely want to be the same as your theme.
		'default_path' 		=> 'FOODEEZ_REQUIRED_PLUGINS',     // Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                        // Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Recommended Plugins For Instaappointment Lite Theme', 'instaappointment-lite'),
			'menu_title'                       			=> __( 'Instaappointment Plugins', 'instaappointment-lite'),
			'installing'                       			=> __( 'Installing Plugin: %s', 'instaappointment-lite'), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', 'instaappointment-lite'),
			'notice_can_install_required'     			=> _n_noop( 'Instaappointment Lite theme recommended the following plugin: %1$s.', 'This theme recommended the following plugins: %1$s.','instaappointment-lite' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'Instaappointment Lite recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.','instaappointment-lite' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.','instaappointment-lite' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.','instaappointment-lite' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.','instaappointment-lite' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.','instaappointment-lite' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.','instaappointment-lite' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.','instaappointment-lite' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins','instaappointment-lite' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins','instaappointment-lite' ),
			'return'                           			=> __( 'Return to Recommended Plugins Installer', 'instaappointment-lite'),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', 'instaappointment-lite'),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', 'instaappointment-lite'), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'instaappointment_lite_theme_register_required_plugins');