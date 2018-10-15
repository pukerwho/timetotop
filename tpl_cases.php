<?php
/*
Template Name: Кейсы
*/
?>

<?php get_header(); ?>
<div class="tpl_cases">
	<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	<!-- Новая работа -->
	<div class="cases__block relative">
		<div class="container pt-5">
			<?php 
			  $custom_query = new WP_Query( array( 'post_type' => 'cases', 'posts_per_page' => 1 ) );
			  if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
				<div class="row mb-5">
					<div class="col-md-12">
						<div class="cases__info p-5">
							<div class="cases__category mb-4">
								<?php 
									$terms = get_the_terms( $post->ID , 'tx_cases' );
									foreach ( $terms as $term ): ?>
										<?php $term_link = get_term_link($term); ?>
										<a href="<?php echo $term_link; ?>"><?php echo $term->name; ?></a>
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
			  	$custom_query = new WP_Query( array( 'post_type' => 'cases', 'offset'=> 1 ) );
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
<?php get_footer(); ?>