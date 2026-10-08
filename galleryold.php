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

  $_REQUEST["meta_title"] = "Gallery";

  $_REQUEST["meta_desc"] = "Brilliants&#039; Convent Senior Secondary School";

  $_REQUEST["link_cano"] = "https://www.brilliantsconvent.com/gallery.php";

  include_once("header.php");
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
                <h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">Gallery</h1>
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
        <div class="col-lg-2 col-md-12 bcs-list-group d-none d-lg-block" style="display:none !important; visibility: hidden;">
          <ul class="list-group">
            <li class="list-group-item title" aria-current="true">Gallery</li>
            <?php
            $info_query = "SELECT * FROM  gallery ORDER BY id DESC";
            $gallery_info = mysqli_query($con, $info_query);
            while ($details = mysqli_fetch_assoc($gallery_info)) { ?>
              <li class="list-group-item list-group-item-action">
                <a href="<?php echo 'gallery-image.php?id=' . $details['id']; ?>"><?php echo $details['gallery_name']; ?></a>
              </li>
            <?php  } ?>
          </ul>
        </div>
        <div class="col-lg-12 col-md-12 bcs-card">
          <div class="card acd-card">
            <h5 class="card-header">Gallery</h5>
            <div class="card-body">
              <div class="row">
                <?php

                // Modify the query to exclude galleries from 2017, 2018, and 2019
                $gallery_query = "SELECT * FROM gallery WHERE gallery_name NOT LIKE '%2017%' AND gallery_name NOT LIKE '%2018%' AND gallery_name NOT LIKE '%2019%' ORDER BY id DESC";

                $gallery_info = mysqli_query($con, $gallery_query);

                while ($details = mysqli_fetch_assoc($gallery_info)) {
                  $images = "SELECT * FROM gallery_type WHERE gallery_id = '" . $details['id'] . "' ORDER BY id DESC LIMIT 1";
                  $gallery_images = mysqli_query($con, $images);

                  while ($info = mysqli_fetch_assoc($gallery_images)) {  ?>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                      <a href="<?php echo 'gallery-image.php?id=' . $info['gallery_id']; ?>">
                        <div class="thumb text-center">
                          <img src="/<?php echo $info['gallery_image_cover']; ?>" alt="thumb">
                          <p><?php echo ucfirst($details['gallery_name']); ?></p>
                        </div><!--thumb-->
                      </a>
                    </div><!--colms-4-->

                <?php }
                } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Us End -->

  <!-- ======= Footer ======= -->
<?php include_once("footer.php"); ?>