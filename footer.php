<footer class="footer">
    <div class="footer__copyright">© <?php echo bloginfo('name').' '.date('Y'); ?></div>
    <?php
        wp_nav_menu(array(
            'container' => 'nav',
            'container_class' => 'nav header__nav',
            'theme_location' => 'footer-menu'
        )); 
    ?>
</footer>