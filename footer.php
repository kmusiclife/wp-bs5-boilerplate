<footer class="bg-dark mt-5 pb-3">
<div class="container text-light py-md-5 py-4 px-3">
    <div class="row">
        <div class="col-12 font-size-90 order-1 order-md-0 text-center">
            <ul class="list-group list-group-flush">
                <?php 
                    $nav_menus = get_custom_menu('フッター');
                    foreach($nav_menus as $nav_menu):
                ?>
                    <li class="list-group-item bg-transparent"><a href="<?php echo $nav_menu->url ?>" class="text-light text-decoration-none"><?php echo $nav_menu->title ?></a></li>
                <?php endforeach; ?>
            </ul>
            <div class="page_item pt-4">
                <a href="https://www.instagram.com/#" target="_blank" rel="nofollow" class="text-decoration-none text-light">                    
                    <span class="icon icon-instagram"></span> Instagram
                </a> 
                <a href="https://www.facebook.com/#" target="_blank" rel="nofollow" class="text-decoration-none text-light">                    
                    <span class="icon icon-facebook"></span> Facebook
                </a> 
                <a href="https://twitter.com/#" target="_blank" rel="nofollow" class="text-decoration-none text-light">
                    <span class="icon icon-twitter"></span> Twitter
                </a>
            </div>
            <div class="mt-4 mb-0 text-center">
                © <?php echo date('Y') ?> <?php echo bloginfo('sitename') ?>
            </div>
        </div>
    </div>
</div>
</footer>
<script src="<?php echo get_template_directory_uri() ?>/dist/js/main.js" crossorigin="anonymous"></script>
<?php wp_footer() ?>
</body>
</html>
