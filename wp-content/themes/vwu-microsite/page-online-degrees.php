<?php get_header(); ?>
<?php
	$degrees_args = array(
		 'posts_per_page' => 10,
		 'orderby' => 'title',
		 'order'   => 'ASC',
		 'post_type' => 'degrees',
		 'post_status' => 'publish'
	);
	$degrees = get_posts( $degrees_args );
?>
			<div class="content">

				<main>
					<div class="waveTop"></div>

					<div class="wrap cf">
						<div class="info">
							<?php include('includes/pagesInfo.php'); ?>
							<?php include('includes/onlinePage/degreeBoxes.php'); ?>
						</div>

						<div id="requestInfoForm" class="form__wrapper">
							<h3 class="form__heading">Life Changes Today.<br>Get Started Now.</h3>
							<p class="form__description">Required fields are marked with an asterisk <span aria-hidden>(*)</span>.</p>
							<script src="http://requestforms.learninghouse.com/form/show/virginia-wesleyan-university/ppc-form-multi/705/3534/online.vwu.edu:my:thank-you:request_id" type="text/javascript"></script>
							<?php include('includes/onlinePage/accolades.php'); ?>

						</div>
						<!-- <div class="waveBottom"></div> -->

					</div>


					<div class="white">
						<div class="valueProps wrap cf">
							<h3><?php the_field('value_props_headline'); ?></h3>

							<?php if( have_rows('value_prop') ): ?>
								<div class="valueProps__wrapper">
									<?php while( have_rows('value_prop') ): the_row();

										// vars
										$image = get_sub_field('icon');
										$headline = get_sub_field('headline');
										$description = get_sub_field('description');

										?>

										<div class="valueProp sect-valu-item">

											<div class="valueProp__headline">
												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
												<h4><?php echo $headline; ?></h4>
											</div>

											<div class="valueProp__description"><?php echo $description; ?></div>

										</div>

									<?php endwhile; ?>
								</div>


							<?php endif; ?>
						</div>
					</div>

				</main>


			</div>

<?php get_footer(); ?>
