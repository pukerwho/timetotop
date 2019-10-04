<?php get_header(); ?>
<section class="entry-section">
	<?php get_template_part('blocks/welcome', 'default'); ?>
	<?php get_template_part('blocks/home-services') ?>
	<?php /* get_template_part( 'blocks/howstart', 'default' ); */ ?> 
	<?php /* get_template_part( 'blocks/our-services', 'default' ); */ ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<hr style="background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHZpZXdCb3g9IjAgMCAxMTkgNiI%2BPHBhdGggZD0iTTExOSAzLjhjLTYwIDIuNS0zMy41LTctMTE5IDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzNjYjM3MCIgc3Ryb2tlLXdpZHRoPSIyIi8%2BPC9zdmc%2B) center/5em 100% repeat-x; height: 0.3em; margin: 3em 0; border: 0;">
					<div class="lead font-weight-bold text-dark text-center">Экономьте на внутренней оптимизации сайта! Заказывая сайт у нас вы получаете уже полностью оптимизированный сайт, который готов покорять Топовые позиции в поисковой выдаче. </div>
					<hr style="background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHZpZXdCb3g9IjAgMCAxMTkgNiI%2BPHBhdGggZD0iTTExOSAzLjhjLTYwIDIuNS0zMy41LTctMTE5IDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzNjYjM3MCIgc3Ryb2tlLXdpZHRoPSIyIi8%2BPC9zdmc%2B) center/5em 100% repeat-x; height: 0.3em; margin: 3em 0; border: 0;">
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part( 'blocks/portfolio', 'default' ); ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<hr style="background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHZpZXdCb3g9IjAgMCAxMTkgNiI%2BPHBhdGggZD0iTTExOSAzLjhjLTYwIDIuNS0zMy41LTctMTE5IDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzNjYjM3MCIgc3Ryb2tlLXdpZHRoPSIyIi8%2BPC9zdmc%2B) center/5em 100% repeat-x; height: 0.3em; margin: 3em 0; border: 0;">
					<div class="lead font-weight-bold text-dark text-center">Разрабатываем только уникальные сайты. Никаких шаблонов!</div>
					<hr style="background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHZpZXdCb3g9IjAgMCAxMTkgNiI%2BPHBhdGggZD0iTTExOSAzLjhjLTYwIDIuNS0zMy41LTctMTE5IDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzNjYjM3MCIgc3Ryb2tlLXdpZHRoPSIyIi8%2BPC9zdmc%2B) center/5em 100% repeat-x; height: 0.3em; margin: 3em 0; border: 0;">
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part( 'blocks/cases', 'default' ); ?>
	<div class="py-5">
		<h2 class="text-center text-uppercase">Отзывы</h2>
		<div class="text-center maingreen mb-4">		
			<svg viewBox="0 0 77 6" preserveAspectRatio="none" focusable="false" class="_zdxht7" style="height: 15px;"><path fill="currentColor" d="M76.223 1.027c-9.794.058-19.587.024-29.38-.074C37.049.856 27.257.686 17.466.446 11.952.311 6.439.141.926 0-.317-.03-.302 1.765.933 1.81c9.786.362 19.58.54 29.372.672 3.622.048 7.245.083 10.868.108a937.013 937.013 0 0 0-27.007 2.077c-.893.082-.901 1.41.005 1.33a936.8 936.8 0 0 1 24.14-1.854 890.681 890.681 0 0 1 24.285-1.21c4.544-.164 9.088-.296 13.633-.395 1.03-.022 1.028-1.517-.006-1.51"></path></svg>
		</div>
		<div class="container py-5">
			<div class="mainpage__reviews">
				<?php 
				  $custom_query = new WP_Query( array( 
				  	'post_type' => 'reviews', 'posts_per_page' => 3, 'meta_query' => array(
				  		array(
								'key'     => 'meta-review-popular',
								'value'   => 0,
								'compare' => '=',
							),
						)
				  ));
				  if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
				  <div class="review">
						<div class="card p-3">
							<div class="review__cat">
								<?php if(rwmb_meta( 'meta-review-cat' ) === 'create'): ?>
								  <div class="review__cat-name create">Создание сайта</div>
								  <div class="review__cat-order">
						  			<i class="fas fa-thumbs-up i-create"></i>
						  		</div>
								<?php elseif (rwmb_meta( 'meta-review-cat' ) === 'seo'): ?>
								  <div class="review__cat-name seo">SEO-продвижение</div>
								  <div class="review__cat-order">
						  			<i class="fas fa-thumbs-up i-seo"></i>
						  		</div>
								<?php else: ?>
								  <div class="review__cat-name smm">SMM-продвижение</div>
								  <div class="review__cat-order">
						  			<i class="fas fa-thumbs-up i-smm"></i>
						  		</div>
								<?php endif; ?>
							</div>
							<div class="user">
								<div class="user__avatar">
									<?php 
										rwmb_the_value( 'meta-review-avatar', array( 'size' => 'thumbnail' )  );
									?>
								</div>
								<div class="user-info">
									<div class="user__name">
						  			<?php echo rwmb_meta( 'meta-review-name' ) ?>
						  		</div>
						  		<div class="user__who not-from-ua">
						  			<?php echo rwmb_meta( 'meta-review-from' ) ?>
						  		</div>
						  		<div class="user__who from-ua">
						  			<?php echo rwmb_meta( 'meta-review-who' ) ?>
						  		</div>
								</div>
							</div>
							<div class="review__content">
								<?php the_content(); ?>	
							</div>
							<div class="review__video">
								<div class="youtube-player" data-id="<?php echo rwmb_meta( 'meta-review-video' ); ?>"></div>
							</div>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 p-0">
					<div class="text-center">
						<a href="/somereviews"><div class="btn btn-outline-success">Больше отзывов</div></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<?php get_template_part( 'blocks/form-me', 'default' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?> 