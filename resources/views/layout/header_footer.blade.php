<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	 <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="icon" type="images/png" href="images/logo.png">
</head>
<body>


@foreach($admin_data as $ad)
	<div class="bg-top-header">
		<div class="container">
			<div class="top-header-flex">
				<div class="top-header-info">
					<ul>
						<li>
							<i class="fa-solid fa-envelope-open"></i>
							<a href="mailto:{{$ad->email}}">{{$ad->email}}</a>
						</li>
						<li>
							<i class="fa-brands fa-whatsapp"></i>
							<a href="tel:{{$ad->phone_no}}">{{$ad->phone_no}}</a>
						</li>
					</ul>
				</div>
				<div class="top-header-icon">
					<ul>
						<li>
							<a href="{{$ad->facebook_link}}">
							<i class="fa-brands fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="{{$ad->twitter_link}}">
							<i class="fa-brands fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="{{$ad->linked_in_link}}">
							<i class="fa-brands fa-linkedin"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endforeach

					<!-- header bottom  section -->

 		<div class="bg-header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-3 col-4 ">
						<div class="menu-logo">
							@foreach($footer_description as $fd)
	 								<a href="{{url('/')}}">
										<img src="/uploads/{{$fd->image}}">	
									</a>
									@endforeach
						</div>
					</div>
					<div class="col-lg-8 col-md-9 col-8">
						<div class="menu">
							<ul>
							<li class="active">
								<a href="{{url('/')}}">home</a>
							</li>
							<li>
								<a href="{{url('/about_us')}}">about us</a>
							</li>
							<li>
								<a href="{{url('/service')}}">service</a>
							</li>
							<li>
								<a href="{{url('/package')}}">package</a>
							</li>
							<li>
								<a href="{{url('/gallary')}}">gallary</a>
							</li>
							<li>
								<a href="{{url('/contact')}}">contact us</a>
							</li>
						</ul>
						</div>

					<div class="mobile-bar">
	 					<div class="offcanvas offcanvas-start" id="demo">
  							<div class="offcanvas-header">
    							<h1 class="offcanvas-title">
    							<div class="logo">
    							@foreach($footer_description as $fd)
	 								<a href="{{url('/')}}">
										<img src="/uploads/{{$fd->image}}">	
									</a>
									@endforeach
	 							</div>
	 							</h1>
    							<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
 	 						</div>
  					<div class="offcanvas-body">
    					<div class="menu vertical">
	 						<ul>
	 							<li class="active">
	 								<a href="{{url('/')}}">
	 									home
	 								</a>
	 							</li>
	 							<li>
	 								<a href="{{url('/about_us')}}">																				
	 									about us
	 								</a>
	 							</li>
	 												
	 							<li>
	 								<a href="{{url('/service')}}">
	 									services
	 								</a>
	 							</li>
	 							<li>
	 								<a href="{{url('/package')}}">
	 									package
	 								</a>
	 							</li>
	 							<li>
	 								<a href="{{url('/gallary')}}">
	 									gallary
	 								</a>
	 							</li>
	 							<li>
	 								<a href="{{url('/contact')}}">
	 									contact us
	 								</a>
	 							</li>
	 						</ul>
	 					</div>
  					</div>
				</div>
  						<p data-bs-toggle="offcanvas" data-bs-target="#demo">
    					<i class="fa-solid fa-bars"></i>
  						</p>
				</div>
					</div>
					<div class="col-lg-2 col-md-3 col-2">
						<div class="menu-btn">
							<button>
								<a href="{{url('/contact')}}">Inquiry now</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		@yield('content')

					<!-- footer section -->
			<div class="bg-footer">
				<div class="container">
					<div class="row footer1">
						<div class="col-lg-4 col-md-8 col-12">
							@foreach($footer_description as $fd)
							<div class="footer-div1">
								<a href="{{url('/')}}">
								  <img src="/uploads/{{$fd->image}}">
								</a>	
								<p>
									{{$fd->description}}
								</p>
							</div>
							@endforeach
						</div>
						<div class="col-lg-2 col-md-4 col-12">
							<div class="usefull-links">
								<h3 class="footer-heading">
									usefull link
								</h3>
								<ul>
									<li>
										<i class="fa-solid fa-angles-right"></i>
										<a href="{{url('/')}}">home</a>
									</li>
									<li>
										<i class="fa-solid fa-angles-right"></i>
										<a href="{{url('/about_us')}}">about us</a>
									</li>
									<li>
										<i class="fa-solid fa-angles-right"></i>
										<a href="{{url('/service')}}">service</a>
									</li>
									<li>
										<i class="fa-solid fa-angles-right"></i>
										<a href="{{url('/package')}}">package</a>
									</li>
									<li>
										<i class="fa-solid fa-angles-right"></i>
										<a href="{{url('/gallary')}}">gallary</a>
									</li>
									<li>
										<i class="fa-solid fa-angles-right"></i>
										<a href="{{url('/contact')}}">contact us</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							@foreach($admin_data as $ad)
							<div class="contact-us">
								<h3 class="footer-heading">
									contact us
								</h3>
								<ul>
									<li>
										<i class="fa-solid fa-location-pin"></i>
									<span>
										{{$ad->address}}
									</span>
									</li>
									<li>
										<i class="fa-solid fa-envelope-open"></i>
										<a href="mailto:{{$ad->email}}">{{$ad->email}}</a>
									</li>
									<li>
										<i class="fa-brands fa-whatsapp"></i>
										<a href="tel:{{$ad->phone_no}}">{{$ad->phone_no}}</a>
									</li>
								</ul>
							</div>
							@endforeach
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="f-gallary">
								<h3 class="footer-heading">
									gallary
								</h3>

								<div class="row">
									@foreach($footer_gallary as $fg)
									<div class="col-lg-4 col-md-4 col-6">
										<div class="f-image">
											<a href="gallary.html">
												<img src="/uploads/{{$fg->multi_image}}">	
											</a>
										</div>
									</div>
									@endforeach
									
								</div>
							</div>
						</div>
					</div>
					<div class="Copyright">
					<p>
						no one©Copyright 2022 . All rights reserved.
					</p>	
					</div>
				</div>		
			</div>

	 <div id="stop" class="scrollTop">
  	  <span>
  	  		<a href="">
  	  			<i class="fas fa-angle-double-up"></i>
  	  		</a>
  	  </span>
  	</div>


 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<script type="text/javascript">

		 $('.banner-slider').slick({
   	  			slidesToShow:1,
   	  			slidesToScroll:1,
   	  			infinite: true,
  				autoplay:true,
  				autoplaySpeed:2000,
  				dots:false,
  				arrows:true,
  				prevArrow: '<div class="service-arrow slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></div>',
        		nextArrow: '<div class="service-arrow slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></div>'
   	  });
		  $('.package-slider').slick({
   	  			slidesToShow:2,
   	  			slidesToScroll:1,
   	  			infinite: true,
  				autoplay:true,
  				autoplaySpeed:2000,
  				dots:false,
  				arrows:true,
  				prevArrow: '<div class="service-arrow slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></div>',
        		nextArrow: '<div class="service-arrow slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></div>',
     			responsive: [
        	{
          		breakpoint: 1024,
          		settings: {
            	slidesToShow: 2,
            	slidesToScroll: 2,
            	adaptiveHeight: true,
          },
        },
        {
          breakpoint:767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],

  			});
				
			  $('.testimonials-slider').slick({
   	  			slidesToShow:2,
   	  			slidesToScroll:1,
   	  			infinite: true,
  				autoplay:true,
  				autoplaySpeed:1000,
  				dots:false,
  				arrows:true,
  					responsive: [
        	{
          		breakpoint: 1024,
          		settings: {
            	slidesToShow: 2,
            	slidesToScroll: 2,
            	adaptiveHeight: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],

  			});

 			AOS.init();
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
</body>
</html>