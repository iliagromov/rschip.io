<?php
$thisProducts = get_field_object('products_preview')["value"];
if (!empty($thisProducts)) : ?>
    <section class="products">
        <h2 class="page__title-h2 page__title-h2_big">shop
            <span class="page__title-h2_small page__title-h2_absolute">Product</span>
        </h2>
        <div class="wrapper">
            <div class="productsFlexContainer">

                <?php foreach ($thisProducts as $thisProduct) {
                    $post = get_post($thisProduct->ID);
                    setup_postdata($post);

                    $product = wc_get_product($thisProduct->ID);

                    wc_get_template_part('content', 'product-preview');

                    
                } ?>
            </div>
        </div>
    </section>
<?php endif;wp_reset_postdata(); ?>