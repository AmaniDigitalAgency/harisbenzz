<?php
	$page = "Blog";  
	include "header.php"; 
	include "components/breadcrumb.php";   
?> 

    <section class="news-section blog-grid">
        <div class="container">
            <div class="row">
<?php
	$i = 0;
	while ($i <6) {
?>
			
                <div class="col-lg-4 col-md-6 col-sm-12 news-block wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="news-block-one">
                        <figure class="image-box"><a href="#"><img src="images/resource/service-2.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="far fa-calendar-alt"></i>25 Feb 2019</li>
                                <li><i class="fa fa-tag"></i>Architecture, Intorior</li>
                            </ul>
                            <h4><a href="#">The 2019 Oscars justo Greenroom by  Rolex Goes Deep.</a></h4>
                        </div>
                    </div>
                </div>
<?php
	$i++;
	}
?>				
				
            </div>
        </div>
    </section>
	
<?php
	include "footer.php";
?>