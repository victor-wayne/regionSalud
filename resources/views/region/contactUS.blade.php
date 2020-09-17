@extends('region.comon')

@section('content')

    <!--Start of contact-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="colmd-12">
                    <div class="contact_area text-center">
                        <h3>Contáctanos</h3>
                        <p>Si estás interesado en nuestros servicios, mándanos un mensaje.</p>
                    </div>
                    <p align="center">
                        <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=524611451417&text=(W) Necesito  información sobre Región Salud. ¿Me pueden ayudar? ">
                            <i class="fa fa-whatsapp" style="font-size: 20px"></i> Contacto Región</a>
                    </p>

                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <div class="col-md-6">
                    <div class="office">
                        <div class="title">
                            <h5>Informacion</h5>
                        </div>
                        <div class="office_location">

                            <div class="phone">
                                <i class="fa fa-phone"><span>461-1451417</span></i>
                            </div>
                            <div class="email">
                                <i class="fa fa-envelope"><span>contacto@regionsalud.com.mx</span></i>
                            </div>


                            <div class="container">
                                <div class="row">
                                    <div class="col col-md-6 col-md-offset-3"   >
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><h3 class="panel-title">Forumulario de contacto</h3></div>
                                            <div class="panel-body">

                                                {!! Form::open(['route' => 'contactus.store', 'method' => 'post']) !!}
                                                <div class="form-group">
                                                    {!! Form::label('email', 'E-Mail') !!}
                                                    {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('body', 'Asunto') !!}
                                                    {!! Form::text('body', null, ['class' => 'form-control' ]) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('message', 'Mensaje') !!}
                                                    {!! Form::textarea('message', null, ['class' => 'form-control' ]) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <!--End of col-md-6-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--End of contact-->


@stop