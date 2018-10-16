<?php get_header(); ?>

<div style="background: url(<?php bloginfo('template_url'); ?>/img/bg-bottom.svg) center bottom/105% no-repeat;">
	<?php get_template_part( 'blocks/page-top', 'default' ); ?>
</div>

<div class="bg-white">
	<div class="container py-5">
		<div class="row justify-content-center">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-10 lead">
				<?php the_content(); ?>
			</div>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>