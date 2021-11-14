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

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );?>

<main class="page pageShop">
        <section class="products productsCart">
            <div class="productsBg"><img src="assets/images/png/shared/imgShopBg.png" alt="imgShopBg"></div>
            <h2 class="page__title-h2 page__title-h2_big">shop <span
                    class="page__title-h2_small page__title-h2_absolute">Get Started</span></h2>
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
                    <div class="productsItem productsItemCart">
                        <div class="productsItemCartLabel">BEST SELLER</div>
                        <h3 class="productsItemCartTitle">RS</h3>
                        <p class="productsItemCartTextBefore">Engine tuning on your smartphone with free IOS/Android
                            apps</p><img class="productsItemCartImg" src="assets/images/png/products/productCart1.png"
                            alt="product">
                        <div class="productsItemCartGain">
                            <div class="productsItemGain">
                                <div class="productsItemGain__text">
                                    <div class="text">up to</div>
                                    <div class="number">10%</div>
                                    <div class="text">Power</div>
                                </div>
                                <div class="productsItemGain__text">
                                    <div class="text">up to</div>
                                    <div class="number">10%</div>
                                    <div class="text">Torque</div>
                                </div>
                            </div>
                            <ul>
                                <li>ICE end hybrid engiens </li>
                                <li>iOS, Android apps </li>
                                <li>18%* fuel saving </li>
                                <li>3 driving modes</li>
                            </ul>
                        </div>
                        <div class="productsItemCartActions">
                            <div class="productPrice">$229</div><button class="page__btn page__btn_notTransparent">ADD
                                TO BAG</button>
                        </div>
                    </div>
                    <div class="productsItem productsItemCart">
                        <h3 class="productsItemCartTitle">Gtr</h3>
                        <p class="productsItemCartTextBefore">Tune your engine and dispaly car readings on 3.5 inch
                            touch screen</p><img class="productsItemCartImg"
                            src="assets/images/png/products/productCart2.png" alt="product">
                        <div class="productsItemCartGain">
                            <div class="productsItemGain">
                                <div class="productsItemGain__text">
                                    <div class="text">up to</div>
                                    <div class="number">10%</div>
                                    <div class="text">Power</div>
                                </div>
                                <div class="productsItemGain__text">
                                    <div class="text">up to</div>
                                    <div class="number">10%</div>
                                    <div class="text">Torque</div>
                                </div>
                            </div>
                            <ul>
                                <li>ICE end hybrid engiens </li>
                                <li>PC programmer </li>
                                <li>18%* fuel saving </li>
                                <li>6 driving modes </li>
                            </ul>
                        </div>
                        <div class="productsItemCartActions">
                            <div class="productPrice">$369</div><button class="page__btn page__btn_notTransparent">ADD
                                TO BAG</button>
                        </div>
                    </div>
                    <div class="productsItem productsItemCart productsItemCart__Big">
                        <div class="productsItemCart__text">
                            <h3 class="productsItemCartTitle">RS RESPONSE gas pedal tuning</h3>
                            <p class="productsItemCartTextBefore"> <span>+10%</span>Better acceleration</p>
                        </div>
                        <div class="productsItemCart__img"><img class="productsItemCartImg"
                                src="assets/images/png/products/productCart3.png" alt="product"></div>
                        <div class="productsCartAdvatages">
                            <div class="productsCartAdvatagesItem">
                                <div class="productsCartAdvatagesItem__icon">
                                    <div class="svg-iconSpeedometerGray svg-iconSpeedometerGray-box"> </div>
                                </div>
                                <div class="productsCartAdvatagesItem__text">
                                    <h5 class="productsCartAdvatagesItem__title">Compatiable with all modern cars</h5>
                                    <p>Electronic throttle controller works with ICE. BEV and hybridengines</p>
                                </div>
                            </div>
                            <div class="productsCartAdvatagesItem">
                                <div class="productsCartAdvatagesItem__icon">
                                    <div class="svg-iconFuelGray svg-iconFuelGray-box"> </div>
                                </div>
                                <div class="productsCartAdvatagesItem__text">
                                    <h5 class="productsCartAdvatagesItem__title">Better throttle response</h5>
                                    <p>Save 10-18%* More fuel on Eco mode</p>
                                </div>
                            </div>
                            <div class="productsCartAdvatagesItem">
                                <div class="productsCartAdvatagesItem__icon">
                                    <div class="svg-iconFuelGray svg-iconFuelGray-box"> </div>
                                </div>
                                <div class="productsCartAdvatagesItem__text">
                                    <h5 class="productsCartAdvatagesItem__title">5 driving stages</h5>
                                    <p>Free Companion app with an access to our tuning database</p>
                                </div>
                            </div>
                            <div class="productsCartAdvatagesItem">
                                <div class="productsCartAdvatagesItem__icon">
                                    <div class="svg-iconCPU svg-iconCPU-box"> </div>
                                </div>
                                <div class="productsCartAdvatagesItem__text">
                                    <h5 class="productsCartAdvatagesItem__title">Back CPU for the safest ride</h5>
                                    <p>Change your vehicle and tune right from the phone anytime</p>
                                </div>
                            </div>
                        </div>
                        <div class="productsItemCartActions">
                            <div class="productPrice">$369</div><button class="page__btn page__btn_notTransparent">ADD
                                TO BAG</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="wrapper">
            <div class="pageShop__textAfter">* Real world gains may be less or more depending on a large number of
                contributing factors such as displacement, aspiration and selected tuning mode</div>
        </div>
        <section class="addToCart">
            <div class="wrapper">
                <div class="addToCartContainer">
                    <div>Free shipping</div>
                    <div>30 days money back</div>
                    <div class="addToCartPrice">$369</div><button class="page__btn page__btn_notTransparent">TO
                        CART</button>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer('shop');
?>
