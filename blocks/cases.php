<div class="cases py-5">
	<h2 class="text-center text-uppercase totop-animate">Кейсы</h2>
	<div class="text-center maingreen mb-4 totop-animate">		
		<svg viewBox="0 0 67 17" preserveAspectRatio="none" focusable="false" class="_zdxht7" style="height: 15px;"><path fill="currentColor" d="M66.422 3.471c-3.874-1.387-8.03-1.944-12.153-2.313A286.65 286.65 0 0 0 41.283.312 299.882 299.882 0 0 0 15.42.315C10.544.522 5.675.837.82 1.25c-.767.065-.494 1.049.256.984C18.04.767 35.242.832 52.276 2.214c4.267.347 8.548.796 12.613 2.06-.714.38-1.659.45-2.49.508-1.681.118-3.368.193-5.054.254-3.323.118-6.651.157-9.979.175-6.586.036-13.177-.005-19.75.308-3.727.177-7.443.477-11.126.965-.512.068-.866.607-.584 1.02.507.741 1.333 1.13 2.273 1.33 1.17.25 2.375.404 3.563.562 2.625.349 5.264.583 7.9.853 4.758.487 9.528 1.124 14.026 2.68 2.43.842 4.631 2.024 6.759 3.348.606.377 1.446-.345.887-.838-3.091-2.724-7.517-4.264-11.687-5.201-4.773-1.073-9.682-1.428-14.55-1.935a119.4 119.4 0 0 1-4.363-.52c-.452-.064-.908-.125-1.36-.199 12.723-1.453 25.652-.78 38.463-1.334 1.827-.08 3.675-.133 5.489-.325 1.347-.142 2.72-.5 3.496-1.527.267-.355.053-.772-.38-.927"></path></svg>
	</div>
	<div class="cases__block relative">
		<!-- <div class="cases__bg"></div> -->
		<div class="container">
			<?php 
		    $custom_query = new WP_Query( array( 'post_type' => 'cases', 'posts_per_page' => 1, 'orderby' => 'menu_order' ) );
		    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
				<div class="row mb-5">
					<div class="col-md-12">
						<div class="cases__info p-5 totop-animate">
							<div class="cases__category mb-4">
								<?php echo rwmb_meta( 'meta-cases-category' ); ?>	
							</div>
					    <div class="cases__title mb-4"><?php the_title(); ?></div>
					    <div class="cases__description mb-4">
					    	<?php echo rwmb_meta( 'meta-cases-desc' ); ?>
					    </div>
					    <div class="btn btn-success">
					    	<a href="<?php the_permalink(); ?>">Подробнее</a></div>
						</div>
						<div class="cases__bg"></div>
						<div class="cases__img p-5 pc-show totop-animate">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" loading="lazy">
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
			<div class="row">
				<div class="col-md-12 p-0">
					<div class="text-center">
						<a href="/ourcases"><div class="btn btn-outline-success">Перейти в раздел</div></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>