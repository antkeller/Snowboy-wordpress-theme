<?php if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) header('Location: /'); // do not allow stanalone viewing ?>

<section id="follow-us" class="follow-us row">
  <div class="section-content">
    <div class="follow-us-wrapper">
      <h2 class="section-heading">Follow Us</h2>
      <ul>
        <li><a href="https://instagram.com/snowboyproductions/" target="_blank"><span class="instagram"></span></a></li>
        <li><a href="https://www.facebook.com/SNOWBOYproductions" target="_blank"><span class="facebook"></span></a></li>
        <li><a href="https://twitter.com/snowboyus" target="_blank"><span class="twitter"></span></a></li>
      </ul>
      <div class="row"><?php dynamic_sidebar( 'primary' ); ?></div>
      <!-- <?php echo do_shortcode('[instagram-feed]'); ?> -->
    </div><!-- .sidebar -->
  </div><!-- .section-content -->
</section><!-- .middle-content -->
