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

							<!-- gallary section -->

	<main class="main">
	  <div class="container">
	  	@foreach($gallary_data as $gd)
	    <div class="card" data-aos="zoom-in" >
	      <div class="card-image">
	        <a href="/uploads/{{$gd->multi_image}}" data-fancybox="gallery" data-caption="Caption Images 1">
	        	<span>
	        	<i class="fa-solid fa-plus"></i>
	        </span>
	          
	        </a>
	        <img src="/uploads/{{$gd->multi_image}}" alt="Image Gallery">
	      </div>
	    </div>
	    @endforeach
	    <!-- <div class="card" data-aos="zoom-in">
	      <div class="card-image">
	        <a href="images/gallary1.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
	        	<span>
	        	<i class="fa-solid fa-plus"></i>
	        </span>
	         
	        </a>
	          <img src="images/gallary1.jpg" alt="Image Gallery">
	      </div>
	    </div>
	    <div class="card"data-aos="zoom-in">
	      <div class="card-image">
	        <a href="images/gallary2.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
	        	 <span>
	        	<i class="fa-solid fa-plus"></i>
	        </span>
	         
	        </a>
	         <img src="images/gallary2.jpg" alt="Image Gallery">
	      </div>
	    </div>
	    <div class="card"data-aos="zoom-in">
	      <div class="card-image">

	        <a href="images/gallary3.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
	        	<span>
	        	<i class="fa-solid fa-plus"></i>
	        </span>
	          
	        </a>

	        <img src="images/gallary3.jpg" alt="Image Gallery">
	         
	      </div>
	    </div>
	    <div class="card"data-aos="zoom-in">
	      <div class="card-image">
	        <a href="images/gallary4.jpg" data-fancybox="gallery" data-caption="Caption Images 1">
	        	 <span>
	        	<i class="fa-solid fa-plus"></i>
	        </span>
	        </a>
	            <img src="images/gallary4.jpg" alt="Image Gallery">
	      </div>
	    </div>
	    <div class="card"data-aos="zoom-in">
	      <div class="card-image">
	        <a href="images/gallary5.webp" data-fancybox="gallery" data-caption="Caption Images 1">
	        	 <span>
	        	<i class="fa-solid fa-plus"></i>
	        </span>
	          
	        </a>
	        <img src="images/gallary5.webp" alt="Image Gallery">
	      </div>
	    </div>
	    <div class="card"data-aos="zoom-in">
	      <div class="card-image">
	        <a href="images/gallary6.webp" data-fancybox="gallery" data-caption="Caption Images 1">
	        	 <span>
	        	<i class="fa-solid fa-plus"></i>
	        </span>
	         
	        </a>
	        <img src="images/gallary6.webp">
	      </div>
	    </div>
	    <div class="card"data-aos="zoom-in">
	      <div class="card-image">
	        <a href="images/gallary7.webp" data-fancybox="gallery" data-caption="Caption Images 1">
	        	  <span>
	        	<i class="fa-solid fa-plus"></i>
	        </span>
	        
	        </a>
	         <img src="images/gallary7.webp">
	      </div>
	    </div>
	   <div class="card"data-aos="zoom-in">
	      <div class="card-image">
	        <a href="images/gallary7.webp" data-fancybox="gallery" data-caption="Caption Images 1">
	        	  <span>
	        	<i class="fa-solid fa-plus"></i>
	        </span>
	        
	        </a>
	         <img src="images/gallary7.webp">
	      </div>
	    </div> -->
	  </div>
	</main>






@endsection