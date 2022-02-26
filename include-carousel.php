<div id="mainimageCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#mainimageCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#mainimageCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-none d-md-block w-100"
        src="<?php echo get_template_directory_uri() ?>/dist/images/mainimage/mainimage01-md.jpeg"
        alt="<?php echo bloginfo('sitename') ?> スライド1"
      />
      <img class="d-block d-md-none w-100"
        src="<?php echo get_template_directory_uri() ?>/dist/images/mainimage/mainimage01-sm.jpeg"
        alt="<?php echo bloginfo('sitename') ?> スライド1"
      />
    </div>
    <div class="carousel-item">
      <img class="d-none d-md-block w-100"
        src="<?php echo get_template_directory_uri() ?>/dist/images/mainimage/mainimage02-md.jpeg"
        alt="<?php echo bloginfo('sitename') ?> スライド1"
      />
      <img class="d-block d-md-none w-100"
        src="<?php echo get_template_directory_uri() ?>/dist/images/mainimage/mainimage02-sm.jpeg"
        alt="<?php echo bloginfo('sitename') ?> スライド1"
      />
    </div>
  </div>
  <div class="position-absolute text-center" style="top: 51%; left: 50%; transform: translate(-51%, -50%);">
    <div><img src="<?php echo get_template_directory_uri() ?>/dist/images/common/logo.png" class="w-100" style="max-width: 300px;" alt="<?php echo bloginfo('sitename') ?>" /></div>
    <div class="pt-3 text-light small">This is subtitle of your site</div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainimageCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainimageCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
