<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="blog ">
	<div class="blog_top mb-1 mb-md-5">
		<div class="blog_bg totop-animate"></div>
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
	</div>
	<div class="blog_content mb-5 totop-animate">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<div class="lead">
						<?php the_content(); ?>
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
      	<div class="lead">
      		Введите, пожалуйста, ваш email, на который мы отправим документ "Must Have: 15 пунктов, которые влияют на продвижение"
      	</div>
        <?php echo do_shortcode('[contact-form-7 id="317" title="CheckList - MustHave"]'); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>