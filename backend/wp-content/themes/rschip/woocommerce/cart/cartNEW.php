<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;
do_action( 'woocommerce_before_cart' );

?>

<div class="cartTable">
            <div class="cartProducts">
                <div class="cartProductsHeader">
                    <div>Product</div>
                    <div>Quantity</div>
                    <div>Total Price</div>
                </div>
                <div class="cartProduct">
                    <div class="cartProductThumbnails"><img src="assets/images/png/products/cartProductThumbnails1.png" alt="cartProductThumbnails">
                    </div>
                    <div class="cartProductName">
                        <div class="productName">RS Chip </div>
                        <div class="carName"></div>
                    </div>
                    <div class="cartProductQuantity">
                        <div class="quantityBox"><button class="bt_minus"><span></span></button><input class="quantity" type="number" min="0" max="10" step="1" value="1" title="Кол-во"><button class="bt_plus">+</button></div>
                    </div>
                    <div class="cartProductPrice">
                        <div>199 $</div>
                    </div>
                    <div class="cartProductRemove">
                        <div class="svg-iconTrash svg-iconTrash-box"></div>
                    </div>
                    <div class="cartProductSelect">
                        <div class="selectBox selectBoxCart" data-productname="Rs">
                            <div class="selectBoxContainer">
                                <div class="select Brands">
                                    <div class="select-box"></div>
                                </div>
                                <div class="select Models">
                                    <div class="select-box"> </div>
                                </div>
                                <div class="select Modification">
                                    <div class="select-box"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cartProduct">
                    <div class="cartProductThumbnails"><img src="assets/images/png/products/cartProductThumbnails2.png" alt="cartProductThumbnails">
                    </div>
                    <div class="cartProductName">
                        <div class="productName">GTR Chip </div>
                        <div class="carName"> </div>
                    </div>
                    <div class="cartProductQuantity">
                        <div class="quantityBox"><button class="bt_minus"><span></span></button><input class="quantity" type="number" min="0" max="10" step="1" value="1" title="Кол-во"><button class="bt_plus">+</button></div>
                    </div>
                    <div class="cartProductPrice">
                        <div>199 $</div>
                    </div>
                    <div class="cartProductRemove">
                        <div class="svg-iconTrash svg-iconTrash-box"></div>
                    </div>
                    <div class="cartProductSelect">
                        <div class="selectBox selectBoxCart" data-productname="Gtr">
                            <div class="selectBoxContainer">
                                <div class="select Brands">
                                    <div class="select-box"></div>
                                </div>
                                <div class="select Models">
                                    <div class="select-box"> </div>
                                </div>
                                <div class="select Modification">
                                    <div class="select-box"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cartProduct">
                    <div class="cartProductThumbnails"><img src="assets/images/png/products/cartProductThumbnails2.png" alt="cartProductThumbnails">
                    </div>
                    <div class="cartProductName">
                        <div class="productName">Chip </div>
                        <div class="carName"> </div>
                    </div>
                    <div class="cartProductQuantity">
                        <div class="quantityBox"><button class="bt_minus"><span></span></button><input class="quantity" type="number" min="0" max="10" step="1" value="1" title="Кол-во"><button class="bt_plus">+</button></div>
                    </div>
                    <div class="cartProductPrice">
                        <div>199 $</div>
                    </div>
                    <div class="cartProductRemove">
                        <div class="svg-iconTrash svg-iconTrash-box"></div>
                    </div>
                    <div class="cartProductSelect">
                        <div class="selectBox selectBoxCart" data-productname="Chip">
                            <div class="selectBoxContainer">
                                <div class="select Brands">
                                    <div class="select-box"></div>
                                </div>
                                <div class="select Models">
                                    <div class="select-box"> </div>
                                </div>
                                <div class="select Modification">
                                    <div class="select-box"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cartProductsFooter"> <button class="page__btn">CONTINUE SHOPPING</button>
                    <div class="cartProductsCode"><input type="text" placeholder="EVQQ-LIJ1-DASJ-12KF">
                        <p>Apply</p>
                    </div>
                </div>
            </div>
            <div class="cartDetails">
                <div class="cartDetailsTitle">Price Details</div>
                <div class="cartDetailsBagTotal">
                    <div class="name">Bag Total</div>
                    <div class="price">597 $ </div>
                </div>
                <div class="cartDetailsDiscount">
                    <div class="name">Coupon Discount</div>
                    <div class="price">0 $ </div>
                </div>
                <div class="cartDetailsTotal">
                    <div class="name">Total: </div>
                    <div class="price">597 $</div>
                </div>
                <div class="cartDetailsSafty">
                    <p>We accept</p><img src="assets/images/png/shared/imgPaymentsSafty.png" alt="imgPaymentsSafty">
                </div><a class="page__btn page__btn_notTransparent" href="order/order.html">PROCEED TO PAYMENT</a>
            </div>
        </div>

<?php do_action( 'woocommerce_after_cart' ); ?>
