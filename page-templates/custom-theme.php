<?php
/*
Template Name: Custom Theme
*/
get_header(); ?>

	<?php do_action( 'foundationpress_before_content' ); ?>


	<div class="grid-x">
		<div class="cell">
			<section class="wrapping" style="background-color:powderblue;">
				<?php get_template_part( 'template-parts/featured-image' ); ?>
				<div class="text">
					<h1 class="entry-title custom-font">
						John Ryan
					</h1>
					<h6 class="sans-font">
						This is my first website!
					</h6>
					<a class="hollow button sans-font" href="#">
			Button
		</a>
				</div>
			</section>
		</div>
	</div>

	<?php do_action( 'foundationpress_after_content' ); ?>

	<?php get_footer();
