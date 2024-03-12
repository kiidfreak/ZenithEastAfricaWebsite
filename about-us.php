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
</style>

<div id="about-us">

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


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



   <!-- Hero Section -->
   <section class="about-hero sec-padd py-5">
      <div class="container">
         <div class="section-title text-center mb-5">
            <!-- Title content goes here if needed -->
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="about-info text-center">
                  <h4>Zenith East Africa is a Strategic C-Suite Advisory Firm that offers discerning clients specialist services. We leverage market insights and networks to provide business and communication counsel, helping leaders navigate complex operating environments with confidence and impact.</h4>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Philosophy, Mission, and Vision Columns -->
   <section class="about-faq sec-padd py-5">
      <div class="container">
         <div class="row">

            <!-- Philosophy Column -->
            <div class="col-md-4">
               <div class="section-title text-center mb-5">
                  <h2>Our Philosophy</h2>
               </div>
               <div class="about-info">
               <img src="img\blog\philosophy.png" alt="Philosophy Image" class="img-fluid mx-auto d-block mb-3" style="max-width: 75%; height: auto;">
                  <h4 style="text-align: center">Igniting business growth by creating value for our stakeholders while promoting sustainability for a positive impact on the planet.</h4>
               </div>
            </div>

            <!-- Mission Column -->
            <div class="col-md-4">
               <div class="section-title text-center mb-5">
                  <h2>Our Mission</h2>
               </div>
               <div class="about-info">
               <img src="img\blog\mission.png" alt="Mission Image" class="img-fluid mx-auto d-block mb-3" style="max-width: 75%; height: auto;">
                  <h4 style="text-align: center">To collaboratively build impactful businesses and brands, while retaining the best talent and adding value to our stakeholders.</h4>
               </div>
            </div>

            <!-- Vision Column -->
            <div class="col-md-4">
               <div class="section-title text-center mb-5">
                  <h2>Our Vision</h2>
               </div>
               <div class="about-info">
               <img src="img\blog\vision.png" alt="Vision Image" class="img-fluid mx-auto d-block mb-3" style="max-width: 75%; height: auto;">
                  <h4 style="text-align: center">Building impactful businesses and brands across Africa.</h4>
               </div>
            </div>

         </div>
      </div>
   </section>

   <!-- Shared Values Section -->
   <section class="about-faq sec-padd py-5">
      <div class="container">
         <div class="section-title text-center mb-5">
            <h2>Our Shared Values</h2>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="about-info">
                  <h4 style="text-align: center">Our shared values are at the core of each decision we make, how we act and help us deliver impact where it matters.</h4>
                  <ul>
                     <li><i class="fas fa-check"></i> <span style="color: #B2810B;">Leadership</span>: We not only lead in our practice but also challenge the status quo and reinvent it for the future.</li><br/>
                     <li><i class="fas fa-check"></i> <span style="color: #B2810B;">Collaboration</span>: We work together as a team with our stakeholders.</li><br/>
                     <li><i class="fas fa-check"></i> <span style="color: #B2810B;">Value Driven</span>: We are committed to providing exceptional value in all our engagements.</li><br/>
                     <li><i class="fas fa-check"></i> <span style="color: #B2810B;">Continuous Learning</span>: We are continuously learning and adding flexibility to our business processes.</li><br/>
                     <li><i class="fas fa-check"></i> <span style="color: #B2810B;">Social Impact</span>: We are committed to working with our communities.</li><br/>
                     <li><i class="fas fa-check"></i> <span style="color: #B2810B;">Passionate</span>: We are passionate and enthusiastic about our business.</li><br/>
                     <li><i class="fas fa-check"></i> <span style="color: #B2810B;">Care</span>: We look out for one another and prioritize respect, fairness, development, and well-being.</li><br/>
                     <li><i class="fas fa-check"></i> <span style="color: #B2810B;">Culture</span>: We foster a collaborative, creative, and dynamic work culture that empowers our teams to grow and thrive, providing lasting results to our clients and their businesses.</li>
                     <br/>
                  </ul>

               </div>
            </div>
            <div class="col-md-6 d-md-flex align-items-center">
               <img src="img/blog/values.jpg" alt="Values Image" class="img-fluid mx-auto d-block" style="max-width: 75%; height: auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            </div>
         </div>
      </div>
   </section>

</div>

<?php include("footer.php");?>
