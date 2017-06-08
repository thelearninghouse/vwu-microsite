<?php get_header(); ?>

			<div class="content">

				<div class="wrap cf">
								<h3><?php the_field('test_group'); ?></h3>
						<main class="main-content cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="page-header">

									<?php
										if ( function_exists('yoast_breadcrumb') ) {
											yoast_breadcrumb('<p class="breadcrumbs">','</p>');
										}
									?>
									<h1 class="page-header__title" itemprop="headline"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

								<section class="page-content cf" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>

							</article>

							<?php endwhile; endif; ?>

						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
