<?php
/*
Template Name: Test Template
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
					<h6 class="sans-font"><?php
				// Retrieves the stored value from the database
    				$meta_value = get_post_meta( get_the_ID(), 'sub-header-text', true );
 
				// Checks and displays the retrieved value
   					 if( !empty( $meta_value ) ) {
      					  echo $meta_value;
   					 }
				?></h6>
					<a class="hollow button sans-font white" href="http://localhost/minimalistsite/">Home Page</a>
				</div>
			</div>
		</div>
	</section>


	<div class="grid-container white opaque-layer">
		<div class="grid-x grid-margin-x">
			<h1 class="cell center less-roomy"><?php
				// Retrieves the stored value from the database
    				$meta_value = get_post_meta( get_the_ID(), 'meta-text', true );
 
				// Checks and displays the retrieved value
   					 if( !empty( $meta_value ) ) {
      					  echo $meta_value;
   					 }
				?></h1>
		</div>

		<div class="grid-x grid-padding-x ">
			<?php
		
		$newsPosts = new WP_Query('cat=2&posts_per_page=3');
		
		if ($newsPosts->have_posts()) :
			while ($newsPosts->have_posts()) : $newsPosts->the_post();
			?>
				<div class="cell medium-4 data-equalizer">
					<div class="card data-equalizer-watch" style="height: 450px;">
						<h2>
							<?php the_post_thumbnail();?>
						</h2>
						<div class="card-section">
							<h4>
								<?php the_title();?>
							</h4>
							<h5>
								<?php the_date();?>
							</h5>
							<h6>
								<?php the_excerpt();?>
							</h6>
						</div>
					</div>
				</div>
				<?php endwhile;
			
			else : 
				// fallback no content message here
		endif;
		wp_reset_postdata();
	?>
		</div>
		<div class="grid-x grid-margin-x">
			<div class="cell center">
				<a class="hollow button white" href="http://localhost/minimalistsite/updates/">
					<h3>Read All Updates</h3>
				</a>
			</div>
		</div>
	</div>
	<br>



<script>
  $(document).foundation();
</script>


	<?php get_footer();
