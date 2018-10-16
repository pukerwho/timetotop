<?php get_header(); ?>

<div style="background: url(<?php bloginfo('template_url'); ?>/img/bg-bottom.svg) center bottom/105% no-repeat;">
	<?php get_template_part( 'blocks/page-top', 'default' ); ?>
</div>

<div class="bg-white">
	<div class="container py-5">
		<div class="row justify-content-center mb-5">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-10 lead">
				<?php the_content(); ?>
			</div>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
		<h2 class="text-center text-uppercase">Кейсы</h2>
		<div class="text-center maingreen mb-4">		
			<svg viewBox="0 0 67 17" preserveAspectRatio="none" focusable="false" class="_zdxht7" style="height: 15px;"><path fill="currentColor" d="M66.422 3.471c-3.874-1.387-8.03-1.944-12.153-2.313A286.65 286.65 0 0 0 41.283.312 299.882 299.882 0 0 0 15.42.315C10.544.522 5.675.837.82 1.25c-.767.065-.494 1.049.256.984C18.04.767 35.242.832 52.276 2.214c4.267.347 8.548.796 12.613 2.06-.714.38-1.659.45-2.49.508-1.681.118-3.368.193-5.054.254-3.323.118-6.651.157-9.979.175-6.586.036-13.177-.005-19.75.308-3.727.177-7.443.477-11.126.965-.512.068-.866.607-.584 1.02.507.741 1.333 1.13 2.273 1.33 1.17.25 2.375.404 3.563.562 2.625.349 5.264.583 7.9.853 4.758.487 9.528 1.124 14.026 2.68 2.43.842 4.631 2.024 6.759 3.348.606.377 1.446-.345.887-.838-3.091-2.724-7.517-4.264-11.687-5.201-4.773-1.073-9.682-1.428-14.55-1.935a119.4 119.4 0 0 1-4.363-.52c-.452-.064-.908-.125-1.36-.199 12.723-1.453 25.652-.78 38.463-1.334 1.827-.08 3.675-.133 5.489-.325 1.347-.142 2.72-.5 3.496-1.527.267-.355.053-.772-.38-.927"></path></svg>
		</div>
		<div class="row mb-5">
			<?php 
		  	$custom_query = new WP_Query( array( 'post_type' => 'cases' ) );
		  	if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
		  	<div class="col-md-4">
		  		<div class="case mb-5">
			  		<div class="case__thumb mb-4">
			  			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
			  		</div>
			  		<div class="case__info text-center mb-3">
			  			<span class="case__category">
			  				<?php 
								$terms = get_the_terms( $post->ID , 'tx_cases' );
								foreach ( $terms as $term ): ?>
									<?php $term_link = get_term_link($term); ?>
									<a href="<?php echo $term_link; ?>"><?php echo $term->name; ?></a>
								<?php endforeach; ?>
							</span><!--  | <span class="case__time">Время</span> -->
			  		</div>
			  		<div class="case__title">
			  			<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
			  		</div>
		  		</div>
	  		</div>
			<?php endwhile; endif; ?>  	
		</div>
		<div class="row justify-content-center">
			<div class="col-md-9">
				<?php get_template_part( 'blocks/form-me', 'default' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>