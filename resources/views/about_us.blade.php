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


					<!-- about us section -->


	<div class="bg-abt-us">
		<div class="container">

			
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12"  data-aos="fade-right"data-aos-offset="300" data-aos-easing="ease-in-sine">
					<div class="abt-image">
						<img src="/uploads/{{$aboutus_about_image}}">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12" data-aos="fade-left"data-aos-offset="300" data-aos-easing="ease-in-sine">
					<div class="abt-info">
						<h5>
							about us
						</h5>
						<h2>
							{{$aboutus_about_title}}
						</h2>
						{!!$aboutus_about_description!!}
					</div>
				</div>
			</div>
			
		</div>
	</div>

				<!-- video section -->

				
	<div class="bg-video">
		<div class="video-image">
			<img src="/uploads/{{$aboutus_video_image}}">
			<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal">
						<i class="fa-solid fa-play"></i>
				</button>
				<div class="modal fade" id="myModal">
					<div class="modal-dialog">
					<div class="modal-content"> 
							<div class="modal-body">
								<video  muted autoplay>
									<source src="/uploads/{{$aboutus_video_video}}" type="video/mp4">
								</video>
							</div>
					</div>
					</div>
			</div>
		</div>

		<div class="container">
			<div class="row abt-box-main" data-aos="fade-up" data-aos-duration="3000">

				@foreach($aboutus_detail as $ad)
				<div class="col-lg-4 pl-0 pr-0 col-md-4">
					<div class="abt-box">
						<div class="counts">
							<span class="count">
								{{$ad->count}}
							</span>
							<b>+</b>
						</div>
					<div class="abt-title">
						<p>
							{{$ad->title}}
						</p>
					</div>
					</div>		
				</div>
				@endforeach
			</div>
		</div>
	</div>


			 		<!-- accordian section -->


	<div class="bg-faq">
		<div class="container">
			<div class="faq-header">
				<h2>
					Frequently asked question
				</h2>
			</div>
			<div class="row"data-aos="zoom-in" data-aos-duration="3000">
				<div class="col-lg-6 col-md-6">
					<div class="accordion">	
						@foreach($aboutus_question as $aq)
						@if($aq->id %2 !=0)
    					<div class="card">
      						<div class="card-header card-show">
        						<a class="btn" data-bs-toggle="collapse" href="#collapse{{$aq->id}}">
        						  {{$aq->question}}
        						  <span>
        						  	<i class="fa-solid fa-circle-chevron-up"></i>
        						  </span>
        						</a>
      						</div>
	      					<div id="collapse{{$aq->id}}" class="collapse card-content" data-bs-parent="#accordion">
	        					<div class="card-body">
	          						{!!$aq->answer!!}
	       						</div>
	      					</div>
    					</div>
    					@endif
    					@endforeach
 			 	</div>
 			 </div>
 			 <div class="col-lg-6 col-md-6">
 			 	<div class="accordion">	
    			@foreach($aboutus_question as $aq)
						@if($aq->id %2 ==0)
    					<div class="card">
      						<div class="card-header card-show">
        						<a class="btn" data-bs-toggle="collapse" href="#collapse{{$aq->id}}">
        						  {{$aq->question}}
        						  <span>
        						  	<i class="fa-solid fa-circle-chevron-up"></i>
        						  </span>
        						</a>
      						</div>
	      					<div id="collapse{{$aq->id}}" class="collapse" data-bs-parent="#accordion">
	        					<div class="card-body">
	          						{!!$aq->answer!!}
	       						</div>
	      					</div>
    					</div>
    					@endif
    					@endforeach
 			 	</div>
 			 </div>
 		</div>
		</div>
	</div>


@endsection

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

		$(document).ready(function(){
			$(".card-header").click(function(){
				$(this).toggleClass('click_rotate');
			});
		});

</script>