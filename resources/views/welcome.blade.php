<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Sarabun:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Courgette&amp;subset=latin-ext" rel="stylesheet">
    <!-- //Web-Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>

    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <script src="js/jquery.bxslider.js"></script>
    <script>
        $(document).ready(function() {
            $('.slider').bxSlider({
                minSlides: 3,
                maxSlides: 4,
                slideWidth: 900,
                slideMargin: 0,
                auto: true,
            });
        });

    </script>
</head>

<body>
    <!-- main -->
    <div class="d-flex">
        <!-- header -->
        <header>
            <nav class="nav-top">
                <!-- Created By Bogdan Nagorniy -->
                <div class="logo">
                    <center>
                        <h1>
                            <a href="https://www.cmgcienfuegos.cl/index">CMG</a>
                        </h1>
                    </center>
                </div>
                <ul class="nav_links list-unstyled">
                    <li class="nav-link-list">
                        <a href="https://www.cmgcienfuegos.cl/index">
                            <span class="fa fa-home"></span>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            <span class="fa fa-question"></span>
                            <p>Nosotros</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.cmgcienfuegos.cl/servicios">
                            <span class="fa fa-cog"></span>
                            <p>Servicios</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.cmgcienfuegos.cl/productos">
                            <span class="fa fa-clipboard"></span>
                            <p>Productos</p>
                        </a>
                    </li>
                    <!--<li>
                        <a href="#team">
                            <span class="fa fa-users"></span>
                            <p>Equipo</p>
                        </a>
                    </li>-->
                    <li>
                        <a href="#testi">
                            <span class="fa fa-coffee"></span>
                            <p>Clientes</p>
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <span class="fa fa-map-marker"></span>
                            <p>Contacto</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- //header -->

        <!-- left content -->
        <div id="main-content">
            <!-- home -->
            <div id="home">
                <!-- banner -->
                <div class="banner_w3lspvt">
                    <div class="banner-top1">
                        <div class="container">
                            <div class="banner-text text-center">
                                <h3 class="my-md-4 my-3">CMG Cienfuegos</h3>
                                <p class="movetxt text-bl">Mantenimientos Industriales</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //banner -->
            </div>
            <!-- //home -->

            <!-- about -->
            <div class="welcome py-5" id="about">
                <div class="container py-xl-3 py-lg3">
                    <div class="row py-xl-1">
                        <center>
                            <div class="col-lg-9 welcome-left pr-lg-6">
                                <!--<center><div class="col-lg-6 welcome-left pr-lg-5">-->
                                <!--<h3>Story About Us</h3>-->
                                <h4 class="mt-2 mb-2">Bienvenidos</h4>
                                <h6>CMG Cienfuegos es la prueba visible de que el oficio de la cerrajería es sumamente valiosa en nuestro diario vivir. </h6>
                                <p class="mt-2">Con casi 20 años de participación en el mercado, podemos decir que hemos desarrollado cada aspecto del negocio, para ir a la par con los cambios y avances.</p>
                            </div>
                        </center>
                        <!--<div class="col-lg-6 welcome-right text-center mt-lg-0 mt-5">
							<div class="row">
								<div class="col-sm-6">
									<div class="about-sty ml-sm-3">
										<span class="fa fa-bar-chart text-wh"></span>
										<p class="text-li mt-2">Business Strategy</p>
									</div>
								</div>
								<div class="col-sm-6 mt-sm-0 mt-4">
									<div class="about-sty-2 px-4 py-5">
										<span class="fa fa-line-chart text-wh"></span>
										<p class="text-li mt-2">Business Growth</p>
									</div>
									<div class="about-sty-2 px-4 py-5 mt-4">
										<span class="fa fa-usd text-wh"></span>
										<p class="text-li mt-2">Financial Planning</p>
									</div>
								</div>
							</div>
						</div>-->
                    </div>
                </div>
            </div>
            <!-- //about -->


            <section class="stats py-3 text-center">
                <div class="container py-xl-5 my-lg-5">
                    <div class="cont-w3pvt py-sm-3 py-4">
                        <span class="w3-line text-uppercase"></span>
                        <h3 class="w3pvt-web-title mt-2 mb-3">A lo largo de los años establecimos relaciones sólidas y concretas con entidades públicas y privadas que recomiendan y eligen nuestros servicios, ya que ellos tienen un rol protagónico para nosotros.</h3>
                        <p class="text-botm">
                            Nuestra misión es solucionar y mejorar el servicio de la industria cerrajera, para esto contamos con servicios integrales y soluciones que están a la par con el mercado, con un grupo de expertos que dan celeridad e importancia a cada uno de nuestros requerimientos.</p>
                        <!--<a href="#about" class="btn button-style mt-sm-5 mt-4">Read More</a>-->
                    </div>
                </div>
            </section>
            <!-- //blog -->

            <!-- stats section -->
            <!--<div class="stats py-5" id="stats">
                <div class="container py-xl-5 py-lg-3">
                    <div class="row text-center py-sm-3">
                        <div class="col-md-3 col-sm-6 w3layouts_stats_left">
                            <p class="counter">600</p>
                            <p class="para-text-w3ls text-li">Projects Complete</p>
                        </div>
                        <div class="col-md-3 col-sm-6 w3layouts_stats_left mt-sm-0 mt-4">
                            <p class="counter">800</p>
                            <p class="para-text-w3ls text-li">Awards</p>
                        </div>
                        <div class="col-md-3 col-sm-6 w3layouts_stats_left mt-md-0 mt-4">
                            <p class="counter">1200</p>
                            <p class="para-text-w3ls text-li">Happy Clients</p>
                        </div>
                        <div class="col-md-3 col-sm-6 w3layouts_stats_left mt-md-0 mt-4">
                            <p class="counter">500</p>
                            <p class="para-text-w3ls text-li">Mail Conversation</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //stats section -->

            <!-- team -->
            <!--<section class="team py-5" id="team">
                <div class="container py-xl-5 py-lg-3">
                    <h3 class="title text-uppercase text-center text-bl mb-5 pb-xl-3">Equipo</h3>
                    <div class="row inner-sec-w3layouts-w3pvt-lauinfo">
                        <div class="col-md-4 team-grids text-center mb-4 mx-md-auto">
                            <img src="images/team1.jpg" class="img-fluid" alt="">
                            <div class="team-info">
                                <div class="caption mb-3">
                                    <h4>Miguel Cienfuegos</h4>
                                </div>
                                <div class="social-icons-section">
                                    <a class="fac" href="#">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                    <a class="twitter mx-2" href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                    <a class="google" href="#">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 team-grids my-md-0 my-4 text-center mb-4 mx-md-auto">
                            <img src="images/team2.jpg" class="img-fluid" alt="">
                            <div class="team-info">
                                <div class="caption mb-3">
                                    <h4>Adam Ster</h4>
                                </div>
                                <div class="social-icons-section">
                                    <a class="fac" href="#">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                    <a class="twitter mx-2" href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                    <a class="google" href="#">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 team-grids text-center mb-4 mx-md-auto">
                            <img src="images/team3.jpg" class="img-fluid" alt="">
                            <div class="team-info">
                                <div class="caption mb-3">
                                    <h4>Chris Tina</h4>
                                </div>
                                <div class="social-icons-section">
                                    <a class="fac" href="#">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                    <a class="twitter mx-2" href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                    <a class="google" href="#">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 team-grids text-center mb-4 mx-md-auto">
                            <img src="images/team1.jpg" class="img-fluid" alt="">
                            <div class="team-info">
                                <div class="caption mb-3">
                                    <h4>Miguel Cienfuegos</h4>
                                </div>
                                <div class="social-icons-section">
                                    <a class="fac" href="#">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                    <a class="twitter mx-2" href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                    <a class="google" href="#">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <!-- team -->

            <!-- testimonials -->
            <section class="testi text-center py-5" id="testi">
                <div class="container pb-xl-5 pb-lg-3">
                    <div class="title-section mb-sm-5 mb-4 pb-xl-4 text-center">
                        <!--<h4 class="text-bl mb-2">We have</h4>-->
                        <h3 class="title text-uppercase text-center text-bl mb-5 pb-xl-3">Clientes</h3>
                    </div>
                    <div class="contenedor">
                        <div class="cont-slider">
                            <ul class="slider">
                                <li>
                                    <img src="images/clientes/logo_banco_security.JPG">
                                </li>

                                <li>
                                    <img src="images/clientes/logo_muni_maipu.JPG">
                                </li>

                                <li>
                                    <img src="images/clientes/logo_fastpack.JPG">
                                </li>

                                <li>
                                    <img src="images/clientes/logo_muni_providencia.JPG">
                                </li>

                                <li>
                                    <img src="images/clientes/logo_gendarmeria.JPG">
                                </li>

                                <li>
                                    <img src="images/clientes/logo_poderjudicial.JPG">
                                </li>

                                <li>
                                    <img src="images/clientes/logo_ministerio_salud.JPG">
                                </li>

                                <li>
                                    <img src="images/clientes/logo_linkeschile.JPG">
                                </li>

                                <li>
                                    <img src="images/clientes/logo_propiedades_fuenzalida.JPG">
                                </li>

                                <li>
                                    <img src="images/clientes/logo_inmobiliaria_victoria.JPG">
                                </li>

                                <li>
                                    <img src="images/clientes/logo_receptores_judiciales.JPG">
                                </li>

                                <li>
                                    <img src="images/clientes/logo_sonda.JPG">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonials -->

            <!-- middle section -->
            <br><br><br><br><br><br><br><br>
            <section class="w3ls-bnrbtm py-3 text-center">
                <div class="container py-xl-5 my-lg-5">
                    <div class="cont-w3pvt py-sm-3 py-4">
                        <!--<span class="w3-line text-uppercase">CMG Cienfuegos</span>-->
                        <h3 class="w3pvt-web-title mt-2 mb-3">Proponemos una alianza sostenida y comprometida con la evolución de nuestros clientes, deseando ser parte del crecimiento de cada uno de ellos.</h3>
                        <p class="text-botm">Nuestra compañía a desarrollado cambios, permitiendo el desarrollo de nuevos modelos de trabajo, en combinación con profesionalismo, confianza y proactividad, trabajando con la mejor calidad.</p>
                        <!--<a href="#about" class="btn button-style mt-sm-5 mt-4">Read More</a>-->
                    </div>
                </div>
            </section>
            <!-- //middle section -->

            <!-- contact -->
            <section class="contact py-5" id="contact">
                <div class="container py-xl-5 py-lg-3">
                    <h3 class="title text-uppercase text-center text-bl mb-5 pb-xl-3">Contáctanos</h3>
                    <div class="row mail-w3l-w3pvt-web pt-xl-4">
                        <div class="col-md-5 contact-left-w3ls">
                            <h3>Información</h3>
                            <div class="row visit">
                                <div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
                                    <span class="fa fa-home" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 col-sm-10 col-10 contact-text-w3pvt-webinf0">
                                    <h4>Visítanos</h4>
                                    <p>Las Nieves 1451, Conchalí.</p>
                                    <p>Santiago, Chile.</p>
                                </div>
                            </div>
                            <div class="row mail-w3 my-4">
                                <div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
                                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 col-sm-10 col-10 contact-text-w3pvt-webinf0">
                                    <h4>Correo</h4>
                                    <p><a href="mailto:contacto@cmgcienfuegos.cl">contacto@cmgcienfuegos.cl</a></p>
                                </div>
                            </div>
                            <div class="row call">
                                <div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
                                    <span class="fa fa-phone" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-10 col-sm-10 col-10 contact-text-w3pvt-webinf0">
                                    <h4>Llámanos</h4>
                                    <p>+562 2623 8575</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 w3pvt-webinfo_mail_grid_right mt-md-0 mt-5">
                            <form action="enviar.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Teléfono" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Correo" required="">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Mensaje......." required=""></textarea>
                                </div>
                                <button type="submit" class="btn">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //contact -->
            <!-- map -->
            <div class="map p-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3331.7092858628275!2d-70.67007708422285!3d-33.378655001218355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c65f4af26b6d%3A0x7fd9bbb426eb46db!2sLas+Nieves+1451%2C+Conchal%C3%AD%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1562880101053!5m2!1ses!2scl" class="map" style="border:0" allowfullscreen=""></iframe>
            </div>
            <!-- //map -->

            <!-- partners -->
            <!-- <section class="partners text-center py-5">
				<div class="container py-xl-5 py-lg-3">
					<h4 class="text-bl font-weight-bold mb-sm-5 mb-4">Trusted by the world's best companies</h4>
					<ul class="list-unstyled partners-icon pt-md-5 pt-4">
						<li>
							<span class="fa fa-ravelry clr1"></span>
						</li>
						<li>
							<span class="fa fa-meetup clr2"></span>
						</li>
						<li>
							<span class="fa fa-eercast clr3"></span>
						</li>
						<li>
							<span class="fa fa-pied-piper clr4"></span>
						</li>
						<li>
							<span class="fa fa-yoast clr5"></span>
						</li>
						<li>
							<span class="fa fa-superpowers clr6"></span>
						</li>
					</ul>
				</div>
			</section>
			<!-- //partners -->

            <br>
            <!-- copyright -->
            <div class="cpy-right text-center py-3">
                <p>© 2019 Corpo. All rights reserved | Design by
                    <a href="http://w3layouts.com"> W3layouts.</a>
                </p>
            </div>
            <!-- //copyright -->
            <!-- move top icon -->
            <a href="#home" class="move-top text-center"></a>
            <!-- //move top icon -->
        </div>
        <!-- //left content -->
    </div>
    <!-- //main -->

</body>

</html>