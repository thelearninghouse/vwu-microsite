<!doctype html>
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

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/manifest.json">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">

    <meta name="theme-color" content="#121212">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php if (is_front_page()) { ?>
				<style><?php include 'library/css/critical-home.min.css'; ?></style>
		<?php } ?>

		<?php wp_head(); ?>
<script type="text/javascript">
if (location.hash) {
	console.log(location.hash);
	window.scrollTo(0, 0);
	// alert('good so far');
}
</script>
		<script>
		!function(a) {
		    "use strict";
		    var b = function(b, c, d) {
		        function j(a) {
		            return e.body ? a() : void setTimeout(function() {
		                j(a)
		            })
		        }

		        function l() {
		            f.addEventListener && f.removeEventListener("load", l), f.media = d || "all"
		        }
		        var g, e = a.document,
		            f = e.createElement("link");
		        if (c) g = c;
		        else {
		            var h = (e.body || e.getElementsByTagName("head")[0]).childNodes;
		            g = h[h.length - 1]
		        }
		        var i = e.styleSheets;
		        f.rel = "stylesheet", f.href = b, f.media = "only x", j(function() {
		            g.parentNode.insertBefore(f, c ? g : g.nextSibling)
		        });
		        var k = function(a) {
		            for (var b = f.href, c = i.length; c--;)
		                if (i[c].href === b) return a();
		            setTimeout(function() {
		                k(a)
		            })
		        };
		        return f.addEventListener && f.addEventListener("load", l), f.onloadcssdefined = k, k(l), f
		    };
		    "undefined" != typeof exports ? exports.loadCSS = b : a.loadCSS = b
		}("undefined" != typeof global ? global : this);
		</script>
		<script>loadCSS( "/wp-content/themes/vwu-microsite/library/css/style.min.css" );</script>
		<noscript><link rel="stylesheet" href="/wp-content/themes/vwu-microsite/library/css/style.min.css"></noscript>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<?php // If is blog page show the progress bar ?>
		<?php if ( is_singular( 'post' ) ) { ?><progress value="0"></progress><?php } ?>

		<div id="container" class="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div class="wrap cf">


					<div class="flexWrapper">
						<a class="logo__wrapper" href="<?php echo home_url(); ?>" aria-label="Go back to the main page for VWU" rel="nofollow">
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/library/images/vwu-logo-stacked.svg" alt="Virginia Weslyan University Logo" aria-label="Go back to the main page for VWU"> -->
							<?php include('library/images/vwu-logo-horizontal.svg'); ?>
						</a>

						<div class="navWrapper">
							<div class="nav-btn-wrap">
								<a class="request-btn" href="/online-degrees/#requestInfoForm">Request Info</a>
								<a class="header-phone-btn ppcphone" href="tel:8444277428"><span class="icon icon--inline" title="Call us today!"><svg style="fill: #fff;" viewBox="0 0 20 20" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
<path d="M5.56728359,12.3540636 C2.73885646,9.52563646 0.617536118,5.28299577 3.09240985,2.80812204 C3.95789954,1.94263235 4.72407532,1.77234001 5.3909372,2.29724503 L5.39095716,2.29721967 C5.49524986,2.37931127 5.5821579,2.48134241 5.64661499,2.59736517 L6.8227294,4.71446732 C7.09026878,5.19603822 6.917914,5.80328728 6.43727923,6.07250479 C5.43431713,6.63429303 5.02646745,7.19608127 5.2137302,7.7578695 C5.44943246,8.46497629 6.15653924,9.40778533 7.33505054,10.5862966 C8.51356184,11.7648079 9.45637088,12.4719147 10.1634777,12.707617 C10.7252659,12.8948797 11.2870541,12.48703 11.8488424,11.4840679 C12.1180599,11.0034332 12.7253089,10.8310784 13.2068798,11.0986178 L15.323982,12.2747322 C15.4400048,12.3391893 15.5420359,12.4260973 15.6241275,12.53039 L15.6241021,12.53041 C16.1490072,13.1972718 15.9787148,13.9634476 15.1132251,14.8289373 C12.6383514,17.303811 8.39571071,15.1824907 5.56728359,12.3540636 L5.56728359,12.3540636 Z"></path>
</svg>
</span> <span class="phone-desktop">(844) 427-7428</span></a></div>

							<nav class="header__nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">

								<?php wp_nav_menu(array(
							    					         'container' => false,                           // remove nav container
							    					         'container_class' => 'header__menu cf',                 // class of container (should you choose to use it)
							    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
							    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
							    					         'theme_location' => 'main-nav',                 // where it's located in the theme
							        			         'depth' => 0			                               // limit the depth of the nav
								)); ?>
							</nav>
							<!-- <button class="requestInfoButton" type="button" name="button">Request Info</button> -->
						</div>
					</div>

					<?php if (get_field('big_hero_text')): ?>
						<?php include('includes/hero.php'); ?>
					<?php endif; ?>

				</div>


			</header>
