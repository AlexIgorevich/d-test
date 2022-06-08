<?php
$title       = get_field( 'block_title' ) ?? 'Title';
$description = get_field( 'block_description' ) ?? 'Description';
$slides      = get_field( 'portfolio_items' ) ?? false;
?>

<div class="block-wrapper portfolio-block">
    <div class="container">
        <h2><?php echo $title; ?></h2>
        <div class="portfolio-block__description">
			<?php echo $description; ?>
        </div>
		<?php if ( $slides ): ?>
            <div class="portfolio-block__slider-wrap">
                <div class="portfolio-block__slider">
                    <div class="swiper-wrapper">
						<?php foreach ( $slides as $slide ): ?>
                            <div class="portfolio-block__slide swiper-slide">
                                <div class="portfolio-block__slide-image">
									<?php echo get_the_post_thumbnail( $slide['item']->ID ); ?>
                                </div>
                                <div class="portfolio-block__slide-title">
									<?php echo $slide['item']->post_title; ?>
                                </div>
                            </div>
						<?php endforeach; ?>
                    </div>
                </div>
                <div class="portfolio-block__slider-controls">
                    <div class="portfolio-block__slider-button-prev portfolio-block__slider-button"></div>
                    <div class="portfolio-block__slider-pagination"></div>
                    <div class="portfolio-block__slider-button-next portfolio-block__slider-button"></div>
                </div>
            </div>
		<?php endif; ?>
    </div>
</div>


