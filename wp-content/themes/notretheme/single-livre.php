<?php if (function_exists('livre_related_posts')) : ?>
		<?php
		$related_posts = livre_related_posts();
		?>
		<?php if ($related_posts && $related_posts->have_posts()) : ?>
			<h2>Livre</h2>
			<ul>
				<?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
					<?php get_template_part('parts/content', 'livres'); ?>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	<?php endif; ?>
</div><!-- .content-area -->

<?php
get_footer();