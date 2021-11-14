<?php
/*
	Template Name: Tpl. Cart
*/
?>
<?php get_header(); ?>
<main class="page pageCart">
    <div class="wrapper">
        <div class="pageCartTitle">
            <h2 class="page__title-h2 page__title-h2_big">ORDERS <span class="page__title-h2_small page__title-h2_absolute">Shopping</span></h2>
            <h3>Cart </h3>
        </div>
        <!-- cart -->
        <?php the_content(); ?>
        <!--/ cart-->
    </div>
</main>

<?php get_footer(); ?>