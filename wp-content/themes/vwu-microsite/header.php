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
