<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Region Salud">
    <meta name="keywords" content="region salud,cardiologo,cirujano plastico,dermatologos,endocrinologo,gastroenterologos,ginecologos,internistas,neurocirujanos,neurologos,oftalmologos,otorrinos,pediatras,psiquiatras,reumatologos,traumatologos,anestesiologos,angiologos,genetistas,gediatra,medico general,nefrologo,neumologo,rehabilitador,urologo,dentistas,ortodoncista,enfermero,psicologos,nutriologos">
    <meta name="author" content="victor">
    <title>@yield ('title', 'Region Salud')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css" rel="stylesheet" integrity="sha384-G3G7OsJCbOk1USkOY4RfeX1z27YaWrZ1YuaQ5tbuawed9IoreRDpWpTkZLXQfPm3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Kanit" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--Main Stylesheet-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstraps.css') }}">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css" rel="stylesheet" integrity="sha384-G3G7OsJCbOk1USkOY4RfeX1z27YaWrZ1YuaQ5tbuawed9IoreRDpWpTkZLXQfPm3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Kanit" rel="stylesheet">



    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="{{ asset('images/favicon/apple-touch-icon.png') }}">



</head>

<body>


        @include('region.partials.nav')

        @yield ('content')

        @include('region.partials.footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/menuresponsive.js') }}"></script>
        <script src="{{ asset('js/pinterest_grid.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
