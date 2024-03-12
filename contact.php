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

body {
  font-family: "Roboto", sans-serif;
  background-color: #fff;
  line-height: 1.9;
  color: #8c8c8c;
  background-color: #efefef;
  position: relative; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", sans-serif;
  color: #000; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.text-black {
  color: #000; }

.content {
  padding: 5rem 0; }

.heading {
  font-size: 2.5rem;
  font-weight: 900; }

.form-control {
  border: none;
  border-bottom: 1px solid #ccc;
  padding-left: 0;
  padding-right: 0;
  border-radius: 0;
  background: none; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000; }

.col-form-label {
  color: #000;
  font-size: 13px; }

.btn, .form-control, .custom-select {
  height: 45px; }

.custom-select:active, .custom-select:focus {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-color: #000; }

.btn {
  border: none;
  border-radius: 0;
  font-size: 12px;
  letter-spacing: .2rem;
  text-transform: uppercase; }
  .btn.btn-primary {
    background: #9b7009;
    color: #fff;
    padding: 15px 20px; }
  .btn.btn-primary:active {
    background: #9b7009; }
  .btn:hover {
    color: #fff; }
  .btn:active, .btn:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none; }

.contact-wrap .col-form-label {
  font-size: 14px;
  color: #b3b3b3;
  margin: 0 0 10px 0;
  display: inline-block;
  padding: 0; }

.contact-wrap .form, .contact-wrap .contact-info {
  padding: 40px; }

.contact-wrap .contact-info {
  color: rgba(255, 255, 255, 0.5); }
  .contact-wrap .contact-info ul li {
    margin-bottom: 15px;
    color: rgba(255, 255, 255, 0.5); }
    .contact-wrap .contact-info ul li .wrap-icon {
      font-size: 20px;
      color: #fff;
      margin-top: 5px; }

.contact-wrap .form {
  background: #fff; }
  .contact-wrap .form h3 {
    color: #9b7009;
    font-size: 20px;
    margin-bottom: 30px; }

.contact-wrap .contact-info {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat; }
  .contact-wrap .contact-info a {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0; }
  @media (max-width: 1199.98px) {
    .contact-wrap .contact-info {
      height: 400px !important; } }
  .contact-wrap .contact-info h3 {
    color: #fff;
    font-size: 20px;
    margin-bottom: 30px; }

label.error {
  font-size: 12px;
  color: red; }

#message {
  resize: vertical; }

#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: #B90B0B; }

#form-message-success {
  color: #55A44E;
  font-size: 18px;
  font-weight: bold; }

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-weight: bold;
  font-size: 12px;
  color: #000; }

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



<div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-6">
          <div class="form h-100">
            <h3>Send us a message</h3>
            <form action="https://formsubmit.co/imaina671@gmail.com" class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                <input type="hidden" name="_subject" value="Zenith Form Submitted Through Contact Form In Contact Page Of The Website">
                  <label for="" class="col-form-label">First Name *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="First name">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Last Name *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Last name">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Phone</label>
                  <input type="text" class="form-control" name="phone" id="phone"  placeholder="Phone No.">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Email *</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Email">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="message" class="col-form-label">Message *</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4" style="color: white; text-decoration: none;" onmousedown="this.style.backgroundColor='#c8ab7c';" onmouseup="this.style.backgroundColor='#9b7009';">
                <input type="hidden" name="_next" value="https://zenitheastafrica.com">

                  <span id="submitting-message" class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning">Please Fill all the fields!</div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>
<!-- Your form HTML goes here -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var contactForm = document.getElementById("contactForm");
    var formMessageWarning = document.getElementById("form-message-warning");
    var formMessageSuccess = document.getElementById("form-message-success");
    var submittingMessage = document.getElementById("submitting-message");

    contactForm.addEventListener("submit", function (event) {
      event.preventDefault();

      // Check if all fields are filled
      var nameField = document.getElementById("name");
      var emailField = document.getElementById("email");
      var messageField = document.getElementById("message");

      if (nameField.value.trim() === "" || emailField.value.trim() === "" || messageField.value.trim() === "") {
        // Display a warning message if any field is empty
        formMessageWarning.textContent = "Please fill in all required fields.";
        formMessageWarning.style.display = "block";
        formMessageSuccess.style.display = "none";
        submittingMessage.style.display = "none";
      } else {
        // If all fields are filled, hide the warning message
        formMessageWarning.style.display = "none";

        // Display submitting message or spinner
        submittingMessage.style.display = "block";

        // Simulate form submission (replace this with your actual form submission logic)
        var isFormValid = true; // Replace with your form validation logic

        setTimeout(function () {
          if (isFormValid) {
            // Show the success message
            formMessageSuccess.style.display = "block";

            // Optionally, you can reset the form after submission
            contactForm.reset();

            // Hide submitting message or spinner
            submittingMessage.style.display = "none";
          }
        }, 3000); // Adjust the timeout duration as needed (in milliseconds)
      }
    });
  });
</script>
</body>
</html>



          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-info h-100" style="background-image: url('img/blog/map.png')">
            <a href="https://maps.app.goo.gl/bmcCPphnab8V9zjC7" target="_blank"></a>
          </div>
        </div>
      </div>
    </div>

  </div>


<?php include("footer.php");?>
