<?php get_header( 'lp' ); ?>
<style media="screen">

</style>
<div class="main-body-cont">

		<div class="hdr-photo1">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

			<div class="wrap cf">

				<div class="logo header__logo" itemscope itemtype="http://schema.org/Organization">

					<h1 style="margin: 0; padding: 0;"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/vwu-logo-stacked.svg" alt="Virginia Weslyan University Logo" aria-label="Go back to the main page for VWU"></a></h1>

				</div>

				<div class="hero-txt">

					<span class="hero-txt-sm"><?php the_field('lp_hero_sm_text'); ?></span>
					<span class="hero-txt-lg"><?php the_field('lp_hero_lg_text'); ?></span>

				</div>

			</div>

		</div>

	</header>

	<div class="content">

			<div class="sect-intro">

				<div class="wrap cf">

					<h3><?php the_field('lp_welcome_headline'); ?></h3>

					<p><?php the_field('lp_welcome_copy'); ?></p>

				</div>

			</div>

			<div class="sect-prog">

				<div class="wrap cf">

					<h3><?php the_field('lp_op_headline'); ?></h3>

					<p><?php the_field('lp_op_copy'); ?></p>

					<?php if( have_rows('lp_op_group') ): ?>

						<?php while( have_rows('lp_op_group') ): the_row();

							// vars
							$headline = get_sub_field('lp_op_group_headline');
							$desc = get_sub_field('lp_op_group_desc');

							?>

							<div class="sect-prog-item">

								<h4><?php echo $headline; ?></h4>

								<p><?php echo $desc; ?></p>

							</div>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>

			</div>

			<div class="sect-valu">

				<div class="wrap cf">

					<h3><?php the_field('lp_vp_headline'); ?></h3>

					<?php if( have_rows('lp_vp_group') ): ?>
						<div class="valueProps__wrapper">
							<?php while( have_rows('lp_vp_group') ): the_row();

								// vars
								$image = get_sub_field('lp_vp_gp_icon');
								$headline = get_sub_field('lp_vp_gp_headline');
								$desc = get_sub_field('lp_vp_gp_desc');

								?>

								<div class="sect-valu-item valueProp">

									<div class="valueProp__headline">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
										<h4><?php echo $headline; ?></h4>
									</div>

									<div class="valueProp__description"><?php echo $desc; ?></div>

								</div>

							<?php endwhile; ?>
						</div>


					<?php endif; ?>


				</div>

			</div>

	</div> <!-- content -->

	<div class="sect-about">

		<div class="wrap cf">

			<h3>About Us</h3>

			<p>
				Founded in 1961, Virginia Wesleyan University is rooted in the liberal arts tradition as well as its Methodist heritage, providing a broad academic foundation while cultivating productive and engaged citizens. A meaningful liberal arts education includes the search for humane, social and scientific principles which provide the basis for understanding oneself, society and the world. A cross-disciplinary approach allows students to build knowledge and explore their interests in the classroom and beyond.
			</p>

			<p>
				The mission of Virginia Wesleyan University is to engage students of diverse ages, religions, ethnic origins and backgrounds in a rigorous liberal arts education that will prepare them to meet the challenges of life and career in a complex and rapidly changing world. In recent years, the makeup of our campus has shifted to more than 40 percent minority students. In accord with our United Methodist heritage, Virginia Wesleyan aspires to be a supportive community that is committed to social responsibility, ethical conduct, higher learning and religious freedom.
			</p>

		</div>

	</div>

</div>


<div class="mobile-request-cont">

	<button class="call-to-action" data-a11y-dialog-show="my-accessible-dialog">Request Info</button>

</div>

<div class="request-form-cont">

	<div class="sidebar cf" role="complementary">

		<div class="sidebar-well">
				<h3>Life changes today.<br />Get started now.</h3>
				<div id="sidebarStepForm" class="step-form">
						<script src="http://requestforms.learninghouse.com/form/show/virginia-wesleyan-university/multi-step/705/3534/online.vwu.edu:my:thank-you:request_id" type="text/javascript"></script>
				</div>


				<div class="accolades">

					<div class="accolades-item">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/cod-yearly-badge.png" alt="2016-2017 Colleges of Distinction badge">
					</div>

					<div class="accolades-item">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/vwc-vetlogo.png" alt="Marlins Veterans badge">
					</div>

					<div class="accolades-item">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/princeton-review-2016.png" alt="The Princeton Review 2016 - The 380 Best Colleges badge">
					</div>

			</div>

		</div>

	</div>

</div>

<?php get_footer( 'lp' ); ?>
