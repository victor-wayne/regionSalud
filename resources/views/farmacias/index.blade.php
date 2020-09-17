@extends('region.comon')

@section('content')


<!--Start of slider section-->
<section id="slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">


        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="slider_overlay">
                    <img src="{{ asset('img/banner/banner-farmacias.jpg') }}" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
            <!--End of item With Active-->

        </div>
    </div>
</section><hr>


<div class="container text-center">
    <div id="medicos">
        @foreach($farmacias as $farmacia)
            <div class="medic white-panel">
                <h4><strong>{{ $farmacia->name }}</strong></h4>
                <img src="{{ asset('farm/'.$farmacia->img) }}" width="200"><hr>

                <div class="medic-info panel">

                    <p>
                        <i class="fa fa-map-marker" style="font-size:24px"></i><strong> Ubicación</strong>
                    <h4><span class="label label-warning">{{ $farmacia->address  }}</span></h4>
                    <i class="fa fa-mobile" style="font-size:24px"></i><strong> Teléfono</strong>
                    <h4><span class="label label-success"><a href="tel:{{ $farmacia->telefono }}" style="color: white;">{{ $farmacia->telefono }}</a></span></h4>
                    </p>
                    <br>

                    <p>

                        <a class="btn btn-primary" href="{{ route('farma-detail', $farmacia->slug) }}">
                            <i class="fa fa-chevron-circle-right"></i> Ver Perfil</a>
                    </p>
                </div>
            </div>
        @endforeach

    </div><hr>
</div>
@stop




































