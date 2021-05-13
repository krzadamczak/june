<?php get_header(); ?>

<body <?php body_class('page-wrapper'); ?>>
<?php
get_template_part('template-parts/site-header');
get_template_part('template-parts/newest-stylizations');
?>

<div class="page-wrapper__inner">
    <?php 
    get_template_part('template-parts/posts-list');
    get_template_part('template-parts/stylizations-by-season');
    ?>
</div>

</body>
</html>