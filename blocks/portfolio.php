<section class="portfolio py-5 ">
	<h2 class="text-center text-uppercase totop-animate">Портфолио</h2>
	<div class="text-center maingreen mb-4 totop-animate">
		<svg viewBox="0 0 115 11" preserveAspectRatio="none" class="_zdxht7" style="height: 15px;"><path fill="currentColor" d="M114.2.94c1.012.062 1.028 1.739.006 1.69a558.985 558.985 0 0 0-24.943-.61c-14.758-.04-29.513.436-44.253 1.21C30.262 4 15.53 5.075.787 5.969-.268 6.033-.255 4.315.781 4.231c8.305-.676 16.614-1.278 24.927-1.824C40.446 1.441 55.194.645 69.954.293c14.75-.352 29.51-.242 44.245.648zm-4.001 5.196c1.06.074 1.074 1.99.006 1.917a468.694 468.694 0 0 0-56.896-.398 487.18 487.18 0 0 0-36.433 3.34c-.441.058-.88-.465-.876-.995.004-.611.423-.945.87-1.004a450.382 450.382 0 0 1 20.414-2.254 467.11 467.11 0 0 1 36.39-1.726 469.65 469.65 0 0 1 36.525 1.12z"></path></svg>
	</div>
	<div class="container">
		<div class="row mb-5">
			<?php 
	    $custom_query = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 9, 'orderby' => 'menu_order' ) );
	    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
			<div class="col-md-4 p-0">
				<div class="portfolio__item totop-animate">
					<a href="<?php echo rwmb_meta( 'meta-portfolio-link' ); ?>">
						<div class="portfolio__item-absolute"></div>
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="portfolio__item-bg">
						<div class="portfolio__item-logo">
							<?php 
								rwmb_the_value( 'meta-portfolio-logo', array( 'size' => 'large' ) );
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
			<!-- <div class="col-md-4 p-0">
				<div class="portfolio-item">
					<a href="#">
						<div class="portfolio-item-absolute"></div>
						<img src="http://localhost/mythemetwo/samoilov/wp-content/uploads/2018/07/ap3.png" alt="" class="portfolio-item-bg">
						<div class="portfolio-logo">
							<img src="http://localhost/mythemetwo/samoilov/wp-content/uploads/2018/07/logo-pavl.png" alt="" class="portfolio-item-show-hide bg-white">
						</div>
						<div class="portfolio-item-content">
							<div class="portfolio-item-name d-flex justify-content-center">
								<span class="lead portfolio-item-show-hide text-white text-center">Ap3333.ru</span>
							</div>
							<div class="portfolio-item-desc">
								<span class="lead portfolio-item-show-hide text-white text-center">Интернет-магазин мебели</span>
							</div>
							<div class="portfolio-item-site">
								<span class="lead portfolio-item-show-hide text-white text-center">Посетить сайт</span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 p-0">
				<div class="portfolio-item">
					<a href="#">
						<div class="portfolio-item-absolute"></div>
						<img src="http://localhost/mythemetwo/samoilov/wp-content/uploads/2018/07/likeabc.png" alt="" class="portfolio-item-bg">
						<div class="portfolio-logo">
							<img src="http://localhost/mythemetwo/samoilov/wp-content/uploads/2018/07/likeabc-logo.png" alt="" class="portfolio-item-show-hide">
						</div>
						<div class="portfolio-item-content">
							<div class="portfolio-item-name d-flex justify-content-center">
								<span class="lead portfolio-item-show-hide text-white text-center">LikeABC.ru</span>
							</div>
							<div class="portfolio-item-desc">
								<span class="lead portfolio-item-show-hide text-white text-center">Сайт для репетитора</span>
							</div>
							<div class="portfolio-item-site">
								<span class="lead portfolio-item-show-hide text-white text-center">Посетить сайт</span>
							</div>
						</div>
					</a>
				</div>
			</div> -->
		</div>
		<div class="row">
			<div class="col-md-12 p-0">
				<div class="text-center">
					<a href="/works"><div class="btn btn-outline-success">Перейти в раздел</div></a>
				</div>
			</div>
		</div>
	</div>
</section>