<?php get_header('page') ?>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-10 mx-auto">
        <?php if( have_posts() ): while( have_posts() ): the_post(); include('variables.php'); ?>
            <!--  Title -->
            <h1><?php the_title() ?></h1>
            <!--  Date -->
            <div><?php echo get_the_date('Y年m月d日 H時i分s秒') ?></div>
            <!-- Categories -->
            <?php if($categories): ?>
            <ul>
                <?php foreach($categories as $category): ?>
                    <li><a href="<?php echo get_category_link($category) ?>"><?php echo $category->name ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <!-- Tags -->
            <?php if($tags): ?>
            <ul>
                <?php foreach($tags as $tag): ?>
                    <li><a href="<?php echo get_tag_link($tag) ?>"><?php echo $tag->name ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <!-- Thumbnail -->
            <?php if($thumbnail_image): ?><div><img src="<?php echo $thumbnail_image ?>" class="w-100" /></div><?php endif; ?>
            <!--  Content -->
            <?php include('socialicons.php') ?>
            <div class="page-content"><?php the_content() ?></div>
        <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_footer() ?>
