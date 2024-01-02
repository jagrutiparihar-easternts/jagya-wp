<?php 
/*
Template Name: Published Module
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
            <div class="col-12 col-xl-5"></div>
            <div class="col-12 col-xl-7">
                <div class="awards-details">
                    <h1>Published</h1>
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
                <div class="col-12 col-lg-4 col-md-4 col-sm-3">
                </div>
                <div class="col-12 col-lg-8 col-md-8 col-sm-9">
                    <div class="row">
                        
    
            <?php
                while ($query->have_posts()) : $query->the_post();           
            ?>
                
                <div class="col-6 col-sm-6 col-lg-3 col-md-6 <?php echo $termsString; ?>" data-category="transition">
                    <div class="jagya-thumb">
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
                                            <!--<div class="jagya-thumb-title"><?php the_title(); ?></div>-->
                                            <!-- edit this part -->
                                            
                                        </a><?php $gallcount++;
                                    endwhile;
                                } else { ?>
                                    <a title="<?php the_title_attribute(); ?>" href="<?php echo get_stylesheet_directory_uri() . '/images/no-image.png'; ?>" >
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/no-image.png'; ?>" />
                                    </a><?php
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
            </div>
        </div>
    </section>

<?php     
    else :
        echo 'No posts found.';
    endif;
?>
<?php get_footer(); ?>