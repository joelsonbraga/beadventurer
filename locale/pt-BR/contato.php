<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="facebook-domain-verification" content="8b1pvr7rwncsbs621t6bjxmlcmqlfl" />
    <title>BeAdventurer - inswitzerland</title>
    <link rel="shortcut icon" href="../../img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="../../css/plugins.css" />
    <link rel="stylesheet" href="../../css/style.css" />
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
                <a class="logo" href="index.html"> <img src="../../img/logo-light.png" class="logo-img" alt=""> </a>
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
                    <h5>Entre em contato</h5>
                    <h1>Solicite  <span>orçamento</span></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>Entre em contato com Beadventurer</h3>
                    <p> Seja você um viajante experiente ou alguém que está planejando sua primeira viagem à Suíça, o serviço personalizado pode ser a escolha ideal para tornar sua viagem inesquecível. Entre em contato comigo para saber mais e começar a planejar sua próxima aventura!</p>
                    <div class="phone-call mb-30">
                        <div class="icon"><span class="flaticon-phone-call"></span></div>
                        <div class="text">
                           <p>Telefone</p> <a href="https://wa.me/message/FGI7CB2UDFUZK1" target="_blank">+41 79 533 55 41</a>
                        </div>
                    </div>
                    <div class="phone-call mb-30">
                        <div class="icon"><span class="flaticon-message"></span></div>
                        <div class="text">
                            <p>Nosso E-mail</p> <a href="mailto:info@beadventurer.ch">info@beadventurer.ch</a>
                        </div>
                    </div>
                    <div class="phone-call">
                        <div class="icon"><span class="flaticon-placeholder"></span></div>
                        <div class="text">
                            <p>Endereço</p> Verbier, 1936 Bagnes, Suíça
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <div class="sidebar">
                        <div class="right-sidebar">
                            <div class="right-sidebar item">
                                <h2>Entrar em contato</h2>
                                <form method="post" class="right-sidebar item-form contact__form" action="#">
                                    <!-- form message -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success contact__msg" style="display: none" role="alert"> Sua mensagem foi enviada com sucesso. </div>
                                        </div>
                                    </div>
                                    <!-- form elements -->
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" placeholder="Nome *" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="email" placeholder="E-mail *" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="phone" type="text" placeholder="Telefone *" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="subject" type="text" placeholder="Assunto *" required>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Mensagem *" required></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="butn-dark"><a href="#0"><span>Enviar Mensagem</span></a></button>
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
      <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/contato.jpg" data-overlay-dark="5">
         <div class="container">
            <div class="row">
               <!-- Call Now  -->
               <div class="col-md-5 mb-30 mt-30">
                  <h5>Aproveite este destino incrível com um tour personalizado. Entre em contato conosco e compartilhe suas expectativas para que possamos tornar sua estadia ainda mais especial. Estamos ansiosos para ajudá-lo a planejar a viagem dos seus sonhos.</h5>
                  <div class="phone-call mb-10">
                     <div class="icon color-1"><span class="flaticon-phone-call"></span></div>
                     <div class="text">
                        <p class="color-1">Entre em Contato</p>
                        <a href="https://wa.me/message/FGI7CB2UDFUZK1" target="_blank">+41 79 533 55 41</a>
                     </div>
                  </div>
                  <p><i class=""></i><small> </small></p>
               </div>
               <!-- Testimonials -->
               <div class="col-md-5 offset-md-2">
                  <div class="testimonials-box">
                     <div class="head-box">
                        <h6>Depoimentos</h6>
                        <h4>Avaliações dos Clientes</h4>
                     </div>
                     <div class="owl-carousel owl-theme">
                        <div class="item">
                           <p>Conhecer a Suíça com a Bia foi uma experiência fantástica, seu carinho e dedicação estava sempre presentes nos passeios, tudo organizado com excelência! Uma viagem incrível que marcou minha vida para sempre!</p>
                           <div class="info">
                              <div class="author-img"> <img src="../../img/team/04.png" alt=""> </div>
                              <div class="cont">
                                 <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                 <h6>Solange Costa<br><br><strong>Santos SP</strong></h6>
                                 <span>Avaliação do cliente</span>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <p>Uma das experiência mais fantásticas que já tive na Suíca, recomendo muito. Eu e minha família amamos 😍😍</p>
                           <div class="info">
                              <div class="author-img"> <img src="../../img/team/03.png" alt=""> </div>
                              <div class="cont">
                                 <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                 <h6>Nathalia Gomes (@nathaliagomesbr)<br><br><strong>Rio de Janeiro RJ</strong></h6>
                                 <span>Avaliação do cliente</span>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                            <p>Conhecer a  Suíça foi um dos melhores presentes que a vida poderia me dar! País lindo, com paisagens de cinema e muito lugares secretos que, apenas com uma boa guia, @beadventurerinswitzerland para fazer a parte francesa e alemã, fez toda diferença na nossa viagem! Obrigado por tudo carinho com nossa família, especialmente com minha filha! Quero voltar em breve!</p>
                           <div class="info">
                              <div class="author-img"> <img src="../../img/team/05.png" alt=""> </div>
                              <div class="cont">
                                 <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                 <h6>Marina Xando (@marina_xando)<br><br><strong>Araçatuba SP</strong></h6>
                                 <span>Avaliação do cliente</span>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <p>Uma das experiências mais fantásticas e inesquecível que já tive, Bia é uma excelente guia, cheia de simpatia, empatia, profissionalismo com conhecimento da região. Ainda tenho o sonho de voltar à Suíça e fazer um tour mais completo com ela.</p>
                           <div class="info">
                              <div class="author-img"> <img src="../../img/team/06.png" alt=""> </div>
                              <div class="cont">
                                 <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                 <h6>Giovana Piotto<br><br><strong>Vancouver CA</strong></h6>
                                 <span>Avaliação do cliente</span>
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
    <script src="../../js/jquery-3.6.3.min.js"></script>
    <script src="../../js/jquery-migrate-3.0.0.min.js"></script>
    <script src="../../js/modernizr-2.6.2.min.js"></script>
    <script src="../../js/imagesloaded.pkgd.min.js"></script>
    <script src="../../js/jquery.isotope.v3.0.2.js"></script>
    <script src="../../js/pace.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/scrollIt.min.js"></script>
    <script src="../../js/jquery.waypoints.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/jquery.stellar.min.js"></script>
    <script src="../../js/jquery.magnific-popup.js"></script>
    <script src="../../js/YouTubePopUp.js"></script>
    <script src="../../js/select2.js"></script>
    <script src="../../js/datepicker.js"></script>
    <script src="../../js/jquery.counterup.min.js"></script>
    <script src="../../js/smooth-scroll.min.js"></script>
    <script src="../../js/custom.js"></script>
</body>
</html>