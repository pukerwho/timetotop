    </section>
    <footer>
			<div class="container">
				<div class="row">
					<div class="col-md-3 mb-5">
						<div class="footer-heading text-uppercase">
							Контакты
						</div>
						<div class="footer-contact">
							<div class="phone flex align-items-center">
								<i class="fas fa-phone"></i>
								<a href="tel:380997713997">+38(099)-77-13-997</a>
							</div>
							<div class="email flex align-items-center">
								<i class="fas fa-envelope"></i>
								<a href="mailto:info@timeto.top" target="_blank">info@timeto.top</a>	
							</div>
							<div class="telegram flex align-items-center">
								<i class="fab fa-telegram-plane"></i>
								<a href="tg://resolve?domain=time2top" target="_blank">Telegram</a>
							</div>
							<div class="facebook flex align-items-center">
								<i class="fab fa-facebook-f"></i>
								<a href="https://www.facebook.com/time2top/" target="_blank">&nbsp;Facebook</a>
							</div>
							<div class="instagram flex align-items-center">
								<i class="fab fa-instagram"></i>
								<a href="https://www.instagram.com/time2top/" target="_blank">&nbsp;Instagram</a>
							</div>
						</div>
					</div>
					<div class="col-md-2 mb-5">
						<div class="footer-heading text-uppercase">
							Поддержка
						</div>
						<div class="footer-link">
							<!-- <li><a href="/faq">Почитайте F.A.Q</a></li> -->
							<li><a href="/seo">SEO-продвижение</a></li>
							<li><a href="/rules">Наши правила</a></li>
						</div>
					</div>
					<div class="col-md-2 mb-5">
						<div class="footer-heading text-uppercase">
							Информация
						</div>
						<div class="footer-link">
							<li><a href="/about">О нас</a></li>
							<li><a href="/vacancies">Вакансии</a></li>
							<li><a href="/reviews">Отзывы</a></li>
						</div>
					</div>
					<div class="col-md-5 mb-5">
						<div class="footer-heading text-uppercase">
							Рассылка
						</div>
						<div class="footer-text">
							Подпишись, чтобы не пропускать интересные новости. Обещаем - никакого спама!
							<div><?php echo do_shortcode('[contact-form-7 id="119" title="Рассылка"]'); ?></div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="copyright">
			<div class="container">
				<div class="row justify-content-between">
					<div class="copyright-text">
						Все права защищены, не беспокойтесь
					</div>
					<div class="social-links">
						<!-- <li><a href="https://www.facebook.com/wemodern/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li> -->
					</div>
				</div>
			</div>
		</div>
    <?php wp_footer(); ?>
    <!-- seoAudit Modal -->
    <div class="modal fade" id="seoAuditModal" tabindex="-1" role="dialog" aria-labelledby="seoAuditLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Заказать аудит</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo do_shortcode('[contact-form-7 id="126" title="Заказать SEO-Аудит"]'); ?>
          </div>
        </div>
      </div>
    </div>
    <?php echo get_option('jivo_site'); ?>
</body>
</html>