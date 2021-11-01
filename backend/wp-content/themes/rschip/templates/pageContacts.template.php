<?php
/*
	Template Name: Tpl. Faq
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
	<section class="form">
		<div class="wrapper">
			<div class="formFlexContaier">
				<div class="formAction">
					<h2 class="page__title-h2">Get in touch. <span class="page_red">Let’s Say Hi!</span></h2>
					<form class="page__from" action="javascript:void(0)"><input class="page__input" type="text" placeholder="First Name"><input class="page__input" type="text" placeholder="Last Name"><input class="page__input" type="email" placeholder="Email"><textarea class="page__textarea" name="message" placeholder="Message"></textarea><button class="page__btn">send Message</button></form>
				</div>
				<div class="formImg"><img src="assets/images/png/imgForm.png" alt="imgForm"></div>
			</div>
		</div>
	</section>
	<section class="map"> <img src="assets/images/png/imgContactMap.png" alt="imgContactMap"></section>
	<section class="social">
		<div class="socialBg">
			<picture>
				<source type="image/png" srcset="assets/images/png/imgBgSocial-Md.png" media="(min-width: 992px)">
				<source type="image/png" srcset="assets/images/png/imgBgSocial-Sm.png" media="(min-width: 768px)">
				<img src="assets/images/png/imgBgSocial.png" alt="imgBgSocial">
			</picture>
		</div>
		<div class="socialText">
			<h2 class="page__title-h2 page__title-h2_big">Social <span class="page__title-h2_small page__title-h2_absolute">Connect</span></h2>
			<p class="page__text"> <span class="page__text_underline">Follow us </span>on social media</p>
		</div>
		<div class="socialBlockIcons">
			<div class="socialIcons"><a class="icon svg-iconInstagramWhite svg-iconInstagramWhite-box" href="javascript:void(0)"></a><a class="icon svg-iconFacebookWhite svg-iconFacebookWhite-box" href="javascript:void(0)"></a><a class="icon svg-iconYoutubeWhite svg-iconYoutubeWhite-box" href="javascript:void(0)"></a></div>
		</div>
	</section>
</main>
<?php get_footer(); ?>