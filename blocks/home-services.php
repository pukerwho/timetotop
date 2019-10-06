<div class="services pb-5">
	<div class="container pt-5">
		<div class="row mb-5">
			<div class="col-md-12">
				<h2 class="text_dark text-uppercase font-weight-bold mb-4 totop-animate">Услуги</h2>
				<div class="services_description lead totop-animate">Наши знания (и большой опыт за спиной), помогают нам решать определенные задачи. Лучше всего у нас получается создавать сайты (визитки, landing pages, интернет-магазины) и продвигать их в поисковой выдачи.</div>
			</div>	
		</div>
		<div class="row services_row">
			<div class="col-md-4 services_col totop-animate">
				<div class="card_box text-center p-4 mb-5 mb-md-0">
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
			</div>
			<div class="col-md-4 services_col totop-animate">
				<div class="card_box text-center p-4 mb-5 mb-md-0">
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
			</div>
			<div class="col-md-4 services_col totop-animate">
				<div class="card_box text-center p-4 mb-5 mb-md-0">
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
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content pt-5">
    	<div class="text-center">
	    	<div class="font_size_m text_dark underline_green inline-block mb-3">Давайте начнем со знакомства</div>
	    	<div data-dismiss="modal" class="custom_close">
	      	<span aria-hidden="true">&times;</span>
	      </div>	
    	</div>
      <div class="modal-body">
      	<div class="text-center mb-4">
      		<img src="<?php bloginfo('template_url') ?>/img/deal.svg" alt="" width="50px">
      	</div>
      	<div class="services_form">
      		<?php echo do_shortcode('[contact-form-7 id="310" title="Заказать услугу"]'); ?>	
      	</div>
      </div>
      <div>
    		<div class="lead text-center mb-4">
    			Либо напишите нам в мессенджере
    		</div>
    		<div class="d-flex justify-content-around bg_grey pt-3 py-2">
    			<li>
    				<a href="tg://resolve?domain=time2top" class="d-flex flex-column align-items-center text_dark">
    					<img src="<?php bloginfo('template_url') ?>/img/telegram.svg" alt="" width="35px">
    					<span>Telegram</span>
    				</a>
    			</li>
    			<li>
    				<a href="https://wa.me/+380997713997" class="d-flex flex-column align-items-center text_dark">
    					<img src="<?php bloginfo('template_url') ?>/img/whatsapp.svg" alt="" width="35px">
    					<span>Whatsapp</span>
    				</a>
    			</li>
    			<li>
    				<a href="viber://chat?number=+380997713997" class="d-flex flex-column align-items-center text_dark">
    					<img src="<?php bloginfo('template_url') ?>/img/viber.svg" alt="" width="35px">
    					<span>Viber</span>
    				</a>
    			</li>
    		</div>
    	</div>
    </div>
  </div>
</div>