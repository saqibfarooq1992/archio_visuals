<x-guest-layout>
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    @include('layouts.guestNavigation')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(storage/{{$about->banner_image}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>{{$about->heading}}</h1>
                    <span class="title">{{$about->slogan}}</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section -->
    <section class="about-section" style="background-image: url(storage/{{$about->background_image}});">
        <div class="auto-container">
            <div class="row no-gutters">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                            <h2>ABOUT <br> US</h2>
                        </div>
                        <div class="image-box wow fadeInRight" data-wow-delay='600ms'>
                            <figure class="alphabet-img"><img src="storage/{{$about->picture_1}}" alt=""></figure>
                            <figure class="image"><img src="storage/{{$about->picture_2}}" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="content-box">
                            <div class="title">
                                <h3>{!!$about->short_description!!}</h3>
                            </div>
                            <div class="text">{!! $about->detail_description !!}</div>
                            <div class="link-box"><a href="about.html" class="theme-btn btn-style-one">{{$about->heading}}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- Fun Fact And Features -->
    <section class="fun-fact-and-features alternate"  style="background-image: url(images/background/3.jpg);">
        <div class="outer-box">
            <div class="auto-container">
                <!-- Fact Counter -->
                <div class="fact-counter">
                    <div class="row">
                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="14">0</span></div>
                                <h4 class="counter-title">Years of <br>Experience</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="237">0</span></div>
                                <h4 class="counter-title">Project <br>Taken</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="11">0</span>K</div>
                                <h4 class="counter-title">Twitter <br> Follower</h4>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                            <div class="count-box">
                                <div class="count"><span class="count-text" data-speed="5000" data-stop="12">0</span></div>
                                <h4 class="counter-title">Awards<br>won</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features -->
                <div class="features">
                    <div class="row">
                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-decorating"></span></div>
                                <h3><a href="service-detail.html">Perfect Design</a></h3>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                                <div class="link-box"><a href="service-detail.html">Read More</a></div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-plan"></span></div>
                                <h3><a href="service-detail.html">Carefully Planned</a></h3>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                                <div class="link-box"><a href="service-detail.html">Read More</a></div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-sketch-3"></span></div>
                                <h3><a href="service-detail.html">Smartly Execute</a></h3>
                                <div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                                <div class="link-box"><a href="service-detail.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!-- Testimonial Section Two-->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Testimonial</span>
                <h2>What Clients Says</h2>
            </div>

            <div class="testimonial-carousel-two owl-carousel owl-theme">
                <!-- Testimonial block two -->

                @foreach ($clients as $item)
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="text">I got an excellent design for my future home, from cooperation i was very pleased, everything was done at the highest level.Boldly I recommend to all this company.</div>
                            <div class="info-box">
                                <div class="thumb"><img src="storage/{{$item->picture}}" alt=""></div>
                                <h5 class="name">{{$item->name}}</h5>
                                <span class="date">July 28 - 2018</span>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <!--End Testimonial Section Two-->

    <!--Clients Section-->
    <section class="clients-section style-two">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    @foreach ($companies as $item)
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="storage/{{$item->picture}}" alt=""></a></figure></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

     <!-- Process Section -->
    <section class="process-section" style="background-image: url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="sec-title light">
                <span class="float-text">HOW WE WORK</span>
                <h2>Proven Process</h2>
            </div>
            <div class="row">
                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="count">01</span>
                        <h4><a href="service-detail.html">Concept</a></h4>
                        <div class="text">When an unknown printer took a galley of type and scrambled it to make a book.</div>
                        <div class="link-box"><a href="service-detail.html">Read More</a></div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="count">02</span>
                        <h4><a href="service-detail.html">Idea</a></h4>
                        <div class="text">When an unknown printer took a galley of type and scrambled it to make a book.</div>
                        <div class="link-box"><a href="service-detail.html">Read More</a></div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="count">03</span>
                        <h4><a href="service-detail.html">Design</a></h4>
                        <div class="text">When an unknown printer took a galley of type and scrambled it to make a book.</div>
                        <div class="link-box"><a href="service-detail.html">Read More</a></div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="count">04</span>
                        <h4><a href="service-detail.html">excecution</a></h4>
                        <div class="text">When an unknown printer took a galley of type and scrambled it to make a book.</div>
                        <div class="link-box"><a href="service-detail.html">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Process Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Our Team</span>
                <h2>Profect Expert</h2>
            </div>

            <div class="row clearfix">
                @foreach ($experts   as $item)
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="team.html"><img src="storage/{{$item->picture}}" alt=""></a></div>
                                <ul class="social-links">
                                    <li><a href="{{$item->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{$item->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{$item->gmail}}"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="{{$item->instagram}}"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="{{$item->whatsapp}}"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                                <h3 class="name"><a href="team.html">{{$item->name}}</a></h3>
                            </div>
                            <span class="designation">{{$item->designation}}</span>
                        </div>
                    </div>
                @endforeach




            </div>
        </div>
    </section>
    <!--End Team Section -->

    <!-- Offer Section -->
    <section class="offer-section" style="background-image: url(images/background/6.jpg);">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <span class="title">Special Offer</span>
                        <h2><span>How to save </span> <br>of money on repairs</h2>
                        <span class="discount">50%</span>
                        <div class="text">Fill out the form to download a book with 10 tips<br> on how to save your money</div>
                    </div>
                </div>

                <div class="form-column order-last col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="discount-form">
                            <!--Comment Form-->
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Massage"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">send Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Offer Section -->

    <!-- Video Section -->
    <section class="video-section style-two">
        <div class="outer-box">
            <div class="auto-container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="float-text">See Video</span>
                                <h2>Campaign Video</h2>
                            </div>
                            <span class="title">We Give You The Best</span>
                            <div class="text">Present all the speakers and participants in GenesisExpo`s beautiful layouts. Choose your favorite variant of layout and create your own. You can create also single speaker profile with all relevant information.</div>
                        </div>
                    </div>

                    <!-- Video Column -->
                    <div class="video-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="video-box">
                                 <figure class="image"><img src="images/resource/video-img.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play"></span></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Video Section -->

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
</x-guest-layout>
