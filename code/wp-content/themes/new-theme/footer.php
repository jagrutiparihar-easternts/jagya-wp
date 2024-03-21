<?php wp_footer(); ?>

<?php
	if (is_front_page()) {	    
?>	
<div class="jagya-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xl-2">
                <div class="foter-icon-left">
                    <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="desktop-contact"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon/contact-icon.png" alt="contact-icon"></a>
                </div>
            </div>
            <div class="col-12 col-xl-8 text-center copyright-text">
                <p>Copyright © 2024 JAGYA. All Rights Reserved. <br>| Powered by <a href="http://www.easternts.com/" target="_blank"> : Eastern Techno Solutions</a></p>
            </div>
            <div class="col-12 col-xl-2">
                <div class="foter-icon-right only-desktop">
                    <div><a href="https://www.facebook.com/jagyadesign" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon/facebook-icon.png" alt="facebook-icon"></a></div>
                    <div><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon/linkedin-icon.png" alt="linkedin-icon"></a></div>
                    <div><a href="https://www.youtube.com/@jagyafilms7284/videos" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon/youtube-icon.png" alt="youtube-icon"></a></div>
                    <div><a href="https://www.instagram.com/jagya.designs/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon/insta-icon.png" alt="insta-icon"></a></div>
                </div>
                <div class="foter-icon-right-mobile">
                    <div>
                        <a href="<?php echo esc_url(home_url('/contact-us')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon/contact-icon.png" alt="contact-icon"></a>
                    </div>
                    <div class="mobile-fot-icon">
                        <div><a href="https://www.facebook.com/jagyadesign" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon/facebook-icon.png" alt="facebook-icon"></a></div>
                        <div><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon/linkedin-icon.png" alt="linkedin-icon"></a></div>
                        <div><a href="https://www.youtube.com/@jagyafilms7284/videos" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon/youtube-icon.png" alt="youtube-icon"></a></div>
                        <div><a href="https://www.instagram.com/jagya.designs/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-icon/insta-icon.png" alt="insta-icon"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    // Array of colors
    const gridColors = ["#3b2f28", "#323137", "#5a3f3e", "#50575f"];
    const colors = ["#271c16", "#162127", "#472323", "#1d4148"];

    // Get the index of the last used color from local storage or set it to 0
    let lastIndex = parseInt(localStorage.getItem("lastIndex")) || 0;
		
    // Function to get the next index considering the array length
    function getNextIndex(currentIndex) {
        return (currentIndex + 1) % colors.length;
    }

    // Change the background color on each page refresh
    function changeBackgroundColor() {
        // Get the index of the next color
        lastIndex = getNextIndex(lastIndex);

        // Set the background color of the body
        document.body.style.backgroundColor = colors[lastIndex];
        document.body.style.backgroundImage = `linear-gradient(${gridColors[lastIndex]} 0.1em, transparent 0.1em), linear-gradient(90deg, ${gridColors[lastIndex]} 0.1em, transparent 0.1em)`;
        document.getElementsByClassName(
        "screen-logo"
        )[0].style.backgroundColor = colors[lastIndex];

        // Update the last used index in local storage
        localStorage.setItem("lastIndex", lastIndex.toString());
    }

    // Call the function to change the background color
    changeBackgroundColor();
    });
    function loadGif37() {
    var image = document.getElementById("img37");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/art.gif";
    }
    function loadNormalImage37() {
    var image = document.getElementById("img37");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/art.png";
    }
    function loadGif36() {
    var image = document.getElementById("img36");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/design-competition.gif";
    }
    function loadNormalImage36() {
    var image = document.getElementById("img36");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/design-competition.png";
    }
    function loadGif35() {
    var image = document.getElementById("img35");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/process-model.gif";
    }
    function loadNormalImage35() {
    var image = document.getElementById("img35");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/process-model.png";
    }
    function loadGif34() {
    var image = document.getElementById("img34");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/urban-design.gif";
    }
    function loadNormalImage34() {
    var image = document.getElementById("img34");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/urban-design.png";
    }
    function loadGif33() {
    var image = document.getElementById("img33");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/awards.gif";
    }
    function loadNormalImage33() {
    var image = document.getElementById("img33");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/awards.png";
    }
    function loadGif32() {
    var image = document.getElementById("img32");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/published.gif";
    }
    function loadNormalImage32() {
    var image = document.getElementById("img32");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/published.png";
    }
    function loadGif31() {
    var image = document.getElementById("img31");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/product-design.gif";
    }
    function loadNormalImage31() {
    var image = document.getElementById("img31");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/product-design.png";
    }
    function loadGif115() {
    var image = document.getElementById("img115");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/yrgb.gif";
    }
    function loadNormalImage115() {
    var image = document.getElementById("img115");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/yrgb.png";
    }
    function loadGif114() {
    var image = document.getElementById("img114");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/house-of-affection.gif";
    }
    function loadNormalImage114() {
    var image = document.getElementById("img114");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/house-of-affection.png";
    }
    function loadGif1() {
    var image = document.getElementById("img1");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/the-deceit-house.gif";
    }
    function loadNormalImage1() {
    var image = document.getElementById("img1");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/the-deceit-house.png";
    }
    function loadGif22() {
    var image = document.getElementById("img22");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/innocent-harmony-residence.gif";
    }
    function loadNormalImage22() {
    var image = document.getElementById("img22");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/innocent-harmony-residence.png";
    }
    function loadGif5() {
    var image = document.getElementById("img5");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/colourful-lines.gif";
    }
    function loadNormalImage5() {
    var image = document.getElementById("img5");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/colourful-lines.png";
    }
    function loadGif6() {
    var image = document.getElementById("img6");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/marionette.gif";
    }
    function loadNormalImage6() {
    var image = document.getElementById("img6");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/marionette.png";
    }
    function loadGif7() {
    var image = document.getElementById("img7");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/rubix-residence.gif";
    }
    function loadNormalImage7() {
    var image = document.getElementById("img7");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/rubix-residence.png";
    }
    function loadGif8() {
    var image = document.getElementById("img8");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/traditional-imprint.gif";
    }
    function loadNormalImage8() {
    var image = document.getElementById("img8");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/traditional-imprint.png";
    }
    function loadGif9() {
    var image = document.getElementById("img9");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/presence.gif";
    }
    function loadNormalImage9() {
    var image = document.getElementById("img9");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/presence.png";
    }
    function loadGif10() {
    var image = document.getElementById("img10");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/ribs-residence.gif";
    }
    function loadNormalImage10() {
    var image = document.getElementById("img10");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/ribs-residence.png";
    }
    function loadGif11() {
    var image = document.getElementById("img11");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/desire.gif";
    }
    function loadNormalImage11() {
    var image = document.getElementById("img11");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/desire.png";
    }
    function loadGif12() {
    var image = document.getElementById("img12");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/origami-house.gif";
    }
    function loadNormalImage12() {
    var image = document.getElementById("img12");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/origami-house.png";
    }
    function loadGif13() {
    var image = document.getElementById("img13");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/trace-the-trail.gif";
    }
    function loadNormalImage13() {
    var image = document.getElementById("img13");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/trace-the-trail.png";
    }
    function loadGif14() {
    var image = document.getElementById("img14");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/myself.gif";
    }
    function loadNormalImage14() {
    var image = document.getElementById("img14");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/myself.png";
    }
    function loadGif15() {
    var image = document.getElementById("img15");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/work-space.gif";
    }
    function loadNormalImage15() {
    var image = document.getElementById("img15");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/work-space.png";
    }
    function loadGif16() {
    var image = document.getElementById("img16");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/client.gif";
    }
    function loadNormalImage16() {
    var image = document.getElementById("img16");
    image.src = "<?php echo get_template_directory_uri(); ?>/images/h-icon/client.png";
    }	
</script>
<?php
	} else {
?>
<script type="text/javascript">		
    jQuery(document).ready(function($) {
//         for (let i = 1; i < 500; i++) {
//             $("#lightgallery_"+i ).lightGallery({
//             download: false,
//             counter: false,
//             hash: true,
            
//             galleryId: i,
// 			thumbnail:false
//             });			
//         }
//         new WOW().init();
		
// 		var gallery = $('#imagelightgallery'); 
// 		gallery.lightGallery({ 
// 			selector: '.zoom',
// 			thumbnail:false,
// 			download: false
// 		});

		// Fancybox Config
        $('[data-fancybox="awardsgallery"]').fancybox({
          buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close"
          ],
          loop: false,
          protect: true
        });
	
    });
	
// 	jQuery(document).keydown(function(event) {
// 	  if ( event.keyCode == 27 && window.location.href.endsWith("/") ) {
// 			goBackToSecondLast(); 			
// 			window.history.back();
// 		  console.log(window.location.href);
// 	  }
// 	});
	
	document.querySelector(".back-btn").addEventListener("click", function () { 
		var urlWin = window.location.href;
		if ( urlWin.includes("gulham") || urlWin.includes("cinema") || urlWin.includes("photography") || urlWin.includes("traveller") ) {
			window.location.href = "<?php echo home_url(); ?>/myself";
		} else if( urlWin.includes("portraits") || urlWin.includes("people") || urlWin.includes("religion") || urlWin.includes("connections") || urlWin.includes("animal") || urlWin.includes("experiments") ) {
			window.location.href = "<?php echo home_url(); ?>/photography";
		} else {
			goBackToSecondLast();
	 	}
    }); 
	
	function goBackToSecondLast() {
	  var newUrl = window.location.href.split('/').slice(0, -2).join('/');
	  window.location.href = newUrl;
	}  
		
	var myFullpage = new fullpage("#fullpage", {
        slidesNavigation: true,
        lazyLoad: true,
        responsiveWidth: 1024,
        credits: { enabled: false },
    }); 
    
</script>

<?php
	}
?>
<script>
	<?php if (wp_is_mobile() ) { ?>
		function delay (URL) {
			setTimeout( function() { window.location = URL }, 3000 );
		}
	<?php  } else { ?>
		function delay (URL) {
			setTimeout( function() { window.location = URL }, 0 );
		}
	<?php } ?>
</script>

</div><!-- page-wrapper -->

</body>
</html>