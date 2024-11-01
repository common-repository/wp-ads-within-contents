<?php
/*
Plugin Name: WP Ads Within Contents
Version: 1.0
Description: Show Ads Within Post Contents. Show ads Before and After the Content. You can also use ShortCode (AdsWithin) to place ads while writing contents.
Author: Anas Mir
Author URI: http://sharp-coders.com/author/anasmir
Plugin URI: http://sharp-coders.com/plugins/wp-plugins/wp-ads-within-contents-wordpress-plugin
*/

/*Check Version*/
global $wp_version;
$exit_msg="WP Requires Latest version, Your version is old";
if(version_compare($wp_version, "3.0", "<"))
{
	exit($exit_msg);
}

if(!class_exists(WPAdsWithinContents)):
	class WPAdsWithinContents{
		function WP_Ads_Within_Contents($content)
		{
			$options = $this->get_wp_ads_within_ceontents_options();
			if(is_single()){
				if($options['block_one'] == "yes" || $options['block_one'] != "no"){
					if($options['block_one_position'] == "top")
					{
						$content = '<div class="sc_ads_within_one">'. stripslashes($options['block_one_code']) .'</div>'.$content;
					}else{
						$content .= '<div class="sc_ads_within_one">'. stripslashes($options['block_one_code']) .'</div>';
					}
				}
				if($options['block_two'] == "yes" || $options['block_two'] != "no"){
					if($options['block_two_position'] == "top")
					{
						$content = '<div class="sc_ads_within_two">'. stripslashes($options['block_two_code']) .'</div>'.$content;
					}else{
						$content .= '<div class="sc_ads_within_two">'. stripslashes($options['block_two_code']) .'</div>';
					}
				}
			}
			return $content;
		}
		//Shortcode Function
		function create_adsense_shortcode( $atts ) {
			$options = $this->get_wp_ads_within_ceontents_options();
			return '<div class="sc_ads_within_short">'. stripslashes($options['shortcode_code']) .'
			</div>';
		}
		function handle_wp_ads_within_contents_options()
		{
			$settings = $this->get_wp_ads_within_ceontents_options();
			if (isset($_POST['submitted']))
			{
				//check security
				check_admin_referer('wp-ads-within-contents-by-sharp-coders');
				$settings['shortcode_css'] = isset($_POST['shortcode_css'])? $_POST['shortcode_css'] : "" ;
				$settings['shortcode_code'] = isset($_POST['shortcode_code'])? $_POST['shortcode_code'] : "" ;
				$settings['block_one'] = isset($_POST['block_one'])? "yes" : "no" ;
				$settings['block_one_position'] = isset($_POST['block_one_position'])? $_POST['block_one_position'] : "top" ;
				$settings['block_one_css'] = isset($_POST['block_one_css'])? $_POST['block_one_css'] : "" ;
				$settings['block_one_code'] = isset($_POST['block_one_code'])? $_POST['block_one_code'] : "" ;
				$settings['block_two'] = isset($_POST['block_two'])? "yes" : "no" ;
				$settings['block_two_position'] = isset($_POST['block_two_position'])? $_POST['block_two_position'] : "bottom" ;
				$settings['block_two_css'] = isset($_POST['block_two_css'])? $_POST['block_two_css'] : "" ;
				$settings['block_two_code'] = isset($_POST['block_two_code'])? $_POST['block_two_code'] : "" ;
				update_option("wp_ads_within_contents_options", serialize($settings));
				echo '<div class="updated fade"><p>Setting Updated!</p></div>';
			}
			$action_url = $_SERVER['REQUEST_URI'];
			include 'wp-ads-within-contents-admin-options.php';
		}

		function wp_ads_within_contents_HeadAction()
		{
			$options = $this->get_wp_ads_within_ceontents_options();
			echo '<style type="text/css">
					.sc_ads_within_short {
						'. stripslashes($options['shortcode_css']) .'
					}
					.sc_ads_within_one {
						'. stripslashes($options['block_one_css']) .'
					}
					.sc_ads_within_two {
						'. stripslashes($options['block_two_css']) .'
					}
				 </style>';
		}
		function get_wp_ads_within_ceontents_options()
		{
			$options = unserialize(get_option("wp_ads_within_contents_options"));
			return $options;
		}
		function WP_Ads_Within_Contents_install()
		{
			$options = array(
				'shortcode_css' => 'text-align:center;
padding: 3px;
border: 1px dashed #333;',
				'shortcode_code' => '',
				'block_one' => 'no',
				'block_one_position' => 'top',
				'block_one_css' => 'float:left;',
				'block_one_code' => '',
				'block_two' => 'no',
				'block_two_position' => 'bottom',
				'block_two_css' => 'text-align: center;
padding: 20px;
background: #ccc;',
				'block_two_code' => ''
			);
			add_option("wp_ads_within_contents_options", serialize($options));
		}
		function wp_admin_menu()
		{
			add_options_page('Ads Within Contents', 'Ads Within Contents', 8, basename(__FILE__), array(&$this, 'handle_wp_ads_within_contents_options'));
		}
	}
else:
	exit('WPAdsWithinContents Already Exists');
endif;

$WPAdsWithinContents = new WPAdsWithinContents();
if(isset($WPAdsWithinContents)){
	register_activation_hook(__FILE__, array(&$WPAdsWithinContents, 'WP_Ads_Within_Contents_install'));
	add_filter('wp_head', array(&$WPAdsWithinContents, 'wp_ads_within_contents_HeadAction'));
	add_filter('the_content', array(&$WPAdsWithinContents, 'WP_Ads_Within_Contents'));
	add_action('admin_menu', array(&$WPAdsWithinContents, 'wp_admin_menu'));
	add_shortcode('AdsWithin', array(&$WPAdsWithinContents, 'create_adsense_shortcode'));
}


?>