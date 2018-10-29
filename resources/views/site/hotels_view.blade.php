@extends('layouts.site')


@section('content')

    <div class="home">
        <div class="background_image" style="background-image:url('{{asset("/uploads/".$hotels->images)}}')"></div>
        <div style="width: 100%; height: 100%; background-color: rgba(0,0,0,.3);"></div>
    </div>

    <!-- Search -->



    <!-- News -->

    <div class="news">
        <div class="container">
            <div class="row">

                <!-- News Container -->
                <div class="col-lg-8">
                    <div class="news_container">

                        <!-- News Post -->

                        <div class="news_post">
                            <div class="news_post_image"><img src="images/news_4.jpg" alt=""></div>
                            <div class="news_post_content">
                                <div class="news_post_date d-flex flex-row align-items-end justify-content-start">

                                </div>
                                <div class="news_post_title"><a href="#">{!! $hotels->name !!}</a></div>
                                <div class="news_post_category">
                                    <ul>
                                        <li><a href="#">lifestyle & travel</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>{!! $hotels->text !!}</p>
                                </div>

                            </div>
                        </div>



                        <!-- News Post -->


                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li class="active"><a href="#">1.</a></li>
                            <li><a href="#">2.</a></li>
                            <li><a href="#">3.</a></li>
                            <li><a href="#">4.</a></li>
                            <li><a href="#">5.</a></li>
                        </ul>
                    </div>
                </div>

                <!-- News Sidebar -->
                <div class="col-lg-4">
                    <div class="news_sidebar">

                        <!-- Categories -->

                        <!-- Latest News -->
                        <div class="latest">
                            <div class="sidebar_title">You want others?</div>
                            <div class="latest_container">


                                <!-- Latest Post -->

                                <!-- Latest Post -->
                                @foreach($random as $hotels)
                                <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_post_image"><img src="{{asset('/uploads/'.$hotels->images)}}" alt=""></div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
                                            <a href="{{route('hotel.view',['id'=>$hotels->id])}}">{!! $hotels->name !!}</a>
                                        </div>
                                        <div class="latest_post_title"></div>
                                                   <div class="latest_post_text"><p>{{$hotels->starsWidget()}}</p></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection