<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="blog ">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-8">
				<div class="blog_title text_dark font_size_l font-weight-bold mb-4 totop-animate">
					<?php the_title(); ?>	
				</div>
				<div class="blog_meta lead color-grey mb-4 totop-animate">
					<?php echo get_the_date('j F Y') ?>
				</div>
				<div class="blog_author d-flex align-items-center totop-animate mb-5">
					<div class="blog_author_img mr-3">
						<img 
							src="<?php 
								$current_id = get_the_id();
								echo get_avatar_url( get_the_author_meta( 'ID' ), $current_id ); 
							?>"
						>
					</div>
					<div class="blog_author_info">
						<div class="blog_author_name text_dark">
							<?php echo get_the_author_meta('display_name') ?>
						</div>
						<div class="blog_author_bio">
							<?php echo get_the_author_meta('description') ?>
						</div>
					</div>
				</div>
				<div class="lead">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar_box mb-5">
					<div class="lead font-weight-bold mb-4">Это очень полезно!</div>
					<div class="mb-4">
						Скачай бесплатный чек-лист "Must have: 10 пунктов, которые влияют на продвижение" и начни нормально продвигать сайт.
					</div>
					<div class="sidebar_btn">
						Скачать бесплатно
					</div>
				</div>
				<h4 class="mb-4">Наши услуги</h4>
				<div class="card_box text-center p-4 mb-5">
					<div class="font_size_m font-weight-bold text-center opacity_light text_dark mb-4">
						Создание сайтов	
					</div>
					<div class="mb-4">
						<img src="<?php bloginfo('template_url') ?>/img/data.svg" alt="" width="55px">
					</div>
					<div class="mb-4">
						<li class="font_size_s pb-2">Верстка макетов</li>
						<li class="font_size_s pb-2">Разработка уникальных тем на Wordpress</li>
						<li class="font_size_s pb-2">Создание продающих Landing Page</li>
						<li class="font_size_s pb-2">Создание сайтов-каталогов</li>
						<li class="font_size_s pb-2">Разработка интернет-магазинов</li>
					</div>
					<div>
						<div class="btn_green btn_order_js pointer" data-order="Сайт" data-toggle="modal" data-target="#orderModal">
							Заказать
						</div>
					</div>
				</div>
				<div class="card_box text-center p-4 mb-5">
					<div class="font_size_m font-weight-bold text-center opacity_light text_dark mb-4">
						SEO-Продвижение
					</div>
					<div class="mb-4">
						<img src="<?php bloginfo('template_url') ?>/img/diagram.svg" alt="" width="55px">
					</div>
					<div class="mb-4">
						<li class="font_size_s pb-2">Аудит сайта</li>
						<li class="font_size_s pb-2">Внутренняя оптимизация</li>
						<li class="font_size_s pb-2">Техническая оптимизация</li>
						<li class="font_size_s pb-2">Покупка ссылок</li>
						<li class="font_size_s pb-2">Комплексное продвижение сайта</li>
					</div>
					<div>
						<div class="btn_green btn_order_js pointer" data-order="Seo" data-toggle="modal" data-target="#orderModal">
							Заказать
						</div>
					</div>
				</div>
				<div class="card_box text-center p-4 mb-5">
					<div class="font_size_m font-weight-bold text-center opacity_light text_dark mb-4">
						Реклама
					</div>
					<div class="mb-4">
						<img src="<?php bloginfo('template_url') ?>/img/target.svg" alt="" width="55px">
					</div>
					<div class="mb-4">
						<li class="font_size_s pb-2">Настройка Adwords, Директ</li>
						<li class="font_size_s pb-2">Настройка Google Tag Manager</li>
						<li class="font_size_s pb-2">Реклама в Facebook, Instagram</li>
						<li class="font_size_s pb-2">Увеличение конверий</li>
						<li class="font_size_s pb-2">Создание креативов</li>
					</div>
					<div>
						<div class="btn_green btn_order_js pointer" data-order="Реклама" data-toggle="modal" data-target="#orderModal">
							Заказать
						</div>
					</div>
				</div>
				<div class="sidebar_box mb-5">
					<div class="lead font-weight-bold mb-4">Это очень полезно!</div>
					<div class="mb-4">
						Скачай бесплатный чек-лист "Must have: 10 пунктов, которые влияют на продвижение" и начни нормально продвигать сайт.
					</div>
					<div class="sidebar_btn">
						Скачать бесплатно
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="blog_top mb-1 mb-md-5">
		
		<div class="container py-5">
			<div class="row align-items-center">
				<div class="col-md-5">
					<div class="blog_img">
						<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
					</div>			
				</div>
				<div class="col-md-6 offset-md-1">
					<div class="blog_title text_dark font_size_l font-weight-bold mb-4 totop-animate">
						<?php the_title(); ?>	
					</div>
					<div class="blog_meta lead color-grey mb-4 totop-animate">
						<?php echo get_the_date('j F Y') ?>
					</div>
					<div class="blog_author d-flex align-items-center totop-animate">
						<div class="blog_author_img mr-3">
							<img 
								src="<?php 
									$current_id = get_the_id();
									echo get_avatar_url( get_the_author_meta( 'ID' ), $current_id ); 
								?>"
							>
						</div>
						<div class="blog_author_info">
							<div class="blog_author_name text_dark">
								<?php echo get_the_author_meta('display_name') ?>
							</div>
							<div class="blog_author_bio">
								<?php echo get_the_author_meta('description') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- <div class="blog_content mb-5 totop-animate">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<div class="lead">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</div>
<?php endwhile; else: ?>
	<p><?php _e('Увы, ничего не найдено'); ?></p>
<?php endif; ?>

<div class="modal fade" id="checkListModal" tabindex="-1" role="dialog" aria-labelledby="checkListModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="checkListModalLabel">Скачать бесплатно чек-лист</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="lead mb-3">
      		Введите, пожалуйста, ваш email, на который мы отправим документ "Must Have: 10 пунктов, которые влияют на продвижение"
      	</div>
      	<div class="totop_form">
	      	<?php echo do_shortcode('[contact-form-7 id="317" title="CheckList - MustHave"]'); ?>	
      	</div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>