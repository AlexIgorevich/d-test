<?php
$title    = get_field( 'block_title' ) ?? 'Title';
$products = get_field( 'product_list' ) ?? false;
?>

<div class="block-wrapper products-block">
    <div class="container">
        <h2><?php echo $title; ?></h2>
		<?php if ( $products ): ?>
            <div class="products-block__items">
                <div class="products-block__left">
                    <ul>
						<?php foreach ( $products as $key => $d_product ): ?>
                            <li class="products-block__trigger<?php echo ( $key === 0 ) ? ' active' : ''; ?>"
                                data-id="<?php echo $d_product['product']->ID; ?>">
								<?php echo $d_product['product']->post_title; ?>
                            </li>
						<?php endforeach; ?>
                    </ul>
                </div>
                <div class="products-block__right">
					<?php foreach ( $products as $key => $d_product ): ?>
                        <div class="products-block__right-item<?php echo ( $key === 0 ) ? ' active' : ''; ?>"
                             data-id="<?php echo $d_product['product']->ID; ?>">
                            <div class="products-block__right-title accordion-trigger">
                                <span><?php echo $d_product['product']->post_title; ?></span>
                            </div>
                            <div class="products-block__right-content">
								<?php echo $d_product['product']->post_content; ?>
                            </div>
                        </div>
					<?php endforeach; ?>
                </div>
            </div>
		<?php endif; ?>
    </div>
</div>

