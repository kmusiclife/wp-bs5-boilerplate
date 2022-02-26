<?php get_header('offcanvas') ?>
<div class="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-none d-md-block w-100"
        src="<?php echo get_template_directory_uri() ?>/dist/images/common/headerimage01-md.jpeg"
        alt="<?php echo bloginfo('sitename') ?>"
      />
      <img class="d-block d-md-none w-100"
        src="<?php echo get_template_directory_uri() ?>/dist/images/common/headerimage01-sm.jpeg"
        alt="<?php echo bloginfo('sitename') ?>"
      />
    </div>
  </div>
  <div class="position-absolute text-center" style="top: 50%; left: 50%; transform: translate(-48%, -50%);">
    <a href="/"><img src="<?php echo get_template_directory_uri() ?>/dist/images/common/logo.png" style="max-width: 200px;" class="w-100" alt="<?php echo bloginfo('sitename') ?>" /></a>
  </div>
</div>

<?php include('include-breadcrumb.php') ?>
