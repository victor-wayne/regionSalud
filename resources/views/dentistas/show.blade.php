@extends('region.comon')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1>Mi Perfil</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="doctor-block">
                    <iframe width="530" height="450" src="https://www.youtube.com/embed/{{ $medicos->video }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="doctor-block">

                    <h3>{{ $medicos->name }}</h3>
                    <h3>{{ $medicos->last_name }}</h3><hr>
                    <div class="doctor-info panel">
                        <br>
                        <p>{{ $medicos->description }}</p>
                        <p>{{ $medicos->extract }}</p>
                        <b>Consultorio</b><br><br>


                        <i class="fa fa-mobile" style="font-size:20px"></i> <strong> Teléfono:</strong><p> {{ $medicos->telefono }}</p>
                        <i class="fa fa-map-marker" style="font-size:20px"></i><strong> Dirección:</strong><p>{{ $medicos->address }}</p>

                        <span class="glyphicon glyphicon-equalizer" style="font-size:15px"></span><strong> Ciudad:</strong><p> {{ $medicos->ciudad }}</p>
                    </div>

                    <h4>Redes Sociales</h4>


                    <a href="{{ $medicos->face }}" class="fa fa-facebook-square" style="font-size:36px"></a>
                    <a href="#" class="fa fa-twitter" style="font-size:36px"></a>
                    <a href="#" class="fa fa-instagram" style="font-size:36px"></a>




                </div>
            </div>

        </div><hr>
        <p>
            <a class="btn btn-primary" href="{{ route('pediatras-show') }}">
                <i class="fa fa-chevron-circle-left"></i>Regresar</a>
        </p><hr>

        @foreach($comments as $comment)
            <div class="well well bs-component">
                <div class="content">
                    {!! $comment->content !!}
                </div>
            </div>
        @endforeach

        <h3> Seccion de Comentarios</h3>

        <div class="well well bs-component">
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

@stop