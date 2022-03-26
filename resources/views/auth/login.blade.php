<x-guest-layout>
    <!-- <x-auth-card> -->
        <!-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> -->

      

        <!-- <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form> -->
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>
            
                <!-- Main Header-->
            <header class="main-header header-style-four">
                <div class="header-top">
                    <div class="auto-container clearfix">
                        <div class="top-right">
                            <ul class="contact-info">
                                <li><span>PHONE :</span> (+84) 867-557-243</li>
                                <li><span>EMAIL :</span> <a href="#">Support@yourdomain.com</a></li>
                            </ul>  
                        </div>
                    </div>
                </div>

                <div class="header-lower">
                    <div class="auto-container">
                        <div class="main-box clearfix">
                            <div class="logo-box">
                                <div class="logo"><a href="{{url('/')}}"><img src="images/logo-2.png" alt="" title=""></a></div>
                            </div>

                            <div class="nav-outer">
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md ">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->      
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon flaticon-menu-button"></span>
                                        </button>
                                    </div>
                                    
                                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="dropdown"><a href="{{url('/')}}">Home</a>
                                                <ul>
                                                    <li class="dropdown"><a href="#">Header Styles</a>
                                                        <ul>
                                                            <li><a href="index-2.html">Header Style One</a></li>
                                                            <li><a href="index-3.html">Header Style Two</a></li>
                                                            <li><a href="index-4.html">Header Style Three</a></li>
                                                            <li><a href="index-5.html">Header Style Four</a></li>
                                                            <li><a href="index-6.html">Header Style Five</a></li>
                                                            <li><a href="index-7.html">Header Style Six</a></li>
                                                            <li><a href="about.html">Header Style Seven</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index-2.html">Home page 01</a></li>
                                                    <li><a href="index-3.html">Home page 02</a></li>
                                                    <li><a href="index-4.html">Home page 03</a></li>
                                                    <li><a href="index-5.html">Home page 04</a></li>
                                                    <li><a href="index-6.html">Home page 05</a></li>
                                                    <li><a href="index-7.html">Home page 06</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">About</a>
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="faq.html">FAQ's</a></li>
                                                    <li><a href="team.html">Our Team</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Services</a>
                                                <ul>
                                                    <li><a href="services.html">All Services</a></li>
                                                    <li><a href="service-detail.html">Commercial Design</a></li>
                                                    <li><a href="service-detail.html">Landescape Design</a></li>
                                                    <li><a href="service-detail.html">Interior Design</a></li>
                                                    <li><a href="service-detail.html">Complete Interior</a></li>
                                                    <li><a href="service-detail.html">House Interior</a></li>
                                                    <li><a href="service-detail.html">Service Detail</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Projects</a>
                                                <ul>
                                                    <li><a href="projects.html">Projects</a></li>
                                                    <li><a href="project-detail.html">Project Detail</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-classic.html">Blog Classic</a></li>
                                                    <li><a href="blog-detail.html">Blog Detail 01</a></li>
                                                    <li><a href="blog-detail-2.html">Blog Detail 02</a></li>
                                                    <li><a href="error-page.html">Error Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="current dropdown"><a href="#">Shop</a>
                                                <ul>
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-single.html">Product Details</a></li>
                                                    <li><a href="shoping-cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="login.html">Registration Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                                <div class="mega-menu">
                                                    <div class="mega-menu-bar row clearfix">
                                                        <div class="column col-lg-3 col-md-3 col-sm-12">
                                                            <h3>About</h3>
                                                            <ul>
                                                                <li><a href="about.html">About Us</a></li>
                                                                <li><a href="faq.html">FAQ's</a></li>
                                                                <li><a href="team.html">Our Team</a></li>
                                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                                <li><a href="login.html">Login</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="column col-lg-3 col-md-3 col-sm-12">
                                                            <h3>Services</h3>
                                                            <ul>
                                                                <li><a href="services.html">All Services</a></li>
                                                                <li><a href="service-detail.html">Commercial Design</a></li>
                                                                <li><a href="service-detail.html">Landescape Design</a></li>
                                                                <li><a href="service-detail.html">Complete Interior</a></li>
                                                                <li><a href="service-detail.html">Service Detail</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="column col-lg-3 col-md-3 col-sm-12">
                                                            <h3>Projects</h3>
                                                            <ul>
                                                                <li><a href="projects.html">Projects</a></li>
                                                                <li><a href="projects.html">Commercial Projects</a></li>
                                                                <li><a href="projects.html">Landescape Projects</a></li>
                                                                <li><a href="project-detail.html">Project Detail</a></li>
                                                                <li><a href="contact.html">Contact</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="column col-lg-3 col-md-3 col-sm-12">
                                                            <h3>Blog</h3>
                                                            <ul>
                                                                <li><a href="blog.html">Blog Grid</a></li>
                                                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                                                <li><a href="blog-detail.html">Blog Detail 01</a></li>
                                                                <li><a href="blog-detail-2.html">Blog Detail 01</a></li>
                                                                <li><a href="error-page.html">Error Page</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> 
                                    </div>
                                </nav><!-- Main Menu End-->                        

                                <!-- Outer Box-->
                                <div class="outer-box">
                                    <!--Search Box-->
                                    <div class="search-box-outer">
                                        <div class="dropdown">
                                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                                <li class="panel-outer">
                                                    <div class="form-container">
                                                        <form method="post" action="#">
                                                            <div class="form-group">
                                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--End Main Header -->
            
            <!--Page Title-->
            <section class="page-title" style="background-image:url(images/background/10.jpg);">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="title-box">
                            <h1>Login</h1>
                            <span class="title">The Interior speak for themselves</span>
                        </div>
                        <ul class="bread-crumb clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->
         
            <!--Login Section-->
            <section class="login-section">
                <div class="auto-container">
                <x-auth-session-status class="mb-4 text-danger" :status="session('status')" />

                <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                    <div class="row clearfix">
                    
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <h2>Login</h2>
                            
                            <!-- Login Form -->
                            <div class="login-form">
                                <!--Login Form-->
                                <form method="POST" action="{{ route('login') }}">
                                @csrf
                                    <div class="form-group">
                                        <label>Username or Email Address</label>
                                        <input type="text" id="email" name="email" :value="old('email')" placeholder="Name or Email " required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Enter Your Password</label>
                                        <input type="password" id="password"  name="password" placeholder="Password" required>
                                    </div>
                                    
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <div class="form-group check-box">
                                                <input id="remember_me" type="checkbox" name="remember" >&nbsp; <label for="account-option-1">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <div class="form-group no-margin">
                                                <button class="theme-btn btn-style-one" type="submit" name="submit-form">LOGIN</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="psw">Lost your password?</a>
                                    @endif
                                    </div>
                                </form>
                            </div>
                            <!--End Login Form -->
                        </div>
                        
                        
                    </div>
                </div>
            </section>
            <!--End Login Section-->

            <!-- Main Footer -->
            <footer class="main-footer alternate" style="background-image: url(images/background/5.jpg);">
                <div class="auto-container">
                    <!--Widgets Section-->
                    <div class="widgets-section">
                        <div class="row">
                            <!--Big Column-->
                            <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <!--Footer Column-->
                                    <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget about-widget">
                                            <div class="footer-logo">
                                                <figure>
                                                    <a href="index-2.html"><img src="images/footer-logo.png" alt=""></a>
                                                </figure>
                                            </div>
                                            <div class="widget-content">
                                                <div class="text">Contra and layouts, in content of dummy text is nonsensical.typefaces of dummy text is appearance of different general the content of dummy text is nonsensical. typefaces of dummy text is nonsensical.</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--Footer Column-->
                                    <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget recent-posts">
                                            <h2 class="widget-title">Recent Posts</h2>
                                            <!--Footer Column-->
                                            <div class="widget-content">
                                                <div class="post">
                                                    <div class="thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                                    <h4><a href="blog-detail.html">Triangle Concrete House on lake</a></h4>
                                                    <ul class="info">
                                                        <li>26 Aug</li>
                                                        <li>3 Comments</li>
                                                    </ul>
                                                </div>

                                                <div class="post">
                                                    <div class="thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                                                    <h4><a href="blog-detail.html">The Amazing Interior for the Hotel art</a></h4>
                                                    <ul class="info">
                                                        <li>26 Aug</li>
                                                        <li>3 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>         
                                </div>
                            </div>
                            
                            <!--Big Column-->
                            <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                                <div class="row clearfix">
                                    <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget links-widget">
                                            <h2 class="widget-title">Useful links</h2>
                                            <div class="widget-content">
                                                <ul class="list">
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="services.html">Services</a></li>
                                                    <li><a href="projects.html">Project</a></li>
                                                    <li><a href="blog-classic.html">News</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Footer Column-->
                                    <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget gallery-widget">
                                            <h2 class="widget-title">Recent Works</h2>
                                            <div class="widget-content">
                                                <div class="outer clearfix">
                                                    <figure class="image">
                                                        <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/work-thumb-1.jpg" alt=""></a>
                                                    </figure>

                                                    <figure class="image">
                                                        <a href="images/gallery/2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/work-thumb-2.jpg" alt=""></a>
                                                    </figure>

                                                    <figure class="image">
                                                        <a href="images/gallery/3.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/work-thumb-3.jpg" alt=""></a>
                                                    </figure>

                                                    <figure class="image">
                                                        <a href="images/gallery/4.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/work-thumb-4.jpg" alt=""></a>
                                                    </figure>

                                                    <figure class="image">
                                                        <a href="images/gallery/5.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/work-thumb-5.jpg" alt=""></a>
                                                    </figure>

                                                    <figure class="image">
                                                        <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/work-thumb-6.jpg" alt=""></a>
                                                    </figure>
                                                </div>
                                            </div>       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Footer Bottom-->
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="inner-container clearfix">
                            <div class="social-links">
                                <ul class="social-icon-two">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                            
                            <div class="copyright-text">
                            <a href="https://www.templateshub.net" target="_blank">Templates Hub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Main Footer -->

        </div>
    <!-- </x-auth-card> -->
</x-guest-layout>
