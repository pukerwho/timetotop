<?php
/*
Template Name: Правила
*/
?>

<?php get_header(); ?>
<div class="tpl_about">
	<div style="background: url(<?php bloginfo('template_url'); ?>/img/bg-bottom.svg) center bottom/105% no-repeat;">
		<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	</div>
	<div class="bg-white py-5">
		<div class="container">
			<div class="rules">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="rules__text lead">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>