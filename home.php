<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<?php include get_template_directory() . '/_/inc/modules/featured-slider.php'; ?>

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
  <div class="section-content col-xs-12">
    <div class="services-text col xs-12 col-md-10 col-md-offset-1">
      <h2 class="section-heading">Services</h2>

      <?php
        $servicesText = get_field('snowboy_services_text');
        echo $servicesText; ?>
    </div><!-- .services-text -->
    <div class="services-list col xs-12">

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

<section id="gallery" class="galleries-section row">
  <div class="section-content col-xs-12">
    <h2 class="section-heading">Event Galleries</h2>
    <ul class="row">



<?php
  $args = array(
    'post_type' => 'snowboy_galleries',
    'posts_per_page' => '3',
    'order' => 'ASC'
  );

  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
    $pageSlug = $post->post_name;

    switch ($pageSlug) {
      case 'urban':
        $postCat = "urban";
        $galleryUrl = "/galleries/urban/";
        break;
      case 'resort':
        $postCat = "resort";
        $galleryUrl = "/galleries/resort/";
        break;
      case 'skate':
        $postCat = "skate";
        $galleryUrl = "/galleries/skate/";
        break;
      }
?>

      <li class="col-xs-12 col-ms-4 col-sm-4">
        <a href="<?php echo $galleryUrl; ?>" class="gallery-link">
          <?php the_post_thumbnail('rect-medium'); ?>
          <h4><?php echo $postCat; ?></h4>
        </a>
      </li>

<?php
  endwhile; wp_reset_query();
?>
    </ul>
  </div><!-- .section-content -->
</section><!-- .home-galleries -->

<?php include get_template_directory() . '/_/inc/modules/social.php'; ?>

<section id="clients" class="clients-section row">
  <div class="section-content col-xs-12">
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
