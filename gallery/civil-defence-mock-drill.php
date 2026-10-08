<!DOCTYPE html>
<html lang="en">

<head>
	<!-- meta tag -->
	<meta charset="utf-8">
	<meta name="description" content="">
	<!-- responsive tag -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="../">
	<?php

	error_reporting(0);

	// $page = $_GET["page"];

	$_REQUEST["meta_title"] = "Gallery";

	$_REQUEST["meta_desc"] = "Brilliants&#039; Convent Senior Secondary School";

	$_REQUEST["link_cano"] = "https://www.brilliantsconvent.com/gallery.php";

	include_once("../header.php");
	?>
	<!-- Header Top End -->
	<style type="text/css">
		:root {
			--primary-gradient: linear-gradient(135deg, #1f5c2e 0%, #2c6e49 100%);
			--accent-color: #7fb069;
			--text-dark: #0f172a;
			--text-muted: #64748b;
			--white: #ffffff;
			--shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
			--transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
		}

		.photos-section {
			padding: 80px 0;
			background: #f8fafc;
		}

		.back-btn {
			display: inline-flex;
			align-items: center;
			gap: 12px;
			color: var(--text-muted);
			font-weight: 700;
			text-decoration: none !important;
			margin-bottom: 40px;
			transition: var(--transition);
			padding: 10px 20px;
			background: var(--white);
			border-radius: 12px;
			box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
		}

		.back-btn:hover {
			color: #1f5c2e;
			transform: translateX(-8px);
			box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
		}

		.album-hero {
			background: var(--white);
			border-radius: 12px;
			padding: 60px;
			box-shadow: var(--shadow);
			margin-bottom: 60px;
			position: relative;
			overflow: hidden;
			border: 1px solid rgba(255, 255, 255, 1);
		}

		.album-hero::before {
			content: '';
			position: absolute;
			top: 0;
			right: 0;
			width: 300px;
			height: 300px;
			background: radial-gradient(circle, rgba(127, 176, 105, 0.1) 0%, transparent 70%);
			z-index: 0;
		}

		.album-hero-content {
			position: relative;
			z-index: 1;
		}

		.album-category-tag {
			display: inline-block;
			padding: 6px 16px;
			background: #f0f7f1;
			color: #1f5c2e;
			border-radius: 100px;
			font-size: 12px;
			font-weight: 800;
			text-transform: uppercase;
			letter-spacing: 2px;
			margin-bottom: 25px;
		}

		.album-hero h2 {
			font-size: 42px;
			font-weight: 900;
			color: var(--text-dark);
			margin-bottom: 25px;
			letter-spacing: -1px;
		}

		.album-meta-stats {
			display: flex;
			gap: 30px;
			margin-bottom: 0%;
			flex-wrap: wrap;
		}

		.stat-item {
			display: flex;
			align-items: center;
			gap: 10px;
			color: var(--text-muted);
			font-size: 15px;
			font-weight: 600;
		}

		.stat-item i {
			color: var(--accent-color);
			font-size: 18px;
		}

		.album-desc-text {
			font-size: 18px;
			line-height: 1.8;
			color: var(--text-muted);
			max-width: 800px;
			border-top: 1px solid #f1f5f9;
			padding-top: 15px;
		}

		/* Photo Wall */
		.photo-wall {
			display: grid;
			grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
			gap: 30px;
		}

		.photo-brick {
			position: relative;
			border-radius: 12px;
			overflow: hidden;
			box-shadow: var(--shadow);
			height: 300px;
			cursor: pointer;
			background: #eee;
		}

		.photo-brick img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: transform 1s cubic-bezier(0.4, 0, 0.2, 1);
		}

		.photo-brick:hover img {
			transform: scale(1.1);
		}

		.photo-brick-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(to top, rgba(15, 23, 42, 0.6) 0%, transparent 50%);
			display: flex;
			align-items: center;
			justify-content: center;
			opacity: 0;
			transition: var(--transition);
		}

		.photo-brick:hover .photo-brick-overlay {
			opacity: 1;
		}

		.expand-icon {
			width: 64px;
			height: 64px;
			background: var(--white);
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			color: #1f5c2e;
			font-size: 24px;
			transform: translateY(20px);
			transition: var(--transition);
			box-shadow: 0 15px 30px rgba(0,0,0,0.2);
		}

		.photo-brick:hover .expand-icon {
			transform: translateY(0);
		}
	</style>
	</head>
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
								<h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">Civil Defence Mock Drill</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Slider Area End -->

	<!-- Photos Section Start -->
	<div class="photos-section">
		<div class="container">
			<a href="gallery-main.php" class="back-btn wow fadeInLeft">
				<i class="fa fa-chevron-left"></i> Back to Albums
			</a>

			<div class="album-hero wow fadeInUp">
				<div class="album-hero-content">
					<!-- <span class="album-category-tag">Annual Highlights</span> -->
					<h2>Civil Defence Mock Drill – “Operation Abhyaas”</h2>
					
					<div class="album-meta-stats">
						<div class="stat-item">
							<i class="fa fa-calendar-check-o"></i> 7 May, 2025
						</div>
						<!-- <div class="stat-item">
							<i class="fa fa-picture-o"></i> 14 Captured Moments
						</div> -->
						<div class="stat-item">
							<i class="fa fa-map-marker"></i> Main Campus
						</div>
					</div>

					<div class="album-desc-text">
						In line with the advisory of the Directorate of Education, Brilliants’ Convent conducted the Civil Defence Mock Drill “Operation Abhyaas” on 7th May 2025, observed nationwide across India. The drill began with an emergency siren, followed by an informative session and a hands-on simulation of safety measures during blackout conditions.<br><br>The activity aimed to enhance awareness, discipline, and preparedness among students and staff, enabling them to respond effectively during emergency situations.
					</div>
				</div>
			</div>

			<!-- Photo Wall -->
			<div class="photo-wall popup-gallery">
				<?php
				$images = [
					'gallery/gallery/Civil-Defence-Mock-Drill_1.jpg',
					'gallery/gallery/Civil-Defence-Mock-Drill_2.jpg',
					'gallery/gallery/Civil-Defence-Mock-Drill_3.jpg',
					'gallery/gallery/Civil-Defence-Mock-Drill_4.jpg',
					'gallery/gallery/Civil-Defence-Mock-Drill_5.jpg',
					'gallery/gallery/Civil-Defence-Mock-Drill_6.jpg',
				];
				$delay = 0.1;
				foreach ($images as $img) {
				?>
					<a href="<?php echo $img; ?>" class="photo-brick wow zoomIn" data-wow-delay="<?php echo $delay; ?>s">
						<img src="<?php echo $img; ?>" alt="Gallery Moment">
						<div class="photo-brick-overlay">
							<div class="expand-icon">
								<i class="fa fa-expand"></i>
							</div>
						</div>
					</a>
				<?php
					$delay += 0.05;
					if ($delay > 0.4) $delay = 0.1; // Reset to prevent too long delays
				}
				?>
			</div>

			<!-- <div class="text-center mt-5 wow fadeInUp">
				<button class="btn btn-wow">View More Moments</button>
			</div> -->
		</div>
	</div>
	<!-- Photos Section End -->

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.popup-gallery').magnificPopup({
				delegate: 'a',
				type: 'image',
				tLoading: 'Loading image #%curr%...',
				mainClass: 'mfp-fade',
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0, 1]
				},
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
					titleSrc: function(item) {
						return 'Brilliants\' Convent - ' + (item.el.attr('title') || 'Visual Storytelling');
					}
				}
			});
		});
	</script>
	<!-- About Us End -->

	<!-- ======= Footer ======= -->
	<?php include_once("../footer.php"); ?>
