<?php
/*
	Template Name: Tpl. Contacts
*/
?>
<?php get_header(); ?>
<main class="page pageContacts">
	<div class="wrapper">
		<h2 class="page__title-h2 page__title-h2_big">WELLCOME <span class="page__title-h2_small page__title-h2_absolute">Get in touch </span></h2>
		<h2>Contact Us</h2>
	</div>
	<section class="contactCards">
		<div class="wrapper">
			<div class="contactCardsFlexContainer">
				<div class="contactCard">
					<div class="contactCardIcon">
						<div class="svg-iconMarkLocationPurple svg-iconMarkLocationPurple-box"></div>
					</div>
					<div class="contactCardTitle">Our office and warehouse</div>
					<div class="contactCardDescriptin">1201 East 5th Street North Little Rock, Arkansas USA, 72114
					</div>
				</div>
				<div class="contactCard">
					<div class="contactCardIcon">
						<div class="svg-iconPhonePurple svg-iconPhonePurple-box"></div>
					</div>
					<div class="contactCardTitle">Our Phone Number</div>
					<div class="contactCardDescriptin">+1 800 796 16 17 -USA Toll Free</div>
				</div>
				<div class="contactCard">
					<div class="contactCardIcon">
						<div class="svg-iconEmalPurple svg-iconEmalPurple-box"></div>
					</div>
					<div class="contactCardTitle">Email Address</div>
					<div class="contactCardDescriptin">rschiphelp@gmail.com</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php include(TEMPLATEPATH . '/components/form/form.component.php'); ?>
	<section class="map"> <img src="assets/images/png/shared/imgContactMap.png" alt="imgContactMap"></section>
	<?php include(TEMPLATEPATH . '/components/social/social.component.php'); ?>

</main>
<?php get_footer(); ?>