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

$gtypeid = $_GET['id'];  
$g_query = "SELECT gallery_name from gallery  where id = '".$gtypeid."'";
$gallerysql = mysqli_query($con,$g_query);
$page = mysqli_fetch_assoc($gallerysql);


$idquery = "SELECT ID FROM gallery_type WHERE gallery_id IN ($gtypeid)";
$imdid = mysqli_query($con, $idquery);
$IDSGALRTYTYPE = []; // initialize array

while ($row = mysqli_fetch_assoc($imdid)) {
    $IDSGALRTYTYPE[] = $row['ID']; // store each ID value
}

$_REQUEST["meta_title"]=" ";

$_REQUEST["meta_desc"]="Brilliants&#039; Convent Senior Secondary School";

$_REQUEST["link_cano"]="https://www.brilliantsconvent.com/gallery-image.php";

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
									<h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out"><?php  echo $page['gallery_name'];?></h1>
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
	<div class="col-lg-3 col-md-12 bcs-list-group d-none d-lg-block" style="display:none !important;">

	<ul class="list-group">
		<li class="list-group-item title" aria-current="true"><?php  echo $page['gallery_name'];?></li>							

			   <?php  

			        $gid = $_GET['id']; 

			        $ids=array();

					echo $g_query = "SELECT * from gallery_type where id = '".$gid."'";

				    $gallerysql = mysqli_query($con,$g_query);

			        while ($page_info = mysqli_fetch_assoc($gallerysql)){ 

			        	$ids[] = $page_info['gallery_type_id'];
			        	
			        	echo "<pre>"; print_r($page_info['id']);
			        }

			         ?>
						<li class="list-group-item list-group-item-action">
			  			<a href="<?php //echo 'gallery-image.php?id='.$page['id']; ?>"><?php  //echo $page['gallery_heading']; ?></a>
			  			</li>
			  <?php  ?>
	</ul>
</div>

<div class="col-lg-2 col-md-12 bcs-list-group d-none d-lg-block">

<ul class="list-group">
		<li class="list-group-item title" aria-current="true">Gallery</li>
							<?php  
			        $info_query ="SELECT * FROM gallery WHERE gallery_name NOT LIKE '%2017%' AND gallery_name NOT LIKE '%2018%' AND gallery_name NOT LIKE '%2019%' ORDER BY id DESC";
			        $gallery_info=mysqli_query($con,$info_query);
							while ($details=mysqli_fetch_assoc($gallery_info)){ ?>
							<li class="list-group-item list-group-item-action <?php echo $details['id']==$gid?'active':''?>">
			  			<a href="<?php echo 'gallery-image.php?id='.$details['id'];?>"><?php  echo $details['gallery_name']; ?></a>
			  			</li>
			  <?php  } ?>
	</ul>
</div>

	<div class="col-lg-10 col-md-12 bcs-card">
<div class="card acd-card">
  <h5 class="card-header"><?php   echo $page['gallery_name'];?></h5>
  <div class="card-body">

<?php
$current_url = $_SERVER['REQUEST_URI'];
// Get page number from URL
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 9; // Images per page
$start = ($page - 1) * $limit;

// Convert array to comma separated IDs
$idss = implode(',', $IDSGALRTYTYPE);

// Count total images
$countQuery = "SELECT COUNT(*) AS total FROM gallery_images WHERE gallery_type_id IN ($idss)";
$countResult = mysqli_query($con, $countQuery);
$totalRow = mysqli_fetch_assoc($countResult);
$totalImages = $totalRow['total'];

// Calculate total pages
$totalPages = ceil($totalImages / $limit);

// Get images with LIMIT
$gallerimage = "SELECT * FROM gallery_images 
                WHERE gallery_type_id IN ($idss)
                ORDER BY id DESC
                LIMIT $start, $limit";

$gallerysql = mysqli_query($con, $gallerimage);
?>

<div class="row">
    <?php while ($image_info = mysqli_fetch_assoc($gallerysql)) { ?>
        <div class="col-md-4 col-sm-6 pb-4">
            <div class="thumbnail bcs-gallery">
                <a href="/<?php echo $image_info['gallery_image']; ?>" class="image-popup rs-animation-fade">
                    <img src="/<?php echo $image_info['gallery_image']; ?>" alt="thumb" class="img-fluid img-thumbnail">
                </a>
            </div>
        </div>
    <?php } ?>
</div>

<!-- Pagination Links -->
<div class="pagination mt-4">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <!-- Previous Button -->
            <?php if ($page > 1) { ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo $current_url;?>&page=<?php echo ($page - 1); ?>">Previous</a>
                </li>
            <?php } ?>
            <!-- Page Numbers -->
            <?php for ($p = 1; $p <= $totalPages; $p++) { ?>
                <li class="page-item <?php if ($p == $page) echo 'active'; ?>">
                    <a class="page-link" href="<?php echo $current_url;?>&page=<?php echo $p; ?>"><?php echo $p; ?></a>
                </li>
            <?php } ?>
            <!-- Next Button -->
            <?php if ($page < $totalPages) { ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo $current_url;?>&page=<?php echo ($page + 1); ?>">Next</a>
                </li>
            <?php } ?>
        </ul>
    </nav>
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
