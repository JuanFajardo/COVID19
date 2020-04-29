<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

    <title>Covid-19 Potosí</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('pagina/css/bootstrap.css')}}">
    <!-- end Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,500,600,700,800,300' rel='stylesheet' type='text/css'>
    <!-- owl carousel SLIDER -->
    <link rel="stylesheet" href="{{asset('pagina/css/owl.carousel.css')}}">
    <!-- end awesome icons -->
    <link rel="stylesheet" href="{{asset('pagina/css/font-awesome.css')}}">
    <!-- lightbox -->
    <link href="{{asset('pagina/css/prettyPhoto.css')}}" rel="stylesheet">

    <!-- Animation Effect CSS -->
    <link rel="stylesheet" href="{{asset('pagina/css/animation.css')}}">
    <!-- Main Stylesheet CSS -->
    <link rel="stylesheet" href="{{asset('pagina/style.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{asset('pagina/rs-plugin/css/settings.css')}}" media="screen" />



</head>
<body data-spy="scroll" data-offset="25" onload="initMap(1)">
<div class="animationload"><div class="loader">Loading...</div></div> <!-- End Preloader -->

    <!--/HEADER SECTION -->
    <header class="header">
        <div class="container">
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a href="{{asset('/index.php')}}" class="navbar-brand">COVID-19 <br> <span class="slogo">POTOSI <span></a>
                    </div><!-- end navbar-header -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a data-scroll href="#home" class="int-collapse-menu">Inicio</a></li>
<li><a href="#" onclick="CargarCasos()" data-toggle="modal" data-target="#exampleModalPreview">Mapa de Riesgo</a></li>
			<li><a data-scroll href="{{$oficial->link}}" target="_blank" class="int-collapse-menu">Datos Oficiales</a></li>
                        <li><a data-scroll href="#features" class="int-collapse-menu">Covid-19</a></li>
                        <li><a data-scroll href="#about" class="int-collapse-menu">Atencion social</a></li>
                        <li><a data-scroll href="#services" class="int-collapse-menu">Prevencion</a></li>
                        <li><a data-scroll href="{{$coem->link}}" target="_blank" class="int-collapse-menu">COEM</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>
        </div><!-- end container -->
    </header><!-- end header -->




    <!--/SLIDER SECTION -->
    <section id="home" class="sliderwrapper clearfix">

       <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
       			  <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="pagina/demos/slider3.jpg" class="imagen">
        				<div class="tp-dottedoverlay twoxtwo"></div>

                        <!-- LAYER NR. 3 -->
                         <div class="tp-caption rev-video  customin customout start"
                            data-x="center"
                            data-hoffset="0"
                            data-y="140"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><hr class="topline">
														<h2>Descarga la app<br> en<br></h2><hr class="bottomline">
                        </div>

                        <!-- LAYER NR. 4 -->
                         <div class="tp-caption rev-video2 customin customout start"
                            data-x="center"
                            data-hoffset="0"
                            data-y="340"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="2200"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><p>
															<a href="https://play.google.com/store/search?q=Potosi%20Covid-19" target="_blank"><img src="{{asset('images/play.png')}}" width="250"></a>
															<br>O descarga por aqui <a href="http://covid19.potosi.bo/covid19.apk"><button class="btn btn-info">Descargar</button></a></p>
                        </div>
                    </li>

										<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
			                        <!-- MAIN IMAGE -->
															<picture>
															<source media="(max-width: 576px)" srcset="pagina/demos/576_1.jpg">
			                        <img src="pagina/demos/slider2.jpg" class="imagen">
															</picture>
			        				<div class="tp-dottedoverlay twoxtwo"></div>

			                        <!-- LAYER NR. 3 -->
			                         <div class="tp-caption rev-video  customin customout start"
			                            data-x="center"
			                            data-hoffset="0"
			                            data-y="140"
			                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
			                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			                            data-speed="1000"
			                            data-start="500"
			                            data-easing="Back.easeInOut"
			                            data-endspeed="300"><hr class="topline">
																	<h2>Respeta  <br> la cuarentena <br></h2><hr class="bottomline">
			                        </div>

			                        <!-- LAYER NR. 4 -->
			                         <div class="tp-caption rev-video2 customin customout start"
			                            data-x="center"
			                            data-hoffset="0"
			                            data-y="340"
			                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
			                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			                            data-speed="2200"
			                            data-start="500"
			                            data-easing="Back.easeInOut"
			                            data-endspeed="300"><p> y evita saciones <br> asi proteges a tu familia</p>
			                        </div>
			                    </li>

                     <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="pagina/demos/slide1.jpg"  alt="slidebg2" class="imagen">
        				<div class="tp-dottedoverlay twoxtwo"></div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rev-video skewfromleft customout"
                            data-x="center"
                            data-y="140"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 6"><hr class="topline"><h2>#QUEDATE EN  <br> CASA</h2><hr class="bottomline">
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption rev-video2 skewfromright customout"
                            data-x="center" data-hoffset="0"
                            data-y="340"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1700"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 7"><p>Solo sal cuando sea necesario</p>
                        </div>
                    </li>

		          </ul>
		          <div class="tp-bannertimer"></div>
            </div>
		</div>
    </section><!-- end slider-wrapper -->


	<section id="features" class="feature-wrapper">
    	<div class="container">
				<br><br><br>
        	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            	<div class="widget">

									<h3> ¿QUÉ ES EL CORONAVIRUS?</h3>
                    <p>
											Los coronavirus son una familia de virus que causan enfermedades (desde el resfriado común hasta enfermedades respiratorias más graves) y circulan entre humanos y animales.<br>
											En este caso, se trata del SARS-COV2. Apareció en China en diciembre pasado y provoca una enfermedad llamada COVID-19, que se extendió por el mundo y fue declarada pandemia global por la Organización Mundial de la Salud.
									</p>
                    <div id="accordion-second" class="clearfix">
                        <div class="accordion" id="accordion2">
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                <em class="fa fa-plus icon-fixed-width"></em>¿Qué es la COVID-19?.
                              </a>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse">
                              <div class="accordion-inner">
                                La COVID-19 es la enfermedad infecciosa causada por el coronavirus que se ha descubierto más recientemente. Tanto el nuevo virus como la enfermedad eran desconocidos antes de que estallara el brote en Wuhan (China) en diciembre de 2019.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                <em class="fa fa-plus icon-fixed-width"></em>¿Cuáles son los síntomas de la COVID-19?.
                              </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                              <div class="accordion-inner">
                                Los síntomas más comunes de la COVID-19 son fiebre, cansancio y tos seca. Algunos pacientes pueden presentar dolores, congestión nasal, rinorrea, dolor de garganta o diarrea. Estos síntomas suelen ser leves y aparecen de forma gradual. Algunas personas se infectan pero no desarrollan ningún síntoma y no se encuentran mal. La mayoría de las personas (alrededor del 80%) se recupera de la enfermedad sin necesidad de realizar ningún tratamiento especial. Alrededor de 1 de cada 6 personas que contraen la COVID-19 desarrolla una enfermedad grave y tiene dificultad para respirar. Las personas mayores y las que padecen afecciones médicas subyacentes, como hipertensión arterial, problemas cardiacos o diabetes, tienen más probabilidades de desarrollar una enfermedad grave. En torno al 2% de las personas que han contraído la enfermedad han muerto. Las personas que tengan fiebre, tos y dificultad para respirar deben buscar atención médica.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                <em class="fa fa-plus icon-fixed-width"></em>¿Cómo se propaga la COVID-19?.
                              </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                              <div class="accordion-inner">
                                Una persona puede contraer la COVID-19 por contacto con otra que esté infectada por el virus. La enfermedad puede propagarse de persona a persona a través de las gotículas procedentes de la nariz o la boca que salen despedidas cuando una persona infectada tose o exhala. Estas gotículas caen sobre los objetos y superficies que rodean a la persona, de modo que otras personas pueden contraer la COVID-19 si tocan estos objetos o superficies y luego se tocan los ojos, la nariz o la boca. También pueden contagiarse si inhalan las gotículas que haya esparcido una persona con COVID-19 al toser o exhalar. Por eso es importante mantenerse a más de 1 metro (3 pies) de distancia de una persona que se encuentre enferma.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                <em class="fa fa-plus icon-fixed-width"></em>¿Puede transmitirse a través del aire el virus causante de la COVID-19?
                              </a>
                            </div>
                            <div id="collapseFour" class="accordion-body collapse">
                              <div class="accordion-inner">
                                Los estudios realizados hasta la fecha apuntan a que el virus causante de la COVID-19 se transmite principalmente por contacto con gotículas respiratorias, más que por el aire.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
                                <em class="fa fa-plus icon-fixed-width"></em>¿Es posible contagiarse de COVID-19 por contacto con una persona que no presente ningún síntoma?
                              </a>
                            </div>
                            <div id="collapseFive" class="accordion-body collapse">
                              <div class="accordion-inner">
                                La principal forma de propagación de la enfermedad es a través de las gotículas respiratorias expelidas por alguien al toser. El riesgo de contraer la COVID-19 de alguien que no presente ningún síntoma es muy bajo. Sin embargo, muchas personas que contraen la COVID-19 solo presentan síntomas leves. Esto es particularmente cierto en las primeras etapas de la enfermedad. Por lo tanto, es posible contagiarse de alguien que, por ejemplo, solamente tenga una tos leve y no se sienta enfermo. La OMS está estudiando las investigaciones en curso sobre el periodo de transmisión de la COVID-19 y seguirá informando sobre los resultados actualizados.
                              </div>
                            </div>
                          </div>
                        </div><!-- end accordion -->
                    </div><!-- end accordion first -->
                </div><!-- end widget -->
            </div><!-- end col-lg-6 -->

        	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            	<div class="widget">
                	<h3>Covid-19</h3>
                    <div id="owl-blog" class="owl-carousel">
                        <div class="blog-carousel">
                            <div class="entry">
                                <img src="pagina/demos/work_01.jpg" alt="" class="img-responsive">
                                <div class="magnifier">

                                </div><!-- end magnifier -->
                                <div class="post-type">
                                    <i class="fa fa-picture-o"></i>
                                </div><!-- end pull-right -->
                            </div><!-- end entry -->

                        </div><!-- end blog-carousel -->
                        <div class="blog-carousel">
                            <div class="entry">
                                <img src="pagina/demos/work_02.jpg" alt="" class="img-responsive">
                                <div class="magnifier">

                                </div><!-- end magnifier -->
                                <div class="post-type">
                                    <i class="fa fa-picture-o"></i>
                                </div><!-- end pull-right -->
                            </div><!-- end entry -->

                        </div><!-- end blog-carousel -->
                    </div><!-- end owl-blog -->
                </div><!-- end widget -->
			</div><!-- end col-lg-6 -->
		</div><!-- end container -->
    </section><!-- end grey-wrapper -->



    <!--/ ABOUT SECTION -->
    <section id="about" class="about-wrapper">
        <div class="container">
					<br><br><br>
                    <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center">
                        <h2>Atencion </h2>
                        <p>a la ciudadania</p>
                    </div><!-- end title -->
<hr>

			      <div class="row text-center">
                    <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div data-scroll-reveal="enter from the bottom after 0.4s" class="about-box">
                            <div class="about-border"><img src="pagina/images/comercio.png" width="42"></div>
                            <h3>Test de sintomas</h3>
                            <p>Cuestionario para verificar si necesitas ir a un centro especializado para realizar el tratamiento de COVID-19</p>
														<a href="#modal1" data-toggle="modal" class="config"><button class='btn btn-primary dim'><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver</button></a>
                        </div>
                    </div>-->
										<!-- end column -->

                    <div class="col-md-6">
                        <div data-scroll-reveal="enter from the bottom after 0.2s" class="about-box">
                                <div class="about-border"> <img src="pagina/images/psicologo.png" width="54"></div>
                                <h3>Atencion Psicosocial</h3>
																<hr>
                                <p>
																	Ayuda durante emergencias o desastres la cual ofrece recursos para afrontar situaciones de crisis
																</p>
																<a href="#modal2" data-toggle="modal" class="config"><button class='btn btn-primary dim'><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver</button></a>
                        </div>
                    </div><!-- end column -->

                    <div class="col-md-6">
                        <div data-scroll-reveal="enter from the bottom after 0.2s" class="about-box">
                                <div class="about-border"> <img src="pagina/images/fumigar.png" width="54"></div>
                                <h3>Desinfeccion</h3>
																<hr>
                                <p>Detalle en los cuales se realizara la fumigacion de acuerdo al cronograma en los distritos distritos de nuestro municipio</p>
                                <a href="#modal3" data-toggle="modal" class="config"><button class='btn btn-primary dim'><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver</button></a>
																<!--
                                <a href="https://drive.google.com/file/d/18vyRIpzAlLnjtzfTdWIclbDEde8eEdod/preview" target="_blank" ><button class='btn btn-primary dim'><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Ver</button></a>
                                -->
                        </div>
                    </div><!-- end column -->
            </div><!-- end row -->




						<div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center">
								<div data-scroll-reveal="enter from the bottom after 0.5s" class="about-box">
												<div class="about-border"> <img src="pagina/images/mapa.png" width="54"></div>
												<h3>Lugarres de importancia para ti</h3>
												<hr>
												<p>Mapa con lugares de referencia como: <b style="color:#000;">Farmacias, Centros de salud, Mercados Moviles, Camaras de desinfeccion, Contenedores de EMAP<b>  en el municipio de Potosi</p>
								</div>
						</div><!-- end column -->




        </div><!-- end container -->
<div class="content">




								<div id="floating">
								<div class="btn-group" role="group" aria-label="...">
                  <button class="btn btn-warning btn-sm" id="zona2" onclick="initMap(2)">C. de salud</button>
									<button class="btn btn-info btn-sm" id="zona1" onclick="initMap(1)">Farmacias</button>
                  <button class="btn btn-success btn-sm" id="zona3" onclick="initMap(6)">Mercados Fijos</button>
									<button class="btn btn-mercado btn-sm" id="zona3" onclick="initMap(7)" >Mercados de Abasto</button>
									<button class="btn btn-movil btn-sm" id="zona3" onclick="initMap(3)">Mercados Moviles</button>
									<button class="btn btn-danger btn-sm" id="zona3" onclick="initMap(4)">Camaras de desinfeccion</button>
									<button class="btn btn-emap btn-sm" id="zona3" onclick="initMap(5)">Contenedores EMAP</button>
                                                                       <a href="{{$canasta->link}}" target="_blank"> <button class="btn btn-canasta btn-sm" id="zona7" >Precios Canasta</button></a>
								</div>
								</div>
								<div id="mapa" style=" height:750px;"></div>
</div>

<hr>
            <div class="clearfix"></div>
              <div class="widget-wrapper"></div>
    </section><!-- End About Section -->


    <!--/ COUNT SECTION -->
    <section id="count_parallax" class="parallax" style="background-image: url('images/banner1.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="overlay">
           	<div class="container">
							<center><h1 style="color:#fff;">#TU ME CUIDAS, YO TE CUIDO</h1></center>
            </div><!-- end container -->
        </div><!-- end overlay -->
    </section>

    <!--/ SERVICE SECTION -->
    <section id="services" class="white-wrapper">
        <div class="container">
            <div class="title text-center">
                <h2>PREVENCION CONTRA EL VIRUS</h2>
                <p>Se deben de tener las siguientes recomendaciones para no contraer el virus COVID-19</p>
                <hr>
            </div><!-- end title -->

            <div class="row">
                <div data-scroll-reveal="enter from the bottom after 0.3s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><i class="fa fa-hand-o-up alignleft"></i></div>
                        <h3>Lavado de manos</h3>
                        <p>
													Lávese las manos con frecuencia con un desinfectante de manos a base de alcohol o con agua y jabón.<br>
													<b>¿Por qué?</b> Lavarse las manos con un desinfectante a base de alcohol o con agua y jabón mata el virus si este está en sus manos.
												</p>
                    </div>
                </div>

                <div data-scroll-reveal="enter from the bottom after 0.6s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><i class="fa fa-check-square alignleft"></i></div>
                        <h3>Adopte medidas de higiene respiratoria</h3>
                        <p>
													Al toser o estornudar, cúbrase la boca y la nariz con el codo flexionado o con un pañuelo; tire el pañuelo inmediatamente y lávese las manos con un desinfectante de manos a base de alcohol, o con agua y jabón.<br>

													<b>¿Por qué?</b> Al cubrir la boca y la nariz durante la tos o el estornudo se evita la propagación de gérmenes y virus. Si usted estornuda o tose cubriéndose con las manos puede contaminar los objetos o las personas a los que toque.
												</p>
                    </div>
                </div>

                <div data-scroll-reveal="enter from the bottom after 0.9s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><i class="fa fa-group alignleft"></i></div>
                        <h3>Mantenga el distanciamiento social</h3>
                        <p>
													Mantenga al menos 1 metro (3 pies) de distancia entre usted y las demás personas, particularmente aquellas que tosan, estornuden y tengan fiebre.<br>
<b>¿Por qué?</b> Cuando alguien con una enfermedad respiratoria, como la infección por el 2019-nCoV, tose o estornuda, proyecta pequeñas gotículas que contienen el virus. Si está demasiado cerca, puede inhalar el virus.
												</p>
                    </div>
                </div>
            </div> <!-- end row 1 -->

            <div class="row">
                <div data-scroll-reveal="enter from the bottom after 1.2s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><i class="fa fa-exclamation-circle alignleft"></i></div>
                        <h3>Evite tocarse los ojos, la nariz y la boca</h3>
                        <p>
													<b>¿Por qué?</b> Las manos tocan muchas superficies que pueden estar contaminadas con el virus. Si se toca los ojos, la nariz o la boca con las manos contaminadas, puedes transferir el virus de la superficie a si mismo.
												</p>
                    </div>
                </div>

                <div data-scroll-reveal="enter from the bottom after 1.5s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><i class="fa fa-hospital-o alignleft"></i></div>
                        <h3>Si tiene fiebre, tos y dificultad para respirar, solicite atención médica a tiempo</h3>
                        <p>
													Indique a su prestador de atención de salud si ha viajado a una zona de China en la que se haya notificado la presencia del 2019-nCoV, o si ha tenido un contacto cercano con alguien que haya viajado desde China y tenga síntomas respiratorios.<br>
<b>¿Por qué?</b> Siempre que tenga fiebre, tos y dificultad para respirar, es importante que busque atención médica de inmediato, ya que dichos síntomas pueden deberse a una infección respiratoria o a otra afección grave. Los síntomas respiratorios con fiebre pueden tener diversas causas, y dependiendo de sus antecedentes de viajes y circunstancias personales, el 2019-nCoV podría ser una de ellas.
												</p>
                    </div>
                </div>

                <div data-scroll-reveal="enter from the bottom after 1.8s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><i class="fa fa-info-circle alignleft"></i></div>
                        <h3>Manténgase informado y siga las recomendaciones de los profesionales sanitarios</h3>
                        <p>Manténgase informado sobre las últimas novedades en relación con la COVID-19. Siga los consejos de su dispensador de atención de salud, de las autoridades sanitarias pertinentes a nivel nacional y local o de su empleador sobre la forma de protegerse a sí mismo y a los demás ante la COVID-19.</p>
                    </div>
                </div>
            </div> <!-- end row 2 -->

       </div> <!-- end container -->
    </section><!-- Service and Testimonial End -->


    <!--/ SKILL SECTION -->
    <section id="skills_parallax" class="parallax" style="background-image: url('pagina/demos/banner2.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="overlay">
            <div class="container">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="skill">
                        <img src="pagina/images/enfermo.png">
                        <h3>línea gratuita 800-101104</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="skill">
                        <img src="pagina/images/mascarilla.png">
                        <h3>Usa barbijo y guantes</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="skill">
                        <img src="pagina/images/mascotas.png" width="57%">
                        <h3>Manten a tus mascotas en casa</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="skill">
                        <img src="pagina/images/manos.png">
                        <h3>Lavate las manos frecuentemente</h3>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end overlay -->
    </section><!-- End  Skill parallax -->



		    <!-- Modal -->
		    <div class="modal fade right" style="z-index:9999;" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
		      <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
		        <div class="modal-content-full-width modal-content ">
		          <!--<div class=" modal-header-full-width   modal-header text-center">

		          </div>-->
		          <div class="modal-body">
                <center><button type="button" class="btn btn-danger btn-md btn-rounded" data-dismiss="modal">Cerrar</button></center>
								<div id="MapaCasos" style="height:750px;width= 850px;"></div>
		          </div>
		        </div>
		      </div>
		    </div>

    <!--PRICING SECTION  -->
    <!--<section id="pricing" class="dark-wrapper">
        <div class="container">
                        <div class="title text-center">
                            <h2>NOTICIAS</h2>
                        </div><!-- end title -->
        <!--    <div class="container">
							<div class="col-md-6 col-md-offset-3">

								<div id="fb-root"></div>
								<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v6.0"></script>
								<div class="fb-post" data-href="https://m.facebook.com/gobiernomunicipaldepotosi/posts/2568480290040124" data-width="450" data-show-text="true"><blockquote cite="https://developers.facebook.com/gobiernomunicipaldepotosi/posts/2568480290040124" class="fb-xfbml-parse-ignore"><p>El Centro Municipal de Zoonosis junto al equipo de Desinfección masiva del Gobierno Municipal de Potosí efectúo la...</p>Publicado por <a href="https://www.facebook.com/gobiernomunicipaldepotosi/">Gobierno Autónomo Municipal de Potosí</a> en&nbsp;<a href="https://developers.facebook.com/gobiernomunicipaldepotosi/posts/2568480290040124">Miércoles, 15 de abril de 2020</a></blockquote></div>

							</div>
						</div>
        </div>
    </section>



		    </div>
		</div>


    <!--/ CONTACT AND MAP SECTION -->
<!--   <section id="contact" class="contact-wrapper">
		 <br>
        <div class="title text-center">
                <h2>Contactanos</h2>
                <p>...</p>
                <hr>
        </div><!-- end title -->
    <!--    <div class="contact_tab text-center">
                    <ul id="myTab" class="container text-center nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Escribenos</a></li>
                        <li><a href="#tab2" role="tab" data-toggle="tab">Numeros de telefono</a></li>
                    </ul>
           <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="container">
                        <p>...</p>
                        	<div id="message"></div>
                            <form id="contactform" action="contact.php" name="contactform" method="post" data-scroll-reveal="enter from the bottom after 0.4s">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Correo Electronico">
                                </div>

                                <div class="clearfix"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-lg btn-contact btn-primary">Enviar</button>
                                </div>
                            </form> <!-- End Form -->
        <!--                </div> <!-- End Container -->
            <!--        </div><!-- End Tab Pane -->


                <!--  <div class="tab-pane fade" id="tab2">
                   <div class="panel">Numeros de telefono</div>
                  </div>
            </div>
        </div>

        <div class="container">
            <div class="title text-center">
                <div class="clearfix"></div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                        <a title="" href="#"><i class="fa fa-envelope-o aligncenter"></i></a>
                        <h2>coronavirus@potosi.bo</h2>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                        <a title="" href="#"><i class="fa fa-map-marker aligncenter"></i></a>
                        <h2>G.A.M.P. Plaza 10 de Noviembre </h2>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box"  data-scroll-reveal="enter from the bottom after 0.6s">
                         <a title="" href="#"><i class="fa fa-phone aligncenter"></i></a>
                        <h2>26165425</h2>
                    </div>
                </div>
            </div>
        </div>

    </section>-->

    <section id="footer" class="footer-wrapper text-center">
        <div class="container">
            <div class="title text-center" data-scroll-reveal="enter from the bottom after 0.5s">
               <div class="aligncenter">
				  <a href="{{asset('index.php/')}}" class="navbar-brand">GAMP <br> <span class="slogo"> v.3.0 <span></a>

                    <div class="socialFooter">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
    	<p>© <?php echo date('Y') ?> <a href="http://potosi.bo">| potosi.bo</a></p>
                <a data-scroll-reveal="enter from the bottom after 0.3s" href="#home"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </section>



<!-----------------------------> <!--Modales---------------------------------->
<style>
.modal-lg {
  width: 80% !important;
}
.modal-xl {
  width: 95% !important;
}
<style>
#content { position: relative; }
#floating { position: relative; top: 40px; left: 10px;z-index:9 }



.btn-mercado{background-color: #015bff !important;color: white;}
.btn-movil{background-color: #ae01ff !important;color: white;}
.btn-prom{background-color: #5e0008 !important;color: white;}
.btn-emap{background-color: #5e0008 !important;color: white;}

.btn-canasta{background-color: #e9a0dc !important;color: white;}

.btn-mercado:hover{color: white;}
.btn-movil:hover{color: white;}
.btn-emap:hover{color: white;}
.btn-canasta:hover{color: white;}



.modal-dialog-full-width {
		width: 100% !important;
		height: 100% !important;
		margin: 0 !important;
		padding: 0 !important;
		max-width:none !important;

}

.modal-content-full-width  {
		height: auto !important;
		min-height: 100% !important;
		border-radius: 0 !important;
		border: none;
}

.modal-header-full-width  {
		border-bottom: none !important;
    background: rgba(255, 255, 255, 0.5) !important;
}

.modal-footer-full-width  {
		border-top: none !important;
}


</style>

</style>



<div id="modal2" style="margin-top:5%;z-index:99999" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Atencion Psicosocial</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
      </div>
      <div class="modal-body">

				<div class="row">
					<div class="col-md-6">

						<div class="item entry item-h2 photography print">
							<img src="pagina/images/psico5.jpg" alt="" class="img-responsive">
								<div class="hovereffect">
										<a href="pagina/images/psico5.jpg" target="_blank"><span class="icon"><i class="fa fa-plus"></i></span></a>
										<div class="buttons">
												<h4>DENUNCIAS</h4>
												<h5>DEFENSORIA DE LA NIÑEZ Y ADOLESCENCIA POTOSI</h5>
										</div><!-- end buttons -->
								</div><!-- end hovereffect -->
						</div>


					</div>
					<div class="col-md-6">

						<div class="item entry item-h2 photography print">
							<img src="pagina/images/psico6.jpg" alt="" class="img-responsive">
								<div class="hovereffect">
										<a href="pagina/images/psico6.jpg" target="_blank"><span class="icon"><i class="fa fa-plus"></i></span></a>
										<div class="buttons">
												<h4>COLEGIO</h4>
												<h5>DEPARTAMENTAL DE PSICOLOGOS</h5>
										</div><!-- end buttons -->
								</div><!-- end hovereffect -->
						</div>

					</div>
				</div>




				<div class="row">
					<div class="col-md-6">

						<div class="item entry item-h2 photography print">
							<img src="pagina/images/psico3.jpg" alt="" class="img-responsive">
								<div class="hovereffect">
										<a href="pagina/images/psico1.jpg" target="_blank"><span class="icon"><i class="fa fa-plus"></i></span></a>
										<div class="buttons">
												<h4>CONTACTATE</h4>
												<h5>POR UN MUNICIPIO LIBRE DE VIOLENCIA</h5>
										</div><!-- end buttons -->
								</div><!-- end hovereffect -->
						</div>


					</div>
					<div class="col-md-6">

						<div class="item entry item-h2 photography print">
							<img src="pagina/images/psico1.jpg" alt="" class="img-responsive">
								<div class="hovereffect">
										<a href="pagina/images/psico1.jpg" target="_blank"><span class="icon"><i class="fa fa-plus"></i></span></a>
										<div class="buttons">
												<h4>COLEGIO</h4>
												<h5>DEPARTAMENTAL DE PSICOLOGOS</h5>
										</div><!-- end buttons -->
								</div><!-- end hovereffect -->
						</div>

					</div>
				</div>


				<div class="row">
					<div class="col-md-6">

						<div class="item entry item-h2 photography print">
							<img src="pagina/images/psico4.jpg" alt="" class="img-responsive">
								<div class="hovereffect">
										<a href="pagina/images/psico4.jpg" target="_blank"><span class="icon"><i class="fa fa-plus"></i></span></a>
										<div class="buttons">
												<h4>LINEAS DIRECTAS</h4>
												<h5>BRIGADA DE PRIMEROS AUXILIOS</h5>
										</div><!-- end buttons -->
								</div><!-- end hovereffect -->
						</div>
					</div>

					<div class="col-md-6">

						<div class="item entry item-h2 photography print">
							<img src="pagina/images/psico2.jpg" alt="" class="img-responsive">
								<div class="hovereffect">
										<a href="pagina/images/psico2.jpg" target="_blank"><span class="icon"><i class="fa fa-plus"></i></span></a>
										<div class="buttons">
												<h4>COLEGIO</h4>
												<h5>DEPARTAMENTAL DE PSICOLOGOS</h5>
										</div><!-- end buttons -->
								</div><!-- end hovereffect -->
						</div>

					</div>
				</div>



                                <div class="row">
                                        <div class="col-md-6">

                                                <div class="item entry item-h2 photography print">
                                                        <img src="pagina/images/psico7.jpg" alt="" class="img-responsive">
                                                                <div class="hovereffect">
                                                                                <a href="pagina/images/psico7.jpg" target="_blank"><span class="icon"><i class="fa fa-plus"></i></span></a>
                                                                                <div class="buttons">
                                                                                                <h4>LINEAS DE PROFESIONALES MEDICOS</h4>
                                                                                                <h5>CONSULTAS VIA WHATSAPP</h5>
                                                                                </div><!-- end buttons -->
                                                                </div><!-- end hovereffect -->
                                                </div>
                                        </div>

                                </div>





      </div>
      <div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<style>
<style type="text/css">
.table {
    margin: 0 auto;
    width: 80%;
}
</style>
</style>


<div class="modal fade right" style="z-index:9999;" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
  <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
    <div class="modal-content-full-width modal-content">
      <div class="modal-header-full-width   modal-header text-center">
<center>

<button type="button"  class="btn btn-danger btn-md btn-rounded" data-dismiss="modal">Cerrar</button>
</center>
      </div>
      <div class="modal-body">




        <ul class="nav nav-tabs nav-pills" id="myTab">
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seleccionar Opcion<span class="caret"></span></a>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li><a href="#tab1" data-toggle="tab">Ruta Diaria</a></li>
                    <li><a href="#tab2" data-toggle="tab">Cronograma Desinfeccion</a></li>
                    <li><a href="#tab3" data-toggle="tab">Contatos de Consulta</a></li>
                </ul>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" id="tab1">
		RUTA DIARIA
              <div class="embed-responsive embed-responsive-16by9">
                 <iframe style="width: 100%; height: 80vh;" src="" data-src="{{$fumigacion_diaria->link or ''}}" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="tab-pane" id="tab2">
		CRONOGRAMA DE RUTA
              <div class="embed-responsive embed-responsive-16by9">
                 <iframe style="width: 100%; height: 80vh;" src="" data-src="{{$fumigacion->link}}" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="tab-pane" id="tab3">
 <div class="col-md-6">
DATOS DE CONTACTO<br><br>
              <table class="table table-responsive table-bordered" width="50%">
                <tr>
                <th>Nombre</th>
                <th>Telefono</th>
              </tr>
              <tr>
                <td>VEIMAR VELAZQUES</td>
                <td>69633613</td>
<!--		<td>
<a class="btn btn-large btn-info" href="https://wa.me/59169633613">
  <i class="fa fa-comments"></i> Llamar</a>

		</td>-->
              </tr>
              <tr>
                <td>ENNAR OROPEZA</td>
                <td>73874183</td>
              </tr>
              <tr>
                <td>DAVID GOMEZ</td>
                <td>74245412</td>
              </tr>
              <tr>
                <td>RUBEN QUISPE</td>
                <td>69312558</td>
              </tr>
              </table>
</div>

            </div>
        </div>





      </div>
      </div>
    </div>
  </div>




<!--
<div id="modal3" style="z-index:99999" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Lugares de importancia para ti</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
      </div>
      <div class="modal-body">




      </div>
      <div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
-->


<!-----------------------------> <!--Fin modales---------------------------------->


    <!-- SECTION CLOSED -->
<style>
.label {
   color: #000;
   background-color: white;
   border: 1px solid #000;
   font-family: "Lucida Grande", "Arial", sans-serif;
   font-size: 12px;
   text-align: center;
   white-space: nowrap;
   padding: 2px;
}</style>

    <script src="{{asset('pagina/js/jquery.js')}}"></script>
    <script src="{{asset('pagina/js/bootstrap.js')}}"></script>
    <script src="{{asset('pagina/js/smooth-scroll.js')}}"></script>
    <script src="{{asset('pagina/js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('pagina/js/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('pagina/js/owl.carousel.js')}}"></script>
	<script src="{{asset('pagina/js/jquery.jigowatt.js')}}"></script>
    <script src="{{asset('pagina/js/custom.js')}}"></script>
	<script src="{{asset('pagina/js/jquery.unveilEffects.js')}}"></script>
    <script src="{{asset('pagina/js/jquery.isotope.min.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWfhkbkuAlTm08GKlCAUcINKqXUSTdzqE" async defer></script>

<div id="aviso" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:9999; text-align: justify;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#FF5E21;color:#fff">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Aviso</h4>
      </div>
      <div class="modal-body">
				Debido a los horarios de trabajo limitado que mantiene el personal de GOOGLE PLAY por el coronavirus (Covid-19), la aplicación aún no fue revisada por dicho personal el cual tardara unos días.<br>
				Mientras dura este proceso por favor descarga la aplicación desde <a href="http://covid19.potosi.bo/covid19.apk"><button class="btn btn-info btn-sm">AQUI</button></a>
      </div>
    </div>
  </div>
</div>



<script>

    $(window).on('load',function(){
        $('#aviso').modal('show');
    });

$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
  var open_tab = $(e.target).attr('href');
  var iframe = $(open_tab).find('iframe')
  var iframe_src = iframe.data('src')
  if(iframe.attr('src') == ""){
      iframe.attr('src', iframe_src)
  }
})

var map;
var map2;
var markers = [];
var valor=1

function initMap(valor)
{
  myLatlng = new google.maps.LatLng(-19.57861330496016,-65.76237916946411);
 var mapOptions = {
   zoom: 15,
   center: myLatlng,
	 //mapTypeId: google.maps.MapTypeId.SATELLITE,
  styles: [
  {
    featureType: 'poi.business',
    "stylers": [{ "visibility": "off" }]
  },
  {
    featureType: 'administrative.locality',
    elementType: 'labels.text.fill',
    "stylers": [{ "visibility": "off" }]
  }


  ]
}

  var map = new google.maps.Map(document.getElementById("mapa"), mapOptions);
  var geocoder = new google.maps.Geocoder();

	url  = '{{ asset("/index.php/CargarMarcadores/")}}/'+valor;
	$.getJSON(url, null, function(data)
  {
			if(data.length>0)
    	{
				$.each(data, function(field, e)
	      {

				switch(e.id_tipo)
				{
					case 1:
					var html = "<center><h5>"+e.nombre+"</h5></center> <b>Direccion: </b>"+e.direccion;
					color="5bc0de";
					colortexto='fff';
					break;
					case 2:
					var html = "<center><h5>"+e.nombre+"</h5></center> <b>Zona: </b>"+e.zona;
					color="f0ad4e";
					colortexto='fff';
					break;
					case 3:
					var html = "<center><h5>MERCADO MOVIL</h5></center><b>Dia: </b>"+e.nombre+" "+e.responsable+"<br><b>Direccion: </b>"+e.direccion;
					color="ae01ff";
					colortexto='fff';
					break;
					case 4:
					var html = "<center><h5>CAMARA DE DESINFECCION</h5></center><b>Ubicacion: </b>"+e.nombre+"<br><b>Direccion: </b>"+e.direccion;
					color="d9534f";
					colortexto='fff';
					break;
					case 5:
					var html = "<center><h5>CONTENEDOR EMAP</h5></center><b>Direccion: </b>"+e.nombre;
					color="5e0008";
					colortexto='fff';
					break;
					case 6:
					var html = "<center><h5>MERCADOS</h5></center><b>Nombre: </b>"+e.nombre+"<br><b>Direccion: </b>"+e.direccion;
					color="5cb85c";
					colortexto='000';
					break;
					case 7:
					var html = "</center><h5>MERCADOS DE ABASTO</h5></center><b>Nombre: </b>"+e.nombre+"<br><b>Direccion: </b>"+e.direccion;
					color="015bff";
					colortexto='000';
					break;
				}

         var infoWindow = new google.maps.InfoWindow({content: html});
         //color=(e.calle.indexOf('IMPARES')> -1)?"fee143":"d42121";

				 var image='data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2238%22%20height%3D%2238%22%20viewBox%3D%220%200%2038%2038%22%3E%3Cpath%20fill%3D%22%23'+color+'%22%20stroke%3D%22%23ccc%22%20stroke-width%3D%22.5%22%20d%3D%22M34.305%2016.234c0%208.83-15.148%2019.158-15.148%2019.158S3.507%2025.065%203.507%2016.1c0-8.505%206.894-14.304%2015.4-14.304%208.504%200%2015.398%205.933%2015.398%2014.438z%22%2F%3E%3Ctext%20transform%3D%22translate%2819%2018.5%29%22%20fill%3D%22%23'+colortexto+'%22%20style%3D%22font-family%3A%20Arial%2C%20sans-serif%3Bfont-weight%3Abold%3Btext-align%3Acenter%3B%22%20font-size%3D%22'+13+'%22%20text-anchor%3D%22middle%22%3E' + '' + '%3C%2Ftext%3E%3C%2Fsvg%3E';
				 coordenadas = new google.maps.LatLng(e.latitud, e.longitud);
				 var marker = new google.maps.Marker({
					position: coordenadas,
					draggable: false,
					map: map,
					icon: image,
					});
					/***************************************************************/
					markers.push(marker);
					google.maps.event.addListener(marker, 'click', function ()
					{
						infoWindow.open(map, marker);
					});
				});
			}



   /*geocoder.geocode({
      'latLng': event.latLng
    }, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[0]) {
          alert(results[0].formatted_address);
        }
      }
    });
*/


   });

}


function CargarCasos()
{
	myLatlng2 = new google.maps.LatLng(-19.57861330496016,-65.76237916946411);
 var mapOptions2 = {
	 zoom: 15,
	 center: myLatlng2,
	 //mapTypeId: google.maps.MapTypeId.SATELLITE,
	styles: [
		{
			featureType: 'poi.business',
			"stylers": [{ "visibility": "off" }]
		},
		{
			featureType: 'administrative.locality',
			elementType: 'labels.text.fill',
			"stylers": [{ "visibility": "off" }]
		}


		]
	}
	var map2 = new google.maps.Map(document.getElementById("MapaCasos"), mapOptions2);
  var dist1 = [
       {lat: -19.585405804, lng: -65.750744822},
       {lat: -19.585580299, lng: -65.749742677},
       {lat: -19.585804955, lng: -65.748583599},
       {lat: -19.586047942, lng: -65.747716535},
       {lat: -19.586203826, lng: -65.747048209},
       {lat: -19.586382430, lng: -65.746473980},
       {lat: -19.586550704, lng: -65.745948690},
       {lat: -19.586702083, lng: -65.745443193},
       {lat: -19.587000300, lng: -65.744847366},
       {lat: -19.587343606, lng: -65.744145675},
       {lat: -19.587773276, lng: -65.743288887},
       {lat: -19.588090418, lng: -65.743023999},
       {lat: -19.588126553, lng: -65.741747692},
       {lat: -19.588121967, lng: -65.741167751},
       {lat: -19.588130752, lng: -65.740787929},
       {lat: -19.588186737, lng: -65.740317250},
       {lat: -19.588235695, lng: -65.740000037},
       {lat: -19.588293866, lng: -65.739683869},
       {lat: -19.588372951, lng: -65.739295072},
       {lat: -19.588418643, lng: -65.739040748},
       {lat: -19.588492496, lng: -65.738630119},
       {lat: -19.588522767, lng: -65.738320618},
       {lat: -19.588388008, lng: -65.737685960},
       {lat: -19.588316558, lng: -65.737222141},
       {lat: -19.588209261, lng: -65.736947623},
       {lat: -19.588136339, lng: -65.736815044},
       {lat: -19.588215841, lng: -65.736527924},
       {lat: -19.588231612, lng: -65.736396237},
       {lat: -19.588124463, lng: -65.736330092},
       {lat: -19.587865907, lng: -65.735724111},
       {lat: -19.588075917, lng: -65.735403746},
       {lat: -19.588529891, lng: -65.734292630},
       {lat: -19.588869081, lng: -65.733416463},
       {lat: -19.589456919, lng: -65.732091964},
       {lat: -19.584839906, lng: -65.727034506},
       {lat: -19.581100911, lng: -65.730265737},
       {lat: -19.580008567, lng: -65.731094809},
       {lat: -19.576363348, lng: -65.733081816},
       {lat: -19.576594280, lng: -65.734504545},
       {lat: -19.576991650, lng: -65.735237933},
       {lat: -19.576973164, lng: -65.735476609},
       {lat: -19.576451398, lng: -65.738007872},
       {lat: -19.578160357, lng: -65.739574930},
       {lat: -19.578730473, lng: -65.742559817},
       {lat: -19.578586015, lng: -65.743451490},
       {lat: -19.578621045, lng: -65.744655017},
       {lat: -19.578641404, lng: -65.746260693},
       {lat: -19.578343060, lng: -65.746527946},
       {lat: -19.579981324, lng: -65.747478085},
       {lat: -19.580618235, lng: -65.747860783},
       {lat: -19.579890187, lng: -65.748878511},
       {lat: -19.579185596, lng: -65.749885090},
       {lat: -19.580305111, lng: -65.750005143},
       {lat: -19.581015501, lng: -65.750016885},
       {lat: -19.581639460, lng: -65.749951233},
       {lat: -19.582039881, lng: -65.750039982},
       {lat: -19.582615713, lng: -65.750178668},
       {lat: -19.585405804, lng: -65.750744822},
   ];
color="fff";
colortexto="fff";
 var image='data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2238%22%20height%3D%2238%22%20viewBox%3D%220%200%2038%2038%22%3E%3Cpath%20fill%3D%22%23'+color+'%22%20stroke%3D%22%23ccc%22%20stroke-width%3D%22.5%22%20d%3D%22M34.305%2016.234c0%208.83-15.148%2019.158-15.148%2019.158S3.507%2025.065%203.507%2016.1c0-8.505%206.894-14.304%2015.4-14.304%208.504%200%2015.398%205.933%2015.398%2014.438z%22%2F%3E%3Ctext%20transform%3D%22translate%2819%2018.5%29%22%20fill%3D%22%23'+colortexto+'%22%20style%3D%22font-family%3A%20Arial%2C%20sans-serif%3Bfont-weight%3Abold%3Btext-align%3Acenter%3B%22%20font-size%3D%22'+13+'%22%20text-anchor%3D%22middle%22%3E' + '' + '%3C%2Ftext%3E%3C%2Fsvg%3E';
  var dist1_ = new google.maps.Polygon({
  paths: dist1,
  strokeColor: '#FF3333',
  strokeOpacity: 0.8,
  strokeWeight: 2,
  fillColor: '#FF0000',
  fillOpacity: 0.05
  });
    dist1_.setMap(map2);
    var marker = new google.maps.Marker({
      position: {lat: -19.583088072261475, lng: -65.73755576341614},
      icon:image,
      //label: "D20",
      label: {
      color: '#000', // <= HERE
      fontSize: '13px',
      fontWeight: '900',
      text: 'DISTRITO-1',

      },
      map: map2
    });


    var dist2 = [
            {lat: -19.590023318, lng: -65.750904337},
            {lat: -19.590023318, lng: -65.750904337},
            {lat: -19.589972698, lng: -65.750019716},
            {lat: -19.589899103, lng: -65.749342395},
            {lat: -19.589874675, lng: -65.748731635},
            {lat: -19.589864413, lng: -65.748399749},
            {lat: -19.589868176, lng: -65.748056848},
            {lat: -19.589848936, lng: -65.747456782},
            {lat: -19.589818107, lng: -65.747117032},
            {lat: -19.589826697, lng: -65.746839388},
            {lat: -19.589859897, lng: -65.746643146},
            {lat: -19.589908683, lng: -65.746485160},
            {lat: -19.590023379, lng: -65.746480171},
            {lat: -19.590235807, lng: -65.746529680},
            {lat: -19.590729855, lng: -65.746673083},
            {lat: -19.590809725, lng: -65.746293351},
            {lat: -19.590881751, lng: -65.746111707},
            {lat: -19.590948141, lng: -65.746102777},
            {lat: -19.590971128, lng: -65.745891931},
            {lat: -19.591103469, lng: -65.745606383},
            {lat: -19.591146467, lng: -65.745536716},
            {lat: -19.591186421, lng: -65.745391251},
            {lat: -19.591260228, lng: -65.745099650},
            {lat: -19.591500087, lng: -65.745167171},
            {lat: -19.591700780, lng: -65.745199056},
            {lat: -19.591813683, lng: -65.745214703},
            {lat: -19.591899440, lng: -65.745004335},
            {lat: -19.592027681, lng: -65.744753180},
            {lat: -19.592134374, lng: -65.744508032},
            {lat: -19.592219057, lng: -65.744293446},
            {lat: -19.592267530, lng: -65.744177129},
            {lat: -19.592305259, lng: -65.744043001},
            {lat: -19.592850241, lng: -65.744189309},
            {lat: -19.592905219, lng: -65.744185962},
            {lat: -19.592946833, lng: -65.743974798},
            {lat: -19.593000464, lng: -65.743662826},
            {lat: -19.593077689, lng: -65.743408085},
            {lat: -19.593130846, lng: -65.743161665},
            {lat: -19.593175860, lng: -65.742891189},
            {lat: -19.593129158, lng: -65.742599905},
            {lat: -19.593210453, lng: -65.742322010},
            {lat: -19.593318895, lng: -65.741964485},
            {lat: -19.593393213, lng: -65.741835544},
            {lat: -19.593734217, lng: -65.741743117},
            {lat: -19.593936250, lng: -65.741632237},
            {lat: -19.594162043, lng: -65.741405230},
            {lat: -19.594205371, lng: -65.741246253},
            {lat: -19.594230997, lng: -65.741032628},
            {lat: -19.594242877, lng: -65.740768418},
            {lat: -19.594252149, lng: -65.740398528},
            {lat: -19.594262168, lng: -65.740237630},
            {lat: -19.594432843, lng: -65.739761048},
            {lat: -19.594828142, lng: -65.738578015},
            {lat: -19.595472530, lng: -65.738278195},
            {lat: -19.596232994, lng: -65.738029885},
            {lat: -19.596603141, lng: -65.737751409},
            {lat: -19.596915685, lng: -65.737446400},
            {lat: -19.597402613, lng: -65.737080206},
            {lat: -19.597963852, lng: -65.736963193},
            {lat: -19.598445268, lng: -65.737306519},
            {lat: -19.598771873, lng: -65.737565642},
            {lat: -19.599427688, lng: -65.736597907},
            {lat: -19.601612371, lng: -65.733607606},
            {lat: -19.592206690, lng: -65.730546693},
            {lat: -19.591307725, lng: -65.728507286},
            {lat: -19.589994325, lng: -65.728577696},
            {lat: -19.589051315, lng: -65.729526133},
            {lat: -19.589422602, lng: -65.731692887},
            {lat: -19.589448018, lng: -65.732068054},
            {lat: -19.588549876, lng: -65.734222750},
            {lat: -19.588184193, lng: -65.735138985},
            {lat: -19.588076057, lng: -65.735403827},
            {lat: -19.587865887, lng: -65.735723423},
            {lat: -19.588123940, lng: -65.736329795},
            {lat: -19.588230305, lng: -65.736395770},
            {lat: -19.588215910, lng: -65.736529478},
            {lat: -19.588135992, lng: -65.736811760},
            {lat: -19.588209442, lng: -65.736946017},
            {lat: -19.588314448, lng: -65.737219477},
            {lat: -19.588392703, lng: -65.737704856},
            {lat: -19.588465829, lng: -65.738052800},
            {lat: -19.588523786, lng: -65.738322182},
            {lat: -19.588493368, lng: -65.738623522},
            {lat: -19.588479736, lng: -65.738702269},
            {lat: -19.588414100, lng: -65.739069661},
            {lat: -19.588365686, lng: -65.739332093},
            {lat: -19.588311858, lng: -65.739592937},
            {lat: -19.588235184, lng: -65.740000909},
            {lat: -19.588186774, lng: -65.740317681},
            {lat: -19.588129531, lng: -65.740802659},
            {lat: -19.588122006, lng: -65.741213802},
            {lat: -19.588126311, lng: -65.741780006},
            {lat: -19.588105770, lng: -65.742456966},
            {lat: -19.588090157, lng: -65.743024700},
            {lat: -19.587773953, lng: -65.743285408},
            {lat: -19.587665176, lng: -65.743503834},
            {lat: -19.587571803, lng: -65.743688599},
            {lat: -19.587516438, lng: -65.743804185},
            {lat: -19.587459500, lng: -65.743914718},
            {lat: -19.587007659, lng: -65.744830708},
            {lat: -19.586836017, lng: -65.745177288},
            {lat: -19.586694063, lng: -65.745469456},
            {lat: -19.586523804, lng: -65.746029010},
            {lat: -19.586379603, lng: -65.746474681},
            {lat: -19.586200882, lng: -65.747063979},
            {lat: -19.586057406, lng: -65.747676973},
            {lat: -19.585808872, lng: -65.748570160},
            {lat: -19.585643831, lng: -65.749394765},
            {lat: -19.585457946, lng: -65.750458599},
            {lat: -19.585407738, lng: -65.750743476},
            {lat: -19.585847748, lng: -65.750849986},
            {lat: -19.585955280, lng: -65.750873915},
            {lat: -19.586150829, lng: -65.750913696},
            {lat: -19.586306246, lng: -65.750942631},
            {lat: -19.586821803, lng: -65.751009960},
            {lat: -19.587163650, lng: -65.750991047},
            {lat: -19.587381212, lng: -65.750984662},
            {lat: -19.587787220, lng: -65.750984425},
            {lat: -19.588176925, lng: -65.750986963},
            {lat: -19.588290270, lng: -65.750986400},
            {lat: -19.588393452, lng: -65.750986856},
            {lat: -19.588594048, lng: -65.750988506},
            {lat: -19.588730809, lng: -65.750991605},
            {lat: -19.589177005, lng: -65.750960578},
            {lat: -19.589425964, lng: -65.750945034},
            {lat: -19.590023318, lng: -65.750904337},
    ];
    var dist2_ = new google.maps.Polygon({
    paths: dist2,
    strokeColor: '#FF6A33',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FF6A33',
    fillOpacity: 0.05
    });
      dist2_.setMap(map2);
      var marker = new google.maps.Marker({
        position: {lat: -19.591467162386518, lng: -65.740216610342},
        icon:image,
        label: {
        color: '#000', // <= HERE
        fontSize: '13px',
        fontWeight: '900',
        text: 'DISTRITO-2'
        },
        map: map2
      });

      var dist3 = [
              {lat: -19.590020447, lng: -65.750904933},
              {lat: -19.590740064, lng: -65.750863969},
              {lat: -19.591489565, lng: -65.750809953},
              {lat: -19.591642345, lng: -65.750796203},
              {lat: -19.591954304, lng: -65.750683865},
              {lat: -19.592291559, lng: -65.750570676},
              {lat: -19.592332347, lng: -65.750546327},
              {lat: -19.592475880, lng: -65.750148029},
              {lat: -19.592793830, lng: -65.749155749},
              {lat: -19.593056855, lng: -65.748373480},
              {lat: -19.593534984, lng: -65.748497721},
              {lat: -19.594054337, lng: -65.748682537},
              {lat: -19.594103703, lng: -65.748489551},
              {lat: -19.594116453, lng: -65.748421121},
              {lat: -19.594169187, lng: -65.748289620},
              {lat: -19.594231222, lng: -65.748149680},
              {lat: -19.594367126, lng: -65.747770400},
              {lat: -19.594442821, lng: -65.747451420},
              {lat: -19.594514872, lng: -65.747161664},
              {lat: -19.594534626, lng: -65.747058007},
              {lat: -19.594568903, lng: -65.746970972},
              {lat: -19.594605909, lng: -65.746905404},
              {lat: -19.594714870, lng: -65.746645793},
              {lat: -19.594837966, lng: -65.746368141},
              {lat: -19.595341863, lng: -65.745864888},
              {lat: -19.595696653, lng: -65.745151571},
              {lat: -19.595923078, lng: -65.744696531},
              {lat: -19.596176981, lng: -65.744112423},
              {lat: -19.596456948, lng: -65.743537048},
              {lat: -19.596653652, lng: -65.743082806},
              {lat: -19.597149168, lng: -65.742390235},
              {lat: -19.597381587, lng: -65.742065867},
              {lat: -19.597714687, lng: -65.741650764},
              {lat: -19.597787697, lng: -65.741542434},
              {lat: -19.597959114, lng: -65.741014892},
              {lat: -19.597932402, lng: -65.740748119},
              {lat: -19.597946091, lng: -65.740427849},
              {lat: -19.597912475, lng: -65.739895297},
              {lat: -19.599152017, lng: -65.738772591},
              {lat: -19.599285727, lng: -65.738651573},
              {lat: -19.599590723, lng: -65.738226807},
              {lat: -19.599643348, lng: -65.738153095},
              {lat: -19.599888724, lng: -65.737811040},
              {lat: -19.600110829, lng: -65.737496853},
              {lat: -19.600345293, lng: -65.737177106},
              {lat: -19.600696050, lng: -65.736736566},
              {lat: -19.601027729, lng: -65.736318481},
              {lat: -19.604912022, lng: -65.735382075},
              {lat: -19.601587327, lng: -65.733610090},
              {lat: -19.599688262, lng: -65.736231269},
              {lat: -19.598769320, lng: -65.737562632},
              {lat: -19.597961578, lng: -65.736960177},
              {lat: -19.597414885, lng: -65.737079691},
              {lat: -19.596936766, lng: -65.737429946},
              {lat: -19.596526184, lng: -65.737818149},
              {lat: -19.596255258, lng: -65.738021637},
              {lat: -19.595459466, lng: -65.738287104},
              {lat: -19.594824599, lng: -65.738579745},
              {lat: -19.594263666, lng: -65.740248499},
              {lat: -19.594233829, lng: -65.741002282},
              {lat: -19.594196271, lng: -65.741274021},
              {lat: -19.594165466, lng: -65.741401021},
              {lat: -19.593895967, lng: -65.741663887},
              {lat: -19.593736479, lng: -65.741749577},
              {lat: -19.593401075, lng: -65.741841949},
              {lat: -19.593326329, lng: -65.741942930},
              {lat: -19.593123687, lng: -65.742602008},
              {lat: -19.593175305, lng: -65.742914977},
              {lat: -19.593119235, lng: -65.743182608},
              {lat: -19.593083628, lng: -65.743405914},
              {lat: -19.593008438, lng: -65.743642273},
              {lat: -19.592903971, lng: -65.744181225},
              {lat: -19.592858866, lng: -65.744198292},
              {lat: -19.592310713, lng: -65.744043509},
              {lat: -19.592245006, lng: -65.744235726},
              {lat: -19.592139621, lng: -65.744507785},
              {lat: -19.591986849, lng: -65.744825908},
              {lat: -19.591871469, lng: -65.745064116},
              {lat: -19.591807078, lng: -65.745218228},
              {lat: -19.591519385, lng: -65.745166075},
              {lat: -19.591259336, lng: -65.745098664},
              {lat: -19.591199191, lng: -65.745344326},
              {lat: -19.591144412, lng: -65.745531167},
              {lat: -19.591044827, lng: -65.745723224},
              {lat: -19.590978549, lng: -65.745887692},
              {lat: -19.590950979, lng: -65.746095651},
              {lat: -19.590878152, lng: -65.746116758},
              {lat: -19.590837632, lng: -65.746217499},
              {lat: -19.590807175, lng: -65.746304765},
              {lat: -19.590724937, lng: -65.746672312},
              {lat: -19.590353122, lng: -65.746559593},
              {lat: -19.590021437, lng: -65.746477617},
              {lat: -19.589909515, lng: -65.746488451},
              {lat: -19.589866636, lng: -65.746622293},
              {lat: -19.589825517, lng: -65.746807635},
              {lat: -19.589818945, lng: -65.747107677},
              {lat: -19.589836545, lng: -65.747289969},
              {lat: -19.589846657, lng: -65.747459900},
              {lat: -19.589867325, lng: -65.748064563},
              {lat: -19.589868457, lng: -65.748577204},
              {lat: -19.589871888, lng: -65.748761128},
              {lat: -19.589891560, lng: -65.749176563},
              {lat: -19.589899826, lng: -65.749304518},
              {lat: -19.589925204, lng: -65.749606013},
              {lat: -19.589966947, lng: -65.749970780},
              {lat: -19.589995379, lng: -65.750458565},
              {lat: -19.590020447, lng: -65.750904933},
      ];

      var dist3_ = new google.maps.Polygon({
      paths: dist3,
      strokeColor: '#FFE633',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FFE633',
      fillOpacity: 0.05
      });
        dist3_.setMap(map2);
        var marker = new google.maps.Marker({
          position: {lat: -19.595149998985605, lng: -65.74480533599854},
          icon:image,
          label: {
          color: '#000', // <= HERE
          fontSize: '13px',
          fontWeight: '900',
          text: 'DISTRITO-3'
          },
          map: map2
        });

        var dist4 = [
                {lat: -19.594344484, lng: -65.748740419},
                {lat: -19.594725788, lng: -65.748849949},
                {lat: -19.595087581, lng: -65.748797996},
                {lat: -19.595213245, lng: -65.748740281},
                {lat: -19.595563379, lng: -65.748886674},
                {lat: -19.595522210, lng: -65.749028366},
                {lat: -19.596049677, lng: -65.749218356},
                {lat: -19.596358255, lng: -65.749352115},
                {lat: -19.596676621, lng: -65.749255884},
                {lat: -19.597356516, lng: -65.749075087},
                {lat: -19.597697052, lng: -65.748792075},
                {lat: -19.597971010, lng: -65.748543860},
                {lat: -19.598483081, lng: -65.748518548},
                {lat: -19.598662934, lng: -65.748483811},
                {lat: -19.599243920, lng: -65.748360958},
                {lat: -19.599681596, lng: -65.748244108},
                {lat: -19.600262855, lng: -65.747716681},
                {lat: -19.600558115, lng: -65.747457467},
                {lat: -19.600913894, lng: -65.747097108},
                {lat: -19.601216671, lng: -65.746884120},
                {lat: -19.601489037, lng: -65.746691481},
                {lat: -19.601956601, lng: -65.746476850},
                {lat: -19.602294439, lng: -65.746333470},
                {lat: -19.602702665, lng: -65.746044309},
                {lat: -19.606234877, lng: -65.744050549},
                {lat: -19.613381624, lng: -65.737176392},
                {lat: -19.608533898, lng: -65.734514955},
                {lat: -19.601029173, lng: -65.736313900},
                {lat: -19.600335493, lng: -65.737190794},
                {lat: -19.599283962, lng: -65.738652780},
                {lat: -19.597912518, lng: -65.739896206},
                {lat: -19.597947012, lng: -65.740423701},
                {lat: -19.597931392, lng: -65.740737041},
                {lat: -19.597959821, lng: -65.741011750},
                {lat: -19.597790679, lng: -65.741537547},
                {lat: -19.597718983, lng: -65.741643816},
                {lat: -19.597374453, lng: -65.742076309},
                {lat: -19.597020608, lng: -65.742571368},
                {lat: -19.596797125, lng: -65.742879598},
                {lat: -19.596650134, lng: -65.743085824},
                {lat: -19.596470091, lng: -65.743508062},
                {lat: -19.596181861, lng: -65.744108011},
                {lat: -19.595929619, lng: -65.744685352},
                {lat: -19.595442696, lng: -65.745658627},
                {lat: -19.595346039, lng: -65.745861949},
                {lat: -19.595216602, lng: -65.745989523},
                {lat: -19.594951768, lng: -65.746248410},
                {lat: -19.594839944, lng: -65.746365328},
                {lat: -19.594788471, lng: -65.746474076},
                {lat: -19.594724980, lng: -65.746623952},
                {lat: -19.594675888, lng: -65.746740633},
                {lat: -19.594627659, lng: -65.746856328},
                {lat: -19.594606762, lng: -65.746911749},
                {lat: -19.594573158, lng: -65.746966087},
                {lat: -19.594538182, lng: -65.747066714},
                {lat: -19.594522757, lng: -65.747146419},
                {lat: -19.594479700, lng: -65.747274121},
                {lat: -19.594441645, lng: -65.747444258},
                {lat: -19.594396123, lng: -65.747650887},
                {lat: -19.594365813, lng: -65.747779022},
                {lat: -19.594302402, lng: -65.747950594},
                {lat: -19.594234614, lng: -65.748142660},
                {lat: -19.594185907, lng: -65.748239832},
                {lat: -19.594117741, lng: -65.748434601},
                {lat: -19.594064467, lng: -65.748681880},
                {lat: -19.594344484, lng: -65.748740419},
        ];

        var dist4_ = new google.maps.Polygon({
        paths: dist4,
        strokeColor: '#B2FF33',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#B2FF33',
        fillOpacity: 0.05
        });
          dist4_.setMap(map2);
          var marker = new google.maps.Marker({
            position: {lat: -19.60233577874454, lng: -65.74219731173483},
            icon:image,
            label: {
            color: '#fff', // <= HERE
            fontSize: '13px',
            fontWeight: '900',
            text: 'DISTRITO-4'
            },
            map: map2
          });

          var dist5 = [
                  {lat: -19.579222251, lng: -65.758785185},
                  {lat: -19.579606657, lng: -65.758219043},
                  {lat: -19.580119628, lng: -65.757519394},
                  {lat: -19.580471102, lng: -65.757042010},
                  {lat: -19.581133249, lng: -65.756166239},
                  {lat: -19.581645480, lng: -65.755235333},
                  {lat: -19.582034918, lng: -65.754508747},
                  {lat: -19.582366339, lng: -65.753786646},
                  {lat: -19.582897073, lng: -65.752688433},
                  {lat: -19.583059844, lng: -65.752278515},
                  {lat: -19.583402446, lng: -65.751486405},
                  {lat: -19.583810212, lng: -65.750419619},
                  {lat: -19.583282315, lng: -65.750317566},
                  {lat: -19.582604116, lng: -65.750177127},
                  {lat: -19.582031510, lng: -65.750038539},
                  {lat: -19.581654810, lng: -65.749952289},
                  {lat: -19.581471818, lng: -65.749966886},
                  {lat: -19.581017498, lng: -65.750017539},
                  {lat: -19.580291430, lng: -65.750005324},
                  {lat: -19.579639599, lng: -65.749935112},
                  {lat: -19.579185916, lng: -65.749887636},
                  {lat: -19.579507960, lng: -65.749426494},
                  {lat: -19.579905532, lng: -65.748857300},
                  {lat: -19.580618087, lng: -65.747866959},
                  {lat: -19.579936215, lng: -65.747449831},
                  {lat: -19.579099123, lng: -65.746963932},
                  {lat: -19.578347875, lng: -65.746533684},
                  {lat: -19.578455656, lng: -65.746420606},
                  {lat: -19.578643486, lng: -65.746265212},
                  {lat: -19.578624998, lng: -65.745068314},
                  {lat: -19.578590276, lng: -65.743434557},
                  {lat: -19.578725069, lng: -65.742567272},
                  {lat: -19.578160596, lng: -65.739574794},
                  {lat: -19.576453511, lng: -65.738012470},
                  {lat: -19.573759107, lng: -65.739290637},
                  {lat: -19.573567976, lng: -65.739480327},
                  {lat: -19.573342836, lng: -65.739715494},
                  {lat: -19.573168412, lng: -65.740040984},
                  {lat: -19.573007238, lng: -65.740278325},
                  {lat: -19.572803950, lng: -65.740564247},
                  {lat: -19.572584708, lng: -65.740855854},
                  {lat: -19.572426325, lng: -65.741085170},
                  {lat: -19.572362984, lng: -65.741242488},
                  {lat: -19.572222343, lng: -65.741427780},
                  {lat: -19.572088778, lng: -65.741649247},
                  {lat: -19.572010916, lng: -65.741858769},
                  {lat: -19.571930788, lng: -65.741969927},
                  {lat: -19.571769255, lng: -65.742195365},
                  {lat: -19.571617193, lng: -65.742373759},
                  {lat: -19.571383675, lng: -65.742608806},
                  {lat: -19.571151435, lng: -65.742754777},
                  {lat: -19.570756195, lng: -65.742863745},
                  {lat: -19.570835906, lng: -65.743073534},
                  {lat: -19.570685990, lng: -65.743585264},
                  {lat: -19.570616784, lng: -65.743702152},
                  {lat: -19.570328474, lng: -65.743932018},
                  {lat: -19.570016127, lng: -65.743993904},
                  {lat: -19.569450552, lng: -65.744069755},
                  {lat: -19.569008977, lng: -65.744157165},
                  {lat: -19.568727007, lng: -65.744502904},
                  {lat: -19.568563437, lng: -65.745260831},
                  {lat: -19.568919299, lng: -65.746093289},
                  {lat: -19.569136725, lng: -65.746410631},
                  {lat: -19.569314585, lng: -65.746641332},
                  {lat: -19.569613508, lng: -65.746759855},
                  {lat: -19.569941858, lng: -65.746720788},
                  {lat: -19.570117541, lng: -65.746635263},
                  {lat: -19.570582221, lng: -65.746370633},
                  {lat: -19.571109064, lng: -65.746190519},
                  {lat: -19.571301874, lng: -65.746498659},
                  {lat: -19.571164592, lng: -65.746931735},
                  {lat: -19.570789062, lng: -65.747187697},
                  {lat: -19.570302529, lng: -65.747486348},
                  {lat: -19.569705373, lng: -65.748235754},
                  {lat: -19.569001042, lng: -65.748579626},
                  {lat: -19.569140159, lng: -65.749467607},
                  {lat: -19.568644506, lng: -65.749777872},
                  {lat: -19.569078216, lng: -65.750247358},
                  {lat: -19.569498496, lng: -65.750766922},
                  {lat: -19.569585643, lng: -65.751105345},
                  {lat: -19.569628918, lng: -65.751380077},
                  {lat: -19.569804243, lng: -65.751837388},
                  {lat: -19.570237029, lng: -65.752172601},
                  {lat: -19.569878096, lng: -65.752607172},
                  {lat: -19.569576701, lng: -65.753018185},
                  {lat: -19.569300427, lng: -65.753408277},
                  {lat: -19.569160331, lng: -65.753850778},
                  {lat: -19.569272840, lng: -65.754180117},
                  {lat: -19.569712541, lng: -65.754586693},
                  {lat: -19.569593546, lng: -65.754874526},
                  {lat: -19.569473839, lng: -65.755083036},
                  {lat: -19.569439942, lng: -65.755232053},
                  {lat: -19.569758133, lng: -65.755589078},
                  {lat: -19.570137814, lng: -65.754774937},
                  {lat: -19.570794599, lng: -65.753588796},
                  {lat: -19.571698672, lng: -65.751994952},
                  {lat: -19.573479107, lng: -65.753150165},
                  {lat: -19.573637187, lng: -65.752884713},
                  {lat: -19.574939346, lng: -65.754041551},
                  {lat: -19.575173116, lng: -65.753757564},
                  {lat: -19.575431930, lng: -65.755189177},
                  {lat: -19.575740206, lng: -65.756026991},
                  {lat: -19.576129393, lng: -65.756530345},
                  {lat: -19.576696932, lng: -65.756959502},
                  {lat: -19.576432832, lng: -65.757402474},
                  {lat: -19.578978266, lng: -65.759133092},
                  {lat: -19.579222251, lng: -65.758785185},
          ];

          var dist5_ = new google.maps.Polygon({
          paths: dist5,
          strokeColor: '#E82CC2',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#E82CC2',
          fillOpacity: 0.05
          });
            dist5_.setMap(map2);
            var marker = new google.maps.Marker({
              position: {lat: -19.57590904902466, lng: -65.74915621707142},
              icon:image,
              label: {
              color: '#000', // <= HERE
              fontSize: '13px',
              fontWeight: '900',
              text: 'DISTRITO-5'
              },
              map: map2
            });


            var dist6 = [
                    {lat: -19.578979081, lng: -65.759134453},
                    {lat: -19.581846724, lng: -65.761290538},
                    {lat: -19.582228674, lng: -65.760903071},
                    {lat: -19.584474414, lng: -65.758256605},
                    {lat: -19.584741488, lng: -65.757957794},
                    {lat: -19.585325563, lng: -65.758074692},
                    {lat: -19.586369242, lng: -65.758055999},
                    {lat: -19.586498437, lng: -65.757994336},
                    {lat: -19.586772005, lng: -65.757862138},
                    {lat: -19.587124124, lng: -65.757740049},
                    {lat: -19.587526859, lng: -65.757780270},
                    {lat: -19.587778039, lng: -65.757835292},
                    {lat: -19.587802545, lng: -65.758278737},
                    {lat: -19.587875527, lng: -65.758651888},
                    {lat: -19.588188622, lng: -65.759188053},
                    {lat: -19.588380154, lng: -65.759520264},
                    {lat: -19.588580584, lng: -65.759991984},
                    {lat: -19.588744594, lng: -65.760212399},
                    {lat: -19.588681614, lng: -65.759930702},
                    {lat: -19.588652339, lng: -65.759724802},
                    {lat: -19.588671835, lng: -65.759518019},
                    {lat: -19.588741161, lng: -65.759333019},
                    {lat: -19.588865256, lng: -65.759018843},
                    {lat: -19.588994760, lng: -65.758732841},
                    {lat: -19.589036779, lng: -65.758490537},
                    {lat: -19.589090324, lng: -65.758190104},
                    {lat: -19.589126545, lng: -65.757923610},
                    {lat: -19.589253425, lng: -65.757715885},
                    {lat: -19.589353638, lng: -65.757575370},
                    {lat: -19.589421284, lng: -65.757422892},
                    {lat: -19.589624263, lng: -65.757002733},
                    {lat: -19.589650044, lng: -65.756937497},
                    {lat: -19.589742468, lng: -65.756455692},
                    {lat: -19.589854127, lng: -65.756463864},
                    {lat: -19.589923871, lng: -65.756468380},
                    {lat: -19.590033660, lng: -65.756383670},
                    {lat: -19.590143905, lng: -65.756288625},
                    {lat: -19.590139732, lng: -65.756082500},
                    {lat: -19.590198225, lng: -65.755963451},
                    {lat: -19.590327130, lng: -65.755766301},
                    {lat: -19.590966088, lng: -65.754737015},
                    {lat: -19.590837355, lng: -65.754680047},
                    {lat: -19.590901029, lng: -65.754486144},
                    {lat: -19.591005958, lng: -65.754196412},
                    {lat: -19.591154428, lng: -65.753886201},
                    {lat: -19.591272171, lng: -65.753877211},
                    {lat: -19.591381810, lng: -65.753882862},
                    {lat: -19.591453980, lng: -65.753899343},
                    {lat: -19.591574399, lng: -65.753931649},
                    {lat: -19.591707738, lng: -65.753981798},
                    {lat: -19.592274353, lng: -65.754192554},
                    {lat: -19.592509176, lng: -65.753578565},
                    {lat: -19.592231881, lng: -65.753471690},
                    {lat: -19.592059528, lng: -65.753430457},
                    {lat: -19.591920607, lng: -65.753393281},
                    {lat: -19.591924427, lng: -65.753318555},
                    {lat: -19.591946659, lng: -65.753195639},
                    {lat: -19.592023630, lng: -65.752417293},
                    {lat: -19.592124287, lng: -65.751723324},
                    {lat: -19.592211090, lng: -65.751082309},
                    {lat: -19.592271393, lng: -65.750726122},
                    {lat: -19.592290815, lng: -65.750569432},
                    {lat: -19.591826631, lng: -65.750727237},
                    {lat: -19.591713917, lng: -65.750773650},
                    {lat: -19.591644895, lng: -65.750798425},
                    {lat: -19.591372538, lng: -65.750826496},
                    {lat: -19.591168409, lng: -65.750846321},
                    {lat: -19.591080090, lng: -65.750846447},
                    {lat: -19.590846330, lng: -65.750858399},
                    {lat: -19.590733932, lng: -65.750864987},
                    {lat: -19.590019434, lng: -65.750905965},
                    {lat: -19.589410250, lng: -65.750945727},
                    {lat: -19.588721174, lng: -65.750990778},
                    {lat: -19.588152557, lng: -65.750986358},
                    {lat: -19.587773113, lng: -65.750985667},
                    {lat: -19.587322602, lng: -65.750984533},
                    {lat: -19.586822452, lng: -65.751009394},
                    {lat: -19.586492923, lng: -65.750967238},
                    {lat: -19.586302029, lng: -65.750943263},
                    {lat: -19.585834328, lng: -65.750845906},
                    {lat: -19.585388332, lng: -65.750743240},
                    {lat: -19.585025737, lng: -65.750662495},
                    {lat: -19.584491332, lng: -65.750564102},
                    {lat: -19.583997426, lng: -65.750464636},
                    {lat: -19.583809539, lng: -65.750421619},
                    {lat: -19.583427475, lng: -65.751412389},
                    {lat: -19.583074227, lng: -65.752239555},
                    {lat: -19.582916714, lng: -65.752640770},
                    {lat: -19.582383709, lng: -65.753753523},
                    {lat: -19.582029021, lng: -65.754522049},
                    {lat: -19.581675903, lng: -65.755183525},
                    {lat: -19.581122449, lng: -65.756181407},
                    {lat: -19.580230449, lng: -65.757363980},
                    {lat: -19.579596759, lng: -65.758230819},
            ];

            var dist6_ = new google.maps.Polygon({
            paths: dist6,
            strokeColor: '#2CE88E',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#2CE88E',
            fillOpacity: 0.05
            });
              dist6_.setMap(map2);
              var marker = new google.maps.Marker({
                position: {lat: -19.58692151978863, lng: -65.75483037319655},
                icon:image,
                label: {
                color: '#000', // <= HERE
                fontSize: '11px',
                fontWeight: '900',
                text: 'DISTRITO-6'
                },
                map: map2
              });


              var dist7 = [
                      {lat: -19.592241234, lng: -65.753483986},
                      {lat: -19.592512430, lng: -65.753581195},
                      {lat: -19.592267681, lng: -65.754192653},
                      {lat: -19.592174132, lng: -65.754559318},
                      {lat: -19.592092508, lng: -65.754873939},
                      {lat: -19.592138382, lng: -65.754984455},
                      {lat: -19.592327612, lng: -65.755144420},
                      {lat: -19.592474744, lng: -65.755339547},
                      {lat: -19.592842882, lng: -65.755480620},
                      {lat: -19.593079375, lng: -65.755580398},
                      {lat: -19.593263995, lng: -65.755535969},
                      {lat: -19.593096036, lng: -65.756278954},
                      {lat: -19.592956662, lng: -65.756776489},
                      {lat: -19.593431792, lng: -65.756890320},
                      {lat: -19.593673561, lng: -65.756208441},
                      {lat: -19.594612035, lng: -65.755569000},
                      {lat: -19.595923540, lng: -65.755868827},
                      {lat: -19.596880558, lng: -65.756424990},
                      {lat: -19.598637546, lng: -65.757408766},
                      {lat: -19.599393407, lng: -65.757841428},
                      {lat: -19.599802548, lng: -65.758154208},
                      {lat: -19.600505864, lng: -65.759057140},
                      {lat: -19.603381442, lng: -65.759765644},
                      {lat: -19.606068267, lng: -65.760423613},
                      {lat: -19.607015945, lng: -65.760654547},
                      {lat: -19.608684437, lng: -65.761068369},
                      {lat: -19.610048598, lng: -65.761402941},
                      {lat: -19.610593933, lng: -65.761534742},
                      {lat: -19.610398732, lng: -65.761983002},
                      {lat: -19.611429162, lng: -65.761549002},
                      {lat: -19.612486301, lng: -65.761095963},
                      {lat: -19.614228022, lng: -65.760360938},
                      {lat: -19.606990685, lng: -65.751888999},
                      {lat: -19.602706076, lng: -65.746053310},
                      {lat: -19.602266526, lng: -65.746339000},
                      {lat: -19.601492695, lng: -65.746691483},
                      {lat: -19.600917330, lng: -65.747093670},
                      {lat: -19.600569177, lng: -65.747453883},
                      {lat: -19.600034015, lng: -65.747926556},
                      {lat: -19.599691838, lng: -65.748235841},
                      {lat: -19.599354617, lng: -65.748337261},
                      {lat: -19.599040081, lng: -65.748404264},
                      {lat: -19.598477402, lng: -65.748520969},
                      {lat: -19.597966576, lng: -65.748547832},
                      {lat: -19.597384436, lng: -65.749064926},
                      {lat: -19.596933100, lng: -65.749182836},
                      {lat: -19.596346365, lng: -65.749353923},
                      {lat: -19.596131820, lng: -65.749253022},
                      {lat: -19.595523978, lng: -65.749026886},
                      {lat: -19.595556627, lng: -65.748884211},
                      {lat: -19.595340165, lng: -65.748790914},
                      {lat: -19.595206049, lng: -65.748743963},
                      {lat: -19.595085679, lng: -65.748800401},
                      {lat: -19.594923252, lng: -65.748823959},
                      {lat: -19.594726363, lng: -65.748847625},
                      {lat: -19.594320077, lng: -65.748733714},
                      {lat: -19.594067979, lng: -65.748681907},
                      {lat: -19.593554068, lng: -65.748508229},
                      {lat: -19.593054179, lng: -65.748373484},
                      {lat: -19.592860831, lng: -65.748952409},
                      {lat: -19.592644671, lng: -65.749614194},
                      {lat: -19.592486853, lng: -65.750128567},
                      {lat: -19.592336881, lng: -65.750536592},
                      {lat: -19.592288995, lng: -65.750577701},
                      {lat: -19.592168153, lng: -65.751387881},
                      {lat: -19.592048153, lng: -65.752228322},
                      {lat: -19.591968886, lng: -65.753000665},
                      {lat: -19.591924572, lng: -65.753392998},
              ];



              var dist7_ = new google.maps.Polygon({
              paths: dist7,
              strokeColor: '#4B87FB',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#4B87FB',
              fillOpacity: 0.05
              });
              dist7_.setMap(map2);
              var marker = new google.maps.Marker({
                position: {lat: -19.60314893780584, lng: -65.75400372704017},
                icon:image,
                label: {
                color: '#000', // <= HERE
                fontSize: '11px',
                fontWeight: '900',
                text: 'DISTRITO-7',
                },
                map: map2
              });

              var dist8 = [
                      {lat: -19.582228926, lng: -65.760902112},
                      {lat: -19.582545773, lng: -65.761009971},
                      {lat: -19.582961848, lng: -65.761140856},
                      {lat: -19.582242938, lng: -65.761985936},
                      {lat: -19.581567864, lng: -65.762817292},
                      {lat: -19.582085719, lng: -65.763460114},
                      {lat: -19.582164412, lng: -65.763565841},
                      {lat: -19.582349751, lng: -65.764003274},
                      {lat: -19.582367646, lng: -65.764446168},
                      {lat: -19.582077060, lng: -65.765231462},
                      {lat: -19.581922503, lng: -65.765657483},
                      {lat: -19.582043372, lng: -65.766274626},
                      {lat: -19.582127053, lng: -65.766521325},
                      {lat: -19.582617007, lng: -65.766585670},
                      {lat: -19.582834836, lng: -65.766678016},
                      {lat: -19.583106354, lng: -65.766737175},
                      {lat: -19.583308726, lng: -65.766731111},
                      {lat: -19.583577043, lng: -65.766664200},
                      {lat: -19.583943866, lng: -65.766598583},
                      {lat: -19.584291660, lng: -65.766630443},
                      {lat: -19.584588894, lng: -65.766775739},
                      {lat: -19.585215925, lng: -65.767246668},
                      {lat: -19.585360380, lng: -65.767634680},
                      {lat: -19.585438634, lng: -65.767967789},
                      {lat: -19.585568593, lng: -65.768202162},
                      {lat: -19.585731414, lng: -65.768390346},
                      {lat: -19.586027589, lng: -65.768770935},
                      {lat: -19.586271228, lng: -65.769109752},
                      {lat: -19.586268592, lng: -65.769291900},
                      {lat: -19.586600327, lng: -65.769236443},
                      {lat: -19.587079766, lng: -65.769157765},
                      {lat: -19.588653520, lng: -65.768846402},
                      {lat: -19.589073077, lng: -65.768682468},
                      {lat: -19.590875638, lng: -65.767932392},
                      {lat: -19.590863508, lng: -65.768515008},
                      {lat: -19.590350916, lng: -65.770393433},
                      {lat: -19.591648593, lng: -65.770317618},
                      {lat: -19.591881179, lng: -65.771030478},
                      {lat: -19.592132259, lng: -65.771813147},
                      {lat: -19.593277349, lng: -65.771762241},
                      {lat: -19.593853460, lng: -65.771723096},
                      {lat: -19.595079526, lng: -65.771536639},
                      {lat: -19.597063404, lng: -65.771213033},
                      {lat: -19.599881258, lng: -65.770668428},
                      {lat: -19.601178088, lng: -65.770411574},
                      {lat: -19.602413771, lng: -65.770171945},
                      {lat: -19.603522157, lng: -65.768818656},
                      {lat: -19.604584795, lng: -65.767537951},
                      {lat: -19.604757513, lng: -65.767313127},
                      {lat: -19.605085789, lng: -65.767024597},
                      {lat: -19.605864894, lng: -65.766330597},
                      {lat: -19.606701066, lng: -65.765626565},
                      {lat: -19.607053748, lng: -65.765323184},
                      {lat: -19.607833254, lng: -65.764949022},
                      {lat: -19.609393363, lng: -65.764210616},
                      {lat: -19.609716773, lng: -65.763496618},
                      {lat: -19.610145681, lng: -65.762543668},
                      {lat: -19.610395020, lng: -65.761986252},
                      {lat: -19.610597975, lng: -65.761540575},
                      {lat: -19.600508675, lng: -65.759055449},
                      {lat: -19.599799916, lng: -65.758164209},
                      {lat: -19.599428602, lng: -65.757866739},
                      {lat: -19.598712702, lng: -65.757456936},
                      {lat: -19.597743331, lng: -65.756891833},
                      {lat: -19.596820154, lng: -65.756401448},
                      {lat: -19.595912018, lng: -65.755866178},
                      {lat: -19.594608186, lng: -65.755569810},
                      {lat: -19.593673680, lng: -65.756200716},
                      {lat: -19.593435107, lng: -65.756897444},
                      {lat: -19.593157240, lng: -65.756825210},
                      {lat: -19.592954773, lng: -65.756774315},
                      {lat: -19.593110666, lng: -65.756207658},
                      {lat: -19.593262226, lng: -65.755533454},
                      {lat: -19.593089349, lng: -65.755588350},
                      {lat: -19.592894370, lng: -65.755500726},
                      {lat: -19.592463579, lng: -65.755332959},
                      {lat: -19.592314297, lng: -65.755138542},
                      {lat: -19.592139766, lng: -65.754973592},
                      {lat: -19.592095634, lng: -65.754895992},
                      {lat: -19.592118094, lng: -65.754730620},
                      {lat: -19.592189943, lng: -65.754531005},
                      {lat: -19.592248514, lng: -65.754259473},
                      {lat: -19.592276797, lng: -65.754190640},
                      {lat: -19.591709764, lng: -65.753980810},
                      {lat: -19.591457364, lng: -65.753889861},
                      {lat: -19.591182503, lng: -65.753869532},
                      {lat: -19.590965516, lng: -65.754314077},
                      {lat: -19.590830873, lng: -65.754660143},
                      {lat: -19.590958724, lng: -65.754750324},
                      {lat: -19.590585411, lng: -65.755363512},
                      {lat: -19.590242391, lng: -65.755896601},
                      {lat: -19.590141976, lng: -65.756115836},
                      {lat: -19.590144726, lng: -65.756282676},
                      {lat: -19.589989844, lng: -65.756412845},
                      {lat: -19.589927569, lng: -65.756482499},
                      {lat: -19.589740455, lng: -65.756463247},
                      {lat: -19.589682975, lng: -65.756766043},
                      {lat: -19.589618077, lng: -65.757014938},
                      {lat: -19.589419290, lng: -65.757432349},
                      {lat: -19.589202582, lng: -65.757801174},
                      {lat: -19.589127208, lng: -65.757927908},
                      {lat: -19.589094307, lng: -65.758164326},
                      {lat: -19.589050225, lng: -65.758423891},
                      {lat: -19.588993072, lng: -65.758740567},
                      {lat: -19.588863115, lng: -65.759036535},
                      {lat: -19.588739703, lng: -65.759326179},
                      {lat: -19.588667562, lng: -65.759524851},
                      {lat: -19.588657494, lng: -65.759794102},
                      {lat: -19.588742705, lng: -65.760206876},
                      {lat: -19.588581158, lng: -65.759988937},
                      {lat: -19.588381361, lng: -65.759531859},
                      {lat: -19.588181157, lng: -65.759175965},
                      {lat: -19.587878516, lng: -65.758655299},
                      {lat: -19.587811112, lng: -65.758336181},
                      {lat: -19.587797242, lng: -65.758168730},
                      {lat: -19.587775033, lng: -65.757830974},
                      {lat: -19.587526096, lng: -65.757781633},
                      {lat: -19.587345864, lng: -65.757754268},
                      {lat: -19.587126702, lng: -65.757734655},
                      {lat: -19.586791847, lng: -65.757852578},
                      {lat: -19.586457429, lng: -65.758015179},
                      {lat: -19.586350793, lng: -65.758058610},
                      {lat: -19.585343850, lng: -65.758072599},
                      {lat: -19.584735540, lng: -65.757954265},
                      {lat: -19.583371759, lng: -65.759555593},
                      {lat: -19.582885679, lng: -65.760127187},
                      {lat: -19.582366958, lng: -65.760742516},

              ];



              var dist8_ = new google.maps.Polygon({
              paths: dist8,
              strokeColor: '#AB00FF',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#AB00FF',
              fillOpacity: 0.05
              });
              dist8_.setMap(map2);
              var marker = new google.maps.Marker({
                position: {lat: -19.593946113392942, lng: -65.76452424943496},
                icon:image,
                label: {
                color: '#000', // <= HERE
                fontSize: '11px',
                fontWeight: '900',
                text: 'DISTRITO-8',
                },
                map: map2
              });





              var dist9 = [
                      {lat: -19.581844644, lng: -65.761291788},
                      {lat: -19.578975365, lng: -65.759133344},
                      {lat: -19.576430521, lng: -65.757400437},
                      {lat: -19.576692816, lng: -65.756952468},
                      {lat: -19.576126572, lng: -65.756529571},
                      {lat: -19.575732111, lng: -65.756022230},
                      {lat: -19.575567023, lng: -65.755553181},
                      {lat: -19.575425689, lng: -65.755163453},
                      {lat: -19.575362541, lng: -65.754833506},
                      {lat: -19.575287998, lng: -65.754375571},
                      {lat: -19.575173923, lng: -65.753755867},
                      {lat: -19.574939594, lng: -65.754044532},
                      {lat: -19.573646542, lng: -65.752887826},
                      {lat: -19.573483835, lng: -65.753131751},
                      {lat: -19.571667639, lng: -65.752035320},
                      {lat: -19.570916710, lng: -65.753370789},
                      {lat: -19.570268327, lng: -65.754540973},
                      {lat: -19.570134578, lng: -65.754781425},
                      {lat: -19.569905591, lng: -65.755261483},
                      {lat: -19.569307793, lng: -65.756668905},
                      {lat: -19.569127900, lng: -65.756536119},
                      {lat: -19.569130557, lng: -65.756367826},
                      {lat: -19.569170220, lng: -65.756107451},
                      {lat: -19.569210003, lng: -65.755857179},
                      {lat: -19.569248512, lng: -65.755632813},
                      {lat: -19.569285841, lng: -65.755472382},
                      {lat: -19.569324416, lng: -65.755375346},
                      {lat: -19.568645401, lng: -65.755712145},
                      {lat: -19.568224879, lng: -65.755783556},
                      {lat: -19.567738433, lng: -65.755820912},
                      {lat: -19.567366443, lng: -65.755580339},
                      {lat: -19.567296230, lng: -65.755572246},
                      {lat: -19.566926891, lng: -65.756217771},
                      {lat: -19.566455178, lng: -65.756894324},
                      {lat: -19.566329318, lng: -65.757916243},
                      {lat: -19.566240788, lng: -65.758210462},
                      {lat: -19.565921939, lng: -65.758381378},
                      {lat: -19.565701004, lng: -65.758432797},
                      {lat: -19.565550153, lng: -65.758482707},
                      {lat: -19.565353497, lng: -65.758510967},
                      {lat: -19.565148322, lng: -65.758660970},
                      {lat: -19.565029688, lng: -65.758762728},
                      {lat: -19.564862814, lng: -65.758929131},
                      {lat: -19.564796816, lng: -65.759139236},
                      {lat: -19.564767167, lng: -65.759267987},
                      {lat: -19.564694191, lng: -65.759463416},
                      {lat: -19.564651660, lng: -65.759575829},
                      {lat: -19.564607546, lng: -65.759698304},
                      {lat: -19.564435136, lng: -65.759958571},
                      {lat: -19.564220904, lng: -65.760144646},
                      {lat: -19.563990888, lng: -65.760264051},
                      {lat: -19.563849182, lng: -65.760344327},
                      {lat: -19.563612828, lng: -65.760449695},
                      {lat: -19.563481484, lng: -65.760477405},
                      {lat: -19.563094623, lng: -65.761025757},
                      {lat: -19.562660394, lng: -65.761605758},
                      {lat: -19.562042336, lng: -65.761652302},
                      {lat: -19.561752979, lng: -65.761668922},
                      {lat: -19.561528432, lng: -65.761432735},
                      {lat: -19.561441951, lng: -65.761093722},
                      {lat: -19.561438176, lng: -65.760706216},
                      {lat: -19.561434496, lng: -65.760420929},
                      {lat: -19.561456054, lng: -65.760154616},
                      {lat: -19.561476791, lng: -65.759804901},
                      {lat: -19.561515475, lng: -65.759529309},
                      {lat: -19.561572295, lng: -65.759224530},
                      {lat: -19.561583337, lng: -65.759038279},
                      {lat: -19.561537027, lng: -65.758759495},
                      {lat: -19.561486536, lng: -65.758466112},
                      {lat: -19.561466040, lng: -65.758206180},
                      {lat: -19.561412514, lng: -65.757966779},
                      {lat: -19.561363399, lng: -65.757799800},
                      {lat: -19.561286473, lng: -65.757618916},
                      {lat: -19.561184786, lng: -65.757416084},
                      {lat: -19.561072909, lng: -65.757245208},
                      {lat: -19.560912684, lng: -65.757041953},
                      {lat: -19.560764777, lng: -65.756854078},
                      {lat: -19.560575637, lng: -65.756633880},
                      {lat: -19.560348727, lng: -65.756436578},
                      {lat: -19.560053052, lng: -65.756185347},
                      {lat: -19.559770007, lng: -65.756039628},
                      {lat: -19.559419436, lng: -65.755910849},
                      {lat: -19.559069283, lng: -65.755829395},
                      {lat: -19.558846370, lng: -65.755798177},
                      {lat: -19.558485658, lng: -65.755771484},
                      {lat: -19.558150276, lng: -65.755808619},
                      {lat: -19.557898035, lng: -65.755846056},
                      {lat: -19.557520493, lng: -65.755903659},
                      {lat: -19.557155411, lng: -65.755917413},
                      {lat: -19.556772733, lng: -65.755971203},
                      {lat: -19.556573342, lng: -65.756030406},
                      {lat: -19.556417912, lng: -65.756034389},
                      {lat: -19.556166717, lng: -65.756083646},
                      {lat: -19.555951970, lng: -65.756091875},
                      {lat: -19.555973057, lng: -65.756258648},
                      {lat: -19.555964193, lng: -65.756605690},
                      {lat: -19.555971011, lng: -65.756938553},
                      {lat: -19.555979369, lng: -65.757290682},
                      {lat: -19.555959590, lng: -65.757586575},
                      {lat: -19.555993509, lng: -65.757980624},
                      {lat: -19.556010387, lng: -65.758290850},
                      {lat: -19.555983513, lng: -65.758536325},
                      {lat: -19.556028402, lng: -65.758713232},
                      {lat: -19.556124447, lng: -65.759041734},
                      {lat: -19.556222760, lng: -65.759517358},
                      {lat: -19.556342263, lng: -65.759815246},
                      {lat: -19.556244102, lng: -65.759971636},
                      {lat: -19.556026369, lng: -65.760067678},
                      {lat: -19.555937839, lng: -65.760217096},
                      {lat: -19.555830488, lng: -65.760387078},
                      {lat: -19.555789719, lng: -65.760528383},
                      {lat: -19.555581177, lng: -65.760798196},
                      {lat: -19.555540564, lng: -65.760994917},
                      {lat: -19.555511619, lng: -65.761202953},
                      {lat: -19.555463600, lng: -65.761502617},
                      {lat: -19.555401356, lng: -65.761804464},
                      {lat: -19.555358722, lng: -65.762028969},
                      {lat: -19.555281103, lng: -65.762219775},
                      {lat: -19.555241269, lng: -65.762523433},
                      {lat: -19.555146974, lng: -65.762715500},
                      {lat: -19.555143241, lng: -65.762756622},
                      {lat: -19.555124994, lng: -65.762962410},
                      {lat: -19.555115851, lng: -65.763085864},
                      {lat: -19.555049556, lng: -65.763357556},
                      {lat: -19.555006479, lng: -65.763723628},
                      {lat: -19.554949083, lng: -65.763986495},
                      {lat: -19.554924475, lng: -65.764227966},
                      {lat: -19.555030714, lng: -65.764572980},
                      {lat: -19.555672984, lng: -65.764289982},
                      {lat: -19.556250659, lng: -65.764088275},
                      {lat: -19.556818324, lng: -65.763918314},
                      {lat: -19.557049676, lng: -65.763818122},
                      {lat: -19.557731151, lng: -65.763570464},
                      {lat: -19.558665543, lng: -65.763241865},
                      {lat: -19.559337956, lng: -65.763059278},
                      {lat: -19.559752909, lng: -65.763372704},
                      {lat: -19.560048802, lng: -65.763475782},
                      {lat: -19.560668374, lng: -65.764022158},
                      {lat: -19.560971371, lng: -65.764427424},
                      {lat: -19.561239323, lng: -65.764658374},
                      {lat: -19.561451951, lng: -65.764791732},
                      {lat: -19.562316767, lng: -65.764527488},
                      {lat: -19.562951418, lng: -65.764209409},
                      {lat: -19.563541019, lng: -65.763948250},
                      {lat: -19.564078668, lng: -65.763845569},
                      {lat: -19.564199965, lng: -65.764110767},
                      {lat: -19.564397471, lng: -65.764270488},
                      {lat: -19.564662707, lng: -65.764521110},
                      {lat: -19.564800579, lng: -65.764691451},
                      {lat: -19.564910881, lng: -65.764796371},
                      {lat: -19.565104038, lng: -65.765016360},
                      {lat: -19.565305683, lng: -65.765135193},
                      {lat: -19.566435639, lng: -65.764774881},
                      {lat: -19.567145680, lng: -65.764501244},
                      {lat: -19.567670138, lng: -65.764391432},
                      {lat: -19.568050106, lng: -65.764311502},
                      {lat: -19.568138477, lng: -65.764726115},
                      {lat: -19.568219692, lng: -65.764933141},
                      {lat: -19.569237336, lng: -65.764600147},
                      {lat: -19.570283350, lng: -65.764284425},
                      {lat: -19.570947529, lng: -65.764116116},
                      {lat: -19.571548457, lng: -65.763904610},
                      {lat: -19.572964659, lng: -65.763555801},
                      {lat: -19.574068939, lng: -65.763258212},
                      {lat: -19.574798838, lng: -65.763073163},
                      {lat: -19.576024107, lng: -65.762710493},
                      {lat: -19.576804064, lng: -65.762436001},
                      {lat: -19.577271939, lng: -65.762181467},
                      {lat: -19.577691918, lng: -65.761909893},
                      {lat: -19.577168519, lng: -65.761358149},
                      {lat: -19.577410266, lng: -65.761074681},
                      {lat: -19.577846507, lng: -65.760587665},
                      {lat: -19.578299048, lng: -65.760091319},
                      {lat: -19.578454122, lng: -65.759962115},
                      {lat: -19.580980362, lng: -65.762242586},

              ];


              var dist9_ = new google.maps.Polygon({
              paths: dist9,
              strokeColor: '#BA6E41',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#BA6E41',
              fillOpacity: 0.05
              });
              dist9_.setMap(map2);
              var marker = new google.maps.Marker({
                position: {lat: -19.569964714554434, lng: -65.75960539448141},
                icon:image,
                label: {
                color: '#000', // <= HERE
                fontSize: '11px',
                fontWeight: '900',
                text: 'DISTRITO-9',
                },
                map: map2
              });



              var dist10 = [
                      {lat: -19.575981996, lng: -65.762724135},
                      {lat: -19.575559505, lng: -65.762844492},
                      {lat: -19.574984233, lng: -65.763014021},
                      {lat: -19.574212096, lng: -65.763216941},
                      {lat: -19.573399859, lng: -65.763438317},
                      {lat: -19.572664636, lng: -65.763636241},
                      {lat: -19.571718094, lng: -65.763882529},
                      {lat: -19.570978917, lng: -65.764114816},
                      {lat: -19.570103845, lng: -65.764339679},
                      {lat: -19.569095416, lng: -65.764647629},
                      {lat: -19.568213298, lng: -65.764928963},
                      {lat: -19.568133944, lng: -65.764645321},
                      {lat: -19.568035010, lng: -65.764311446},
                      {lat: -19.567829717, lng: -65.764363911},
                      {lat: -19.567520246, lng: -65.764451353},
                      {lat: -19.567127735, lng: -65.764572640},
                      {lat: -19.566808766, lng: -65.764699376},
                      {lat: -19.566154361, lng: -65.764930143},
                      {lat: -19.565602575, lng: -65.765106676},
                      {lat: -19.565257385, lng: -65.765207245},
                      {lat: -19.565223252, lng: -65.765147707},
                      {lat: -19.565106216, lng: -65.765000309},
                      {lat: -19.564977153, lng: -65.764841475},
                      {lat: -19.564784774, lng: -65.764531663},
                      {lat: -19.564668640, lng: -65.764386409},
                      {lat: -19.564544129, lng: -65.764317928},
                      {lat: -19.564433859, lng: -65.764276743},
                      {lat: -19.564308889, lng: -65.764202369},
                      {lat: -19.564270621, lng: -65.764103471},
                      {lat: -19.564235220, lng: -65.764013374},
                      {lat: -19.564115460, lng: -65.763944261},
                      {lat: -19.564032063, lng: -65.763905004},
                      {lat: -19.563681078, lng: -65.764043286},
                      {lat: -19.563426100, lng: -65.764134280},
                      {lat: -19.563109318, lng: -65.764256366},
                      {lat: -19.562702505, lng: -65.764404340},
                      {lat: -19.562297078, lng: -65.764538771},
                      {lat: -19.561895169, lng: -65.764663121},
                      {lat: -19.561447371, lng: -65.764795666},
                      {lat: -19.561299768, lng: -65.764736648},
                      {lat: -19.561191038, lng: -65.764661370},
                      {lat: -19.560905358, lng: -65.764396768},
                      {lat: -19.560693406, lng: -65.764167637},
                      {lat: -19.560351431, lng: -65.763842869},
                      {lat: -19.560033588, lng: -65.763493119},
                      {lat: -19.559736195, lng: -65.763380207},
                      {lat: -19.559430679, lng: -65.763137239},
                      {lat: -19.559166828, lng: -65.763209601},
                      {lat: -19.558538968, lng: -65.763419194},
                      {lat: -19.558077336, lng: -65.763568420},
                      {lat: -19.557464911, lng: -65.763759095},
                      {lat: -19.557054417, lng: -65.763898110},
                      {lat: -19.556276837, lng: -65.764141308},
                      {lat: -19.555864080, lng: -65.764283316},
                      {lat: -19.555019259, lng: -65.764562084},
                      {lat: -19.554634145, lng: -65.764635541},
                      {lat: -19.554454734, lng: -65.764839186},
                      {lat: -19.554487287, lng: -65.765169121},
                      {lat: -19.554641729, lng: -65.765913623},
                      {lat: -19.554711970, lng: -65.766127534},
                      {lat: -19.554773933, lng: -65.766336072},
                      {lat: -19.554803189, lng: -65.766621998},
                      {lat: -19.554889570, lng: -65.766877454},
                      {lat: -19.554895006, lng: -65.766904292},
                      {lat: -19.554959061, lng: -65.767162316},
                      {lat: -19.554970792, lng: -65.767222543},
                      {lat: -19.555029853, lng: -65.767518447},
                      {lat: -19.555071474, lng: -65.767733797},
                      {lat: -19.555181284, lng: -65.767900842},
                      {lat: -19.555292580, lng: -65.768049997},
                      {lat: -19.555273701, lng: -65.768259512},
                      {lat: -19.555050117, lng: -65.768362643},
                      {lat: -19.554831253, lng: -65.768499989},
                      {lat: -19.554696718, lng: -65.768659381},
                      {lat: -19.554617753, lng: -65.768834202},
                      {lat: -19.554622579, lng: -65.769142075},
                      {lat: -19.554849729, lng: -65.769261783},
                      {lat: -19.555362844, lng: -65.769233596},
                      {lat: -19.555478667, lng: -65.769349932},
                      {lat: -19.555490903, lng: -65.769376065},
                      {lat: -19.555524716, lng: -65.769669992},
                      {lat: -19.555528891, lng: -65.769690522},
                      {lat: -19.555574829, lng: -65.769916448},
                      {lat: -19.555571154, lng: -65.770238846},
                      {lat: -19.555491843, lng: -65.770631837},
                      {lat: -19.555485889, lng: -65.770669150},
                      {lat: -19.555464389, lng: -65.770695689},
                      {lat: -19.555500062, lng: -65.771040174},
                      {lat: -19.555672610, lng: -65.771469644},
                      {lat: -19.555683452, lng: -65.771488731},
                      {lat: -19.555807141, lng: -65.771836453},
                      {lat: -19.555941832, lng: -65.772269089},
                      {lat: -19.556004661, lng: -65.773006068},
                      {lat: -19.555840411, lng: -65.774510021},
                      {lat: -19.555786208, lng: -65.775334003},
                      {lat: -19.555833807, lng: -65.776428496},
                      {lat: -19.555485100, lng: -65.778160847},
                      {lat: -19.555588757, lng: -65.778124005},
                      {lat: -19.557024477, lng: -65.777739189},
                      {lat: -19.558748131, lng: -65.776991056},
                      {lat: -19.559014727, lng: -65.776848995},
                      {lat: -19.559195638, lng: -65.776772316},
                      {lat: -19.559495521, lng: -65.776655642},
                      {lat: -19.559781688, lng: -65.776357344},
                      {lat: -19.560092051, lng: -65.776066537},
                      {lat: -19.560328945, lng: -65.775728012},
                      {lat: -19.560700988, lng: -65.774898940},
                      {lat: -19.561077313, lng: -65.774260525},
                      {lat: -19.561404135, lng: -65.773781027},
                      {lat: -19.561640383, lng: -65.773456596},
                      {lat: -19.561945761, lng: -65.773089661},
                      {lat: -19.562340723, lng: -65.772815244},
                      {lat: -19.562666740, lng: -65.772650575},
                      {lat: -19.563072362, lng: -65.772468309},
                      {lat: -19.563389836, lng: -65.772320814},
                      {lat: -19.563818788, lng: -65.772114961},
                      {lat: -19.564236470, lng: -65.771992430},
                      {lat: -19.564691753, lng: -65.772026118},
                      {lat: -19.565122200, lng: -65.772076476},
                      {lat: -19.565582775, lng: -65.772066458},
                      {lat: -19.566033487, lng: -65.771928904},
                      {lat: -19.566321929, lng: -65.771815854},
                      {lat: -19.566743981, lng: -65.771748189},
                      {lat: -19.567288964, lng: -65.771786188},
                      {lat: -19.567882531, lng: -65.771857828},
                      {lat: -19.568358639, lng: -65.771930797},
                      {lat: -19.568776309, lng: -65.771915569},
                      {lat: -19.569091898, lng: -65.771813857},
                      {lat: -19.569628602, lng: -65.771617421},
                      {lat: -19.570141334, lng: -65.771379838},
                      {lat: -19.570769142, lng: -65.771086379},
                      {lat: -19.571313357, lng: -65.770775241},
                      {lat: -19.571799756, lng: -65.770517279},
                      {lat: -19.572308526, lng: -65.770299476},
                      {lat: -19.572867437, lng: -65.770176062},
                      {lat: -19.573483790, lng: -65.770089152},
                      {lat: -19.574063771, lng: -65.769991666},
                      {lat: -19.574569488, lng: -65.769908589},
                      {lat: -19.575023159, lng: -65.769853493},
                      {lat: -19.575307379, lng: -65.769839823},
                      {lat: -19.575692464, lng: -65.769855115},
                      {lat: -19.575886979, lng: -65.769858957},
                      {lat: -19.576008801, lng: -65.769851400},
                      {lat: -19.576103690, lng: -65.769878848},
                      {lat: -19.576201791, lng: -65.769950240},
                      {lat: -19.576304528, lng: -65.769996641},
                      {lat: -19.576431408, lng: -65.769985134},
                      {lat: -19.576649018, lng: -65.769915553},
                      {lat: -19.576887531, lng: -65.769854133},
                      {lat: -19.577002852, lng: -65.769857605},
                      {lat: -19.577111629, lng: -65.769839863},
                      {lat: -19.577309512, lng: -65.769831191},
                      {lat: -19.577437283, lng: -65.769768469},
                      {lat: -19.577600244, lng: -65.769707698},
                      {lat: -19.577705121, lng: -65.769607667},
                      {lat: -19.577896226, lng: -65.769407953},
                      {lat: -19.577944965, lng: -65.769311848},
                      {lat: -19.578034484, lng: -65.769140355},
                      {lat: -19.578055994, lng: -65.768945146},
                      {lat: -19.578053659, lng: -65.768730396},
                      {lat: -19.578035747, lng: -65.768569123},
                      {lat: -19.577944708, lng: -65.768284933},
                      {lat: -19.577714341, lng: -65.767638782},
                      {lat: -19.577634272, lng: -65.767362566},
                      {lat: -19.577575070, lng: -65.767192538},
                      {lat: -19.577535179, lng: -65.767094200},
                      {lat: -19.577492021, lng: -65.766953125},
                      {lat: -19.577450455, lng: -65.766816686},
                      {lat: -19.577420969, lng: -65.766661092},
                      {lat: -19.577425481, lng: -65.766551043},
                      {lat: -19.577431864, lng: -65.766504818},
                      {lat: -19.577465998, lng: -65.766472366},
                      {lat: -19.577529564, lng: -65.766464015},
                      {lat: -19.577587005, lng: -65.766451987},
                      {lat: -19.577649104, lng: -65.766466220},
                      {lat: -19.577730505, lng: -65.766433169},
                      {lat: -19.577890165, lng: -65.766335698},
                      {lat: -19.577981823, lng: -65.766198417},
                      {lat: -19.577935598, lng: -65.766136107},
                      {lat: -19.577813353, lng: -65.766051457},
                      {lat: -19.577653897, lng: -65.765923769},
                      {lat: -19.577463861, lng: -65.765796509},
                      {lat: -19.577153827, lng: -65.765519819},
                      {lat: -19.576812754, lng: -65.765166828},
                      {lat: -19.576108931, lng: -65.764405712},
                      {lat: -19.576066104, lng: -65.764343978},
                      {lat: -19.575986981, lng: -65.764281606},
                      {lat: -19.575916147, lng: -65.764211007},
                      {lat: -19.575832063, lng: -65.764106638},
                      {lat: -19.575792129, lng: -65.764043133},
                      {lat: -19.575713153, lng: -65.763946666},
                      {lat: -19.575615914, lng: -65.763842811},
                      {lat: -19.575580071, lng: -65.763776635},
                      {lat: -19.575517081, lng: -65.763684263},
                      {lat: -19.575514955, lng: -65.763524271},
                      {lat: -19.575533598, lng: -65.763413394},
                      {lat: -19.575597539, lng: -65.763362792},
                      {lat: -19.575709316, lng: -65.763244708},
                      {lat: -19.575756766, lng: -65.763198395},
                      {lat: -19.575922016, lng: -65.763035539},
                      {lat: -19.575987686, lng: -65.762965868},
                      {lat: -19.576097351, lng: -65.762826697},
                      {lat: -19.576158965, lng: -65.762667244},
                      {lat: -19.576052897, lng: -65.762701918},
              ];

              var dist10_ = new google.maps.Polygon({
              paths: dist10,
              strokeColor: '#5D0F5E',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#5D0F5E',
              fillOpacity: 0.05
              });
              dist10_.setMap(map2);
              var marker = new google.maps.Marker({
                position: {lat: -19.565071852721143, lng: -65.76857470142721},
                icon:image,
                label: {
                color: '#000', // <= HERE
                fontSize: '11px',
                fontWeight: '900',
                text: 'DISTRITO-10',
                },
                map: map2
              });



              var dist11 = [
                      {lat: -19.579619921, lng: -65.763702554},
                      {lat: -19.579481526, lng: -65.763573581},
                      {lat: -19.579302775, lng: -65.763386822},
                      {lat: -19.578533316, lng: -65.762658916},
                      {lat: -19.578082909, lng: -65.762260275},
                      {lat: -19.577707408, lng: -65.761924317},
                      {lat: -19.577408618, lng: -65.762095162},
                      {lat: -19.577227205, lng: -65.762205052},
                      {lat: -19.577047697, lng: -65.762304251},
                      {lat: -19.576935087, lng: -65.762367500},
                      {lat: -19.576685677, lng: -65.762478717},
                      {lat: -19.576168739, lng: -65.762648740},
                      {lat: -19.576136846, lng: -65.762706895},
                      {lat: -19.576111242, lng: -65.762808424},
                      {lat: -19.576052354, lng: -65.762909916},
                      {lat: -19.575944674, lng: -65.763002681},
                      {lat: -19.575866362, lng: -65.763102946},
                      {lat: -19.575856592, lng: -65.763112478},
                      {lat: -19.575718157, lng: -65.763236607},
                      {lat: -19.575688929, lng: -65.763254091},
                      {lat: -19.575612774, lng: -65.763350344},
                      {lat: -19.575518998, lng: -65.763425108},
                      {lat: -19.575518042, lng: -65.763510575},
                      {lat: -19.575516293, lng: -65.763523317},
                      {lat: -19.575507895, lng: -65.763652554},
                      {lat: -19.575533566, lng: -65.763735639},
                      {lat: -19.575603301, lng: -65.763825365},
                      {lat: -19.575747992, lng: -65.763986510},
                      {lat: -19.575891000, lng: -65.764183340},
                      {lat: -19.575977450, lng: -65.764264467},
                      {lat: -19.576135728, lng: -65.764424868},
                      {lat: -19.576282907, lng: -65.764601136},
                      {lat: -19.576526551, lng: -65.764845642},
                      {lat: -19.576654749, lng: -65.764999740},
                      {lat: -19.576907309, lng: -65.765265698},
                      {lat: -19.577036846, lng: -65.765402782},
                      {lat: -19.577271369, lng: -65.765630464},
                      {lat: -19.577531466, lng: -65.765846274},
                      {lat: -19.577721160, lng: -65.765972378},
                      {lat: -19.577894149, lng: -65.766106489},
                      {lat: -19.577989143, lng: -65.766196869},
                      {lat: -19.577925445, lng: -65.766282939},
                      {lat: -19.577837604, lng: -65.766394307},
                      {lat: -19.577765310, lng: -65.766417518},
                      {lat: -19.577669146, lng: -65.766455578},
                      {lat: -19.577517629, lng: -65.766446930},
                      {lat: -19.577429046, lng: -65.766513653},
                      {lat: -19.577425603, lng: -65.766712748},
                      {lat: -19.577494017, lng: -65.766986397},
                      {lat: -19.577592210, lng: -65.767243151},
                      {lat: -19.577721893, lng: -65.767660002},
                      {lat: -19.577808831, lng: -65.767679259},
                      {lat: -19.578034656, lng: -65.767711875},
                      {lat: -19.578339746, lng: -65.767756784},
                      {lat: -19.578786660, lng: -65.767801190},
                      {lat: -19.579387849, lng: -65.767915226},
                      {lat: -19.579770175, lng: -65.767994906},
                      {lat: -19.580122527, lng: -65.768037348},
                      {lat: -19.580503790, lng: -65.768121143},
                      {lat: -19.580613127, lng: -65.768144653},
                      {lat: -19.580639955, lng: -65.768239467},
                      {lat: -19.580648185, lng: -65.768508140},
                      {lat: -19.580647917, lng: -65.768513652},
                      {lat: -19.580664027, lng: -65.768644770},
                      {lat: -19.580597511, lng: -65.768668381},
                      {lat: -19.580484781, lng: -65.768666086},
                      {lat: -19.580343100, lng: -65.768680247},
                      {lat: -19.580189435, lng: -65.768667420},
                      {lat: -19.580031679, lng: -65.768706530},
                      {lat: -19.579935065, lng: -65.768714507},
                      {lat: -19.579932656, lng: -65.768818520},
                      {lat: -19.579915268, lng: -65.769026219},
                      {lat: -19.579929003, lng: -65.769058116},
                      {lat: -19.579939733, lng: -65.769266272},
                      {lat: -19.579917786, lng: -65.769437643},
                      {lat: -19.579958282, lng: -65.769616019},
                      {lat: -19.579969241, lng: -65.769811007},
                      {lat: -19.579965530, lng: -65.769973973},
                      {lat: -19.579951304, lng: -65.770205378},
                      {lat: -19.579943694, lng: -65.770329120},
                      {lat: -19.579920142, lng: -65.770449111},
                      {lat: -19.579925534, lng: -65.770675704},
                      {lat: -19.579943141, lng: -65.770846740},
                      {lat: -19.579954834, lng: -65.770884232},
                      {lat: -19.579969935, lng: -65.771104475},
                      {lat: -19.579976261, lng: -65.771117119},
                      {lat: -19.579975064, lng: -65.771144046},
                      {lat: -19.579975568, lng: -65.771364411},
                      {lat: -19.579975017, lng: -65.771369593},
                      {lat: -19.579987689, lng: -65.771648946},
                      {lat: -19.579987353, lng: -65.772118914},
                      {lat: -19.580089950, lng: -65.772106827},
                      {lat: -19.580606309, lng: -65.772087476},
                      {lat: -19.581022494, lng: -65.772061659},
                      {lat: -19.581038437, lng: -65.772670578},
                      {lat: -19.581163369, lng: -65.772662949},
                      {lat: -19.581585238, lng: -65.772671508},
                      {lat: -19.582527505, lng: -65.772008906},
                      {lat: -19.582520720, lng: -65.771869357},
                      {lat: -19.582621238, lng: -65.771781668},
                      {lat: -19.582660009, lng: -65.771643326},
                      {lat: -19.582761167, lng: -65.771371786},
                      {lat: -19.582858738, lng: -65.771130136},
                      {lat: -19.582921432, lng: -65.770961369},
                      {lat: -19.582961617, lng: -65.770672272},
                      {lat: -19.583237416, lng: -65.770298030},
                      {lat: -19.583463007, lng: -65.770307277},
                      {lat: -19.583964989, lng: -65.770302468},
                      {lat: -19.584579560, lng: -65.770296312},
                      {lat: -19.584819602, lng: -65.770267271},
                      {lat: -19.585469853, lng: -65.770257020},
                      {lat: -19.585815395, lng: -65.770146905},
                      {lat: -19.586198218, lng: -65.769957200},
                      {lat: -19.586404639, lng: -65.769368979},
                      {lat: -19.586276118, lng: -65.769113320},
                      {lat: -19.586110052, lng: -65.768877899},
                      {lat: -19.585726348, lng: -65.768371803},
                      {lat: -19.585617578, lng: -65.768270931},
                      {lat: -19.585521887, lng: -65.768145258},
                      {lat: -19.585442430, lng: -65.767981700},
                      {lat: -19.585391277, lng: -65.767717100},
                      {lat: -19.585384859, lng: -65.767678834},
                      {lat: -19.585376139, lng: -65.767653071},
                      {lat: -19.585262230, lng: -65.767379668},
                      {lat: -19.585205529, lng: -65.767235110},
                      {lat: -19.584803208, lng: -65.766941028},
                      {lat: -19.584564889, lng: -65.766755127},
                      {lat: -19.584307035, lng: -65.766638753},
                      {lat: -19.583973011, lng: -65.766603928},
                      {lat: -19.583589709, lng: -65.766659432},
                      {lat: -19.583282433, lng: -65.766737027},
                      {lat: -19.583084164, lng: -65.766727660},
                      {lat: -19.582859553, lng: -65.766682062},
                      {lat: -19.582647267, lng: -65.766599058},
                      {lat: -19.582375340, lng: -65.766552882},
                      {lat: -19.582127483, lng: -65.766534522},
                      {lat: -19.582051008, lng: -65.766302998},
                      {lat: -19.581977512, lng: -65.765965375},
                      {lat: -19.581932636, lng: -65.765704770},
                      {lat: -19.581959098, lng: -65.765549993},
                      {lat: -19.581965883, lng: -65.765513844},
                      {lat: -19.582213686, lng: -65.764861796},
                      {lat: -19.582372868, lng: -65.764424008},
                      {lat: -19.582375358, lng: -65.764005183},
                      {lat: -19.582250862, lng: -65.763759433},
                      {lat: -19.582163818, lng: -65.763539810},
                      {lat: -19.581568237, lng: -65.762837015},
                      {lat: -19.582935241, lng: -65.761138405},
                      {lat: -19.582223587, lng: -65.760902359},
                      {lat: -19.581831551, lng: -65.761310138},
                      {lat: -19.580986644, lng: -65.762244266},
                      {lat: -19.579666764, lng: -65.763745729},
              ];


              var dist11_ = new google.maps.Polygon({
              paths: dist11,
              strokeColor: '#0E881A',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#0E881A',
              fillOpacity: 0.05
              });
              dist11_.setMap(map2);
              var marker = new google.maps.Marker({
                position: {lat: -19.580545055457687, lng: -65.76643459148104},
                icon:image,
                label: {
                color: '#000', // <= HERE
                fontSize: '11px',
                fontWeight: '900',
                text: 'DISTRITO-11',
                },
                map: map2
              });





              var dist12 = [
                      {lat: -19.560822482, lng: -65.784025086},
                      {lat: -19.561285231, lng: -65.783812983},
                      {lat: -19.561586917, lng: -65.783684365},
                      {lat: -19.562302088, lng: -65.782765998},
                      {lat: -19.562636943, lng: -65.782412237},
                      {lat: -19.562909503, lng: -65.782289756},
                      {lat: -19.563757066, lng: -65.781715725},
                      {lat: -19.565413282, lng: -65.780747078},
                      {lat: -19.567076300, lng: -65.779976248},
                      {lat: -19.568460717, lng: -65.779337728},
                      {lat: -19.569100250, lng: -65.779207108},
                      {lat: -19.570333367, lng: -65.778750966},
                      {lat: -19.572308411, lng: -65.777810754},
                      {lat: -19.573586453, lng: -65.777242668},
                      {lat: -19.574571010, lng: -65.776938634},
                      {lat: -19.575891384, lng: -65.776868336},
                      {lat: -19.577379612, lng: -65.776743430},
                      {lat: -19.579384585, lng: -65.776268032},
                      {lat: -19.580239429, lng: -65.775854566},
                      {lat: -19.580611221, lng: -65.775348334},
                      {lat: -19.580849401, lng: -65.774759438},
                      {lat: -19.581045551, lng: -65.774039338},
                      {lat: -19.581062148, lng: -65.772658304},
                      {lat: -19.581023230, lng: -65.772063868},
                      {lat: -19.580525348, lng: -65.772091319},
                      {lat: -19.580273628, lng: -65.772100829},
                      {lat: -19.579987228, lng: -65.772116678},
                      {lat: -19.579988528, lng: -65.771899438},
                      {lat: -19.579986897, lng: -65.771667098},
                      {lat: -19.579976666, lng: -65.771389448},
                      {lat: -19.579975640, lng: -65.771122518},
                      {lat: -19.579968731, lng: -65.771099190},
                      {lat: -19.579954167, lng: -65.770879531},
                      {lat: -19.579940571, lng: -65.770846267},
                      {lat: -19.579927491, lng: -65.770690059},
                      {lat: -19.579918648, lng: -65.770451142},
                      {lat: -19.579944982, lng: -65.770317725},
                      {lat: -19.579966254, lng: -65.769951948},
                      {lat: -19.579966975, lng: -65.769822357},
                      {lat: -19.579957600, lng: -65.769621075},
                      {lat: -19.579917959, lng: -65.769432958},
                      {lat: -19.579940306, lng: -65.769278403},
                      {lat: -19.579929358, lng: -65.769059453},
                      {lat: -19.579913102, lng: -65.769018546},
                      {lat: -19.579930137, lng: -65.768836456},
                      {lat: -19.579934181, lng: -65.768719608},
                      {lat: -19.580193209, lng: -65.768671067},
                      {lat: -19.580336546, lng: -65.768674876},
                      {lat: -19.580457390, lng: -65.768665195},
                      {lat: -19.580599326, lng: -65.768667692},
                      {lat: -19.580659775, lng: -65.768646173},
                      {lat: -19.580646637, lng: -65.768493077},
                      {lat: -19.580640868, lng: -65.768233301},
                      {lat: -19.580602874, lng: -65.768147614},
                      {lat: -19.580108675, lng: -65.768034974},
                      {lat: -19.579812858, lng: -65.768003229},
                      {lat: -19.579441270, lng: -65.767925909},
                      {lat: -19.578830172, lng: -65.767807822},
                      {lat: -19.578447004, lng: -65.767769049},
                      {lat: -19.578165362, lng: -65.767734265},
                      {lat: -19.577725834, lng: -65.767667187},
                      {lat: -19.577826809, lng: -65.767944415},
                      {lat: -19.577991086, lng: -65.768423747},
                      {lat: -19.578032969, lng: -65.768568585},
                      {lat: -19.578046567, lng: -65.768635642},
                      {lat: -19.578058079, lng: -65.768911398},
                      {lat: -19.578037505, lng: -65.769123150},
                      {lat: -19.577926948, lng: -65.769358063},
                      {lat: -19.577843048, lng: -65.769469245},
                      {lat: -19.577710945, lng: -65.769601630},
                      {lat: -19.577606690, lng: -65.769707143},
                      {lat: -19.577470342, lng: -65.769753376},
                      {lat: -19.577304832, lng: -65.769830951},
                      {lat: -19.577121753, lng: -65.769843312},
                      {lat: -19.576971708, lng: -65.769862056},
                      {lat: -19.576817680, lng: -65.769869213},
                      {lat: -19.576720255, lng: -65.769893368},
                      {lat: -19.576595048, lng: -65.769927598},
                      {lat: -19.576445005, lng: -65.769987896},
                      {lat: -19.576304846, lng: -65.769997599},
                      {lat: -19.576190182, lng: -65.769942935},
                      {lat: -19.576098102, lng: -65.769874448},
                      {lat: -19.575993566, lng: -65.769851390},
                      {lat: -19.575891778, lng: -65.769859959},
                      {lat: -19.575732092, lng: -65.769856233},
                      {lat: -19.575305202, lng: -65.769840186},
                      {lat: -19.575038893, lng: -65.769852305},
                      {lat: -19.574560314, lng: -65.769912373},
                      {lat: -19.574261979, lng: -65.769960097},
                      {lat: -19.574133940, lng: -65.769980622},
                      {lat: -19.573901814, lng: -65.770018996},
                      {lat: -19.573723794, lng: -65.770050177},
                      {lat: -19.573513010, lng: -65.770087210},
                      {lat: -19.573400065, lng: -65.770102856},
                      {lat: -19.573150402, lng: -65.770137485},
                      {lat: -19.572868985, lng: -65.770176615},
                      {lat: -19.572556452, lng: -65.770244674},
                      {lat: -19.572306128, lng: -65.770300522},
                      {lat: -19.572055008, lng: -65.770406785},
                      {lat: -19.571802563, lng: -65.770515316},
                      {lat: -19.571714987, lng: -65.770561817},
                      {lat: -19.571574084, lng: -65.770635032},
                      {lat: -19.571441700, lng: -65.770707727},
                      {lat: -19.571343098, lng: -65.770759576},
                      {lat: -19.571293699, lng: -65.770786414},
                      {lat: -19.571259965, lng: -65.770805343},
                      {lat: -19.571181402, lng: -65.770850422},
                      {lat: -19.571107466, lng: -65.770893047},
                      {lat: -19.571065245, lng: -65.770917083},
                      {lat: -19.570990411, lng: -65.770961035},
                      {lat: -19.570935639, lng: -65.770992853},
                      {lat: -19.570871425, lng: -65.771029730},
                      {lat: -19.570805213, lng: -65.771065876},
                      {lat: -19.570768089, lng: -65.771087043},
                      {lat: -19.570648605, lng: -65.771142385},
                      {lat: -19.570537341, lng: -65.771194355},
                      {lat: -19.570455339, lng: -65.771232737},
                      {lat: -19.570357474, lng: -65.771278539},
                      {lat: -19.570257950, lng: -65.771325387},
                      {lat: -19.570177898, lng: -65.771362255},
                      {lat: -19.570055753, lng: -65.771419541},
                      {lat: -19.569960820, lng: -65.771463305},
                      {lat: -19.569852522, lng: -65.771513254},
                      {lat: -19.569756182, lng: -65.771558336},
                      {lat: -19.569631013, lng: -65.771616266},
                      {lat: -19.569536047, lng: -65.771651746},
                      {lat: -19.569325185, lng: -65.771728747},
                      {lat: -19.569188966, lng: -65.771779506},
                      {lat: -19.569120011, lng: -65.771804222},
                      {lat: -19.569035049, lng: -65.771833197},
                      {lat: -19.568952265, lng: -65.771858375},
                      {lat: -19.568837963, lng: -65.771895657},
                      {lat: -19.568773437, lng: -65.771916050},
                      {lat: -19.568625010, lng: -65.771920695},
                      {lat: -19.568525911, lng: -65.771924513},
                      {lat: -19.568468217, lng: -65.771927600},
                      {lat: -19.568356211, lng: -65.771930486},
                      {lat: -19.568099366, lng: -65.771891035},
                      {lat: -19.567916863, lng: -65.771863027},
                      {lat: -19.567750913, lng: -65.771842043},
                      {lat: -19.567580011, lng: -65.771820891},
                      {lat: -19.567424707, lng: -65.771802999},
                      {lat: -19.567293306, lng: -65.771786012},
                      {lat: -19.567205815, lng: -65.771781387},
                      {lat: -19.567043679, lng: -65.771770622},
                      {lat: -19.566744159, lng: -65.771747232},
                      {lat: -19.566550058, lng: -65.771778413},
                      {lat: -19.566320941, lng: -65.771818048},
                      {lat: -19.566030601, lng: -65.771928634},
                      {lat: -19.565746546, lng: -65.772015692},
                      {lat: -19.565582610, lng: -65.772065917},
                      {lat: -19.565385103, lng: -65.772071385},
                      {lat: -19.565121534, lng: -65.772075620},
                      {lat: -19.564887363, lng: -65.772049038},
                      {lat: -19.564806931, lng: -65.772040240},
                      {lat: -19.564700778, lng: -65.772026850},
                      {lat: -19.564539357, lng: -65.772015544},
                      {lat: -19.564423715, lng: -65.772005555},
                      {lat: -19.564237834, lng: -65.771989941},
                      {lat: -19.564115371, lng: -65.772024362},
                      {lat: -19.563954680, lng: -65.772073729},
                      {lat: -19.563820077, lng: -65.772114662},
                      {lat: -19.563676928, lng: -65.772183171},
                      {lat: -19.563566492, lng: -65.772237345},
                      {lat: -19.563413185, lng: -65.772310215},
                      {lat: -19.563239921, lng: -65.772388627},
                      {lat: -19.563059864, lng: -65.772475486},
                      {lat: -19.562683263, lng: -65.772642660},
                      {lat: -19.562547823, lng: -65.772711846},
                      {lat: -19.562340207, lng: -65.772814345},
                      {lat: -19.562080380, lng: -65.772995957},
                      {lat: -19.561948822, lng: -65.773087033},
                      {lat: -19.561808958, lng: -65.773254299},
                      {lat: -19.561709048, lng: -65.773372301},
                      {lat: -19.561633716, lng: -65.773465607},
                      {lat: -19.561490659, lng: -65.773660535},
                      {lat: -19.561382820, lng: -65.773813298},
                      {lat: -19.561330581, lng: -65.773887239},
                      {lat: -19.561262749, lng: -65.773988232},
                      {lat: -19.561208790, lng: -65.774064909},
                      {lat: -19.561164400, lng: -65.774131293},
                      {lat: -19.561112617, lng: -65.774208765},
                      {lat: -19.561084576, lng: -65.774248469},
                      {lat: -19.561061769, lng: -65.774282525},
                      {lat: -19.560980499, lng: -65.774424937},
                      {lat: -19.560863177, lng: -65.774623646},
                      {lat: -19.560794799, lng: -65.774739938},
                      {lat: -19.560700516, lng: -65.774897652},
                      {lat: -19.560672722, lng: -65.774961593},
                      {lat: -19.560621016, lng: -65.775073157},
                      {lat: -19.560555788, lng: -65.775225956},
                      {lat: -19.560486419, lng: -65.775377585},
                      {lat: -19.560450205, lng: -65.775453154},
                      {lat: -19.560332900, lng: -65.775721455},
                      {lat: -19.560173696, lng: -65.775948704},
                      {lat: -19.560075195, lng: -65.776077900},
                      {lat: -19.559834898, lng: -65.776307363},
                      {lat: -19.559717476, lng: -65.776422885},
                      {lat: -19.559567691, lng: -65.776583704},
                      {lat: -19.559477611, lng: -65.776658676},
                      {lat: -19.559162820, lng: -65.776788350},
                      {lat: -19.558945550, lng: -65.776872377},
                      {lat: -19.558657484, lng: -65.777028796},
                      {lat: -19.558378185, lng: -65.777160027},
                      {lat: -19.557917286, lng: -65.777350518},
                      {lat: -19.557717964, lng: -65.777443050},
                      {lat: -19.557405641, lng: -65.777564510},
                      {lat: -19.557161401, lng: -65.777684189},
                      {lat: -19.557040219, lng: -65.777742161},
                      {lat: -19.556818791, lng: -65.777790923},
                      {lat: -19.556688579, lng: -65.777823047},
                      {lat: -19.556514425, lng: -65.777876327},
                      {lat: -19.556359710, lng: -65.777923155},
                      {lat: -19.555819074, lng: -65.778084484},
                      {lat: -19.555467137, lng: -65.778188373},
                      {lat: -19.559924044, lng: -65.784696502},
              ];


              var dist12_ = new google.maps.Polygon({
              paths: dist12,
              strokeColor: '#2CA7FF',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#2CA7FF',
              fillOpacity: 0.05
              });
              dist12_.setMap(map2);
              var marker = new google.maps.Marker({
                position: {lat: -19.570910426563618, lng: -65.77417016029358},
                icon:image,
                label: {
                color: '#000', // <= HERE
                fontSize: '12px',
                fontWeight: '900',
                text: 'DISTRITO-12',
                },
                map: map2
              });



              var dist17 = [
                      {lat: -19.556598870, lng: -65.756012439},
                      {lat: -19.557131087, lng: -65.755912709},
                      {lat: -19.557479038, lng: -65.755922741},
                      {lat: -19.557678743, lng: -65.755884410},
                      {lat: -19.558444676, lng: -65.755772836},
                      {lat: -19.558828922, lng: -65.755790727},
                      {lat: -19.559331011, lng: -65.755888814},
                      {lat: -19.559729546, lng: -65.756021159},
                      {lat: -19.560012506, lng: -65.756160645},
                      {lat: -19.560149433, lng: -65.756268100},
                      {lat: -19.560549722, lng: -65.756607781},
                      {lat: -19.560732139, lng: -65.756813924},
                      {lat: -19.561188849, lng: -65.757409259},
                      {lat: -19.561333422, lng: -65.757737534},
                      {lat: -19.561448294, lng: -65.758051045},
                      {lat: -19.561470815, lng: -65.758395035},
                      {lat: -19.561581650, lng: -65.759037653},
                      {lat: -19.561574874, lng: -65.759202742},
                      {lat: -19.561484683, lng: -65.759732064},
                      {lat: -19.561429962, lng: -65.760397821},
                      {lat: -19.561451853, lng: -65.761105098},
                      {lat: -19.561521977, lng: -65.761425045},
                      {lat: -19.561775629, lng: -65.761671276},
                      {lat: -19.562651959, lng: -65.761603778},
                      {lat: -19.563491592, lng: -65.760479252},
                      {lat: -19.563567262, lng: -65.760458256},
                      {lat: -19.563762611, lng: -65.760375468},
                      {lat: -19.563954926, lng: -65.760294957},
                      {lat: -19.564144284, lng: -65.760182476},
                      {lat: -19.564294768, lng: -65.760070441},
                      {lat: -19.564466431, lng: -65.759908265},
                      {lat: -19.564627557, lng: -65.759669506},
                      {lat: -19.564874036, lng: -65.758926771},
                      {lat: -19.564974677, lng: -65.758802527},
                      {lat: -19.565336950, lng: -65.758513694},
                      {lat: -19.565521414, lng: -65.758491046},
                      {lat: -19.565922393, lng: -65.758384149},
                      {lat: -19.566235764, lng: -65.758208877},
                      {lat: -19.566327689, lng: -65.757920806},
                      {lat: -19.566446250, lng: -65.756889688},
                      {lat: -19.566949426, lng: -65.756193463},
                      {lat: -19.567293938, lng: -65.755571096},
                      {lat: -19.567368884, lng: -65.755580829},
                      {lat: -19.567750515, lng: -65.755820679},
                      {lat: -19.568205036, lng: -65.755786834},
                      {lat: -19.568650754, lng: -65.755710158},
                      {lat: -19.569321402, lng: -65.755380464},
                      {lat: -19.569288000, lng: -65.755472223},
                      {lat: -19.569267105, lng: -65.755557311},
                      {lat: -19.569207287, lng: -65.755853605},
                      {lat: -19.569168347, lng: -65.756102510},
                      {lat: -19.569135937, lng: -65.756338572},
                      {lat: -19.569124482, lng: -65.756526629},
                      {lat: -19.569309601, lng: -65.756666544},
                      {lat: -19.569534521, lng: -65.756139009},
                      {lat: -19.569761394, lng: -65.755596784},
                      {lat: -19.569427690, lng: -65.755237941},
                      {lat: -19.569496977, lng: -65.755034096},
                      {lat: -19.569613756, lng: -65.754821100},
                      {lat: -19.569716746, lng: -65.754576528},
                      {lat: -19.569538945, lng: -65.754427432},
                      {lat: -19.569389657, lng: -65.754293119},
                      {lat: -19.569262740, lng: -65.754161623},
                      {lat: -19.569157858, lng: -65.753857134},
                      {lat: -19.569304771, lng: -65.753395829},
                      {lat: -19.569852728, lng: -65.752643387},
                      {lat: -19.570239940, lng: -65.752169317},
                      {lat: -19.569796977, lng: -65.751828094},
                      {lat: -19.569637267, lng: -65.751390776},
                      {lat: -19.569588068, lng: -65.751111454},
                      {lat: -19.569502080, lng: -65.750793815},
                      {lat: -19.569281991, lng: -65.750487427},
                      {lat: -19.568899740, lng: -65.750043463},
                      {lat: -19.568654054, lng: -65.749771529},
                      {lat: -19.568781224, lng: -65.749682359},
                      {lat: -19.569136854, lng: -65.749465277},
                      {lat: -19.569000107, lng: -65.748572143},
                      {lat: -19.569337117, lng: -65.748417758},
                      {lat: -19.569710546, lng: -65.748230445},
                      {lat: -19.570304828, lng: -65.747478847},
                      {lat: -19.570866861, lng: -65.747141135},
                      {lat: -19.571159370, lng: -65.746936450},
                      {lat: -19.571302425, lng: -65.746486519},
                      {lat: -19.571102205, lng: -65.746185549},
                      {lat: -19.570579525, lng: -65.746370982},
                      {lat: -19.570221309, lng: -65.746583568},
                      {lat: -19.569941125, lng: -65.746724107},
                      {lat: -19.569617327, lng: -65.746762750},
                      {lat: -19.569315100, lng: -65.746646797},
                      {lat: -19.568918540, lng: -65.746094809},
                      {lat: -19.568148335, lng: -65.746657214},
                      {lat: -19.567289923, lng: -65.747099489},
                      {lat: -19.566695927, lng: -65.747322466},
                      {lat: -19.565730558, lng: -65.747711639},
                      {lat: -19.564987830, lng: -65.748124062},
                      {lat: -19.564296859, lng: -65.746837447},
                      {lat: -19.562978016, lng: -65.746161706},
                      {lat: -19.561443631, lng: -65.744737057},
                      {lat: -19.561178016, lng: -65.744893950},
                      {lat: -19.560594025, lng: -65.745324953},
                      {lat: -19.559787236, lng: -65.746185953},
                      {lat: -19.559537167, lng: -65.746854000},
                      {lat: -19.559212992, lng: -65.747497311},
                      {lat: -19.559089011, lng: -65.747817398},
                      {lat: -19.558766558, lng: -65.748023216},
                      {lat: -19.557823310, lng: -65.748337028},
                      {lat: -19.555347415, lng: -65.748593874},
                      {lat: -19.555960429, lng: -65.756085101},
                      {lat: -19.556178521, lng: -65.756085365},
              ];

              var dist17_ = new google.maps.Polygon({
              paths: dist17,
              strokeColor: '#FFFE00',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#FFFE00',
              fillOpacity: 0.05
              });
              dist17_.setMap(map2);
              var marker = new google.maps.Marker({
                position: {lat: -19.561496429789823, lng: -65.75230790829735},
                icon:image,
                label: {
                color: '#000', // <= HERE
                fontSize: '12px',
                fontWeight: '900',
                text: 'DISTRITO-17',
                },
                map: map2
              });


              var dist19 = [
                      {lat: -19.555798389, lng: -65.748542069},
                      {lat: -19.556193695, lng: -65.748503050},
                      {lat: -19.556536819, lng: -65.748467193},
                      {lat: -19.557801999, lng: -65.748337373},
                      {lat: -19.558728457, lng: -65.748028230},
                      {lat: -19.559073039, lng: -65.747833337},
                      {lat: -19.559532847, lng: -65.746851120},
                      {lat: -19.559789231, lng: -65.746198929},
                      {lat: -19.560534679, lng: -65.745384113},
                      {lat: -19.561096322, lng: -65.744952972},
                      {lat: -19.562314091, lng: -65.746496477},
                      {lat: -19.562961519, lng: -65.747362876},
                      {lat: -19.563677724, lng: -65.748767283},
                      {lat: -19.564547800, lng: -65.748321465},
                      {lat: -19.565602486, lng: -65.747761981},
                      {lat: -19.566365912, lng: -65.747450103},
                      {lat: -19.567118618, lng: -65.747163264},
                      {lat: -19.567296179, lng: -65.747091349},
                      {lat: -19.568106118, lng: -65.746682581},
                      {lat: -19.568925879, lng: -65.746098183},
                      {lat: -19.568563432, lng: -65.745260994},
                      {lat: -19.568732168, lng: -65.744496732},
                      {lat: -19.569001133, lng: -65.744165565},
                      {lat: -19.569416516, lng: -65.744075144},
                      {lat: -19.569932578, lng: -65.744003169},
                      {lat: -19.569985246, lng: -65.744003453},
                      {lat: -19.570332797, lng: -65.743935898},
                      {lat: -19.570618168, lng: -65.743703741},
                      {lat: -19.570686449, lng: -65.743570756},
                      {lat: -19.570751286, lng: -65.743354321},
                      {lat: -19.570832965, lng: -65.743071481},
                      {lat: -19.570753877, lng: -65.742861953},
                      {lat: -19.571153000, lng: -65.742756076},
                      {lat: -19.571404793, lng: -65.742589575},
                      {lat: -19.571610014, lng: -65.742376300},
                      {lat: -19.571638617, lng: -65.742360296},
                      {lat: -19.571783108, lng: -65.742158119},
                      {lat: -19.571799615, lng: -65.742154185},
                      {lat: -19.571964502, lng: -65.741935134},
                      {lat: -19.571990606, lng: -65.741899494},
                      {lat: -19.572091194, lng: -65.741645869},
                      {lat: -19.572226183, lng: -65.741424786},
                      {lat: -19.572346050, lng: -65.741265304},
                      {lat: -19.572418165, lng: -65.741102900},
                      {lat: -19.572731237, lng: -65.740649836},
                      {lat: -19.573170832, lng: -65.740046683},
                      {lat: -19.573348781, lng: -65.739707287},
                      {lat: -19.573566120, lng: -65.739483561},
                      {lat: -19.573585866, lng: -65.739472070},
                      {lat: -19.573757421, lng: -65.739286763},
                      {lat: -19.573108739, lng: -65.738644727},
                      {lat: -19.572293987, lng: -65.738879404},
                      {lat: -19.571516553, lng: -65.739607052},
                      {lat: -19.570361770, lng: -65.740003045},
                      {lat: -19.568560628, lng: -65.739391405},
                      {lat: -19.566463855, lng: -65.739053059},
                      {lat: -19.565671432, lng: -65.739085668},
                      {lat: -19.564936502, lng: -65.738990345},
                      {lat: -19.563704596, lng: -65.738875313},
                      {lat: -19.562631506, lng: -65.738654452},
                      {lat: -19.561432572, lng: -65.738191832},
                      {lat: -19.559917766, lng: -65.737459941},
                      {lat: -19.558418674, lng: -65.737250423},
                      {lat: -19.557505787, lng: -65.739015657},
                      {lat: -19.556426102, lng: -65.740394386},
                      {lat: -19.555771395, lng: -65.742961530},
                      {lat: -19.555354910, lng: -65.748610115},
              ];

              var dist19_ = new google.maps.Polygon({
              paths: dist19,
              strokeColor: '#08289A',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#08289A',
              fillOpacity: 0.05
              });
              dist19_.setMap(map2);
              var marker = new google.maps.Marker({
                position: {lat: -19.56284026631442, lng: -65.74192209504699},
                icon:image,
                label: {
                color: '#000', // <= HERE
                fontSize: '12px',
                fontWeight: '900',
                text: 'DISTRITO-19',
                },
                map: map2
              });



              var dist20 = [
                      {lat: -19.561980509, lng: -65.787705107},
                      {lat: -19.566058002, lng: -65.793681752},
                      {lat: -19.566282748, lng: -65.791790602},
                      {lat: -19.566187466, lng: -65.790786437},
                      {lat: -19.566422101, lng: -65.789947673},
                      {lat: -19.566825288, lng: -65.789378643},
                      {lat: -19.567969747, lng: -65.788993131},
                      {lat: -19.569901919, lng: -65.788880875},
                      {lat: -19.572176802, lng: -65.788850860},
                      {lat: -19.575936881, lng: -65.788673907},
                      {lat: -19.579864904, lng: -65.788863408},
                      {lat: -19.581290673, lng: -65.790051096},
                      {lat: -19.584287050, lng: -65.790994948},
                      {lat: -19.586270577, lng: -65.790703467},
                      {lat: -19.588527898, lng: -65.792280710},
                      {lat: -19.596558454, lng: -65.783496940},
                      {lat: -19.607404056, lng: -65.771669016},
                      {lat: -19.610115377, lng: -65.768736317},
                      {lat: -19.615740761, lng: -65.762574800},
                      {lat: -19.614224406, lng: -65.760359141},
                      {lat: -19.610397306, lng: -65.761986042},
                      {lat: -19.609396149, lng: -65.764207601},
                      {lat: -19.607053681, lng: -65.765326307},
                      {lat: -19.606016101, lng: -65.766200849},
                      {lat: -19.604758018, lng: -65.767318419},
                      {lat: -19.602407654, lng: -65.770173730},
                      {lat: -19.597025913, lng: -65.771221441},
                      {lat: -19.594917665, lng: -65.771566166},
                      {lat: -19.593593017, lng: -65.771755586},
                      {lat: -19.592134060, lng: -65.771820807},
                      {lat: -19.591652842, lng: -65.770316284},
                      {lat: -19.590347643, lng: -65.770393817},
                      {lat: -19.590864632, lng: -65.768527302},
                      {lat: -19.590888282, lng: -65.767934216},
                      {lat: -19.589476455, lng: -65.768518116},
                      {lat: -19.589123577, lng: -65.768667875},
                      {lat: -19.588652400, lng: -65.768849385},
                      {lat: -19.587750656, lng: -65.769028054},
                      {lat: -19.586961632, lng: -65.769179297},
                      {lat: -19.586262885, lng: -65.769299968},
                      {lat: -19.586183629, lng: -65.769923807},
                      {lat: -19.585969526, lng: -65.770085623},
                      {lat: -19.585725297, lng: -65.770168732},
                      {lat: -19.585496903, lng: -65.770248872},
                      {lat: -19.584977760, lng: -65.770263598},
                      {lat: -19.584529219, lng: -65.770305594},
                      {lat: -19.583243180, lng: -65.770298203},
                      {lat: -19.582958536, lng: -65.770655610},
                      {lat: -19.582923060, lng: -65.770955717},
                      {lat: -19.582805049, lng: -65.771238494},
                      {lat: -19.582621408, lng: -65.771779177},
                      {lat: -19.582528612, lng: -65.771868117},
                      {lat: -19.582537476, lng: -65.772007933},
                      {lat: -19.581597436, lng: -65.772665615},
                      {lat: -19.581063408, lng: -65.772667075},
                      {lat: -19.581044105, lng: -65.774050539},
                      {lat: -19.580982080, lng: -65.774256469},
                      {lat: -19.580892495, lng: -65.774624707},
                      {lat: -19.580712931, lng: -65.775082683},
                      {lat: -19.580560476, lng: -65.775418087},
                      {lat: -19.580232084, lng: -65.775879420},
                      {lat: -19.579798580, lng: -65.776067487},
                      {lat: -19.579425200, lng: -65.776250202},
                      {lat: -19.577468050, lng: -65.776749615},
                      {lat: -19.575727315, lng: -65.776864338},
                      {lat: -19.574430369, lng: -65.776978870},
                      {lat: -19.573604347, lng: -65.777242416},
                      {lat: -19.572684225, lng: -65.777651665},
                      {lat: -19.570703216, lng: -65.778567260},
                      {lat: -19.569116615, lng: -65.779209617},
                      {lat: -19.568453240, lng: -65.779337733},
                      {lat: -19.566603312, lng: -65.780176826},
                      {lat: -19.565528365, lng: -65.780692421},
                      {lat: -19.564916418, lng: -65.781043564},
                      {lat: -19.563903669, lng: -65.781590233},
                      {lat: -19.562665330, lng: -65.782427385},
                      {lat: -19.561583683, lng: -65.783684883},
                      {lat: -19.560841080, lng: -65.783995288},
                      {lat: -19.559934638, lng: -65.784690961},
                      {lat: -19.560107415, lng: -65.785889479},
              ];

              var dist20_ = new google.maps.Polygon({
              paths: dist20,
              strokeColor: '#08289A',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#08289A',
              fillOpacity: 0.05
              });
              dist20_.setMap(map2);
              var marker = new google.maps.Marker({
                position: {lat: -19.585138491528344, lng: -65.78044067039022},
                icon:image,
                label: {
                color: '#000', // <= HERE
                fontSize: '12px',
                fontWeight: '900',
                text: 'DISTRITO-20',
                },
                map: map2
              });


@foreach($data as $dato)
dato1={{$dato['longitud']}}
dato2={{$dato['latitud']}}
		var cityCircle = new google.maps.Circle({
	  strokeColor: '#FF0000',
	  strokeOpacity: 0.8,
	  strokeWeight: 2,
	  fillColor: '#FF0000',
	  fillOpacity: 0.35,
	  map: map2,
	  center: {lat: {{$dato['latitud']}}, lng:{{$dato['longitud']}} },
	  radius: 130
		});
@endforeach

}

</script>


	<script>
		(function ($) {
			var $container = $('.masonry_wrapper'),
				colWidth = function () {
					var w = $container.width(),
						columnNum = 1,
						columnWidth = 0;
					if (w > 1200) {
						columnNum  = 3;
					} else if (w > 900) {
						columnNum  = 3;
					} else if (w > 600) {
						columnNum  = 2;
					} else if (w > 300) {
						columnNum  = 1;
					}
					columnWidth = Math.floor(w/columnNum);
					$container.find('.item').each(function() {
						var $item = $(this),
							multiplier_w = $item.attr('class').match(/item-w(\d)/),
							multiplier_h = $item.attr('class').match(/item-h(\d)/),
							width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4,
							height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-4 : columnWidth*0.5-4;
						$item.css({
							width: width,
							height: height
						});
					});
					return columnWidth;
				}

				function refreshWaypoints() {
					setTimeout(function() {
					}, 1000);
				}

				$('nav.portfolio-filter ul li a').on('click', function() {
					var selector = $(this).attr('data-filter');
					$container.isotope({ filter: selector }, refreshWaypoints());
					$('nav.portfolio-filter ul li a').removeClass('active');
					$(this).addClass('active');
					return false;
				});

				function setPortfolio() {
					setColumns();
					$container.isotope('reLayout');
				}

				isotope = function () {
					$container.isotope({
						resizable: true,
						itemSelector: '.item',
						masonry: {
							columnWidth: colWidth(),
							gutterWidth: 0
						}
					});
				};
			isotope();
			$(window).smartresize(isotope);
		}(jQuery));
	</script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="{{asset('pagina/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('pagina/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

		<script type="text/javascript">
			var revapi;
			jQuery(document).ready(function() {
			revapi = jQuery('.tp-banner').revolution(
			{
				delay:9000,
				startwidth:1170,
				startheight:500,
				hideThumbs:10,
				fullWidth:"off",
				fullScreen:"on",
				fullScreenOffsetContainer: ""
			 });
		   });	//ready
		</script>



    <!-- Animation Scripts-->
    <script src="{{asset('pagina/js/scrollReveal.js')}}"></script>
    <script>
            (function($) {
            "use strict"
                window.scrollReveal = new scrollReveal();
            })(jQuery);
    </script>

    <!-- Portofolio Pretty photo JS -->
    <script src="{{asset('pagina/js/jquery.prettyPhoto.js')}}"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            jQuery('a[data-gal]').each(function() {
                jQuery(this).attr('rel', jQuery(this).data('gal'));
            });
                jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});
        })(jQuery);
    </script>

    <!-- Video Player o-->
    <script src="{{asset('pagina/js/jquery.mb.YTPlayer.js')}}"></script>
    <script type="text/javascript">
      (function($) {
        "use strict"
          $(".player").mb_YTPlayer();
        })(jQuery);
    </script>

</body>
</html>

