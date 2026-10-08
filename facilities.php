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

  $_REQUEST["meta_title"] = "Facilities :: " . $page;

  $_REQUEST["meta_desc"] = "Brilliants&#039; Convent Senior Secondary School";

  $_REQUEST["link_cano"] = "https://www.brilliantsconvent.com/facilities.php";

  if ($page == "science-labs") {
    $b_banner = "sciencelabs.jpg";
    $b_title = "Science Lab";
    $idf = "1";
  }
  if ($page == "computer-labs") {
    $b_banner = "941.JPG";
    $b_title = "Computer Lab";
    $idf = "2";
  }
  if ($page == "sports") {
    $b_banner = "sports.jpg";
    $b_title = "Sports";
    $idf = "3";
  }
  if ($page == "library") {
    $b_banner = "library.jpg";
    $b_title = "Library";
    $idf = "4";
  }
  if ($page == "yoga") {
    $b_banner = "yoganew.jpg";
    $b_title = "Yoga";
    $idf = "5";
  }
  if ($page == "other-facilities") {
    $b_banner = "other-facilities.jpg";
    $b_title = "Other Facilities";
    $idf = "6";
  }
  if ($page == "smartboards") {
    $b_banner = "smart-class.jpg";
    $b_title = "Smart Boards";
    $idf = "7";
  }
  if ($page == "transport") {
    $b_banner = "transportnew.jpg";
    $b_title = "Transport";
    $idf = "8";
  }
  if ($page == "taekwondo") {
    $b_banner = "taekwandoo.jpg";
    $b_title = "Taekwondo";
    $idf = "9";
  }
  if ($page == "abacus") {
    $b_banner = "abacus.JPG";
    $b_title = "Abacus";
    $idf = "10";
  }

  include_once("header.php"); ?>
  <!-- Header Top End -->
  </header>
  <!--Header End-->
  </div>
  <!--Full width header End-->

  <!-- Slider Area Start -->
  <!-- <div id="rs-slider" class="slider-overlay-2">
    <div id="home-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="0" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
      <div class="item active">
        <img src="images/facility/<?php echo $b_banner; ?>">
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
			<img src="images/facility/<?php echo $b_banner; ?>" style="width: 100%;">
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

  <!-- Start Facilities -->
  <div class="rs-about sec-spacer wow fadeInUp" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 bcs-list-group d-none d-lg-block">
          <ul class="list-group">
            <li class="list-group-item title text-uppercase" aria-current="true">Facilities</li>
            <li class="list-group-item list-group-item-action <?php echo $idf == '1' ? 'active' : '' ?>">
              <a href="facilities.php?page=science-labs">Science Lab</a>
            </li>
            <li class="list-group-item list-group-item-action <?php echo $idf == '2' ? 'active' : '' ?>">
              <a href="facilities.php?page=computer-labs">Computer Lab</a>
            </li>
            <li class="list-group-item list-group-item-action <?php echo $idf == '3' ? 'active' : '' ?>">
              <a href="facilities.php?page=sports">Sports</a>
            </li>
            <li class="list-group-item list-group-item-action <?php echo $idf == '4' ? 'active' : '' ?>">
              <a href="facilities.php?page=library">Library</a>
            </li>
            <li class="list-group-item list-group-item-action <?php echo $idf == '5' ? 'active' : '' ?>">
              <a href="facilities.php?page=yoga">Yoga</a>
            </li>
            <li class="list-group-item list-group-item-action <?php echo $idf == '6' ? 'active' : '' ?>">
              <a href="facilities.php?page=other-facilities">Other Facilities</a>
            </li>
            <li class="list-group-item list-group-item-action <?php echo $idf == '7' ? 'active' : '' ?>">
              <a href="facilities.php?page=smartboards">Smart Boards</a>
            </li>
            <li class="list-group-item list-group-item-action <?php echo $idf == '8' ? 'active' : '' ?>">
              <a href="facilities.php?page=transport">Transport</a>
            </li>
            <li class="list-group-item list-group-item-action <?php echo $idf == '9' ? 'active' : '' ?>">
              <a href="facilities.php?page=taekwondo">Taekwondo</a>
            </li>
            <li class="list-group-item list-group-item-action <?php echo $idf == '10' ? 'active' : '' ?>">
              <a href="facilities.php?page=abacus">Abacus</a>
            </li>

          </ul>
        </div>
        <div class="col-lg-9 col-md-12 bcs-card">
          <div class="card acd-card">
            <h5 class="card-header text-uppercase"><?php echo $b_title; ?></h5>
            <div class="card-body">
              <!-- Start science-labs -->
              <?php if ($page == "science-labs") { ?>
                <div class="row">
                  <div class="col-lg-12">
                    <p>The school has spacious and well-equipped laboratories for Physics, Chemistry, and Biology. Students are imparted practical education under the watchful eyes of instructors. The laboratory experience is designed to develop students' interest and provide a better understanding of their respective subjects.</p>
                    <p><strong>Physics Lab: </strong>The Physics lab is fully equipped with apparatus to carry out experiments and investigatory projects related to mechanics, light, magnetism, electricity, heat, and optics.</p>

                    <p><strong>Biology Lab: </strong>The Biology lab emphasizes the connection between Biology and real life, highlighting the use of biological discoveries and innovations in everyday life. Equipment such as preserved specimens, microscopes for viewing prepared slides, models, and charts are provided to students for practical experience under the guidance of teachers.</p>
                    <p>
                      <strong>Chemistry Lab: </strong>
                      Chemistry is a subject where practical knowledge holds more importance than theory. Students are given first-hand experience of various equations involving chemical reactions, which are better understood when observed in action. As students work with potentially hazardous chemicals, a well-qualified and experienced instructor is appointed to assist the teacher during experiments, ensuring safety and proper guidance.
                    </p>
                  </div>
                </div>

              <?php } ?>
              <!-- End science-labs -->
              <!-- Start computer-labs -->
              <?php if ($page == "computer-labs") { ?>
                <p class="card-text text-justify">In today’s digital age, Brilliants’ Convent ensures students stay ahead by seamlessly integrating Computer Aided Learning (CAL) into the academic curriculum. The school boasts two state-of-the-art computer labs—separately designed for Primary and Senior sections—equipped with the latest hardware and educational software. These labs empower students with essential digital skills, making learning more interactive, engaging, and future-ready.</p>
              <?php } ?>

              <!-- End computer-labs -->
              <!-- Start sports -->

              <?php if ($page == "sports") { ?>
                <p class="card-text text-justify">At Brilliants’ Convent, we believe that a healthy body is the foundation of a healthy mind. Our dynamic sports culture inspires students to stay active, build resilience, and embrace the spirit of teamwork and discipline.
                  <br><br>
                  With a state-of-the-art sports arena, the school offers dedicated courts and play areas for Badminton, Basketball, Volleyball, Throw Ball, and Cricket, including Box Cricket. We are also proud to introduce facilities for the fast-emerging sport of Pickle Ball, adding a fresh dimension to our sporting activities.
                  <br><br>
                  Indoor games such as Chess, Carrom, Table Tennis, and Skating ensure year-round engagement, enhancing agility, focus, and strategic thinking in a fun and inclusive setting.
                  <br><br>
                  At Brilliants’ Convent, sports are not just about winning—they’re about growing, leading, and becoming the best version of oneself.
                </p>
              <?php } ?>

              <!-- End sports -->
              <!-- Start library -->

              <?php if ($page == "library") { ?>
                <div class="row">
                  <div class="col-lg-12">
                    <p class="card-text text-justify">Our richly resourced modern library is a sanctuary for curious minds. With an impressive collection of academic books, reference materials, periodicals, newspapers, and multimedia resources, it serves as a hub of knowledge and inspiration. A dedicated reading room offers a peaceful environment for self-study, while senior students benefit from special zones designed for focused academic work. Guided by a professional librarian, students are encouraged to explore, research, and develop a lifelong love for reading.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-12 pt-5 wow fadeInUp" data-wow-delay="0.8s"><img src="images/facility/library1.JPG" class="img-fluid rounded-3" alt="Library"></div>
                  <div class="col-md-4 col-sm-12 pt-5 wow fadeInUp" data-wow-delay="0.8s"><img src="images/facility/library2.JPG" class="img-fluid rounded-3" alt="Library"></div>
                  <div class="col-md-4 col-sm-12 pt-5 wow fadeInUp" data-wow-delay="0.8s"><img src="images/facility/library3.JPG" class="img-fluid rounded-3" alt="Library"></div>
                </div>
              <?php } ?>

              <!-- End library -->
              <!-- Start yoga -->

              <?php if ($page == "yoga") { ?>
                <h4>Yoga and Wellness:</h4>
                <p class="card-text text-justify">Understanding the importance of holistic well-being, Brilliants’ Convent incorporates Yoga and Meditation into the school routine. Certified instructors conduct regular sessions and workshops that enhance students’ focus, emotional balance, and inner calm. These practices not only improve concentration and academic performance but also instill mindfulness, leading to overall personal development.</p>
              <?php } ?>

              <!-- End yoga -->
              <!-- Start other-facilities -->

              <?php if ($page == "other-facilities") { ?>
                <h4>WORK EDUCATION:</h4>
                <p class="card-text text-justify">Work education is provided to develop sufficient psychomotor skills and confidence among students for entering the world of work. It further enables our children to discover their interests and aptitudes, which would be helpful in selecting suitable courses of study and career options later on.</p>

                <h4>MEDICAL FACILITIES:</h4>
                <p class="card-text text-justify">A healthy mind needs a healthy body. Hence, the school ensures the well-being of children by providing all necessary medical facilities in a well-equipped medical room. In addition, our students are examined by eminent doctors twice a year.</p>

                <h4>INTERDISCIPLINARY PROJECTS:</h4>
                <p class="card-text text-justify">Project-Based Learning (PBL) is employed to describe phenomena or events that are multidimensional. It focuses on solving complex problems, proposing new interpretations, and creating innovative products. This approach allows students to integrate multiple disciplines, accomplish tasks collaboratively, and develop a deeper understanding of interrelated concepts.</p>

                <h4>LIFE SKILL EDUCATION:</h4>
                <p class="card-text text-justify">Life skills education is provided to nurture learners who are equipped with accurate, objective, and scientific knowledge, along with the right attitude and values that enhance life skills.</p>

                <h4>PTM/OPEN HOUSE:</h4>
                <p class="card-text text-justify">PTMs and Open Houses are conducted in the school from time to time. These sessions provide an opportunity for parents to share their concerns, clarify their queries, and understand the examination procedures. They also help parents to strategize effectively for their wards' academic success and aspirations.</p>

                <h4>ALUMNI:</h4>
                <p class="card-text text-justify">While our experiential curriculum has inspired students to explore their passions and interests in various domains, we value alumni participation as a way to bring their experiences and energy back into the school community. We actively encourage alumni to stay involved and contribute, thus helping to perpetuate a positive cycle of mentorship and inspiration.</p>

                <h4>OLYMPIADS/INTER-SCHOOL/ZONAL COMPETITIONS:</h4>
                <p class="card-text text-justify">We organize Olympiads and Inter-School/Zonal competitions from time to time to assess our students’ intellectual and creative abilities. These platforms instill a renewed sense of self-belief and confidence while encouraging them to seek knowledge from diverse sources.</p>

                <h4>SCHEME OF EXAMINATION AND PROMOTION RULES:</h4>
                <p class="card-text text-justify">To evaluate whether the educational objectives are being effectively achieved, the school follows a well-structured scheme of examination and promotion rules. These are aligned with the evaluation framework developed and duly recognized by CBSE.</p>
              <?php } ?>

              <!-- End other-facilities -->
              <!-- Start Smart Boards -->

              <?php if ($page == "smartboards") { ?>
                <p class="card-text text-justify">Each classroom is equipped with smart boards and audio-visual aids, creating an interactive and engaging learning environment that caters to diverse learning styles. These smart boards enable teachers to seamlessly integrate multimedia content and make live annotations, bringing lessons to life in a dynamic way. This modern teaching approach bridges the gap between traditional methods and digital innovation, equipping our students with the skills needed for a technology-driven future.</p>
              <?php } ?>

              <!-- End Smart Boards -->
              <!-- Start transport -->

              <?php if ($page == "transport") { ?>
                <p class="card-text text-justify">Brilliants’ Convent provides a well-organized and safe transport facility with its own fleet of CNG buses, operated by experienced drivers and supervised by responsible conductors. The school places utmost importance on the safety and comfort of its students during their daily commute.
                  <br><br>
                  To ensure a secure journey, every bus is equipped with GPS tracking systems, enabling real-time monitoring of each vehicle. Every route is supervised by responsible teachers who escort the students, ensuring a safe and pleasant experience.
                  <br><br>
                  Our transport department is always ready to assist you with any queries regarding your child’s commute. We are just a call away.
                </p>
                <h4>Transport Rules:</h4>
                <ol>
                  <li>No student will be allowed to travel by school bus without an Identity Card.</li>
                  <li>Students using the school bus are expected to arrive at the stop at least five minutes before the arrival time of the bus.</li>
                  <li>The buses will not wait for any late comer.</li>
                  <li>In case of an emergency such as the following, the school will not be able to run the bus or compensate:
                    <ul style="list-style:none;">
                      <li>(a) Sudden breakdown of the vehicle.</li>
                      <li>(b) Sudden sickness of the driver.</li>
                      <li>(c) Any other unavoidable incident.</li>
                    </ul>
                  </li>
                  <li>No student shall be allowed to use the School transport one way. In every case, a transport fee will be charged for both ways.</li>
                  <li>Temporary change of routes for a few days cannot be allowed under any circumstances.</li>
                  <li>All the students must occupy seats immediately after boarding their buses.</li>
                  <li>The drivers are authorized to stop buses at the designated stop only, unless otherwise directed by the bus teacher.</li>
                  <li>When the bus is in motion, students should not move around or extend any part of their body outside the bus.</li>
                  <li>Discarding trash or food, either inside or outside the bus, is not permitted.</li>
                  <li>Unruly behavior like shrieking and shouting is strictly prohibited. Courteous behavior is expected all the time.</li>
                  <li>No student should act violently to divert the attention of the driver.</li>
                  <li>The teacher on route duty must ensure the maintenance of discipline and safety of the students.</li>
                  <li>Bus facilities cannot be withdrawn in between the academic session.</li>
                  <li>It is mandatory to pay an eleven-month Conveyance Fee once opted for the school transport.</li>
                </ol>

              <?php } ?>

              <!-- End transport -->
              <!-- Start taekwondo -->

              <?php if ($page == "taekwondo") { ?>
                <p class="card-text text-justify">Taekwondo classes at our school empowers student with self-defense skills while nurturing respect, focus, and inner strength.
                </p>
              <?php } ?>

              <!-- End taekwondo -->
              <!-- Start abacus -->

              <?php if ($page == "abacus") { ?>
                <p class="card-text text-justify">Our Abacus classes make learning Mathematics exciting and enjoyable! Children develop lightning-fast calculation skills, sharper memory, and stronger focus—all while having fun.It also gives our students the power to calculate with confidence and speed!</p>
              <?php } ?>

              <!-- End abacus -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Facilities -->

  <!-- ======= Footer ======= -->
  <?php include_once("footer.php"); ?>