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
				<div class="blog_content">
					<div class="lead">
						<?php the_content(); ?>
					</div>
					<!-- Вопросы и ответы -->
					<?php if(rwmb_meta( 'meta-post-faq' )): ?>
						<div id="citylist-faq" class="lead mt-5">
							<h2 class="mb-4">Вопросы и ответы</h2>
							<div>
								<ul itemscope itemtype="https://schema.org/FAQPage">
									<?php 
									$single_faqs = rwmb_meta( 'meta-post-faq' );
									foreach( $single_faqs as $single_faq ): ?>
										<li itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
											<h4 class="zag" itemprop="name">
												<?php echo $single_faq['question']; ?>
											</h4>
											<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
												<div class="lead" itemprop="text">
													<p><?php echo $single_faq['answer']; ?></p>
												</div>
											</div>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar_box mb-5">
					<div class="lead font-weight-bold mb-4">Это очень полезно!</div>
					<div class="mb-4">
						Скачай бесплатный чек-лист "Must have: 10 пунктов, которые влияют на продвижение" и начни нормально продвигать сайт.
					</div>
					<div class="sidebar_btn pointer" data-toggle="modal" data-target="#checkListModal">
						Скачать бесплатно
					</div>
				</div>
				<h4 class="mb-4">Похожие статьи</h4>
				<div class="mb-5">
					<?php $current_term = get_the_category();
					foreach ($current_term as $myterm): ?>
						<?php 
							$current_term = get_the_category();
							foreach ($current_term as $myterm); {
								$current_term_slug = $myterm->cat_ID;
							}
						?>
						<?php 
							$current_id = get_the_ID();
							$custom_query = new WP_Query( array( 
							'post_type' => 'post', 
							'posts_per_page' => 3,
							'post__not_in' => array($current_id),
							'cat' => $current_term_slug
						) );
						if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
							<div class="mb-5">
								<a href="<?php echo get_permalink(); ?>">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="width: 100%; object-fit: cover; -o-object-fit: cover;">
									<div class="text-center text_dark">
										<?php the_title(); ?>
									</div>
								</a>
							</div>
						<?php endwhile; endif; wp_reset_postdata(); ?>
					<?php endforeach; ?>
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
					<div class="sidebar_btn pointer" data-toggle="modal" data-target="#checkListModal">
						Скачать бесплатно
					</div>
				</div>
			</div>
		</div>
	</div>
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