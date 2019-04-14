<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/js/navigation.js"></script>

<script>

    // Activate animation
    $.fn.scrollFadeIn = function() {

        var windowHeight = $(window).height(),
            windowHalf = windowHeight / 1.2,
            windowTop = $(window).scrollTop(),
            windowBottom = windowTop + windowHeight,
            elm = this;

        $(window).on('scroll', function(){

            // Update window scroll positions
            windowTop = $(window).scrollTop();
            windowBottom = windowTop + windowHeight;

            $.each(elm, function(){
                var top = $(this).offset().top;
                var percent = opacity = (windowBottom - top) / windowHalf;
                if(percent < 0) {
                    opacity = 0;
                } else if(percent > 1) {
                    opacity = 1;
                } else {
                    opacity = percent;
                }
                $(this).css('opacity', opacity);
            });
        });

        /* If the window size changes update stored variables */
        $(window).resize(function(){
            windowHeight = $(window).height();
            windowHalf = windowHeight / 2;
        });

    };

    $('#timeline .box').scrollFadeIn();

    // Desktop Navigation - Scroll to

    $('#main').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 1000,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing',
        begin: function() {},
        end: function() {},
        scrollChange: function($currentListItem) {}
    });

    // Desktop Navigation - Sticky header

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 65) {
            $(".sticky").addClass("color");
        } else {
            $(".sticky").removeClass("color");
        }
    });

    $(document).ready(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 65) {
            $(".sticky").addClass("color");
        } else {
            $(".sticky").removeClass("color");
        }
    });

    // Level columns

    $(document).ready(function(){

        // Select and loop the container element of the elements you want to equalise
        $('.team').each(function(){

          // Cache the highest
          var highestBox = 0;

          // Select and loop the elements you want to equalise
          $('.level', this).each(function(){

            // If this box is higher than the cached highest then store it
            if($(this).height() > highestBox) {
              highestBox = $(this).outerHeight();
            }

          });

          // Set the height of all those children to whichever was highest
          $('.level',this).height(highestBox);

        });
    });

</script>
