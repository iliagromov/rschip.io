<?php
$performanceACF = get_field('_performance');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($performanceACF)) :
?>
    <?php if ($performanceACF["isShow"]) : ?>
        <section class="performance" data-productname="Gtr">
            <div class="wrapper">
                <h2 class="page__title-h2_small">Сomparison</h2>
                <h3 class="page__title-h3">Performance figures</h3>
                <div class="performanceTable">
                    <div class="performanceTable__Header">
                        <div class="performanceTableItemTd">State</div>
                        <div class="performanceTableItemTd">Power</div>
                        <div class="performanceTableItemTd">Torque</div>
                        <div class="performanceTableItemTd">0-60 mph</div>
                    </div>
                    <div class="performanceTable__Body">
                        <div class="performanceTableItem default">
                            <div class="performanceTableItemTd">
                                <div class="stock">Stock</div>
                                <div class="carName">Porsche 911 Carrera</div>
                            </div>
                            <div class="performanceTableItemTd">
                                <div><span class="hp">385 </span>HP</div>
                            </div>
                            <div class="performanceTableItemTd">
                                <div> <span class="nm">450 </span>NM</div>
                            </div>
                            <div class="performanceTableItemTd">
                                <div> <span class="sec">4.2 </span>sec</div>
                            </div>
                        </div>
                        <div class="performanceTableItem withRs">
                            <div class="performanceTableItemTd">
                                <div class="stock">With RS</div>
                                <div class="carName">Porsche 911 Carrera</div>
                            </div>
                            <div class="performanceTableItemTd">
                                <div> <span class="hp">410* </span>HP</div>
                            </div>
                            <div class="performanceTableItemTd">
                                <div> <span class="nm">475* </span>NM</div>
                            </div>
                            <div class="performanceTableItemTd">
                                <div> <span class="sec">-0.39* </span>sec</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="performanceImg"><img src="assets/images/png/shared/imgPerformance.png" alt="imgPerformance">
                </div>
            </div>
            <div class="selectBox" data-productname="Gtr">
                <div class="selectBoxText">Find out how many Horsepowers you can add to your Car</div>
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
                    <div class="selectBoxAction">
                        <div class="selectBoxSearch">
                            <div class="svg-iconSearch svg-iconSearch-box"></div>
                        </div>
                        <div class="selectBoxActionSelected">
                            <div class="selectBoxActionPrice">$369</div><a class="page__btn page__btn_notTransparent"
                                href="cart/cart.html">To cart</a>
                        </div>
                    </div>
                </div><a class="selectBoxLink js-open-modal" href="javascript:void(0)"
                    data-modal="modalCarCantfind">Can’t find my Car</a>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>