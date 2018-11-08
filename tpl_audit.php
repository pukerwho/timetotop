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
				<div class="col-md-10">
					<div class="mycards mb-5">
						<div class="mycard border border-primary p-4">
							<div class="card-title card-title text-uppercase font-weight-bold lead">Краткий SEO-Аудит</div>
							<div class="lead mb-5">Анализируем, как выполнена техническая оптимизация сайта. Даем краткие рекомендации по внутренней оптимизации - как прописать мета-теги, как улучшить представление сайта в поиске</div>
							<div class="lead mycard-price">Бесплатно</div>
						</div>
						<div class="mycard border border-success p-4">
							<div class="card-title card-title text-uppercase font-weight-bold lead">Полный SEO-Аудит</div>
							<div class="lead mb-5">Полностью проверим Ваш сайт. Укажим, как на сильные, так и на слабые стороны. Подробно распишем, как улучшить сайт, проведем анализ внутренней оптимизации сайта, детально рассмотрим качество ссылочной массы. Напишем заметки и рекомендации по дальнейшему продвижению сайта.</div>
							<div class="lead mycard-price">500 грн.</div>
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