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
							<span class="active">{{$page_banner_title}}</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

@foreach($package_data as $pd)
	<div class="bg-package-detail">
				<div class="container">
					<div class="row">

						
					 	<div class="col-lg-8 col-md-8 col-12">
					 		<div class="pkg-detail-info">
					 			<div class="inner-pkg-heading">
					 				
					 				<h5>
					 					<span><i class="fa-solid fa-location-pin"></i></span>india
					 				</h5>
					 				<h2>
					 				{{$pd->tour_name}}
					 				</h2>
					 			</div>

					 			<div class="inner-pkg-info">
					 				<p>
					 					<span>
					 					<i class="fa-regular fa-clock"></i>
					 					</span>	
					 					{{$pd->duration}}days {{$pd->duration - 1}}night
					 				</p>
					 			</div>
					 		
					 		</div>
					 		<div class="pkg-detail-image">
					 			@foreach($slider_image as $si)
					 			<img src="/uploads/{{$si->multi_image}}">
					 			@endforeach
					 		</div>
					 	</div>



					 	<div class="col-lg-4 col-md-4 col-12">
					 		<div class="pkg-form">
					 			<form action="{{url('/inquiry')}}" method="post">
					 				@csrf
					 				<h3>
					 					contact us
					 				</h3>
					 				<div class="pkg-name">
					 					<input type="text" name="name" value="" placeholder="name">
					 					<input type="hidden" name="hidden" value="1" placeholder="name">
					 					<input type="hidden" name="package_detail_id" value="{{$pd->id}}" placeholder="name">		
					 				</div>
					 				<div class="pkg-name">
					 					<input type="text" name="email" value="" placeholder="E-mail">	
					 				</div>
					 				<div class="pkg-name">
					 					<input type="text" name="number" value="" placeholder="number">	
					 				</div>
					 				<div class="pkg-textarea">
					 						<textarea name="message" placeholder="Message"></textarea>
					 				</div>
					 				<button type="submit">
					 						submit
					 				</button>
					 			</form>
					 		</div>
					 	</div>
					</div>

				<div class="pkg-tabs col-lg-8 col-md-8 col-12">
  					<ul class="nav nav-pills" role="tablist">
    				   <li class="nav-item">
      					  <a class="nav-link active" data-bs-toggle="pill" href="#information"><span>
      					  	<i class="fa-solid fa-info"></i>
      					  </span>
      					  information</a>
    					</li>
    					<li class="nav-item">
      					<a class="nav-link" data-bs-toggle="pill" href="#travel"><span>
      							<i class="fa-solid fa-file"></i>
      							</span>
      					travel plan</a>
    					</li>
    					<li class="nav-item">
      					<a class="nav-link" data-bs-toggle="pill" href="#gallary"><span>
      						<i class="fa-solid fa-images"></i>
      					</span>
      					tour gallary</a>
    					</li>
    					<li class="nav-item">
      					<a class="nav-link" data-bs-toggle="pill" href="#location"><span><i class="fa-solid fa-location-pin"></i></span>
      					location</a>
    					</li>
  					</ul>

  				<div class="tab-content">
    				<div id="information" class=" tab-pane active"><br>
      					{!!$pd->detail_description!!}

      					<div class="row pkg-img-main">
      						@foreach($description_image as $di)
      						<div class="col-lg-6 col-md-6 col-12">
      							<div class="pkg-img">
      								<img src="/uploads/{{$di->multi_image}}">
      							</div>
      						</div>
      						@endforeach
      						@foreach($description_image1 as $di)
      						<div class="col-lg-6 col-md-6 col-12">
      							<div class="pkg-img2">
      								<img src="/uploads/{{$di->multi_image}}">
      							</div>
      						</div>
      						@endforeach

      					</div>
    				</div>


    		<div id="travel" class="tab-pane fade"><br>
      			<div id="accordion">

      			@foreach($travel_plan_data as $tpd)
    				<div class="card">
      					<div class="card-header">
        					<a class="btn" data-bs-toggle="collapse" href="#collapse{{$tpd->id}}">
        						<div class="pkg-accordian">
        							<div class="pkg-count">
          								<h5>01</h5>
          							</div>
          							<div class="pkg-title">
          								<h3>
          									{{$tpd->title}}
          								</h3>
          							</div>
        						</div>
       						</a>
     					</div>
     	 				<div id="collapse{{$tpd->id}}" class="collapse" data-bs-parent="#accordion">
       						<div class="card-body">
          						{{$tpd->description}}
       						</div>
      					</div>
    				</div>
    				@endforeach
    		
    			</div>
    			</div>			
    		
   			<div id="gallary" class="tab-pane fade"><br>
   				<div class="pkg-gallary">
      				<div class="row">

               @for ($i = 0; $i < count($gallary_image); $i=$i+3)


      					<div class="col-lg-6 col-md-6 col-12">
      						<img src="/uploads/{{$gallary_image[$i]->multi_image}}">
      					</div>
      					<div class="col-lg-6 col-md-6 col-12">
      						<img src="/uploads/{{$gallary_image[$i+1]->multi_image}}">
      					</div>
      					<div class="col-lg-12 col-md-12 col-12">
      						<img src="/uploads/{{$gallary_image[$i+2]->multi_image}}">
      					</div>

   
             @endfor

      					


      				</div>
      			</div>		
    		</div>
    				<div id="location" class="tab-pane fade"><br>
    					<div class="map">
      						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4016734.7527726707!2d73.88381004802422!3d10.532724200376261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0812ffd49cf55b%3A0x64bd90fbed387c99!2sKerala!5e0!3m2!1sen!2sin!4v1656486181085!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      					</div>
    				</div>
  				</div>
			</div>
		</div>
	</div>
	@endforeach



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

	<script type="text/javascript">
			  $('.pkg-detail-image').slick({
   	  			slidesToShow:1,
   	  			slidesToScroll:1,
   	  			infinite: true,
  				autoplay:false,
  				autoplaySpeed:2000,
  				dots:false,
  				arrows:true,
  				prevArrow: '<div class="service-arrow slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></div>',
        		nextArrow: '<div class="service-arrow slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></div>'
  			})

	</script>
	 <script type="text/javascript">
	 	var scrollTop = $(".scrollTop");

  $(window).scroll(function() {

    var topPos = $(this).scrollTop();

    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");

    } else {
      $(scrollTop).css("opacity", "0");
    }

  });


  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  });	
	 </script>


@endsection