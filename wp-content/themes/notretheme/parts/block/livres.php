<?php
$block_id = $block['id'];
$livres = get_field('livres', $block_id);
$order = get_field('order', $block_id);
$show_thumbnail = get_field('show_thumbnail', $block_id);
$livre_posts = my_related_livre_block($livres, $order);
?>
<div class="related-events">
	<div>
		<InnerBlocks />
	</div>
	<?php if ($livre_posts->have_posts()) : ?>
		<ul>
			<?php while ($livre_posts->have_posts()) : $livre_posts->the_post(); ?>
				<li>
					<?php if ($show_thumbnail) : ?>
						<?php the_post_thumbnail(); ?>
					<?php endif; ?>
					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php else : ?>
		<div>Aucun évènement</div>
	<?php endif; ?>
</div>
