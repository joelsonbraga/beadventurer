<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="facebook-domain-verification" content="8b1pvr7rwncsbs621t6bjxmlcmqlfl" />
    <title>BeAdventurer - inswitzerland</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
   <a class="whatsapp-link" href="https://wa.me/message/FGI7CB2UDFUZK1" target="_blank">
		<i class="fa fa-whatsapp"></i>
	</a>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="index.html"> <img src="img/logo-light.png" class="logo-img" alt=""> </a>
                <!-- <a class="logo" href="index.html"> <h2>TRAVOL <span>explore the world</span></h2> </a> -->
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
            <!-- Menu -->
            <?php
            require_once 'includes/menu.php'
            ?>
          </div>
       </nav>
    <!-- Header Banner -->
    <div class="banner-header section-padding back-position-center valign bg-img bg-fixed" data-overlay-dark="5" data-background="img/slider/contato.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>Get In Touch</h5>
                    <h1>Request a <span>Quote</span></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>Contact Beadventurer</h3>
                    <p> Whether you are an experienced traveler or someone planning your first trip to Switzerland, personalized service can be the ideal choice to make your trip unforgettable. Contact me to find out more and start planning your next adventure!</p>
                    <div class="phone-call mb-30">
                        <div class="icon"><span class="flaticon-phone-call"></span></div>
                        <div class="text">
                           <p>Telephone</p> <a href="https://wa.me/message/FGI7CB2UDFUZK1" target="_blank">+41 79 533 55 41</a>
                        </div>
                    </div>
                    <div class="phone-call mb-30">
                        <div class="icon"><span class="flaticon-message"></span></div>
                        <div class="text">
                            <p>Our e-mail</p> <a href="mailto:info@beadventurer.ch">info@beadventurer.ch</a>
                        </div>
                    </div>
                    <div class="phone-call">
                        <div class="icon"><span class="flaticon-placeholder"></span></div>
                        <div class="text">
                            <p>Address</p> Verbier, 1936 Bagnes, Suíça
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <div class="sidebar">
                        <div class="right-sidebar">
                            <div class="right-sidebar item">
                                <h2>Contact</h2>
                                <form method="post" class="right-sidebar item-form contact__form" action="#">
                                    <!-- form message -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message has been sent successfully. </div>
                                        </div>
                                    </div>
                                    <!-- form elements -->
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" placeholder="Name *" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="email" placeholder="E-mail *" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="phone" type="text" placeholder="Telephone *" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="subject" type="text" placeholder="Subject *" required>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="butn-dark"><a href="#0"><span>Send Message</span></a></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Map Section -->
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5533.212168526129!2d7.227620082892005!3d46.09882878011086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ecfcef7a6a973%3A0xffde3e9c0d278891!2zVmVyYmllciwgMTkzNiBCYWduZXMsIFN1w63Dp2E!5e0!3m2!1spt-BR!2sbr!4v1686019954961!5m2!1spt-BR!2sbr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section class="testimonials">
      <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/15.jpg" data-overlay-dark="5">
         <div class="container">
            <div class="row">
               <!-- Call Now  -->
               <div class="col-md-5 mb-30 mt-30">
                  <h5>Enjoy this incredible destination with a personalized tour. Contact us and share your expectations so that we can make your stay even more special. We look forward to helping you plan the trip of your dreams.</h5>
                  <div class="phone-call mb-10">
                     <div class="icon color-1"><span class="flaticon-phone-call"></span></div>
                     <div class="text">
                        <p class="color-1">Contact us</p>
                        <a href="https://wa.me/message/FGI7CB2UDFUZK1" target="_blank">+41 79 533 55 41</a>
                     </div>
                  </div>
                  <p><i class=""></i><small> </small></p>
               </div>
               <!-- Testimonials -->
               <div class="col-md-5 offset-md-2">
                  <div class="testimonials-box">
                     <div class="head-box">
                        <h6>Testimonies</h6>
                        <h4>Customer Reviews</h4>
                     </div>
                     <div class="owl-carousel owl-theme">
                        <div class="item">
                           <p>Exploring Switzerland with Bia was an incredible experience; her attention to detail and dedication were evident throughout the tours, all of which were excellently organized! An unforgettable journey that has left a lasting mark on my life!</p>
                           <div class="info">
                              <div class="author-img"> <img src="img/team/04.png" alt=""> </div>
                              <div class="cont">
                                 <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                 <h6>Solange Costa<br><br><strong>Santos SP</strong></h6>
                                 <span>Customer review</span>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <p>Experiencing Switzerland was one of the most fantastic adventures I've ever had; I highly recommend it. 😍😍</p>
                           <div class="info">
                              <div class="author-img"> <img src="img/team/03.png" alt=""> </div>
                              <div class="cont">
                                 <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                 <h6>Nathalia Gomes (@nathaliagomesbr)<br><br><strong>Rio de Janeiro RJ</strong></h6>
                                 <span>Customer review</span>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                            <p>Discovering Switzerland was one of the greatest gifts life could offer me! It's a beautiful country, featuring picturesque landscapes and numerous hidden gems. Having a knowledgeable guide, @beadventurerinswitzerland, to explore the French and German regions, truly enhanced our trip! Thank you for the warmth and kindness you showed our family, especially my daughter. I'm eager to return soon!</p>
                           <div class="info">
                              <div class="author-img"> <img src="img/team/05.png" alt=""> </div>
                              <div class="cont">
                                 <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                 <h6>Marina Xando (@marina_xando)<br><br><strong>Araçatuba SP</strong></h6>
                                 <span>Customer review</span>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <p>This was one of the most fantastic and unforgettable experiences I've ever had. Bia is an exceptional guide, brimming with friendliness, empathy, professionalism, and extensive knowledge of the region. I often dream of returning to Switzerland to enjoy a more comprehensive tour with her.</p>
                           <div class="info">
                              <div class="author-img"> <img src="img/team/06.png" alt=""> </div>
                              <div class="cont">
                                 <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                 <h6>Giovana Piotto<br><br><strong>Vancouver CA</strong></h6>
                                 <span>Customer review</span>
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
   <!-- Footer -->
   <?php
   require_once 'includes/footer.php'
   ?>
    <!-- jQuery -->
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>