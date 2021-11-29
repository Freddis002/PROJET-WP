<?php
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php  wp_nav_menu([
			'menu' => 'livre-menu',
		]); ?>
		<?php dynamic_sidebar('before-main-sidebar'); ?>
		<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('parts/content', get_post_type()); ?>
				<?php endwhile; ?>
		<?php endif; ?>

	</main><!-- .site-main -->
</div><!-- .content-area -->


    

<?php
get_footer();
?>