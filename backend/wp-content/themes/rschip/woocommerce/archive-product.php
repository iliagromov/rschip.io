<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');
?>
<!--shop-->
<main class="page pageShop">
    <section class="products productsCart">
        <div class="productsBg"><img src="assets/images/png/shared/imgShopBg.png" alt="imgShopBg"></div>
        <h2 class="page__title-h2 page__title-h2_big">shop <span class="page__title-h2_small page__title-h2_absolute">Get Started</span></h2>
        
        <div class="productsTabs">
            <div class="productsTabsItem">
                <div class="productsTabsItem__icon">
                    <div class="svg-iconRS svg-iconRS-box"></div>
                </div>
                <div class="productsTabsItem__text">RS</div>
            </div>
            <div class="productsTabsItem">
                <div class="productsTabsItem__icon">
                    <div class="svg-iconGTRWhite svg-iconGTRWhite-box"></div>
                </div>
                <div class="productsTabsItem__text">GTR</div>
            </div>
            <div class="productsTabsItem">
                <div class="productsTabsItem__icon">
                    <div class="svg-iconRSResponse svg-iconRSResponse-box"></div>
                </div>
                <div class="productsTabsItem__text">RS response</div>
            </div>
        </div>

        <div class="wrapper">
            <div class="productsFlexContainer">
                <?php if (woocommerce_product_loop()) {
                    
                    if (wc_get_loop_prop('total')) {
                        while (have_posts()) {
                            the_post();
                            /**
                             * Hook: woocommerce_shop_loop.
                             */
                            do_action('woocommerce_shop_loop');
                            wc_get_template_part('content', 'product');
                        }
                    }
                } else {
                    /**
                     * Hook: woocommerce_no_products_found.
                     *
                     * @hooked wc_no_products_found - 10
                     */
                    do_action('woocommerce_no_products_found');
                } ?>


            </div>
        </div>
    </section>

    <div class="wrapper">
        <div class="pageShop__textAfter">* Real world gains may be less or more depending on a large number of
            contributing factors such as displacement, aspiration and selected tuning mode</div>
    </div>

    <section class="addToCart <?php echo WC()->cart->get_cart_contents_count() == 0 ? 'hidden' : ''; ?>">
        <div class="wrapper">
            <div class="addToCartContainer">
                <div>Free shipping</div>
                <div>30 days money back</div>
                <div class="addToCartPrice" data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>"><?php wc_cart_totals_order_total_html(); ?></div>
                <a class="page__btn page__btn_notTransparent" href="/cart/">TO CART</a>
            </div>
        </div>
    </section>

</main>
<!--/shop-->

<?php
get_footer('shop');
?>