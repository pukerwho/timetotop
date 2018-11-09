<?php
/*
Template Name: Аудит
*/
?>

<?php get_header(); ?>

<div class="tpl_audit">
	<div style="background: url(<?php bloginfo('template_url'); ?>/img/bg-bottom.svg) center bottom/105% no-repeat;">
		<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	</div>
	<div class="bg-white">
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-10 lead">
					Почему Ваш сайт плохо ранжируется в поисковой выдачи? Что с ним не так? Почему пользователи не могут найти его? 🤔
					<br><br>‼ Наша услуга "Бесплатный SEO-аудит" идеально подойдет Вам ‼
					<br><br>Мы проанализируем сайт, выявим основные ошибки, которые мешают Вашему сайту занимать ТОПовые позиции в поиске 📈 
					<br><br>В результате Вы получите документ, в котором кратко будут изложены проблемы сайта, а также рекомендации по их устранению 📝💡 
					<hr style="background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHZpZXdCb3g9IjAgMCAxMTkgNiI%2BPHBhdGggZD0iTTExOSAzLjhjLTYwIDIuNS0zMy41LTctMTE5IDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzNjYjM3MCIgc3Ryb2tlLXdpZHRoPSIyIi8%2BPC9zdmc%2B) center/5em 100% repeat-x; height: 0.3em; margin: 3em 0; border: 0;">
					<div class="lead font-weight-bold mb-5">
						Результаты:
					</div>
					<div class="tpl_audit__photos mb-5">
						<div class="tpl_audit__photos__img">
							<a href="<?php bloginfo('template_url'); ?>/img/freeaudit1.jpg" data-lightbox="image1" data-title="Результаты SEO-аудита"><img src="<?php bloginfo('template_url'); ?>/img/freeaudit1.jpg" alt="" class="shadow-img width100"></a>
						</div>
						<div class="tpl_audit__photos__img">
							<a href="<?php bloginfo('template_url'); ?>/img/freeaudit2.jpg" data-lightbox="image1" data-title="Результаты SEO-аудита"><img src="<?php bloginfo('template_url'); ?>/img/freeaudit2.jpg" alt="" class="shadow-img width100"></a>
						</div>
						<div class="tpl_audit__photos__img">
							<a href="<?php bloginfo('template_url'); ?>/img/freeaudit3.jpg" data-lightbox="image1" data-title="Результаты SEO-аудита"><img src="<?php bloginfo('template_url'); ?>/img/freeaudit3.jpg" alt="" class="shadow-img width100"></a>
						</div>
						<div class="tpl_audit__photos__img">
							<a href="<?php bloginfo('template_url'); ?>/img/freeaudit4.jpg" data-lightbox="image1" data-title="Результаты SEO-аудита"><img src="<?php bloginfo('template_url'); ?>/img/freeaudit4.jpg" alt="" class="shadow-img width100"></a>
						</div>
						<div class="tpl_audit__photos__img">
							<a href="<?php bloginfo('template_url'); ?>/img/freeaudit5.jpg" data-lightbox="image1" data-title="Результаты SEO-аудита"><img src="<?php bloginfo('template_url'); ?>/img/freeaudit5.jpg" alt="" class="shadow-img width100"></a>
						</div>
						<div class="tpl_audit__photos__img">
							<a href="<?php bloginfo('template_url'); ?>/img/freeaudit6.jpg" data-lightbox="image1" data-title="Результаты SEO-аудита"><img src="<?php bloginfo('template_url'); ?>/img/freeaudit6.jpg" alt="" class="shadow-img width100"></a>
						</div>
						<div class="tpl_audit__photos__img">
							<a href="<?php bloginfo('template_url'); ?>/img/freeaudit7.jpg" data-lightbox="image1" data-title="Результаты SEO-аудита"><img src="<?php bloginfo('template_url'); ?>/img/freeaudit7.jpg" alt="" class="shadow-img width100"></a>
						</div>
						<div class="tpl_audit__photos__img">
							<a href="<?php bloginfo('template_url'); ?>/img/freeaudit8.jpg" data-lightbox="image1" data-title="Результаты SEO-аудита"><img src="<?php bloginfo('template_url'); ?>/img/freeaudit8.jpg" alt="" class="shadow-img width100"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<?php echo do_shortcode('[contact-form-7 id="200" title="Бесплатный аудит сайта"]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>