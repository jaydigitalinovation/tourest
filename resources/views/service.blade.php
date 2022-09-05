@extends('layout.header_footer')


@section('content')


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



	<div class="bg-service-page">
		<div class="container">
			<div class="row">
				@foreach($service_data as $sd)
				<div class="col-lg-4 col-md-6 col-12"data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
					<div class="service-icon">
						<div class="src-image">
							<img src="/uploads/{{$sd->image}}">
						</div>
						<div class="src">
						<div class="service-icn1">
							{!!$sd->icon!!}
						</div>
						<h4>
							{{$sd->title}}
						</h4>
						<p>
							{{$sd->description}}
						</p>
					</div>
				</div>
				</div>
				@endforeach
					<!-- <div class="col-lg-4 col-md-6 col-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
					<div class="service-icon">
						<div class="src-image">
							<img src="images/service2.jpg">
						</div>
						<div class="src">
						<div class="service-icn1">
							<i class="fa-solid fa-hotel"></i>
						</div>
						<h4>
							best hotel
						</h4>
						<p>
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
						</p>
					</div>
				</div>
				</div>
					<div class="col-lg-4 col-md-6 col-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
					<div class="service-icon">
						<div class="src-image">
							<img src="images/service4.jpg">
						</div>
						<div class="src">
						<div class="service-icn1">
							 <i class="fa-solid fa-bus"></i>
						</div>
						<h4>
							bus tour
						</h4>
						<p>
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
						</p>
					</div>
				</div>
				</div>
					<div class="col-lg-4 col-md-6 col-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
					<div class="service-icon">
						<div class="src-image">
							<img src="images/service2.jpg">
						</div>
						<div class="src">
						<div class="service-icn1">
							<i class="fas fa-store"></i>
						</div>
						<h4>
							accessbility
						</h4>
						<p>
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
						</p>
					</div>
				</div>
				</div>
					<div class="col-lg-4 col-md-6 col-12"  data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
						<div class="service-icon">
						<div class="src-image">
							<img src="images/service3.webp">
						</div>
						<div class="src">
						<div class="service-icn1">
							<i class="fas fa-headset"></i>
						</div>
						<h4>
							24*7 support
						</h4>
						<p>
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
						</p>
					</div>
				</div>
				</div>
					<div class="col-lg-4 col-md-6 col-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
					<div class="service-icon">
						<div class="src-image">
							<img src="images/service5.webp">
						</div>
						<div class="src">
						<div class="service-icn1">
							<i class="fa-solid fa-passport"></i>
						</div>
						<h4>
							passport
						</h4>
						<p>
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
						</p>
					</div>
				</div>
				</div>
					<div class="col-lg-4 col-md-6 col-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
					<div class="service-icon">
						<div class="src-image">
							<img src="images/service7.png">
						</div>
						<div class="src">
						<div class="service-icn1">
							<i class="fa-brands fa-cc-visa"></i>
						</div>
						<h4>
							 visa
						</h4>
						<p>
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
						</p>
					</div>
				</div>
				</div> -->
			</div>
		</div>
	</div>


	<div class="bg-service-content">
		<div class="container">
			<div class="inner-service-info" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
				<h5>
					{{$service_description_sub_title}}
				</h5>
				<h2>
					{{$service_description_title}}
				</h2>
				<p>
					{!!$service_description_description!!}
				</p>

				<button>
					<a href="{{url('/contact')}}">contact us</a>
				</button>
			</div>
		</div>
	</div>



@endsection