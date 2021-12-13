<?php
$bannerACF = get_field('_banner');
echo '<pre>';
// var_dump($bannerACF);
echo '</pre>';
if (!empty($bannerACF)) :

?>
    <?php if ($bannerACF["isShow"]) : ?>
        
        <section class="banner <?php echo $bannerACF['bannerClass']; ?>">
            <div class="wrapper">
                <div class="bannerFlexContainer">
                    <div class="bannerText">
                        <?php if ($bannerACF["titleBig"]) : ?>
                            <h1 class="page__title-h1_big">
                                <?php echo $bannerACF['titleBig']; ?>
                            </h1>
                        <?php endif; ?>
                        
                        <h1 class="page__title-h1">
                            <?php if ($bannerACF["span1"]) : ?>
                                <span class="page_red">
                                    <?php echo $bannerACF['span1']; ?>
                                </span> 
                            <?php endif; ?>

                            <?php if ($bannerACF["span2"]) { 
                                echo $bannerACF['span2']; 
                            } ?>

                            <?php if ($bannerACF["span3"]) : ?>
                                <span class="block">
                                    <?php echo $bannerACF['span3']; ?>
                                </span>
                            <?php endif; ?>
                        </h1>
                       
                        <?php if ($bannerACF["description"]) : ?>
                            <p class="pageText">
                                <?php echo $bannerACF['description']; ?>
                            </p>
                        <?php endif; ?>

                        <?php include(TEMPLATEPATH . '/components/social/socialIcons.component.php'); ?>

                    </div>

                    <?php if($bannerACF['isAdvantages']) : ?>
                        <div class="advantages">
                            <div class="advantagesFlexContainer">

                                <?php foreach($bannerACF['adv'] as $advantage) : ?>
                                    <?php if(!empty($advantage['icon'])):?>
                                        <div class="advantagesItem">
                                            <div class="advantagesItem__icon">
                                                <img src="<?php echo $advantage['icon']; ?>" alt="">
                                            </div>
                                            <div class="advantagesItem__text"><?php echo $advantage['text']; ?></div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach;?>
                               
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($bannerACF['imagesBg']) :?>
                        <div class="bannerImgBg">
                            <picture>
                                <?php if(!empty($bannerACF['imagesBg']['img5'])):?> 
                                    <source type="image/png" srcset="<?php echo $bannerACF['imagesBg']['img5']; ?>" media="(min-width: 1441px)">
                                <?php endif; ?>
                                <?php if(!empty($bannerACF['imagesBg']['img4'])):?> 
                                    <source type="image/png" srcset="<?php echo $bannerACF['imagesBg']['img4']; ?>" media="(min-width: 1440px)">
                                <?php endif; ?>
                                <?php if(!empty($bannerACF['imagesBg']['img3'])):?>
                                    <source type="image/png" srcset="<?php echo $bannerACF['imagesBg']['img3']; ?>" media="(min-width: 992px)">
                                <?php endif; ?>
                                <?php if(!empty($bannerACF['imagesBg']['img2'])):?>
                                    <source type="image/png" srcset="<?php echo $bannerACF['imagesBg']['img2']; ?>" media="(min-width: 768px)">
                                <?php endif; ?>
                                <img src="<?php echo $bannerACF['imagesBg']['img1']; ?>" alt="imgBannerBg">
                            </picture>
                        </div>
                    <?php endif; ?>

                    <?php if($bannerACF['isImageChip']) :?>
                        <div class="bannerImgChip">
                            <picture>
                                <?php if(!empty($bannerACF['imagesChip']['md@1'])):?>
                                    <source type="image/png" 
                                            srcset="
                                            <?php echo $bannerACF['imagesChip']['md@1'] . ' 1x, ' . $bannerACF['imagesChip']['md@2'] . ' 2x' ?>" 
                                            media="(min-width: 992px)">
                                <?php endif; ?>

                                <?php if(!empty($bannerACF['imagesChip']['sm@1'])):?>
                                    <source type="image/png"
                                        srcset="
                                        <?php echo $bannerACF['imagesChip']['sm@1'] . ' 1x, ' . $bannerACF['imagesChip']['sm@2'] . ' 2x'?>"
                                        media="(min-width: 768px)">
                                <?php endif; ?>
                                
                                <img src="<?php echo $bannerACF['imagesChip']['xs@1']; ?>"
                                    srcset="<?php echo $bannerACF['imagesChip']['xs@2']; ?> 2x" 
                                    alt="imgBannerRsChipXs">
                            </picture>
                        </div>
                    <?php endif; ?>
                    <div class="bannerSelect">
                        <?php include(TEMPLATEPATH . '/components/selectBox/selectBox.component.php'); ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endif; ?>
<?php endif; ?>