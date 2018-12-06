<?php
/*
Template Name: Цены
*/
?>

<?php get_header(); ?>

<div class="tpl_price">
	<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	<section class="my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
					<div class="card price bg-white">
						<div class="price__top p-5">
							<div class="price__img mb-5">
								<img src="<?php bloginfo('template_url'); ?>/img/price-1.png" alt="">	
							</div>
							<div class="price__name mb-4">
								Сайт-визитка
							</div>
							<div class="price__info mb-4">
								<a href="http://dominicandance.ru/" class="link-hover-underline" target="_blank">Пример сайта</a>
							</div>
							<div class="price__number">
								<div class="from-ua">4 000 UAH</div>
								<div class="not-from-ua">10 000 RUB</div>
							</div>
						</div>
						<div class="price__bottom bg-lightgreen" data-toggle="modal" data-target="#vizitkaModal">
							<div class="price__order">
								Заказать
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
					<div class="card price bg-white">
						<div class="price__top p-5">
							<div class="price__img mb-5">
								<img src="<?php bloginfo('template_url'); ?>/img/price-2.png" alt="">	
							</div>
							<div class="price__name mb-4">
								Landing Page
							</div>
							<div class="price__info mb-4">
								<a href="https://www.victorymovinginc.com/" class="link-hover-underline" target="_blank">Пример сайта</a>
							</div>
							<div class="price__number">
								<div class="from-ua">5 000 UAH</div>
								<div class="not-from-ua">12 000 RUB</div>
							</div>
						</div>
						<div class="price__bottom bg-sky" data-toggle="modal" data-target="#landingModal">
							<div class="price__order">
								Заказать
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
					<div class="card price bg-white">
						<div class="price__top p-5">
							<div class="price__img mb-5">
								<img src="<?php bloginfo('template_url'); ?>/img/price-3.png" alt="">	
							</div>
							<div class="price__name mb-4">
								Сайт-каталог
							</div>
							<div class="price__info mb-4">
								<a href="http://www.vvk-bus.com.ua/" class="link-hover-underline" target="_blank">Пример сайта</a>
							</div>
							<div class="price__number">
								<div class="from-ua">7 000 UAH</div>
								<div class="not-from-ua">18 000 RUB</div>
							</div>
						</div>
						<div class="price__bottom bg-lightyellow" data-toggle="modal" data-target="#catalogModal">
							<div class="price__order">
								Заказать
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
					<div class="card price bg-white">
						<div class="price__top p-5">
							<div class="price__img mb-5">
								<img src="<?php bloginfo('template_url'); ?>/img/price-shop.png" alt="">	
							</div>
							<div class="price__name mb-4">
								Интернет-магазин
							</div>
							<div class="price__info mb-4">
								<a href="http://ap3333.ru/" class="link-hover-underline" target="_blank">Пример сайта</a>
							</div>
							<div class="price__number">
								<div class="from-ua">10 000 UAH</div>
								<div class="not-from-ua">25 000 RUB</div>
							</div>
						</div>
						<div class="price__bottom bg-lightpurpul" data-toggle="modal" data-target="#shopModal">
							<div class="price__order">
								Заказать
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
					<div class="card price bg-white">
						<div class="price__top p-5">
							<div class="price__img mb-5">
								<img src="<?php bloginfo('template_url'); ?>/img/price-seo.png" alt="">	
							</div>
							<div class="price__name mb-4">
								SEO-Продвижение
							</div>
							<div class="price__info mb-4">
								<a href="http://seo.wemodern.com/" class="link-hover-underline" target="_blank">Подробнее</a>
							</div>
							<div class="price__number">
								<div class="from-ua">5 000 UAH</div>
								<div class="not-from-ua">12 000 RUB</div>
							</div>
						</div>
						<div class="price__bottom bg-lightred" data-toggle="modal" data-target="#seoModal">
							<div class="price__order">
								Заказать
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="900">
					<div class="card price bg-white">
						<div class="price__top p-5">
							<div class="price__img mb-5">
								<img src="<?php bloginfo('template_url'); ?>/img/price-audit.png" alt="">	
							</div>
							<div class="price__name mb-4">
								Аудит сайта
							</div>
							<div class="price__info mb-4">
								<a href="http://seo.wemodern.com/" class="link-hover-underline" target="_blank">Подробнее</a>
							</div>
							<div class="price__number">
								<div class="from-ua">900 UAH</div>
								<div class="not-from-ua">2 000 RUB</div>
							</div>
						</div>
						<div class="price__bottom bg-lightblue" data-toggle="modal" data-target="#auditModal">
							<div class="price__order">
								Заказать
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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

<!-- Сайт визитка Modal -->
<div class="modal fade" id="vizitkaModal" tabindex="-1" role="dialog" aria-labelledby="vizitkaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Напишите нам</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="151" title="Цены - Сайт визитка"]'); ?>
      </div>
    </div>
  </div>
</div>

<!-- Landing Modal -->
<div class="modal fade" id="landingModal" tabindex="-1" role="dialog" aria-labelledby="landingModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Напишите нам</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="152" title="Цены - Лендинг"]'); ?>
      </div>
    </div>
  </div>
</div>

<!-- Catalog Modal -->
<div class="modal fade" id="catalogModal" tabindex="-1" role="dialog" aria-labelledby="catalogModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Напишите нам</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="153" title="Цены - Сайт каталог"]'); ?>
      </div>
    </div>
  </div>
</div>

<!-- Shop Modal -->
<div class="modal fade" id="shopModal" tabindex="-1" role="dialog" aria-labelledby="shopModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Напишите нам</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="154" title="Цены - Интернет-магазин"]'); ?>
      </div>
    </div>
  </div>
</div>

<!-- SEO Modal -->
<div class="modal fade" id="seoModal" tabindex="-1" role="dialog" aria-labelledby="seoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Напишите нам</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="155" title="Цены - СЕО"]'); ?>
      </div>
    </div>
  </div>
</div>

<!-- Catalog Modal -->
<div class="modal fade" id="auditModal" tabindex="-1" role="dialog" aria-labelledby="auditModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Напишите нам</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="156" title="Цены - АУДИТ"]'); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>