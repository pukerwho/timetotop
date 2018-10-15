<?php
/*
Template Name: Отзывы
*/
?>

<?php get_header(); ?>

<div class="tpl_reviews">
	<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	<div class="container py-5">
		<div class="reviews clearfix">
			<div class="col-md-4 grid-sizer"></div>
			<?php 
			  $custom_query = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => -1 ) );
			  if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			  	<?php get_template_part( 'blocks/reviews', 'default' ); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<div class="bg-white">
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<?php get_template_part( 'blocks/form-me', 'default' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
	$('.reviews').masonry({
	  columnWidth: '.grid-sizer',
	  itemSelector: '.review',
	  percentPosition: true,
	  transitionDuration: 0,
	});
</script>

<?php get_footer(); ?>