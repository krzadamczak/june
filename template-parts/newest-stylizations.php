<div class="newestnewest-stylizations page-wrapper__newest-stylizations">
    <div class="newest-stylizations__title">Najnowsze stylizacje</div>
    
    <div class="newest-stylizations__gallery">
    <?php
    $the_query = new WP_Query(array("category_name" => "stylizacje", "posts_per_page" => 4));
        if($the_query -> have_posts()){
            while($the_query -> have_posts()){
                $the_query -> the_post();
                get_template_part('template-parts/newest-stylizations-post');
            }
        }
    ?>
    
    </div>
</div>
