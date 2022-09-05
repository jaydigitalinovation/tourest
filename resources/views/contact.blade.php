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


			 		<!-- contact form section -->

	<div class="bg-contact">
		<div class="container">
			<div class="row co-form">
				<div class="col-lg-6 col-md-6 col-12"data-aos="zoom-in-right">
					<div class="contact-image">
						<img src="images/contact1.webp">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12"data-aos="zoom-in-left">
					<div class="co-inner-form">
					<div class="contact-msg">
						<h3>contact with us!</h3>
					</div>

					@if(session()->has('error'))
		              <div class="alert alert-success" id="newhide">
		                  {{session()->get('error')}}
		              </div>
		              @endif

					<form action="{{url('/inquiry')}}" method="post">
						@csrf
						<div class="inner-contact">
							<input type="text" name="name" value="" placeholder="name">
							<input type="hidden" name="hidden" value="0" placeholder="name">
						</div>
						<div class="inner-contact">
							<input type="text" name="email" value="" placeholder="E-mail">
						</div>
						<div class="subject">
							<input type="text" name="subject" value="" placeholder="subject">
						</div>
						<div class="contact-textarea">
							 <textarea name="message"  placeholder="Message"></textarea>
							
						</div>
						<div class="form-btn">
							<button type="submit">
								send message
								<span><i class="fa-regular fa-paper-plane"></i></span>
							</button>	
						</div>
					</form>
				</div>
					</div>
				</div>
			</div>
	</div>


	 					<!-- map section-->

	<div class="bg-map">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4908.399451555646!2d72.97734979961702!3d20.76579113564499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ee423c0a4b2f%3A0xe413d0603fe2891c!2sBilimora%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1656235130694!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>		
	</div>

	 		 <!-- address section -->

 	<div class="bg-address">
 		<div class="container">
 			<div class="row"data-aos="zoom-out">
 				@foreach($admin_data as $ad)
 				<div class="col-lg-4 col-md-4 col-12">
 					<div class="add-box">
 						<div class="add-icon">
 							<i class="fa-solid fa-location-pin"></i>
 						</div>
 						<div class="add-info">
 							<h4>
 								address
 							</h4>
 							<p>
 								{{$ad->address}}
 							</p>
 						</div>
 					</div>
 				</div>
 				<div class="col-lg-4 col-md-4 col-12">
 					<div class="add-box">
 						<div class="add-icon">
 						<i class="fa-solid fa-phone"></i>
 						</div>
 						<div class="add-info">
 							<h4>
 								phone
 							</h4>
 							<p>
 								<a href="tel:{{$ad->phone_no}}">{{$ad->phone_no}}</a>
 							</p>
 						</div>
 					</div>
 				</div>
 				<div class="col-lg-4 col-md-4 col-12">
 					<div class="add-box">
 						<div class="add-icon">
 							<i class="fa-solid fa-envelope"></i>
 						</div>
 						<div class="add-info">
 							<h4>
 								e-mail
 							</h4>
 							<p>
 								<a href="mailto:{{$ad->email}}">{{$ad->email}}</a>
 							</p>
 						</div>
 					</div>
 				</div>
 				@endforeach
 			</div>
 		</div>
 	</div>






@endsection

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

  setTimeout(function() { $(".alert").fadeOut(1500);},5000);
  
</script>