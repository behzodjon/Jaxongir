@extends('layouts.site')
@section('nav.main')
    class="active"
@endsection
@section('content')



<div class="home">

        <!-- Home Slider -->
        <div class=" home_slider_container">
            <div class="fade1 owl-carousel owl-theme home_slider">
                @foreach($pages as $page)
                    <div class=" owl-item ">
                        <div class="background_image" style="background-image:url('{{asset("/uploads/".$page->images)}}')"></div>
                        <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,.3);"></div>
                        <div class="home_slider_content_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_slider_content ">
                                            <div class="home_title"><h4 class="title">{!!  $page->text !!}</h4></div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- Slide --></div>
            </div>


        </div>
    </div>
    <!-- Intro -->


    <!-- Destinations -->

    <div class="destinations" id="destinations">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle">simply amazing places</div>
                    <div class="section_title"><h2>Popular Destinations</h2></div>
                </div>
            </div>
            <div class="row destinations_row">
                <div class="col">
                    <div class="destinations_container item_grid">

                        <!-- Destination -->
                        @foreach($services as $service)
                            <div class="destination item">
                                <div class="destination_image container2">

                                    <div class="card " style="width: 350px; height: 250px;">
                                        <img class="card-img-top image2" src="{{asset("/uploads/".$service->images)}}" style="width: 100%; height: 100%;" alt="001">
                                        <div class="overlay2">{{$service->name}}</div>


                                    </div>
                                    <div>
                                        <div class="card-body ">

                                            <div class="card-text" style="height: 120px;"><p>{{$service->text}}</p></div>
                                            <br><br><br><br><br><br><br><br><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @endforeach

                    </div>
                </div>
            </div>
            <h3 class="p"><a href="/monuments">More places..</a></h3>
        </div>

    </div>

    <!-- Testimonials -->

    <div class="testimonials" id="testimonials">
        <div style=" width: 100%; height: 100%; background-color: rgba(0,0,0,.7); position: absolute;top: 0 "></div>
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset("/uploads/images/Samarkand-Walls.jpg")}}"

             data-speed="0.8"></div>

        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle">simply amazing places</div>
                    <div class="section_title"><h2>Travelling</h2></div>
                </div>
            </div>
            <div class="row testimonials_row">
                <div class="col">


                    <!-- Slide -->
                    <div class="owl-item text-center">
                        <div class="testimonial">The best time to travel to Uzbekistan is April-May and September-October. Make the most of your trip by checking out upcoming festivals and international exhibitions that are held in Uzbekistan and combine your trip with one of these events.
                        </div>
                        <div class="testimonial_author">
                            <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="test_nav">
        <ul class="d-flex flex-column align-items-end justify-content-end">
            <li><a href="#">City Breaks Clients<span>01</span></a></li>
            <li><a href="#">Cruises Clients<span>02</span></a></li>
            <li><a href="#">All Inclusive Clients<span>03</span></a></li>
        </ul>
    </div>
<br><br>
<h3 class="m-5" style="text-align: center">Welcome to Bukhara!  (promotional video)</h3>
<section class="video-area">
    <div class="container">
        <div class="row justify-content-center align-items-center flex-column">

            <a class="play-btn" href="https://mover.uz/video/embed/i1dfUqMm/">


                <img src="{{asset("/uploads/images/play-btn.png")}}" alt="">

            </a>
            <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,.5);"></div>
            <h3 class="pt-20 pb-20 text-white">Welcome to the most ancient city of Uzbekistan!</h3>
            <p class="text-white">Youtube video will appear in popover</p>
        </div>
    </div>
</section>
    <!-- News -->

    <div class="news" id="news">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="news_container">
                        <div class="section_title"><h3>Famous Uzbek Dishes</h3></div>
                        <br>
                    @foreach($food as $f)
                        <!-- News Post -->
                            <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                <div class="news_post_image"><img src="{{asset("/uploads/".$f->images)}}" alt=""></div>
                                <div class="news_post_content">
                                    <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                        <div><h3><a href="/dishes">{{$f->name}}</a></h3></div>
                                    </div>
                                    <div class="news_post_title"></div>
                                    <div class="news_post_category">

                                    </div>
                                    <div class="news_post_text">
                                        <p>{!! $f->text !!}</p>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- News Post -->

                        <!-- News Post -->


                    </div>
                </div>

                <!-- News Sidebar -->
                <div class="col-xl-4">
                    <div class="travello">
                        <div class="background_image" style="background-image:url('{{asset("/uploads/images/orig.jpeg")}}')"></div>
                        <div class="travello_content">
                            <div class="travello_content_inner">
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="travello_container">
                            <a href="#">
                                <div class="d-flex flex-column align-items-center justify-content-end">
                                    <span class="travello_title">Let's have dinner!</span>
                                    <span class="travello_subtitle">Delicious uzbek dishes!</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection