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
   .container {
   max-width: 1200px;
   margin: 0 auto;
   padding: 20px;
   position: relative;
   }
   .row {
   display: flex;
   flex-wrap: wrap;
   justify-content: center; /* Center the content */
   }
   .about-info {
   flex: 1;
   padding: 20px;
   box-sizing: border-box;
   background-color: #fff;
   border-radius: 8px;
   z-index: 1;
   }
   .about-info h4 {
   color: #333;
   }
   .about-info p {
   color: #666;
   }
   .about-image {
   flex: 1;
   padding: 20px;
   box-sizing: border-box;
   position: relative;
   border-radius: 8px;
   overflow: hidden;
   background-image: url('img/blog/ZenithServices1.png'); /* Replace with the path to your background image */
   background-size: contain; /* Adjust the background size */
   background-position: center;
   background-repeat: no-repeat;
   text-align: center; /* Center the content within the about-image div */
   transition: transform 0.5s ease; /* Add a smooth transition on hover */
   }
   /* Hover effect on the background image */
   .about-image:hover {
   transform: scale(1.1); /* Zoom in on hover */
   }
   /* Separate class for the second section */
   .second-section .about-image {
   background-image: url('img/blog/ZenithServices2.png'); /* Replace with the path to your second background image */
   }
   /* Separate class for the second section */
   .third-section .about-image {
   background-image: url('img/blog/ZenithServices3.png'); /* Replace with the path to your second background image */
   }
   /* Separate class for the second section */
   .fourth-section .about-image {
   background-image: url('img/blog/ZenithServices4.png'); /* Replace with the path to your second background image */
   }
   /* Separate class for the second section */
   .fifth-section .about-image {
   background-image: url('img/blog/ZenithServices5.png'); /* Replace with the path to your second background image */
   }
   /* Media query for small screens */
   @media (max-width: 767px) {
   .about-image {
   background-size: 100% auto; /* Adjust for small screens */
   }
   }
   /* Media query for large screens */
   @media (min-width: 1200px) {
   .about-image {
   background-size: 320px 320px; /* Adjust for large screens */
   }
   }/* Adjust the z-index for the navigation */
   .navigation {
   position: relative;
   z-index: 1040; Ensure the navigation is above other elements
   }
   /* Override the overflow property to allow dropdowns to extend beyond their container */
   .navbar {
   overflow: visible !important;
   }
   /* Adjust the overflow property for the header-inner */
   .header-inner {
   overflow: visible !important;
   z-index: 1040; /* Ensure the header-inner is above other elements */
   }
   /* Adjust the position property for the navbar-collapse to prevent clipping */
   .navbar-collapse {
   position: static;
   transform: none;
   width: auto;
   padding-top: 0;
   padding-right: 0;
   padding-bottom: 0;
   padding-left: 0;
   }
   /* Style for the dropdown menu */
   .dropdown-menu.small-menu {
   position: absolute;
   z-index: 1050; /* Ensure the dropdown is above other elements */
   display: none;
   float: left;
   min-width: 10rem;
   padding: 0.5rem 0;
   margin: 0.125rem 0 0;
   font-size: 1rem;
   color: #fd9b28;
   text-align: left;
   list-style: none;
   background-color: #ffffff;
   background-clip: padding-box;
   border: 1px solid rgba(0, 0, 0, 0.15);
   border-radius: 0.25rem;
   }
   /* Show the dropdown menu on hover */
   .nav-item.dropdown:hover .dropdown-menu.small-menu {
   display: block;
   }
</style>
</head>
<body>
   <div>
   <section class="about-faq2 sec-padd py-5">
   <div class="container">
   <div class="container-fluid">
   <div class="row p-3-vh">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="about-info sec-padd text-center mb-5">
         <div class="section-title">
            <h2>Our Toolbox</h2>
         </div>
      </div>
   </div>
   <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
   <div class="about-info">
      <h4 style="text-align: center">We translate insights into award-winning and disruptive strategies, craft innovative and human-centric communication, that works across multiple channels transforming businesses and brand performance, sustainably.</h4>
      <br>
      <div id="services">
         <section class="service what-bg">
            <br/>
            <br/>
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="we-do-item">
                        <div class="we-icon">
                           <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div class="we-desc">
                           <h4 class="we-title">Research</h4>
                           <!-- <P>We blend Ubuntu spirit with profit strategies, fostering prosperity that echoes in community bonds.</p> -->
                        </div>
                     </div>
                  </div>
                  <div class=" col-md-4 col-sm-6 col-xs-12">
                     <div class="we-do-item">
                        <div class="we-icon">
                           <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <div class="we-desc">
                           <h4 class="we-title">Insights</h4>
                           <!-- <P>Our advisory harmonizes philanthropy, weaving compassion and empowerment into impactful strategies for non-profits.</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="we-do-item">
                        <div class="we-icon">
                           <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <div class="we-desc">
                           <h4 class="we-title">Strategies</h4>
                           <!-- <P>Amplify voices, foster inclusivity, and nurture positive change – our advisory resonates with East Africa's vibrant tapestry.</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="we-do-item">
                        <div class="we-icon">
                           <i class="fa-solid fa-rocket"></i>
                        </div>
                        <div class="we-desc">
                           <h4 class="we-title">Execution</h4>
                           <!-- <P>Cultivate culturally rooted, socially impactful enterprises for a lasting legacy of sustainable progress and positive community influence.</p> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="we-do-item">
                        <div class="we-icon">
                           <i class="fa-solid fa-square-poll-horizontal"></i>
                        </div>
                        <div class="we-desc">
                           <h4 class="we-title">Outcomes</h4>
                           <!-- <P>Guiding public leaders with Ubuntu, shaping governance that uplifts and resonates with the diverse aspirations of East Africa.</p> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
      </section>
   </div>
   <?php include("footer.php");?>
