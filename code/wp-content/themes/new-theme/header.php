<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- Mobile Meta -->
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicons and Icons -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fav.png">

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

</head>

<body class="grid-body">
<?php
	if (is_front_page()) {
?>	
	<!--Preloader start here-->
    <div
      id="pre-load"
      style="
        display: flex;
        height: 100vh;
        align-items: center;
        justify-content: center;
      "
    >
      <div>
        <div class="">
          <div class="home-page">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/load.gif"
              style="width: 1200px; height: 243px"
              alt="Jagya"
            />
          </div>
        </div>
      </div>
    </div>	
	<!--Preloader end here-->
<?php 
	} else {
?>
	<div id="pre-load">
      <div id="loader" class="loader">
        <div class="loader-container">
          <div class="loader-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-jg.png" alt="Jagya" />
          </div>
        </div>
      </div>
    </div>
<?php
	}
	if (!is_front_page()) { 
?>
	<!-- Header Start here -->
	<div class="topbar">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-6">
            <div class="back-btn">
              <a href="#"
                ><img src="<?php echo get_template_directory_uri(); ?>/images/Back-btn.png" class="img-fluid"
              /></a>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="right-logo">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                ><img src="<?php echo get_template_directory_uri(); ?>/images/logo-jg.png" class="img-fluid"
              /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
	<!-- Header end here -->
<?php 
	}
?>