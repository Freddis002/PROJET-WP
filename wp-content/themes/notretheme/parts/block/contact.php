<?php
$block_id = $block['id'];
$contact = get_field('contact', $block_id);
$contact_posts = my_related_contact_block($contact);
?>
<div class="related-contact">
	<div>
		<InnerBlocks />
	</div>
	
	<?php if ($contact_posts->have_posts()):?>
		
		<ul>
			<?php while ($contact_posts->have_posts()): $contact_posts->the_post(); ?>
				
			<?php endwhile; ?>
		</ul>
	<?php else : ?>
		
	<?php endif; ?>
</div>