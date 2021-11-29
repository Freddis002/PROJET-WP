
						<a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('livre-image'); ?>
                      <?php endif; ?>
					  <?php the_field('livre_date'); ?>
							<?php the_title(); ?>
						</a>