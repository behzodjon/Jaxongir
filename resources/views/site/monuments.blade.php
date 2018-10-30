@extends('layouts.site')
@section('nav.monuments')
    class="active"
@endsection
@section('content')

    <div class="home">
        <div class="background_image"
             style="background-image:url('{{asset('/uploads/images/tilla.jpg')}}')"></div>
        <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,.4);"></div>

    </div>



    <div class="destinations" id="destinations">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle">simply amazing places</div>
                    <div class="section_title"><h2>Historical Monuments</h2></div>
                </div>
            </div>

            <div class="row destinations_row">
                <div class="col">
                    <div class="destinations_container item_grid">
                    @foreach($monuments as $h)
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
                                        <a href="{{route('monument.view',['id'=>$h->id])}}">{!! $h->name !!}</a>
                                    </div>


                                    <div><a href="{{route('monument.view',['id'=>$h->id])}}">read more</a></div>

                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
            <h3 class="m-5" style="text-align: center">Welcome to Shakhrisabz!  (promotional video)</h3>
            <section class="video-area1" style="background-image: url('{{asset('/uploads/images/shaah.jpg')}}');background-size:cover;padding:200px 0px;text-align:center">
                <div class="container">
                    <div class="row justify-content-center align-items-center flex-column">

                        <a class="play-btn" href="https://mover.uz/video/embed/hVj7qnUm/">


                            <img src="{{asset("/uploads/images/play-btn.png")}}" alt="">

                        </a>
                        <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,.5);"></div>
                        <h3 class="pt-20 pb-20 text-white">Welcome to the most ancient city of Uzbekistan!</h3>
                        <p class="text-white">Youtube video will appear in popover</p>
                    </div>
                </div>
            </section>

        </div>

    </div>


    @endsection