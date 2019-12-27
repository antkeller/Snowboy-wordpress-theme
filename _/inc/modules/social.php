<?php if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) header('Location: /'); // do not allow stanalone viewing ?>

<section id="follow-us" class="follow-us row">
  <div class="section-content">
    <div class="follow-us-wrapper">
      <h2 class="section-heading">Follow Us</h2>
      <ul>
        <li title="Instagram" class="instagram"><a href="https://instagram.com/snowboyproductions/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/_/img/instagram-icon.png" alt="Instagram"/></a></li>
        <li title="Youtube" class="youtube"><a href="https://www.youtube.com/channel/UCgrQwk2Etivec7c4mZ17hcg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/_/img/youtube-icon.png" alt="Youtube"/></a></li>
      </ul>
      <div class="row"><?php dynamic_sidebar( 'primary' ); ?></div>
      <!-- <?php echo do_shortcode('[instagram-feed]'); ?> -->
    </div><!-- .sidebar -->
  </div><!-- .section-content -->
</section><!-- .middle-content -->
