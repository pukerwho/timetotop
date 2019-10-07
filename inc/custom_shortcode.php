<?php
	function single_notice_green($atts) {
		$default = array(
			'text' => 11112,
		);
		$notice = shortcode_atts($default, $atts);
		return "foo = {$notice['text']}";
	}
	add_shortcode( 'blog_notice', 'single_notice_green' );
?>