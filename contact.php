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


/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  color: #fff;
  background-size: cover;
  position: relative;
}

body::before {
  /* content: ""; */
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgb(155 123 82);
}

@media (min-width: 1024px) {
  body {
    background-attachment: fixed;
  }
}

a {
  color: #ff0000;
  text-decoration: none;
}

a:hover {
  color: #ff3333;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Raleway", sans-serif;
}

#main {
  position: relative;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  background: #ff0000;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 28px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #ff2929;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  position: relative;
  width: 100%;
  /* countdown */
}

#header h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
}

#header h2 {
  color: #eee;
  margin-bottom: 40px;
  font-size: 22px;
}

#header .countdown {
  margin-bottom: 80px;
}

#header .countdown div {
  text-align: center;
  margin: 10px;
  width: 100px;
  padding: 15px 0;
  background: rgba(255, 255, 255, 0.12);
  border-top: 5px solid #ff0000;
}

#header .countdown div h3 {
  font-weight: 700;
  font-size: 44px;
  margin-bottom: 15px;
}

#header .countdown div h4 {
  font-size: 16px;
  font-weight: 600;
}

@media (max-width: 575px) {
  #header .countdown div {
    width: 70px;
    padding: 10px 0;
    margin: 10px 8px;
  }

  #header .countdown div h3 {
    font-size: 28px;
    margin-bottom: 10px;
  }

  #header .countdown div h4 {
    font-size: 14px;
    font-weight: 500;
  }
}

#header .subscribe {
  font-size: 15px;
  text-align: center;
}

#header .subscribe h4 {
  font-size: 20px;
  font-weight: 600;
  color: #fff;
  position: relative;
  padding-bottom: 12px;
}

#header .subscribe .subscribe-form {
  min-width: 300px;
  margin-top: 10px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  text-align: left;
}

#header .subscribe .subscribe-form input[type=email] {
  border: 0;
  padding: 4px 8px;
  width: calc(100% - 100px);
}

#header .subscribe .subscribe-form input[type=submit] {
  position: absolute;
  top: 0;
  right: -2px;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #ff0000;
  color: #fff;
  transition: 0.3s;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#header .subscribe .subscribe-form input[type=submit]:hover {
  background: #f50000;
}

#header .subscribe .error-message {
  display: none;
  color: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

#header .subscribe .sent-message {
  display: none;
  color: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

#header .subscribe .loading {
  display: none;
  text-align: center;
  padding: 15px;
}

#header .subscribe .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  animation: animate-loading-notify 1s linear infinite;
}

@keyframes animate-loading-notify {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

#header .social-links {
  margin-top: 10px;
}

#header .social-links a {
  font-size: 24px;
  display: inline-block;
  color: rgba(255, 255, 255, 0.8);
  line-height: 1;
  padding-top: 14px;
  margin: 0 10px;
  text-align: center;
  transition: 0.3s;
}

#header .social-links a:hover {
  color: #fff;
}


.section-bg {
  background-color: #fff5f5;
}

.section-title {
  text-align: center;
  padding-bottom: 15px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 20px;
  position: relative;
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Contact Us
--------------------------------------------------------------*/
.about .content h2 {
  font-weight: 700;
  font-size: 48px;
  line-height: 60px;
  margin-bottom: 20px;
  text-transform: uppercase;
}

.about .content h3 {
  font-weight: 500;
  line-height: 32px;
  font-size: 24px;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  padding: 10px 0 0 28px;
  position: relative;
}

.about .content ul i {
  left: 0;
  top: 12px;
  position: absolute;
  font-size: 20px;
  color: #ff0000;
}

.about .content p:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Contact Us
--------------------------------------------------------------*/
.contact .info-wrap {
  background: rgb(155 123 82);
  padding: 30px;
}

.contact .info i {
  font-size: 20px;
  color: #fff;
  float: left;
  width: 44px;
  height: 44px;
  background: rgba(255, 255, 255, 0.1);
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
}

.contact .info p {
  padding: 0 0 10px 60px;
  margin-bottom: 20px;
  font-size: 14px;
}

.contact .info .email p {
  padding-top: 5px;
}

.contact .info .social-links {
  padding-left: 60px;
}

.contact .info .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #333;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  margin-right: 10px;
}

.contact .info .social-links a:hover {
  background: #ff0000;
  color: #fff;
}

.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
  background: #ff0000;
  color: #fff;
}

.contact .php-email-form {
  width: 100%;
  padding: 30px;
  padding-top: 0;
  background: rgb(155 123 82);
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  background: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.2);
  color: #fff;
}

.contact .php-email-form input::-moz-placeholder,
.contact .php-email-form textarea::-moz-placeholder {
  color: rgba(255, 255, 255, 0.4);
}

.contact .php-email-form input::placeholder,
.contact .php-email-form textarea::placeholder {
  color: rgba(255, 255, 255, 0.4);
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: #b68143;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
}

.contact .php-email-form button[type=submit]:hover {
  background: #fd9b28;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: #f2f2f2;
  padding: 30px 0;
  color: #fff;
  font-size: 14px;
  position: relative;
}

#footer .copyright {
  text-align: center;
}

#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #fff;
}

#footer .credits a {
  color: #ff3333;
}

.rowinfo{
  border: 5px solid;
  margin: auto;
  width: 50%;
  padding: 10px;
}



</style>

<div class="container">
<main id="main">
<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Talk to Us</h2>
    </div>

    <div class="row justify-content-center">

      <div class="col-lg-10">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-4 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Milimani rd<br>Nairobi, 00200</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@zenitheastafrica.com</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>Not Available Yet</p>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <form action="https://formsubmit.co/imaina671@gmail.com" method="POST" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="hidden" name="_subject" value="Website Name - Zenith Contact Through Contact Form In Contact Page Of The Website - Response Submitted Through Contact Form">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
          <input type="hidden" name="_next" value="https://zenitheastafrica.com">
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Us Section -->
<section>
    <div>
        <br />
        <br />
        <br />
        <br />
        <br />
    </div>

</section>

</main><!-- End #main -->
</div>

<?php include("footer.php");?>
