<?php 
    $tag_name = '';
    if(has_tag('wiosna')){
        $tag_name = 'Wiosna';
    } 
    elseif(has_tag('lato')){
        $tag_name = 'Lato';
    }
    elseif(has_tag('jesień')){
        $tag_name = 'Jesień';
    }
    elseif(has_tag('zima')){
        $tag_name = 'Zima';
    }
?>

<div class="seasons-gallery__post">
    <img class="seasons-gallery__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" srcset="">
    <!-- <div class="post-stylizations__tag"><?php echo $tag_name ?></div> -->
</div>