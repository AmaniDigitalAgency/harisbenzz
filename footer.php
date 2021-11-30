    <footer class="main-footer" style="background-image: url(images/background/footer-bg-a.jpg); background-position: top center; background-attachment: fixed; background-size: cover;">
        <div class="container">
            <div class="widget-section">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="contact-widget footer-widget">
                            <div class="widget-content">
								<img src = "images/logo.png" style = "height: 40px; margin-bottom: 20px;">
                                <p> Our work in the real estate field speaks for itself. With a lengthy experience coupled with our desire, ability and affinity for the provision of high end property management and maintenace services, we are the number one choice for those looking for a stress free real estate experience in Kampala and beyond.  </p>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="contact-widget footer-widget">
                            <h4 class="widget-title"> Important Links </h4>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="widget-content">
                                        <ul class="list">  
                                            <li><a href = "harisbenzz.com"> Home </a></li>
                                            <li><a href="listings"> Listings  </a></li>  
                                            <li><a href="about"> About Us  </a></li>  
                                            <li><a href="blog"> Blog  </a></li>  
                                            <li><a href="contact"> Contact Us  </a></li>  
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="widget-content">
                                        <ul class="list">  
                                            <li><a href = "harisbenzz.com"> Home </a></li>
                                            <li><a href="listings"> Listings  </a></li>  
                                            <li><a href="about"> About Us  </a></li>  
                                            <li><a href="blog"> Blog  </a></li>  
                                            <li><a href="contact"> Contact Us  </a></li>  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="contact-widget footer-widget">
                            <h4 class="widget-title"> Get In Touch  </h4>
                            <div class="widget-content">
                                <ul class="list">
                                        <li><a href="tel:256772487258"><i class = "flaticon-phone-call-1"></i> (+256 ) 772 - 487- 258</a></li>   
                                        <li><a href="mailto:info@harisbenzz.com"><i class = "flaticon-email"></i> info@harisbenzz.com</a></li>   
                                        <li><a href="mailto:info@harisbenzz.com"><i class = "fa fa-map-marker-alt"></i> Kisoboka Building, Muyenga </a></li>   
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="footer-bottom centred border-top pt-3">
                <div class="copyright">&copy; <a href="javascript:void(0)"> HARIS BENZZ </a> 2021. All Rights Reserved. </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>

	<div class = "social-media">
		<ul class = "social-icons">
			<li class = "" style = "margin-bottom: 25px;"><a href = "http://www.facebook.com/harisbenzz" target  = "_blank"><i class = "fab fa-facebook"></i></a></li> 
			<li class = ""><a href = "https://twitter.com/haris_benzz" target  = "_blank"> <i class = "fab fa-twitter"></i></a></li>  
			<li class = ""><a href = "https://www.linkedin.com/in/ACoAADhmPg8BJT-zetFelDh8LSeAJ248Ep8Jdsw?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAADhmPg8BJT-zetFelDh8LSeAJ248Ep8Jdsw&lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3BHmfs8mwXQQawpOEzpDw89A%3D%3D" target  = "_blank"> <i class = "fab fa-linkedin"></i></a></li> 
			<li class = ""><a href = "https://www.instagram.com/harisbenzz/" target  = "_blank"> <i class = "fab fa-instagram"></i></a></li> 
		</ul>
	</div>



<!-- jequery plugins -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<!--Revolution Slider-->
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/revolution.extension.actions.min.js"></script>
<script src="revolution/js/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/revolution.extension.migration.min.js"></script>
<script src="revolution/js/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>

<!-- main-js -->
<script src="js/script.js"></script>
<script src="js/custom.js"></script>
<script>
	function showHideInfoContent(option){
		if(option==='hide'){
			$('.info-content.details').hide(500, 'linear',function(){
				$('.info-content.bg-transparent').show();
			});		
		}else{
			$('.info-content.bg-transparent').hide();
			$('.info-content.details').show(500, 'linear');
		}
	}
	$(document).ready(function(){
		if($('.info-content').length){
			$('.info-content').each(function(){
				if($(this).hasClass('details')){
					setTimeout(function(){						
						showHideInfoContent('hide')
					},7000);
				}
			})
		}
	})
</script>
</body><!-- End of .page_wrapper -->
</html>
