<?php
/*
	Template Name: Tpl. Gtr
*/
?>
<?php get_header(); ?>
<main class="page pageGtr">
    <?php include(TEMPLATEPATH . '/components/banner/bannerGtr.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/accomplishments/accomplishments.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/appBlock/appBlock.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/steps/setpsProductGtr.component.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/performance/performanceGtr.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/carSelector/carSelector.component.php'); ?>
    
    <?php include(TEMPLATEPATH . '/components/productSlider/productSlider.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/faq/faqShort.component.php'); ?>
</main>
<?php get_footer(); ?>