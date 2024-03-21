<?php 
/*
Template Name: Product Design Module
*/
?>
<?php get_header();
	$args = array(
        'post_type' => 'project',
        'posts_per_page' => -1, 
        'tax_query' => array(
            array(
                'taxonomy' => 'project_category',
                'field'    => 'slug',
                'terms'    => get_the_title(),
            ),
        ),
    );
    $query = new WP_Query($args); 
?>

<?php   if ($query->have_posts()) :
        $count = 1; ?>

    <section class="section-one-art product-design-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-lg-center">
                <div class="art-details">
                    <h1>Product Design</h1>
                    <?php the_field('intro_text'); ?>                    
                </div>
            </div>
            <?php
            while ($query->have_posts()) : $query->the_post();
                // Display your custom post content here            
            ?>
                
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 <?php echo $termsString; ?>" data-category="transition">
                    <div class="jagya-thumb">
                        <div class="jagya-thumb-img">
                            <div id="fancybox_<?php echo $count; ?>" class="myFancybox"><?php
                                if( have_rows('my_gallery__images') ) {
                                    $gallcount = 1;
                                    while( have_rows('my_gallery__images') ) : the_row();
                                        $sub_valueproject_image = get_sub_field('gallery_image'); ?>
                                        <a class="fancybox" title="<?php the_title_attribute(); ?>" data-fancybox="gallery_<?php echo $count; ?>" style="<?php if($gallcount != 1) echo 'display:none'?>" href="<?php echo  $sub_valueproject_image['url']; ?>" >
                                    
                                            <img src="<?php echo  $sub_valueproject_image['sizes']['large-thumbnail']; ?>" alt="<?php echo esc_attr($sub_valueproject_image['alt']); ?>" class="img-fluid" />
                                            <div class="jagya-thumb-title"><?php the_field('thumb_heading'); ?></div>
                                            
                                        </a><?php $gallcount++;
                                    endwhile;
                                } else { ?>
                                    <a title="<?php the_title_attribute(); ?>" href="<?php echo get_stylesheet_directory_uri() . '/images/no-image.png'; ?>" >
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/no-image.png'; ?>" alt="no-img" />
                                    </a><?php
                                } ?>
								<?php if( have_rows('video') ) {									
									while( have_rows('video') ) : the_row(); 
										$video = get_sub_field('video_link'); ?> 
										<a href="<?php echo $video; ?>" title="<?php the_title_attribute();?>" style="display: none;">
											<iframe width="600" height="400" src="<?php echo $video; ?>"></iframe>
										</a>
								<?php endwhile;
								} ?>
                            </div>
                        </div>
                    </div>
                </div>
                        
            <?php
            $count++;
            endwhile;
            wp_reset_postdata(); ?>

            </div>
        </div>
    </section>

<?php     
	else :
		echo 'No posts found.';
	endif;
?>
<?php get_footer(); ?>