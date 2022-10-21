<?php
	/*
	  Plugin Name: WAX Custom Login
	  Plugin URI: https://www.webaxones.com
	  Description: Simply customize login page
	  Author: Webaxones
	  Author URI: https://www.webaxones.com
	  Version: 1.0
	 */

// don't load directly
	if ( ! defined( 'ABSPATH' ) ) {
		die( '-1' );
	}


	/**
	 *  Change login image
	 */

    add_action( 'login_head', 'wax_login_head' );
    
	function wax_login_head() {

		$wax_active_theme     = wp_get_theme();
		$wax_theme_screenshot = $wax_active_theme->get_screenshot();
        $wax_site_name = get_bloginfo('name');
        $wax_site_name = html_entity_decode($wax_site_name); 
        
		if ( $wax_theme_screenshot ) {
			?>
            <style>
                #login h1 {
                    position: relative;
                }
                #login h1::before {
                    content: "<?php echo $wax_site_name; ?>";
                    display: block;
                    width: 300px;
                    height: 300px;
                    line-height: 300px;
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    padding: 0;
                    margin: 0 auto;
                    text-align: center;
                    z-index: -1;
                    background-color: #0572a8;
                    border-radius: 50%;
                    color: #fff;
                    font-size: .8em;
                    font-weight: normal;
                    font-style: italic;
                }
                #login h1 a {
                    background: url('<?php echo $wax_theme_screenshot; ?>') no-repeat scroll center top transparent;
                    width: 300px;
                    height: 300px;
                    background-size: 170%;
                    border-radius: 50%;
                    box-shadow: inset 0 0 3px rgba(0, 0, 0, .5);
                    margin-bottom: 3rem;
                    z-index: 1;
                }
                </style>
			<?php
		}
	}


	/**
	 *  Make login image link to home URL
	 *
	 * @return  string             Return the home URL for the current site
	 */

	add_filter( 'login_headerurl', 'wax_login_logo_url' );
	function wax_login_logo_url() {
		return home_url();
	}


	/**
	 *  Rewrite login image url title
	 *
	 * @return  string             Return the current site title
	 */

	add_filter( 'login_headertext', 'wax_login_logo_url_title' );
	function wax_login_logo_url_title() {
		return get_bloginfo( 'name' );
	}
