<!DOCTYPE html>
<html lang="en">

<head>
	<!-- meta tag -->
	<meta charset="utf-8">
	<title>Brilliants&#039; Convent Senior Secondary School</title>
	<meta name="description" content="">
	<!-- responsive tag -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon -->
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
	<link rel="icon" href="images/brilliants-convent-32x32.png" sizes="32x32">
	<link rel="icon" href="images/brilliants-convent-192x192.png" sizes="192x192">
	<link rel="apple-touch-icon" href="images/brilliants-convent-180x180.png">
	<meta name="msapplication-TileImage" content="images/brilliants-convent-270x270.png">
	<!-- bootstrap v4 css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- font-awesome css -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<!-- owl.carousel css -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<!-- slick css -->
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
	<!-- magnific popup css -->
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<!-- Offcanvas CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
	<!-- flaticon css  -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
	<!-- flaticon2 css  -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/fonts2/flaticon.css">
	<!-- rsmenu CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/rsmenu-main.css">
	<!-- rsmenu transitions CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/rsmenu-transitions.css">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<!-- responsive css -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<style>
		#myModalpopup .modal-dialog {
			width: 800px;
			margin: 130px auto !important;
		}

		.modal-backdrop {
			background-color: #00000070 !important;
		}

		@media screen and (max-width:767px) {
			#myModalpopup .modal-dialog {
				width: 95%;
			}
		}

		/* Premium Services Section */
		.rs-services-premium {
			padding: 80px 0;
			background: #f8fafc;
			position: relative;
			z-index: 10;
			margin-top: -50px;
		}

		.service-card-v3 {
			background: #ffffff;
			border-radius: 1.5rem;
			padding: 2.5rem 2rem;
			height: 100%;
			border: 1px solid #e2e8f0;
			transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
			display: flex;
			flex-direction: column;
			box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
		}

		.service-card-v3:hover {
			transform: translateY(-12px);
			box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
			background: #5d4037 !important;
			border-color: #5d4037 !important;
		}

		.icon-box-v3 {
			width: 65px;
			height: 65px;
			border-radius: 1.125rem;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 1.75rem;
			margin-bottom: 1.75rem;
			transition: all 0.4s ease;
		}

		.service-card-v3.s1 {
			background: #ff002a;
			border-color: #ff002a;
		}

		.service-card-v3.s2 {
			background: #003d69;
			border-color: #003d69;
		}

		.service-card-v3.s3 {
			background: #3db2d5;
			border-color: #3db2d5;
		}

		.service-card-v3.s4 {
			background: #f1aa00;
			border-color: #f1aa00;
		}

		.service-card-v3.s1 h4,
		.service-card-v3.s1 p,
		.service-card-v3.s2 h4,
		.service-card-v3.s2 p,
		.service-card-v3.s3 h4,
		.service-card-v3.s3 p,
		.service-card-v3.s4 h4,
		.service-card-v3.s4 p {
			color: #ffffff;
		}

		.service-card-v3.s1 .icon-box-v3 {
			background: #ffffff;
			color: #ff002a;
		}

		.service-card-v3.s2 .icon-box-v3 {
			background: #ffffff;
			color: #003d69;
		}

		.service-card-v3.s3 .icon-box-v3 {
			background: #ffffff;
			color: #3db2d5;
		}

		.service-card-v3.s4 .icon-box-v3 {
			background: #ffffff;
			color: #f1aa00;
		}

		.service-card-v3:hover .icon-box-v3 {
			transform: rotate(10deg) scale(1.1);
			background: #ffffff;
			color: #5d4037;
		}

		.service-card-v3.s2:hover .icon-box-v3 {
			background: #ffffff;
			color: #5d4037;
		}

		.service-card-v3.s3:hover .icon-box-v3 {
			background: #ffffff;
			color: #5d4037;
		}

		.service-card-v3.s4:hover .icon-box-v3 {
			background: #ffffff;
			color: #5d4037;
		}

		.service-card-v3 h4 {
			font-size: 1.25rem;
			font-weight: 800;
			color: #212121;
			margin-bottom: 1rem;
			line-height: 1.4;
		}

		.service-card-v3 p {
			font-size: 0.9375rem;
			color: #505050;
			line-height: 1.6;
			margin-bottom: 1.75rem;
		}

		.btn-service-v3 {
			margin-top: auto;
			padding: 0.75rem 1.5rem;
			border-radius: 50px;
			font-weight: 700;
			font-size: 0.8125rem;
			text-transform: uppercase;
			letter-spacing: 1px;
			border: 2px solid #ffffff;
			color: #ffffff;
			transition: all 0.3s ease;
			text-decoration: none;
			text-align: center;
			display: block;
		}

		.service-card-v3:hover .btn-service-v3 {
			background: #ffffff;
			border-color: #ffffff;
			color: #941234;
		}

		.service-card-v3.s2:hover .btn-service-v3 {
			background: #ffffff;
			border-color: #ffffff;
			color: #941234;
		}

		.service-card-v3.s3:hover .btn-service-v3 {
			background: #ffffff;
			border-color: #ffffff;
			color: #941234;
		}

		.service-card-v3.s4:hover .btn-service-v3 {
			background: #ffffff;
			border-color: #ffffff;
			color: #941234;
		}

		@media (max-width: 768px) {
			.rs-services-premium {
				margin-top: 0;
				padding: 50px 0;
			}
		}

		/* Extracurricular Carousel Compact Style */
		#rs-courses .owl-stage {
			display: flex !important;
		}

		#rs-courses .owl-item {
			display: flex !important;
			padding: 15px 10px;
			/* Space for shadow */
		}

		#rs-courses .owl-stage-outer {
			margin: -15px -10px;
			/* Offset padding */
			padding: 15px 10px;
		}

		#rs-courses .cource-item {
			border-radius: 15px;
			overflow: hidden;
			background: #fff;
			transition: all 0.3s ease;
			height: 100%;
			width: 100%;
			display: flex;
			flex-direction: column;
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08) !important;
			border: none;
		}

		#rs-courses .cource-item .cource-img {
			margin-bottom: 0;
		}

		#rs-courses .cource-item .course-body {
			padding: 20px;
			flex-grow: 1;
			display: flex;
			flex-direction: column;
		}

		#rs-courses .cource-item .course-title {
			font-size: 1.1rem;
			font-weight: 700;
			margin-bottom: 10px;
			color: #0f172a;
		}

		#rs-courses .cource-item .course-desc p {
			font-size: 0.85rem;
			line-height: 1.6;
			color: #64748b;
			margin-bottom: 0;
		}

		#rs-courses .cource-item:hover {
			transform: translateY(-5px);
			box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12) !important;
		}

		/* Infrastructure Carousel Fix */
		#rs-events .owl-stage {
			display: flex !important;
		}

		#rs-events .owl-item {
			display: flex !important;
			padding: 15px 10px;
		}

		#rs-events .owl-stage-outer {
			margin: -15px -10px;
			padding: 15px 10px;
		}

		#rs-events .event-item {
			background: #fff;
			border-radius: 15px;
			overflow: hidden;
			height: 100%;
			width: 100%;
			display: flex;
			flex-direction: column;
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08) !important;
			transition: all 0.3s ease;
		}

		#rs-events .event-item .events-details {
			flex-grow: 1;
			display: flex;
			flex-direction: column;
			padding: 25px;
			margin-top: 0;
		}

		#rs-events .event-item:hover {
			transform: translateY(-5px);
			box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12) !important;
		}

		/* Team Carousel Fix */
		#rs-team .owl-stage {
			display: flex !important;
		}

		#rs-team .owl-item {
			display: flex !important;
			padding: 15px 10px;
		}

		#rs-team .owl-stage-outer {
			margin: -15px -10px;
			padding: 15px 10px;
		}

		#rs-team .team-item {
			background: #fff;
			border-radius: 15px;
			overflow: hidden;
			height: 100%;
			width: 100%;
			display: flex;
			flex-direction: column;
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08) !important;
			transition: all 0.3s ease;
		}

		#rs-team .team-item .team-img {
			position: relative;
		}

		#rs-team .team-item:hover {
			transform: translateY(-5px);
			box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12) !important;
		}

		.text-red-color a {
			color: #d0052e !important;
		}

		.text-color {
			color: #d0052e !important;
		}

		.carousel-item img {
			width: 80%;
			/* width kam */
			height: 500px;
			/* height set */
			object-fit: cover;
			/* image stretch na ho */
			margin: auto;
			/* center align */
			border-radius: 10px;
			opacity: 1 !important;
		}

		.galley {
			background: #ffffff !important;
			padding: 80px 0;
		}

		.galley .sec-title h2 {
			color: #0f172a !important;
		}

		.galley .carousel-item:before {
			display: none !important;
		}

		.FACULTY-height {
			height: 470px !important;
			width: 333px !important;
		}

		.course_img_size {
			height: 315px !important;
			width: 573px !important;
		}

		.img_size {
			height: 258px !important;
			width: 390px !important;
			/* object-fit: cover; */
		}
		
/*		.gallery-slide-img {*/
/*    width: 70%;*/
/*    height: auto;*/
/*    object-fit: contain;*/
/*    object-position: top;*/
/*    display: block;*/
/*    margin: 0 auto;*/
/*}*/

/*@media (min-width: 1500px) {*/
/*    .gallery-slide-img {*/
/*        max-height: 1200px;*/
/*        height: auto;*/
/*    }*/
/*}*/

/*.gallery-slide-img {*/
/*    width: 70%;*/
/*    height: auto;*/
/*    object-fit: contain;*/
/*    object-position: top;*/
/*    display: block;*/
/*    margin: 0 auto;*/
/*}*/

/*@media (min-width: 1500px) {*/
/*    .gallery-slide-img {*/
/*        width: 70%;*/
/*        height: 1200px;*/
/*        object-fit: contain;*/
/*        object-position: top center;*/
/*    }*/
/*}*/

.gallery-slide-img {
    width: 70%;
    height: auto !important;
    max-height: none !important;
    object-fit: contain !important;
    object-position: center top;
    display: block;
    margin: 0 auto;
}

.carousel-item {
    height: auto !important;
    overflow: visible !important;
}

.carousel-inner {
    height: auto !important;
}
	</style>

</head>

<body class="home1">
	<!-- New One -->
	<!-- Modal -->
	<!--<div class="modal" id="myModalpopup" tabindex="-1" aria-labelledby="myModalpopupLabel" aria-hidden="true">-->
	<!--	<div class="modal-dialog modal-lg">-->
	<!--		<div class="modal-content">-->
	<!--			<div class="modal-body">-->
	<!--				<a href="https://www.brilliantsconvent.com/admission.php?page=registration" target="_blank">-->
	<!--					<img src="images/bcs_admission-2026-27.jpg" width="100%" alt="Brilliants Convent">-->
	<!--				</a>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!--- End New One -->
	<!-- pop up div close -->


	<!--Full width header Start-->
	<div class="full-width-header">

		<!--Header Start-->
		<header id="rs-header">
			<!-- Header Top Start -->
			<div class="menu-sticky">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container-fluid">
						<a class="navbar-brand logo-w" href="index.php"><img src="images/BrilliantsConventlogo.png"
								alt="Brilliants Convent" decoding="async" fetchpriority="high"></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
							data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
							<ul class="navbar-nav mb-lg-0 ml-auto">
								<li class="nav-item">
									<a class="nav-link active" href="index.php">HOME</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link <?php echo $mid == '2' ? 'active' : '' ?> dropdown-toggle"
										id="navDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false"
										href="#">ABOUT</a>
									<ul class="dropdown-menu" aria-labelledby="navDropdown1">
										<li><a class="dropdown-item <?php echo $id == '1' ? 'active' : '' ?>"
												href="about_us.php?page=affiliation">Affiliation</a></li>
										<li><a class="dropdown-item <?php echo $id == '2' ? 'active' : '' ?>"
												href="about_us.php?page=mission-vision">Mission & Vision</a></li>
										<li><a class="dropdown-item <?php echo $id == '3' ? 'active' : '' ?>"
												href="about_us.php?page=our-management">Our Management</a></li>
										<li><a class="dropdown-item <?php echo $id == '4' ? 'active' : '' ?>"
												href="about_us.php?page=aims-objective">Aims & Objective</a></li>
										<li><a class="dropdown-item <?php echo $id == '5' ? 'active' : '' ?>"
												href="about_us.php?page=school-rules">School Rules</a></li>
										<li><a class="dropdown-item <?php echo $id == '6' ? 'active' : '' ?>"
												href="about_us.php?page=infrastructure">Infrastructure</a></li>
										<li><a class="dropdown-item <?php echo $id == '7' ? 'active' : '' ?>"
												href="about_us.php?page=song">Song</a></li>
										<li><a class="dropdown-item <?php echo $id == '8' ? 'active' : '' ?>"
												href="about_us.php?page=about-brilliant">About Brilliants' Convent</a>
										</li>
										<li><a class="dropdown-item <?php echo $id == '9' ? 'active' : '' ?>"
												href="about_us.php?page=timings">Timings</a></li>
										<li><a class="dropdown-item <?php echo $id == '10' ? 'active' : '' ?>"
												href="about_us.php?page=uniform">Uniform</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link <?php echo $mid == '3' ? 'active' : '' ?> dropdown-toggle"
										id="navDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false"
										href="#">ACADEMICS</a>
									<ul class="dropdown-menu" aria-labelledby="navDropdown1">
										<li><a class="dropdown-item <?php echo $idac == '1' ? 'active' : '' ?>"
												href="academics.php?page=calendar">Calendar</a></li>
										<li><a class="dropdown-item <?php echo $idac == '2' ? 'active' : '' ?>"
												href="academics.php?page=faculty">Faculty</a></li>
										<li><a class="dropdown-item <?php echo $idac == '3' ? 'active' : '' ?>"
												href="academics.php?page=curriculum">Curriculum</a></li>
										<li><a class="dropdown-item <?php echo $idac == '4' ? 'active' : '' ?>"
												href="academics.php?page=handbook">Handbook</a></li>
										<li><a class="dropdown-item <?php echo $idac == '5' ? 'active' : '' ?>"
												href="academics.php?page=workshops-Webinar">Workshops & Webinar</a></li>
										<li><a class="dropdown-item <?php echo $idac == '6' ? 'active' : '' ?>"
												href="academics.php?page=examination-schedule">Examination Schedule</a>
										</li>
										<li><a class="dropdown-item <?php echo $idac == '7' ? 'active' : '' ?>"
												href="academics.php?page=holidays-homework">Holidays Homework</a></li>
										<li><a class="dropdown-item <?php echo $idac == '8' ? 'active' : '' ?>"
												href="academics.php?page=result">Result</a></li>
										<li><a class="dropdown-item <?php echo $idac == '9' ? 'active' : '' ?>"
												href="academics.php?page=bcs-juniors">BCS juniors</a></li>
										<li><a class="dropdown-item <?php echo $idac == '10' ? 'active' : '' ?>"
												href="academics.php?page=slc">SLC</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link <?php echo $mid == '4' ? 'active' : '' ?> dropdown-toggle"
										id="navDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false"
										href="#">FACILITIES</a>
									<ul class="dropdown-menu" aria-labelledby="navDropdown1">
										<li><a class="dropdown-item <?php echo $idf == '1' ? 'active' : '' ?>"
												href="facilities.php?page=science-lab">Science Lab</a></li>
										<li><a class="dropdown-item <?php echo $idf == '2' ? 'active' : '' ?>"
												href="facilities.php?page=computer-lab">Computer Lab</a></li>
										<li><a class="dropdown-item <?php echo $idf == '3' ? 'active' : '' ?>"
												href="facilities.php?page=sports">Sports</a></li>
										<li><a class="dropdown-item <?php echo $idf == '4' ? 'active' : '' ?>"
												href="facilities.php?page=library">Library</a></li>
										<li><a class="dropdown-item <?php echo $idf == '5' ? 'active' : '' ?>"
												href="facilities.php?page=yoga">Yoga</a></li>
										<li><a class="dropdown-item <?php echo $idf == '6' ? 'active' : '' ?>"
												href="facilities.php?page=other-facilities">Other Facilities</a></li>
										<li><a class="dropdown-item <?php echo $idf == '7' ? 'active' : '' ?>"
												href="facilities.php?page=smartboards">Smart Boards</a></li>
										<li><a class="dropdown-item <?php echo $idf == '8' ? 'active' : '' ?>"
												href="facilities.php?page=transport">Transport</a></li>
										<li><a class="dropdown-item <?php echo $idf == '9' ? 'active' : '' ?>"
												href="facilities.php?page=taekwondo">Taekwondo</a></li>
										<li><a class="dropdown-item <?php echo $idf == '10' ? 'active' : '' ?>"
												href="facilities.php?page=abacus">Abacus</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link <?php echo $mid == '6' ? 'active' : '' ?> dropdown-toggle"
										id="navDropdown5" role="button" data-bs-toggle="dropdown" aria-expanded="false"
										href="#">CLUBS</a>
									<ul class="dropdown-menu" aria-labelledby="navDropdown1">
										<li><a class="dropdown-item <?php echo $idc == '1' ? 'active' : '' ?>"
												href="clubs.php?page=robotics-club">AI & Robotics Club</a></li>
										<li><a class="dropdown-item <?php echo $idc == '2' ? 'active' : '' ?>"
												href="clubs.php?page=eco-club">Eco & Sustainability Club</a></li>
										<li><a class="dropdown-item <?php echo $idc == '3' ? 'active' : '' ?>"
												href="clubs.php?page=visual-arts-club">Visual & Performing Arts Club</a>
										</li>
										<li><a class="dropdown-item <?php echo $idc == '4' ? 'active' : '' ?>"
												href="clubs.php?page=sports-club">Sports & Wellness Club</a></li>
										<li><a class="dropdown-item <?php echo $idc == '5' ? 'active' : '' ?>"
												href="clubs.php?page=interact-club">Language & Literary Club</a></li>
										<li><a class="dropdown-item <?php echo $idc == '6' ? 'active' : '' ?>"
												href="clubs.php?page=science-club">Science Club</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link <?php echo $mid == '7' ? 'active' : '' ?> dropdown-toggle"
										id="navDropdown6" role="button" data-bs-toggle="dropdown" aria-expanded="false"
										href="blogs.php?page=blogs">BLOG</a>
									<ul class="dropdown-menu" aria-labelledby="navDropdown1">
										<li><a class="dropdown-item" href="blogs.php?page=blogs">Educational Trip to Jim
												Corbett</a></li>
										<li><a class="dropdown-item" href="blogs.php?page=blogs">Eco Expo - 2023</a>
										</li>
										<li><a class="dropdown-item" href="blogs.php?page=blogs">Installation Ceremony
												of Rotary-Interact Club</a></li>
										<li><a class="dropdown-item" href="blogs.php?page=blogs">SGT University
												Visit</a></li>
										<li><a class="dropdown-item" href="blogs.php?page=blogs">Language Exchange
												Programme with Taiwan</a></li>
										<li><a class="dropdown-item" href="blogs.php?page=blogs">Experiential learning
												by Brilliantians</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact_us.php?page=contact">CONTACT US</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php echo $mid == '5' ? 'active' : '' ?>"
										href="parents_connect.php?page=parents-connect">PARENTS CONNECT</a>
								</li>
							</ul>
							<div class="d-flex">
								<div class="btn-group" role="group">
									<button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle"
										data-bs-toggle="dropdown" aria-expanded="false">
										<span class="blink">Admission Open</span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
										<li><a class="dropdown-item <?php echo $idad == '4' ? 'active' : '' ?>" href="admission.php?page=admission-inquiry">Admission Inquiry</a></li>
										<li><a class="dropdown-item <?php echo $idad == '3' ? 'active' : '' ?>" href="admission.php?page=registration">Registration</a></li>
										<li><a class="dropdown-item <?php echo $idad == '1' ? 'active' : '' ?>" href="admission.php?page=process">Process</a></li>
										<li><a class="dropdown-item <?php echo $idad == '2' ? 'active' : '' ?>" href="admission.php?page=fees">Fees</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
			<!-- Header Top End -->

			<!-- Menu Start -->
			<div class="menu-area">
				<div class="container-fluid">
					<div class="main-menu">
						<div class="row relative">
							<div class="col-sm-12">
								<marquee scrollamount="3" class="marquee_scroll">
									<span
										class="dot-separator mx-2 d-inline-block bcs-bg-secondary rounded-circle"></span>Ranked
									#1 among Top CBSE Schools by Education Today Survey 2019. <span
										class="dot-separator mx-2 d-inline-block bcs-bg-secondary rounded-circle"></span>Awarded
									for Excellence in Infrastructure by Ambassador Dr. Deepak Vohra, Special Advisor to
									the Prime Minister. <span
										class="dot-separator mx-2 d-inline-block bcs-bg-secondary rounded-circle"></span>Recognized
									as Best School 2019 with 'AAAA' rating by THE EDUCATION HUB - Careers 360 survey.
								</marquee>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Menu End -->
		</header>
		<!--Header End-->
	</div>
	<!--Full width header End-->

	<!-- Slider Area Start -->
	<div id="rs-slider" class="slider-overlay-1">
		<div id="home-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="0"
			data-autoplay="true" data-autoplay-timeout="3000" data-smart-speed="1200" data-dots="false" data-nav="true"
			data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true"
			data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="1"
			data-md-device-nav="true" data-md-device-dots="false">
			<!-- Item 1 -->
			<div class="item active">
				<div class="video-wrapper">
					<video autoplay muted loop playsinline webkit-playsinline preload="metadata">
						<source src="images/brilliants-convent-2.mp4" type="video/mp4">
					</video>
				</div>
				<div class="slide-content">
					<div class="display-table">
						<div class="display-table-cell">
							<div class="container text-center">
								<h1 class="slider-title">WELCOME TO Brilliants' Convent</h1>
								<p class="slider-desc">
									Explore the Vibrant Learning Environment of Brilliants Convent <br
										class="hidden-sm-dow"> Where Every Child Shines Brightly</p>
								<a href="https://www.brilliantsconvent.com/admission.php?page=registration"
									class="sl-get-started-btn">ADMISSION ENQUIRY</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- Slider Area End -->

	<!-- Services Start -->
	<section class="rs-services-premium">
		<div class="container">
			<div class="row g-4">
				<div class="col-lg-3 col-md-6 ">
					<div class="service-card-v3 s1">
						<div class="icon-box-v3">
							<i class="fa fa-university"></i>
						</div>
						<h4>Explore Our School</h4>
						<p>Uncover the heart of education within our vibrant premises and state-of-the-art labs.</p>
						<a href="#" class="btn-service-v3" data-bs-toggle="modal" data-bs-target="#techModal">Take a
							Tour</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ">
					<div class="service-card-v3 s2">
						<div class="icon-box-v3">
							<i class="fa fa-bolt"></i>
						</div>
						<h4>Digital Vibes</h4>
						<p>Showcasing creativity, achievements and the vibrant spirit of our Brilliantians.</p>
						<a href="e-news.php" class="btn-service-v3">Explore E-Vibes</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ">
					<div class="service-card-v3 s3">
						<div class="icon-box-v3">
							<i class="fa fa-history"></i>
						</div>
						<h4>Our Legacy</h4>
						<p>Delve into our rich 24+ year history of academic milestones and excellence.</p>
						<a href="achievements.php" class="btn-service-v3">Shining Moments</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ">
					<div class="service-card-v3 s4">
						<div class="icon-box-v3">
							<i class="fa fa-star"></i>
						</div>
						<h4>Accolades</h4>
						<p>Honors reflecting our commitment to academic and co-curricular exceptional excellence.</p>
						<a href="acclaim_accolades.php" class="btn-service-v3">View Awards</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services End -->

	<div class="bcs-sec-color-img">
		<div class="container">
			<div class="row pmsm">
				<div class="col-md-6 wow   order-2 order-lg-1">
					<div class="sec-title mt-80 mr-30 wow  ">
						<h2>PRINCIPAL’S MESSAGE</h2>
						<h4>Dr. Reeta Hashia</h4>
						<p class="fw-bold">True education doesn’t just light up the mind—it awakens purpose, nurtures
							empathy, and empowers change.</p>
						<p class="pt-2">Welcome to our vibrant learning community! </p>
						<p class="pt-2">As the Principal of Brilliants’ Convent (BCS), I take immense pride in leading
							an institution that is deeply committed to nurturing not just bright minds but also kind
							hearts. At BCS, education goes far beyond textbooks—we strive to shape individuals who are
							confident, curious, compassionate, and ready to make a positive impact on the world.</p>
						<p class="pt-2">We believe that every child is unique, and our dedicated team of educators work
							tirelessly...</p>
						<p class="news-btn mt-3">
							<a href="our-principal.php">Read More</a>
						</p>
					</div>
				</div>
				<div class="col-md-6 wow   order-1 order-lg-2">
					<div class="mt-50 wow   rs-about">
						<a href="our-principal.php">
							<div class="about-img rs-animation-hover">
								<img src="images/about/princilpal-bcs.jpg" alt="Principal Dr. Reeta Hashia" class="img-fluid" loading="lazy" decoding="async" />
								<div class="overly-border"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div id="random" class="rs-latest-news sec-spacer wow ">
		<div class="container">
			<div class="row">
				<div class="col-md-6 wow  ">
					<div class="news-normal-block">
						<h2 class="bcs-title">ABOUT BRILLIANTS' CONVENT</h2>
						<div class="news-desc">
							<p>At Brilliants’ Convent, we believe that every child is born with a joyful responsibility
								to help it shine. We cherish the individuality of each student.</p>
							<p>Brilliants’ Convent is an NEP 2020-aligned institution committed to nurturing empowered,
								ethical, and future-ready learners. Blending traditional values with innovative
								pedagogy, we focus on foundational literacy, experiential learning, and 21st-century
								skills.</p>
							<p>Our dynamic classrooms promote creativity, critical thinking, and joyful learning through
								art, sports, and technology integration. With a student-centric approach and dedicated
								educators, we strive to shape confident global citizens who lead with knowledge,
								compassion, and purpose.</p>
							<p class="news-btn">
								<a href="about_us.php?page=about-brilliant">Read More</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 nboard wow fadeInRight mt-3">
					<div class="text-center">
						<h2>NOTICE BOARD</h2>
					</div>
					<div class="news-list-block">
						<marquee behavior="scroll" direction="up" scrollamount="2" height="290"
							onmouseover="this.stop();" onmouseout="this.start();">
							<div class="news-list-item">
								<div class="news-content">
									<div class="news-date">
										<i class="fa fa-calendar-check-o"></i>
										<span>May 4, 2026</span>
									</div>
									<div class="news-desc">
										<p><a href="schoolpdf/Notice.pdf"
												target="_blank">Notice for Purchase of Books.</a>
										</p>
									</div>
								</div>
							</div>
							<!--<div class="news-list-item">-->
							<!--	<div class="news-content">-->
							<!--		<div class="news-date">-->
							<!--			<i class="fa fa-calendar-check-o"></i>-->
							<!--			<span>July 2, 2026</span>-->
							<!--		</div>-->
							<!--		<div class="news-desc">-->
							<!--			<p>-->
							<!--				<a href="pdf/DocScanner-2-Jul-2026-12-42-pm.pdf" target="_blank">-->
							<!--					Draw of lots for SLFRC</a>-->
							<!--			</p>-->
							<!--		</div>-->
							<!--	</div>-->
							<!--</div>-->
							<div class="news-list-item">
								<div class="news-content">
									<div class="news-date">
										<i class="fa fa-calendar-check-o"></i>
										<span>May 1, 2026</span>
									</div>
									<div class="news-desc">
										<p><a href="pdf/DATE-SHEET-OF-ANNUAL-EXAMINATION-(2025–26).pdf"
												target="_blank">The school will remain closed on May 1, 2026 (Friday), on account of Buddha Purnima.</a>
										</p>
									</div>
								</div>
							</div>
							<div class="news-list-item">
								<div class="news-content">
									<div class="news-date">
										<i class="fa fa-calendar-check-o"></i>
										<span>April 3, 2026</span>
									</div>
									<div class="news-desc">
										<p><a href="pdf/DATE-SHEET-OF-ANNUAL-EXAMINATION-(2025–26).pdf"
												target="_blank">The School will remain closed on Friday, April 3, 2026,
												on account of Good Friday.</a>
										</p>
									</div>
								</div>
							</div>
							<div class="news-list-item">
								<div class="news-content">
									<div class="news-date">
										<i class="fa fa-calendar-check-o"></i>
										<span>Feb 15, 2026</span>
									</div>
									<div class="news-desc">
										<p><a href="pdf/DATE-SHEET-OF-ANNUAL-EXAMINATION-(2025–26).pdf" target="_blank">
												DATE SHEET OF ANNUAL EXAMINATION (2025 – 26)</a>
										</p>
									</div>
								</div>
							</div>
							<div class="news-list-item">
								<div class="news-content">
									<div class="news-date">
										<i class="fa fa-calendar-check-o"></i>
										<span>Feb 13, 2026</span>
									</div>
									<div class="news-desc">
										<p><a href="#" target="_blank">
												Dear Parents <br />
												This is to inform you that the school will resume its previous timings
												w.e.f. 16 February 2026.(Monday) <br />
												For Classes I–XII, the school gate will open at 7:30 a.m. and the school
												will commence at 7:50 a.m. sharp. <br />
												For Classes Pre-School and Pre-Primary, the school gate will open at
												8:30 a.m. and school will commence at 8:50 a.m <br />

												The dispersal timings will remain the same for all classes. <br />
												Kindly ensure that your ward reaches the school on time. <br />
												Your cooperation is appreciated. <br />
												Warm regards <br />
												Brilliants Convent</a>
										</p>
									</div>
								</div>
							</div>

							<div class="news-list-item">
								<div class="news-content">
									<div class="news-date">
										<i class="fa fa-calendar-check-o"></i>
										<span>Jan 16, 2026</span>
									</div>
									<div class="news-desc">
										<p><a href="pdf/slfrc-members-list-2026.pdf" target="_blank">
												SLFRC Members List</a>
										</p>
									</div>
								</div>
							</div>
							<div class="news-list-item">
								<div class="news-content">
									<div class="news-date">
										<i class="fa fa-calendar-check-o"></i>
										<span>Jan 7, 2026</span>
									</div>
									<div class="news-desc">
										<p>
											<a href="pdf/notice-2025-26I.pdf" target="_blank">
												Draw of lots for SLFRC</a>
										</p>
									</div>
								</div>
							</div>
							<div class="news-list-item">
								<div class="news-content">
									<div class="news-date">
										<i class="fa fa-calendar-check-o"></i>
										<span>May 2, 2023</span>
									</div>
									<div class="news-desc">
										<p>
											
												PTM for the classes Pre-School - XII to be held on 13th May 2023 (Saturday)
										</p>
									</div>
								</div>
							</div>
							<div class="news-list-item">
								<div class="news-content">
									<div class="news-date">
										<i class="fa fa-calendar-check-o"></i>
										<span> December 15, 2022</span>
									</div>
									<div class="news-desc">
										<p>

												School will remain closed for Winter Vacation for the classes VI to IX & XI w.e.f. 30 December 2022 i.e. Friday to 6 January 2023 i.e. Friday and shall re-open on 9 January 2023 i.e. Monday.
										</p>
									</div>
								</div>
							</div>
						</marquee>
					</div>
					<div class="text-start pt-3">
						<a href="notice.php" class="btn btn-outline-light">View All</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About Us Start -->
	<div id="rs-about" class="rs-about sec-spacer wow  ">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="about-img rs-animation-hover">
						<img src="images/about/bcs-homebg.jpeg" alt="Brilliants Convent Campus" class="img-fluid" loading="lazy" decoding="async" />
						<a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=xgT4705EX_U"
							title="Video Icon">
						</a>
						<div class="overly-border"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div id="accordion" class="rs-accordion-style1">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h3 class="acdn-title" data-bs-toggle="collapse" data-bs-target="#collapseOne"
									aria-expanded="true" aria-controls="collapseOne">
									Reasons That Make Us BEST!
								</h3>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
								data-bs-parent="#accordion">
								<div class="card-body bcs-bullets">
									<ul>
										<li>We aim for the best for our students, setting high academic and behavioral
											standards. </li>

										<li>Our approach emphasizes firm routines and moral values. </li>

										<li>We encourage strong character traits like sincerity, helpfulness,
											determination and hopefulness. </li>

										<li>We hold the highest academic aspirations, offering top learning
											opportunities through challenges, inspiration, nurturing and excellent
											teaching.
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h3 class="acdn-title collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
									aria-expanded="false" aria-controls="collapseTwo">
									Affiliation
								</h3>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
								data-bs-parent="#accordion">
								<div class="card-body text-justify">
									The School is affiliated up to Senior Secondary level with the Central Board of
									Secondary Education (C.B.S.E.), Delhi vide affiliation no. 2730565 and recognized by
									the Directorate of Education, Govt. of NCT of Delhi with School ID 1411205.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header mb-0" id="headingThree">
								<h3 class="acdn-title collapsed" data-bs-toggle="collapse"
									data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Mission & Vision
								</h3>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
								data-bs-parent="#accordion">
								<div class="card-body text-justify">
									“Education is simply the soul of a society as it passes from one generation to
									another.”<br> – G.K. Chesterton

									Education plays a vital role in shaping society. A school, often considered a temple
									of education, forms the foundational base of knowledge essential for the growth and
									development of any community and its people.
									<br>
									At Brilliants’ Convent, our mission statement – “Learn to Serve” – is at the core of
									our unique curriculum and teaching approach. We strive continuously and sincerely to
									work in a manner that supports this mission.
									<br>
									We believe in harmonizing the collective aspirations of students, teachers, and
									parents. Schooling is more than just academics, and at BCS, we ensure that students
									experience practical and experiential learning. This empowers our proud
									Brilliantians to unlock their true potential and discover their unique identities.
									<a href="#">Read More...</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Us End -->

	<div class="galley wow  ">
		<div class="sec-title text-center">
			<h2>GALLERY</h2>
		</div>
		<div class="g-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<!--<p><a href="gallery.html" role="button" class="btn btn-warning btn-lg">View Full Gallery</a></p>-->
						<p><a href="gallery-main.php" role="button" class="btn btn-warning btn-lg">View Full Gallery</a></p>
					</div>
				</div>
			</div>
		</div>
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img
                         src="images/slider/slide1.jpg" 
                         class="d-block w-70 gallery-slide-img only-top-view" 
                         alt="Gallery Image 1"
                         loading="lazy"
                         decoding="async"
                    >
				</div>
				<div class="carousel-item">
					<img src="images/slider/slide2.jpg" class="d-block w-70 gallery-slide-img" alt="Gallery Image 2" loading="lazy" decoding="async">
				</div>
				<div class="carousel-item">
					<img src="images/slider/slide3.jpg" class="d-block w-70 gallery-slide-img" alt="Gallery Image 3" loading="lazy" decoding="async">
				</div>
			</div>
		</div>
	</div>

	<!-- Courses Start -->
	<div id="rs-courses" class="rs-courses sec-color sec-spacer wow  ">
		<div class="container">
			<div class="sec-title mb-50 text-center">
				<h2>Extracurricular Activities</h2>
				<p>At Brilliants’ Convent, we believe that education is not just about textbooks it's about nurturing
					every child's talent, creativity, leadership, and confidence. <br> Our wide range of extracurricular
					activities ensures holistic development and joy in learning, tailored to each age group.</p>
			</div>
			<div class="row">
				<div class="col-md-12 px-lg-5">
					<div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30"
						data-autoplay="true" data-autoplay-timeout="3000" data-smart-speed="1200" data-dots="true"
						data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
						data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
						data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true"
						data-md-device-dots="true">
						<div class="cource-item">
							<div class="cource-img">
								<img class="course_img_size" src="images/2026/homeimages/classroom.jpeg" alt="Skill Development" loading="lazy" decoding="async" />

								<a class="image-link" href="#" title="Skill Development">
								</a>
								<span class="course-value">08:00 am - 10:00 am</span>
							</div>
							<div class="course-body">
								<h4 class="course-title text-color">Skill Development</h4>
								<div class="course-desc">
									<p>• Abacus Classes to build concentration and strengthen mental arithmetic<br>•
										Puzzle Time & Brain Games to enhance logical thinking</p>
								</div>
							</div>
							<div class="course-footer" style="display:none;">
								<div class="course-time">
									<span class="label">$30 </span>
								</div>

								<div class="class-duration">
									<span class="desc"><a href="javascript:void(0);">View Details <i
												class="fa fa-angle-double-right"></i></a></span>
								</div>
							</div>
						</div>
						<div class="cource-item">
							<div class="cource-img">
								<img class="course_img_size" src="images/2026/homeimages/creativity1.jpg" alt="Creative Expressions" loading="lazy" decoding="async" />
								<a class="image-link" href="#" title="Creative Expressions">
								</a>
								<span class="course-value">08:00 am - 10:00 am</span>
							</div>
							<div class="course-body">
								<h4 class="course-title text-color">Creative Expressions</h4>
								<div class="course-desc">
									<p>• Art & Craft: Clay modeling, paper folding, thumb painting,
										best-out-of-waste<br>• Colouring & Drawing Competitions on environment,
										festivals & values </p>
								</div>
							</div>
							<div class="course-footer" style="display:none;">
								<div class="course-time">
									<span class="label">$30 </span>
								</div>

								<div class="class-duration">
									<span class="desc"><a href="javascript:void(0);">View Details <i
												class="fa fa-angle-double-right"></i></a></span>
								</div>
							</div>
						</div>
						<div class="cource-item">
							<div class="cource-img">
								<img class="course_img_size" src="images/2026/homeimages/yoga.jpeg" alt="Health & Fitness" loading="lazy" decoding="async" />
								<a class="image-link" href="#" title="Health & Fitness">
								</a>
								<span class="course-value">08:00 am - 10:00 am</span>
							</div>
							<div class="course-body">
								<h4 class="course-title text-color">Health & Fitness</h4>
								<div class="course-desc">
									<p>• Taekwondo Training for discipline, strength & self-defence<br>
										• Fun Races: Sack race, lemon-spoon race<br>
										• Yoga for Kids & Basic PT Drills
									</p>
								</div>
							</div>
							<div class="course-footer" style="display:none;">
								<div class="course-time">
									<span class="label">$30 </span>
								</div>

								<div class="class-duration">
									<span class="desc"><a href="javascript:void(0);">View Details <i
												class="fa fa-angle-double-right"></i></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Courses End -->

	<!-- Chairman Section Start-->
	<div class="pt-50 pb-70 founder">
		<div class="container">
			<div class="row pmsm">
				<div class="col-md-6 wow   order-2">
					<div class="sec-title mt-80 mr-30 wow  ">
						<h2>FOUNDER'S MESSAGE</h2>
						<h4>Mr. D.S Mann</h4>
						<p>A school is not merely a physical structure of four walls; it is a living, evolving space
							where the future of a nation is shaped. At Brilliants’ Convent, we believe education
							transcends the boundaries of textbooks. It is about building character, nurturing empathy,
							fostering discipline, and instilling a strong sense of purpose. Our mission is to equip
							students not just for examinations—but for life itself.</p>
						<p>Established in the year 2000, Brilliants’ Convent has remained unwavering in its commitment
							to shaping young minds into intelligent, responsible, and value-driven individuals.
							Education here is not limited to academic instruction; it is a holistic journey of
							transformation that touches every facet of a learner’s being.</p>
						<p class="news-btn mt-3">
							<a href="our-founder.php">Read More</a>
						</p>
					</div>
				</div>
				<div class="col-md-6 wow   order-1">
					<div class="mt-50 wow   rs-about">
						<a href="our-founder.php">
							<div class="about-img rs-animation-hover">
								<img src="images/2026/homeimages/FOUNDER.jpeg" alt="img02" />
								<div class="overly-border"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Chairman Section End-->

	<!-- Events Start -->
	<div id="rs-events" class="rs-events sec-color sec-spacer wow  ">
		<div class="container">
			<div class="sec-title mb-50 text-center">
				<h2>Our Infrastructure</h2>
				<p>The school has a high‐tech campus which is well spread across land allotted by DDA. The entire campus
					is under the surveillance of CCTV cameras <br> keeping in view the security of our students.
					Furthermore
					the school building is fully air conditioned.</p>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
						data-autoplay="true" data-autoplay-timeout="3000" data-smart-speed="1200" data-dots="true"
						data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
						data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
						data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true"
						data-md-device-dots="true">
						<div class="event-item">
							<a href="facilities.php?page=smart-board">
								<div class="event-img">
									<img class="img_size" src="images/2026/homeimages/smartboard2.jpeg" alt="Smart Board" loading="lazy" decoding="async" />
								</div>
							</a>
							<div class="events-details sec-color">
								<h4 class="event-title text-red-color"><a href="facilities.php?page=smart-board">Smart
										Board</a></h4>
								<div class="event-meta">
									<span>offers a wide array of easy-to-use educational tools that are proven to
										increase learning in students. Their products are easily integrated into any
										classroom and are designed</span>
								</div>
								<div class="event-btn">
									<a href="facilities.php?page=smart-board">Read more <i
											class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
						<div class="event-item">
							<a href="facilities.php?page=science-labs">
								<div class="event-img">
									<img src="images/2026/homeimages/sciencelab.jpeg" alt="Science Lab" loading="lazy" decoding="async" />
								</div>
							</a>
							<div class="events-details sec-color">
								<h4 class="event-title text-red-color"><a
										href="facilities.php?page=science-labs">Science Lab</a></h4>
								<div class="event-meta">
									<span>The school has spacious and well equipped laboratories for Physics, Chemistry
										and Biology. Students are imparted practical education under the watchful eyes
										of the instructors.</span>
								</div>
								<div class="event-btn">
									<a href="facilities.php?page=science-labs">Read more <i
											class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
						<div class="event-item">
							<a href="facilities.php?page=library">
								<div class="event-img">
									<img class="img_size" src="images/2026/homeimages/library1.jpg" alt="Library" loading="lazy" decoding="async" />
								</div>
							</a>
							<div class="events-details sec-color">
								<h4 class="event-title text-red-color"><a href="facilities.php?page=library">Library</a>
								</h4>
								<div class="event-meta">
									<span>The school has a big, well stocked library which is well equipped with
										educational CDs, number of books on different subjects along with invaluable
										reference books which can be...</span>
								</div>
								<div class="event-btn">
									<a href="facilities.php?page=library">Read more <i
											class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
						<div class="event-item">
							<a href="facilities.php?page=sports">
								<div class="event-img">
									<img src="images/2026/homeimages/playingfootwall.jpeg" alt="Sports &amp; Athletics" loading="lazy" decoding="async" />
								</div>
							</a>
							<div class="events-details sec-color ">
								<h4 class="event-title text-red-color"><a href="facilities.php?page=sports">Sports &amp;
										Athletics</a>
								</h4>
								<div class="event-meta">
									<span>Sports and physical education are necessary components of human
										development.Sports are conducted with a motive to develop good health,
										Companionship and to have a spirit...</span>
								</div>
								<div class="event-btn">
									<a href="facilities.php?page=sports">Read more <i
											class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
						<div class="event-item">
							<a href="facilities.php?page=computer-labs">
								<div class="event-img">
									<img src="images/2026/homeimages/computerlab.jpeg" alt="Computer Lab" loading="lazy" decoding="async" />
								</div>
							</a>
							<div class="events-details sec-color">
								<h4 class="event-title text-red-color "><a
										href="facilities.php?page=computer-labs">Computer Lab</a>
								</h4>
								<div class="event-meta">
									<span>In keeping pace with the technological progress and the importance of
										Information Technology, Brilliants' Convent has introduced Computer Aided
										Learning (CAL) in the school</span>
								</div>
								<div class="event-btn">
									<a href="facilities.php?page=computer-labs">Read more <i
											class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Events End -->

	<!-- Team Start -->
	<div id="rs-team" class="rs-team sec-spacer wow  ">
		<div class="container">
			<div class="sec-title mb-50 text-center">
				<h2>SCHOOL INCHARGES</h2>
			</div>
			<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
				data-autoplay-timeout="3000" data-smart-speed="1200" data-dots="true" data-nav="true"
				data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
				data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
				data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
				<div class="team-item">
					<div class="team-img">
						<img src="images/team/seema.jpg" alt="Ms. Seema Chawla" loading="lazy" decoding="async" />
						<div class="normal-text">
							<h3 class="team-name">Ms. Seema Chawla</h3>
							<span class="subtitle">Senior Incharge</span>
						</div>
					</div>
				</div>
				<div class="team-item">
					<div class="team-img">
						<img src="images/team/sunita.jpg" alt="Ms. Sunita Malhotra" loading="lazy" decoding="async" />
						<div class="normal-text">
							<h3 class="team-name">Ms. Sunita Malhotra</h3>
							<span class="subtitle">Primary Incharge</span>
						</div>
					</div>
				</div>
				<div class="team-item">
					<div class="team-img">
						<img src="images/team/nisha.jpg" alt="Ms. Nisha Gulwani" loading="lazy" decoding="async" />
						<div class="normal-text">
							<h3 class="team-name">Ms. Nisha Gulwani</h3>
							<span class="subtitle">Nursery Incharge</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team End -->

	<!-- Testimonial Start -->
	<div id="rs-testimonial" class="rs-testimonial sec-color sec-spacer wow  ">
		<div class="container">
			<div class="sec-title mb-20 text-center">
				<h2>WHAT PEOPLE SAY</h2>
			</div>
			<div class="row">
				<div class="col-md-3 p-0">
					<div class="voice-card-container">
						<a href="testimonials.php?page=STUDENT">
							<img alt="Student Voices" src="images/rectangle-27@2x.png" loading="lazy" decoding="async">
							<div class="voice-title-content voice-top">
								<div class="voice-title text-light">STUDENT</div>
								<div class="voice-subtitle text-light">voices</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 p-0">
					<div class="voice-card-container">
						<a href="testimonials.php?page=PARENT">
							<img alt="Parent Voices" class="FACULTY-height" src="images/2026/homeimages/parent.jpeg" loading="lazy" decoding="async">
							<div class="voice-title-content voice-middle">
								<div class="voice-title text-light">PARENT</div>
								<div class="voice-subtitle text-light">voices</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 p-0">
					<div class="voice-card-container  ">
						<a href="testimonials.php?page=FACULTY">
							<img alt="Faculty Voices" class="FACULTY-height" src="images/2026/homeimages/bhawna.jpg.jpeg" loading="lazy" decoding="async">
							<div class="voice-title-content voice-top">
								<div class="voice-title text-light">FACULTY</div>
								<div class="voice-subtitle text-light">voices</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 p-0">
					<div class="voice-card-container">
						<a href="testimonials.php?page=ALUMNI">
							<img alt="Alumni Voices" src="images/rectangle-30@2x.png" loading="lazy" decoding="async">
							<div class="voice-title-content voice-middle">
								<div class="voice-title text-light">ALUMNI</div>
								<div class="voice-subtitle text-light">voices</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial End -->



	<!-- Footer Start -->
	<footer id="rs-footer" class="bg1 rs-footer">
		<div class="container wow  ">
			<!-- Footer Address -->
			<div>
				<div class="row footer-contact-desc">
					<div class="col-md-4">
						<div class="contact-inner">
							<i class="fa fa-map-marker"></i>
							<h4 class="contact-title">Address</h4>
							<p class="contact-desc">
								Brilliants’ Convent Senior Secondary School<br>
								West Enclave Pitampura, Delhi-110034
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-inner">
							<i class="fa fa-phone"></i>
							<h4 class="contact-title">Phone Number</h4>
							<p class="contact-desc">
								+91-9821375278, +91-9953536647 <br>
								+91-9953536649
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-inner">
							<i class="fa fa-map-marker"></i>
							<h4 class="contact-title">Email Address</h4>
							<p class="contact-desc">
								bcs34@rediffmail.com<br>
								www.brilliantsconvent.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer Top -->
		<div class="footer-top wow  ">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12">
						<div class="about-widget">
							<img src="images/logo-footer.png" alt="Footer Logo" loading="lazy" decoding="async">
							<p>At Brilliants’ Convent, we believe that every child is born with a joyful responsibility
								to help it shine. We cherish the individuality of each student.</p>
							<p class="margin-remove"><a href="about_us.php?page=about-brilliant">Read more...</a></p>
						</div>
						<div style="padding-top: 15px;">
							<img src="images/fit.jpeg" alt="Fit India Logo" style="width: 50px;" loading="lazy" decoding="async">
							<img src="images/british_council.jpeg" alt="British Council Logo" style="width: 50px;" loading="lazy" decoding="async">
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<h5 class="footer-title">Quick links</h5>
						<ul class="sitemap-widget">
							<li class="active"><a href="index.php"><i class="fa fa-angle-right"
										aria-hidden="true"></i>Home</a></li>
							<li><a href="about_us.php?page=about-brilliant"><i class="fa fa-angle-right"
										aria-hidden="true"></i>About</a></li>
							<li><a href="admission.php?page=process"><i class="fa fa-angle-right"
										aria-hidden="true"></i>Admissions</a></li>
							<li><a href="academics.php?page=handbook"><i class="fa fa-angle-right"
										aria-hidden="true"></i>Hand Books</a></li>
							<li><a href="e-news.php" target="blank"><i
										class="fa fa-angle-right" aria-hidden="true"></i>E-Magazine</a></li>
							<li><a href="https://forms.gle/8zVDbJ6okJCXNQKq9"><i class="fa fa-angle-right"
										aria-hidden="true"></i>Alumni Forms</a></li>
							<li><a href="academics.php?page=examination-schedule"><i class="fa fa-angle-right"
										aria-hidden="true"></i>Examination Schedule</a></li>
							<li><a href="academics.php?page=holidays-homework"><i class="fa fa-angle-right"
										aria-hidden="true"></i>Holiday Homework</a></li>
							<li><a href="academics.php?page=calendar"><i class="fa fa-angle-right"
										aria-hidden="true"></i>Annual Calendar</a></li>
							<li><a href="events.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Events</a></li>
							<!--<li><a href="gallery.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Gallery</a>-->
							<li><a href="gallery-main.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Gallery</a>
							</li>
							<li><a href="mandatory-disclosure.php"><i class="fa fa-angle-right"
										aria-hidden="true"></i>Mandatory Disclosure</a></li>
							<!--<li><a href="notice.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Notice for Purchase of Books</a></li>-->
							 <li><a href="schoolpdf/Notice.pdf" target="_blank"><i class="fa fa-angle-right"
										aria-hidden="true"></i>Notice for Purchase of Books</a></li> 
										<li><a href="pdf/LIST-OF-SLFRC-MEMBERS.pdf" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i>List of SLFRC Members</a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<h5 class="footer-title">Location:</h5>
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d335531.42398849106!2d77.09640438071341!3d28.71750925895396!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03c12962ff25%3A0xddcc3f0c12a9b9d8!2sBrilliant&#39;s%20Convent%20Senior%20Secondary%20School!5e0!3m2!1sen!2sus!4v1707512741035!5m2!1sen!2sus"
									width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
									referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-share">
					<ul>
						<li><a href="https://www.facebook.com/share/17e459yxPb/" target="_blank"
								class="button--facebook"><i class="fa fa-facebook"></i></a></li>
						<!-- <li><a href="#" class="button--twitter"><i class="fa fa-twitter"></i></a></li>                 -->
						<li><a href="https://www.instagram.com/brilliants_convent?igsh=MTNubHJxNzV3NHZmZw=="
								target="_blank" class="button--instagram"><i class="fa fa-instagram"></i></a></li>
						<!-- <li><a href="#" class="button--linkedin"><i class="fa fa-linkedin"></i></a></li> -->
						<li><a href="https://youtube.com/@brilliantsconvent8685?si=OVroZi9lKVq9J41d" target="_blank"
								class="button--youtube"><i class="fa fa-youtube"></i></a></li>
						<!-- <li><a href="#" class="button--pinterest"><i class="fa fa-google-plus"></i></a></li> -->
					</ul>
				</div>
			</div>
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="copyright">
					<p>© 2026 <a href="#">Brilliant&#039;s Convent</a>. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->

	<!-- start scrollUp  -->
	<div id="scrollUp">
		<i class="fa fa-angle-up"></i>
	</div>

	<div class="bcs-right">
		<div class="social-share">
			<ul>
				<li><a href="https://www.facebook.com/share/17e459yxPb/" target="_blank" class="button--facebook"><i
							class="fa fa-facebook"></i></a></li>
				<!-- <li><a href="#" class="button--twitter"><i class="fa fa-twitter"></i></a></li> -->
				<li><a href="https://www.instagram.com/brilliants_convent?igsh=MTNubHJxNzV3NHZmZw==" target="_blank"
						class="button--instagram"><i class="fa fa-instagram"></i></a></li>
				<!-- <li><a href="#" class="button--linkedin"><i class="fa fa-linkedin"></i></a></li> -->
				<li><a href="https://youtube.com/@brilliantsconvent8685?si=OVroZi9lKVq9J41d" target="_blank"
						class="button--youtube"><i class="fa fa-youtube"></i></a></li>
				<!-- <li><a href="#" class="button--pinterest"><i class="fa fa-pinterest"></i></a></li> -->
			</ul>
		</div>
	</div>

	<!--<div class="bcs-left">-->
	<!--	<div class="data">-->
	<!--		<p><a href="#">Download Brochure</a></p>-->
	<!--	</div>-->
	<!--</div>-->

	<!-- popup form -->
	<div class="modal fade" id="techModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
		aria-labelledby="techModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-4 fw-bold" id="techModalLabel">Explore Our School</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<iframe width="100%" height="370"
						src="https://www.youtube.com/embed/xgT4705EX_U?si=1bru_jO3HvjanJjP" title="YouTube video player"
						frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					<!-- <iframe width="100%" height="415" src="https://www.youtube.com/watch?v=xgT4705EX_U"></iframe>  -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Popup Form .src -->

	<!-- modernizr js -->
	<script src="assets/js/modernizr-2.8.3.min.js"></script>
	<!-- jquery latest version -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- owl.carousel js -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- slick.min js -->
	<script src="assets/js/slick.min.js"></script>
	<!-- isotope.pkgd.min js -->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- imagesloaded.pkgd.min js -->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- wow js -->
	<script src="assets/js/wow.min.js"></script>
	<!-- counter top js -->
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- rsmenu js -->
	<script src="assets/js/rsmenu-main.js"></script>
	<!-- plugins js -->
	<script src="assets/js/plugins.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

	<!-- For Popup -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function() {
			$("#myModalpopup").modal('show');


			// Header scroll effect
			$(window).scroll(function() {
				if ($(this).scrollTop() > 50) {
					$('.premium-nav-wrapper').css('box-shadow', '0 10px 30px rgba(0,0,0,0.1)');
				} else {
					$('.premium-nav-wrapper').css('box-shadow', 'none');
				}
			});
		});
	</script>
	<!-- End  For Popup -->

	<!-- <script>
 $(document).ready(function(){
  $(document).bind("contextmenu",function(e){
  return false;
  });
});
</script> -->