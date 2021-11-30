<?php
	$page = "Listings";  
	include "header.php"; 
	include "components/breadcrumb.php"; 
	include "components/search.php";  
?> 
    <section class="service-style-two alternate-2">
        <div class="container">
            <div class="inner-content">
               
				
                <div class="row">
                
					
<?php listingspage("listings");?> 



                </div>
            </div>
        </div>
    </section>
	
    <section class="contact-section form-inquire pb-0">
        <div class="container">
            <div class="row"> 
            <div class="col-lg-4 offset-lg-2 col-md-12 content-column">
                <div class="sec-title">
                    <h1 style = "margin-bottom: 40px; color: #FFFFFF;">  Inquire About  <br><span> Our Listings  </span></h1>
                </div>
            </div>
                <div class="col-lg-8 offset-lg-2 col-sm-12 form-column">
                    <div class="contact-form-area">
                        <form method="post" action="#" id="contact-form"> 
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="your name" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="your mail" required>
                                </div>  
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message here..."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" name="submit-form">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
	

<?php
	//include "components/video.php";
	include "footer.php";
?>