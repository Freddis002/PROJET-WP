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
		?>
				<div class="livre">
					<h1><?php the_title(); ?></h1>
					<?php if ($livres = get_field('livres')) : ?>
						
					<?php endif; ?>
					<?php the_content(); ?>

					<div class="other-livre">
						<?php
						if (have_rows('livres')) {
							while (have_rows('livres')) {
								the_row();
								echo get_sub_field('livres');
							}
						}
						?>
					</div>
				</div>
		<?php
			}
		}
		?>

	</main><!-- .site-main -->

	



	
<?php
get_footer();