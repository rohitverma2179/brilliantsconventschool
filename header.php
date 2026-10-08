<!-- <base href="https://www.brilliantsconvent.com/" /> -->
<?php
error_reporting(0);

if ($_REQUEST["meta_title"] == "") { ?>

	<title>Brilliants&#039; Convent</title>

<?php } else { ?>

	<title><?php print $_REQUEST["meta_title"]; ?></title>

<?php } ?>

<?php if ($_REQUEST["meta_desc"] != "") { ?>

	<meta name="description" content="<?php print $_REQUEST["meta_desc"]; ?>">

<?php } ?>
<!-- favicon -->
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
<link rel="icon" href="images/brilliants-convent-32x32.png" sizes="32x32">
<link rel="icon" href="images/brilliants-convent-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" href="images/brilliants-convent-180x180.png">
<meta name="msapplication-TileImage" content="images/brilliants-convent-270x270.png">
<!-- Google Fonts Preconnect for Safari/iOS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto+Condensed:wght@400;500;600;700&display=swap">
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
<?php if ($_REQUEST["link_cano"] == "") { ?>
	<link rel="canonical" href="https://www.brilliantsconvent.com/">
<?php } else { ?>
	<link rel="canonical" href="<?php print $_REQUEST["link_cano"]; ?>">
<?php } ?>
</head>

<body class="home1">
	<!--Preloader area start here-->
	<?php

	$current_url = $_SERVER['REQUEST_URI'];

	if ($current_url == "/testimonials.php?page=PARENT" || $current_url == "/testimonials.php?page=STUDENT") {
	} else { ?>
		<div class="book_preload">
			<div class="book">
				<div><img src="images/bcs-loader.gif" alt="Brilliants Convent"></div>
			</div>
		</div>
	<?php } ?>
	<!--Preloader area end here-->
	<?php
	include('config.php');

	$mid = $_GET['page'];

	if ($mid == "affiliation" || $mid == "mission-vision" || $mid == "our-management" || $mid == "aims-objective" || $mid == "school-rules" || $mid == "infrastructure" || $mid == "song" || $mid == "about-brilliant" || $mid == "timings" || $mid == "uniform") {
		$mid = '2';
	} else if ($mid == "faculty" || $mid == "calendar" || $mid == "curriculum" || $mid == "handbook" || $mid == "workshops-Webinar" || $mid == "examination-schedule" || $mid == "holidays-homework" || $mid == "result" || $mid == "10" || $mid == "12" || $mid == "bcs-juniors" || $mid == "slc") {
		$mid = '3';
	} else if ($mid == "facilities" || $mid == "science-labs" || $mid == "computer-labs" || $mid == "sports" || $mid == "library" || $mid == "yoga" || $mid == "other-facilities" || $mid == "smartboards" || $mid == "transport" || $mid == "taekwondo" || $mid == "abacus") {
		$mid = '4';
	} else if ($mid == "parents-connect") {
		$mid = '5';
	} else if ($mid == "clubs" || $mid == "robotics-club" || $mid == "eco-club" || $mid == "visual-arts-club" || $mid == "sports-club" || $mid == "interact-club" || $mid == "science-club") {
		$mid = '6';
	} else if ($mid == "blogs") {
		$mid = '7';
	} else if ($mid == "contact") {
		$mid = '8';
	} else if ($mid == "admission-inquiry" || $mid == "process" || $mid == "fees" || $mid == "registration") {
		$mid = '9';
	} else {
		$mid = '1';
	} ?>
	<!--Full width header Start-->
	<div class="full-width-header">
		<!--Header Start-->
		<header id="rs-header">
			<!-- Header Top Start -->
			<div class="menu-sticky">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container-fluid">
						<a class="navbar-brand logo-w" href="index.php"><img src="images/BrilliantsConventlogo.png"
								alt="Brilliants Convent"></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
							data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
							<ul class="navbar-nav mb-lg-0 ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="index.php">HOME</a>
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
												href="facilities.php?page=science-labs">Science Lab</a></li>
										<li><a class="dropdown-item <?php echo $idf == '2' ? 'active' : '' ?>"
												href="facilities.php?page=computer-labs">Computer Lab</a></li>
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
									<a class="nav-link <?php echo $mid == '8' ? 'active' : '' ?>"
										href="contact_us.php?page=contact">CONTACT US</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php echo $mid == '5' ? 'active' : '' ?>"
										href="parents_connect.php?page=parents-connect">PARENTS CONNECT</a>
								</li>
							</ul>
							<div class="d-flex pe-3">
								<div class="btn-group" role="group">
									<button id="btnGroupDrop1" type="button"
										class="btn btn-danger dropdown-toggle <?php echo $mid == '9' ? 'active' : '' ?>"
										data-bs-toggle="dropdown" aria-expanded="false">
										<span class="blink">Admission Open</span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
										<li><a class="dropdown-item <?php echo $idad == '4' ? 'active' : '' ?>"
												href="admission.php?page=admission-inquiry">Admission Inquiry</a></li>
										<li><a class="dropdown-item <?php echo $idad == '3' ? 'active' : '' ?>"
												href="admission.php?page=registration">Registration</a></li>
										<li><a class="dropdown-item <?php echo $idad == '1' ? 'active' : '' ?>"
												href="admission.php?page=process">Process</a></li>
										<li><a class="dropdown-item <?php echo $idad == '2' ? 'active' : '' ?>"
												href="admission.php?page=fees">Fees</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>