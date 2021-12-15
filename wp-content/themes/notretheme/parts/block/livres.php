
<?php
$block_id = $block['id'];
$livres = get_field('livres', $block_id);
$livre_posts = my_related_livres_block($livres);
?>
<div class="related-livres">
	<div>
		<InnerBlocks />
	</div>
	
	<?php if ($livre_posts->have_posts()):?>
		
		<ul>
			<?php while ($livre_posts->have_posts()): $livre_posts->the_post(); ?>
				<li>
					<?php the_title(); ?>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php else : ?>
		
	<?php endif; ?>
</div>

