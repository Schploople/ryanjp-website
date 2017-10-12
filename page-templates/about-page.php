<?php
/*
Template Name: About Page
*/
get_header(); ?>

	<script id="__bs_script__">
		//<![CDATA[
		document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace(
			"HOST", location.hostname));
		//]]>

	</script>

	</script>

	<section class="white">
		<div class="grid-x roomy">
			<div class="cell">
				<div class="text">
					<h1 class="entry-title custom-font">
						<?php echo get_the_title(); ?>
					</h1>
					<h6 class="sans-font">This is my first website!</h6>
					<a class="hollow button sans-font white" href="<?php echo get_site_url(); ?>">Home Page</a>
				</div>
			</div>
		</div>
	</section>

	<div class="grid-container white opaque-layer center ">
		<div class="grid-x grid-margin-x">
			<div class="cell">
				<h1 class="less-roomy">
					<?php
				// Retrieves the stored value from the database
    				$meta_value = get_post_meta( get_the_ID(), 'meta-text', true );
 
				// Checks and displays the retrieved value
   					 if( !empty( $meta_value ) ) {
      					  echo $meta_value;
   					 }
				?>
				</h1>
			</div>
		</div>
		<div class="grid-x grid-margin-x grid-padding-x">
			<div class="cell medium-6">
				<p>
					<?php echo get_the_post_thumbnail(); ?>
				</p>
			</div>
			<div class="cell medium-6">
				<?php echo get_post_field('post_content', $post->ID); ?>
			</div>
		</div>
	</div>
	<br>


	<div class="grid-container white opaque-layer">
		<div class="grid-x grid-margin-x">
			<h1 class="cell center less-roomy">Recent Updates</h1>
		</div>

		<div class="grid-x grid-padding-x ">
			<?php
		
		$newsPosts = new WP_Query('cat=15&posts_per_page=3');
		
		if ($newsPosts->have_posts()) :
			while ($newsPosts->have_posts()) : $newsPosts->the_post();
			?>
				<?php get_template_part( 'template-parts/cardloop' ); ?>
				<?php endwhile;
			
			else : 
				// fallback no content message here
		endif;
		wp_reset_postdata();
	?>
		</div>
		<div class="grid-x grid-margin-x">
			<div class="cell center">
				<a class="hollow button white" href="<?php echo get_site_url(); ?>/updates">
					<h3>Read All Updates</h3>
				</a>
			</div>
		</div>
	</div>
	<br>




	<?php get_footer();
