<?php include("header.php");?>

<style type="text/css">
   .img-fluid1 {
      max-width: 100%;
      height: auto;
   }
   .img-fluid {
      max-width: 100%;
      height: 75px;
   }

   .slideshow-container {
      display: flex;
      overflow-x: auto;
      white-space: nowrap;
   }

   .col-md-3 {
      flex: 0 0 auto;
      width: 25%;
      box-sizing: border-box;
      padding: 0 15px;
   }

   /* Example styling for images */
   .w-gallery-image {
      width: 100%;
      height: auto;
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

<div id="blog">
   <br>
   <br>
   <section class="blog">
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

               <div class="slideshow-container">
                  <div class="col-md-3 wow-outer">
                     <div class="nested-container">
                        <div class="blogcolumn wow slideInRight" data-wow-delay=".1s">
                           <div class="imgtop">
                              <img src="img/blog/esther.jpg" alt="" class="w-gallery-image">
                              <!-- <span class="tag"> Advisory </span> -->
                           </div>
                           <div class="blogcont">
                              <div class="headingblog">
                                 <a style="white-space: break-spaces;" href="https://www.facebook.com/photo.php?fbid=828978302604459&set=a.638880264947598&type=3" target="_blank">Superbrands: Happy International Women's Day</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 wow-outer">
                     <div class="nested-container">
                        <div class="blogcolumn wow slideInRight" data-wow-delay=".1s">
                           <div class="imgtop">
                              <img src="img/blog/esther.jpg" alt="" class="w-gallery-image">
                              <!-- <span class="tag"> Advisory </span> -->
                           </div>
                           <div class="blogcont">
                              <div class="headingblog">
                                 <a href="https://www.theknowledgewarehouseke.com/top-60-most-transformative-ceos-impacting-the-economy-56/" target="_blank">Top 60 Most Transformative CEOs</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 wow-outer">
                     <div class="nested-container">
                        <div class="blogcolumn wow slideInRight"  data-wow-delay=".3s">
                           <div class="imgtop">
                              <img src="img/blog/esther3.jpg" alt="" class="w-gallery-image">
                              <!-- <span class="tag"> Economics </span> -->
                           </div>
                           <div class="blogcont">
                              <div class="headingblog">
                                 <a style="white-space: break-spaces;" href="https://sokodirectory.com/2023/06/esther-ngomeli-exits-redhouse-establishes-zenith-east-africa-group/" target="_blank">Esther Ngomeli exits Redhouse Group to establish Zenith East Africa Group</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3 wow-outer">
                     <div class="nested-container">
                        <div class="blogcolumn wow slideInRight"  data-wow-delay=".6s">
                           <div class="imgtop">
                              <img src="img/blog/superbrands.png" alt="" class="w-gallery-image">
                              <!-- <span class="tag"> Innovation </span> -->
                           </div>
                           <div class="blogcont">
                              <div class="headingblog">
                                 <a href="https://www.facebook.com/Superbrandseastafricaofficial/photos/a.154835944561584/6459306360781146/?type=3" target="_blank">Superbrands Leading Women</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>

<?php include("footer.php");?>
