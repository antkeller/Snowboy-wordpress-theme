<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<?php if(get_field('snowboy_featured_slider')): ?>

  <section class="featured-slider row">
    <div class="section-content col-xs-12">
      <div class="slider-wrapper">
        <div class="owl-carousel owl-theme-snowboy">
          <?php
            while(the_repeater_field('snowboy_featured_slider')):
              $sliderImage = get_sub_field('snowboy_featured_slider_image');
              $sliderUrl = get_sub_field('snowboy_featured_slider_url');
              $sliderAltText = get_sub_field('snowboy_featured_slider_alt_text');
              $sliderCaption = get_sub_field('snowboy_featured_slider_caption');
  				?>

          <div class="slide">
            <div class="content">
              <?php if($sliderUrl) : ?><a href="<?php echo $sliderUrl; ?>" class="slider-link"><?php else: ?><div class="slider-link"><?php endif; ?>
  						<img src="<?php bloginfo('template_directory'); ?>/_/img/featured-slider.gif" data-src="<?php echo $sliderImage['url']; ?>" alt="<?php echo $sliderAltText ?>" class="slider-img lazy" />
              <?php if($sliderUrl) : ?></a><?php else: ?></div><?php endif; ?>
              <?php echo $sliderCaption; ?>
            </div>
          </div>

          <?php
            endwhile;
          ?>
        </div>
      </div><!-- .slider-wrapper -->
    </div><!-- .section-content -->
    <div class="clearfix"></div>
  </section><!-- .featured-slider -->

<?php endif; ?>

<section id="about" class="about-section row">
  <div class="section-content col-xs-12 col-md-10 col-md-offset-1">
    <div class="about-text">
      <h2 class="section-heading">About</h2>

      <?php
        $aboutContent = get_field('snowboy_about_text');
        echo $aboutContent; ?>
    </div><!-- .about-text -->
  </div><!-- .section-content -->
</section><!-- .about-section -->
<section id="services" class="services-section row">
  <div class="section-content col-xs-12 col-md-10 col-md-offset-1">
    <div class="services-text">
      <h2 class="section-heading">Services</h2>

      <?php
        $servicesText = get_field('snowboy_services_text');
        echo $servicesText; ?>
    </div><!-- .services-text -->
    <div class="services-list col-xs-12">

      <?php if (have_rows('snowboy_services_list')) :
        while (have_rows('snowboy_services_list')) : the_row(); ?>

      <ul class="services-list-left col-xs-12 col-sm-4">
        <li><?php the_sub_field('snowboy_services_list_left'); ?></li>
      </ul>
      <ul class="services-list-left col-xs-12 col-sm-4">
        <li><?php the_sub_field('snowboy_services_list_center'); ?></li>
      </ul>
      <ul class="services-list-center col-xs-12 col-sm-4">
        <li><?php the_sub_field('snowboy_services_list_right'); ?></li>
      </ul>

      <?php endwhile; endif; ?>

    </div><!-- .services-list -->
  </div><!-- .section-content -->
</section><!-- .services-section -->
<section id="follow-us" class="follow-us row">
  <div class="section-content col-xs-12">
    <div class="follow-us-wrapper">
      <h2 class="section-heading">Follow Us</h2>
      <ul>
        <li><a href="https://instagram.com/snowboyproductions/" target="_blank"><span class="instagram"></span></a></li>
        <li><a href="https://www.facebook.com/SNOWBOYproductions" target="_blank"><span class="facebook"></span></a></li>
        <li><a href="https://twitter.com/snowboyus" target="_blank"><span class="twitter"></span></a></li>
      </ul>
      <?php dynamic_sidebar( 'primary' ); ?>
    </div><!-- .sidebar -->
  </div><!-- .section-content -->
</section><!-- .middle-content -->

<section id="galleries" class="galleries-section row">
  <div class="section-content col-xs-12">
  </div><!-- .section-content -->
</section><!-- .home-galleries -->

<section id="clients" class="clients-section row">
  <div class="section-content col-xs-12 col-md-10 col-md-offset-1">
    <h2 class="section-heading">Client List</h2>
    <?php if (have_rows('snowboy_clients')) : ?>

      <ul>

        <?php while (have_rows('snowboy_clients')) : the_row(); ?>

        <li><a href="<?php echo the_sub_field('snowboy_client_url'); ?>" target="_blank"><?php echo the_sub_field('snowboy_client_name'); ?></a></li>

        <?php endwhile; ?>

      </ul>

    <?php endif; ?>

    <div class="clearfix"></div>

  </div><!-- .section-content -->
</section><!-- .home-clients -->
<?php get_footer(); ?>
