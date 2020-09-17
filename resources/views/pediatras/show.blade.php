@extends('region.comon')

@section('content')
    <style type="text/css">

        .stars-outer {
            display: inline-block;
            position: relative;
            font-family: FontAwesome;
            color: #ffff33;
            font-size: 2em;
        }

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
                    <iframe class="col-md-pull-12" width="100%" height="315" src="https://www.youtube.com/embed/{{ $medicos->video }}" frameborder="0" allow="autoplay; encrypted-media" ></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="doctor-block">

                    <h3>{{ $medicos->name }} {{ $medicos->last_name }}</h3>
                    <div class="row">
                        <div class="col-9 stars-outer">
                            <input type="hidden" id="hiCalifPromedio" value="{{ $caliPromedio }}"/>
                            @if($caliPromedio >= 1)
                                <span><i class="far fa-star"></i></span>
                            @elseif($caliPromedio > 0.4)
                                <span><i class="far fa-star-half-o"></i></span>
                            @else
                                <span><i class="far fa-star-o"></i></span>
                            @endif

                            @if($caliPromedio >= 2)
                                <span><i class="far fa-star"></i></span>
                            @elseif($caliPromedio > 1.4)
                                <span><i class="far fa-star-half-o"></i></span>
                            @else
                                <span><i class="far fa-star-o"></i></span>
                            @endif                    

                            @if($caliPromedio >= 3)
                            	<span><i class="far fa-star"></i></span>
                            @elseif($caliPromedio > 2.4)
                            	<span><i class="far fa-star-half-o"></i></span>
                        	@else
                        		<span><i class="far fa-star-o"></i></span>
                        	@endif 

                        	@if($caliPromedio >= 4)
                        		<span><i class="far fa-star"></i></span>
                    		@elseif($caliPromedio > 3.4)
                    			<span><i class="far fa-star-half-o"></i></span>
                			@else
                				<span><i class="far fa-star-o"></i></span>
            				@endif

            				@if($caliPromedio == 5)
            					<span><i class="far fa-star"></i></span>
            				@elseif($caliPromedio > 4.4)
            					<span><i class="far fa-star-half-o"></i></span>
        					@else
        						<span><i class="far fa-star-o"></i></span>
    						@endif
                        </div>
                        <div class="col-3">
                        	{{ $caliPromedio }} / 5
                        </div>
                    </div>
                    <hr>
                    <div class="doctor-info panel">
                        <br>

                        <p><strong>{{ $medicos->description }}</strong></p>

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

                        <i class="fa fa-caret-square-o-down" style="font-size:20px"></i><strong> Consultorio(s):</strong>
                        <p>
                            @foreach($var_consultorios as $var_consultorio)
                                <li align="center">
                                    {{ trim($var_consultorio). " " }}
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
                        <span class="fa fa-envelope" style="font-size:15px"></span><strong> E-mail:</strong><p> {{ $medicos->email }}</p>
                                    <span class="fa fa-laptop" style="font-size:20px"></span><strong> Sitio Web</strong>
                                    <p><strong> <a href="{{ $medicos->web }}">{{ $medicos->web }}</a></strong></p>
                    </div>

                    <h4>Redes Sociales</h4>


                    <a href="{{ $medicos->face }}" class="fa fa-facebook-square" style="font-size:36px"></a>
                    <a href="{{ $medicos->twi }}" class="fa fa-twitter" style="font-size:36px"></a>
                    <a href="{{ $medicos->insta }}" class="fa fa-instagram" style="font-size:36px"></a>


                </div>
            </div>

        </div><hr>
        <p>
            <a class="btn btn-primary" href="{{ route('home') }}">
                <i class="fa fa-chevron-circle-left"></i>Regresar</a>
        </p><hr>

        @foreach($comments as $comment)
            <div class="well well bs-component">
                <div class="content">
                    {!! $comment->content !!}
                </div>
            </div>
        @endforeach

        <h3> Seccion de Comentarios y Calificaciones</h3>

        
        <div class="row">
            <div class="col col-lg-9">
                <div id="wellCom" class="well well bs-component">
                    <form class="form-horizontal" method="post" action="/comment">
                        @foreach($errors->all as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach

                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif

                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <input type="hidden" name="post_id" value="{!! $medicos->id !!}">

                        <fieldset>
                            <legend>Comparte tu opinion</legend>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12 ">

                                    <button type="submit" class="btn btn-primary">Publicar</button>
                                </div>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>
            <div class="col col-lg-3">
                <div id="wellCal" class="well well bs-component">
                    <form class="form-horizontal" method="post" action="/califica">
                        @foreach($errors->all as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach

                        @if(session('statusCal'))
                            <div class="alert alert-success">
                                {{ session('statusCal') }}
                            </div>
                        @endif

                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <input type="hidden" name="post_id" value="{!! $medicos->id !!}">
                        <input type="hidden" id="hiCalificacion" name="calificacion" value="0">

                        <fieldset>
                            <legend>Asigna una calificación</legend>
                            <div class=" form-group">
                                <div class="col-lg-12">
                                    <div class="stars-outer">
                                        <span onmouseover="estrellar(1);" onclick="setStar(1);" onmouseleave="limpiarStar();"><i id="s1" class="far fa-star-o"></i></span>
                                        <span onmouseover="estrellar(2);" onclick="setStar(2);" onmouseleave="limpiarStar();"><i id="s2" class="far fa-star-o"></i></span>
                                        <span onmouseover="estrellar(3);" onclick="setStar(3);" onmouseleave="limpiarStar();"><i id="s3" class="far fa-star-o"></i></span>
                                        <span onmouseover="estrellar(4);" onclick="setStar(4);" onmouseleave="limpiarStar();"><i id="s4" class="far fa-star-o"></i></span>
                                        <span onmouseover="estrellar(5);" onclick="setStar(5);" onmouseleave="limpiarStar();"><i id="s5" class="far fa-star-o"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Calificar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#wellCal").css('height', $("#wellCom").css('height'));
        });

        function estrellar(nume) {
            var i = 1;
            for (; i <= nume; i++) {
                $("#s" + i).removeClass('fa-star-o').addClass('fa-star');
            }
        }

        function limpiarStar() {
            var i = 1;
            if ($("#hiCalificacion").val() > 0) {
                i = parseInt($("#hiCalificacion").val()) + 1;
                for (; i <= 5; i++) {
                    $("#s" + i).removeClass('fa-star').addClass('fa-star-o');
                }
            } else {
                for (; i <= 5; i++) {
                    $("#s" + i).removeClass('fa-star').addClass('fa-star-o');
                }
            }
        }

        function setStar(num) {
            var i = 1;
            for (; i <= num; i++) {
                $("#s" + i).removeClass('fa-star-o').addClass('fa-star');
            }
            $("#hiCalificacion").val(num);
        }
    </script>

@stop
