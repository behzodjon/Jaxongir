@extends('layouts.site')
@section('nav.dishes')
    class="active"
@endsection
@section('content')
    <!-- Home -->

    <div class="home">
        <div class="background_image"
             style="background-image:url('{{asset('/uploads/images/dasturxon4.jpg')}}')"></div>
        <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,.4);"></div>

    </div>




    <!-- Destinations -->

    <div class="destinations" id="destinations">
        <div class="container">
            <div class="row">

                <div class="col text-center">

                    <div class="section_title"><h2 class="title">National dishes</h2></div>
                </div>
            </div>

            <div class="row destinations_row">
                <div class="col">
                    <div class="destinations_container item_grid">
                        @foreach( $dishes as $d)
                            <div class="destination item">
                                <div class="destination_image animate-box">


                                            <div class="single-gallery-image"
                                                 style="background: url('{{asset('/uploads/'.$d->images)}}');"></div>

                                    <div class="destination_title"><a class="img-pop-up" href="{{asset('/uploads/'.$d->images)}}">{!! $d->name !!}</a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection