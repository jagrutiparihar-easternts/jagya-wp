<?php 
/*
Template Name: Contact Us
*/
?>
<?php get_header();
?>
<section class="section-one-art">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4">
				<div class="art-details">
					<div class="screen-left">
						<div class="screen-logo">
							<h1>JAGYA</h1>
							<h2>DESIGNS</h2>
						</div>
					</div>
					<a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a>
					<a href="<?php echo get_field('phone_number', 'option'); ?>"><?php echo get_field('phone_number', 'option'); ?></a>
					<?php echo get_field('address', 'option'); ?>         
                </div>
			</div>
            <div class="col-xl-4">
                <div class="art-details">
					<?php echo get_field('location', 'option'); ?>
                </div>
            </div>
            <div class="col-xl-4">
				<?php echo do_shortcode('[contact-form-7 id="d31a754" title="Contact Us"]'); ?>				
			</div>
        </div>
    </div>
</section>

<?php get_footer(); ?>