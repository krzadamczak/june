<div class="post posts-list__post">
    <div class="post__title"><?php the_title(); ?></div>
    <div class="post__excerpt"><?php the_excerpt(); ?></div>
    <a class="post__read-more" href="<?php echo esc_url(get_permalink()); ?>">Czytaj dalej</a>
</div>