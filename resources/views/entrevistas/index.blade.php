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
                    <img src="{{ asset('img/banner/banner-videos.png') }}" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
            <!--End of item With Active-->
            <div class="item">
                <div class="slider_overlay">
                    <img src="{{ asset('img/banner/banner-videos2.png') }}" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end of slider section-->


@stop



































