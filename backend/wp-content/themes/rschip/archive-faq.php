<?php get_header(); ?>
<!-- archive faq -->
<main class="page pageFaq">
    <div class="wrapper">
        <h2 class="page__title-h2 page__title-h2_big">SUPPORT <span class="page__title-h2_small page__title-h2_absolute">Find Answers</span><span>FAQ</span></h2>
    </div>
   
    <?php echo get_field('test') ?>
    <?php echo get_field('faq_items'); ?>
    s
    <?php /*include(TEMPLATEPATH . '/components/faq/faq.component.php');*/  ?>
    
    <section class="usEmail">
        <div class="wrapper">
            <p class="page__text">Can't find the answer you're interested in? Email us. <a class="page_red" href="javascript:void(0)">rschiphelp@gmail.com </a>or</p>
        </div>
    </section>

    <?php include(TEMPLATEPATH . '/components/form/form.component.php'); ?>
</main>
<!-- /archive -->
<?php get_footer(); ?>