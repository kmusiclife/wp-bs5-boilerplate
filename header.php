<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo get_template_directory_uri() ?>/dist/css/main.css" rel="stylesheet">
<title></title>
<?php wp_head() ?>
</head>
<body id="<?php if(is_home()): ?>index<?php else: ?>page<?php endif; ?>">
<nav id="navbar" class="fixed-top nav-main navbar navbar-light" style="transition: background-color 1s linear;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <?php echo bloginfo('sitename') ?>
        </a>
        <button class="hamburger hamburger--collapse" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#nav-main"
                aria-controls="nav-main"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
        <span class="hamburger-box" >
            <span id="hamburgerInner" class="hamburger-inner"></span>
        </span>
        </button>
        <div class="collapse navbar-collapse" id="nav-main">
            <?php wp_nav_menu(); ?>
        </div>
    </div>
</nav>
