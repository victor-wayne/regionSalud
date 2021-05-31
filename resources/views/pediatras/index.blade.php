@extends('region.comon')

@section('content')


<!--Start of slider section-->
<section id="slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>

        </ol>



        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="slider_overlay">
                    <img src="{{ asset('img/banner/pediatras.jpg') }}" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
            <!--End of item With Active-->
            <div class="item">
                <div class="slider_overlay">
                    <img src="{{ asset('img/banner/pediatras_2.jpg') }}" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
        </div>
        <!--End of Carousel Inner-->
    </div>

<hr>



    <div class="container text-center">
    <div id="medicos">
        @foreach($medicos as $medico)
            <div class="medic white-panel">
                <h4><strong>{{ $medico->name }}</strong></h4>
                <h4><strong>{{ $medico->last_name }}</strong></h4>
                <img src="{{ asset('medicos/'.$medico->img)  }}" width="200"><hr>

                <div class="medic-info panel">

                    <p>
                        <i class="fa fa-map-marker" style="font-size:24px"></i><strong> Ubicación</strong>
                    <h4><span class="label label-warning">{{ $medico->address  }}</span></h4>
                    <i class="fa fa-mobile" style="font-size:24px"></i><strong> Teléfono</strong>
                    <h4><span class="label label-success"><a href="tel:{{ $medico->telefono }}" style="color: white;">{{ $medico->telefono }}</a></span></h4>
                    </p><br>

                    <p>

                        <a class="btn btn-primary" href="{{ route('medic-detail', $medico->slug) }}">
                            <i class="fa fa-chevron-circle-right"></i> Ver Perfil</a>
                    </p>
                </div>
            </div>
        @endforeach

    </div><hr>
</div>

<!-- aqui va la descripcion del area -->
<section id="about" class="about-section">
    <div class="row">
        <div class="col-sm-4" style="background-color:white;"></div>
        <div class="col-sm-4">
            @foreach($areas as $area)
                <h2 align="center"> {{ $area->area }}</h2>
                <br>
                <div class="about-block">

                    <strong><p align="justify">
                            {{ $area->description }}
                        </p></strong>
                </div>
        </div>
        @endforeach

    </div>
</section><hr>




@stop
