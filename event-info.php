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

include_once("header.php");

$_REQUEST["meta_title"]="";

$_REQUEST["meta_desc"]="Brilliants&#039; Convent Senior Secondary School";

$_REQUEST["link_cano"]="https://www.brilliantsconvent.com/event-info.php";

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
					<img src="images/events/events.jpg">
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out"><?php echo $btitle; ?></h1>
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
		<li class="list-group-item title" aria-current="true">Events Name</li>
		<?php  
			        $info_query ="SELECT * FROM  events_heading ORDER BY heading_order ASC";

			        $event_info=mysqli_query($con,$info_query);

					while ($details=mysqli_fetch_assoc($event_info)){ ?>
							<li class="list-group-item list-group-item-action">
			  			<a href="<?php echo 'event-info.php?page='.$details['heading_alias'] ?>"><?php echo ucfirst($details['heading_alias']); ?></a>
			  			</li>
			  <?php  } ?>
	</ul>
</div>
	<div class="col-lg-9 col-md-12 bcs-card">
<?php 
$pageurl = $_GET['page'];
$event_query ="SELECT * from events_heading  where heading_alias = '".$pageurl ."'";
              $eventsql = mysqli_query($con,$event_query);
              while ($page = mysqli_fetch_assoc($eventsql)){ ?>
<div class="card acd-card">
  <h5 class="card-header"><?php  echo ucfirst($page['heading']); ?></h5>
  <div class="card-body">
  	<div class="row">
<div class="col-md-12">
	<?php if(!empty($page['event_desc'])) { ?>
		    <p> <?php  echo $page['event_desc']; ?></p>
		    <?php  } ?>
		</div>
  	</div>
<div class="row">
	<?php 
	$eventsinfo = "SELECT * from events_info  where events_heading_id = '".$page['id']."'";
              	$i=1;
              	$sql = mysqli_query($con,$eventsinfo);
              	 while ($info = mysqli_fetch_assoc($sql)){ ?>

			 <div class="col-md-4 col-sm-6">

			   <div class="thumbnail">

			   <a href="/<?php echo $info['image_path'] ?>" class="image-popup rs-animation-fade">

			    <img src="/<?php echo $info['image_path'] ?>" alt="thumb" class="img-fluid img-thumbnail">

			 </a>

			   </div><!--thumb-->

			 </div><!--colms-4-->
			 <?php  } ?>          

          </div>
  </div>
</div>
<?php  }  ?>

	</div>
</div>


            </div>
        </div>
        <!-- About Us End -->
    
<!-- ======= Footer ======= -->       
<?php include_once("footer.php");?>
