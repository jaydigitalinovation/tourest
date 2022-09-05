<html>
<head>
  <title>admin</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" type="text/css" href="/css/home1.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">


</head>
<body>  
   <header class="page-header">
      <nav class="main-menu">
         <a href="{{url('/admin/home')}}"class="logo"><img src="/images/logo.png" alt="img"></a>
         <ul class="menu main_drop">
            <!-- <li><a href="#"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span> <i class="fal fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="#">Dashboard 01</a></li>
                  <li><a href="#">Dashboard 02</a></li>
                  <li><a href="#">Dashboard 03</a></li>
               </ul>
            </li> -->
            <li><a href="#"><i class="fas fa-home"></i> <span>Home</span> <i class="fal fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('/admin/home')}}">Home</a></li>
                  <li><a href="{{url('/admin/banner')}}">Banner</a></li>
                  <li><a href="{{url('/admin/about')}}">About</a></li>
                  <li><a href="{{url('/admin/choose_image')}}">Choose_image</a></li>
                  <li><a href="{{url('/admin/choose')}}">Why Choose US</a></li>
                  <li><a href="{{url('/admin/reviews')}}">Client's Reviews</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fas fa-chart-pie"></i> <span>Banner of pages</span> <i class="fal fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('/admin/page_banner')}}">Add banner Info.</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa-solid fa-circle-info"></i> <span>About US</span> <i class="fal fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('/admin/aboutus_about')}}">About</a></li>
                  <li><a href="{{url('/admin/aboutus_video')}}">Add Your Popup Video</a></li>
                  <li><a href="{{url('/admin/aboutus_detail')}}">Aboutus_detail</a></li>
                  <li><a href="{{url('/admin/aboutus_question')}}">Aboutus_question</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa-solid fa-gear"></i> <span>Service</span> <i class="fal fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('/admin/service')}}">Service</a></li>
               </ul>
            </li>

            <li><a href="#"><i class="fa-solid fa-box-open"></i> <span>Package</span> <i class="fal fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('/admin/tour_type')}}">Tour type</a></li>
                  <li><a href="{{url('/admin/package')}}">Package</a></li>
               </ul>
            </li>

            <li><a href="#"><i class="fa-solid fa-image"></i> <span>Gallary</span> <i class="fal fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('/admin/gallary')}}">Gallary</a></li>
               </ul>
            </li>

            <li><a href="#"><i class="fa-solid fa-arrows-up-down"></i> <span>Header footer</span> <i class="fal fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('/admin/footer_description')}}">Footer_description</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa-solid fa-user-check"></i> <span>customer_response</span> <i class="fal fa-chevron-down"></i></a>
               <ul class="drp-menu">
                  <li><a href="{{url('/admin/customer_response')}}">Customer_Inquiry</a></li>
                  <li><a href="{{url('/admin/package_inquiry')}}">Package_Inquiry</a></li>
               </ul>
            </li>
            
         </ul>
      </nav>
   </header>
   <section class="mobile_manu">
        <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-6">
                 <div class="mobile_logo">
                   <a href="index.html"><img src="image/logo.png"></a>
                 </div>
               </div>
               <div class="col-lg-6 col-md-6 col-6">
                  <div class="admin-profile">
                  <div class="login">
                    <div class="dropdown1">
                      <button id="myBtn1">
                        <i class="dropbtn1 fas fa-user"></i>
                     </button>
                        <div id="myDropdown1" class="dropdown-content1">
                          <a href="change-pwd.html">Change Password</a>
                          <a href="{{url('/admin/logout')}}"><i class="fas fa-lock"></i>Logout</a>
                        </div>
                    </div>
                  </div>
                  <div class="mobile-menu">
                     <div id="mySidepanel" class="sidepanel">
                        <div class="m_menu main-menu">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="far fa-times"></i></a>
                           <ul class="menu main_drop">
                              <li><a href="#"><span>Dashboard</span> <i class="fal fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="#">Dashboard 01</a></li>
                                    <li><a href="#">Dashboard 02</a></li>
                                    <li><a href="#">Dashboard 03</a></li>
                                 </ul>
                              </li>
                              <li><a href="#"><span>Home</span> <i class="fal fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('/admin/home')}}">Home</a></li>
                                    <li><a href="{{url('/admin/banner')}}">Banner</a></li>
                                    <li><a href="{{url('/admin/patner_image')}}">Patner_image</a></li>
                                    <li><a href="{{url('/admin/about')}}">About</a></li>
                                    <li><a href="{{url('/admin/shop')}}">Shop</a></li>
                                 </ul>
                              </li>
                              <li><a href="#"><span>Shop</span> <i class="fal fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('/admin/shop_design')}}">Shop design</a></li>
                                 </ul>
                              </li>
                              <li><a href="#"><span>Category</span> <i class="fal fa-chevron-down"></i></a>
                                 <ul class="drp-menu">
                                    <li><a href="{{url('/admin/category')}}">Add Your Category</a></li>
                                 </ul>
                              </li>
                           </ul>                
                        </div>
                     </div>
                     <button class="openbtn" onclick="openNav()"><i class="far fa-bars"></i></button> 
                  </div>
                      </div>
                   </div>
              </div>
          </div>
        </div>
   </section>
   <section class="page-content">
      <div class="search-and-user">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-6">
               <ul class="admin-menu">
                 <li>
                    <div class="switch">
                      <input type="checkbox" id="mode" checked>
                      <label for="mode">
                      </label>
                    </div>
                    <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
                      <i class="fas fa-bars"></i>
                      <span>Collapse</span>
                    </button>
                 </li>
              </ul>
          </div>
          <div class="col-lg-6 col-md-6 col-6">
              <div class="admin-profile">
                  <div class="login">
                    <div class="dropdown1">
                      <button id="myBtn1">
                        
                        <span class="greeting">{{ Auth::user()->name  }}</span>
                        
                        <i class="dropbtn1 fas fa-user"></i>
                     </button>
                        <div id="myDropdown1" class="dropdown-content1">
                          <a href="{{url('/admin/edit_profile')}}">Edit Profile</a>
                          <a href="{{url('/admin/logout')}}"><i class="fas fa-lock"></i>Logout</a>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <div>
        
      @yield('content')
    </div> 
   </section>
</div>

<style type="text/css">
    .dropdown-content1{
        left: -66px!important;
    }
</style>


   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <script type="text/javascript">
      $('.main-menu>ul>li>a, .main-menu ul.drp-menu>li>a').on('click', function(e) {
      var element = $(this).parent('li');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('li').removeClass('open');
        element.find('ul').slideUp(500,"swing");
      }
      else {
        element.addClass('open');
        element.children('ul').slideDown(800,"swing");
        element.siblings('li').children('ul').slideUp(800,"swing");
        element.siblings('li').removeClass('open');
        element.siblings('li').find('li').removeClass('open');
        element.siblings('li').find('ul').slideUp(1000,"swing");
      }
      });


        $(document).ready(function(){

            $('.dropbtn1').click(function(){
            $('.dropdown-content1').toggle();
          });

            
        });
        

      function openNav() {
            document.getElementById("mySidepanel").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }

    </script>
   <script type="text/javascript">
      const html = document.documentElement;
      const body = document.body;
      const menuLinks = document.querySelectorAll(".admin-menu a");
      const collapseBtn = document.querySelector(".admin-menu .collapse-btn");
      const toggleMobileMenu = document.querySelector(".toggle-mob-menu");
      const switchInput = document.querySelector(".switch input");
      const switchLabel = document.querySelector(".switch label");
      const switchLabelText = switchLabel.querySelector("span:last-child");
      const collapsedClass = "collapsed";
      const lightModeClass = "light-mode";

      collapseBtn.addEventListener("click", function () {
        body.classList.toggle(collapsedClass);
        this.getAttribute("aria-expanded") == "true"
          ? this.setAttribute("aria-expanded", "false")
          : this.setAttribute("aria-expanded", "true");
        this.getAttribute("aria-label") == "collapse menu"
          ? this.setAttribute("aria-label", "expand menu")
          : this.setAttribute("aria-label", "collapse menu");
      });

      toggleMobileMenu.addEventListener("click", function () {
        body.classList.toggle("mob-menu-opened");
        this.getAttribute("aria-expanded") == "true"
          ? this.setAttribute("aria-expanded", "false")
          : this.setAttribute("aria-expanded", "true");
        this.getAttribute("aria-label") == "open menu"
          ? this.setAttribute("aria-label", "close menu")
          : this.setAttribute("aria-label", "open menu");
      });

      for (const link of menuLinks) {
        link.addEventListener("mouseenter", function () {
          if (
            body.classList.contains(collapsedClass) &&
            window.matchMedia("(min-width: 768px)").matches
          ) {
            const tooltip = this.querySelector("span").textContent;
            this.setAttribute("title", tooltip);
          } else {
            this.removeAttribute("title");
          }
        });
      }

      if (localStorage.getItem("dark-mode") === "false") {
        html.classList.add(lightModeClass);
        switchInput.checked = false;
        switchLabelText.textContent = "Light";
      }

      switchInput.addEventListener("input", function () {
        html.classList.toggle(lightModeClass);
        if (html.classList.contains(lightModeClass)) {
          switchLabelText.textContent = "Light";
          localStorage.setItem("dark-mode", "false");
        } else {
          switchLabelText.textContent = "Dark";
          localStorage.setItem("dark-mode", "true");
        }
      });

    </script>
    
    
</body>
</html>

