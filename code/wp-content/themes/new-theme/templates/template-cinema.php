<?php 
/*
Template Name: Cinema
*/
?>
<?php get_header();?>
<!--<section class="section-one-art">-->
<!--    <div class="container-fluid">-->
<!--        <div class="row">-->
<!--            <div class="col-xl-4"></div>-->
<!--            <div class="col-xl-4">-->
<!--                <div class="art-details">-->
<!--                    <h1>Product Design</h1>-->
<!--                    <?php //the_field('intro_text'); ?>                    -->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xl-4"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section class="section-one-art cinema-well">
	<div class="container-xxl">
		<div class="row cinema-logo-section">
			
			<div class="col-12 col-lg-6 d-flex">
				<div class="art-details cinema-logo" style="text-align: right;">
					<h1>Cinema</h1>
					<?php the_field('intro_text'); ?>                    
				</div>
			</div>
			
			<?php if( have_rows('repeater') ):
				while( have_rows('repeater') ) : the_row(); ?>									
					<div class="col-12 col-lg-6">
						<div class="cinema-logo">
							<a href="<?php echo the_sub_field('repeater_link'); ?>" target="_blank">
								<?php $image = get_sub_field('repeater_image');
								if( !empty( $image ) ): ?>							
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  class="img-fluid"/>	
								<div class="jagya-thumb-title"><?php echo the_sub_field('video_title'); ?></div>
							</a>
						</div>						
					</div>
				<?php endif;
				endwhile;
			endif; ?>
			
		</div>
	</div>
</section>
<?php get_footer(); ?>