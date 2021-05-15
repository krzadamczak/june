<?php get_header(); ?>

<body <?php body_class('page-wrapper'); ?>>
<?php
get_template_part('template-parts/site-header');
get_template_part('template-parts/latest-stylizations');
?>

<div class="page-wrapper__inner">
    <?php 
    get_template_part('template-parts/latest-articles');
    get_template_part('template-parts/stylizations-by-season');
    ?>
</div>
<?php get_footer(); ?>
</body>
</html>