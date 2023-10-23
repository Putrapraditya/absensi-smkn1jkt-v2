/**
 * @author uiocean
 * @version 1.0
 *
 */
(function($) {
    "use strict";
    var CRIK = {};
    $.fn.exists = function() {
        return this.length > 0;
    };


    /*--------------------
      * Menu toogle header
    ----------------------*/
    CRIK.MenuToggleClass = function() {
        $('.navbar-toggler').on('click', function() {
            var toggle = $('.navbar-toggler').is(':visible');
            if (toggle) {
                $('header').toggleClass('header-toggle');
            }
        })
    }

    /*--------------------
        * Menu Close
    ----------------------*/
    CRIK.MenuClose = function(){
      $('.one-page-nav a').on('click', function() {
       var toggle = $('.navbar-toggler').is(':visible');
       if (toggle) {
         $('.navbar-collapse').collapse('hide');
       }
      });
    }


    /* ---------------------------------------------- /*
     * Header height
    /* ---------------------------------------------- */
    CRIK.HeaderHeight = function() {
        var HHeight = $('.navbar').outerHeight()
        $('.header-height').css("min-height", HHeight);
    }


    /*--------------------
    * Typed
    ----------------------*/
    CRIK.typedbox = function() {
        var typedjs = $('.typed');
        if (typedjs.length > 0) {
            typedjs.each(function() {
                var $this = $(this);
                $this.typed({
                    strings: $this.attr('data-elements').split(','),
                    typeSpeed: 150, // typing speed
                    backDelay: 500 // pause before backspacing
                });
            });
        }
    }


    /* ---------------------------------------------- /*
     * lightbox gallery
    /* ---------------------------------------------- */
    CRIK.Gallery = function() {
        var GalleryPopup = $('.lightbox-gallery');
        if (GalleryPopup.length > 0) {
            $('.lightbox-gallery').magnificPopup({
                delegate: '.gallery-link',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-fade',
                fixedContentPos: true,
                closeBtnInside: false,
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after CRE current image
                }
            });
        }
        var VideoPopup = $('.video-btn');
        if (VideoPopup.length > 0) {
            $('.video-btn').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        }
    }

    /*--------------------
    * Masonry
    ----------------------*/
    CRIK.masonry = function() {
        var portfolioWork = $('.portfolio-content');
        if (portfolioWork.length > 0) {
            $(portfolioWork).isotope({
                resizable: false,
                itemSelector: '.grid-item',
                layoutMode: 'masonry',
                filter: '*'
            });
            //Filtering items on portfolio.html
            var portfolioFilter = $('.filter li');
            // filter items on button click
            $(portfolioFilter).on('click', function() {
                var filterValue = $(this).attr('data-filter');
                portfolioWork.isotope({
                    filter: filterValue
                });
            });
            //Add/remove class on filter list
            $(portfolioFilter).on('click', function() {
                $(this).addClass('active').siblings().removeClass('active');
            });
        }
    }

    /*--------------------
        * Progress Bar 
    ----------------------*/
    CRIK.ProgressBar = function() {
        $(".skill-bar .skill-bar-in").each(function() {
            var bottom_object = $(this).offset().top + $(this).outerHeight();
            var bottom_window = $(window).scrollTop() + $(window).height();
            var progressWidth = $(this).attr('aria-valuenow') + '%';
            if (bottom_window > bottom_object) {
                $(this).css({
                    width: progressWidth
                });
            }
        });
    }

    /*--------------------
        * One Page
    ----------------------*/
    CRIK.one_page = function() {
        //var HHeight = $('.navbar').outerHeight();
        var $one_page_nav = $('.one-page-nav');
        if($one_page_nav.length > 0) {
            $one_page_nav.each(function(){
                $.scrollIt({
                  upKey: 38,             // key code to navigate to the next section
                  downKey: 40,           // key code to navigate to the previous section
                  easing: 'linear',      // the easing function for animation
                  scrollTime: 600,       // how long (in ms) the animation takes
                  activeClass: 'active', // class given to the active nav element
                  onPageChange: null,    // function(pageIndex) that is called when page is changed
                  topOffset: -70           // offste (in px) for fixed top navigation
                });
            });
        }
    }

    // Window on Load
    $(window).on("load", function() {
        CRIK.masonry();
    });
    // Document on Ready
    $(document).ready(function() {
        CRIK.MenuToggleClass(),
        CRIK.MenuClose(),
        CRIK.Gallery(),
        CRIK.HeaderHeight(),
        CRIK.ProgressBar(),
        CRIK.typedbox(),
        CRIK.one_page();
    });

    // Document on Scrool
    $(window).scroll(function() {
        CRIK.ProgressBar();
    });

    // Window on Resize
    $(window).resize(function() {
        CRIK.HeaderHeight();
    });

})(jQuery);