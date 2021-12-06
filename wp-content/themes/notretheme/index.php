<?php
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		if (have_posts()) {

			// Load posts loop.
			while (have_posts()) {
				the_post();
				the_content();
			}
		}
		?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php
get_footer();