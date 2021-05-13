<?php
    $spring_posts = new WP_query(array('tag' => 'wiosna', 'posts_per_page' => 1));
    $summer_posts = new WP_query(array('tag' => 'lato', 'posts_per_page' => 1));
    $autumn_posts = new WP_query(array('tag' => 'jesień', 'posts_per_page' => 1));
    $winter_posts = new WP_query(array('tag' => 'zima', 'posts_per_page' => 1));
?>
<div class="stylizations-by-seasons">
    <div class="stylizations-by-seasons__title">Stylizacje według pory roku</div>

    <div class="seasons-gallery">
    <?php
        if($spring_posts->have_posts()){
            while($spring_posts->have_posts()){
                $spring_posts->the_post();
                get_template_part('template-parts/stylizations-by-seasons-post');
            }
        }
        if($summer_posts->have_posts()){
            while($summer_posts->have_posts()){
                $summer_posts->the_post();
                get_template_part('template-parts/stylizations-by-seasons-post');
            }
        }
        if($autumn_posts->have_posts()){
            while($autumn_posts->have_posts()){
                $autumn_posts->the_post();
                get_template_part('template-parts/stylizations-by-seasons-post');
            }
        }
        if($winter_posts->have_posts()){
            while($winter_posts->have_posts()){
                $winter_posts->the_post();
                get_template_part('template-parts/stylizations-by-seasons-post');
            }
        }
    ?>
    </div>
</div>