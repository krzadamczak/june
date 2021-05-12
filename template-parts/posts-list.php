<?php
    $posts_id = get_cat_ID('posty');
    $posts_link = get_category_link($posts_id);
    $posts_query = new WP_query(array('category_name' => 'posty', 'posts_per_page' => 2));
?>
<div class="posts-list">
    <div class="posts-list__title">Ostatnie artykuły</div>
    <?php
    if($posts_query -> have_posts()){
        while($posts_query -> have_posts()){
            $posts_query -> the_post();
            get_template_part('template-parts/posts-list-post');
        }
    }
    ?>
    <a href="<?php echo esc_url($posts_link) ?>" class="button button--small posts-list__button">Przejdź do innych artykułów</a>
</div>
