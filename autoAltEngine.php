<?php
require_once( '../../../wp-load.php' );

class AutoAltEngine{
	
	function __construct(){
		$this->addAutoAlts();
		header("Location: https://".$_SERVER['SERVER_NAME'] ."/wp-admin");
		die();
	}
	
	
	function addAutoAlts(){

		$args = array(
		'post_type' => 'attachment',
		'numberposts' => -1,
		'post_status' => null,
		'post_parent' => null, // any parent
		); 
		$attachments = get_posts($args);
	
		if ($attachments) {
			$i =0;
			foreach ($attachments as $post) {
				$alt = get_post_meta($post->ID, '_wp_attachment_image_alt', TRUE);
		
				update_post_meta($post->ID, '_wp_attachment_image_alt', get_the_title($post));
			}
		}
		

	}
	
}

$autoAltEngine = new AutoAltEngine();