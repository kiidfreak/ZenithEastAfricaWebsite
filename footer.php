<footer id="footer" class="footer style_1">
    <div class="widgets_row">
        <div class="container">
            <div class="footer_widgets">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="footer_logo">
                            <a href="index.php" class="mb-3 d-flex">
                                <img src="img/ZenithTest2.png" alt="" width="170px;">
                            </a>
                            <p>Zenith collaboratively works together to Ignite Change through:</p>
                              <p> &gt; Disruptive Thinking</p>
                              <p> &gt; Strategic Planning</p>
                              <p> &gt; Execution for Positive Impact</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <section id="nav_menu-2" class="widget widget_nav_menu">
                            <h4 class="widget_title">Get in touch with us</h4>
                            <div class="contactsinfo" id="contacttext" style="color: #fff;">
                                <span>Call us on:</span><br/><br/>
                                <a style="color: #fff;" href="tel:+254794030408"> +254 794030408 </a><br/>
                                <a style="color: #fff;" href="tel:+0204402222"> 020 4402222 </a><br/>
                                <a style="color: #fff;" href="tel:+0204403333"> 020 4403333 </a><br/><br/>
                                <span>Email:</span><br/>
                                <a style="color: #fff;" href="mailto:info@zenitheastafrica.com">info@zenitheastafrica.com</a>
                            </div>
                        </section>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <section class="form_widget">
                            <h4 class="widget_title">Subscribe</h4>
                            <form action="https://formsubmit.co/imaina671@gmail.com" method="POST" role="form" class="php-email-form">
                                <input type="hidden" name="_next" value="Zenith - Promotional Emails">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Enter your email" required="">
                                    <span class="input-group-btn">
                                        <button class="btn" title="Submit" type=""><i class="far fa-envelope"></i></button>
                                    </span>
                                </div>
                                <p>Get latest updates about Zenith</p>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright_row">
        <div class="container">
            <div class="copyright_row_wr">
                <div class="socials">
                    <ul>
                    <li>
                            <a href="#" target="_blank" class="social-twitter-x">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="social-linkedin">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="copyright">&copy; 2024 <a href="" target="_blank">Zenith East Africa</a></div>
            </div>
        </div>
    </div>
</footer>

<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: block;">
<i class="fas fa-long-arrow-alt-up"></i></a>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/wow.min.js"></script>
<script type="text/javascript" src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/rev-slider/jquery.themepunch.tools.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
      <!-- word splitter js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/jquery.gsap.min.js" integrity="sha512-K43Gi6p1AN9cBmgnY3XE1ii0wc2Rl4dArjMgYeXpYmLSZGA7jXWcX4Drj52m2K9js6qHSRQoYlKyO4sSr3nbSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
<script>
/**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  </script>

<script>
    $(document).ready(function () {
        // Hover event for top-level dropdowns
        $(".nav-item.dropdown").mouseenter(function () {
            if (!$(this).hasClass('show')) {
                $(this).addClass("show");
                $(this).find('.dropdown-menu').first().addClass("show");
            }
        });

        $(".nav-item.dropdown").mouseleave(function () {
            if ($(this).hasClass('show')) {
                $(this).removeClass("show");
                $(this).find('.dropdown-menu').removeClass("show");
            }
        });

        // Hover event for sub-dropdowns
        $(".nav-item.dropdown-submenu").mouseenter(function () {
            $(this).parent('.nav-item.dropdown').addClass("show");
            $(this).find('.dropdown-menu').addClass("show");
        });

        $(".nav-item.dropdown-submenu").mouseleave(function () {
            $(this).parent('.nav-item.dropdown').removeClass("show");
            $(this).find('.dropdown-menu').removeClass("show");
        });
    });
</script>




<script>
   $(document).ready(function($) {
        var $element = $('.counter');
   if ($element.length > 0) {
       $element.counterUp({
           delay: 10,
           time: 1000
       });
   }
   });
</script>
<script>
   $('.testimonial-slider').slick({
     slidesToShow:3,
     dots:false,
     arrows: true,
     autoplay:false,
     autoplaySpeed:3000,
     prevArrow: '<i class="fas fa-chevron-left prev"></i>',
     nextArrow: '<i class="fas fa-chevron-right next"></i>',
     swipe: true,
       swipeToSlide: true,
      responsive: [{
         breakpoint: 1024,
         settings: {
           slidesToShow:2,
           slidesToScroll: 1,
           // centerMode: true,
         }
       }, {
         breakpoint: 800,
         settings: {
           slidesToShow:2,
           slidesToScroll: 2,
           dots:false,
           infinite: true,
   
         }
       },  {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           dots:false,
           infinite: true,
           autoplay: true,
           autoplaySpeed: 2000,
         }
       }]
   
   
   });
   
     
</script>
<script>
   $('.client-slider').slick({
     slidesToShow:6,
     dots:false,
     arrows: true,
     autoplay:true,
     autoplaySpeed:2000,
     prevArrow: '<i class="fas fa-chevron-left prev"></i>',
     nextArrow: '<i class="fas fa-chevron-right next"></i>',
     swipe: true,
       swipeToSlide: true,
      responsive: [{
         breakpoint: 1024,
         settings: {
           slidesToShow:4,
           slidesToScroll: 1,
           centerMode: true,
         }
       }, {
         breakpoint: 800,
         settings: {
           slidesToShow:3,
           slidesToScroll: 2,
           dots:false,
           infinite: true,
   
         }
       },  {
         breakpoint: 480,
         settings: {
           slidesToShow: 2,
           slidesToScroll: 1,
           dots:false,
           infinite: true,
           autoplay: true,
           autoplaySpeed: 2000,
         }
       }]
   
   
   });
   
     
</script>
<script>
   $('.project-slider').slick({
     slidesToShow:4,
     dots:false,
     arrows: true,
     autoplay:false,
     autoplaySpeed:3000,
     prevArrow: '<i class="fas fa-chevron-left prev"></i>',
     nextArrow: '<i class="fas fa-chevron-right next"></i>',
     swipe: true,
       swipeToSlide: true,
      responsive: [{
         breakpoint: 1024,
         settings: {
           slidesToShow:3,
           slidesToScroll: 1,
           // centerMode: true,
         }
       }, {
         breakpoint: 800,
         settings: {
           slidesToShow:2,
           slidesToScroll: 2,
           dots:false,
           infinite: true,
   
         }
       },  {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           dots:false,
           infinite: true,
           autoplay: true,
           autoplaySpeed: 2000,
         }
       }]
   
   
   });
   
     
</script>
<script src="js/wow.min.js"></script>
<script>
   new WOW().init();
</script>
<script>
   $('.blog-slider').slick({
       speed: 500,
       slidesToShow:2,
       slidesToScroll:1,
       autoplay: true,
       autoplaySpeed: 2000,
       dots:true,
       responsive: [{
         breakpoint: 1024,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           // centerMode: true,
         }
       }, {
         breakpoint: 800,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 2,
           dots:false,
           infinite: true,
   
         }
       },  {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           dots:false,
           infinite: true,
           autoplay: true,
           autoplaySpeed: 2000,
         }
       }]
   });
     
</script>
<script>
   $(document).ready(function(){
   $(window).scroll(function(){//scroll--top---indicator---arrow-jquery----//
    if($(window).scrollTop() > 600){//---position---600----px scroll-----//
     $("#scrollUp").fadeIn();
    }
    else{
     $("#scrollUp").css("display","none");
    }
   });
   });
   
</script>
<script>
   $(document).ready(function(){
       	$(window).scroll(function(){
   	if($(window).scrollTop() < 90){ //-navbar-----scrolltop---fixed---jquery--/
   		$('#navigation').removeClass('navbar-scroll');
   	} 
   	else {
   	   $('#navigation').addClass('navbar-scroll');
   	}
   });
   
   });
   
</script>
<script type="text/javascript">
   jQuery(document).ready(function() {
   	   // revolution slider
       var revapi;
       revapi = jQuery( '#revolution-slider-half' )
           .revolution( {
               delay:9000,
               startwidth:1170,
               startheight:570,
               onHoverStop: "on",
               thumbWidth: 100,
               thumbHeight: 50,
               thumbAmount: 3,
               touchenabled: "on",
               stopAtSlide: -1,
               stopAfterLoops: -1,
               touchenabled: "on",
               navigationType:"none",
               navigationArrows:"solo",
               navigationStyle:"preview1",
               touchenabled:"on",
               onHoverStop:"on",
               swipe_velocity: 0.7,
               swipe_min_touches: 1,
               swipe_max_touches: 1,
               drag_block_vertical: false,                                 
               keyboardNavigation:"on",
               navigationHAlign:"center",
               navigationVAlign:"bottom",
               navigationHOffset:0,
               navigationVOffset:20,
               soloArrowLeftHalign:"left",
               soloArrowLeftValign:"center",
               soloArrowLeftHOffset:20,
               soloArrowLeftVOffset:0,
               soloArrowRightHalign:"right",
               soloArrowRightValign:"center",
               soloArrowRightHOffset:20,
               soloArrowRightVOffset:0,
               dottedOverlay: "",
               fullWidth: "on",
               stopAfterLoops:0,
               stopAtSlide:1,
               shadow: 0
           } );
   
           revapi = jQuery( '#revolution-slider-full' )
           .revolution( {
               delay:9000,
               startwidth:960,
               startheight:630,
               onHoverStop: "on",
               thumbWidth: 100,
               thumbHeight: 50,
               thumbAmount: 3,
               touchenabled: "on",
               stopAtSlide: -1,
               stopAfterLoops: -1,
               touchenabled: "on",
               navigationType:"none",
               navigationArrows:"solo",
               navigationStyle:"preview1",
               touchenabled:"on",
               onHoverStop:"on",
               swipe_velocity: 0.7,
               swipe_min_touches: 1,
               swipe_max_touches: 1,
               drag_block_vertical: false,                                 
               keyboardNavigation:"on",
               navigationHAlign:"center",
               navigationVAlign:"bottom",
               navigationHOffset:0,
               navigationVOffset:20,
               soloArrowLeftHalign:"left",
               soloArrowLeftValign:"center",
               soloArrowLeftHOffset:20,
               soloArrowLeftVOffset:0,
               soloArrowRightHalign:"right",
               soloArrowRightValign:"center",
               soloArrowRightHOffset:20,
               soloArrowRightVOffset:0,
               dottedOverlay: "",
               fullWidth: "on",
               fullScreen:"on",
               stopAfterLoops:0,
               stopAtSlide:1,
               shadow: 0
           } );
   
           // revolution slider ver 2
           var revext=jQuery;
           var revapi;
           revext(document).ready(function() {
               if(revext("#rev-commerce").revolution == undefined){
                   revslider_showDoubleJqueryError("#rev-commerce");
               }else{
                       revapi = revext("#rev-commerce").show().revolution({
                       sliderType:"standard",
                       jsFileLocation:"revolution/js/",
                       sliderLayout:"auto",
                       dottedOverlay:"none",
                       delay:9000,
                       navigation: {
                       keyboardNavigation:"off",
                       keyboard_direction: "horizontal",
                       mouseScrollNavigation:"off",
                       mouseScrollReverse:"default",
                       onHoverStop:"on",
                       touch:{
                       touchenabled:"on",
                       swipe_threshold: 75,
                       swipe_min_touches: 50,
                       swipe_direction: "horizontal",
                       drag_block_vertical: false
                       }
                       ,
                       arrows: {
                       style:"gyges",
                       enable:true,
                       hide_onmobile:false,
                       hide_onleave:false,
                       tmp:'',
                       left: {
                       h_align:"right",
                       v_align:"bottom",
                       h_offset:160,
                       v_offset:0
                       },
                       right: {
                       h_align:"right",
                       v_align:"bottom",
                       h_offset:80,
                       v_offset:0
                       }
                       }
                       },
                       responsiveLevels:[1240,1024,778,480],
                       visibilityLevels:[1240,1024,778,480],
                       gridwidth:[1200,1024,778,480],
                       gridheight:[600,600,600,600],
                       lazyType:"single",
                       parallax: {
                       type:"scroll",
                       origo:"slidercenter",
                       speed:400,
                       levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
                       type:"scroll",
                       },
                       shadow:0,
                       spinner:"off",
                       stopLoop:"off",
                       stopAfterLoops:-1,
                       stopAtSlide:-1,
                       shuffle:"off",
                       autoHeight:"off",
                       disableProgressBar:"on",
                       hideThumbsOnMobile:"off",
                       hideSliderAtLimit:0,
                       hideCaptionAtLimit:0,
                       hideAllCaptionAtLilmit:0,
                       debugMode:false,
                       fallbacks: {
                       simplifyAll:"off",
                       nextSlideOnWindowFocus:"off",
                       disableFocusListener:false,
                       }
                     });
                   }
               });
   
   });
</script>
</body>
</html>
