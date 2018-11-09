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
					<br><br>
					<div class="tpl_audit__photos">
						<div class="tpl_audit__photos__img">
							<a href="<?php bloginfo('template_url'); ?>/img/freeaudit1.jpg" data-lightbox="image1" data-title="Free-Audit1"><img src="<?php bloginfo('template_url'); ?>/img/freeaudit1.jpg" alt="" class="shadow-img width100"></a>
						</div>
						<div class="tpl_audit__photos__img">
							<a href="<?php bloginfo('template_url'); ?>/img/freeaudit2.jpg" data-lightbox="image2" data-title="Free-Audit2"><img src="<?php bloginfo('template_url'); ?>/img/freeaudit2.jpg" alt="" class="shadow-img width100"></a>
						</div>
						<div class="tpl_audit__photos__img">
							<a href="<?php bloginfo('template_url'); ?>/img/freeaudit3.jpg" data-lightbox="image3" data-title="Free-Audit3"><img src="<?php bloginfo('template_url'); ?>/img/freeaudit3.jpg" alt="" class="shadow-img width100"></a>
						</div>
						<div class="tpl_audit__photos__img">
							<a href="<?php bloginfo('template_url'); ?>/img/freeaudit4.jpg" data-lightbox="image4" data-title="Free-Audit4"><img src="<?php bloginfo('template_url'); ?>/img/freeaudit4.jpg" alt="" class="shadow-img width100"></a>
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