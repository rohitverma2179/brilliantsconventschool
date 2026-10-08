<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<?php 

error_reporting(0);

// $page = $_GET["page"];

include_once("header.php");

   $gid = $_GET['id'];  

   $gallery_query ="SELECT * FROM  gallery  where id='".$gid."'";

   $gallery_info=mysqli_query($con,$gallery_query);

   $details=mysqli_fetch_object($gallery_info);   

$_REQUEST["meta_title"]="$details->gallery_name";

$_REQUEST["meta_desc"]="Brilliants&#039; Convent Senior Secondary School";

$_REQUEST["link_cano"]="https://www.brilliantsconvent.com/gallery.php";

   ?>
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
					<img src="images/bcs_gallery.jpeg">
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out"><?php echo $details->gallery_name; ?></h1>
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
	<div class="col-lg-3 col-md-12 bcs-list-group d-none d-lg-block">


	<ul class="list-group">
		<li class="list-group-item title" aria-current="true">Gallery</li>
							<?php  
			        $gid = $_GET['id']; 
					$g_query = "SELECT * from gallery_type where gallery_id = '".$gid."' ORDER BY id DESC";
				    $gallerysql = mysqli_query($con,$g_query);
			        while ($page = mysqli_fetch_assoc($gallerysql)){ ?>
							<li class="list-group-item list-group-item-action">
			  			<a href="<?php echo 'gallery-image.php?id='.$page['id']; ?>"><?php  echo $page['gallery_heading']; ?></a>
			  			</li>
			  <?php  } ?>
	</ul>
</div>
	<div class="col-lg-9 col-md-12 bcs-card">
<div class="card acd-card">
  <h5 class="card-header"><?php echo $details->gallery_name; ?></h5>
  <div class="card-body">
<div class="row">

	<?php 

		        $g_query = "SELECT * from gallery_type  where gallery_id = '".$gid."' ORDER BY id DESC";

				    $gallerysql = mysqli_query($con,$g_query);

			      while($page = mysqli_fetch_assoc($gallerysql)){					 

              $gimageid=$page['id'];

            $last_image ="SELECT * FROM  gallery_images where gallery_type_id= '".$gimageid."' ORDER BY id DESC LIMIT 1";

            $imagesql = mysqli_query($con,$last_image);

            while($image_info = mysqli_fetch_assoc($imagesql)){

				/* print"<pre>ram";

   print_r($image_info);   

   die();*/   

             ?>

			 <div class="col-md-4 col-sm-6">

			   <a href="<?php echo 'gallery-image.php?id='.$page['id']; ?>">

			   <div class="thumb text-center">

			    <img src="/<?php echo $image_info['gallery_image'];?>" alt="thumb">

				<p><?php echo $page['gallery_heading']; ?></p>

			   </div><!--thumb-->

			 </a>

			 </div><!--colms-4-->
			 <?php  }  }?>          

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
