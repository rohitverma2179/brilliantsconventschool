<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Achievements</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
    .achievement h4{margin: 21px 0 !important;} 
    .space{margin-bottom:15px;display:flex;}        
    </style>
<?php 
$_REQUEST["meta_title"]="Achievements";

$_REQUEST["meta_desc"]="Brilliants&#039; Convent Senior Secondary School";

$_REQUEST["link_cano"]="https://www.brilliantsconvent.com/achievements.php";

include_once("header.php");?>
				<!-- Header Top End -->
			</header>
			<!--Header End-->
		</div>
        <!--Full width header End-->

		<!-- Slider Area Start -->
        <div id="rs-slider" class="slider-overlay-2">     
        	<div id="home-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="0" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
				<!-- Item 1 -->
				<div class="item active">
					<img src="images/achievement.jpg">
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">Achievements</h1>
								</div>
							</div>
						</div>
					</div>
				</div>

        	</div>         
        </div>
        <!-- Slider Area End -->

		<!-- About Us Start -->
        <div class="rs-about sec-spacer wow fadeInUp" data-wow-delay="0.5s">
            <div class="container">
<div class="row">
	<div class="col-lg-12 bcs-card">
<div class="card">
  <h5 class="card-header">Achievements</h5>
  <div class="card-body inner-discription">
  	<div class="row achievement">
  	    	<?php 
              $con = mysqli_connect("localhost","brilliantuser","brilliant@321","brilliantdb"); 
              $blog_data = "SELECT * FROM `achievement` order by id DESC";
              $blog_res=mysqli_query($con,$blog_data);
              while($result=mysqli_fetch_array($blog_res))
              {  ?>
<div class="col-md-12">
    <div class="sparator">
    <div class="row">
    <div class="col-md-4 col-sm-12">
     <figure class="figure">
      <img src="admin/uploads/<?php  echo $result['image']; ?>" alt="thumb" class="figure-img img-fluid">              
     </figure><!--thumbail-->
     </div><!--col-md-4-->
     <div class="col-md-8 col-sm-12">
         <h4><?php  echo $result['title']; ?></h4>
         <p><?php  echo $result['body']; ?></p>
     </div>
    </div><!--row-->
</div>
</div><!--col-md-12-->
        <?php  } ?>        
            </div>
  </div>
</div>

	</div>
</div>


            </div>
        </div>
        <!-- About Us End -->
    
<!-- ======= Footer ======= -->       
<?php include_once("footer.php");?>
