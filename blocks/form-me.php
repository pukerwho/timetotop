<div class="form-me p-5 text-center">
	<div class="form-me__text mb-4 totop-animate">Не откладывай на завтра - <span class="highlight">напиши нам сейчас!</span></div>
	<div class="btn btn-success btn-lg totop-animate" data-toggle="modal" data-target="#formMeModal">Отправить заявку</div>
	<div class="form-me__ball-green"></div>
	<div class="form-me__ball-lightblue bg-lightblue"></div>
</div>

<!-- Catalog Modal -->
<div class="modal fade" id="formMeModal" tabindex="-1" role="dialog" aria-labelledby="formMeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Напишите нам</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="125" title="Form Me"]'); ?>
      </div>
    </div>
  </div>
</div>