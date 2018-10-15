<?php
/*
Template Name: О нас
*/
?>

<?php get_header(); ?>
<div class="tpl_about">
	<div style="background: url(<?php bloginfo('template_url'); ?>/img/bg-bottom.svg) center bottom/105% no-repeat;">
		<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	</div>
	<div class="bg-white py-5">
		<div class="container">
			<div class="aboutus">
				<div class="aboutus__text lead">
					<div class="row justify-content-center">
						<div class="col-md-10">
							WeModern - небольшая команда людей, которым нравиться делать Веб чуточку лучше.
							<div class="display-4 font-weight-bold text-dark pt-4 mb-3">Начало</div>
							Все началось много-много лет назад, когда у трех основателей появились персональные комьютеры. С тех пор любопытство и неуемное стремление сделать все хоть чуточку лучше, толкало нас вперед. В начале это были сайты для знакомых. Потом для знакомых знакомых. Все как обычно. Постепенный рост, шаг за шагом. И вот мы здесь: за спиной более 15 лет опыта разработки и продвижения. Изучены различные технологии, набиты шишки. 
							<br><br><span class="highlight">Сегодня мы уверены, что сможем решить Вашу задачу и дать именно то, что нужно Вашему бизнесу.</span>

							<hr style="background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHZpZXdCb3g9IjAgMCAxMTkgNiI%2BPHBhdGggZD0iTTExOSAzLjhjLTYwIDIuNS0zMy41LTctMTE5IDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzNjYjM3MCIgc3Ryb2tlLXdpZHRoPSIyIi8%2BPC9zdmc%2B) center/5em 100% repeat-x; height: 0.3em; margin: 3em 0; border: 0;">
							<div class="seo__inner font-weight-bold text-dark text-center">Успех любой компании во многом зависит от эффективности её сотрудников</div>
							<hr style="background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHZpZXdCb3g9IjAgMCAxMTkgNiI%2BPHBhdGggZD0iTTExOSAzLjhjLTYwIDIuNS0zMy41LTctMTE5IDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzNjYjM3MCIgc3Ryb2tlLXdpZHRoPSIyIi8%2BPC9zdmc%2B) center/5em 100% repeat-x; height: 0.3em; margin: 3em 0; border: 0;">
							<div class="display-4 font-weight-bold text-dark  mb-3">Наша команда</div>
							Сейчас в нашей команде 11 человек (как в футболе). Мы из разных городов (Киев, Харьков, Тбилиси, Вроцлав, Мюнхен, Пхукет, Лос-Анджелес), но все объеденены одной целью - сделать больше красивых и эффективных сайтов.
						</div>
					</div>
					<div class="row justify-content-center pt-4 pb-5">
						<div class="col-md-10">
							<hr style="background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHZpZXdCb3g9IjAgMCAxMTkgNiI%2BPHBhdGggZD0iTTExOSAzLjhjLTYwIDIuNS0zMy41LTctMTE5IDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzNjYjM3MCIgc3Ryb2tlLXdpZHRoPSIyIi8%2BPC9zdmc%2B) center/5em 100% repeat-x; height: 0.3em; margin: 3em 0; border: 0;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img src="<?php bloginfo('template_url'); ?>/img/darth-aboutus.png" alt="">
						</div>
						<div class="col-md-6">
							<?php echo do_shortcode('[contact-form-7 id="114" title="Контакты"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>