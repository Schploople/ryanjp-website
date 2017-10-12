<?php
/*
Template Name: Custom Theme
*/
get_header(); ?>

<script src="/js/vendor/jquery.js"></script>
	<script src="/js/vendor/fastclick.js"></script>

	<script src="/js/foundation.min.js"></script>

	<script>
  		$(document).foundation();
	</script>

	<section class="white">
		<div class="grid-x roomy">
			<div class="cell">
				<div class="text">
					<h1 class="entry-title custom-font"><?php echo get_the_title(); ?></h1>
					<h6 class="sans-font"><?php
				// Retrieves the stored value from the database
    				$meta_value = get_post_meta( get_the_ID(), 'sub-header-text', true );
 
				// Checks and displays the retrieved value
   					 if( !empty( $meta_value ) ) {
      					  echo $meta_value;
   					 }
				?></h6>
					<a class="hollow button sans-font white" href="<?php echo get_site_url(); ?>/about-page/">About Me</a>
				</div>
			</div>
		</div>
	</section>

	<div class="grid-container white opaque-layer">
		<div class="grid-x grid-margin-x">
			<div class="cell">
				<h1 class="center less-roomy">What We Do</h1>
			</div>
		</div>
		<div class="grid-x grid-padding-x grid-margin-x">
			<div class="cell medium-6" style="height: 850px;">
			<div class="responsive-embed">
			<iframe width="420" height="315" src="https://www.youtube.com/embed/mM5_T-F1Yn4" frameborder="0" allowfullscreen></iframe>
		  </div>
				<div class="roomy">
					Lorem ipsum dolor sit amet, eu delectus scriptorem usu. Vix populo vivendo referrentur in, cum cu tantas temporibus, his
					ad epicurei atomorum. Vim civibus perfecto ex, ius ad lobortis aliquando, at qui lorem aliquid. Repudiandae accommodare
					delicatissimi sed et, at atqui audiam adolescens sed, ne qui voluptaria intellegebat. Sonet ceteros tibique eam id,
					est at minim facilisi invenire, reque sensibus ad qui. Qui ut alia malorum, ne lobortis praesent sapientem mea, ut assum
					menandri cum.
				</div>
				<div class="roomy">
					Lorem ipsum dolor sit amet, eu delectus scriptorem usu. Vix populo vivendo referrentur in, cum cu tantas temporibus, his
					ad epicurei atomorum. Vim civibus perfecto ex, ius ad lobortis aliquando, at qui lorem aliquid. Repudiandae accommodare
					delicatissimi sed et, at atqui audiam adolescens sed, ne qui voluptaria intellegebat. Sonet ceteros tibique eam id,
					est at minim facilisi invenire, reque sensibus ad qui. Qui ut alia malorum, ne lobortis praesent sapientem mea, ut assum
					menandri cum.
				</div>
			</div>
			<div class="cell medium-6 ">
				<div class="grid-x">
					<div class="grid-y auto" style="height: 850px;">
						<div class="cell large-3">
							<div class="grid-x ">
								<div class="cell large-2">
									<i class="fa fa-camera-retro fa-5x icon-align"></i>
								</div>
								<div class="cell large-10 medium-cell-block-y">
									<h6 class="roomy">
										Lorem ipsum dolor sit amet, eu delectus scriptorem usu. Vix populo vivendo referrentur in, cum cu tantas temporibus, his
										ad epicurei atomorum. Vim civibus perfecto ex, ius ad lobortis aliquando, at qui lorem aliquid. Repudiandae accommodare
										delicatissimi sed et, at atqui audiam adolescens sed, ne qui voluptaria intellegebat. Sonet ceteros tibique eam
										id, est at minim facilisi invenire, reque sensibus ad qui. Qui ut alia malorum, ne lobortis praesent sapientem
										mea, ut assum menandri cum.
									</h6>
								</div>
							</div>
						</div>
						<div class="cell large-3">
							<div class="grid-x ">
								<div class="cell large-2 ">
									<i class="fa fa-camera-retro fa-5x icon-align"></i>
								</div>
								<div class="cell large-10 medium-cell-block-y">
									<h6 class="roomy">
										Lorem ipsum dolor sit amet, eu delectus scriptorem usu. Vix populo vivendo referrentur in, cum cu tantas temporibus, his
										ad epicurei atomorum. Vim civibus perfecto ex, ius ad lobortis aliquando, at qui lorem aliquid. Repudiandae accommodare
										delicatissimi sed et, at atqui audiam adolescens sed, ne qui voluptaria intellegebat. Sonet ceteros tibique eam
										id, est at minim facilisi invenire, reque sensibus ad qui. Qui ut alia malorum, ne lobortis praesent sapientem
										mea, ut assum menandri cum.
									</h6>
								</div>
							</div>
						</div>
						<div class="cell large-3">
							<div class="grid-x">
								<div class="cell large-2 ">
									<i class="fa fa-camera-retro fa-5x icon-align"></i>
								</div>
								<div class="cell large-10 medium-cell-block-y">
									<h6 class="roomy">
										Lorem ipsum dolor sit amet, eu delectus scriptorem usu. Vix populo vivendo referrentur in, cum cu tantas temporibus, his
										ad epicurei atomorum. Vim civibus perfecto ex, ius ad lobortis aliquando, at qui lorem aliquid. Repudiandae accommodare
										delicatissimi sed et, at atqui audiam adolescens sed, ne qui voluptaria intellegebat. Sonet ceteros tibique eam
										id, est at minim facilisi invenire, reque sensibus ad qui. Qui ut alia malorum, ne lobortis praesent sapientem
										mea, ut assum menandri cum.
									</h6>
								</div>
							</div>
						</div>
						<div class="cell large-3">
							<div class="grid-x">
								<div class="cell large-2">
									<i class="fa fa-camera-retro fa-5x icon-align"></i>
								</div>
								<div class="cell large-10 medium-cell-block-y">
									<h6 class="roomy">
										Lorem ipsum dolor sit amet, eu delectus scriptorem usu. Vix populo vivendo referrentur in, cum cu tantas temporibus, his
										ad epicurei atomorum. Vim civibus perfecto ex, ius ad lobortis aliquando, at qui lorem aliquid. Repudiandae accommodare
										delicatissimi sed et, at atqui audiam adolescens sed, ne qui voluptaria intellegebat. Sonet ceteros tibique eam
										id, est at minim facilisi invenire, reque sensibus ad qui. Qui ut alia malorum, ne lobortis praesent sapientem
										mea, ut assum menandri cum.
									</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cell shrink footer">
			</div>
		</div>
	</div>
	<br>
	<br>


	<div class="grid-container white opaque-layer">
		<div class="grid-x grid-margin-x">
			<h1 class="cell center less-roomy">Recent Updates</h1>
		</div>

		<div class="grid-x grid-padding-x ">
			<?php
		
		$newsPosts = new WP_Query('category_name=category&posts_per_page=3');
		
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
				<a class="hollow button white" href="<?php echo get_site_url(); ?>/updates/">
					<h3>Read All Updates</h3>
				</a>
			</div>
		</div>
	</div>
	<br>

	<div class="grid-container white opaque-layer">
		<div class="grid-x grid-margin-x">
			<h1 class="cell center less-roomy">

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
		<div class="grid-x grid-margin-x grid-padding-x ">
			<div class="cell">
				<?php echo do_shortcode('[formidable id="5"]'); ?>
			</div>
		</div>
	</div>

	



	<?php get_footer();
