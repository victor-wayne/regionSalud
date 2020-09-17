@extends('region.comon')

@section('content')

    <style type="text/css">


        li {
            display: block;
        }


    </style>

    <div class="container text-center">
        <div class="page-header">
            <h1>Mi Perfil</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="doctor-block">
                    <iframe width="530" height="450" src="https://www.youtube.com/embed/{{ $laboratorios->video }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="doctor-block">

                    <h3>{{ $laboratorios->name }}</h3><hr>

                    <div class="doctor-info panel">
                        <br>
                        <p><strong>{{ $laboratorios->description }}</strong></p>

                        @foreach($parts as $part)
                            <li align="center">
                                {{ trim($part). " " }}
                            </li>
                        @endforeach

                        <b>Donde Contactarme</b><br>
                        <i class="fa fa-mobile" style="font-size:20px"></i> <strong> Teléfono(s):</strong>

                        <p>

                            @foreach($var_tels as $var_tel)
                                <a href="tel: {{ trim($var_tel). " " }} ">

                                    <li align="center" ><i class="fa fa-phone-square" style="font-size:15px" ></i>
                                        {{ trim($var_tel). " " }}
                                    </li>
                                </a>
                            @endforeach
                        </p>

                        <i class="fa fa-map-marker" style="font-size:20px"></i><strong> Dirección:</strong>
                        <p>

                        @foreach($var_address_secc as $address_sec)
                            <li align="center">
                                {{ trim($address_sec). " " }}
                            </li>
                            @endforeach

                            </p>

                            <i class="fa fa-caret-square-o-down" style="font-size:20px"></i><strong> Horario(s) Atención:</strong>
                            <p>
                            @foreach($var_horarios as $var_horarios)
                                <li align="center">
                                    {{ trim($var_horarios). " " }}
                                </li>
                                @endforeach

                                </p>

                                <span class="glyphicon glyphicon-equalizer" style="font-size:15px"></span><strong> Ciudad:</strong>
                                <p>
                                @foreach($var_ciudades as $var_ciudad)
                                    <li align="center">
                                        {{ trim($var_ciudad). " " }}
                                    </li>
                                    @endforeach
                                    </p>

                                    <span class="fa fa-envelope" style="font-size:15px"></span><strong> E-mail:</strong><p> {{ $laboratorios->email }}</p>
                                    <span class="fa fa-laptop" style="font-size:20px"></span><strong> Sitio Web</strong>
                                    <p><strong> <a href="{{ $laboratorios->web }}">{{ $laboratorios->web }}</a></strong></p>
                    </div>

                    <h4>Redes Sociales</h4>


                    <a href="{{ $laboratorios->face }}" class="fa fa-facebook-square" style="font-size:36px"></a>
                    <a href="{{ $laboratorios->twi }}" class="fa fa-twitter" style="font-size:36px"></a>
                    <a href="{{ $laboratorios->insta }}" class="fa fa-instagram" style="font-size:36px"></a>




                </div>
            </div>

        </div><hr>
        <p>
            <a class="btn btn-primary" href="{{ route('laboratorios-show') }}">
                <i class="fa fa-chevron-circle-left"></i>Regresar</a>
        </p><hr>
    </div>

@stop
