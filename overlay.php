<div class="container">
<span class="close-button" onclick="closeOverlay()">&times;</span>
<style>
  /* Set color to white */
  body, h2, .mb-4, .navbar a {
    color: white;
  }

  .mb-2 {
    margin-bottom: 35px !important;
    font-size: 20px;
    font-weight: 700;
  }

  .mb-4 {
    margin-bottom: 4.5rem !important;
  }

  .close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 70px;
    cursor: pointer;
    transition: transform 0.3s ease;
    z-index: 10002;
  }

  /* Spin effect on hover */
  .close-button:hover {
    transform: rotate(360deg);
  }

  #navov a {
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 10px;
    display: block;
    font-size: 30px;
  }

  #navov a:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 75%;
    height: 1px;
    background-color: #B2810B; /* Change the color as needed */
  }

  .mb-4:hover h2 {
    color: #B2810B;
  }

  /* Responsive adjustments for smaller screens */
  @media only screen and (max-width: 767px) {
    .container {
      padding: 20px;
    }

    .close-button {
      right: 20px;
    }

    #navov {
      padding-top: 2em;
    }

    .col-md-4 {
      padding-left: 20px;
    }
  }
</style>

    <div class="row">
      <!-- First Row (Sectors) -->
      <div class="col-md-8">
        <div class="row">
          <!-- Sectors Title -->
          <div class="col-12" style="padding: 4em;padding-left: 0;">
            <div class="col-4 grid-title">
              <h1 style="color:#B2810B;margin-left: 1em;">Our Sectors</h1>
            </div>
          </div>
          <!-- Sector Items -->
          <div class="col-md-4">
          <div class="mb-4 d-flex flex-column align-items-center justify-content-center text-center">
              <i style="font-size: 60px;" class="fa-solid fa-money-bill"></i>
              <h2 class="mt-2" style="font-size: 25px;">For-profit businesses</h2>
            </div>
          </div>
          <div class="col-md-4">
          <div class="mb-4 d-flex flex-column align-items-center justify-content-center text-center">
              <i style="font-size: 60px;" class="fa-solid fa-globe"></i>
              <h2 class="mt-2" style="font-size: 25px;">Non-profit organizations</h2>
            </div>
          </div>
          <div class="col-md-4">
          <div class="mb-4 d-flex flex-column align-items-center justify-content-center text-center">
              <i style="font-size: 60px;" class="fa-solid fa-microphone"></i>
              <h2 class="mt-2" style="font-size: 25px;">Public authorities</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-4 d-flex flex-column align-items-center justify-content-center text-center">
              <i style="font-size: 60px;" class="fa-solid fa-person-military-to-person"></i>
              <h2 class="mt-2" style="font-size: 25px;">Civil society actors</h2>
            </div>
          </div>
          <div class="col-md-6">
          <div class="mb-4 d-flex flex-column align-items-center justify-content-center text-center">
              <i style="font-size: 60px;" class="fa-solid fa-business-time"></i>
              <h2 class="mt-2" style="font-size: 25px;">Social profit enterprises</h2>
            </div>
          </div>
        </div>
      </div>

      <!-- Second Row (Navbar and Additional Content) -->
      <div class="col-md-4" style="padding-left: 80px;">
        <div class="mb-4">
          <!-- Space between content and navbar -->
        </div>
        <!-- Navbar Section -->
        <nav id="navov" style="padding-top: 5em;">
          <a href="/about-us.php" class="d-block mb-2">About Us</a>
          <a href="/services.php" class="d-block mb-2">Our Offering</a>
          <a href="/toolbox.php" class="d-block mb-2">Our Toolbox</a>
          <a href="/team.php" class="d-block mb-2">Our Team</a>
          <a href="/resources.php" class="d-block mb-2">News Bureau</a>
        </nav>
      </div>
    </div>
  </div>

  <script>
  function openOverlay() {
    var overlay = $("#overlay");

    // Load content from overlay.php into the overlay div
    overlay.load("overlay.php", function () {
      overlay.css("display", "block");
      $("body").css("overflow", "hidden");
    });
  }

  function closeOverlay() {
    $("#overlay").css("display", "none");
    $("body").css("overflow", "auto");
  }
</script>



