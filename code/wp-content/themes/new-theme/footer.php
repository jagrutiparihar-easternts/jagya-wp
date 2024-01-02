<?php wp_footer(); ?>
<?php
	if (is_front_page()) {
?>	
<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
	<i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
    // Array of colors
    const gridColors = ["#3b2f28", "#323137", "#5a3f3e", "#50575f"];
    const colors = ["#271c16", "#162127", "#472323", "#1d4148"];

    // Get the index of the last used color from local storage or set it to 0
    let lastIndex = parseInt(localStorage.getItem("lastIndex")) || 0;

    // Set the background color of the body to the next color in the array
    // document.body.style.backgroundColor = colors[lastIndex];
    // document.body.style.backgroundImage = `linear-gradient(${gridColors[lastIndex]} 0.1em, transparent 0.1em), linear-gradient(90deg, ${gridColors[lastIndex]} 0.1em, transparent 0.1em)`;

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
    var myFullpage = new fullpage("#fullpage", {
        slidesNavigation: true,
        lazyLoad: true,
        credits: { enabled: false },
    });
    document
        .querySelector(".back-btn")
        .addEventListener("click", function () {
        // Navigate to the previous page in the browsing history
        window.history.back();
    });
</script>
<script>
jQuery(function ($) {

var $container = $('#isotope-list'); //The ID for the list with all the blog posts
$container.isotope({ //Isotope options, 'item' matches the class in the PHP
    itemSelector : '.item_select', 
    layoutMode : 'masonry'
});

//Add the class selected to the item that is clicked, and remove from the others
var $optionSets = $('#filters'),
$optionLinks = $optionSets.find('a');

$optionLinks.click(function(){
var $this = $(this);
// don't proceed if already selected
if ( $this.hasClass('selected') ) {
  return false;
}
var $optionSet = $this.parents('#filters');
$optionSets.find('.selected').removeClass('selected');
$this.addClass('selected');

//When an item is clicked, sort the items.
 var selector = $(this).attr('data-filter');
$container.isotope({ filter: selector });

return false;
});

});    
</script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        for (let i = 1; i < 500; i++) {
            $("#lightgallery_"+i ).lightGallery({
            download: true,
            counter: false,
            hash: true,
            galleryId: i,	
			thumbnail:false
            });
        }
        new WOW().init();
    });
</script>

<?php
	}
?>

</div><!-- page-wrapper -->

</body>
</html>