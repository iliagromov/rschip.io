<?php
/*
	Template Name: Tpl. Rs
*/
?>
<?php get_header(); ?>
<main class="page pageRs">
    <?php include(TEMPLATEPATH . '/components/banner/bannerRs.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/product/productRs.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/productRsControls/productRsControls.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/productRsSafest/productRsSafest.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/howitwork/howitwork.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/installation/installation.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/productSlider/productSlider.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/faq/faqShort.component.php'); ?>
</main>
<?php get_footer(); ?>