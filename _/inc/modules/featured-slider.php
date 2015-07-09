<?php
if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) header('Location: /'); // do not allow stanalone viewing

  $sliders = Array();
  while(have_rows('snowboy_featured_slider')):
    the_row();
    $sliderImage = get_sub_field('snowboy_featured_slider_image');
    $sliderUrl = get_sub_field('snowboy_featured_slider_url');
    $sliderAltText = get_sub_field('snowboy_featured_slider_alt_text');
    $sliderQuote = get_sub_field('snowboy_featured_slider_quote');
    $sliderQuoteAuthor = get_sub_field('snowboy_featured_slider_quote_author');
    $sliderSubject = get_sub_field('snowboy_featured_slider_quote_subject');
    $sliderPhotoCred = get_sub_field('snowboy_featured_slider_photo_cred');
    array_push($sliders, Array('image' => $sliderImage, 'link' => $sliderUrl, 'quote' => $sliderQuote, 'author' => $sliderQuoteAuthor, 'subject' => $sliderSubject, 'photocred' => $sliderPhotoCred));
  endwhile;
?>

  <section class="featured-slider row">
    <div class="section-content col-xs-12">
      <div class="slide-list owl-carousel owl-theme-snowboy">

        <?php foreach ($sliders as $slider) : ?>
        <div class="slide-item">
          <div class="image owl-lazy" data-src="<?php echo $slider['image']['url']; ?>"></div>
          <div class="info">
            <p class="slider-quote"><span><?php echo $slider['quote']; ?> </span>- <?php echo $slider['author']; ?></p>
            <p class="slider-subject"><span><?php echo $slider['subject']; ?> -</span> <?php echo $slider['photocred']; ?> Photo</p>
          </div>
        </div><!--.slide-item -->

        <?php endforeach; ?>

      </div>
    </div><!-- .section-content -->
    <div class="clearfix"></div>
  </section><!-- .featured-slider -->
