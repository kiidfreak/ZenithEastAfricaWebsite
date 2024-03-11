<?php include("header.php");?>

   <style type="text/css">
      .img-fluid1 {
      max-width: 100%;
      height: auto
   }
   .img-fluid {
      max-width: 100%;
      height: 75px;
   }
   #introtitle {
      top: 8%;
      position: absolute;
      color: #fff;
      font-size: 35px;
      z-index: 100;
      justify-content: left;
      display: flex;
      padding-left: 50px;
    }

    /* Responsive adjustments for smaller screens */
    @media only screen and (max-width: 767px) {
      #introtitle {
        font-size: 20px !important; /* Add !important to ensure the style takes precedence */
        padding-left: 20px; /* Adjust padding for better alignment */
      }
    }
    
    /* Responsive adjustments for smaller screens */
    @media only screen and (max-width: 767px) {
      .tp-caption.slide-big-heading {
        padding-left: 60px !important; /* Adjusted padding for smaller screens */
        padding-top: 136px !important; /* Adjusted padding for smaller screens */
      }
    }
   </style>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">

<script>
  $(document).ready(function() {
    // Handle click event on the icon
    $("#servicesDropdown").on("click", function() {
      // Load content from overlay.php
      $.get("overlay.php", function(data) {
        // Create an overlay and insert the content
        var overlay = $("<div id='overlay' class='overlay'><i class='fas fa-times' id='close-icon'></i><h2>Sectors We Offer Services To</h2></div>");
        overlay.html(data);

        // Append the overlay to the body
        $("body").append(overlay);

        // Close overlay when clicking on the close icon
        $("#close-icon").on("click", function() {
          overlay.remove();
        });

        // Set overlay styles
        overlay.css({
          "position": "fixed",
          "top": 0,
          "left": 0,
          "width": "100%",
          "height": "100%",
          "background-color": "rgba(0, 0, 0, 0.8)",
          "pointer-events": "auto", // Enable pointer events on the overlay
          "z-index": 10000 // Set a high z-index value to ensure the overlay is on top
        });

        // Show the overlay with a fade-in effect
        overlay.fadeIn();
      });
    });
  });
</script>







<div class="slider-section">
   
   <!-- revolution slider -->
   <section class="no-top no-bottom" aria-label="section-slider">

   <!-- home -->
      <div class="fullwidthbanner-container">
         <div id="revolution-slider-half">
            
            <ul>
               
               <li data-transition="random" data-slotamount="10" data-masterspeed="1200" data-delay="5000">

                  <!--  BACKGROUND IMAGE -->
                     <img src="img/slider/slider4.png" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center center" />
                     

                     <div class="tp-caption slide-big-heading sft" 
                     
                              data-x="50%" 
                              data-y="130" 
                              data-speed="800" 
                              data-start="400" 
                              data-easing="easeInOutExpo" 
                              data-endspeed="450"
                              style="text-align: center; display: flex; align-items: center; justify-content: center; padding-left:20%; padding-top:360px;">
                              
                           <span id="strategy" style="color:#B2810B;"></span>
                           <span id="arrow1" class="arrow" style="opacity: 0;">&gt;</span>
                           <span id="execution"></span>
                           <span id="arrow2" class="arrow" style="opacity: 0;">&gt;</span>
                           <span id="outcomes" style="color:#B2810B;"></span>


                           
                     </div>

                     

                     <br/>
                        <h2 id="introtitle" style="top: 8%;position: absolute;color: #fff;font-size: 35px; z-index: 100;justify-content: left;display: flex;padding-left: 50px;" >Building impactful businesses<br/> and brands across Africa
                        </h2>


                        <script>  gsap.registerPlugin(TextPlugin);

                           function typeWriter(target, text) {
                           return gsap.to(target, {
                              text: {
                                 value: text,
                                 delimiter: ""
                              },
                              duration: text.length * 0.2, // Adjust speed as needed
                              ease: "power1.inOut"
                           });
                           }

                           const masterTimeline = gsap.timeline({
                           repeat: -1, // Set to -1 for infinite repeat
                           repeatDelay: 4, // Repeat every 5 seconds
                           });

                           // Initial typewriting with opacity
                           masterTimeline.add(typeWriter("#strategy", "STRATEGY"));
                           masterTimeline.to("#arrow1", { opacity: 1, duration: 0.5 });
                           masterTimeline.add(typeWriter("#arrow1", "&gt;"));
                           masterTimeline.to("#arrow1", { opacity: 1, duration: 0.5 });

                           // Arrow 2 typewriting with opacity
                           masterTimeline.add(typeWriter("#execution", "EXECUTION"));
                           masterTimeline.to("#arrow2", { opacity: 1, duration: 0.5 });
                           masterTimeline.add(typeWriter("#arrow2", "&gt;"));
                           masterTimeline.to("#arrow2", { opacity: 1, duration: 0.5 });

                           // "OUTCOMES" typewriting with opacity
                           masterTimeline.add(typeWriter("#outcomes", "OUTCOMES"));
                           masterTimeline.to("#arrow1", { opacity: 1, duration: 0.5 });
                           masterTimeline.add(typeWriter("#arrow1", "&gt;"));
                           masterTimeline.to("#arrow1", { opacity: 1, duration: 0.5 });

                           // Blinking effect before repeating
                           const blinkTimeline = gsap.timeline({ delay: 2 }); // Delay before blinking
                           blinkTimeline.to("#arrow1", { opacity: 0, duration: 0.2 })
                           .to("#arrow1", { opacity: 1, duration: 0.2 })
                           .to("#arrow2", { opacity: 0, duration: 0.2 })
                           .to("#arrow2", { opacity: 1, duration: 0.2 });

                           masterTimeline.add(blinkTimeline);
                           </script>


                        <script>
                           function navigateToSection() {
                              // Use window.location.href to navigate to the specified section
                              window.location.href = "#sections";
                           }

                        </script>

                        <!-- Slide 2 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" data-delay="7000">
               <!-- BACKGROUND IMAGE FOR SLIDE 2 -->
               <img src="img/slider/slider4.png" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center center" />

               <!-- Slide 2 content -->
               <div class="tp-caption slide-big-heading sft" 
                    data-x="50%" 
                    data-y="130" 
                    data-speed="800" 
                    data-start="400" 
                    data-easing="easeInOutExpo" 
                    data-endspeed="450"
                    style="text-align: center; display: flex; align-items: center; justify-content: center; padding-left:20%; padding-top:360px;">
                    <span id="strategy" style="color:#B2810B;"></span>
                           <span id="arrow1" class="arrow" style="opacity: 0;">&gt;</span>
                           <span id="execution"></span>
                           <span id="arrow2" class="arrow" style="opacity: 0;">&gt;</span>
                           <span id="outcomes" style="color:#B2810B;"></span>


                           
                     </div>

                     

                     <br/>
                        <h2 id="introtitle" style="top: 8%;position: absolute;color: #fff;font-size: 35px; z-index: 100;justify-content: left;display: flex;padding-left: 50px;" >Building impactful businesses<br/> and brands across Africa
                        </h2>


                        <script>  gsap.registerPlugin(TextPlugin);

                           function typeWriter(target, text) {
                           return gsap.to(target, {
                              text: {
                                 value: text,
                                 delimiter: ""
                              },
                              duration: text.length * 0.2, // Adjust speed as needed
                              ease: "power1.inOut"
                           });
                           }

                           const masterTimeline = gsap.timeline({
                           repeat: -1, // Set to -1 for infinite repeat
                           repeatDelay: 4, // Repeat every 5 seconds
                           });

                           // Initial typewriting with opacity
                           masterTimeline.add(typeWriter("#strategy", "STRATEGY"));
                           masterTimeline.to("#arrow1", { opacity: 1, duration: 0.5 });
                           masterTimeline.add(typeWriter("#arrow1", "&gt;"));
                           masterTimeline.to("#arrow1", { opacity: 1, duration: 0.5 });

                           // Arrow 2 typewriting with opacity
                           masterTimeline.add(typeWriter("#execution", "EXECUTION"));
                           masterTimeline.to("#arrow2", { opacity: 1, duration: 0.5 });
                           masterTimeline.add(typeWriter("#arrow2", "&gt;"));
                           masterTimeline.to("#arrow2", { opacity: 1, duration: 0.5 });

                           // "OUTCOMES" typewriting with opacity
                           masterTimeline.add(typeWriter("#outcomes", "OUTCOMES"));
                           masterTimeline.to("#arrow1", { opacity: 1, duration: 0.5 });
                           masterTimeline.add(typeWriter("#arrow1", "&gt;"));
                           masterTimeline.to("#arrow1", { opacity: 1, duration: 0.5 });

                           // Blinking effect before repeating
                           const blinkTimeline = gsap.timeline({ delay: 2 }); // Delay before blinking
                           blinkTimeline.to("#arrow1", { opacity: 0, duration: 0.2 })
                           .to("#arrow1", { opacity: 1, duration: 0.2 })
                           .to("#arrow2", { opacity: 0, duration: 0.2 })
                           .to("#arrow2", { opacity: 1, duration: 0.2 });

                           masterTimeline.add(blinkTimeline);
                           </script>
               </li>
            </ul>
            <div class="tp-bannertimer hide"></div>
         </div>
      </div>
      <!-- home end -->
   </section>
   <!-- revolution slider end -->
</div>

<section class="parallax-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="vc_custom_heading text_align_center">
               <h4 style="font-size: 28px;color: #B2810B;line-height: 34px;text-align: center"
                  class="consulting-custom-title">In today’s rapidly evolving economic and business landscape, it is imperative for organizations to adopt a broader comprehensive approach that effectively meets the continually evolving needs and priorities of their consumers and stakeholders.</h4>
            </div>
         </div>
      </div>
   </div>
</section>

<div id="services">
<section class="service what-bg">
<br/>
   <br/>
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="about-info sec-padd text-center mb-5">
               <div class="section-title">
                  <h3 style="align-content: start; font-size:40px; display:flex; color:black;" >What we Offer</h3>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item">
               <div class="we-icon">
               <i class="fa-solid fa-bullseye"></i>
               </div>
               <div class="we-desc">
                  <h4 class="we-title">Brand Strategy</h4>
                  <!-- <P>We blend Ubuntu spirit with profit strategies, fostering prosperity that echoes in community bonds.</p> -->
               </div>
            </div>
         </div>
         <div class=" col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item">
               <div class="we-icon">
               <i class="fa-solid fa-bullhorn"></i>
               </div>
               <div class="we-desc">
                  <h4 class="we-title">Advertising</h4>
                  <!-- <P>Our advisory harmonizes philanthropy, weaving compassion and empowerment into impactful strategies for non-profits.</p> -->
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item">
               <div class="we-icon">
               <i class="fa-solid fa-microphone"></i>
               </div>
               <div class="we-desc">
                  <h4 class="we-title">Public Relations</h4>
                  <!-- <P>Amplify voices, foster inclusivity, and nurture positive change – our advisory resonates with East Africa's vibrant tapestry.</p> -->
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item">
               <div class="we-icon">
               <i class="fa-solid fa-tty"></i>
               </div>
               <div class="we-desc">
                  <h4 class="we-title">Development Communication</h4>
                  <!-- <P>Cultivate culturally rooted, socially impactful enterprises for a lasting legacy of sustainable progress and positive community influence.</p> -->
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item">
               <div class="we-icon">
               <i class="fa-solid fa-comments"></i>
               </div>
               <div class="we-desc">
                  <h4 class="we-title">Investor Advisory</h4>
                  <!-- <P>Guiding public leaders with Ubuntu, shaping governance that uplifts and resonates with the diverse aspirations of East Africa.</p> -->
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item">
               <div class="we-icon">
               <i class="fa-solid fa-seedling"></i>
               </div>
               <div class="we-desc">
                  <h4 class="we-title">Sustainable Communication & ESG Reporting</h4>
                  <!-- <P>Discover tailored advisory solutions for unique sectors, crafted with cultural resonance and global competence.</p> -->
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</div>


<section class="parallax-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="vc_custom_heading text_align_center">
               <h4 style="font-size: 28px;color: #B2810B;line-height: 34px;text-align: center"
                  class="consulting-custom-title">Our commitment is grounded in the belief that the coexistence of profitable enterprises, while being a force for good in our society is not just a possibility but a business imperative.
               </h4>
            </div>
         </div>
      </div>
   </div>


<br/>
   <br/>
   <div class="container">
      <div class="row">
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item1">
               <div class="we-icon1">
               <i class="fa-solid fa-people-group" style="color:white"></i>
               </div>
               <div class="we-desc1">
                  <h4 class="we-title1">People</h4>
                  <!-- <P>We blend Ubuntu spirit with profit strategies, fostering prosperity that echoes in community bonds.</p> -->
               </div>
            </div>
         </div>
         <div class=" col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item1">
               <div class="we-icon1">
               <i class="fa-solid fa-brain" style="color:white"></i>
               </div>
               <div class="we-desc1">
                  <h4 class="we-title1">Practice</h4>
                  <!-- <P>Our advisory harmonizes philanthropy, weaving compassion and empowerment into impactful strategies for non-profits.</p> -->
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item1">
               <div class="we-icon1">
               <i class="fa-solid fa-chart-simple" style="color:white"></i>
               </div>
               <div class="we-desc1">
                  <h4 class="we-title1">Perfomance</h4>
                  <!-- <P>Amplify voices, foster inclusivity, and nurture positive change – our advisory resonates with East Africa's vibrant tapestry.</p> -->
               </div>
            </div>
         </div>
         <div class="row justify-content-center" style="width: 100%;">
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item1">
               <div class="we-icon1">
               <i class="fa-solid fa-earth-africa" style="color:white"></i>
               </div>
               <div class="we-desc1">
                  <h4 class="we-title1">Planet</h4>
                  <!-- <P>Cultivate culturally rooted, socially impactful enterprises for a lasting legacy of sustainable progress and positive community influence.</p> -->
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item1">
               <div class="we-icon1">
               <i class="fa-solid fa-group-arrows-rotate" style="color:white"></i>
               </div>
               <div class="we-desc1">
                  <h4 class="we-title1">Impact</h4>
                  <!-- <P>Guiding public leaders with Ubuntu, shaping governance that uplifts and resonates with the diverse aspirations of East Africa.</p> -->
               </div>
            </div>
         </div>
</div>
         </div>
      </div>
   </section>


<div id=our-clients>
   <br/>
   <br/>

   <div class="about-info sec-padd text-center mb-5" style="margin-bottom: 0 !important;">
      <div class="section-title">
         <h2>Our Clients</h2>
      </div>
   </div>


<section class="client-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="client-outer">
               <div class="slick-slider client-slider" style="height: 230px !important;">

               <div class="item wow slideInLeft" data-wow-delay=".1s">
                     <img src="img/client/dow.png" class="img-fluid1" alt="Imageteam" style="padding-top: 15px;">
                  </div>

                  <div class="item wow slideInLeft" data-wow-delay=".1s">
                     <img src="img/client/kh.jpeg" class="img-fluid1" alt="Imageteam">
                  </div>

                  <div class="item wow slideInLeft" data-wow-delay=".1s">
                     <img src="img/client/unityhomes.jpeg" class="img-fluid1" alt="Imageteam">
                  </div>

                  <div class="item wow slideInLeft" data-wow-delay=".1s">
                     <img src="img/client/weston.png" class="img-fluid1" alt="Imageteam">
                  </div>

                  <div class="item wow slideInLeft" data-wow-delay=".1s">
                     <img src="img/client/a.png" class="img-fluid1" alt="Imageteam">
                  </div>
                  <div class="item wow slideInLeft" data-wow-delay=".3s">
                     <img src="img/client/b.png" class="img-fluid1" alt="Imageteam" style="padding-top: 32px;">
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".5s">
                        <img src="img/client/c.png" class="img-fluid1" alt="Imageteam" style="padding-top: 15px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".9s">
                        <img src="img/client/d.png" class="img-fluid1" alt="Imageteam" style="padding-top: 8px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".10s">
                        <img src="img/client/e.png" class="img-fluid1" alt="Imageteam" style="padding-top: 7px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".1s">
                        <img src="img/client/f.png" class="img-fluid1" alt="Imageteam" style="padding-top: 20px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".1s">
                        <img src="img/client/g.png" class="img-fluid1" alt="Imageteam" style="padding-top: 25px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".1s">
                        <img src="img/client/h.jpg" class="img-fluid1" alt="Imageteam" style="padding-top: 0px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".1s">
                        <img src="img/client/j.png" class="img-fluid1" alt="Imageteam" style="padding-top: 0px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".1s">
                        <img src="img/client/k.jpeg" class="img-fluid1" alt="Imageteam" style="padding-top: 0px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".1s">
                        <img src="img/client/l.png" class="img-fluid1" alt="Imageteam" style="padding-top: 20px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".1s">
                        <img src="img/client/m.png" class="img-fluid1" alt="Imageteam" style="padding-top: 20px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".1s">
                        <img src="img/client/n.jpg" class="img-fluid1" alt="Imageteam" style="padding-top: 20px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".1s">
                        <img src="img/client/o.png" class="img-fluid1" alt="Imageteam" style="padding-top: 0px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".1s">
                        <img src="img/client/p.png" class="img-fluid1" alt="Imageteam" style="padding-top: 20px;">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".1s">
                        <img src="img/client/q.png" class="img-fluid1" alt="Imageteam" style="padding-top: 20px;">
                     </div>
                  </div>


            </div>
         </div>
      </div>
   </div>
</div>
</div>
</section>

<script>
   $(document).ready(function(){
      $('.client-slider').slick({
         centerMode: true,
         centerPadding: '0',
         slidesToShow: 3, // Adjust the number of slides shown at once
         responsive: [
            {
               breakpoint: 768,
               settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 1
               }
            }
         ]
      });
   });
		
</script>

<div id="blog">

</div>
<?php include("footer.php");?>
