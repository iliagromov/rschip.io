<?php
$productRsControlsACF = get_field('_product_rs_controls');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($productRsControlsACF)) :
?>
    <?php if ($productRsControlsACF["isShow"]) : ?>
        <section class="productRsControls">
            <div class="wrapper">
                <div class="productRsControlsRowFlex">
                    <div class="productRsControlsContainer">
                        <div class="productRsControlsTitle">
                            <h4 class="page__title-h4"> <span class="page_red">Control your driving </span>dynamic on
                                the go</h4>
                        </div>
                        <div class="productRsControlsImg">
                            <picture>
                                <source type="image/png" srcset="assets/images/png/products/imgProductRsControls-lg.png"
                                    media="(min-width: 992px)">
                                <source type="image/png" srcset="assets/images/png/products/imgProductRsControls-sm.png"
                                    media="(min-width: 768px)"><img
                                    src="assets/images/png/products/imgProductRsControls-xs.png"
                                    alt="imgProductRsControls">
                            </picture>
                        </div>
                        <div class="productRsControlsToggles">
                            <div class="productRsControlsToggelsItem">Sport plus</div>
                            <div class="productRsControlsToggelsItem prev">Sport</div>
                            <div class="productRsControlsToggelsItem active">Factory</div>
                            <div class="productRsControlsToggelsItem next">Eco</div>
                            <div class="productRsControlsToggelsItem">Eco plus</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
<?php endif; ?>