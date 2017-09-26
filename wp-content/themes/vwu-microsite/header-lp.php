<!--#if expr="$HTTP_COOKIE=/fonts\-loaded\=true/" -->
<!doctype html>
<html lang="en" class="fonts-loaded">
<!--#else -->
<!doctype html>
<!--#endif -->

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- <style><?php include 'library/css/build/minified/lp-critical.css'; ?></style> -->

		<style></style>

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/microsite-modal.css">

		<?php wp_head(); ?>

		<!-- <link rel="stylesheet" href="/wp-content/themes/vwu-microsite/library/css/lp-style.min.css"> -->

		<script>
			!function(a){"use strict";var b=function(b,c,d){function j(a){return e.body?a():void setTimeout(function(){j(a)})}function l(){f.addEventListener&&f.removeEventListener("load",l),f.media=d||"all"}var g,e=a.document,f=e.createElement("link");if(c)g=c;else{var h=(e.body||e.getElementsByTagName("head")[0]).childNodes;g=h[h.length-1]}var i=e.styleSheets;f.rel="stylesheet",f.href=b,f.media="only x",j(function(){g.parentNode.insertBefore(f,c?g:g.nextSibling)});var k=function(a){for(var b=f.href,c=i.length;c--;)if(i[c].href===b)return a();setTimeout(function(){k(a)})};return f.addEventListener&&f.addEventListener("load",l),f.onloadcssdefined=k,k(l),f};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this);
		</script>
		<script>loadCSS( "/wp-content/themes/vwu-microsite/library/css/lp-style.min.css" );</script>
		<noscript><link rel="stylesheet" href="/wp-content/themes/vwu-microsite/library/css/lp-style.min.css"></noscript>

		<?php if (get_field('lp_hero_bg_image')): ?>
			<?php $url = get_field('lp_hero_bg_image'); ?>
		<?php endif; ?>

		<style media="screen">
		.hdr-photo1 {
			background: linear-gradient(to bottom, rgba(86,103,119,0) 0%, rgba(86,103,119,1) 100%), url('<?php the_field('lp_hero_bg_image'); ?>');
			background-repeat: no-repeat, no-repeat;
			background-size: cover, cover;
			background-position: center, right;
			height: 500px;
			position: relative
		}
		</style>

				<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-K2VHJFJ');</script>
		<!-- End Google Tag Manager -->
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2VHJFJ"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<div class="container">
