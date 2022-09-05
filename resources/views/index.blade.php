@extends('layout.header_footer')


@section('content')



    <div class="banner-slider">

        @foreach($banner_data as $bd)
                <div class="banner">
                    @if($bd->extension=="mp4")
                    <video muted autoplay class="video">
                        <source src="/uploads/{{$bd->image}}" type="video/mp4">
                    </video>
                    @else
                    <img src="/uploads/{{$bd->image}}">
                    @endif
                    <div class="banner-text text3">
                        <p>welcome to world travel</p>
                        <h2>creating a better <br>weekend for you</h2>
                        <button>
                        <a href="{{url('/contact')}}">contact us</a>
                        </button>
                    </div>
                </div>
         @endforeach
       
    </div>


                    <!-- form section  -->

    
    <div class="banner-form">
        <div class="container">
            <form action="{{url('/find_tour')}}" method="post">

                @csrf
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="text">
                            <select id="" name="name">

                                <option value="">Tour Location</option>

                                @foreach($package_data as $pd)
                                <option value="{{$pd->id}}">{{$pd->tour_name}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="text">
                            <select id="" name="price">
                                <option value="">Tour Amount</option>
                                @foreach($package_data as $pd)
                                <option value="{{$pd->price}}">{{$pd->price}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="text">
                        <select id="" name="travel_type">
                        <option value="">travel type</option>

                        @foreach($tour_type_data as $ttd)
                        <option value="{{$ttd->id}}">{{$ttd->tour_name}}</option>
                        @endforeach

                        </select>
                    </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3">
                        <div class="text-btn">
                            <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                                find now
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


                      <!-- about us section  -->

         
        <div class="bg-aboutus">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="about-image">
                            <img src="/uploads/{{$about_image}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6"data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="about-content">
                            <h5>
                                {{$about_sub_title}}
                            </h5>
                            <h2>
                                {{$about_title}}
                            </h2>
                            <p>
                                {!!$about_description!!}
                            </p>
                            <div class="about-btn">
                                <button>
                                    <a href="{{url('/about_us')}}">know more</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


                     <!-- our service section  -->


        <div class="bg-service">
            <div class="container">
                <div class="service-header">
                    <h2>
                    our services
                    </h2>
                </div>

                <div class="row">

                    @foreach($service_data as $sd)
                    <div class="col-lg-4 col-md-6"  data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
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
                                <button>
                                <a href="{{url('/service')}}">
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach

                        
                        
                </div>
            </div>
        </div>


                    <!--  package section -->  


            <div class="bg-package">
                <div class="container">
                    <div class="package-header">
                        <h2>
                        our packages
                        </h2>
                    </div>


                    <div class="package-slider">
                        @foreach($package_data as $pd)
                        <div class="packages-image">
                            <a href="{{url('/package_detail')}}/{{$pd->id}}">
                                <img src="/uploads/{{$pd->image}}">    
                            </a>
                            
                            <div class="packages-info">
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
                        @endforeach
                    </div>
                </div>
            </div>

                     <!-- why choose us  -->


            <div class="bg-why-us">
                <div class="container">
                    <div class="package-header">
                        <h2>
                            {{$choose_image_title}}
                        </h2>
                    </div>  
                    
    
                    <div class="row"data-aos="zoom-in-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">

                        
                        <div class="col-lg-3 col-md-6">
                            <div class="inner">
                                @foreach($choose_data as $c)
                                @if($c->id %2 != 0)
                                <div class="why-block">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="/uploads/{{$c->icon}}" alt=""></div>
                                            <h4>{{$c->title}}</h4>
                                            <p>
                                                {{$c->description}}
                                            </p>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </div>
                        

                        <div class="col-lg-6 col-md-12">
                            <div class="inner-img">
                                <img src="/uploads/{{$choose_image_image}}">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="inner">
                                @foreach($choose_data as $c)
                                @if($c->id %2 == 0)
                                <div class="why-block">
                                    <div class="inner-box">
                                        <div class="icon-box"><img src="/uploads/{{$c->icon}}" alt=""></div>
                                            <h4>{{$c->title}}</h4>
                                            <p>
                                                {{$c->description}}
                                            </p>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>  
                        </div>
                    </div>
                </div>
            </div>


                             <!-- testominal section -->

            <div class="bg-testimonials">
                <div class="container">
                    <div class="package-header">
                        <h2>
                            what our client say!
                        </h2>
                    </div>
                    <div class="testimonials-slider">

                        @foreach($review_data as $rd)
                        <div class="inner-testimonials">
                            <div class="testimonials-info">
                                <span>
                                    <i class="fa-solid fa-quote-left"></i>
                                </span>
                                    <p>
                                        {{$rd->description}}
                                    </p>
                            </div>
                            <div class="client-info">
                                <div class="testimonials-image">
                                    <img src="/uploads/{{$rd->image}}">
                                </div>
                                <div class="client-name">
                                    <h4>
                                        {{$rd->name}}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                           
                    </div>
                </div>
            </div>






@endsection