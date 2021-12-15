

<?php

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php if (have_posts()) : ?>
			<ul class="livres">
				<h1>Notre liste de livres</h1>
				<?php while (have_posts()) : the_post(); ?>
				<br>
				<?php the_title(); ?>	
				<br>
				<?php the_field('titre_du_livre'); ?>	
				<br>
				
				<?php the_post_thumbnail('post-thumbnails'); ?>
				<br>
				<?php the_field('reference_du_livre'); ?>
					<br>
<a href="<?php the_permalink(); ?>" title=""><button>En savoir plus</button></a>
				
				<?php endwhile; ?>

			
			</ul>
			
			<br>
		<?php endif; ?>

	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php
get_footer();