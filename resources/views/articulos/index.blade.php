@extends('region.comon')

@section('content')



<!--Start of slider section-->
<section id="slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">




        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="slider_overlay">
                    <img src="{{ asset('img/banner/banner-articulos.png') }}" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>

        </div>
        <!--End of Carousel Inner-->
    </div>
</section>
<!--end of slider section-->

@stop































