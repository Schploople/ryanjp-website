<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap sidebar-left">
	<main class="main-content">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>	
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		<?php endwhile;?>
		<?php do_action( 'foundationpress_after_content' ); ?>
	 </main>
<?php get_sidebar(); ?>
</div>
<?php get_footer();
