<?php get_header(); ?>

<?php
// get the currently queried taxonomy term, for use later in the template file
$term = get_queried_object();
?>

<div class="tpl_cases">
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center"><a href="/cases">Кейсы:</a> <?php echo $term->name; ?></h1>
				<div class="text-center maingreen mb-4">		
					<svg viewBox="0 0 67 17" preserveAspectRatio="none" focusable="false" class="_zdxht7" style="height: 15px;"><path fill="currentColor" d="M66.422 3.471c-3.874-1.387-8.03-1.944-12.153-2.313A286.65 286.65 0 0 0 41.283.312 299.882 299.882 0 0 0 15.42.315C10.544.522 5.675.837.82 1.25c-.767.065-.494 1.049.256.984C18.04.767 35.242.832 52.276 2.214c4.267.347 8.548.796 12.613 2.06-.714.38-1.659.45-2.49.508-1.681.118-3.368.193-5.054.254-3.323.118-6.651.157-9.979.175-6.586.036-13.177-.005-19.75.308-3.727.177-7.443.477-11.126.965-.512.068-.866.607-.584 1.02.507.741 1.333 1.13 2.273 1.33 1.17.25 2.375.404 3.563.562 2.625.349 5.264.583 7.9.853 4.758.487 9.528 1.124 14.026 2.68 2.43.842 4.631 2.024 6.759 3.348.606.377 1.446-.345.887-.838-3.091-2.724-7.517-4.264-11.687-5.201-4.773-1.073-9.682-1.428-14.55-1.935a119.4 119.4 0 0 1-4.363-.52c-.452-.064-.908-.125-1.36-.199 12.723-1.453 25.652-.78 38.463-1.334 1.827-.08 3.675-.133 5.489-.325 1.347-.142 2.72-.5 3.496-1.527.267-.355.053-.772-.38-.927"></path></svg>
				</div>
				<div class="lead text-center">Примеры успешных (и не успешных) работ</div>
			</div>
		</div>
	</div>
	<!-- Новая работа -->
	<div class="cases__block relative">
		<div class="container pt-5">
			<?php 
			  $custom_query = new WP_Query( array( 'post_type' => 'cases', 'tx_cases' => $term->slug, 'posts_per_page' => 1 ) );
			  if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
				<div class="row mb-5">
					<div class="col-md-12">
						<div class="cases__info p-5">
							<div class="cases__category mb-4">
								<?php 
									$terms = get_the_terms( $post->ID , 'tx_cases' );
									foreach ( $terms as $term ): ?>
										<?php $term_link = get_term_link($term); ?>
										<div><a href="<?php echo $term_link; ?>"><?php echo $term->name; ?></a></div>
								<?php endforeach; ?>
							</div>
					    <div class="cases__title mb-4"><?php the_title(); ?></div>
					    <div class="cases__description mb-4">
					    	<?php echo rwmb_meta( 'meta-cases-desc' ); ?>
					    </div>
					    <div class="btn btn-success">
					    	<a href="<?php the_permalink(); ?>">Подробнее</a></div>
						</div>
						<div class="cases__bg"></div>
						<div class="cases__img p-5 pc-show">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<!-- Список всех работ -->
	<div class="bg-white py-5">
		<div class="container">
			<div class="row">
				<?php 
			  	$custom_query = new WP_Query( array( 'post_type' => 'cases', 'tx_cases' => $term->slug, 'offset'=> 1 ) );
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
								</span> | <span class="case__time">Время</span>
				  		</div>
				  		<div class="case__title">
				  			<?php the_title(); ?>	
				  		</div>
			  		</div>
		  		</div>
				<?php endwhile; endif; ?>  	
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>