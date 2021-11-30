<?php
	$page = "Blog";  
	include "header.php"; 
	include "components/breadcrumb.php";   
?> 

    <section class="sidebar-page-container blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-single-content">
                        <div class="inner-box">
                            <div class="content-style-one">
                                <div class="news-block-one p-3">
                                    <figure class="image-box"><img src="images/resource/news-12.jpg" alt=""></figure>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            <li><i class="far fa-calendar-alt"></i>21 Feb 2019</li>
                                            <li><i class="fa fa-tag"></i>Architecture, Intorior</li>
                                        </ul>
                                        <h4>Suspendisse imperdiet quis elit vitae viverra. Suspendisse at ultrices augue. Donec nec tristique augue. In eget viverra urna</h4>
                                        <div class="text">
                                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of me. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
							
                            <div class="post-share-option clearfix">
                                <div class="pull-left">
                                    <ul class="tags">
                                        <li><i class="fas fa-tags"></i>Tags:</li>
                                        <li><a href="#">Freebies</a>,</li>
                                        <li><a href="#">News</a>,</li>
                                        <li><a href="#">Web Design</a>,</li>
                                        <li><a href="#"> Wordpress</a></li>
                                    </ul>
                                </div>
								
                            </div>
                            <div class="post-controls">
                                <div class="inner centred">
                                    <div class="prev-post"><a href="#">PREV ARTICLE</a></div>
                                    <div class="scroll-btn centred scroll-to-target" data-target=".blog-single">BACK TO TOP <i class="far fa-arrow-alt-circle-up"></i></div>
                                    <div class="next-post"><a href="#">NEXT ARTICLE</a></div>
                                </div>
                            </div>
							
							
							
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar">
                        <div class="sidebar-search sidebar-widget">
                            <div class="widget-content">
                                <div class="form-group">
                                    <form action="#" method="post">
                                        <input type="search" name="search-field" placeholder="Type your search" required>
                                        <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
						
                        <div class="sidebar-post sidebar-widget">
                            <h3 class="sidebar-title">Popular Post</h3>
                            <div class="widget-content">
                                <div class="post">
                                    <figure class="thumb"><a href="blog-single.html"><img src="images/resource/post-1.jpg" alt=""></a></figure>
                                    <span class="date">April 6, 2019</span>
                                    <h5><a href="blog-single.html">Modern extension to brick house</a></h5>
                                </div>
                                <div class="post">
                                    <figure class="thumb"><a href="blog-single.html"><img src="images/resource/post-2.jpg" alt=""></a></figure>
                                    <span class="date">April 5, 2019</span>
                                    <h5><a href="blog-single.html">Morbi aliquam ornare erat, in tempor</a></h5>
                                </div>
                                <div class="post">
                                    <figure class="thumb"><a href="blog-single.html"><img src="images/resource/post-3.jpg" alt=""></a></figure>
                                    <span class="date">April 4, 2019</span>
                                    <h5><a href="blog-single.html">libero eleifend non. Mauris convallis sodales</a></h5>
                                </div>
                            </div>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	
<?php
	include "footer.php";
?>