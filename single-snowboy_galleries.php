<?php
	get_header();
	if (have_posts()) : while (have_posts()) : the_post();
		$thePostID = $post->ID;
		$slug = $post->post_name;
		$postType = $post->post_type;
		$images = get_field('snowboy_gallery');
?>

			<section class="gallery-detail">
				<div class="section-content">
					<div class="gallery">
						<?php if ($images) : ?>
							<div id="sync1" class="owl-carousel">

								 <?php foreach( $images as $image ): ?>
										<div class="item">
											<img src="<?php echo $image[url]; ?>" alt="<?php echo $image['alt']; ?>" />
										</div>

							<?php
									endforeach;
							?>

						</div>

						<div id="sync2" class="owl-carousel">

							<?php foreach( $images as $image ): ?>
									<div class="item">
										<img src="<?php echo $image[url]; ?>" alt="<?php echo $image['alt']; ?>" />
									</div>

						<?php
								endforeach;
						?>

					</div>

					<?php endif; ?>
					</div>
				</div>
			</section>

<?php endwhile; endif; get_footer(); ?>
