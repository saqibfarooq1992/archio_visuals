 <!--Page Title-->
 <x-guest-layout>
     <div class="page-wrapper">
         <!-- Preloader -->
         <div class="preloader"></div>

         @include('layouts.guestNavigation')


         <!--Page Title-->
         <section class="page-title" style="background-image:url(storage/{{$projects->banner_image}});">
             <div class="auto-container">
                 <div class="inner-container clearfix">
                     <div class="title-box">


                         <h1>All Projects</h1>
                         <span class="title">{{$projects->slogan}}</span>
                     </div>
                     <ul class="bread-crumb clearfix">
                         <li><a href="index-2.html">{{$projects->title}}</a></li>
                         <li>Projects</li>
                     </ul>
                 </div>
             </div>
         </section>
         <!--End Page Title-->

         <!-- Projects Section -->
         <section class="projects-section alternate">
             <div class="auto-container">
                 <!--MixitUp Galery-->
                 <div class="mixitup-gallery">
                     <!--Filter-->
                     <div class="filters text-center clearfix">
                         <ul class="filter-tabs filter-btns clearfix">
                             <li class="active filter" data-role="button" data-filter="all">All</li>
                             <li class="filter" data-role="button" data-filter=".commercial">COMMERCIAL</li>
                             <li class="filter" data-role="button" data-filter=".landescape">LANDESCAPE</li>
                             <li class="filter" data-role="button" data-filter=".interior">INTERIOR</li>
                             <li class="filter" data-role="button" data-filter=".architecture">ARCHITECTURE</li>
                         </ul>
                     </div>

                     <div class="filter-list row">
                         <!-- Project Block -->
                         <div class="project-block all mix interior architecture landescape col-lg-4 col-md-6 col-sm-12">
                             <div class="image-box">
                                 <figure class="image"><img src="storage/{{$projects->picture_slider_1}}" alt=""></figure>
                                 <div class="overlay-box">
                                     <h4><a href="project-detail.html">{{$projects->project_name}} <br>Project</a></h4>
                                     <div class="btn-box">
                                         <a href="images/gallery/2-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                         <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                                     </div>
                                     <span class="tag">Architecture</span>
                                 </div>
                             </div>
                         </div>

                         <!-- Project Block -->
                         <div class="project-block all mix landescape architecture col-lg-8 col-md-6 col-sm-12">
                             <div class="image-box">
                                 <figure class="image"><img src="images/gallery/2-2.jpg" alt=""></figure>
                                 <div class="overlay-box">
                                     <h4><a href="project-detail.html">{{$projects->project_name}}<br>Project</a></h4>
                                     <div class="btn-box">
                                         <a href="images/gallery/2-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                         <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                                     </div>
                                     <span class="tag">Architecture</span>
                                 </div>
                             </div>
                         </div>

                         <!-- Project Block -->
                         <div class="project-block all mix landescape interior col-lg-6 col-md-6 col-sm-12">
                             <div class="image-box">
                                 <figure class="image"><img src="images/gallery/2-3.jpg" alt=""></figure>
                                 <div class="overlay-box">
                                     <h4><a href="project-detail.html">Laxury Home <br>Project</a></h4>
                                     <div class="btn-box">
                                         <a href="images/gallery/2-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                         <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                                     </div>
                                     <span class="tag">Architecture</span>
                                 </div>
                             </div>
                         </div>

                         <!-- Project Block -->
                         <div class="project-block all mix landescape commercial architecture col-lg-6 col-md-6 col-sm-12">
                             <div class="image-box">
                                 <figure class="image"><img src="images/gallery/2-4.jpg" alt=""></figure>
                                 <div class="overlay-box">
                                     <h4><a href="project-detail.html">Laxury Home <br>Project</a></h4>
                                     <div class="btn-box">
                                         <a href="images/gallery/2-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                         <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                                     </div>
                                     <span class="tag">Architecture</span>
                                 </div>
                             </div>
                         </div>

                         <!-- Project Block -->
                         <div class="project-block all mix landescape interior col-lg-4 col-md-6 col-sm-12">
                             <div class="image-box">
                                 <figure class="image"><img src="images/gallery/2-5.jpg" alt=""></figure>
                                 <div class="overlay-box">
                                     <h4><a href="project-detail.html">Laxury Home <br>Project</a></h4>
                                     <div class="btn-box">
                                         <a href="images/gallery/2-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                         <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                                     </div>
                                     <span class="tag">Architecture</span>
                                 </div>
                             </div>
                         </div>

                         <!-- Project Block -->
                         <div class="project-block all mix landescape commercial interior col-lg-4 col-md-6 col-sm-12">
                             <div class="image-box">
                                 <figure class="image"><img src="images/gallery/2-6.jpg" alt=""></figure>
                                 <div class="overlay-box">
                                     <h4><a href="project-detail.html">Laxury Home <br>Project</a></h4>
                                     <div class="btn-box">
                                         <a href="images/gallery/2-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                         <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                                     </div>
                                     <span class="tag">Architecture</span>
                                 </div>
                             </div>
                         </div>

                         <!-- Project Block -->
                         <div class="project-block all mix landescape interior col-lg-4 col-md-6 col-sm-12">
                             <div class="image-box">
                                 <figure class="image"><img src="images/gallery/2-7.jpg" alt=""></figure>
                                 <div class="overlay-box">
                                     <h4><a href="project-detail.html">Laxury Home <br>Project</a></h4>
                                     <div class="btn-box">
                                         <a href="images/gallery/2-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                         <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                                     </div>
                                     <span class="tag">Architecture</span>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>

                 <!--Post Share Options-->
                 <div class="styled-pagination">
                     <ul class="clearfix">
                         <li class="prev-post"><a href="#"><span class="fa fa-long-arrow-left"></span> Prev</a></li>
                         <li><a href="#">1</a></li>
                         <li class="active"><a href="#">2</a></li>
                         <li><a href="#">3</a></li>
                         <li class="next-post"><a href="#"> Next <span class="fa fa-long-arrow-right"></span> </a></li>
                     </ul>
                 </div>
             </div>
         </section>



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