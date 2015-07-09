<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Snowboy-Productions-WordPress-Theme-Template
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="row">
      <div class="section-content col-xs-12">

        <?php the_content(); ?>

      </div>
    </section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
