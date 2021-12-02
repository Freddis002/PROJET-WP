<li <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
		<?php if (has_post_thumbnail()) : ?>
	<?php endif; ?>
	<?php the_field('livre', get_the_ID());
	?>
	<?php the_content(); ?>

		</a>
		</li>