                <?php if (have_posts()) { ?>
					<div class="row clearfix">
						<?php while (have_posts()) : the_post(); ?>
							<article class="post-item services-block col-lg-6 col-md-6 col-sm-12 <?php if(is_single()): ?>single-post-item services-block col-lg-12 col-md-12 col-sm-12<?php endif; ?>"><?php
								if( !is_single() ) { ?>
									<div class="floatright post-r">
										<h4>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
										</h4>
										<p class="date"><?php the_time(get_option('date_format')); ?></p><?php
										if ( has_post_thumbnail() ) {
											the_post_thumbnail( 'large-thumbnail');
										} else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No Image" title="No Image" /><?php
										}
										the_excerpt();
										get_template_part('parts/post-categories');
										get_template_part('parts/post-tags'); ?>
									</div><?php
								} else { ?>
									<h3><?php the_title(); ?></h3>
									<p class="date"><?php the_time(get_option('date_format')); ?></p>
									<?php the_content(); ?>
									<?php get_template_part('parts/post-categories'); ?>
									<?php get_template_part('parts/post-tags'); ?>
									<p><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Back to Blog</a></p><?php
								} ?>
							</article><!--post-item-->
						<?php endwhile; ?>
						<?php get_template_part('parts/pagination'); ?>	
					</div>
				<?php } else { ?>
				    <h4>No Posts Found.</h4><!-- no content found -->
				<?php } ?>