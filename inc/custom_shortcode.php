<?php
	function single_notice_green($atts) {
		$params = shortcode_atts( array(
			'text' => 11112,
		), $atts );
		ob_start();
    ?>
    	<div class='notice_green'><img src='<?php bloginfo('template_url') ?>/img/notice_green.svg'><div><?php echo $params['text'] ?></div></div>
    <?php
    $out = ob_get_clean();
    wp_reset_postdata();
    return $out;
	}
	add_shortcode( 'blognotice', 'single_notice_green' );
?>