@extends('layouts.site')
@section('nav.services')
    class="active"
@endsection
@section('content')


        <div class="home">
            <div class="background_image"
                 style="background-image:url('{{asset('/uploads/images/hyatt5.jpg')}}')"></div>

        </div>



        <div class="destinations" id="destinations">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_subtitle">simply amazing places</div>
                        <div class="section_title"><h2>Luxury hotels</h2></div>
                    </div>
                </div>

                <div class="row destinations_row">
                    <div class="col">
                        <div class="destinations_container item_grid">
                        @foreach($hotels as $h)
                            <!-- Destination -->
                                <div class="destination item">
                                    <div class="destination_image">
                                        <div class="card " style="width:350px;height:300px;">

                                            <img style="height: 300px" src="{{asset('/uploads/'.$h->images)}}" alt=""
                                                 class="card-img-top">

                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="card-title">
                                            <a href="{{route('hotel.view',['id'=>$h->id])}}">{!! $h->name !!}</a>
                                        </div>
                                        <div>{{$h->starsWidget()}}</div>
                                        <div>{!! $h->address !!}</div>
                                        <div><a href="{{route('hotel.view',['id'=>$h->id])}}">read more</a></div>

                                                                          </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
@endsection