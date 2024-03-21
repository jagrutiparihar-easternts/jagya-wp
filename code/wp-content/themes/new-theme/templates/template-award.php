<?php 
/*
Template Name: Awards Module
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
            <div class="col-xl-5">
                <div class="awards-category">
                    <div>Architecture</div>
                    <div>interior</div>
                    <div>Landscape</div>
                    <div>Product</div>
                    <div>Art/Graphics</div>
                    <div>Competitions</div>
                    <div>Photography</div>
                    <div>Cinema</div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="awards-details">
                    <h1>AWARDS</h1>
                    <div class="awards-top-part">
                        <?php 
                            $image = get_field('intro_image');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" title="Our Team"/>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php   if ($query->have_posts()) :
        $count = 1; ?>

    <section class="section-two-art">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="row">
            <?php
                while ($query->have_posts()) : $query->the_post();           
            ?>
                
                <div class="col-6 col-lg-3 col-md-6 col-sm-12 <?php echo $termsString; ?>" data-category="transition">
                    <div class="jagya-thumb">
                        <div class="">
                            <!-- lightgallery start -->
                            <div id="fancybox_<?php echo $count; ?>" class="myFancybox"><?php
                                if( have_rows('my_gallery__images') ) {
                                    $gallcount = 1;
                                    while( have_rows('my_gallery__images') ) : the_row();
                                        $sub_valueproject_image = get_sub_field('gallery_image'); ?>
                                        <a class="projects-thumb fancybox" data-fancybox="gallery_<?php echo $count; ?>" title="<?php the_title_attribute(); ?>" style="<?php if ($gallcount != 1) echo 'display:none' ?>" href="<?php echo  $sub_valueproject_image['url']; ?>">
                                            <!-- edit this part -->
                                            <div class="awards-box">                                                
                                                <div class="awards-img">
                                                   <div><img src="<?php echo  $sub_valueproject_image['sizes']['large-thumbnail']; ?>" alt="<?php echo esc_attr($sub_valueproject_image['alt']); ?>" class="img-fluid" /></div>
                                                    <div class="awards-title-1">
                                                        <?php the_field('thumb_heading'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- edit this part -->
                                            
                                        </a><?php $gallcount++;
                                    endwhile;
                                } else { ?>
                                    <a title="<?php the_title_attribute(); ?>" href="<?php echo get_stylesheet_directory_uri() . '/images/no-image.png'; ?>" >
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/no-image.png'; ?>" alt="no-image"/>
                                    </a><?php
                                } ?>	
								<?php if( have_rows('video') ) {									
									while( have_rows('video') ) : the_row(); 
										$video = get_sub_field('video_link'); ?> 
										<a href="<?php echo $video; ?>" data-fancybox="gallery_<?php echo $count; ?>" data-caption="Caption Images 1" 
										   title="<?php the_title_attribute();?>" style="display: none;">
<!-- 											<iframe width="600" height="400" src="<?php echo $video; ?>"></iframe> -->
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
        
            <div class="col-lg-4 col-md-6 col-sm-12"></div>
            </div>
        </div>
    </section>

<?php     
    else :
        echo 'No posts found.';
    endif;
?>
<?php get_footer(); ?>