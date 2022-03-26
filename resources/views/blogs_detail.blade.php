<x-guest-layout>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        
        @include('layouts.guestNavigation')

        
        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/10.jpg);">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>News Detail</h1>
                        <span class="title">The Interior speak for themselves</span>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Blog Detail</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Sidebar Page Container -->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-detail">
                            <!-- News Block -->
                            <div class="news-block-two">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="images/resource/blog-post-1.jpg" alt=""></figure>
                                    </div>
                                    <div class="caption-box">
                                        <div class="inner">
                                            <h3>In Good Taste: Mark Finlay Architects & Interiors.</h3>
                                            <ul class="info">
                                                <li>06 June 2018,</li>
                                                <li><a href="blog-detail-2.html">John Smith,</a></li>
                                                <li><a href="blog-detail-2.html">3 Commets</a></li>
                                            </ul>
                                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                                            <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on integration.</p>
                                            <blockquote>
                                                <i class="icon fa fa-quote-left"></i> Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks and mortar solutions without functional solutions.</blockquote>
                                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tags -->
                            <div class="tags clearfix">
                                <span class="title">Tags:</span>
                                <ul>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Financial</a></li>
                                    <li><a href="#">Life</a></li>
                                    <li><a href="#">Investment</a></li>
                                </ul>
                            </div>

                            <!-- Share Option -->
                            <div class="share-option">
                                <span class="title">Share This:</span>
                                <ul class="social-icon-colored clearfix">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google Plus</a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i>Pinterest</a></li>
                                    <li class="mail"><a href="#"><i class="fa fa-envelope"></i>Mail to Friends</a></li>
                                </ul>
                            </div>
                            <!-- Comments Area -->
                            <div class="comments-area">
                                <div class="group-title"><h2>Comments (4)</h2></div>
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/thumb-4.jpg" alt=""></div> 
                                        <div class="comment-info">
                                            <div class="name">Rayan Collins</div>
                                            <div class="date">November 6, 2017</div>
                                        </div>
                                        <div class="text">It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out.</div>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>

                                <div class="comment-box reply-comment">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/thumb-5.jpg" alt=""></div> 
                                        <div class="comment-info">
                                            <div class="name">Adrene Rich</div>
                                            <div class="date">November 6, 2017</div>
                                        </div>

                                        <div class="text">It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out.</div>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>

                                <div class="comment-box reply-comment reply">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/thumb-5.jpg" alt=""></div> 
                                        <div class="comment-info">
                                            <div class="name">Silvia Plath</div>
                                            <div class="date">November 6, 2017</div>
                                        </div>

                                        <div class="text">It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out.</div>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>

                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="images/resource/thumb-4.jpg" alt=""></div> 
                                        <div class="comment-info">
                                            <div class="name">Rayan Collins</div>
                                            <div class="date">November 6, 2017</div>
                                        </div>
                                        <div class="text">It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out.</div>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                            </div>

                            <!--Comment Form-->
                            <div class="comment-form">
                                <div class="group-title">
                                    <h2>Leave a Comment</h2>
                                </div>
                                <form method="post" action="#"> 
                                    <div class="form-group">
                                        <input type="text" name="username" placeholder="Name" required="">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Mail Address" required="">
                                    </div>

                                    <div class="form-group">
                                        <textarea name="message" placeholder="Your Comments"></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Post Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar default-sidebar">
                            
                            <!--search box-->
                            <div class="sidebar-widget search-box">
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search....." required="">
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>

                            <!-- Categories -->
                            <div class="sidebar-widget categories">
                                <div class="sidebar-title"><h3>Catagories</h3></div>
                                <ul class="cat-list">
                                    <li><a href="#">Residential <span>25</span></a></li>
                                    <li><a href="#">Commercial <span>20</span></a></li>
                                    <li class="active"><a href="#">Corporate <span>10</span></a></li>
                                    <li><a href="#">Hospitality <span>15</span></a></li>
                                    <li><a href="#">Restaurant <span>10</span></a></li>
                                    <li><a href="#">Industrial <span>05</span></a></li>
                                </ul>
                            </div>

                            <!-- Latest News -->
                            <div class="sidebar-widget latest-news">
                                <div class="sidebar-title"><h3>Recent Post</h3></div>
                                <div class="widget-content">
                                    <article class="post">
                                        <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
                                        <h3><a href="blog-detail.html">Hardood Is The Best For Floor</a></h3>
                                        <div class="post-info">by John Doe</div>
                                    </article>

                                    <article class="post">
                                        <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-4.jpg" alt=""></a></div>
                                        <h3><a href="blog-detail.html">Best Floor Service With Chepaest Price</a></h3>
                                        <div class="post-info">by John Doe</div>
                                    </article>
                                </div>
                            </div>

                            <!-- Tags -->
                            <div class="sidebar-widget tags">
                                <div class="sidebar-title"><h3>Keywords</h3></div>
                                <ul class="tag-list clearfix">
                                    <li><a href="#">Chair</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li><a href="#">Bad</a></li>
                                    <li><a href="#">Dressing</a></li>
                                    <li><a href="#">furnitures</a></li>
                                    <li><a href="#">MARBAL</a></li>
                                    <li><a href="#">Repair</a></li>
                                </ul>
                            </div>              
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar Container -->

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