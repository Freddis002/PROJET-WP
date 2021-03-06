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
					
					<h3><?php the_title(); ?></h3>
					</div>
					<div class="img">
					<?php  the_post_thumbnail('post-thumbnails'); ?>
			</div>
					
					<p class="ref"><?php the_field('reference_du_livre'); ?></p>
					
					<?php the_excerpt(); ?>
					
					<?php if ($livres = get_field('livres')) : ?>

						
						
					<?php endif; ?>
					<details>
					<summary>Lire la suite</summary>
					
					<p class="block"><?php the_content(); ?></p>
					</details>
					

					
					

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