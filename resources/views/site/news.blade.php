@extends('layouts.site')
@section('nav.news')
	class="active"
@endsection
@section('content')

	<div class="home">
		<div class="background_image" style="background-image:url('{{asset("/uploads/images/travel-hiking-app.jpg")}}')"></div>
		<div style="width: 100%; height: 100%; background-color: rgba(0,0,0,.6);"></div>

	</div>
	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Container -->
				<div class="col-lg-8">
					<div class="news_container">
@foreach($news as $n)
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="{{asset('/uploads/'.$n->images)}}" alt=""></div>
							<br>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>{!! $n->date !!}</div>

								</div>
								<div class="news_post_title"> <a href="{{route('news.view',['id'=>$n->id])}}">{!! $n->name !!}</a></div>
								<div class="news_post_category">

								</div>
								<div class="news_post_text">

								</div>
								<div class="news_post_link"> <a href="{{route('news.view',['id'=>$n->id])}}">Read more...</a></div>
							</div>
						</div>
					@endforeach
						<!-- News Post -->


						<!-- News Post -->

					</div>

					<!-- Pagination -->

				</div>

				<!-- News Sidebar -->
				<div class="col-lg-4">
					<div class="news_sidebar">

						<!-- Categories -->

						<!-- Latest News -->
						<div class="latest">

							<div class="latest_container">

								<!-- Latest Post -->

								<!-- Latest Post -->

								<!-- Latest Post -->

							</div>
						</div>

						<div class="travello">
							<div class="background_image" style="background-image:url('{{asset('/uploads/images/forbe.jpeg')}}')"></div>
							<div class="travello_content">
								<div class="travello_content_inner">
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="travello_container">
								<a href="#">
									<div class="d-flex flex-column align-items-center justify-content-end">
										<span class="travello_title">Get a 20% Discount</span>
										<span class="travello_subtitle">Buy Your Vacation Online Now</span>
									</div>
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection