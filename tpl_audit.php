<?php
/*
Template Name: Аудит
*/
?>

<?php get_header(); ?>

<div class="tpl_audit">
	<div style="background: url(<?php bloginfo('template_url'); ?>/img/bg-bottom.svg) center bottom/105% no-repeat;">
		<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	</div>
	<div class="bg-white">
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="mycards">
						<div class="mycard">
							<div class="card-title">Краткий SEO-Аудит</div>
							<ul>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<div class="lead">Бесплатно</div>
						</div>
						<div class="card">
							Text2
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<?php echo do_shortcode('[contact-form-7 id="200" title="Бесплатный аудит сайта"]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>