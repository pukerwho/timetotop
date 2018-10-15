<?php
/*
Template Name: Портфолио
*/
?>

<?php get_header(); ?>
<div class="tpl_portfolio">
	<div style="background: url(<?php bloginfo('template_url'); ?>/img/bg-bottom.svg) center bottom/105% no-repeat;">
		<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	</div>
	<div class="bg-white">
		<div class="container container-mix portfolio py-5">
			<div class="row portfolio__filter mb-5">
				<div class="col-md-12">
					<ul class="d-flex">
						<li class="mr-4"><a href="#" data-mixitup-control data-filter="all">Все работы</a></li>
						<li class="mr-4"><a href="#" data-mixitup-control data-filter=".create">Создание сайтов</a></li>
						<li class="mr-4"><a href="#" data-mixitup-control data-filter=".seo">SEO-продвижение</a></li>
						<li><a href="#" data-filter=".smm">Продвижение в соцсетях</a></li>
					</ul>
				</div>
			</div>
			<div class="row mb-5">
				<?php 
		    $custom_query = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => -1, 'orderby' => 'menu_order' ) );
		    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
		    <div class="col-md-4 p-0 mix <?php $cats = rwmb_meta( 'meta-portfolio-cat' );
					foreach ( $cats as $cat ) { echo $cat; } ?>">
					<div class="portfolio__item">
						<a href="<?php echo rwmb_meta( 'meta-portfolio-link' ); ?>" target="_blank">
							<div class="portfolio__item-absolute"></div>
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="portfolio__item-bg">
							<div class="portfolio__item-logo">
								<?php 
									rwmb_the_value( 'meta-portfolio-logo', array( 'size' => 'large' )  );
								?>
							</div>
							<div class="portfolio__item-content">
								<div class="portfolio__item-name d-flex justify-content-center">
									<span class="lead portfolio__item-show-hide text-white text-center"><?php the_title(); ?></span>
								</div>
								<div class="portfolio__item-desc">
									<span class="lead portfolio__item-show-hide text-white text-center"><?php echo rwmb_meta( 'meta-portfolio-name' ); ?></span>
									
								</div>
								<div class="portfolio__item-site">
									<span class="lead portfolio__item-show-hide text-white text-center">Посетить сайт</span>
								</div>
							</div>
						</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.0/mixitup.min.js"></script>
<?php get_footer(); ?>