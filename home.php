<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="featured-slider row">
  <div class="section-content col-xs-12">
    <div class="slider-wrapper">
      <div class="owl-carousel">
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/_/img/placeholders/snowboy-slider-placeholder.png" alt="Featured slider image" />
        </a>
      </div>
    </div><!-- .slider-wrapper -->
  </div><!-- .section-content -->
</section><!-- .featured-slider -->

<section id="about" class="about-section row">
  <div class="section-content col-xs-12">
    <div class="about-text">
      <h2 class="section-heading">About</h2>

      <?php
        $aboutContent = get_field('about_text');
        echo $aboutContent; ?>
    </div><!-- .about-text -->
  </div><!-- .section-content -->
</section><!-- .about-section -->
<section id="services" class="services-section row">
  <div class="section-content col-xs-12">
    <div class="services-text">
      <h2 class="section-heading">Services</h2>

      <?php
        $servicesText = get_field('services_text');
        echo $servicesText; ?>
    </div><!-- .services-text -->
    <div class="services-list col-xs-12">

      <?php if (have_rows('services_list')) :
        while (have_rows('services_list')) : the_row(); ?>

      <ul class="services-list-left col-xs-12 col-sm-4">
        <li><?php the_sub_field('services_list_left'); ?></li>
      </ul>
      <ul class="services-list-left col-xs-12 col-sm-4">
        <li><?php the_sub_field('services_list_center'); ?></li>
      </ul>
      <ul class="services-list-center col-xs-12 col-sm-4">
        <li><?php the_sub_field('services_list_right'); ?></li>
      </ul>

      <?php endwhile; endif; ?>

    </div><!-- .services-list -->
  </div><!-- .section-content -->
</section><!-- .services-section -->
<section id="instagram" class="instagram-section row">
  <div class="section-content col-xs-12">
    <div class="instagram">
      <p>Instgram photos</p>
    </div><!-- .sidebar -->
  </div><!-- .section-content -->
</section><!-- .middle-content -->

<section id="galleries" class="galleries-section row">
  <div class="section-content col-xs-12">
  </div><!-- .section-content -->
</section><!-- .home-galleries -->

<section id="clients" class="clients-section row">
  <div class="section-content col-xs-12">
    <h2 class="section-heading">Client List</h2>
    <?php if (have_rows('clients')) : ?>

      <ul>

        <?php while (have_rows('clients')) : the_row(); ?>

        <li><a href="<?php echo the_sub_field('client_url'); ?>" target="_blank"><?php echo the_sub_field('client_name'); ?></a></li>

        <?php endwhile; ?>

      </ul>

    <?php endif; ?>

    <div class="clearfix"></div>

  </div><!-- .section-content -->
</section><!-- .home-clients -->
<?php get_footer(); ?>
