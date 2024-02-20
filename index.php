<?php include("header.php");?>

   <style type="text/css">
      .img-fluid1 {
      max-width: 100%;
      height: auto
   }
   .img-fluid {
      max-width: 100%;
      height: 60px;
   }
   </style>

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
                              style="text-align: center; display: flex; align-items: center; justify-content: center; padding-left:19%">
                           <span id="strategy" style="color:#B2810B;"></span>
                           <span id="arrow1" class="arrow" style="opacity: 0;">&gt;</span>
                           <span id="execution"></span>
                           <span id="arrow2" class="arrow" style="opacity: 0;">&gt;</span>
                           <span id="outcomes" style="color:#B2810B;"></span>
                     </div>


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

<div class="tp-caption btn-slider sfb"
   data-x="center"
   data-y="300"
   data-speed="400"
   data-start="800"
   data-easing="easeInOutExpo">
   <span class="shine"></span><a href="#services" onclick="navigateToSection()">More Detail</a>
</div>

<script>
   function navigateToSection() {
      // Use window.location.href to navigate to the specified section
      window.location.href = "#sections";
   }

   // Your existing script
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
               <h4 style="font-size: 28px;color: #ffffff;line-height: 34px;text-align: center"
                  class="consulting-custom-title">In today’s<mark>rapidly evolving economic and business landscape, </mark>it is imperative for organizations to adopt a broader comprehensive approach that effectively meets the <mark>continually evolving needs and priorities</mark> of their consumers and stakeholders.</h4>
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
                  <h2>Sectors</h2>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item">
               <div class="we-icon">
                  <i class="fa-solid fa-money-bill"></i>
               </div>
               <div class="we-desc">
                  <h4 class="we-title">For-Profit Businesses</h4>
                  <!-- <P>We blend Ubuntu spirit with profit strategies, fostering prosperity that echoes in community bonds.</p> -->
               </div>
            </div>
         </div>
         <div class=" col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item">
               <div class="we-icon">
                  <i class="fa-solid fa-globe"></i>
               </div>
               <div class="we-desc">
                  <h4 class="we-title">Non-Profit Organisations</h4>
                  <!-- <P>Our advisory harmonizes philanthropy, weaving compassion and empowerment into impactful strategies for non-profits.</p> -->
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item">
               <div class="we-icon">
                  <i class="fa-solid fa-person-military-to-person"></i>
               </div>
               <div class="we-desc">
                  <h4 class="we-title">Civil Society Actors</h4>
                  <!-- <P>Amplify voices, foster inclusivity, and nurture positive change – our advisory resonates with East Africa's vibrant tapestry.</p> -->
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item">
               <div class="we-icon">
                  <i class="fa-solid fa-business-time"></i>
               </div>
               <div class="we-desc">
                  <h4 class="we-title">Social Profit Enterprises</h4>
                  <!-- <P>Cultivate culturally rooted, socially impactful enterprises for a lasting legacy of sustainable progress and positive community influence.</p> -->
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item">
               <div class="we-icon">
                  <i class="fa-solid fa-microphone"></i>
               </div>
               <div class="we-desc">
                  <h4 class="we-title">Public Authorities</h4>
                  <!-- <P>Guiding public leaders with Ubuntu, shaping governance that uplifts and resonates with the diverse aspirations of East Africa.</p> -->
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="we-do-item">
               <div class="we-icon">
                  <i class="fa-solid fa-earth-africa"></i>
               </div>
               <div class="we-desc">
                  <h4 class="we-title">And so much more..</h4>
                  <!-- <P>Discover tailored advisory solutions for unique sectors, crafted with cultural resonance and global competence.</p> -->
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</div>

<div id="about-us">
    <section class="about-faq sec-padd py-5">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2>Our Toolbox</h2>
            </div>
            <div class="row">
                    <div class="about-info text-center">
                        <h4>We translate insights into award-winning and disruptive strategies, craft innovative and
                            human-centric communication, that works across multiple channels transforming businesses and
                            brand performance, sustainably.</h4>
                        <br>
                        <div class="link_btn d-flex flex-wrap justify-content-center">
                            <span class="mx-2" style="color:#b2810b">Research</span>
                            <span class="mx-2" style="color:#000">Insights</span>
                            <span class="mx-2" style="color:#b2810b">Strategies</span>
                            <span class="mx-2" style="color:#000">Execution</span>
                            <span class="mx-2" style="color:#b2810b">Outcomes</span>
                        </div>
                        <br/>
                        <div class="text">
                            <p>
                                Rooted in extensive experience and diverse exposure in various sectors, our
                                methodologies untangle and challenge conventional solutions.
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
</div>



<div class="fun-facts pt-70 pb-100">
   <div class="container">
      <div class="row d-flex justify-content-center">
         <div class="col-md-12">
            <div class="vc_custom_heading no_stripe text-center  d-md-block counter-head
               text_align_left has_icon  mb-3">
               <h4 style="font-size:31px;color: #ffffff;line-height:37px;text-align:center" 
                  class="consulting-custom-title"><mark>Business</mark> skill</h4>
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-2 col-6">
            <div class="fun-facts-card">
               <div class="content text-center">
                  <span class="counter">25 </span><span style="color: #ffffff; font-size: 50px; font-weight: 700; margin: 0 0 0px; line-height: 60px;white-space: nowrap;"> +</span>
                  <div class="counter-title">Years in Practice</div>
               </div>
            </div>
         </div>
         <div class="col-lg-2  col-md-2 col-sm-4 col-6">
            <div class="fun-facts-card">
               <div class="content text-center">
                  <span class="counter">100 </span><span style="color: #ffffff; font-size: 50px; font-weight: 700; margin: 0 0 0px; line-height: 60px;white-space: nowrap;"> +</span>
                  <div class="counter-title">Clients Handled</div>
               </div>
            </div>
         </div>
         <div class="col-lg-2  col-md-2 col-sm-4 col-6">
            <div class="fun-facts-card">
               <div class="content text-center">
                  <span class="counter">25 </span><span style="color: #ffffff; font-size: 50px; font-weight: 700; margin: 0 0 0px; line-height: 60px;white-space: nowrap;"> +</span>
                  <div class="counter-title">Awards Recognized</div>
               </div>
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-6">
            <div class="fun-facts-card">
               <div class="content text-center">
                  <span class="counter">100 </span><span class="percentage" style="font-size:36px;
                     color:#fff; font-weight:600;">%<span>
                  <div class="counter-title">Satisfied Customers</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


   <div id="about-us">
<section class="about-faq sec-padd py-5">

   <div class="container">
      <div class="section-title text-center mb-5">
         <br/>
         <br/>
         <br/>
         
         <h2>About us</h2>
      </div>
      <div class="row">
         <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="about-info">
               <h4>Zenith East Africa is a Strategic C-Suite Advisory Firm offering discerning clients with specialist services.</h4>
               <br>
               <div class="text">
                  <p>At our core, we fervently believe in the harmonious
                     coexistence of profitability and social good. Grounded in
                     people-centric principles, we wholeheartedly adopt
                     practices that generate value for our stakeholders.
                  </p>
               </div>
               <div class="link_btn d-flex flex-wrap justify-content-center">
    <span class="mx-2" style="color:#8f7e5d">People</span>
    <span class="mx-2" style="color:#4db0e2">Practice</span>
    <span class="mx-2" style="color:#951c8a">Performance</span>
    <span class="mx-2" style="color:#e7a520">Planet</span>
    <span class="mx-2" style="color:#008d3d">Impact</span>
</div>

               <div class="text">
                  <p style="text-align:center" >
                     <br/>
                  Our purpose is in achieving
                  business profitably, while being a
                  force for good in our society.
                  </p>
               </div>

               <style>
    .link_btn {
        display: flex;
        justify-content: center;
        gap: 20px; /* Adjust the gap as needed */
    }

    .link_btn span {
        cursor: pointer;
    }

    /* CSS for the drop-down icons */
.btn-header-link .fa-chevron-down {
    display: none;
}

.btn-header-link.collapsed .fa-chevron-up {
    display: none;
}

.btn-header-link.collapsed .fa-chevron-down {
    display: inline;
}
.chevron-icons {
    float: right;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Add this script in your HTML file -->
<script>
    $(document).ready(function () {
        $('.btn-header-link').click(function () {
            // Toggle the chevron icon based on the collapse state
            var chevronUp = $(this).find('.fa-chevron-up');
            var chevronDown = $(this).find('.fa-chevron-down');
            
            if ($(this).hasClass('collapsed')) {
                chevronUp.show();
                chevronDown.hide();
            } else {
                chevronUp.hide();
                chevronDown.show();
            }
        });
    });
</script>


            </div>
         </div>
         <div class="col-md-6 col-sm-12 col-xs-12">
            <div id="main">
               <div class="accordion" id="faq">
                  <div class="card">

                     <div class="card-header" id="faqhead1">
                     <a href="#" class="btn-header-link text-truncated collapsed" data-toggle="collapse" data-target="#faq1"
                        aria-expanded="false" aria-controls="faq1">
                        Why we do it?
                        <span class="chevron-icons">
                           <i class="fas fa-chevron-up"></i> <!-- Icon when collapsed -->
                           <i class="fas fa-chevron-down"></i> <!-- Icon when uncollapsed -->
                        </span>
                     </a>
                     </div>

                     <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                        <div class="card-body">
                        Our commitment is grounded in the belief that the coexistence of profitable enterprises, while being a force for good in our society is not just a possibility but a business imperative.
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="faqhead2">
                        <a href="#" class=" btn-header-link text-wrap collapsed" data-toggle="collapse" data-target="#faq2"
                           aria-expanded="true" aria-controls="faq2">How we do it?
                           <span class="chevron-icons">
                           <i class="fas fa-chevron-up"></i> <!-- Icon when collapsed -->
                           <i class="fas fa-chevron-down"></i> <!-- Icon when uncollapsed -->
                        </span>
                        </a>
                     </div>
                     <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                        <div class="card-body"> 
                        With each project, our disruptive thinking cuts through the noise, uncovers valuable insights, enabling us to  create strategies and communication that establish  stronger connections between businesses, brands  and their stakeholders.

                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="faqhead3">
                        <a href="#" class=" btn-header-link text-wrap collapsed" data-toggle="collapse" data-target="#faq3"
                           aria-expanded="true" aria-controls="faq3">What differentiates us?
                           <span class="chevron-icons">
                           <i class="fas fa-chevron-up"></i> <!-- Icon when collapsed -->
                           <i class="fas fa-chevron-down"></i> <!-- Icon when uncollapsed -->
                        </span>
                        </a>
                     </div>
                     <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                        <div class="card-body">
                        Our team not only delivers exceptional work but also takes pride in building and sustaining strong relationships anchored on professionalism and continuous value creation. <br/> <br/>
                        This commitment extends to building, positioning and protecting the reputation of brands, enterprises and teams.

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br/>
   <br/>
</section>
</div>

<section class="parallax-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="vc_custom_heading text_align_center">
               <h4 style="font-size: 28px;color: #ffffff;line-height: 34px;text-align: center"
                  class="consulting-custom-title">If it did not push the dial, it did not happen. <mark>Our measure</mark> of great work <mark>is assessed</mark> through the lenses of <mark>clear</mark> and <mark>quantifiable business </mark>and <mark>social impact outcomes.</mark></h4>
            </div>
         </div>
      </div>
   </div>
</section>

<div id=our-clients>

   <div class="about-info sec-padd text-center mb-5">
      <!-- <div class="section-title">
         <h2></h2>
      </div> -->
   </div>


<!-- <section class="client-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="client-outer">
               <div class="slick-slider client-slider">
                  <div class="wow-outer">
                     <div class="item wow slideInLeft"  data-wow-delay=".1s">
                        <img src="img/client/1.png" class="img-fluid" alt="Imageteam">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft"  data-wow-delay=".3s">
                        <img src="img/client/2.png" class="img-fluid" alt="Imageteam">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".5s">
                        <img src="img/client/3.png" class="img-fluid" alt="Imageteam">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".9s">
                        <img src="img/client/5.png" class="img-fluid" alt="Imageteam">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".10s">
                        <img src="img/client/6.png" class="img-fluid" alt="Imageteam">
                     </div>
                  </div>
                  <div class="wow-outer">
                     <div class="item wow slideInLeft" data-wow-delay=".1s">
                        <img src="img/client/7.png" class="img-fluid" alt="Imageteam">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
   <br>
   </div>
</section> -->

<section class="client-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="client-outer">
               <div class="slick-slider client-slider">

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
   <br>
   <br>
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


<section class="parallax-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="vc_custom_heading text_align_center">
               <h4 style="font-size: 28px;color: #ffffff;line-height: 34px;text-align: center"
                  class="consulting-custom-title"><mark>Our philosophy </mark>revolves around prioritizing people, creating value for our stakeholders, supporting business growth and promoting sustainability for a positive impact on the planet.</h4>
            </div>
         </div>
      </div>
   </div>
</section>

<div id="blog">
   <!-- <br>
   <br>

   <br>
   <br> -->
<!-- <section class="blog">
 <div class="containerwrap">
   
   <div class="container-fluid">
      <div class="row p-3-vh">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="about-info sec-padd text-center mb-5">
               <div class="section-title">
                  <h2>News</h2>
               </div>
            </div>
         </div>
         <div class="col-md-3 wow-outer">
            <div class="blogcolumn wow slideInRight" data-wow-delay=".1s">
               <div class="imgtop">
                  <img src="img/blog/meta.jpeg" alt="" class="w-gallery-image">
                  <span class="tag">
                  Advisory
                  </span>
               </div>
               <div class="blogcont">
                  <div class="headingblog">
                     <a href="#">Zenith announces a partnership with Meta</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 wow-outer">
            <div class="blogcolumn wow slideInRight"  data-wow-delay=".3s">
               <div class="imgtop">
                  <img src="img/blog/visa.jpg" alt="" class="w-gallery-image">
                  <span class="tag">
                  Economics
                  </span>
               </div>
               <div class="blogcont">
                  <div class="headingblog">
                     <a href="#">Zenith announces a partnership with Visa</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 wow-outer">
            <div class="blogcolumn wow slideInRight"  data-wow-delay=".6s">
               <div class="imgtop">
                  <img src="img/blog/travel.jpg" alt="" class="w-gallery-image">
                  <span class="tag">
                  Innovation
                  </span>
               </div>
               <div class="blogcont">
                  <div class="headingblog">
                     <a href="#">Strategic and commercial policies updates</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 wow-outer">
            <div class="blogcolumn wow slideInRight"  data-wow-delay=".6s">
               <div class="imgtop">
                  <img src="img/blog/stocks.jpeg" alt="" class="w-gallery-image">
                  <span class="tag">
                  Research
                  </span>
               </div>
               <div class="blogcont">
                  <div class="headingblog">
                     <a href="#">Broad research on companies' economics</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
 </div>
</section> -->
</div>
<?php include("footer.php");?>
