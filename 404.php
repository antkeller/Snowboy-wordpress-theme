<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage MervinMfg-WordPress-Theme-Template
 * @since Mervin Mfg WordPress Theme Template 1.0.0
 */

get_header(); ?>

<section class="error-404">
	<div class="section-content">
		<h2 class="big">404</h2>
		<p>Page not found. You must be lost.</p>
	</div>
</section>

	<?php include get_template_directory() . '/_/inc/modules/social.php'; ?>

<?php get_footer(); ?>
