@extends('layout.header_footer')


@section('content')


				<!-- contact-benner section -->

		<div class="bg-banner">
			<img src="/uploads/{{$page_banner_image}}">
			<div class="container">
				<div class="co-header">
					<h2>
						{{$page_banner_title}}
					</h2>
					<div class="co-link">
						<ul>
							<li>
								<i class="fa-solid fa-house"></i>
								<span><a href="{{url('/')}}">home</a></span>
							</li>
							<li>
								<i class="fa-solid fa-angles-right"></i>
								<span  class="active">{{$page_banner_title}}</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<div class="bg-inner-package">
			<div class="container">
				<div class="row">

					@if($pd ==0)
					<div class="bg-service-content">
						<div class="container">
							<div class="inner-service-info" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
								
								<h2>
									{{$error}}
								</h2>
								
								<button>
									<a href="{{url('/contact')}}">contact us</a>
								</button>
							</div>
						</div>
					</div>
					@else
					
					@foreach($package_data as $pd)
					<div class="col-lg-4 col-md-6 col-12"data-aos="flip-down" data-aos-duration="1500"data-aos-easing="ease">
						 <div class="inner-package">
						 	<a href="{{url('/package_detail')}}/{{$pd->id}}">
						 		<img src="/uploads/{{$pd->image}}">
						 	</a>
							<div class="inner-package-info">
							<small>
								<i class="fa-solid fa-location-pin"></i>india
							</small>
							<h4>
								<a href="{{url('/package_detail')}}/{{$pd->id}}">{{$pd->tour_name}}</a>
							</h4>
							<blockquote>
								@foreach($tour_type_data as $ttd)
                                @if($ttd->id==$pd->tour_type_id)
                                {{$ttd->tour_name}}
                                @endif
                                @endforeach
							</blockquote>
							<p>
								{{$pd->description}}
							</p>
						
							<span>
								<i class="fa-solid fa-indian-rupee-sign"></i>
								<b>{{$pd->price}}</b>
							</span>
						</div>
					</div>
					</div>
					@endforeach

					@endif


					
					<!-- <div class="col-lg-4 col-md-6 col-12"data-aos="flip-down" data-aos-duration="1500"data-aos-easing="ease">
						 <div class="inner-package">
						 	<a href="package-detail.html">
						 		<img src="images/package2.webp">
						 	</a>
							<div class="inner-package-info">
							<small>
								<i class="fa-solid fa-location-pin"></i>india
							</small>
							<h4>
								<a href="package-detail.html">andmar tour</a>
							</h4>
							<blockquote>
								summer tour
							</blockquote>
							<p>
								Fusce hic augue velit wisi ips quibus dam pariatur, iusto.
							</p>
						
							<span>
								<i class="fa-solid fa-indian-rupee-sign"></i>
								<b>40000</b>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12"data-aos="flip-down" data-aos-duration="1500"data-aos-easing="ease">
						 <div class="inner-package">
						 	<a href="package-detail.html">
						 		<img src="images/package4.jpg">
						 	</a>
							<div class="inner-package-info">
							<small>
								<i class="fa-solid fa-location-pin"></i>india
							</small>
							<h4>
								<a href="package-detail.html">simla tour</a>
							</h4>
							<blockquote>
								winter tour
							</blockquote>
							<p>
								Fusce hic augue velit wisi ips quibus dam pariatur, iusto.
							</p>
							
							<span>
								<i class="fa-solid fa-indian-rupee-sign"></i>
								<b>25000</b>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12"data-aos="flip-down"data-aos-duration="1500"data-aos-easing="ease" >
						 <div class="inner-package">
						 	<a href="package-detail.html">
						 		<img src="images/package3.jpg">
						 	</a>
							<div class="inner-package-info">
							<small>
								<i class="fa-solid fa-location-pin"></i>india
							</small>
							<h4>
								<a href="package-detail.html">goa tour</a>
							</h4>
							<blockquote>
								summer tour
							</blockquote>
							<p>
								Fusce hic augue velit wisi ips quibus dam pariatur, iusto.
							</p>
						
							<span>
								<i class="fa-solid fa-indian-rupee-sign"></i>
								<b>20000</b>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12"data-aos="flip-down" data-aos-duration="1500"data-aos-easing="ease">
						 <div class="inner-package">
						 	<a href="package-detail.html">
						 		<img src="images/gallary7.webp">
						 	</a>
							<div class="inner-package-info">
							<small>
								<i class="fa-solid fa-location-pin"></i>india
							</small>
							<h4>
								<a href="package-detail.html">rishikesh tour</a>
							</h4>
							<blockquote>
								adventure tour
							</blockquote>
							<p>
								Fusce hic augue velit wisi ips quibus dam pariatur, iusto.
							</p>
						
							<span>
								<i class="fa-solid fa-indian-rupee-sign"></i>
								<b>28000</b>
							</span>
						</div>
					</div>
				</div> 
				<div class="col-lg-4 col-md-6 col-12"data-aos="flip-down" data-aos-duration="1500"data-aos-easing="ease">
						 <div class="inner-package">
						 	<a href="package-detail.html">
						 		<img src="images/gallary5.webp">
						 	</a>
							<div class="inner-package-info">
							<small>
								<i class="fa-solid fa-location-pin"></i>india
							</small>
							<h4>
								<a href="package-detail.html">kerala tour</a>
							</h4>
							<blockquote>
								family tour
							</blockquote>
							<p>
								Fusce hic augue velit wisi ips quibus dam pariatur, iusto.
							</p>
							
							<span>
								<i class="fa-solid fa-indian-rupee-sign"></i>
								<b>30000</b>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12"data-aos="flip-down" data-aos-duration="1500"data-aos-easing="ease">
						 <div class="inner-package">
						 	<a href="package-detail.html">
						 		<img src="images/gallary6.webp">
						 	</a>
							<div class="inner-package-info">
							<small>
								<i class="fa-solid fa-location-pin"></i>india
							</small>
							<h4>
								<a href="package-detail.html">ladakh tour</a>
							</h4>
							<blockquote>
								adventure tour
							</blockquote>
							<p>
								Fusce hic augue velit wisi ips quibus dam pariatur, iusto.
							</p>
						
							<span>
								<i class="fa-solid fa-indian-rupee-sign"></i>
								<b>22000</b>
							</span>
						</div>
					</div>
				</div>
						<div class="col-lg-4 col-md-6 col-12"data-aos="flip-down" data-aos-duration="1500"data-aos-easing="ease">
						 <div class="inner-package">
						 	<a href="package-detail.html">
						 		<img src="images/package6.jpg">
						 	</a>
							<div class="inner-package-info">
							<small>
								<i class="fa-solid fa-location-pin"></i>india
							</small>
							<h4>
								<a href="package-detail.html">agra tour</a>
							</h4>
							<blockquote>
								family tour
							</blockquote>
							<p>
								Fusce hic augue velit wisi ips quibus dam pariatur, iusto.
							</p>
						
							<span>
								<i class="fa-solid fa-indian-rupee-sign"></i>
								<b>15000</b>
							</span>
						</div>
					</div>
				</div>
						<div class="col-lg-4 col-md-6 col-12 "data-aos="flip-down" data-aos-duration="1500"data-aos-easing="ease">
						 <div class="inner-package">
						 	<a href="package-detail.html">
						 		<img src="images/package5.jpg">
						 	</a>
							<div class="inner-package-info">
							<small>
								<i class="fa-solid fa-location-pin"></i>india
							</small>
							<h4>
								<a href="package-detail.html">kutch tour</a>
							</h4>
							<blockquote>
								winter tour
							</blockquote>
							<p>
								Fusce hic augue velit wisi ips quibus dam pariatur, iusto.
							</p>
						
							<span>
								<i class="fa-solid fa-indian-rupee-sign"></i>
								<b>11000</b>
							</span>
						</div>
					</div>
				</div> -->
				</div>
			</div>
		</div>

		@if($pd !='0')

		<div class="container">
			<div class="pagination-main">
				{{ $package_data->links('vendor.pagination.custom') }}
				<!-- <ul class="pagination">
				<li class="page-item"><a class="page-link" href="#">Previous</a>
				</li>
				<li class="page-item active"><a class="page-link" href="#">1</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">2</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">3</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">Next</a>
				</li>
				</ul> -->
				</div>
		</div>
		@endif




@endsection