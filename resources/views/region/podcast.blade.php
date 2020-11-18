@extends('region.comon')

@section('content')

    <!--Start of slider section-->
    <section id="slider">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">




            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="slider_overlay">
                        <img src="{{ asset('img/banner/banner-podcast.jpeg') }}" alt="...">

                    </div>
                </div>
                <!--End of item With Active-->

            </div>
        </div>
    </section>

    <iframe src="https://open.spotify.com/embed-podcast/episode/5vKyerNzNKvmwbEQCd5ji7" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
<iframe src="https://open.spotify.com/embed-podcast/show/4lUHGYvQOFXwxVkNnisbr3" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>



@stop