<?php 
/*
Template Name: Design Competition Module
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
<section class="section-one-art">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3"></div>
            <div class="col- 12 col-xl-6">
                <div class="art-details">
                    <h1>Design Competition</h1>
                    <?php the_field('intro_text'); ?>                    
                </div>
            </div>
            <div class="col-xl-3"></div>
        </div>
    </div>
</section>
<?php   if ($query->have_posts()) :
        $count = 1; ?>

    <section class="section-two-art">
        <div class="container-fluid">
            <div class="row">
    
            <?php
                while ($query->have_posts()) : $query->the_post();           
            ?>
                
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 <?php echo $termsString; ?>" data-category="transition">
                    <div class="jagya-thumb design-module">
                        <div class="jagya-thumb-img">
                            <!-- lightgallery start -->
                            <div id="lightgallery_<?php echo $count; ?>" class="myLightgallery"><?php
                                if( have_rows('my_gallery__images') ) {
                                    $gallcount = 1;
                                    while( have_rows('my_gallery__images') ) : the_row();
                                        $sub_valueproject_image = get_sub_field('gallery_image'); ?>
                                        <a title="<?php the_title_attribute(); ?>" style="<?php if($gallcount != 1) echo 'display:none'?>" href="<?php echo  $sub_valueproject_image['url']; ?>" >

                                            <!-- edit this part -->
                                            <img src="<?php echo  $sub_valueproject_image['sizes']['large-thumbnail']; ?>" class="img-fluid" />
                                            <div class="jagya-thumb-title"><?php the_field('thumb_heading'); ?></div>
                                            <!-- edit this part -->
                                            
                                        </a><?php $gallcount++;
                                    endwhile;
                                } else { ?>
                                    <a title="<?php the_title_attribute(); ?>" href="<?php echo get_stylesheet_directory_uri() . '/images/no-image.png'; ?>" >
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/no-image.png'; ?>" />
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
                            <!-- lightgallery end -->
                        </div>
                    </div>
                </div>
                        
            <?php
                $count++;
                endwhile;
                wp_reset_postdata(); 
            ?>

            </div>
        </div>
    </section>

<?php     
    else :
        echo 'No posts found.';
    endif;
?>
<?php get_footer(); ?>