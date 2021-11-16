
<?php
/*
	Template Name: Tpl. Chip
*/
?>
<?php get_header(); ?>
<main class="page pageChip">
    <?php include(TEMPLATEPATH . '/components/banner/bannerChip.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/power/power.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/steps/steps.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/howitworkChip/howitworkChip.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/performance/performance.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/optimizeBlock/optimizeBlock.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/productSlider/productSlider.component.php'); ?>
    <?php include(TEMPLATEPATH . '/components/faq/faq.component.php'); ?>
</main>
<?php get_footer(); ?>