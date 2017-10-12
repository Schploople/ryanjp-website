<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="cell medium-4 data-equalizer">
					<div class="card data-equalizer-watch" style="height: 450px;">
						<h2>
							<?php display_featured_media('medium');?>
						</h2>
						<div class="card-section">
							<h4>
								<a href="<?php echo get_permalink();?>"><?php the_title();?></a>
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
