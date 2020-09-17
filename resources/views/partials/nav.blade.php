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
                            <p>461-1451417</p>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-4">
                        <div class="social_icon text-right">
                            <a href="https://www.facebook.com/RegionSaludCelaya/"><i class="fa fa-facebook" style="font-size:20px"></i></a>
                            <a href="https://twitter.com/salud_region?lang=es"><i class="fa fa-twitter"></i></a>

                            <a href="https://www.youtube.com/channel/UCm1TnUNi6Bkm-gVRr1xMriA"><i class="fa fa-youtube"></i></a>
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

            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="menuBtn" class="navbar-toggle" onclick="actionBoton();">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Región Salud</a>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">PROFESIONALES SALUD<b class="caret"></b></a>
                                <ul class="dropdown-menu">

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">Médicos <b class="caret right"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('cardiologos-show') }}">Cardiólogos</a></li>
                                            <li><a href="{{ route('cirujanos-show') }}">C. Plásticos</a></li>
                                            <li><a href="{{ route('dermatologia-show') }}">Dermatólogos</a></li>
                                            <li><a href="{{ route('endocrinologos-show') }}">Endocrinólogos</a></li>
                                            <li><a href="{{ route('gastroenterologos-show') }}">Gastroenterólogos</a></li>
                                            <li><a href="{{ route('ginecologos-show') }}">Ginecólogos</a></li>
                                            <li><a href="{{ route('internistas-show') }}">Internistas</a></li>
                                            <li><a href="{{ route('neurologos-show') }}">Neurólogos</a></li>
                                            <li><a href="{{ route('oftalmologos-show') }}">Oftalmólogos</a></li>
                                            <li><a href="{{ route('otorrinos-show') }}">Otorrino</a></li>
                                            <li><a href="{{ route('pediatras-show') }}">Pediatras</a></li>
                                            <li><a href="{{ route('psiquiatras-show') }}">Psiquiatras</a></li>
                                            <li><a href="{{ route('traumatologos-show') }}">Traumatólogos</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">Màs Esp <b class="caret right"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('angiologos-show') }}">Angiólogos</a></li>
                                            <li><a href="{{ route('genetistas-show') }}">Genetista</a></li>
                                            <li><a href="{{ route('medgeneral-show') }}">Med. General</a></li>
                                            <li><a href="{{ route('nefrologos-show') }}">Nefrólogo</a></li>
                                            <li><a href="{{ route('urologos-show') }}">Urólogos</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="{{ route('dentistas-show') }}" class="dropdown-toggle">Dentistas <b class="caret right"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('cdentista-show') }}">C. Dentista</a></li>
                                            <li><a href="{{ route('endodoncistas-show') }}">Endodoncistas</a></li>
                                            <li><a href="{{ route('implantologia-show') }}">Implantología</a></li>
                                            <li><a href="{{ route('odontopediatras-show') }}">Odontopediatras</a></li>
                                            <li><a href="{{ route('ortodoncistas-show') }}">Ortodoncista</a></li>
                                            <li><a href="{{ route('periodoncistas-show') }}">Periodoncistas</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="{{ route('psicologos-show') }}">Psicólogos</a></li>
                                    <li><a href="{{ route('nutriologos-show') }}">Nutriólogos</a></li>
                                    <li><a href="{{ route('enfermeria-show') }}">Enfermería</a></li>


                                </ul>
                            </li>

                            <li><a href="{{ route('laboratorios-show') }}">LAB. CLINICOS</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">FARMACIAS Y ART. MED <b class="caret right"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('far') }}">Farmacia Herrera</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ route('hospitales-show') }}">HOSPITALES</a></li>
                            <li><a href="{{ route('contactus-show') }}">CONTACTANOS</a></li>
                            <li><a href="#">ARTICULOS</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>