<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
      <title>Zenith</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <!----css3---->
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" href="font/flaticon.css">
      <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
      <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&family=Chivo:wght@300;400;700&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Fira+Sans:wght@300;400;500;600;700&family=Merriweather:wght@300;400;700&family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
      <!--fontawesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <!-- Add the slick-theme.css if you want default styling -->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
      <link rel="stylesheet" href="css/animate.min.css">
      <!-- favicons -->
      <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
      <link rel="manifest" href="img/favicons/site.webmanifest">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
      <!-- fontawesome js -->
      <script src="https://kit.fontawesome.com/0c3d8da444.js" crossorigin="anonymous"></script>
      <!-- word splitter js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/jquery.gsap.min.js" integrity="sha512-K43Gi6p1AN9cBmgnY3XE1ii0wc2Rl4dArjMgYeXpYmLSZGA7jXWcX4Drj52m2K9js6qHSRQoYlKyO4sSr3nbSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- typewriter effect -->
      <script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
      <script src="https://unpkg.com/gsap@3.9.0/dist/TextPlugin.min.js"></script>
   </head>
   <body>
      <div class="header" id="header">
         <div class="navigation" id="navigation">
            <div class="header-inner" id="header-inner">
               <div class="container">
                  <style>
                     /* Style for the default state of the nested dropdown menu */
                     .nav-item.dropdown .dropdown-menu.small-menu {
                     display: none; /* Hide the nested dropdown menu by default */
                     position: absolute;
                     top: 100%;
                     left: 0;
                     margin-top: 0; /* Adjust the top margin if needed */
                     border-radius: 0; /* Optionally remove border-radius for a cleaner look */
                     box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add box shadow for depth */
                     }
                     /* Show the nested dropdown menu on hover for the "Business Design & Brand Strategy" dropdown */
                     .nav-item.dropdown:hover .dropdown-menu.small-menu {
                     display: block;
                     }
                     /* Style for the nested dropdown items */
                     .nav-item.dropdown .dropdown-menu.small-menu a {
                     padding: 8px 15px; /* Adjust padding for nested dropdown items */
                     white-space: nowrap; /* Prevent line breaks in menu items */
                     color: #fd9b28;
                     font-family: Open Sans, Arial;
                     font-weight: 500;
                     font-size: 13px;
                     background: #ffffff;
                     border-bottom: 1px groove rgba(0, 0, 0, .1);
                     box-shadow: 5px 5px 2px rgb(23 36 52 / 5%);
                     transition: 0.5s ease;
                     word-wrap: break-word;
                     }
                     .dropdown-item {
                     color: #fd9b28;
                     text-decoration: none;
                     font-weight: 400;
                     border-bottom: 1px solid rgba(0, 0, 0, .1);
                     }
                     .dropdown-item:active {
                     color: #fd9b28;
                     text-decoration: none;
                     background-color: #fd9b28;
                     }
                     .dropdown-item:hover {
                     color: #fd9b28;
                     text-decoration: none;
                     background-color: #fd9b28;
                     }
                     /* Style for the active state of dropdown items */
                     .nav-item.dropdown .dropdown-menu.small-menu a:hover {
                     background-color: #FD9B28 !important; /* Update to the desired hover color */
                     }
                     /* Style for the dropdown-submenu */
                     .nav-item.dropdown-submenu .dropdown-menu {
                     top: 0;
                     left: 100%;
                     margin-top: 0;
                     border-radius: 1;
                     box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                     word-wrap: break-word;
                     }
                     .client-slider {
                     width: 100%; /* Adjust as needed */
                     height: 300px; /* Set a fixed height for the container, adjust as needed */
                     overflow: hidden;
                     display: flex;
                     justify-content: center;
                     align-items: center;
                     }
                     .client-slider img {
                     max-width: 100%;
                     max-height: 100%;
                     object-fit: contain; /* This property maintains the aspect ratio and contains the image within the container */
                     padding: 10px; /* Adjust the padding value as needed */
                     box-sizing: border-box; /* Include padding in the total width and height of the image */
                     }
                     .overlay {
                     position: absolute;
                     top: 0;
                     left: 0;
                     width: 100%;
                     height: 100%;
                     background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)); /* Adjust the opacity (0.5) as needed */
                     pointer-events: none; /* Allow interaction with the images beneath the overlay */
                     }
                     /* .img-fluid1 {
                     max-width: 100%;
                     height: auto
                     }
                     .img-fluid {
                     max-width: 100%;
                     height: 75px;
                     } */
                  </style>
                  <nav class="navbar navbar-expand-lg my-navbar p-0">
                     <div style="display: flex; align-items: center;">
                        <a class="navbar-brand" href="index.php" style="margin-right: 10px;">
                        <img src="img/Zenith4.png" class="img-fluid" alt="Your Alt Text Here"/>
                        </a>
                        <div style="font-family: 'Montserrat', sans-serif;">
                           <p style="font-weight: 900; color: white; font-size: 30px; padding-top: 20px; line-height: 0; letter-spacing: 5px;">Zenith<br/></p>
                           <p style="color: white; font-size: 13px; line-height: 1.5; letter-spacing: 0.5px;"> East Africa Limited<br/></p>
                           <p style="color: white; font-size: 10px; line-height: 0; letter-spacing: 2px; text-align: end;">| Advisory Services</p>
                        </div>
                     </div>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span></span>
                     <span></span>
                     <span></span>
                     </button>
                     <div class="collapse navbar-collapse mobile-nav" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto ">
                           <li id="nav-test" class="nav-item active" style="padding-right: 35px;">
                              <a class="nav-link " href="index.php">Home</a>
                           </li>
                           <!-- <li class="nav-item active">
                              <a style class="nav-link " href="about-us.php" role="button">About Us</a>
                           </li> -->
                           <li class="nav-item">
                              <a class="nav-link" href="/contact.php">Get in Touch</a>
                           </li>
                           
                           <li class="nav-item" id="servicesDropdown">
                              <a style="cursor: pointer;" class="nav-link " role="button">
                                 <!-- Replace "Other" text with a Font Awesome icon -->
                                 <i class="fa-solid fa-bars"></i>
                              </a>
                              <ul class="dropdown-menu" style="white-space:nowrap">
                                 <!-- Your dropdown content here -->
                                 <li class="nav-item dropdown-submenu" >
                                    <a class="nav-link" href="/about-us.php">About Us</a>
                                 </li>
                                 <li class="nav-item dropdown-submenu">
                                    <a class="nav-link" href="/services.php">Our Offering</a>
                                 </li>
                                 <li class="nav-item dropdown-submenu">
                                    <a class="nav-link" href="/toolbox.php">Our Toolbox</a>
                                 </li>
                                 <li class="nav-item dropdown-submenu" >
                                    <a class="nav-link" href="/team.php">Our Team</a>
                                 </li>
                                 <li class="nav-item dropdown-submenu">
                                    <a class="nav-link" href="/resources.php">News Bureau</a>
                                 </li>

                                 <li class="nav-item dropdown d-none d-sm-block" id="sectorsDropdown">
                                 <a class="nav-link" role="button" data-toggle="dropdown">
                                    Sectors
                                 </a>
                                 <ul class="dropdown-menu dropdown-menu-left" style="left: -100%;float: left;">
                                    <!-- Your submenu items here -->
                                    <li class="nav-item">
                                       <a class="nav-link" >For profit businesses</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" >Non-profit organizations</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" >Civil society actors</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" >Social profit enterprises</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" >Public authorities</a>
                                    </li>
                                 </ul>
                              </li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                     <!-- social links -->
                     <form class="form-inline my-2 my-lg-0 d-lg-block d-md-none d-none">
                        <div class="header-social-icon xs-display-none d-lg-flex">
                           <div class="widget widget_pofo_social_widget" id="pofo_social_widget-5">
                              <div class="widget-title"></div>
                              <div class="social-icon-style-8">
                                 <ul class="extra-small-icon d-flex ml-lg-3">
                                    <li>
                                       <a class="instagram" href="" target="_blank">
                                          <i class="fa-brands fa-x-twitter"></i>
                                    </li>
                                    <li><a class="linkedin-in" href="" target="_blank">
                                    <i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </form>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      <script>
  $(document).ready(function () {
    // Listen for the scroll event on the document
    $(document).scroll(function () {
      // Close the navbar dropdowns
      $('.navbar-collapse.show').removeClass('show');
    });
  });
</script>
