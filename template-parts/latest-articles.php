<?php
    $latest_articles_category_name = 'Artykuły';
    $articles_id = get_cat_ID($latest_articles_category_name);
    $articles_link = get_category_link($articles_id);
    $articles_query = new WP_query(array('category_name' => $latest_articles_category_name, 'posts_per_page' => 2));
?>
<div class="latest-articles">
    <div class="latest-articles__header">Ostatnie artykuły</div>
    <?php
    if($articles_query -> have_posts()){
        while($articles_query -> have_posts()){
            $articles_query -> the_post();
            get_template_part('template-parts/latest-articles-post');
        }
    }
    ?>
    <a href="<?php echo esc_url($articles_link) ?>" class="button button--small latest-articles__button">Przejdź do innych artykułów</a>
</div>
