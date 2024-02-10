<?php 
/*
Template Name: Photography
*/
?>
<?php get_header();?>
<section class="section-one-art">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3"></div>
            <div class="col-12 col-xl-6">
                <div class="art-details">
                    <h1>Photography</h1>
                    <?php the_field('intro_text'); ?>                    
                </div>
            </div>
            <div class="col-xl-3"></div>
        </div>
    </div>
</section>
<section class="section-two-art">
	<div class="container-fluid">
		<div class="row">  
			<div class="col-12 col-xl-4">
                <div class="photography-box">   
                    <a href="<?php echo esc_url(home_url('/portraits')); ?>">
                    <div class="photography-cover">       
                         <img src="<?php echo get_template_directory_uri(); ?>/images/myself/portraits/4-cultural-layers-pushkar-2015.jpg" class="img-fluid img-shadow" alt="cultural-layers-pushkar"/>
                    </div>
                    <div class="photography-title">Portraits</div>
                    </a>
                </div>
                 <div class="photography-box">   
                    <a href="<?php echo esc_url(home_url('/people')); ?>">
                    <div class="photography-cover">       
                         <img src="<?php echo get_template_directory_uri(); ?>/images/myself/people/18-barber-dharavi-2016.jpg" class="img-fluid img-shadow" alt="barber-dharavi"/>
                    </div>
                    <div class="photography-title">People</div>
                    </a>
                </div>
            </div>
			<div class="col-12 col-xl-4">
                <div class="photography-box">   
                    <a href="<?php echo esc_url(home_url('/religion')); ?>">
                    <div class="photography-cover">       
                         <img src="<?php echo get_template_directory_uri(); ?>/images/myself/religion/1-see-you-soon-surat-2014.jpg" class="img-fluid img-shadow" alt="see-you-soon-surat"/>
                    </div>
                    <div class="photography-title">Religion</div>
                    </a>
                </div>
                 <div class="photography-box">   
                    <a href="<?php echo esc_url(home_url('/connections')); ?>">
                    <div class="photography-cover">       
                         <img src="<?php echo get_template_directory_uri(); ?>/images/myself/connections/7-step-by-step-penang-2016.jpg" class="img-fluid img-shadow" alt="step-by-step-penang"/>
                    </div>
                    <div class="photography-title">Connections</div>
                    </a>
                </div>
            </div>			
			<div class="col-12 col-xl-4">
                <div class="photography-box">   
                    <a href="<?php echo esc_url(home_url('/animal')); ?>">
                    <div class="photography-cover">       
                         <img src="<?php echo get_template_directory_uri(); ?>/images/myself/animal/7-green-sundarban-kolkata-2014.jpg" class="img-fluid img-shadow" alt="green-sundarban-kolkata"/>
                    </div>
                    <div class="photography-title">Animal</div>
                    </a>
                </div>
            </div>
            
             
            <div class="col-12 col-xl-4">
                <div class="photography-box">   
                <a href="<?php echo esc_url(home_url('/experiments')); ?>">
                    <div class="photography-cover">       
                         <img src="<?php echo get_template_directory_uri(); ?>/images/myself/experiments/2.jpg" class="img-fluid img-shadow" alt="experiments"/>
                    </div>
                    <div class="photography-title">Experiments</div>
                    </a>
                </div>
            </div>
		</div>
	</div>
</section>

<?php get_footer(); ?>