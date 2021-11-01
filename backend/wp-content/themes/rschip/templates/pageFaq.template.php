<?php
/*
	Template Name: Tpl. Faq
*/
?>
<?php get_header(); ?>
<main class="page pageFaq">
	<div class="wrapper">
		<h2 class="page__title-h2 page__title-h2_big">SUPPORT <span class="page__title-h2_small page__title-h2_absolute">Find Answers</span><span>FAQ</span></h2>
	</div>

	<?php include(TEMPLATEPATH . '/components/faq/faqPage.component.php'); ?>
	<section class="usEmail">
		<div class="wrapper">
			<p class="page__text">Can't find the answer you're interested in? Email us. <a class="page_red" href="javascript:void(0)">rschiphelp@gmail.com </a>or</p>
		</div>
	</section>

	<?php include(TEMPLATEPATH . '/components/form/form.component.php'); ?>
</main>
<?php get_footer(); ?>