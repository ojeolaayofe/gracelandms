<!DOCTYPE html>
<html lang="en">
  <head>
  

    <title>GraceLand Church - Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    
    
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img  src="images/logo.JPG"></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav nav ml-auto">
            <li class="nav-item"><a href="index.html" class="nav-link"><span>Home</span></a></li>
            
            
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="aboutUs.html">Our Believe</a>
          <a class="dropdown-item" href="ourministries.html">Our Ministries</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Pastors.html">Our Leaders</a>
        </div>
 </li>
        <li class="nav-item"><a href="events.html" class="nav-link"><span>Events</span></a></li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" class="nav-link" class="nav-item" href="gallery.html">Photo</a>
          <a class="dropdown-item" href="sermons.html">Sermon</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Facebook Ministrations</a>
        </div>
 </li>
                <li class="nav-item"><a href="#" class="nav-link"><span>Online Giving</span></a></li>
            <li class="nav-item"><a href="contactUs.html" class="nav-link"><span>Contact</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background-image:url(images/picx2.JPG);">
        <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 text-center ftco-animate mt-5">
              <div class="text">
                <div class="subheading">
                  <span>GraceLand Missionary Church</span>
                </div>
                <h1 class="mb-4" style="font-size: 20px">We are a Christ centered church, serving as missionaries to a multilingual community. </h1>
                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                <p> <a href="aboutUs.html" class="btn btn-primary btn-outline-primary py-2 px-4">Know Us more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 text-center ftco-animate mt-5">
              <div class="text">
                <div class="subheading">
                  <span>GraceLand Missionary Church</span>
                </div>
                <h1 class="mb-4" style="font-size: 20px">Raising leaders that will impact communities and win souls for the kingdom of God.</h1>
               <!--  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                <p> <a href="#about-section" class="btn btn-primary btn-outline-primary py-2 px-4">Know Us more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    
     <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>Drop your messages and contact us below</p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
          
            <form action="process.php" method="post" class="bg-light p-4 p-md-5 contact-form">
               <?php
          $Text = "";
          if (isset($_GET['error'])) 
          {
            $Text = " Please Fills in the blanks ";
            echo '<div class="alert alert-danger">'.$Text.'</div>';
          }
          if (isset($_GET['success'])) 
          {
            $Text = " Thank you,Your message has been sent ";
            echo '<div class="alert alert-success">'.$Text.'</div>';
          }
          ?>
              <div class="form-group">
           
                <input type="text" class="form-control"  placeholder=" Name" name="Username">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Your Phone Number" name="Phonenumber">
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Subject" name="subject">
              </div>
              <div class="form-group">
                <textarea name="text" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" name="btn-send" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
           </div> 

          <div class="col-md-5 d-flex">
            <div class="row d-flex contact-info mb-5">
              <div class="col-md-12 ftco-animate">
                <div class="box p-2 px-3 bg-light d-flex">
                  <div class="icon mr-3">
                    <span class="icon-map-signs"></span>
                  </div>
                  <div>
                    <h3 class="mb-3">Address</h3>
                    <p>5 Grape St. Pittsburgh, PA 15210</p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate">
                <div class="box p-2 px-3 bg-light d-flex">
                  <div class="icon mr-3">
                    <span class="icon-phone2"></span>
                  </div>
                  <div>
                    <h3 class="mb-3">Contact Number</h3>
                    <p><a href="#">+14126083235</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate">
                <div class="box p-2 px-3 bg-light d-flex">
                  <div class="icon mr-3">
                    <span class="icon-paper-plane"></span>
                  </div>
                  <div>
                    <h3 class="mb-3">Email Address</h3>
                    <p><a href="#">info@gracelandchurchministry.org</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate">
                <div class="box p-2 px-3 bg-light d-flex">
                  <div class="icon mr-3">
                    <span class="icon-globe"></span>
                  </div>
                  <div>
                    <h3 class="mb-3">Website</h3>
                    <p><a href="#">wwww.gracelandchurchministry.org</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="ftco-footer ftco-bg-dark ftco-section" id="changecolor">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2>CONTACT</h2>
              <p>
                ADDRESS<br>
                5 Grape St. Pittsburgh, PA 15210<br><br>
                Tel : 7127757031
              </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li> -->
               <p>Connect with Us on Facebook</p><li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
               <!--  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">About</h2>
              <ul class="list-unstyled">
              <!--   <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Staff</a>< -->
                <li><a href="aboutUs.html" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Beliefs</a></li>
                <!-- <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>History</a></li>
 -->                <li><a href="ourministries.html" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Ministries</a></li>
                <!-- <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Wedding &amp; Funerals</a></li> -->
               <!--  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Jobs &amp; Internship</a></li> -->
                <li><a href="Pastor.html" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Our leadership</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Service Hours</h2>
              <div class="opening-hours">
                <p>Sunday Worship Service: 10:00 am </p>
                <p>Morning Prayers: Mondays to Fridays 5:00 am </p>
              </div>
              </div>
            </div>
          </div>
        </div>
          <!-- <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Ministries</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Youth Ministry</a></li> -->
               <!--  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Recovery Groups</a></li> -->
                <!-- <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Memberships</a></li> -->
                <!-- <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Children Ministry</a></li> -->
                <!-- <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Volunteer</a></li> -->
                <!-- <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Marriage &amp; Home Ministry</a></li> -->
                <!-- <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Assistance</a></li> -->
              <!-- </ul>
            </div>
          </div> -->
          
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed<i class="icon- color-danger" aria-hidden="true"></i> by <a href="#" target="_blank">AYMTECH</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="purple"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
 

</html>
