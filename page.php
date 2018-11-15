<?php get_header(); ?>

<div class="page">
	<?php get_template_part( 'blocks/page-top', 'default' ); ?>
</div>

<div class="bg-white">
	<div class="container py-5">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-12 lead">
				<?php the_content(); ?>
			</div>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>