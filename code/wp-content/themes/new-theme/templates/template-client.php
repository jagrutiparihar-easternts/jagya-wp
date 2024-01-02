<?php 
/*
Template Name: Client Module
*/
?>
<?php get_header(); ?>
<section class="section-one-art">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3"></div>
            <div class="col-xl-6">
                <div class="art-details">
                    <h1>Clients</h1>
                    <?php the_field('intro_text'); ?>                    
                </div>
            </div>
            <div class="col-xl-3"></div>
        </div>
    </div>
</section>
<section class="section-two-art client-section">
	<div class="container-fluid">
		<div class="row">																		
			<?php if( have_rows('repeater') ):
				while( have_rows('repeater') ) : the_row(); ?>									
					<div class="col-6 col-lg-6 client-logo">
						<div class="client-img">
							<?php $image = get_sub_field('repeater_image');
							if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  class="img-fluid " title="<?php echo esc_attr($image['title']); ?>"/>	
						</div>						
					</div>
				<?php endif;
				endwhile;
			endif; ?>			
		</div>
	</div>
</section>
<?php get_footer(); ?>