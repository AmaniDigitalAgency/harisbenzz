<?php
	require('includes/config.php');
	if(isset($_GET['id']) && isset($_GET['name'])){
		$listingId = (int)$_GET["id"];
		$getListing = $db->query("SELECT * FROM listings WHERE listing_id = '$listingId'");
		if($getListing->num_rows == 1){
			$l = $getListing->fetch_object();
			$pageTitle = $l->listing_title;
			$getListingImages  = $db->query("SELECT * FROM images WHERE listing_id = '$listingId'");
			$listingImages = [];
			if($getListingImages->num_rows){
				while($img = $getListingImages->fetch_object()){
					$listingImages[] = $img;
				}
			}			
		}else{
			header('Location: '.$url.'listings');
			exit();
		}		
	}else{
		header('Location: '.$url.'listings');
		exit();
	}
	
?>	
<? include ('includes/head-start.php');?> 

<? include ('includes/head-end.php');?>  


	<section class="page-title centred" style="background-image: url('<?=$url;?>dashboard/listing-uploads/<?=$l->listing_picture;?>'); min-height: 90vh;">
		<!----div class="rotate-text">Exterior & Interionr Design</div----->
		<div class="container">
			<div class="info-content details">
				<div id="infoContent">
					<h5><?=$l->listing_title;?></h5>
					<h6> <?=$l->listing_location;?> </h6> 
					<h2 class = "list-price"> $<?=number_format($l->listing_price);?> USD </h2> 
					<?
						//we get an array of amenities
					?>
					<ul>
						<li>4 <i class = "fa fa-bed"></i> Beds </li>  
						<li>4 <i class = "fa fa-shower"></i> Baths  </li>  
						<li> 5,464<i class = "fa fa-bed"></i> Lot Size  </li>  
					</ul>
				</div>
				<h3 class = "close-content" id = "closeContent" onclick="showHideInfoContent('hide')"> Hide Details </h2> 
			</div>
			<div class="info-content bg-transparent" onclick="showHideInfoContent('show')" style="display: none;">	
				<h3 class="openContent" id="openContent"> Show Details </h2> 
			</div>
			<div class="content-box">
				<h1><img src = "<?=$url;?>images/logo.png" style = "height: 50px;"></h1>
			</div>
		</div>
    </section>	
<section class="single-project single-project-1" style="margin-top:-120px;">
	<div class="container">
		<div class="inner-content">
			<div class="row">
				<div class="col-lg-6">
					<div class="top-content">
						<div class="row">
							<div class="col-12 content-column">
								<div class="content-box" style="background: #ffffffe8;padding: 30px; min-height: 80vh;">
									<h4><?=$l->listing_title;?></h4>
									<div class="text">
										<p><?=$l->listing_details;?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="lower-content">
						<div class="row">
						<? if(count($listingImages)): foreach($listingImages as $img):?>
							<div class="col-md-6">
                            	<div class="project-block-one" style="margin-bottom: 15px;">
									<div class="inner-box">
										<figure class="image-box">
											<img src="<?=$url;?>dashboard/listing-uploads/<?=$img->file_name;?>" style="height: 250px; object-fit: cover;" alt="">
										</figure>
										<div class="caption-box">
											<h4> </h4>
										</div>
										<div class="text"></div>
										<div class="icon-box"><a href="<?=$url;?>dashboard/listing-uploads/<?=$img->file_name;?>" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-expanding-two-opposite-arrows-diagonal-symbol-of-interface"></i></a>
										</div>
									</div>
								</div>
							</div>
						<? endforeach; endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<? include ('includes/foot-start.php');?> 
<script src="<?=$url;?>js/jquery.fancybox.js"></script>
<script src="<?=$url;?>js/appear.js"></script>
<script src="<?=$url;?>js/parallax.min.js"></script> 
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
<? include ('includes/foot-end.php');?> 