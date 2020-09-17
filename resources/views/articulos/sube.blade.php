@extends('region.comon')

@section('content')
    
    <div class="container text-center">
        <div class="page-header">
            <h1>Subir artículos</h1>
        </div>
    
    <div class="row">
        <div class="col col-lg-6">
            <form action="{{ route('articulo.guarda') }}" method="POST" enctype="multipart/form-data">
                @foreach($errors->all as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <div class="col col-lg-12">
                        <label>Nombre Artículo:</label>
                        <input type="text" name="title" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col col-lg-12">
                        <label>Imagen:</label>
                        <input type="file" name="img" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col col-lg-12">
                        <label>Archivo:</label>
                        <input type="file" name="logo" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col col-lg-12">
                        <button type="submit" class="btn btn-primary">Subir</button>
                    </div>
                </div>          
            </form>
        </div>
    </div>
        
        <p>
            <a class="btn btn-secondary" href="{{ route('pediatras-show') }}">
                <i class="fa fa-chevron-circle-left"></i>Regresar</a>
        </p>
    </div>

@stop