<?php
/*
Template Name: Shop
*/
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="shop-page row">
      <div class="section-content col-xs-12">

        <?php the_content(); ?>

      </div>
    </section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
