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



        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="slider_overlay">
                    <img src="{{ asset('img/banner/lab.jpg') }}" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
            <!--End of item With Active-->
            <div class="item">
                <div class="slider_overlay">
                    <img src="{{ asset('img/banner/lab_2.jpg') }}" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
        </div>
    </div>


<hr>

<div class="container text-center">
    <div id="medicos">
        @foreach($laboratorios as $laboratorio)
            <div class="medic white-panel">
                <h4><strong>{{ $laboratorio->name }}</strong></h4>
                <img src="{{ asset('laboratorio/'.$laboratorio->img) }}" width="200"><hr>

                <div class="medic-info panel">

                    <p>
                        <i class="fa fa-map-marker" style="font-size:24px"></i><strong> Ubicación</strong>
                    <h4><span class="label label-warning">{{ $laboratorio->address  }}</span></h4>
                    <i class="fa fa-mobile" style="font-size:24px"></i><strong> Teléfono</strong>
                    <h4><span class="label label-success"><a href="tel:{{ $laboratorio->telefono }}" style="color: white;">{{ $laboratorio->telefono }}</a></span></h4>
                    </p>
                    <br>

                    <p>

                        <a class="btn btn-primary" href="{{ route('laboratorio-detail', $laboratorio->slug) }}">
                            <i class="fa fa-chevron-circle-right"></i> Ver Perfil</a>
                    </p>
                </div>
            </div>
        @endforeach

    </div><hr>
</div>


@stop
