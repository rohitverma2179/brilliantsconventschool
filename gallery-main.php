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
	<style type="text/css">
		:root {
			--primary-gradient: linear-gradient(135deg, #1f5c2e 0%, #2c6e49 100%);
			--accent-gradient: linear-gradient(135deg, #7fb069 0%, #a8d59d 100%);
			--text-dark: #0f172a;
			--text-muted: #64748b;
			--bg-light: #f8fafc;
			--white: #ffffff;
			--card-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
			--card-shadow-hover: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
			--transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
		}

		.gallery-section {
			padding: 100px 0;
			background-color: var(--bg-light);
			background-image: radial-gradient(#e2e8f0 0.5px, transparent 0.5px);
			background-size: 24px 24px;
		}

		.section-heading {
			text-align: center;
			margin-bottom: 80px;
			position: relative;
		}

		.section-heading span {
			display: block;
			font-weight: 700;
			color: #7fb069;
			text-transform: uppercase;
			letter-spacing: 4px;
			margin-bottom: 10px;
			font-size: 14px;
		}

		.section-heading h2 {
			font-size: 48px;
			font-weight: 900;
			color: var(--text-dark);
			margin-bottom: 20px;
			letter-spacing: -1px;
		}

		.section-heading .divider {
			width: 60px;
			height: 4px;
			background: var(--primary-gradient);
			margin: 0 auto;
			border-radius: 10px;
		}

		/* Premium Card Design */
		.album-card-wrapper {
			margin-bottom: 40px;
		}

		.album-card {
			background: var(--white);
			border-radius: 24px;
			overflow: hidden;
			box-shadow: var(--card-shadow);
			transition: var(--transition);
			height: 100%;
			border: 1px solid rgba(255, 255, 255, 1);
			display: flex;
			flex-direction: column;
		}

		/* .album-card:hover {
			transform: translateY(-15px) scale(1.02);
			box-shadow: var(--card-shadow-hover);
		} */

		.album-image-box {
			position: relative;
			height: 280px;
			overflow: hidden;
		}

		.album-image-box img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
		}

		.album-card:hover .album-image-box img {
			transform: scale(1);
		}

		.photo-count {
			position: absolute;
			top: 20px;
			right: 20px;
			background: rgba(255, 255, 255, 0.9);
			color: var(--text-dark);
			padding: 6px 14px;
			border-radius: 12px;
			font-size: 12px;
			font-weight: 800;
			backdrop-filter: blur(8px);
			z-index: 2;
			box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
		}

		.album-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(to top, rgba(15, 23, 42, 0.8) 0%, transparent 60%);
			opacity: 0;
			transition: var(--transition);
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.album-card:hover .album-overlay {
			opacity: 1;
		}

		.album-content {
			padding: 30px;
			flex-grow: 1;
			display: flex;
			flex-direction: column;
		}

		.album-category {
			font-size: 11px;
			font-weight: 800;
			color: #1f5c2e;
			text-transform: uppercase;
			letter-spacing: 2px;
			margin-bottom: 12px;
			background: #f0f7f1;
			display: inline-block;
			padding: 4px 10px;
			border-radius: 6px;
			align-self: flex-start;
		}

		.album-title {
			font-size: 22px;
			font-weight: 800;
			color: var(--text-dark);
			margin-bottom: 20px;
			line-height: 1.3;
		}

		.album-footer {
			margin-top: auto;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding-top: 20px;
			border-top: 1px solid #f1f5f9;
		}

		.album-date {
			font-size: 13px;
			color: var(--text-muted);
			font-weight: 600;
			display: flex;
			align-items: center;
			gap: 6px;
		}

		.view-link {
			color: var(--primary-color);
			font-weight: 800;
			font-size: 14px;
			text-decoration: none !important;
			display: flex;
			align-items: center;
			gap: 5px;
			transition: var(--transition);
		}

		.view-link:hover {
			gap: 10px;
			color: #7fb069;
		}

		/* Animated Load More */
		.load-more-container {
			margin-top: 60px;
		}

		.btn-wow {
			position: relative;
			background: var(--primary-gradient);
			color: white;
			padding: 18px 45px;
			font-weight: 800;
			border-radius: 16px;
			border: none;
			overflow: hidden;
			transition: var(--transition);
			box-shadow: 0 10px 15px -3px rgba(31, 92, 46, 0.3);
			text-transform: uppercase;
			letter-spacing: 2px;
		}

		.btn-wow:hover {
			transform: scale(1.05);
			box-shadow: 0 20px 25px -5px rgba(31, 92, 46, 0.4);
			color: white;
		}

		.btn-wow::after {
			content: '';
			position: absolute;
			top: -50%;
			left: -50%;
			width: 200%;
			height: 200%;
			background: rgba(255, 255, 255, 0.1);
			transform: rotate(45deg);
			transition: 0.5s;
		}

		.btn-wow:hover::after {
			left: 100%;
		}
	</style>
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
								<h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">Visual Journey</h1>
								<p class="text-white" data-animation-in="fadeInRight" data-animation-out="animate-out">Relive the memories and milestones of Brilliants' Convent</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Slider Area End -->

	<!-- Gallery Section Start -->
	<div class="gallery-section">
		<div class="container">
			<!-- <div class="section-heading ">
				<span>OUR MEMORIES</span>
				<h2>Visual Storytelling</h2>
				<div class="divider"></div>
			</div> -->

			<div class="row">

				<!-- <div class="col-lg-4 col-md-6 album-card-wrapper" data-wow-delay="0.1s">
					<div class="album-card">
						<div class="album-image-box">
							<img src="images/2026/gallery_25_26/25th.anniversary/25th.anniversary1.jpg" alt="25th Anniversary">
						</div>
						<div class="album-content">
							<h3 class="album-title">25th Anniversary</h3>
							<div class="album-footer">
								<div class="album-date">
									<i class="fa fa-calendar-o"></i> 2026
								</div>
								<a href="gallerypages/gallery-25th-anniversary.php" class="view-link">View Album <i class="fa fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
				</div> -->
				<?php
				$albums = [
					["title" => "Baisakhi", "file" => "baisakhi.php", "img" => "bashaki1.jpeg"],
					// ["title" => "Basant Panchmi", "file" => "basant-panchmi.php", "img" => "Basant-panchami1.jpeg"],
					// ["title" => "Carnival", "file" => "carnival.php", "img" => "Ganesh-chaturthi1.jpg"],
					// ["title" => "Diwali", "file" => "diwali.php", "img" => "Diwali1.jpg"],
					// ["title" => "Dusshera", "file" => "dusshera.php", "img" => "Global-handwashing1.jpeg"],
					["title" => "Earth Day", "file" => "earth-day.php", "img" => "earthday1.jpg"],
					// ["title" => "Environment Day", "file" => "environment-day.php", "img" => "Enviorment-day1.jpg"],
					// ["title" => "Farewell", "file" => "farewell.php", "img" => "Farewell1.jpg"],
					// ["title" => "Father Day", "file" => "father-day.php", "img" => "Medical1.jpeg"],
					["title" => "First Day of School", "file" => "first-day-of-school.php", "img" => "first-day-of-school1.jpeg"],
					// ["title" => "Gurupurab", "file" => "gurupurab.php", "img" => "Guru-nanak1.jpg"],
					// ["title" => "Health Checkup", "file" => "health-checkup.php", "img" => "Medical1.jpeg"],
					["title" => "Heritage Day", "file" => "heritage-day.php", "img" => "heritage-day1.jpeg"],
					// ["title" => "Holi", "file" => "holi.php", "img" => "Holi (1).jpg"],
					// ["title" => "Independence Day", "file" => "independence-day.php", "img" => "Independence-Day1.jpg"],
					// ["title" => "Investiture Ceremony", "file" => "investiture-ceremony.php", "img" => "Lohri1.jpeg"],
					// ["title" => "Janamashtmi", "file" => "janamashtmi.php", "img" => "Janamasthmi1.jpg"],
					["title" => "Mother Day", "file" => "mother-day.php", "img" => "mothers-day1.jpg"],
					// ["title" => "Picnic", "file" => "picnic.php", "img" => "Picnic-Vishalgarh (1).jpeg"],
					// ["title" => "Rakshabandhan", "file" => "rakshabandhan.php", "img" => "science-show1.jpg"],
					// ["title" => "Republic Day", "file" => "republic-day.php", "img" => "Lohri2.jpeg"],
					// ["title" => "Science Quiz", "file" => "science-quiz.php", "img" => "shark-tank1.jpeg"],
					["title" => "Science Show", "file" => "science-show.php", "img" => "science-show1.jpg"],
					// ["title" => "Self Defense Training", "file" => "self-defense-training.php", "img" => "shark-tank2.jpg"],
					// ["title" => "Shark Tank", "file" => "shark-tank.php", "img" => "shark-tank1.jpeg"],
					// ["title" => "Teachers Day", "file" => "teachers-day.php", "img" => "Teacher-day1.jpg"],
					// ["title" => "Teej", "file" => "teej.php", "img" => "Holi (2).jpg"],
					["title" => "World Health Day", "file" => "world-health-day.php", "img" => "world-health-day1.jpeg"],
					// ["title" => "Yoga Day", "file" => "yoga-day.php", "img" => "Yoga1.JPG"],
					["title" => "25 Foundation Day", "file" => "foundation-day.php", "img" => "annualday1.jpeg"],
					["title" => "Reading Club Book Fair", "file" => "reading-club-book-fair.php", "img" => "Reading-Club-Book-Fair_1.JPG"],
					["title" => "Civil Defence Mock Drill", "file" => "civil-defence-mock-drill.php", "img" => "Civil-Defence-Mock-Drill_1.jpg"],
				];

				$delay = 0.1;
				foreach ($albums as $album) {
				?>
					<div class="col-lg-4 col-md-6 album-card-wrapper" data-wow-delay="<?php echo $delay; ?>s">
						<div class="album-card">
							<div class="album-image-box">
								<img src="<?php echo !empty($album['img']) ? 'gallery/gallery/' . $album['img'] : 'images/bcs_gallery.jpeg'; ?>" alt="<?php echo $album['title']; ?>">
							</div>
							<div class="album-content">
								<h3 class="album-title"><?php echo $album['title']; ?></h3>
								<div class="album-footer">
									<div class="album-date">
										<i class="fa fa-calendar-o"></i> 2026
									</div>
									<a href="gallery/<?php echo $album['file']; ?>" class="view-link">View Album <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				<?php
					$delay += 0.2;
					if ($delay > 0.5) $delay = 0.1;
				}
				?>

			</div>

			<!-- Load More -->
			<!-- <div class="text-center load-more-container ">
				<button class="btn btn-wow">Discover More Memories</button>
			</div> -->
		</div>
	</div>
	<!-- Gallery Section End -->
	<!-- About Us End -->

	<!-- ======= Footer ======= -->
	<?php include_once("footer.php"); ?>