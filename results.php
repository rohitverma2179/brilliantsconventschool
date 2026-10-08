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

  $page = $_GET["page"];

  $_REQUEST["meta_title"] = "Results :: Class-" . $page;

  $_REQUEST["meta_desc"] = "Brilliants&#039; Convent Senior Secondary School";

  $_REQUEST["link_cano"] = "https://www.brilliantsconvent.com/results.php?Class=" . $page;

  if ($page == "10") {
    $b_banner = "Class-banner.jpg";
    $b_title = "Class 10 Results";
    $idac = "8";
    $idre = "1";
  }
  if ($page == "12") {
    $b_banner = "Class-banner.jpg";
    $b_title = "Class 12 Results";
    $idac = "8";
    $idre = "2";
  }

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
        <img src="images/academics/<?php echo $b_banner; ?>">
        <div class="slide-content">
          <div class="display-table">
            <div class="display-table-cell">
              <div class="container text-center">
                <h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out"><?php echo $b_title; ?></h1>
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
            <li class="list-group-item title text-uppercase">Results</li>
            <li class="list-group-item list-group-item-action <?php echo $idre == '1' ? 'active' : '' ?>">
              <a href="results.php?page=10">Class 10 Results</a>
            </li>
            <li class="list-group-item list-group-item-action <?php echo $idre == '2' ? 'active' : '' ?>">
              <a href="results.php?page=12">Class 12 Results</a>
            </li>

          </ul>
        </div>
        <div class="col-lg-9 col-md-12 bcs-card">
          <div class="card">
            <h5 class="card-header text-uppercase"><?php echo $b_title; ?></h5>
            <div class="card-body">

              <?php if ($page == "10") { ?>
                <p class="card-text text-center">The Management, Staff & Students of
                  <br>
                  BRILLIANTS’ CONVENT
                  <br>
                  CONGRATULATE
                  <br>
                  X class students for giving 100% result in their C.B.S.E Exams
                </p>
                <p class="card-text text-center"><a href="pdf/469.pdf" class="btn btn-outline-success" target="blank">SUPER ACHIEVERS</a></p>
              <?php } ?>

              <?php if ($page == "12") { ?>
                <p class="card-text text-center">The Management, Staff & Students of
                  <br>
                  BRILLIANTS’ CONVENT
                  <br>
                  CONGRATULATE
                  <br>
                  XII class students for giving 100% result in their C.B.S.E Board Exams
                </p>
                <p class="card-text text-center"><a href="result-and-academics/class-12-final.pdf" target="_blank" class="btn btn-outline-success">SUPER ACHIEVERS</a></p>
              <?php } ?>
              <?php if ($page == "12") { ?>
                <p class="card-text text-center">The Management, Staff & Students of
                  <br>
                  BRILLIANTS’ CONVENT
                  <br>
                  CONGRATULATE
                  <br>
                  XII class students for giving 100% result in their C.B.S.E Board Exams
                </p>
                <p class="card-text text-center"><a href="pdf/414.pdf" class="btn btn-outline-success" target="_blank">SUPER ACHIEVERS</a></p>
              <?php } ?>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- About Us End -->

  <!-- ======= Footer ======= -->
  <?php include_once("footer.php"); ?>