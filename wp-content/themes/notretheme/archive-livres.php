

<?php

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php if (have_posts()) : ?>
			
			
				<h1 class="titre">Notre liste de livres</h1>
				<div class="livre">
				<?php while (have_posts()) : the_post(); ?>
				<br>
				<h4 class="titre2"><?php the_title(); ?></h4>	
				<br>
					
			
				
				<?php the_post_thumbnail('post-thumbnails'); ?>
				<br>
				<p class="ref"><?php the_field('reference_du_livre'); ?></p>
					<br>
			<a href="<?php the_permalink(); ?>" title=""><button>En savoir plus</button></a>
			</div>
				
				<?php endwhile; ?>

			
			
			
			<br>
		<?php endif; ?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php
get_footer();