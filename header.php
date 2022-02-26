<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo get_template_directory_uri() ?>/dist/css/main.css" rel="stylesheet">
<?php wp_head() ?>
</head>
<body id="<?php if(is_home()): ?>index<?php else: ?>page<?php endif; ?>">
