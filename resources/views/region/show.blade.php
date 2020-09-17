@extends('region.comon')

@section('content')


    <!--Start of slider section-->
<section id="slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">



        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="slider_overlay">
                    <img src="{{ asset('img/aboutus.png') }}" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>

        </div>
        <!--End of Carousel Inner-->
    </div>
</section>
<!--end of slider section-->

    <!-- About Start -->
        <section id="about" class="about-section">
            <div class="row">

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="img-responsive" src="{{ asset('img/nosotros1.png') }}" draggable="false" alt="">
                </div>

                <br><br><br><br>


                <h2 align="center">Misión</h2><br>
                 <div class="col-md-6">
                     <div class="about-block">
                         <style type="text/css">

                            p {
                            display: block;
                            margin-top: 1em;
                            margin-bottom: 1em;
                            margin-left: 0;
                            margin-right: 0;
                            font-size: 20px;

                            }

                            ul {
                                list-style-image: url('doc.png');
                                font-size: 20px;
                            }

                        </style>



                        <p align="justify"> "Somos una empresa digital enfocada a ayudar a las personas a encontrar los servicios
                            necesarios para cuidar de su salud, así como ser un apoyo para los profesionales de la salud y empresas
                            del sector para fortalecer y matener las relaciones con sus clientes."</p>
                    </div>

                 </div>
            </div>
        </section>


        <section id="about" class="about-section">
            <div class="row">



                <div class="col-md-6">
                    <br>
                    <br>
                    <br>
                    <h2 align="center">Servicios</h2>
                    <br>
                    <div class="about-block">

                        <ul>
                             <li><i class="fa fa-medkit" style="font-size:20px"></i> Si necesitas encontrar un médico de alguna especialidad.</li>
                             <li><i class="fa fa-medkit" style="font-size:20px"></i> Si necesitas ubicar un hospital cercano a ti.</li>
                             <li><i class="fa fa-medkit" style="font-size:20px"></i> Si necesitas saber en qué laboratorio realizarte unos análisis.</li>
                             <li><i class="fa fa-medkit" style="font-size:20px"></i> La información de salud de tu Ciudad en un mismo lugar.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img class="img-responsive" src="{{ asset('img/nosotros.png') }}" draggable="false" alt="">
                </div>

            </div>
        </section>


    @stop

