<?php get_header(); ?>
<style media="screen">
	iframe#_dummy {
		height: 600px;
		width: 100%;
	}
</style>
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
							<?php include('includes/campusPage/why.php'); ?>
						</div>


						<div id="requestInfoForm" class="form__wrapper">
							<h3 class="form__heading">Life Changes Today.<br>Get Started Now.</h3>
							<p class="form__description">Required fields are marked with an asterisk <span aria-hidden>(*)</span>.</p>
							<iframe src="https://vawesleyan.hobsonsradius.com/ssc/iform/I80N7cA7aE3m0x67120CF.ssc" height="900px" width="100%" scrolling="no" frameborder="0"></iframe>
						</div>
					</div>
					<div class="white">
						<div class="stats wrap cf">

							<?php if( have_rows('stats') ): ?>
								<div class="stats__wrapper">
									<?php while( have_rows('stats') ): the_row();

										// vars
										$number = get_sub_field('number');
										$text = get_sub_field('text');
										?>

										<div class="stat">

											<h4 class="stat__number">
												<?php echo $number; ?>
												<!-- <span class="stat__text"><?php echo $text; ?></span> -->

											</h4>
											<span class="stat__text"><?php echo $text; ?></span>
										</div>

									<?php endwhile; ?>
								</div>


							<?php endif; ?>
						</div>
					</div>

				</main>


			</div>

<?php get_footer(); ?>
