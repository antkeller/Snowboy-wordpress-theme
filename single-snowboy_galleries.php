<?php
	get_header();
	if (have_posts()) : while (have_posts()) : the_post();
		$thePostID = $post->ID;
		$slug = $post->post_name;
		$postType = $post->post_type;
		$images = get_field('snowboy_gallery');
?>

			<section class="gallery-detail row">
				<div class="section-content col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
					<div class="gallery">
						<?php if ($images) : ?>
							<div id="sync1" class="owl-carousel">
								<?php $i = 0; ?>
								 <?php foreach( $images as $image ): ?>
										<div class="item" data-hash="#<?php echo $i; ?>">
											<img src="<?php echo $image[url]; ?>" alt="<?php echo $image['alt']; ?>" />
										</div>

							<?php $i++;
									endforeach;
							?>

						</div>

						<div id="sync2" class="owl-carousel">
							<?php $i = 0; ?>
							<?php foreach( $images as $image ): ?>
									<div class="item">
										<a href="#<?php echo $i; ?>"><img src="<?php echo $image[url]; ?>" alt="<?php echo $image['alt']; ?>" /></a>
									</div>

						<?php $i++;
								endforeach;
						?>

					</div>

					<?php endif; ?>
					</div>
				</div>
			</section>

<?php endwhile; endif; get_footer(); ?>
