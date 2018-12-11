<div class="col-md-4 review mb-4">
	<div class="card p-3">
		<div class="review__cat">
			<?php if(rwmb_meta( 'meta-review-cat' ) === 'create'): ?>
			  <div class="review__cat-name create">Создание сайта</div>
			  <div class="review__cat-order">
	  			<i class="fas fa-thumbs-up i-create"></i>
	  		</div>
			<?php elseif (rwmb_meta( 'meta-review-cat' ) === 'seo'): ?>
			  <div class="review__cat-name seo">SEO-продвижение</div>
			  <div class="review__cat-order">
	  			<i class="fas fa-thumbs-up i-seo"></i>
	  		</div>
			<?php else: ?>
			  <div class="review__cat-name smm">SMM-продвижение</div>
			  <div class="review__cat-order">
	  			<i class="fas fa-thumbs-up i-smm"></i>
	  		</div>
			<?php endif; ?>
		</div>
		<div class="user">
			<div class="user__avatar">
				<?php 
					rwmb_the_value( 'meta-review-avatar', array( 'size' => 'thumbnail' )  );
				?>
			</div>
			<div class="user-info">
				<div class="user__name">
	  			<?php echo rwmb_meta( 'meta-review-name' ) ?>
	  		</div>
	  		<div class="user__who not-from-ua">
	  			<?php echo rwmb_meta( 'meta-review-from' ) ?>
	  		</div>
	  		<div class="user__who from-ua">
	  			<?php echo rwmb_meta( 'meta-review-who' ) ?>
	  		</div>
			</div>
		</div>
		<div class="review__content">
			<?php the_content(); ?>	
		</div>
		<div class="review__video">
			<div class="youtube-player" data-id="<?php echo rwmb_meta( 'meta-review-video' ); ?>"></div>
		</div>
	</div>
</div>