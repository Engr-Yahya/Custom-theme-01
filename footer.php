<footer class="site-footer">
  <nav class="site-nav">

    <?php
    $array = [
      'theme_location' => 'footer',
    ];
    ?>


    <?php wp_nav_menu($array); ?>

  </nav>
  <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> </p>
</footer>

</div> <!-- Container -->
<?php wp_footer(); ?>
</body>

</html>