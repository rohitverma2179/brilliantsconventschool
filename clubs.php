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
  $_REQUEST["meta_title"] = "Clubs :: " . $page;

  $_REQUEST["meta_desc"] = "Brilliants&#039; Convent Senior Secondary School";

  $_REQUEST["link_cano"] = "https://www.brilliantsconvent.com/facilities.php";

  if ($page == "robotics-club") {
    $b_banner = "robotics_club_banner_1.jpg";
    $b_title = "AI & Robotics Club";
    $p_img = "ai_robotics_club.jpg";
    $idc = "1";
  }
  if ($page == "eco-club") {
    $b_banner = "eco_club_banner.jpg";
    $b_title = "Eco & Sustainability Club";
    $p_img = "eco_club.jpg";
    $idc = "2";
  }
  if ($page == "visual-arts-club") {
    $b_banner = "virtualart_club_banner.jpg";
    $b_title = "Visual & Performing Arts Club";
    $p_img = "visual_arts_club.jpg";
    $idc = "3";
  }
  if ($page == "sports-club") {
    $b_banner = "sports_club_banner.jpg";
    $b_title = "Sports & Wellness Club";
    $p_img = "sports_club.jpg";
    $idc = "4";
  }
  if ($page == "interact-club") {
    $b_banner = "intract-club-banner.jpg";
    $b_title = "Language & Literary Club";
    $p_img = "intract-club.jpg";
    $idc = "5";
  }
  if ($page == "science-club") {
    $b_banner = "intract-club-banner.jpg";
    $b_title = "Science Club";
    $idc = "6";
  }
  ?>
  <title>Clubs :: <?php echo $b_title; ?></title>

  <?php include_once("header.php"); ?>

  <!-- Header Top End -->
  </header>
  <!--Header End-->
  </div>
  <!--Full width header End-->

  <!-- Slider Area Start -->
  <!-- <div id="rs-slider" class="slider-overlay-2">
    <div id="home-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="0" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
      <div class="item active">
        <img src="images/club/<?php echo $b_banner; ?>">
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
  </div> -->

  <div id="rs-slider" class="slider-overlay-2">
		<div class="item active">
			<img src="images/club/<?php echo $b_banner; ?>" style="width: 100%;">
			<div class="slide-content">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container text-center">
							<h1 class="slider-title"><?php echo $b_title; ?></h1>
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
            <li class="list-group-item title text-uppercase" aria-current="true">Clubs</li>
            <li class="list-group-item list-group-item-action <?php echo $idc == '1' ? 'active' : '' ?>"><a href="clubs.php?page=robotics-club">AI & Robotics Club</a></li>
            <li class="list-group-item list-group-item-action <?php echo $idc == '2' ? 'active' : '' ?>"><a href="clubs.php?page=eco-club">Eco & Sustainability Club</a></li>
            <li class="list-group-item list-group-item-action <?php echo $idc == '3' ? 'active' : '' ?>"><a href="clubs.php?page=visual-arts-club">Visual & Performing Arts Club</a></li>
            <li class="list-group-item list-group-item-action <?php echo $idc == '4' ? 'active' : '' ?>"><a href="clubs.php?page=sports-club">Sports & Wellness Club</a></li>
            <li class="list-group-item list-group-item-action <?php echo $idc == '5' ? 'active' : '' ?>"><a href="clubs.php?page=interact-club">Language & Literary Club</a></li>
            <li class="list-group-item list-group-item-action <?php echo $idc == '6' ? 'active' : '' ?>"><a href="clubs.php?page=science-club">Science Club</a></li>
          </ul>
        </div>
        <div class="col-lg-9 col-md-12 bcs-card">
          <div class="card">
            <?php if ($page == "visual-arts-club") { ?>
              <h5 class="card-header text-uppercase"><?php echo $b_title; ?></h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 bcs-bullets">
                    <h5>“Express. Create. Inspire.”</h5>
                    <p class="card-text text-justify">This club ignites creativity and self-expression in students by immersing them in the world of visual and performing arts. It allows them to explore various forms of artistic expression—music, dance, painting, and craft—helping them develop their imagination, confidence, and cultural sensitivity. The club nurtures the aesthetic senses while teaching discipline, collaboration, and emotional expression.</p>
                    <p class="card-text fw-bold">Key Activities:</p>
                    <ul>
                      <li>Art exhibitions and annual cultural showcases</li>
                      <li>Classical, folk, and contemporary dance workshops</li>
                      <li>Music (vocal and instrumental) training and recitals</li>
                      <li>Poster-making and craft sessions</li>
                      <li>Inter-house and inter-school art & culture competitions</li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php } ?>
            <!-- <img src="images/club/<?php echo $p_img; ?>"> -->
            <?php if ($page == "robotics-club") { ?>
              <h5 class="card-header text-uppercase"><?php echo $b_title; ?></h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 bcs-bullets">
                    <h5>“Innovate. Code. Transform.”</h5>
                    <p class="card-text text-justify">This futuristic club prepares students to thrive in the digital age by exploring the exciting fields of robotics, coding, and artificial intelligence. It promotes logical thinking, design innovation, and ethical tech usage. Students gain hands-on experience with programming, sensor technology, and automation systems through real-world projects.</p>
                    <p class="card-text fw-bold">Key Activities:</p>
                    <ul>
                      <li>Robot design and coding challenges</li>
                      <li>AI-based simulations and real-world application projects</li>
                      <li>Design thinking and problem-solving workshops</li>
                      <li>Showcasing projects during Tech Fests</li>
                      <li>Guest lectures and workshops by professionals </li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php } ?>
            <?php if ($page == "science-club") { ?>
              <h5 class="card-header text-uppercase"><?php echo $b_title; ?></h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 bcs-bullets">
                    <h5>“Observe. Question. Discover.”</h5>
                    <p class="card-text text-justify">The Science Club fosters curiosity and a scientific approach to life by encouraging students to experiment, analyze, and innovate. Students explore the wonders of physics, chemistry, biology, and environmental science through interactive learning and problem-solving. It aims to develop scientific thinking, sustainability awareness, and innovation skills.</p>
                    <p class="card-text fw-bold">Key Activities:</p>
                    <ul>
                      <li>Live experiments and hands-on STEM demonstrations</li>
                      <li>Working model and exhibit preparation for science fairs</li>
                      <li>Science quizzes, Olympiads, and field research</li>
                      <li>Visits to science museums and research labs</li>
                      <li>DIY projects and eco-innovation challenges</li>
                      <li>Observing natural phenomena and conducting surveys</li>
                      <li>Celebrations of National Science Day</li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php } ?>
            <?php if ($page == "sports-club") { ?>
              <h5 class="card-header text-uppercase"><?php echo $b_title; ?></h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 bcs-bullets">
                    <h5>“Play Hard. Stay Fit. Lead Strong.”</h5>
                    <p class="card-text text-justify">The Sports & Wellness Club promotes holistic development through physical activity, health awareness, and emotional resilience. It nurtures teamwork, discipline, perseverance, and leadership through sports training and fitness programs.</p>
                    <p class="card-text fw-bold">Key Activities:</p>
                    <ul>
                      <li>Regular coaching in cricket, football, basketball, badminton, etc.</li>
                      <li>Intra- and inter-school tournaments</li>
                      <li>Yoga, Zumba, and mindfulness sessions</li>
                      <li>Annual Sports Meet with athletics and fun games</li>
                      <li>Fitness and wellness challenges</li>
                      <li>Health talks on nutrition, hygiene, and mental well-being</li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php } ?>
            <?php if ($page == "interact-club") { ?>
              <h5 class="card-header text-uppercase"><?php echo $b_title; ?></h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 bcs-bullets">
                    <h5>“Words That Inspire. Stories That Connect.”</h5>
                    <p class="card-text text-justify">Celebrating the beauty and diversity of language, this club hones reading, writing, speaking, and listening skills in both Hindi and English languages. It cultivates creative expression and critical thinking, preparing students for both academic and real-world communication.</p>
                    <p class="card-text fw-bold">Key Activities:</p>
                    <ul>
                      <li>Debates, declamations, and group discussions</li>
                      <li>Creative writing workshops and poetry readings</li>
                      <li>Dramatized reading of plays and monologues</li>
                      <li>Contribution to the school magazine and newsletters</li>
                      <li>Multilingual storytelling sessions</li>
                      <li>Quiz competitions on grammar, vocabulary, and literature</li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php } ?>
            <?php if ($page == "eco-club") { ?>
              <h5 class="card-header text-uppercase"><?php echo $b_title; ?></h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12 bcs-bullets">
                    <h5>“Act Green. Think Clean. Live Responsible.”</h5>
                    <p class="card-text text-justify">Dedicated to creating environmentally conscious citizens, this club encourages students to take action for the planet. It aligns with the UN Sustainable Development Goals (SDGs), especially in areas like clean energy, climate action, and responsible consumption.</p>
                    <p class="card-text fw-bold">Key Activities:</p>
                    <ul>
                      <li>Tree plantation and school garden maintenance</li>
                      <li>Waste segregation and composting drives</li>
                      <li>Water and energy conservation campaigns</li>
                      <li>Poster and slogan-making for environmental awareness</li>
                      <li>Upcycling and eco-craft projects</li>
                      <li>Cleanliness drives and campus audits</li>
                      <li>Observance of World Environment Day, Earth Day, etc.</li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php } ?>

          </div>

        </div>
      </div>


    </div>
  </div>
  <!-- About Us End -->

  <!-- ======= Footer ======= -->
  <?php include_once("footer.php"); ?>