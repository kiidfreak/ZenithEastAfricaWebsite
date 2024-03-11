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
<section class="about-faq sec-padd py-5">

   <div class="container">
      <div class="section-title text-center mb-5">
      </div>
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="about-info">
               <h4 style="text-align: center">Zenith East Africa is a Strategic C-Suite Advisory Firm that offers discerning clients with specialist services that leverage on market insights and networks to provide business and communication counsel to leaders of enterprises navigate complex operating environments with confidence and impact.</h4>
</div>
   </div>

</section>
</div>

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

<div id="about-us">
<section class="about-faq sec-padd py-5">

   <div class="container">
      <div class="section-title text-center mb-5">
         <br/>
         
         <h2>Our Philosophy</h2>
      </div>
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="about-info">
               <h4 style="text-align: center">Igniting business growth by creating value for our stakeholders while promoting sustainability for a positive impact on the planet.
</h4>

      </div>
   </div>

</section>
</div>
</div>
</div>
</section>





<div id="about-us">
   <section class="about-faq sec-padd py-5">
      <div class="container">

         <div class="row">
            <!-- Column 1 -->
            <div class="col-md-6">
               <div class="about-info">
               <div class="section-title text-center mb-5">
         <br/>
         <br/>

         
         <h2>Our Vision</h2>
      </div>
                  <br />
                  <br />
                  <h4>Building impactful businesses and brands across Africa</h4>
               </div>
            </div>

            <!-- Column 2 -->
            <div class="col-md-6">
               <div class="about-info">
               <div class="section-title text-center mb-5">
         <br/>
         <br/>

         
         <h2>Our Mission</h2>
      </div>
                  <br />
                  <br />
                  <h4>To collaboratively build impactful businesses and brands, while retaining the best talent and adding value to our stakeholders.</h4>
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
         <br/>
         
         <h2>Our Shared Values</h2>
      </div>
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="about-info">
               <h4 style="text-align: center">Our shared values are at the core of each decision we make, how we act and help us deliver impact and where it matters.</h4>
               <br>
               <div class="text">
               </div>

               <div id="about-us">
   <section class="about-faq sec-padd py-5">
      <div class="container">

         <div class="row">
            <!-- Column for Text Content -->
            <div class="col-md-6">
               <div class="about-info">
                  <h4>Leadership</h4>
                  <p>We not only lead in our practice but also challenge the status quo and reinvent it for the future.</p>

                  <h4>Collaboration</h4>
                  <p>We work together as a team with our stakeholders.</p>

                  <h4>Value Driven</h4>
                  <p>We are committed to providing exceptional value in all our engagements.</p>

                  <h4>Continuous Learning</h4>
                  <p>We are continuously learning and adding flexibility to our business processes.</p>

                  <h4>Social Impact</h4>
                  <p>We are committed to working with our communities.</p>

                  <h4>Passionate</h4>
                  <p>We are passionate and enthusiastic about our business.</p>

                  <h4>Care</h4>
                  <p>We look out for one another and prioritize respect, fairness, development, and well-being.</p>

                  <h4>Culture</h4>
                  <p>We foster a collaborative, creative, and dynamic work culture that empowers our teams to grow and thrive, providing lasting results to our clients and their businesses.</p>
               </div>
            </div>

            <style>
@media (max-width: 1000px) {
    .d-md-flex {
        flex-direction: column;
        align-items: center;
    }
}


</style>

<div class="col-md-6 d-md-flex align-items-center">
    <!-- Add your image here -->
    <img src="img/blog/values.jpeg" alt="Image" class="img-fluid mx-auto d-block" style="max-width: 75%; height: auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
</div>



         </div>
      </div>
   </section>
</div>


      </div>
   </div>
   <br/>
   <br/>
</section>
</div>
<?php include("footer.php");?>
