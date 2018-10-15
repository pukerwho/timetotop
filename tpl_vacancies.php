<?php
/*
Template Name: Вакансии
*/
?>

<?php get_header(); ?>

<div class="tpl_vacancies">
	<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	<div class="">
		<div class="container pb-5">
			<div class="row">
				<?php 
				  $custom_query = new WP_Query( array( 'post_type' => 'vacancies' ) );
				  if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
				  <div class="col-md-6">
				  	<div class="card">
						  <div class="card-body">
						    <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						    <p class="card-text"><?php echo rwmb_meta( 'meta-vacancy-desc' ); ?></p>
						    <a href="<?php the_permalink(); ?>" class="card-link">Подробнее</a>
						    <a href="#" class="card-link">Отправить резюме</a>
						  </div>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>