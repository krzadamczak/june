<?php
    $latest_stylizations_category = "Stylizacje";
    $stylizations_id = get_cat_ID($latest_stylizations_category);
    $stylizations_link = get_category_link($stylizations_id);
    $posts_query = new WP_Query(array("category_name" => $latest_stylizations_category, "posts_per_page" => 4));
?>

<div class="latest-stylizations page-wrapper__latest-stylizations">
    <div class="latest-stylizations__header">Najnowsze stylizacje</div>
    
    <div class="hero-gallery">
    <?php
    
        if($posts_query -> have_posts()){
            while($posts_query -> have_posts()){
                $posts_query -> the_post();
                get_template_part('template-parts/latest-stylizations-hero-gallery-post');
            }
        }
    ?>
    
    </div>
    <a href="<?php echo esc_url($stylizations_link) ?>" class="button latest-stylizations__button">Zobacz inne stylizacje</a>
</div>
