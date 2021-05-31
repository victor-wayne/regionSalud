<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="description" content="Region Salud">
    <meta name="keywords" content="region salud,cardiologo,cirujano plastico,dermatologos,endocrinologo,gastroenterologos,ginecologos,internistas,neurocirujanos,neurologos,oftalmologos,otorrinos,pediatras,psiquiatras,reumatologos,traumatologos,anestesiologos,angiologos,genetistas,gediatra,medico general,nefrologo,neumologo,rehabilitador,urologo,dentistas,ortodoncista,enfermero,psicologos,nutriologos">
    <meta name="author" content="victor">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <title>Region Salud | Médicos | Especilaistas</title>

    <!-- Favicon -->


    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon.png') }}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!--    Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>



    <!--Fontawesom-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!--Animated CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/isotope/style.css') }}">

    <!--Main Stylesheet-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--Responsive Framework-->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstraps.css') }}">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css" rel="stylesheet" integrity="sha384-G3G7OsJCbOk1USkOY4RfeX1z27YaWrZ1YuaQ5tbuawed9IoreRDpWpTkZLXQfPm3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Kanit" rel="stylesheet">








    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#header">

<!--Start Hedaer Section-->
<section id="header">
    <div class="header-area">
        <div class="top_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                        <div class="address">
                            <i class="fa fa-home floatleft"></i>
                            <p>Region Salud</p>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                        <div class="phone">
                            <i class="fa fa-phone floatleft"></i>
                            <p><a href="tel:4611451417">4611451417</a></p>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-4">
                        <div class="social_icon text-right">
                            <a href="https://www.facebook.com/RegionSaludCelaya/"><i class="fa fa-facebook" style="font-size:20px"></i></a>
                            <a href="https://twitter.com/salud_region?lang=es"><i class="fa fa-twitter" style="font-size:20px"></i></a>

                            <a href="https://www.youtube.com/channel/UCm1TnUNi6Bkm-gVRr1xMriA"><i class="fa fa-youtube" style="font-size:20px"></i></a>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </div>


     <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav-v">
           <div class="container">
                      <nav class="navbar-v navbar-expand-lg navbar-light bg-light ">

                     <div class="navbar-header-v">
                           <!--End of top header -->
                            <button type="button" class="navbar-toggle-v collapsed" data-toggle="collapse-v" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand custom_navbar-brand" href="{{ route('home') }}"><img src="{{ asset('img/regionl.png') }}" alt=""></a>
                        </div>


                    </nav>
                </div>
             <!-- en el menu de arriba no radica el problema -->

                    <nav class="navbar" style="margin-bottom: 0;">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" id="menuBtn" class="navbar-toggle" onclick="actionBoton();">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="{{ route('home') }}">Región Salud</a>
                            </div>
                            <div class="collapse navbar-collapse" id="menu">
                                <ul class="navbar-nav">

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">PROFESIONALES SALUD<b class="caret"></b></a>
                                        <ul class="dropdown-menu">

                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle">Médicos <b class="caret right"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('cirujanos-show') }}">C. Plásticos</a></li>
                                                    <li><a href="{{ route('dermatologia-show') }}">Dermatólogos</a></li>
                                                    <li><a href="{{ route('endocrinologos-show') }}">Endocrinólogos</a></li>
                                                    <li><a href="{{ route('gastroenterologos-show') }}">Gastroenterólogos</a></li>
                                                    <li><a href="{{ route('ginecologos-show') }}">Ginecólogos</a></li>
                                                    <li><a href="{{ route('internistas-show') }}">Internistas</a></li>
                                                    <li><a href="{{ route('neurocirujanos-show') }}">Neurocirujanos</a></li>
                                                    <li><a href="{{ route('neurologos-show') }}">Neurólogos<b class="caret down"></b></a></li>
                                                    <li><a href="{{ route('oftalmologos-show') }}">Oftalmólogos</a></li>
                                                    <li><a href="{{ route('otorrinos-show') }}">Otorrinos</a></li>
                                                    <li><a href="{{ route('pediatras-show') }}">Pediatras</a></li>
                                                    <li><a href="{{ route('psiquiatras-show') }}">Psiquiatras</a></li>
                                                    <li><a href="{{ route('reumatologos-show') }}">Reumatólogos</a></li>
                                                    <li><a href="{{ route('traumatologos-show') }}">Traumatólogos</a></li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle">Cardiólogos <b class="caret right"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('cardiologos-show') }}">Cardiólogos</a></li>
                                                    <li><a href="{{ route('ecocardiografia-show') }}">Ecocardiografía</a></li>
                                                    <li><a href="{{ route('intervencionista-show') }}">Intervencionista</a></li>

                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle">Màs Esp <b class="caret right"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('anesteciologos-show') }}">Anestesiólogos</a></li>
                                                    <li><a href="{{ route('angiologos-show') }}">Angiólogos</a></li>
                                                    <li><a href="{{ route('genetistas-show') }}">Genetistas</a></li>
                                                    <li><a href="{{ route('geriatras-show') }}">Geriatras</a></li>
                                                    <li><a href="{{ route('medgeneral-show') }}">Med. General</a></li>
                                                    <li><a href="{{ route('nefrologos-show') }}">Nefrólogo</a></li>
                                                    <li><a href="{{ route('neumologos-show') }}">Neumólogos</a></li>
                                                    <li><a href="{{ route('rehabilitador-show') }}">Rehabilitador</a></li>
                                                    <li><a href="{{ route('urologos-show') }}">Urólogos</a></li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="{{ route('dentistas-show') }}" class="dropdown-toggle">Dentistas <b class="caret right"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route('cdentista-show') }}">C. Dentistas</a></li>
                                                    <li><a href="{{ route('endodoncistas-show') }}">Endodoncistas</a></li>
                                                    <li><a href="{{ route('implantologia-show') }}">Implantología</a></li>
                                                    <li><a href="{{ route('odontopediatras-show') }}">Odontopediatras</a></li>
                                                    <li><a href="{{ route('ortodoncistas-show') }}">Ortodoncistas</a></li>
                                                    <li><a href="{{ route('periodoncistas-show') }}">Periodoncistas</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="{{ route('psicologos-show') }}">Psicólogos</a></li>
                                            <li><a href="{{ route('nutriologos-show') }}">Nutriólogos</a></li>
                                            <li><a href="{{ route('enfermeria-show') }}">Enfermería</a></li>


                                        </ul>
                                    </li>

                                    <li><a href="{{ route('laboratorios-show') }}">LAB. CLINICOS</a></li>
                                    <li><a href="{{ route('farmacias-show') }}">FARMACIAS Y ART.MED</a></li>





                                    <li><a href="{{ route('hospitales-show') }}">HOSPITALES</a></li>
                                    <li><a href="{{ route('contactus-show') }}">CONTACTANOS</a></li>
                                    <li><a href="{{ route('podcast') }}">PODCAST</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
    </div>
</section>










    <!--end of header area-->

<!--End of Hedaer Section-->



<!--Start of slider section-->
<section id="slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>



        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="slider_overlay">
                    <img src="{{ asset('img/banner-region.jpg') }}" alt="...">

                </div>
            </div>
            <!--End of item With Active-->
            <div class="item">
                <div class="slider_overlay">
                    <img src="{{ asset('img/banner-region2.jpg') }}" alt="...">
                    <div class="carousel-caption">
                        <div class="slider_text">

                            <a href="{{ route('quines-somos') }}" class="custom_btn">¿Quienes Somos?</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Item-->
            <div class="item">
                <div class="slider_overlay">
                    <img src="{{ asset('img/banner-region3.jpg') }}" alt="...">
                    <div class="carousel-caption">
                        <div class="slider_text">

                            <a href="{{ route('quines-somos') }}" class="custom_btn">¿Quienes Somos?</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of item-->
        </div>
        <!--End of Carousel Inner-->
    </div>
</section><br>
<!--end of slider section-->

@yield ('content')
<div class="container text-center">
    <div id="medicos">
        <div class="event_header text-center">
            <h2><strong>CONOCE NUESTRO FACEBOOK</strong></h2>
            <p>AQUÍ ENCONTRARAS NUESTRAS PUBLICACIONES Y ARTÍCULOS MÁS RECIENTES</p>
        </div><br>
        <div class="fb-page" data-href="https://www.facebook.com/RegionSaludCelaya/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/farmaherrera/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/farmaherrera/">Farmacia Herrera</a></blockquote></div>
    </div>
</div>


<!--Start of portfolio-->
<section id="portfolio" class="text-center">
    <div class="col-md-12">
        <div class="portfolio_title">
            <h2>Artículos de la Salud</h2>
            <p></p>
        </div>
    </div>
    <!--End of col-md-2-->
    <div class="colum">
        <div class="container">
            <div class="row">
                <form action="#">

                    <a href='{{ route('articulos-show') }}' class="btn btn-primary" >Ver mas Artículos</a>
                    <ul id="portfolio_menu" class="menu portfolio_custom_menu">



                        <li>

                        </li>
                        <li>

                        </li>

                    </ul>
                    <!--End of portfolio_menu-->
                </form>
                <!--End of Form-->
            </div>
            <!--End of row-->
        </div>

        <hr>
        <!--End of container-->
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12 mix der">
                    <div class="item">
                        <a href="{{ asset('articulos/art-duelo.pdf') }}" class="portfolio-popup" title="Pediatra">
                            <img src="{{ asset('img/art_duelo.jpg') }}" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 mix der">
                    <div class="item">
                        <a href="{{ asset('articulos/prevencion-diabetes.pdf') }}" class="portfolio-popup" title="Diabetes">
                            <img src="{{ asset('img/art_diabetes.jpg') }}" alt="">
                        </a>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 mix der">
                    <div class="item">
                        <a href="{{ asset('articulos/psicologo.pdf') }}" class="portfolio-popup" title="Bacterias">
                            <img src="{{ asset('img/art_psicologo.jpg') }}" alt="">
                        </a>
                    </div>
                </div>

                <!-- pendientes de poner

                <div class="col-md-4 col-sm-6 col-xs-12 mix der">
                    <div class="item">
                        <a href="{{ asset('articulos/enfermedades-autoinmunes.pdf') }}" class="portfolio-popup" title="Autoinmunes">
                            <img src="{{ asset('img/art4.png') }}" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 mix der">
                    <div class="item">
                        <a href="{{ asset('articulos/alergias.pdf') }}" class="portfolio-popup" title="Alergias">
                            <img src="{{ asset('img/art_pediatral.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                -->

                <div class="col-md-4 col-sm-6 col-xs-12 mix der">
                    <div class="item">
                        <a href="{{ asset('articulos/salud-bucal.pdf') }}" class="portfolio-popup" title="Salud-bucal">
                            <img src="{{ asset('img/art_dental.jpg') }}" alt="">
                        </a>
                    </div>
                </div>



                <!--End of col-lg-12-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </div>
    <!--End of colum-->
</section>
<!--end of portfolio-->



<!--Start of counter-->
<section id="counter">
    <div class="counter_img_overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="counter_header">
                        <h2>Logros</h2>

                    </div>
                </div>
                <!--End of col-md-12-->
            </div>
            <!--End of row-->
            <div class="row">
                <div class="col-md-3">
                    <div class="counter_item text-center">
                        <div class="sigle_counter_item">
                            <img src="{{ asset('img/doc3.png') }}" alt="">
                            <div class="counter_text">
                                <span class="counter">25</span>
                                <p>Profesionales Afiliados</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="counter_item text-center">
                        <div class="sigle_counter_item " >
                            <img src="{{ asset('img/clientes.png') }}" alt="" align="center">
                            <div class="counter_text">
                                <span class="counter">9854</span>
                                <p>Visitantes Satisfechos</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="counter_item text-center">
                        <div class="sigle_counter_item " >
                            <img src="{{ asset('img/video.png') }}" alt="" align="center">
                            <div class="counter_text">
                                <span class="counter">21</span>
                                <p>Videos Publicados</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="counter_item text-center">
                        <div class="sigle_counter_item ">
                            <img src="{{ asset('img/articulos.png') }}" alt="">
                            <div class="counter_text">
                                <span class="counter">25</span>
                                <p>Artículos Publicados</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </div>
</section>
<!--end of counter-->



<!--start of event-->
<section id="event">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="event_header text-center">
                    <h2>Entrevistas</h2>
                    <p>Consulta las Entrevistas de Nuestros Médicos.</p>
                </div>
            </div>
        </div>
        <!--End of row-->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 zero_mp">
                        <div class="event_item">
                            <div class="event_img">
                                <img src="{{ asset('img/deprecion.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 zero_mp">
                        <div class="event_item">
                            <div class="event_text text-center">
                                <a href=""><h4>¿Qué es la depresión?</h4></a>
                                <h6>Entrevista con la psiquiatra Fernanda Almanza </h6>
                                <p>Conoce la diferencia entre tristeza y depresión y mucho más sobre el tema </p>
                                <a href=" https://www.youtube.com/watch?v=J0lRUzNVzS0&t=6s" class="event_btn">Ver Entrevista</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6 zero_mp">
                        <div class="event_item">
                            <div class="event_text text-center">
                                <a href=""><h4>¿Conoces sobre la diabetes?</h4></a>
                                <h6>Entrevista con el doctor  Moisés Hinojosa</h6>
                                <p>Evita caer en esta enfermedad</p>
                                <a href="https://www.youtube.com/watch?v=vgW7A_Z9J4M&feature=youtu.be" class="event_btn">Ver Entrevista</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 zero_mp">
                        <div class="event_item">
                            <div class="event_img">
                                <img src="{{ asset('img/diabetes.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>

            <!--End of col-md-8-->
            <div class="col-md-4">
                <div class="event_news">
                    <div class="event_single_item fix">
                        <div class="event_news_img floatleft">
                            <img src="{{ asset('img/noviembre.jpg') }}" alt="">
                        </div>
                        <div class="event_news_text">
                            <a href="https://youtu.be/y6prS56uOw8"><h4>Movember- Salud del Hombre</h4></a>
                            <p>Entrevista con el Dr. Ernesto Aboytes</p>
                        </div>
                    </div>
                </div>
                <div class="event_news">
                    <div class="event_single_item fix">
                        <div class="event_news_img floatleft">
                            <img src="{{ asset('img/gingivitis.jpg') }}" alt="">
                        </div>
                        <div class="event_news_text">
                            <a href="https://www.youtube.com/watch?v=bo9Gp8lawVA&t=2s"><h4>¿Qué es la gengivitis?</h4></a>
                            <p>Entrevista con la Dra. Jessica González</p>
                        </div>
                    </div>
                </div>


                <div class="event_news">
                    <div class="event_single_item fix">
                        <div class="event_news_img floatleft">
                            <img src="{{ asset('img/region_salud.jpg') }}" alt="">
                        </div>
                        <div class="event_news_text">
                            <a href="https://www.youtube.com/channel/UCm1TnUNi6Bkm-gVRr1xMriA"><h4>Visita nuestro canal en YouTube</h4></a>
                            <p>Entrevistas con los especilistas en nuestro canal</p>
                        </div>
                    </div>
                </div>


            </div>
            <!--End of col-md-4-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!--end of event-->















<!--Start of footer-->
<section id="footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6">
                <div class="copyright">
                    <p><span><a href="{{ asset('AvisoPrivacidad/aviso_privacidad.pdf') }}">Aviso de Privacidad</a></span></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="designer">
                    <p><a href="https://www.facebook.com/victorwatsdj.riverahernandez">@victor</a></p>
                </div>
            </div>
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!--End of footer-->



<!--Scroll to top-->
<a href="#" id="back-to-top" title="Back to top">&uarr;</a>
<!--End of Scroll to top-->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
<script src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>

<!--Counter UP Waypoint-->
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<!--Counter UP-->
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>

<script>
    //for counter up
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--Isotope-->
<script src="{{ asset('js/menuresponsive.js') }}"></script>
<script src="{{ asset('js/isotope/min/scripts-min.js') }}"></script>
<script src="{{ asset('js/isotope/cells-by-row.js') }}"></script>
<script src="{{ asset('js/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/isotope/packery-mode.pkgd.min.js') }}"></script>
<script src="{{ asset('js/isotope/scripts.js') }}"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v9.0" nonce="Tz5SuZqJ"></script>



<!--Back To Top-->
<script src="{{ asset('js/backtotop.js') }}"></script>




<!--JQuery Click to Scroll down with Menu-->
<script src="{{ asset('js/jquery.localScroll.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
<!--WOW With Animation-->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!--WOW Activated-->
<script>
    new WOW().init();
</script>

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400">

</body>

