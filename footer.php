<?php
$date = date('Y');
?>
<footer class="footer">
    <div class="footer__copyright">
        <div class="footer__symbol">©</div>
        <div class="footer__date"><?php echo ' '.date('Y').' '; ?></div>
        <div class="footer__author"><?php echo bloginfo('name'); ?></div>    
    </div>
    <?php
        wp_nav_menu(array(
            'container' => 'nav',
            'container_class' => 'nav header__nav',
            'theme_location' => 'footer-menu'
        )); 
    ?>
</footer>