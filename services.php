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
   background-image: url('img/blog/MarketResearch.png'); /* Replace with the path to your background image */
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
   background-image: url('img/blog/StrategicAdvisory.png'); /* Replace with the path to your second background image */
   }
   /* Separate class for the second section */
   .third-section .about-image {
   background-image: url('img/blog/Comms.png'); /* Replace with the path to your second background image */
   }
   /* Separate class for the second section */
   .fourth-section .about-image {
   background-image: url('img/blog/Networks.png'); /* Replace with the path to your second background image */
   }
   /* Separate class for the second section */
   .fifth-section .about-image {
   background-image: url('img/blog/SocialImpact.png'); /* Replace with the path to your second background image */
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
   z-index: 1040; /* Ensure the navigation is above other elements */
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
   <div>
   <section class="about-faq2 sec-padd py-5">
      <div class="container">
         <div class="container-fluid">
            <div class="row p-3-vh">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="about-info sec-padd text-center mb-5">
                     <div class="section-title">
                        <h2>Our Offering</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="about-info">
                     <h2 style="text-align: center;">Market Research and Insights</h2>
                     <br/>
                     <h4 style="text-align: center;">We are your eyes and ears in the ever-evolving business landscape. Our team stays
                        at the forefront of market trends, ensuring you have the most up-to-date insights
                        to guide your strategic decisions.
                     </h4>
                     <br>
                     <div class="link_btn text-end collapse" id="readMoreContent1">
                     <div class="text-end">
                        <ul style="list-style-type: disc; padding: 0;">
                           <li class="my-2" style="color: black;">Market Research</li>
                           <li class="my-2" style="color: #b2810b;">Brand Analysis</li>
                           <li class="my-2" style="color: black;">Consumer Intelligence</li>
                        </ul>
                     </div>
                     <br/>
                     <div class="text">
                        <!-- <p style="text-align: center;">
                           Access our comprehensive market research and analysis to stay one step ahead in
                           your industry.
                        </p> -->
                     </div>
                  </div>
                                 <!-- Button to trigger the collapse -->
                                 <div class="link_btn">
                                    <a href="javascript:void(0);" onclick="toggleReadMore(1)" class="btn thm-btn" id="thm-btn1"  onmouseover="this.style.color='#b2810b'; this.style.textDecoration='none'" onmouseout="this.style.color='white';">Read
                                        more <i class="vc_btn3-icon fas fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                                <div class="read-more-space"><p></p></div>
                                <script>
                                    function toggleReadMore(section) {
                                       var readMoreContent = document.getElementById('readMoreContent' + section);
                                       var thmBtn = document.getElementById('thm-btn' + section);

                                       if (readMoreContent.classList.contains('show')) {
                                          readMoreContent.classList.remove('show');
                                          thmBtn.innerText = 'Read more';
                                          thmBtn.setAttribute('aria-expanded', 'false');
                                       } else {
                                          readMoreContent.classList.add('show');
                                          thmBtn.innerText = 'Show less';
                                          thmBtn.setAttribute('aria-expanded', 'true');
                                       }
                                    }
                                 </script>
                  </div>
                  <div class="about-image"></div>
               </div>
            </div>
   </section>
   </div>
   <div class="second-section">
   <section class="about-faq2 sec-padd py-5">
   <div class="container">
   <div class="row">
   <div class="about-image"></div>
   <div class="about-info">
   <h2 style="text-align: center;">Strategic Advisory & Business Counsel</h2>
   <br/>
   <h4 style="text-align: center;">As trusted advisors, we provide tailored counsel that combines business acumen
   with communication expertise. Our guidance is designed to ensure that every
   decision and communication strategy is in line with your organizational goals.
   </h4>
   <br>
   <div class="link_btn text-end collapse" id="readMoreContent2">
   <div class="link_btn text-end">
   <ul style="list-style-type: disc; padding: 0;">
   <li style="color: black;">Brand Development</li>
   <li style="color: #b2810b;">Brand Purpose Positioning + Expressions</li>
   <li style="color: black;">Growth</li>
   <li style="color: #b2810b;">Brand+Brand/Customer Experience(CX)</li>
   <li style="color: black;">Innovation</li>
   </ul>
   </div>   
   <br/>
   </div>
            <!-- Button to trigger the collapse -->
            <div class="link_btn">
            <a href="javascript:void(0);" onclick="toggleReadMore(2)" class="btn btn-link thm-btn" id="thm-btn2" onmouseover="this.style.color='#b2810b'; this.style.textDecoration='none'" onmouseout="this.style.color='white';">Read
                  more <i class="vc_btn3-icon fas fa-chevron-right" aria-hidden="true"></i></a>
         </div>
         <div class="read-more-space"><p></p></div>
   <br/>
   <div class="text">
   <!-- <p style="text-align: center;">
      Access our comprehensive market research and analysis to stay one step ahead in
      your industry.
      </p> -->
   </div>
   </div>
   </div>
   </div>
   </section>
   </div>
   <div class="third-section">
   <section class="about-faq2 sec-padd py-5">
   <div class="container">
   <div class="row">
   <div class="about-info">
   <h2 style="text-align: center;">Communication Excellence</h2>
   <br/>
   <h4 style="text-align: center;">We help you craft and refine every business decision and communication into powerful, impactful and authentic campaigns. We continuously review and re-strategize along the way to ensure that your message aligns with your commercial objectives and resonates with your stakeholders.
   </h4>
   <br>
   <style>
   .link_btn5 ul {
   margin: 0;
   padding: 0;
   list-style-type: none;
   display: flex;
   flex-wrap: wrap;
   justify-content: flex-end;
   }
   .link_btn5 ul li {
   color: black;
   margin-right: 20px;
   margin-bottom: 10px; /* Adjust the margin-bottom to create space between items */
   padding-left: 20px; /* Add some left padding for better indentation */
   position: relative;
   }
   .link_btn5 ul li:before {
   content: '•'; /* Use a bullet point as a marker */
   color: black;
   position: absolute;
   left: 0;
   }
   .link_btn6 ul {
   margin: 0;
   padding: 0;
   list-style-type: none;
   display: flex;
   flex-wrap: wrap;
   justify-content: flex-start;
   }
   .link_btn6 ul li {
   color: black;
   margin-right: 20px;
   margin-bottom: 10px; /* Adjust the margin-bottom to create space between items */
   padding-left: 50px; /* Add some left padding for better indentation */
   position: relative;
   }
   .link_btn6 ul li:before {
   content: ''; /* Use space  as a marker */
   color: black;
   position: absolute;
   left: 0;
   }
   @media (max-width: 767px) {
      li {
         padding-right: 0 !important; /* Remove padding for small screens */
         padding-bottom: 5px !important; /* You can keep or remove this line based on your preference */
      }
   }
   </style>
     <div class="link_btn text-end collapse" id="readMoreContent3">
   <div class="link_btn6 text-end">
   <ul>
   <li style="color: #b2810b;" >•Advertising
   <ul>
   <li style="color: black;padding-right: 130px;">Brand Design</li>
   <li style="color: black;padding-right: 130px;">Visual Identity</li>
   <li style="color: black;">Native Applications</li>
   <li style="color: black;">Retail Environments Packaging</li>
   <li style="color: black;">Brand Storytelling</li>
   </ul>
   </li>
   <ul>
   <ul>
   <li style="color: #b2810b;" >•Public relations
   <ul style="list-style-type: none; padding: 0;">
   <li style="color: black; margin-bottom: 10px;">PR Planning + Strategy</li>
   <li style="color: black;">Public Affairs Management</li>
   <li style="color: black;">Online Reputation Management</li>
   <li style="color: black;">Crisis + Reputation Management</li>
   <li style="color: black;">Media + Crisis Communication Training</li>
   <li style="color: black;">Media Relations</li>
   </ul>
   </li>
   <ul>
   <ul>
   <li style="color: #b2810b;" >•Digital Marketing
   <ul>
   <li style="color: black;">Online Reputation Management</li>
   <li style="color: black;">Digital Media Planning + Execution</li>
   <li style="color: black;">Social Media Management</li>
   <li style="color: black;">Digital Assets Development</li>
   <li style="color: black;">Search Engine Optimization</li>
   <li style="color: black;">Performance Marketing</li>
   <li style="color: black;">Monitoring + Analytics</li>
   </ul>
   </li>
   <ul>
   <ul>
   <li style="color: #b2810b;" >•Experiential and Event Management
   <ul>
   <li style="color: black;">Concept Development</li>
   <li style="color: black;">Planning + Logistics Management</li>
   </ul>
   </li>
   <ul>
   <ul>
   <li style="color: #b2810b;" >•Production
   <ul>
   <li style="color: black;">Content and Interactive Production</li>
   <li style="color: black;">Film/Photo/Print Studio Production</li>
   </ul>
   </li>
   <ul>
   </div>
   </div>
               <!-- Button to trigger the collapse -->
               <div class="link_btn">
            <a href="javascript:void(0);" onclick="toggleReadMore(3)" class="btn btn-link thm-btn" id="thm-btn3" onmouseover="this.style.color='#b2810b'; this.style.textDecoration='none'" onmouseout="this.style.color='white';">Read
                  more <i class="vc_btn3-icon fas fa-chevron-right" aria-hidden="true"></i></a>
         </div>
         <div class="read-more-space"><p></p></div>
   <br/>
   <div class="text">
   <!-- <p style="text-align: center;">
      Access our comprehensive market research and analysis to stay one step ahead in
      your industry.
      </p> -->
   </div>
   </div>
   <div class="about-image"></div>
   </div>
   </div>
   </section>
   </div>
   <div class="fourth-section">
   <section class="about-faq2 sec-padd py-5">
   <div class="container">
   <div class="row">
   <div class="about-image"></div>
   <div class="about-info">
   <h2 style="text-align: center;">Networks</h2>
   <br/>
   <h4 style="text-align: center;">Our connections become your connections, opening doors to endless
   opportunities. Leverage our extensive network of industry experts, thought
   leaders and influencers to form key partnerships, source investments and
   gain influence in your sector.

   </h4>
   <br>
   <div class="link_btn6 text-end">
         <div class="link_btn text-end collapse" id="readMoreContent4">
   <ul>
   <li style="color: #b2810b;" >•Investment Advisory
   <ul>
   <li style="color: black;">Linking investors to opportunities in Kenya through Investor Mapping, Opportunity Connection & Communication, Government Relations and Advocacy.</li>
   </ul>
   </li>
   <ul>
   </div>
   <br/>
</div>
               <!-- Button to trigger the collapse -->
               <div class="link_btn">
            <a href="javascript:void(0);" onclick="toggleReadMore(4)" class="btn btn-link thm-btn" id="thm-btn4" onmouseover="this.style.color='#b2810b'; this.style.textDecoration='none'" onmouseout="this.style.color='white';">Read
                  more <i class="vc_btn3-icon fas fa-chevron-right" aria-hidden="true"></i></a>
         </div>
         <div class="read-more-space"><p></p></div>

   <div class="text">
   <!-- <p style="text-align: center;">
      Access our comprehensive market research and analysis to stay one step ahead in
      your industry.
      </p> -->
   </div>
   </div>
   </div>
   </div>
   </section>
   </div>
   <div class="fifth-section">
   <section class="about-faq2 sec-padd py-5">
   <div class="container">
   <div class="row">
   <div class="about-info">
   <h2 style="text-align: center;">Social Impact</h2>
   <br/>
   <h4 style="text-align: center;">We believe in the power of convergence of business acumen with social responsibility. We work closely with you to craft strategies that enhance your business success while impacting the society positively.
   </h4>
   <br>
   <div class="link_btn6 text-end">
   <div class="link_btn text-end collapse" id="readMoreContent5">
   <ul>
   <li style="color: #b2810b;" >•Development Communication <br/> (Social Behavior Change Communication)
   <ul>
   <li style="color: black;">We employ strategic approaches to promote changes
   in knowledge, attitudes, norms, beliefs and
   behaviors, including information dissemination and
   education, social marketing, social mobilization,
   media advocacy and communication to targeted
   stakeholders.</li>
   </ul>
   </li>
   <ul>
   <ul>
   <li style="color: #b2810b;" >•Sustainability Communication & ESG Reporting
   <ul>
   <li style="color: black;">We work with organizations and the various
   actors to embrace sustainability, as a key
   strategic lever for business performance
   through crafting solutions and communicating
   them to meet the sustainability expectations of
   all stakeholders.</li>
   </ul>
   </li>
   <ul>
   </div>
</div>
   <br/>
               <!-- Button to trigger the collapse -->
               <div class="link_btn">
            <a href="javascript:void(0);" onclick="toggleReadMore(5)" class="btn btn-link thm-btn" id="thm-btn5" onmouseover="this.style.color='#b2810b'; this.style.textDecoration='none'" onmouseout="this.style.color='white';">Read
                  more <i class="vc_btn3-icon fas fa-chevron-right" aria-hidden="true"></i></a>
         </div>
         <div class="read-more-space"><p></p></div>
   <div class="text">
   <!-- <p style="text-align: center;">
      Access our comprehensive market research and analysis to stay one step ahead in
      your industry.
      </p> -->
   </div>
   </div>
   <div class="about-image"></div>
   </div>
   </div>
   </div>
   </section>
   </div>
   <?php include("footer.php");?>
