</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">

        <?php wp_nav_menu([
            'theme_location' => 'footer', 
            'container' => false,
            'menu_class' => 'footer__navbar-nav',
            ]) 
        ?>

</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>