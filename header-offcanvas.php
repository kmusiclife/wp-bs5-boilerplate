<?php get_header() ?>

<div class="end-0" style="position: fixed; z-index: 1021;">
    <button class="hamburger hamburger--collapse" type="button"
            data-bs-toggle="offcanvas"
            aria-controls="offcanvasMenu"
            aria-expanded="false"
            aria-label="Toggle navigation" 
            href="#offcanvasMenu"
    >
    <span class="hamburger-box" style="top:0;right:0;">
        <span id="hamburgerInner" class="hamburger-inner"></span>
    </span>
    </button>
</div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel" style="max-width: 400px; background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.6)), url(<?php echo get_template_directory_uri() ?>/dist/images/common/menu-bg.jpeg); background-size: cover; background-position: center center;">
  <div class="offcanvas-header mt-5 mx-auto">
    <h5 class="offcanvas-title">
        <img src="<?php echo get_template_directory_uri() ?>/dist/images/common/logo.png" style="max-width: 150px;" alt="<?php echo bloginfo('sitename') ?>" />
    </h5>
    <button type="button" class="position-absolute btn-close btn-close-white text-reset" style="top: 20px; right: 20px;" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>  
  <div class="offcanvas-body px-5">
    <div class="col-12 mx-auto">
        <ul class="list-group list-group-flush">
            <?php
                $nav_menus = get_custom_menu('サイドメニュー');
                foreach($nav_menus as $nav_menu):
            ?>
                <li class="list-group-item bg-transparent text-center"><a href="<?php echo $nav_menu->url ?>" class="text-light text-decoration-none"><?php echo $nav_menu->title ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
  </div>
</div>