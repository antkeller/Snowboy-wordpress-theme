<?php
	get_header();
	if (have_posts()) : while (have_posts()) : the_post();
		$thePostID = $post->ID;
		$slug = $post->post_name;
		$postType = $post->post_type;
		$images = get_field('snowboy_gallery');
?>

			<section class="gallery-detail row">
				<div class="section-content">
					<?php if ($images) : ?>
					<div class="gallery col-xs-12 col-sm-8 col-sm-offset-2">
						 <?php foreach( $images as $image ): ?>
							<div class="gallery-item">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<p class="gallery-caption"><?php echo $image['caption']; ?></p>
							</div>
						<?php endforeach; ?>
					</div><!-- .gallery -->

					<div class="gallery-nav col-xs-12">
						<?php foreach( $images as $image ): ?>
								<div class="item">
									<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?> thumbnail" />
								</div>
						<?php endforeach; ?>

					</div>

					<?php endif; ?>
				</div>
			</section>

<?php endwhile; endif; get_footer(); ?>
